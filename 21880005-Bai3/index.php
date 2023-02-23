<!doctype html>
<html lang="en">
<?php

// use dirname to get the directory of the current file
$path = dirname(__FILE__);
// $path here is now /path_to/your_dir

// split directory into array of pieces
$pieces = explode(DIRECTORY_SEPARATOR, $path);
// $pieces = ['path_to', 'your_dir']

// get the last piece
$dirfolder= $pieces[count($pieces) - 1];
// result is: your_dir
$lencutoff = strlen('21880005-baix');
$lenfolder = strlen($dirfolder);
$pagename = "";
if ($lenfolder == $lencutoff) {
  $pagename = substr($dirfolder,-1);
}
else{
  $pagename = substr($dirfolder,-2);
}
 ?>

<head>
  <title>
    <?php printf("Bài Tập: %u",$pagename) ?>
  </title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/21880005-layout.css">
</head>

<body>
  <!-- Vung C -->
  <div class='vc'>
      <?php include('../template/21880005_vungC.php'); ?>
  </div>

  <main>
    <H1 class='align-content-lg-start'><?php printf("Bài:%s",$pagename) ?></H1>
    <div>tạo server online</div>
    <div class='vb'>
      <?php include('../template/21880005_vungB.php');?>
    </div>
  </main>
  <footer>
   <?php include('../template/21880005_vungD.php')?>
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>