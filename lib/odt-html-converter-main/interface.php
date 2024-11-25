<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script type="text/javascript" src="../../resources/js/jquery-3.7.1.min.js" defer></script>
  <script type="text/javascript" src="./lib/jszip.v2.min.js" defer></script>
  <script type="text/javascript" src="lib/odt.js" defer></script>
  <script type="text/javascript" src="index.js" defer></script>
  <link rel="stylesheet" href="../../resources/css/adv_oel_convert.css" />
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
  
  <input type="file" name="odt_file" id="odt_file" accept=".odt" />
  <p class="btn_line" style="display:none;" >
  <input type="button" class="btn_import" value="Import" id="btn_import" />
  </p>
  <canvas id="preview" ></canvas>
  <div id="root" ></div>
  
</body>
</html>