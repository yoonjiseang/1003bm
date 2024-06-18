<?
include_once $_SERVER["DOCUMENT_ROOT"]."/global.inc.php";

if( $nowPageName != "login.php" && $gAdminUserId == "" ) {
	goto_url("/site_admin/login.php");
}
?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ko" lang="ko">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title><?= $gConf['site_name'] ?> - 관리자모드</title>

<!-- common //-->
<link href="/site_admin/css/style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="/site_admin/js/jquery-1.8.2.js"></script>
<script type="text/javascript" src="/site_admin/js/common.js"></script>
<script type="text/javascript" src="/site_admin/js/jquery.placeholder.js"></script>
<!-- common //-->

<!-- Modal Pop //-->
<script type='text/javascript' src='/site_admin/js/jquery.modal.min.js'></script>
<script type='text/javascript' src='/site_admin/js/site.js'></script>
<!-- Modal Pop //-->
