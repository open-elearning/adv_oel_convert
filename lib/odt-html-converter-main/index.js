// Resets the value of input file to address navigating away from the page 
// and choosing to upload the same file
$('#odt_file').on('click touchstart' , function(){
  $(this).val('');
});

// Trigger now when you have selected any file 
$("#odt_file").on( "change", (e) => {
  const odtdoc = e.target.files[0];
  let html = null;
  try{
    html = new ODTDocument(odtdoc).getHTML();
  } catch(error){
    console.log("Error parsing odt : " + error.message);
  }
 });

function processToExport() {
  if (document.getElementById('odt_file').files.length > 0) {
    document.getElementById('odt_file').style.display = 'none';
    document.getElementById('btn_import').style.display = 'none';
  }
}

// async function main() {
//   const options = {
//     input_selector: "#odt_file",
//     preview_selector: "#preview"
//   };
//   const odtInput = document.querySelector(options.input_selector);
//   const encoded_data = await get_file_content(odtInput);

//   let html;
//   try {
//     html = new ODTDocument(odtdoc).getHTML();
//     $.ajax({
//       type: 'POST',
//       url: 'interface-convert.php',
//       data: html,
//       success: function(data) {
//         if (data!='') {
//           html = new ODTDocument(data).getHTML();
//         }
//       }
//     });
//   } catch(e) {
//     alert("Couldn't parse odt file.");
//     throw e;
//   }
// }