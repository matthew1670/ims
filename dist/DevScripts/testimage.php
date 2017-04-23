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
    <?php footer();?>
    <script type="text/javascript">
    $(function(){
        $("#ImgPreviewInput").on("change", previewFile);
    });

function previewFile() {
  var preview = document.querySelector('img');
  var file    = document.querySelector('input[type=file]').files[0];
  var reader  = new FileReader();
  reader.addEventListener("load", function () {
    preview.src = reader.result;
  }, false);

  if (file) {
    reader.readAsDataURL(file);
  }
}
    </script>
  </body>
</html>
