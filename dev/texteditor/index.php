<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Further</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Further CSC, tiene el proposito de ayudar al estudiante a traves de videos y asesorias.">
    <meta name="author" content="Jose Antonio Torres">
    <!-- Place inside the <head> of your HTML -->
    <script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
    <script>
    tinymce.init({
        selector: "textarea#elm1",
        theme: "modern",
        plugins: [
             "advlist autolink link image lists charmap print preview hr anchor pagebreak",
             "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
             "save table contextmenu directionality emoticons template paste textcolor"
       ],
       content_css: "../../css/bootstrap.css",
       toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons", 
     }); 
    </script>
  </head>
  <body>
    <!-- Place this in the body of the page content -->
    <form method="post">
      <textarea id="elm1" name="area"></textarea>
    </form>
  </body>