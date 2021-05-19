<?php
include "../include/db.php";


# Handle the callback from PayPal and mark the collection items as purchased.

// Read the post from PayPal
$req = 'cmd=_notify-validate';
foreach ($_POST as $key => $value)
		{
		$value = urlencode($value); $req .= "&$key=$value";
		}


debug("PAYPAL CALLBACK BEFORE FSOCKOPEN");


# Send this request back to PayPal for verification.
$header = "";
$header .= "POST /cgi-bin/webscr HTTP/1.0\r\n";
$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
$header .= "Content-Length: " . strlen($req) . "\r\n\r\n";

// TEMP TEMP
// $fp = fsockopen ('www.paypal.com', 80, $errno, $errstr, 30);
$fp = fsockopen ('www.sandbox.paypal.com', 80, $errno, $errstr, 30);
// TEMP TEMP


// Process validation from PayPal
if (!$fp)
	{ // HTTP ERROR
	
	debug("PAYPAL CALLBACK HTTP ERROR=".$errno." - ".$errstr);
	
	echo "HTTP error.";
	}
else
	{

	debug("PAYPAL CALLBACK NO HTTP ERROR");


	// NO HTTP ERROR
	fputs ($fp, $header . $req);
	while (!feof($fp))
		{
		$res = fgets ($fp, 1024);		

		debug("PAYPAL CALLBACK RESPONSE=".$res);

		if (strcmp($res, "VERIFIED") == 0)
			{
			echo "Verified.";
			
			// Mark these items as bought.
			$emailconfirmation=getvalescaped("emailconfirmation","");
			payment_set_complete(getvalescaped("custom",""),$emailconfirmation);
			
			hook("payment_complete");
			} 
		else
			{
			echo "Not verified";
			}
		}
	}

?>