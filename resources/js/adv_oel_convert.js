
var interface_oel_convert = 'pdf-image-converter-main';
var interface_oel_result_json = new Object();
var interface_oel_type = '';
var interface_oel_toType = '';
var interface_oel_inputobj = document.createElement('input');

function adv_oel_convert_process_to_input(type,toType,inputobj) {
    interface_oel_convert = 'no-engine';
    interface_oel_type = type;
    interface_oel_toType = toType;
    if (type == 'pdf'&& toType == 'image') {
        interface_oel_inputobj = inputobj;
        interface_oel_convert = 'pdf-image-converter-main';
    }
    adv_oel_convert_win();
}

function adv_oel_convert_win() {

    var title = 'Import ' + interface_oel_type + ' to ' + interface_oel_toType;

    if (document.getElementById('adv_oel_convert_body')) {
        document.getElementById('div_loader_oel').style.display = 'none';
        document.getElementById('adv_oel_convert_body').style.display = 'block';
        document.getElementById('interface_ifrm').style.display = 'block';
        document.getElementsByClassName('adv_oel_convert_header')[0].innerHTML = title;
        document.getElementsByClassName('adv_oel_convert_cover')[0].style.display = 'block';
        document.getElementById('interface_ifrm').src = 'lib/' + interface_oel_convert + '/interface.php';
    
    } else {
       
        var h = '<div id="adv_oel_convert_body" class="adv_oel_convert_body" >';
        h += '<div class="adv_oel_convert_header">';
        h += title + '</div>';
        
        h += '<div id="div_loader_oel" ></div>';

        h += '<iframe id="interface_ifrm" src="lib/'+interface_oel_convert+'/interface.php" ';
        h += ' class="adv_oel_convert_content" ></iframe></div>';
        h += '<div onClick="adv_oel_convert_close();" class="adv_oel_convert_cover" ></div>';
        document.body.innerHTML += h;

    }

}

function adv_oel_convert_receive_message(event) {
    if (event.data == 'close') {
        adv_oel_convert_close();
    } else if (event.data == 'loaded') {
        document.getElementById('div_loader_oel').style.display = 'block';
        document.getElementById('interface_ifrm').style.display = 'none';
    } else {
        adv_oel_convert_back(event.data);
    }
}

window.addEventListener('message', adv_oel_convert_receive_message, false);

function adv_oel_convert_close() {
    document.getElementById('adv_oel_convert_body').style.display = 'none';
    document.getElementsByClassName('adv_oel_convert_cover')[0].style.display = 'none';
}

function adv_oel_convert_back(json) {

    interface_oel_result_json = JSON.parse(json);
    if (document.getElementById(interface_oel_inputobj)) {
        var txtfinal = interface_oel_result_json.url;
        document.getElementById(interface_oel_inputobj).value = txtfinal;
        adv_oel_convert_close();
    }
    
}
