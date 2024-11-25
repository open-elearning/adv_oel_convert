<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <script type="text/javascript" src="./lib/js/jquery-1.11.3.min.js" defer></script>
        <script type="text/javascript" src="./lib/js/jszip.min.js" defer></script> <!-- v2.. , NOT v.3.. -->
        <script type="text/javascript" src="./lib/filereader.js" defer></script> <!--https://github.com/meshesha/filereader.js -->
        <script type="text/javascript" src="./lib/js/d3.min.js" defer></script> <!-- for charts graphs -->
        <script type="text/javascript" src="./lib/js/nv.d3.min.js" defer></script> <!-- for charts graphs -->
        <script type="text/javascript" src="./lib/js/dingbat.js" defer></script> <!--for bullets -->
        <script type="text/javascript" src="./lib/js/pptxjs.js" defer></script>
        <script type="text/javascript" src="./lib/js/divs2slides.js" defer></script> <!-- for slide show -->
        <script type="text/javascript" src="../../resources/js/common.js" defer></script>
        <script type="text/javascript" src="index.js" defer></script>

        <link rel="stylesheet" href="../../resources/css/adv_oel_convert.css" />
        <link rel="stylesheet" href="./lib/css/pptxjs.css" />
        <link rel="stylesheet" href="./lib/css/nv.d3.min.css" />

        <title>Document</title>

        <style>
            body {
            padding : 1rem;
            padding-bottom : 0rem;
            }
            img {
            border : 1px solid rgba(0, 0, 0, 0.1);
            border-radius : 0.4rem;
            box-shadow : 0.1rem 0.2rem 0.3rem rgb(0 0 0 / 10%);
            }
            #preview {
            display : none;
            }
            #root {
            display : flex;
            flex-wrap : wrap;
            gap : 2rem;
            padding : 0;
            }
        </style>
    </head>
    <body>
  
    
        <div id="result" align="center" style="margin-left: auto; margin-right: auto;"> 
            <span id="error" style="color: red; display: none"> </span>
            <span id="success" style="color: green; display: none"> </span> 
        </div>
        <input type="file" name="pptx_file" id="pptx_file" accept=".pptx" />
        <p class="btn_line" style="display:none;" >
        <input type="button" class="btn_import" value="Import" id="btn_import" />
        </p>
        <div id="htmlConversionResult" style="display: none"></div>
        <canvas id="preview" ></canvas>
        <div id="root" ></div>
    
    </body>
</html>