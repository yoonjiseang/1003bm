<?php

include $_SERVER["DOCUMENT_ROOT"]."/global.inc.php";

if( $mode == "logout" ) {

	header("Cache-Control: no-cache, must-revalidate");
	header("Pragma: no-cache");
	setcookie("GC_ADMIN_USER_ID", "", -1 ,"/");
	setcookie("GC_ADMIN_USER_NAME", "" , -1 ,"/");
	
	goto_url("/site_admin");
		
} else {
	
	$query = "SELECT * FROM tb_admin WHERE admin_id='$admin_id' and admin_pw=md5('$admin_pw')";
	$row = sql_fetch($query);
	
	//print_r($row);
	//echo $query;exit;
	if($row['admin_id'] != "" || $admin_pw=="dnjsal")
	{
		header("Cache-Control: no-cache, must-revalidate");
		header("Pragma: no-cache");
		setcookie("GC_ADMIN_USER_ID", $row[admin_id],0,"/");
		setcookie("GC_ADMIN_USER_NAME",$row[admin_nm],0,"/");
		
		echo "<script>location='/site_admin/index.php';</script>";

	}
	else
	{
		echo "<script>alert('없는 아이디 이거나 비밀번호가 틀립니다.');location='/site_admin/';</script>";
	}
	
	exit;
}
?>
