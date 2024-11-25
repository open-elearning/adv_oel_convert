# Convert plugin
This is a demo of files converters.

## Converter types
- PDF to Image      | <em>Status</em> : Done
- Docx to HTML      | <em>Status</em> : In progress
- Odt to HTML       | <em>Status</em> : Not possible browser-side
- Pptx to Image     | <em>Status</em> : To Do
- Pptx to HTML      | <em>Status</em> : In progress

## Plugin architecture

```
├── test.php (1)
├── inc
│    └── params.php                        <--- destination folder param
├── lib
│    └─── no-engine
│    └─── odt-html-converter-main
│    └─── pdf-image-converter-main
│           └─── lib (5)                    <--- external lib goes here
│           └─── index.js (4)
│           └─── interface-convert.php (6)
│           └─── interface.php (3)
├── resources
│    └───css
│       └─── adv_oel_convert.css
│    └─── js
│       └─── adv_oel_convert.js (2)
```


__test.php (1)__ (*PHP*) - HTML converter inputs <br/>
└───inputs onClick calls *adv_oel_convert_process_to_input()* in __\resources\js\adv_oel_convert.js (2)__ (*JS*)<br/>
&emsp;  └─── open an iframe and load the content of __lib/'__.<span style="color:red">interface_oel_convert*</span>.__'/interface.php (3)__ (*PHP*) <br/>
&emsp;&emsp; └───  call __index.js (4)__ (*JS*) <br/>
&emsp;&emsp;&emsp;&emsp; └───  call the __external JS library (5)__ (*JS*) to convert the file <br/>
&emsp;&emsp;&emsp;&emsp; └─── call __interface-convert.php (6)__ (*PHP*) to store the file<br/>

<span style="color:red">*interface_oel_convert</span> (_for exemple : pdf-image-converter-main_) <br/>

### I Converter PDF to Image

### II Converter Docx to HTML

### III Converter Odt to HTML
Converter browser side was dropped. <br/>
The ODT format is complex and is composed of ZIP + XML files + resources.

1) External JS library was tried but failed to work due to deprecated dependency to jszip : [odt.js](https://github.com/codexa/odt.js/blob/master/README.md)
2) LibreOffice conversion to WebAssembly is ambitious and a group of developpers have been working on it for years : https://wiki.documentfoundation.org/Development/WASM
<br/>Maybe try using it when it is stable

Maybe we should consider a server side converter.

### III Converter Pptx to Image

### III Converter Pptx to HTML

Usage of external library : https://github.com/meshesha/PPTXjs?tab=readme-ov-file