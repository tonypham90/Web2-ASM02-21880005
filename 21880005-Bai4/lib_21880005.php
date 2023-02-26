<?php
include "Data4_21880005.php";
//$dsSV = array(
//    array('2207728','Hoàng Thị Thanh Hương',9.5,'../images/2207728.png'),
//    array('2207744','Đỗ Thị Bích Ngọc',5.7,'../images/2207744.png')
//);
// function csvToArray($csvFile){
//     $file_to_read = fopen($csvFile, 'r');
//     while (!feof($file_to_read) ) {
//         $lines[] = fgetcsv($file_to_read, 1000, ',');
//     }
//     fclose($file_to_read);
//     return $lines;
// }
// //read the csv file into an array
// $csvFile = 'data4.csv';
// $DSSV_21880005 = csvToArray($csvFile);
// //render the array with print_r
// echo '<pre>';
//$dsSV =[];
//print_r($dsSV);
// echo '</pre>';

function printData($DS){
    $noElement = count($DS);
    for ($i=0; $i < $noElement; $i++) {
              echo "MSSV:" . $DS[$i][0] . ", Ten: " . $DS[$i][1] . "GPA: " . $DS[$i][2] . ".<br/>";
            }
}
//function showData($DS): void
//{
//    $sv = [];
//    foreach ($sv as $DS){
//        echo "MSSV:" . $sv[0] . ", Ten: " . $sv[1] . "GPA: " . $sv[2] . ".<br/>";
//    }
//}

