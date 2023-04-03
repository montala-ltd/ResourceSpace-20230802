<?php


$lang["museumplus_configuration"]='MuseumPlus konfigurasjon.';
$lang["museumplus_top_menu_title"]='MuseumPlus: ugyldige tilknytninger.';
$lang["museumplus_api_settings_header"]='API-detaljer.';
$lang["museumplus_host"]='Vert (when referring to a computer or server that is hosting a website or application)';
$lang["museumplus_host_api"]='API-vert (kun for API-kall; vanligvis det samme som ovenfor)';
$lang["museumplus_application"]='Søknadsnavn.';
$lang["user"]='Bruker';
$lang["museumplus_api_user"]='Bruker';
$lang["password"]='Passord';
$lang["museumplus_api_pass"]='Passord';
$lang["museumplus_RS_settings_header"]='ResourceSpace innstillinger.';
$lang["museumplus_mpid_field"]='Metadatafelt brukt til å lagre MuseumPlus-identifikatoren (MpID)';
$lang["museumplus_module_name_field"]='Metadatafelt som brukes til å holde modulnavnet for hvilket MpID er gyldig. Hvis det ikke er satt, vil programtillegget falle tilbake til konfigurasjonen for "Object"-modulen.';
$lang["museumplus_secondary_links_field"]='Metadatafelt brukt til å holde sekundære lenker til andre moduler. ResourceSpace vil generere en MuseumPlus-URL for hver av lenkene. Lenkene vil ha en spesiell syntaksformat: modulnavn:ID (f.eks. "Object:1234").';
$lang["museumplus_object_details_title"]='MuseumPlus detaljer.';
$lang["museumplus_script_header"]='Skriptinnstillinger';
$lang["museumplus_last_run_date"]='<div class="Question">
    <label>
        <strong>Skript sist kjørt</strong>
    </label>
    <input name="script_last_ran" type="text" value="%script_last_ran" disabled style="width: 420px;">
</div>
<div class="clearerleft"></div>';
$lang["museumplus_enable_script"]='Aktiver MuseumPlus-skriptet.';
$lang["museumplus_interval_run"]='Kjør skriptet med følgende intervall (f.eks. +1 dag, +2 uker, fjorten dager). La feltet stå tomt og det vil kjøre hver gang cron_copy_hitcount.php kjøres.';
$lang["museumplus_log_directory"]='Mappe for å lagre skriptlogger. Hvis dette feltet er tomt eller ugyldig, vil ingen logging skje.';
$lang["museumplus_integrity_check_field"]='Integritetssjekk felt.';
$lang["museumplus_modules_configuration_header"]='Modul konfigurasjon';
$lang["museumplus_module"]='Modul';
$lang["museumplus_add_new_module"]='Legg til nytt MuseumPlus-modul.';
$lang["museumplus_mplus_field_name"]='MuseumPlus felt navn.';
$lang["museumplus_rs_field"]='ResourceSpace-felt';
$lang["museumplus_view_in_museumplus"]='Vis i MuseumPlus.';
$lang["museumplus_confirm_delete_module_config"]='Er du sikker på at du vil slette denne modulkonfigurasjonen? Denne handlingen kan ikke angres!';
$lang["museumplus_module_setup"]='Moduloppsett';
$lang["museumplus_module_name"]='MuseumPlus modulnavn.';
$lang["museumplus_mplus_id_field"]='MuseumPlus ID felt navn.';
$lang["museumplus_mplus_id_field_helptxt"]='La tom for å bruke teknisk ID \'__id\' (standard)';
$lang["museumplus_rs_uid_field"]='ResourceSpace UID-felt';
$lang["museumplus_applicable_resource_types"]='Passende ressurstype(r)';
$lang["museumplus_field_mappings"]='MuseumPlus - Feltavbildninger for ResourceSpace';
$lang["museumplus_add_mapping"]='Legg til kartlegging.';
$lang["museumplus_error_bad_conn_data"]='Ugyldige MuseumPlus-tilkoblingsdata.';
$lang["museumplus_error_unexpected_response"]='Uventet MuseumPlus svarkode mottatt - %code.';
$lang["museumplus_error_no_data_found"]='Ingen data funnet i MuseumPlus for denne MpID-en - %mpid.';
$lang["museumplus_warning_script_not_completed"]='ADVARSEL: MuseumPlus-skriptet er ikke fullført siden \'%script_last_ran\'.
Du kan trygt ignorere denne advarselen bare hvis du senere har mottatt en melding om at skriptet ble fullført vellykket.';
$lang["museumplus_error_script_failed"]='MuseumPlus-skriptet kunne ikke kjøres fordi en prosesslås var på plass. Dette indikerer at forrige kjøring ikke ble fullført. Hvis du trenger å fjerne låsen etter en mislykket kjøring, kjør skriptet som følger: php museumplus_script.php --clear-lock.';
$lang["museumplus_php_utility_not_found"]='$php_path konfigurasjonsalternativet MÅ settes for at cron-funksjonaliteten skal kjøre vellykket!';
$lang["museumplus_error_not_deleted_module_conf"]='Kan ikke slette den forespurte modulkonfigurasjonen.';
$lang["museumplus_error_unknown_type_saved_config"]='\'museumplus_modules_saved_config\' er av en ukjent type!';
$lang["museumplus_error_invalid_association"]='Ugyldig modultilknytning. Vennligst sørg for at riktig modul og/eller post-ID er angitt!';
$lang["museumplus_id_returns_multiple_records"]='Flere poster funnet - vennligst skriv inn teknisk ID i stedet.';
$lang["museumplus_error_module_no_field_maps"]='Kan ikke synkronisere data fra MuseumPlus. Årsak: modulen \'%name\' har ingen feltavbildninger konfigurert.';