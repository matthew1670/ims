<?php
require $_SERVER['DOCUMENT_ROOT'].'/php/functions.php';
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
  </head>
  <body>
      <input type="file" id="ImgPreviewInput"><br>
      <img src="" height="200" alt="Image preview..." id="ImgPreview">
      <p id="dataURL"></p>
    <?php footer();?>
    <script type="text/javascript">
    $(function(){
        $("#ImgPreviewInput").on("change", previewFile);
    });
    //Image preview for adding to Assets
    function GetDataUrl(id){
        var input = document.getElementById(id);
            console.log(input);
        var file = input.files[0];
            console.log(file);
        var reader = new FileReader();
        reader.onload = function(event) {
            return reader.readAsDataURL(file);
        }
    }
    // function previewFile(FileInput){
    //     var dataURL = GetDataUrl(FileInput)
    //     console.log(dataURL);
    // }



    function previewFile() {
  var preview = document.querySelector('img');
  var file    = document.querySelector('input[type=file]').files[0];
  var reader  = new FileReader();
  var test;

  reader.addEventListener("load", onload);

  function onload(){
      test = reader.result;
      preview.src = test;
  }

  if (file) {
      reader.readAsDataURL(file);
  }

  if(test){
      console.log(test);
  }
}
</script>
  </body>
</html>
