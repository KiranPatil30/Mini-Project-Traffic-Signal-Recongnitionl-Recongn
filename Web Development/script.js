const previewImage = (event) => {
    const imageFiles = event.target.files;
    const imageFilesLength = imageFiles.length;
    if (imageFilesLength > 0) {
        const imageSrc = URL.createObjectURL(imageFiles[0]);
        const imagePreviewElement = document.querySelector("#preview-selected-image");
        imagePreviewElement.src = imageSrc;
        imagePreviewElement.style.display = "block";
    }
};


function runPythonScript() {
  $.ajax({
      url: '/run_script',
      type: 'POST',
      success: function(response) {
          // Handle the response from the server
          var output = response.output;
          alert(output);
      },
      error: function(error) {
          // Handle any errors that occur during the request
          console.log(error);
      }
  });
}