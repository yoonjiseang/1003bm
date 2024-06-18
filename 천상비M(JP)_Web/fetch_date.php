<?php
// fetch_date.php

// global.inc.php 파일을 include하여 데이터베이스 연결 설정 및 필수 함수를 포함합니다
include_once $_SERVER["DOCUMENT_ROOT"] . "/global.inc.php";

// 데이터베이스 선택
$sql_select_db = "USE web";
sql_query($sql_select_db) or die("db select error: " . mysqli_error($conn));

$retArr = array();

// id가 1인 데이터의 target_date 가져오기 (startDateTime)
$sql_start = "SELECT target_date FROM tb_date WHERE id = 1";
$row_start = sql_fetch($sql_start);

if ($row_start) {
    $retArr['retCode'] = "00";
    $retArr['startDateTime'] = $row_start['target_date'];
} else {
    $retArr['retCode'] = "99";
    $retArr['retMsg'] = "No data found for startDateTime in tb_date table.";
}

// id가 2인 데이터의 target_date 가져오기 (endDateTime)
$sql_end = "SELECT target_date FROM tb_date WHERE id = 2";
$row_end = sql_fetch($sql_end);

if ($row_end) {
    $retArr['endDateTime'] = $row_end['target_date'];
} else {
    $retArr['retCode'] = "99";
    $retArr['retMsg'] = "No data found for endDateTime in tb_date table.";
}

// index.php로 반환할 변수 설정
return $retArr;
?>
