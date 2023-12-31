<?php
/**
* Add in CSS overrides for UI elements
*
* @package ResourceSpace
*/

include_once "../include/db.php";

$k = getval('k', '');
if((is_array($k) || trim($k) === '') && getval('noauth','') != true) 
    {
    include '../include/authenticate.php';
    }

header("Content-type: text/css");

global $header_colour_style_override, $header_link_style_override, $home_colour_style_override, $collection_bar_background_override,
$collection_bar_foreground_override, $button_colour_override;

$browse_on = has_browsebar();

# Override the header background colour
if ((isset($header_colour_style_override) && $header_colour_style_override != ''))
    {
    ?>
    #Header, #OverFlowLinks, #LoginHeader
        {
        background: <?php echo $header_colour_style_override; ?>;
        }
    <?php
    }

# Override the header link colour
if ((isset($header_link_style_override) && $header_link_style_override != ''))
    {
    ?>

    #HeaderNav1, #HeaderNav1 li a, #HeaderNav2 li a, #HiddenLinks li.HeaderLink a
        {
        color: <?php echo $header_link_style_override; ?>;
        }
    #HeaderNav2 li
        {
        border-color: <?php echo $header_link_style_override; ?>;
        }
    #HeaderNav1 li.UploadButton a 
        {
        color: #FFFFFF;
        }
    
    <?php
    }

# Override home UI elements colour (intro text, dash tiles, simple search)
if ((isset($home_colour_style_override) && $home_colour_style_override != ''))
    {
    ?>
    #SearchBox, #HomeSiteText.dashtext, .HomePanelIN, #BrowseBar, #BrowseBarTab, #NewsPanel.BasicsBox, #remote_assist #SearchBoxPanel
        {
        background: <?php echo $home_colour_style_override; ?>;
        }
    <?php
    }

# Override the collection bar background colour
if ((isset($collection_bar_background_override) && $collection_bar_background_override != ''))
    {
    ?>
    .CollectBack
        {
        background: <?php echo $collection_bar_background_override; ?>;
        }
    <?php
    }

/**
 * Override the collection bar foreground colour
 * 
 * optgroup and option background-color set to #474747 for consistency across platforms as 
 * Firefox/Windows does not recognise rgb() colour properties for optgroup element
 * */

if ((isset($collection_bar_foreground_override) && $collection_bar_foreground_override != ''))
    {
    ?>
    .CollectionPanelShell, #CollectionDiv select
        {
        background-color: <?php echo $collection_bar_foreground_override; ?>;
        }    
    
    #CollectionDiv option, #CollectionDiv optgroup 
        {
        font-style:normal;
        background-color: #474747;
        color: #fff;
        }    

    .ui-layout-resizer
        {
        background: <?php echo $collection_bar_foreground_override; ?>;
        }
    <?php
    }

if ($browse_on)
    {
    ?>
    #CentralSpaceContainer
        {
        padding-left: 30px;
        }   
    #Footer
        {
        clear: both;
        } 

    <?php
    }

// Override the button colour
if ((isset($button_colour_override) && $button_colour_override != ''))
    {
    ?>
    button,
    input[type=submit],
    input[type=button],
    .RecordPanel .RecordDownloadSpace .DownloadDBlend a,
    .UploadButton a,
    .uppy-StatusBar-actionBtn,
    .uppy-Dashboard-browse,
    .uppy-StatusBar.is-waiting .uppy-StatusBar-actionBtn--upload,
    .uppy-StatusBar.is-waiting .uppy-StatusBar-actionBtn--upload:hover,
    .uppy-DashboardContent-back, .uppy-DashboardContent-back:focus,
    .uppy-DashboardContent-addMore, .uppy-DashboardContent-addMore:focus {
        background-color: <?php echo $button_colour_override; ?>;
    }
    <?php
    }

// Apply user uploaded custom font
if (isset($custom_font) && $custom_font != '')
    {
    $custom_font_url = str_replace('[storage_url]', $storageurl, $custom_font);
    ?>
    @font-face {
    font-family: "custom_font";
    src: url("<?php echo $custom_font_url; ?>");
    }
    h1,h2,h3,h4,h5,h6,.Title {font-family: custom_font, Arial, Helvetica, sans-serif;}
    .ui-widget input, .ui-widget select, .ui-widget textarea, .ui-widget button,.ui-widget, body, input, textarea, select, button {font-family: custom_font, Arial, Helvetica, sans-serif;}
    <?php
    }