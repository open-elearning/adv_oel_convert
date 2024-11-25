<?php

require_once __DIR__.'/../../main/inc/global.inc.php';

Display::display_header('Test convert windows');

if (!api_is_anonymous()) {
    
    $user = api_get_user_info();

    echo '<script src="resources/js/adv_oel_convert.js"></script>';
    echo '<link rel="stylesheet" type="text/css" href="resources/css/adv_oel_convert.css">';
    
    ?>

    <h4>Convert PDF to Image</h4>
    <input style="width:320px;" type="text" id="pdfToImage" name="pdfToImage" />
    <input onClick="adv_oel_convert_process_to_input('pdf','image','pdfToImage');" type="button" id="convert" value="..."  style="margin-left:10px;" />
    </hr>

    <h4>Convert DOCX to HTML</h4>
    <input style="width:320px;" type="text" id="docxToHtml" name="docxToHtml" />
    <input onClick="adv_oel_convert_process_to_input('docx','html','docxToHtml');" type="button" id="convert4" value="..."  style="margin-left:10px;" />
    </hr>

    <h4>Convert ODT to HTML</h4>
    <input style="width:320px;" type="text" id="odtToHtml" name="odtToHtml" />
    <input onClick="adv_oel_convert_process_to_input('odt','html','odtToHtml');" type="button" id="odtToHtmlButton" value="..."  style="margin-left:10px;" />
    </hr>

    <h4>Convert PPTX to Image</h4>
    <input style="width:320px;" type="text" id="pptxToImage" name="pptxToImage" />
    <input onClick="adv_oel_convert_process_to_input('pptx','image','pptxToImage');" type="button" id="pptxToImageButton" value="..."  style="margin-left:10px;" />
    </hr>

    <h4>Convert PPTX to HTML</h4>
    <input style="width:320px;" type="text" id="pptxToHtml" name="pptxToHtml" />
    <input onClick="adv_oel_convert_process_to_input('pptx','html','pptxToHtml');" type="button" id="convert3" value="..."  style="margin-left:10px;" />
    </hr>



    <?php

}

Display::display_footer();

?>