<?php
// time.php

// global.inc.php 파일을 include하여 데이터베이스 연결 설정 및 필수 함수를 포함합니다
include_once $_SERVER["DOCUMENT_ROOT"] . "/global.inc.php";

// POST 요청 처리
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 데이터베이스 선택
    $sql_select_db = "USE web";
    sql_query($sql_select_db) or die("db select error: " . mysqli_error($conn));

    // 입력값 가져오기
    $startDateTime = $_POST['startDateTime'];
    $endDateTime = $_POST['endDateTime'];

    // 입력값 유효성 검사 (추가적인 유효성 검사가 필요할 수 있습니다)

    // tb_date 테이블의 target_date 수정 쿼리
    $sql_update_start = "UPDATE tb_date SET target_date = '{$startDateTime}' WHERE id = 1";
    $result_start = sql_query($sql_update_start);

    $sql_update_end = "UPDATE tb_date SET target_date = '{$endDateTime}' WHERE id = 2";
    $result_end = sql_query($sql_update_end);

    if ($result_start && $result_end) {
        echo "Start DateTime과 End DateTime을 성공적으로 업데이트했습니다.";
    } else {
        echo "업데이트에 실패했습니다: " . mysqli_error($conn);
    }

    // 데이터베이스 연결 종료
    mysqli_close($conn);
}
?>
