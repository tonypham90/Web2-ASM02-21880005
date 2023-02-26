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
$dirfolder = $pieces[count($pieces) - 1];
// result is: your_dir
$lencutoff = strlen('21880005-baix');
$lenfolder = strlen($dirfolder);
$pagename = "";
if ($lenfolder == $lencutoff) {
    $pagename = substr($dirfolder, -1);
} else {
    $pagename = substr($dirfolder, -2);
}
?>

<head>
    <title>Bài tập 2</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/21880005-layout.css">
</head>

<body>
<main class="container-fluid">

    <div class='row'>
        <div class='col-3 h-200' id='vc'>
            <!-- Vung C -->
            <?php include('./template/21880005_vungC.php'); ?>
        </div>
        <div class='col-9' id='va'>
            <!-- Vung B -->

            <div class=" float-end" id='vb'>
                <!-- <?php echo '<img src="images/chandung.png" alt="21880005" width=2506>'; ?> -->

                <img src="images/chandung.png" alt="21880005">
            </div>
            <!-- Vung A -->
            <h1 class='align-content-start'>Bài Tập 2</h1>
            <?php echo "Date: " . date("l") . " " . date("d/M/Y") . "<br> Time:" . date("h:i:s a") ?>;
            <li>MSSV: 21880005</li>
            <li>Họ Tên: Phạm Tuấn Anh</li>
            <li>Email:<a href="mailto:tuananhdc08kt@gmail.com">tuananhdc08kt@gmail.com</a></li>
            <li>Số điện thoại:<a href="tel:+84978835947">(0978) 835-947</a></li>
            <div>Bài tập 1: Cài đặt Warmp server <br>
                Bài tập 2: Tạo server online
            </div>

            <!-- <img src="/images/chandung" alt="21880005" width="100%"> -->
            Vung D

        </div>
        <footer id="vd">
            <?php include('./template/21880005_vungD.php') ?>
        </footer>

    </div>


</main>

<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>
</body>

</html>