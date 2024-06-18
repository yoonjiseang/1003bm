	<div class="logo"><a href="/site_admin/" style="line-height:48px;font-size:22px;font-weight:bold;"><?= $gConf['site_name'] ?></a></div>
		<div class="infoUsr clearfix">
			<p class="greeting">
			</p>
			<div class="btnArea maL15 maB20">
				<!--span class="btnUsr"><a href="#">내정보</a></span-->
				<span class="btnUsr"><a href="/site_admin/_proc/loginProc.php?mode=logout">로그아웃</a></span>
			</div>
		</div>

		<!-- leftMenuSet //-->
		<div class="leftMenuSet">
			<h2>MENU CATEGORY</h2>
				<div class="bgLeftMenu">

					<div class="lmSet">
						<ul>
						<?
						if( $nowFolderName == "member" ) {
						?>
							<li class="on"><a href="/site_admin/member/member_list.php">사전예약관리</a></li>
							<form method="post" action="../_inc/time.php">
        						<label for="startDateTime">사전예약시작 날짜 설정:</label>
        						<input type="datetime-local" id="startDateTime" name="startDateTime" required>
        						<br><br>
        						<label for="endDateTime">사전예약종료 날짜 설정:</label>
        						<input type="datetime-local" id="endDateTime" name="endDateTime" required>
        						<br><br>
        						<input type="submit" value="Update">
    						</form>
						<?
						} else if( $nowFolderName == "loan" ) {
						?>
							<li class="<?= ($stat == "요청")?"on":"" ?>"><a href="/site_admin/loan/loan_list.php?stat=요청">차용요청 목록</a></li>
							<li class="<?= ($stat == "진행")?"on":"" ?>"><a href="/site_admin/loan/loan_list.php?stat=진행">차용진행 목록</a></li>
							<li class="<?= ($stat == "완료")?"on":"" ?>"><a href="/site_admin/loan/loan_list.php?stat=완료">상환완료 목록</a></li>
						<?
						} else if( $nowFolderName == "customer" ) {
						?>
							<li class="<?= ($stat == "진행")?"on":"" ?>"><a href="/site_admin/customer/cust_list.php?stat=진행">상담신청 목록</a></li>
							<li class="<?= ($stat == "완료")?"on":"" ?>"><a href="/site_admin/customer/cust_list.php?stat=완료">상담완료 목록</a></li>
						<?
						} else if( $nowFolderName == "bookup" ) {
						?>
							<li class="<?= ($nowPageName == "keyword.php")?"on":"" ?>"><a href="/site_admin/main/keyword.php">키워드 관리</a></li>
							<li class="<?= ($nowPageName == "mainbook.php")?"on":"" ?>"><a href="/site_admin/main/mainbook.php">메인도서 관리</a></li>
							<li class="<?= ($nowPageName == "theme.php")?"on":"" ?>"><a href="/site_admin/main/theme.php">테마도서 관리</a></li>
						<?
						} else if( $nowFolderName == "banner" ) {
						?>
							<li class="<?= ($nowPageName == "banner_list.php")?"on":"" ?>"><a href="/site_admin/banner/banner_list.php">베너관리</a></li>
						<?
						}
						?>
						</ul>
					</div>
				</div>
		</div>
		<!-- leftMenuSet //-->
