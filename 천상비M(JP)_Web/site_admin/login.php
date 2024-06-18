<?php include "./_inc/dtd.php" ?>
<script language="javascript">
function goLogin() {
	if( $('#admin_id').val().length < 2 ) {
		alert('아이디를 입력하세요.');
		$('#admin_id').focus();
		return;
	}
	
	if( $('#admin_pw').val().length < 2 ) {
		alert('비밀번호를 입력하세요.');
		$('#admin_pw').focus();
		return;
	}
	
	$('#lf').submit();
}
</script>
<body class="login">

<!-- #wrap //-->
<div id="loginWrap">

	<!-- bgLogin //-->
	<div class="bgLogin">
		<div class="loginBox">
			<div class="loginLogo">
				<p style="color:#fff;font-weight:bold;font-size:22px;line-height:50px;">관리자 로그인</p>
			</div>

			<div class="loginForm">
				<form id="lf" name="lf" method="post" action="/site_admin/_proc/loginProc.php">
				<p class="maB10"><input type="text" id="admin_id" name="admin_id" value="" class="inputLogin" placeholder="아이디" /></p>
				<p class="maB20"><input type="password" id="admin_pw" name="admin_pw" value="" class="inputLogin" placeholder="비밀번호" onKeyPress="if(event.keyCode==13)goLogin();" /></p>
				<p><span class="btnLogin"><a href="javascript:;" onclick="goLogin()">로그인</a></span></p>
				</form>
			</div>
		</div>
	</div>
	<!-- bgLogin //-->

</div>
<!-- wrap //-->

</body>
</html>

