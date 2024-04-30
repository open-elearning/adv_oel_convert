<?php

require_once("../../../../main/inc/global.inc.php");
require_once("../../inc/params.php");

// get imagedata from post
$base64_str = '';
$folder_str = '';
$pagenum_int = 0;
if (isset($_POST['imagedata'])&&isset($_POST['pagenum'])) {
    $base64_str = (string)$_POST['imagedata'];
    $pagenum_int = (int)$_POST['pagenum']+1;
    if (isset($_POST['f'])) {
        $folder_str = (string)$_POST['f'];
        $SESSION['adv_oel_convert_folder'] = $folder_str;
        //create directory
        if (!file_exists($output_file_adv_oel . $folder_str)) {
            mkdir($output_file_adv_oel . $folder_str, 0777, true);
        }
    } else {
        $folder_str = (string)$SESSION['adv_oel_convert_folder'];
    }
} else {
    echo '';
    exit;
}

if ($folder_str!='') {
    base64_to_jpeg($base64_str, $output_file_adv_oel . $folder_str . '/pg' . $pagenum_int . '.jpg');
}

if (file_exists($output_file_adv_oel . $folder_str . '/pg' . $pagenum_int . '.jpg')) {
    echo $folder_str . '/pg' . $pagenum_int.'.jpg';
} else {
    echo '';
}

function base64_to_jpeg($base64_string, $output_file) {

    $ifp = fopen( $output_file, 'wb' );
    $data = explode( ',', $base64_string );

    fwrite( $ifp, base64_decode( $data[ 1 ] ) );
    fclose( $ifp ); 

    return $output_file; 
}