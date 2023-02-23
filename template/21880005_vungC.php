<?php 

if (is_dir('./template')) {
  $urlHeadPath="./";
  $urlHome="./";
}
else{
  $urlHeadPath="./";
  $urlHome = './';
}
echo "<h2 class='text-primary-emphasis text-center'>Mục lục</h2>";
$listpage = array(range(1,13));
// <li><a href="#b1">Bài 1</a></li>
echo "<ul>";
echo "<li><a href='".$urlHome."'>Home</a></li>";
// echo "<li><a href='/WEB2-ASM02-21880005/'>Home</a></li>";
for ($row=1; $row < 14; $row++) { 
  // echo "<li><a href='/WEB2-ASM02-21880005/21880005-Bai" .$row."'>Bài ".$row."</a></li>";
  echo "<li><a href='".$urlHeadPath."21880005-Bai" .$row."'>Bài ".$row."</a></li>";
}
echo "</ul>";
?>
