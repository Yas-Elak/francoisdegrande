<?php
$spreadsheet_url="https://docs.google.com/spreadsheets/d/e/2PACX-1vS0k_irX-ynuINfjTGiV2TkJ5iRPgG-lh1iP4hiX0uqOVHCWdZskaUkdzpEyYaPb77dk1q4EJZvHubN/pub?gid=0&single=true&output=csv";

    if(!ini_set('default_socket_timeout', 15)) echo "<!-- unable to change socket timeout -->";

    if (($handle = fopen($spreadsheet_url, "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
    $spreadsheet_data[] = $data;
    }
    fclose($handle);
    }
    else
    die("Problem reading csv");


     var_dump($spreadsheet_data);

     echo $spreadsheet_data[0][1];