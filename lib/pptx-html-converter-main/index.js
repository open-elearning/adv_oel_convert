// Resets the value of input file to address navigating away from the page 
// and choosing to upload the same file
// $('#pptx_file').on('click touchstart' , function(){
//     $(this).val('');
// });

function getFileName(){
    const pptxFile = $('#pptx_file').prop('files')[0];
    return pptxFile.name;
}
  
// Trigger now when you have selected any file 
$("#pptx_file").on( "change", async (e) => {

    // Hide previous convertion result message
    document.getElementById("success").style.display = 'none';

    const fileName = getFileName();

    if(!checkExtension(fileName, 'pptx')){
        showError("Selected file must be pptx.");
        return;
    }
    
});

try{
    $("#htmlConversionResult").pptxToHtml({
        pptxFileUrl: "",
        fileInputId: "pptx_file", /*id of input tag*/ 
        slideMode: false,
        slidesScale: "30%",
        keyBoardShortCut: false 
      });

    // Select the node that will be observed for mutations
    let targetNode = document.getElementById("htmlConversionResult");

    // Options for the observer (which mutations to observe)
    const config = { attributes: true, childList: true, subtree: true };

    // Callback function to execute when mutations are observed
    let callback = function (mutationsList) {
        let html = $("#htmlConversionResult").html();

        // Store result in html file
        // Need to be done server side using PHP
        $.ajax({
            type: 'POST',
            url: 'interface-convert.php',
            dataType: 'html',
            data: {data: html, fileName : getFileName()},
            success: function(response) {
                const successElement = document.getElementById("success");
                successElement.innerHTML = response + " has been created.";
                successElement.style.display = 'block';
            }
        });
    };

    // Create an observer instance linked to the callback function
    let observer = new MutationObserver(callback);

    // Start observing the target node for configured mutations
    observer.observe(targetNode, config);

} catch(error){
    showError("Error parsing pptx : " + error.message);
}