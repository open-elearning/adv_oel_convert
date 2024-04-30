<?php
/* For license terms, see /license.txt */

require_once(__DIR__.'/adv_oel_convert.php');

if(!api_is_platform_admin()){
    die('You must have admin permissions to install plugins');
}

adv_oel_convert::create()->install();
