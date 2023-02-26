<?php
include "Data4_21880005.php";
// function csvToArray($csvFile){
//     $file_to_read = fopen($csvFile, 'r');
//     while (!feof($file_to_read) ) {
//         $lines[] = fgetcsv($file_to_read, 1000, ',');
//     }
//     fclose($file_to_read);
//     return $lines;
// }
// //read the csv file into an array 
// $csvFile = 'data.csv';
// $DSSV_21880005 = csvToArray($csvFile);
// //render the array with print_r 
// echo '<pre>';
// print_r($DSSV_21880005);
// echo '</pre>';

function printData($DS){
    $noElement = count($DS);
    for ($i=0; $i < $noElement; $i++) { 
              echo "MSSV:" . $DS[$i][0] . ", Ten: " . $DS[$i][1] . "GPA: " . $DS[$i][2] . ".<br/>";
            }
}
function showdata($DS){
    $sv = [];
    foreach ($sv as $DS){

    }
}
showdata(dsSV)
?>