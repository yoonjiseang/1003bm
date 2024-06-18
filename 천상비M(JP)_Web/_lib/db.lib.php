<?php

function sql_query($sql, $is_debug = 0, $error=0, $link=null)
{
    global $conn;

    if(!$link)
        $link = $conn;

    // Blind SQL Injection 취약점 해결
    $sql = trim($sql);
    // union의 사용을 허락하지 않습니다.
    //$sql = preg_replace("#^select.*from.*union.*#i", "select 1", $sql);
    //$sql = preg_replace("#^select.*from.*[\s\(]+union[\s\)]+.*#i ", "select 1", $sql);
    // `information_schema` DB로의 접근을 허락하지 않습니다.
    $sql = preg_replace("#^select.*from.*where.*`?information_schema`?.*#i", "select 1", $sql);
    
    $start_time = $is_debug ? get_microtime() : 0;

    if( function_exists('mysqli_query') ) {
        if ($error) {
            $result = @mysqli_query($link, $sql) or die("<p>$sql<p>" . mysqli_errno($link) . " : " .  mysqli_error($link) . "<p>error file : {$_SERVER['SCRIPT_NAME']}");
        } else {
            $result = @mysqli_query($link, $sql);
        }
    } else {
        if ($error) {
            $result = @mysql_query($sql, $link) or die("<p>$sql<p>" . mysql_errno() . " : " .  mysql_error() . "<p>error file : {$_SERVER['SCRIPT_NAME']}");
        } else {
            $result = @mysql_query($sql, $link);
        }
    }

    $end_time = $is_debug ? get_microtime() : 0;

    if($result && $is_debug) {
        // 여기에 실행한 sql문을 화면에 표시하는 로직 넣기
        $g5_debug['sql'][] = array(
            'sql' => $sql,
            'start_time' => $start_time,
            'end_time' => $end_time,
            );
    }

    return $result;
}


// 쿼리를 실행한 후 결과값에서 한행을 얻는다.
function sql_fetch($sql, $error=0, $link=null)
{
    global $conn;

    if(!$link)
        $link = $conn;

    $result = sql_query($sql, $error, $link);
    //$row = @sql_fetch_array($result) or die("<p>$sql<p>" . mysqli_errno() . " : " .  mysqli_error() . "<p>error file : $_SERVER['SCRIPT_NAME']");
    $row = sql_fetch_array($result);
    return $row;
}


// 결과값에서 한행 연관배열(이름으로)로 얻는다.
function sql_fetch_array($result)
{
    if( ! $result) return array();

    if(function_exists('mysqli_fetch_assoc'))
        $row = @mysqli_fetch_assoc($result);
    else
        $row = @mysql_fetch_assoc($result);

    return $row;
}

// $result에 대한 메모리(memory)에 있는 내용을 모두 제거한다.
// sql_free_result()는 결과로부터 얻은 질의 값이 커서 많은 메모리를 사용할 염려가 있을 때 사용된다.
// 단, 결과 값은 스크립트(script) 실행부가 종료되면서 메모리에서 자동적으로 지워진다.
function sql_free_result($result)
{
    if(!is_resource($result)) return;

    if(function_exists('mysqli_free_result') && G5_MYSQLI_USE)
        return mysqli_free_result($result);
    else
        return mysql_free_result($result);
}


function sql_password($value)
{
    // mysql 4.0x 이하 버전에서는 password() 함수의 결과가 16bytes
    // mysql 4.1x 이상 버전에서는 password() 함수의 결과가 41bytes
    $row = sql_fetch(" select password('$value') as pass ");

    return $row['pass'];
}


function sql_insert_id($link=null)
{
    global $conn;

    if(!$link)
        $link = $conn;

    if(function_exists('mysqli_insert_id'))
        return mysqli_insert_id($link);
    else
        return mysql_insert_id($link);
}


function sql_num_rows($result)
{
    if(function_exists('mysqli_num_rows'))
        return mysqli_num_rows($result);
    else
        return mysql_num_rows($result);
}

?>