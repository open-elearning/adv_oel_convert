<?php
require_once("../../../../main/inc/global.inc.php");
require_once("../../inc/params.php");

    $writeInput = pathinfo($_POST['fileName'], PATHINFO_FILENAME) . ".html";
    $data = $_POST['data'];

    if(!is_dir($output_file_adv_oel)){
        mkdir($output_file_adv_oel);
    }

    $filePath = ($output_file_adv_oel . $writeInput);
    $fileHandle = fopen($filePath, 'w+') or die("Cannot open file");
    fwrite($fileHandle, $data);
    fclose($fileHandle);
    echo($writeInput);
 ?>