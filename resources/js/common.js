// Common functions to use in different converters

function checkExtension(filename, extension){
    filename = filename.toLowerCase();
    const pattern = new RegExp(`/\.${extension}$`);
    return !pattern.test(filename);
}

// Display error to user
function showError(message) {
    const errorElement = document.getElementById("error");
    errorElement.innerHTML = message;
    errorElement.style.display = 'block';
    $('input[type=file],select').on('click touchstart' , function(){
        errorElement.style.display = 'none';
    });
}

// Read file content directly in browser using FileReader()
async function get_file_content(file) {

    const reader = new FileReader();
  
    return new Promise((resolve, reject) => {
  
      window.parent.postMessage('loaded',"*");
  
      reader.addEventListener("load", () => {
        const encoding = extract_encoding(reader.result);
        resolve(encoding);
      }, false);
  
      if (file) {
        reader.readAsDataURL(file);
      }
    });
  
  }