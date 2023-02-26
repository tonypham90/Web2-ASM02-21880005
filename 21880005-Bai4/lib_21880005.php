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
              echo  "<li>MSSV:" . $DS[$i][0] . "; Ten: " . $DS[$i][1] . "; GPA: " . (float)$DS[$i][2] . ".</li>";
            }
}

//
function countElement($DS){
    echo "<br> <h1 class='text-info p-1'>Tổng Số Học Sinh:". count($DS)."</h1>";
}


function ds_svChuaTN($DS){
    $dssv=[];
    $sv =[];
    foreach ($DS as $sv){
        $GPA = (float)$sv[2];
        if ($GPA<5.0){
            $dssv[] = $sv;
        }
    }
    echo "<h1>Danh Sách Sinh Viên chưa tốt nghiệp</h1>";
    if (!empty($dssv)) {
        countElement($dssv);
        printData($dssv);
    }
    else{
        echo "không có sinh viên chưa tốt nghiệp";
    }
}

function ds_svTN($DS){
    $dssv=[];
    $sv =[];
    for ($i=0;$i<count($DS);$i++){
        if ((float)$DS[$i][2]>=5.0){
            array_push($dssv,$DS[$i]);
        }
    }
    echo "<h1>Danh Sách Sinh Viên tốt nghiệp</h1>";
    if (!empty($dssv)) {
        countElement($dssv);

        printData($dssv);
    }
    else{
        echo "không có sinh viên tốt nghiệp";
    }
}
//function showData($DS): void
//{
//    $sv = [];
//    foreach ($sv as $DS){
//        echo "MSSV:" . $sv[0] . ", Ten: " . $sv[1] . "GPA: " . $sv[2] . ".<br/>";
//    }
//}

