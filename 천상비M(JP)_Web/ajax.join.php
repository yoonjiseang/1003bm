<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/global.inc.php";

// 데이터베이스 선택
$sql_select_db = "USE web";
sql_query($sql_select_db) or die("db select error: " . mysqli_error($conn));

$m_email = $_GET['m_email'];
$m_os = $_GET['m_os'];

// 이메일 형식 체크는 자바스크립트에서 수행되므로 PHP에서는 별도 처리를 하지 않습니다

$sql = "SELECT * FROM tb_member WHERE m_email='{$m_email}'";
$row = sql_fetch($sql);

$retArr['retCode'] = "99";
$retArr['retMsg'] = "ERROR";

if ($row['idx'] != "") {
    $retArr['retCode'] = "88";
    $retArr['retMsg'] = "이미 신청된 이메일 입니다.";
    die(json_encode($retArr));
}

$sql = "INSERT INTO tb_member SET
        m_os = '{$m_os}',
        m_email = '{$m_email}',
        m_ip = '{$_SERVER['REMOTE_ADDR']}',
        regdate = now()";
sql_query($sql) or die($sql);

$retArr['retCode'] = "00";
$retArr['retMsg'] = "SUCCESS";

die(json_encode($retArr));
?>
