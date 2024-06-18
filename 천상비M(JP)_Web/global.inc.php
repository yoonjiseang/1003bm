<?php

/*******************************************************************************
** 공통 변수, 상수, 코드
*******************************************************************************/
error_reporting( E_CORE_ERROR | E_CORE_WARNING | E_COMPILE_ERROR | E_ERROR | E_WARNING | E_PARSE | E_USER_ERROR | E_USER_WARNING );

// 보안설정이나 프레임이 달라도 쿠키가 통하도록 설정
header('P3P: CP="ALL CURa ADMa DEVa TAIa OUR BUS IND PHY ONL UNI PUR FIN COM NAV INT DEM CNT STA POL HEA PRE LOC OTC"');

//==========================================================================================================================
// extract($_GET); 명령으로 인해 page.php?_POST[var1]=data1&_POST[var2]=data2 와 같은 코드가 _POST 변수로 사용되는 것을 막음
//--------------------------------------------------------------------------------------------------------------------------
$ext_arr = array ('PHP_SELF', '_ENV', '_GET', '_POST', '_FILES', '_SERVER', '_COOKIE', '_SESSION', '_REQUEST',
                  'HTTP_ENV_VARS', 'HTTP_GET_VARS', 'HTTP_POST_VARS', 'HTTP_POST_FILES', 'HTTP_SERVER_VARS',
                  'HTTP_COOKIE_VARS', 'HTTP_SESSION_VARS', 'GLOBALS');
$ext_cnt = count($ext_arr);
for ($i=0; $i<$ext_cnt; $i++) {
    // POST, GET 으로 선언된 전역변수가 있다면 unset() 시킴
    if (isset($_GET[$ext_arr[$i]]))  unset($_GET[$ext_arr[$i]]);
    if (isset($_POST[$ext_arr[$i]])) unset($_POST[$ext_arr[$i]]);
}
//==========================================================================================================================

//==============================================================================
// SQL Injection 등으로 부터 보호를 위해 sql_escape_string() 적용
//------------------------------------------------------------------------------
// magic_quotes_gpc 에 의한 backslashes 제거
if (7.0 > (float)phpversion()) {
    if (function_exists('get_magic_quotes_gpc') && get_magic_quotes_gpc()) {
        $_POST    = array_map_deep('stripslashes',  $_POST);
        $_GET     = array_map_deep('stripslashes',  $_GET);
        $_COOKIE  = array_map_deep('stripslashes',  $_COOKIE);
        $_REQUEST = array_map_deep('stripslashes',  $_REQUEST);
    }
}
//==============================================================================


// PHP 4.1.0 부터 지원됨
// php.ini 의 register_globals=off 일 경우
@extract($_GET);
@extract($_POST);
@extract($_SERVER);

$db_host = "db-nop37-kr.vpc-pub-cdb.ntruss.com";
$db_user = "sesi_admin";
$db_pass = "!1sesisoft";
$db_name = "web";
$gConf['site_name'] = "구운몽";
$gConf['lib_path'] = $_SERVER['DOCUMENT_ROOT']."/_lib";

// 필요 라이브러리 로드 (_lib 폴더 자동)
$extend_file = array();
$tmp = dir($gConf['lib_path']);
while ($entry = $tmp->read()) {
    // php 파일만 include 함
    if (preg_match("/(\.php)$/i", $entry))
        $extend_file[] = $entry;
}

if(!empty($extend_file) && is_array($extend_file)) {
    natsort($extend_file);

    foreach($extend_file as $file) {
        include_once($gConf['lib_path'].'/'.$file);
    }
    unset($file);
}
unset($extend_file);


// 현재 페이지명
$urlArr = explode("/", $_SERVER["PHP_SELF"]);
$nowFolderName = $urlArr[2];
$nowPageName = $urlArr[sizeof($urlArr)-1]; 

// 전역 쿠키값 설정
$gUserId = $_COOKIE["GC_USER_ID"];
$gUserName = $_COOKIE["GC_USER_NAME"];
$gAdminUserId = $_COOKIE["GC_ADMIN_USER_ID"];
$gAdminUserName = $_COOKIE["GC_ADMIN_USER_NAME"];

$tmpUrl = $_SERVER["REQUEST_URI"];
$tmpArr = explode("/", $tmpUrl);

$mobile_agent = "/(iPod|iPhone|Android|BlackBerry|SymbianOS|SCH-M\d+|Opera Mini|Windows CE|Nokia|SonyEricsson|webOS|PalmOS)/";

if(preg_match($mobile_agent, $_SERVER['HTTP_USER_AGENT'])){
	$is_mobile = true;
}else{
	$is_mobile = false;
}

$is_login = false;
if( $gUserId != "" ) {
	$is_login = true;
}

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die("DB connect error");

sql_query("set names utf8");
?>
