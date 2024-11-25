<?php

require_once("../../../../main/inc/global.inc.php");
require_once("../../inc/params.php");

//$output_file_adv_oel

//Create directory
$folder_str = "odt2html";
mkdir($output_file_adv_oel . $folder_str, 0777, true);

//Store file