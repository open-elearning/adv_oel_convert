<?php

require_once __DIR__.'/../../main/inc/global.inc.php';

Display::display_header('Test convert windows');

if (!api_is_anonymous()) {
    
    $user = api_get_user_info();

    echo '<script src="resources/js/adv_oel_convert.js"></script>';
    echo '<link rel="stylesheet" type="text/css" href="resources/css/adv_oel_convert.css">';
    
    ?>

    <h4>Convert PDF to Image</h4>
    <input style="width:320px;" type="text" id="filepath" name="filepath" />
    <input onClick="adv_oel_convert_process_to_input('pdf','image','filepath');" type="button" id="convert" value="..."  style="margin-left:10px;" />
    </hr>

    <h4>Convert DOCX to HTML</h4>
    <input style="width:320px;" type="text" id="filepath4" name="filepath" />
    <input onClick="adv_oel_convert_process_to_input('pdf','image','filepath4');" type="button" id="convert4" value="..."  style="margin-left:10px;" />
    </hr>

    <h4>Convert ODT to HTML</h4>
    <input style="width:320px;" type="text" id="filepath3" name="filepath3" />
    <input onClick="adv_oel_convert_process_to_input('pptx','image','filepath3');" type="button" id="convert3" value="..."  style="margin-left:10px;" />
    </hr>

    <h4>Convert PPTX to Image</h4>
    <input style="width:320px;" type="text" id="filepath2" name="filepath2" />
    <input onClick="adv_oel_convert_process_to_input('pptx','image','filepath2');" type="button" id="convert2" value="..."  style="margin-left:10px;" />
    </hr>

    <h4>Convert PPTX to HTML</h4>
    <input style="width:320px;" type="text" id="filepath3" name="filepath3" />
    <input onClick="adv_oel_convert_process_to_input('pptx','image','filepath3');" type="button" id="convert3" value="..."  style="margin-left:10px;" />
    </hr>



    <?php

}

Display::display_footer();

?>