		<div class="tabMenu">
			<ul>
			<? if( $_COOKIE["GC_ADMIN_USER_GRADE"] == "60" ) { ?>
				<li class="<?= ($nowFolderName == "category")?"on":"" ?>"><a href="/site_admin/category/cate.php">도서분류 관리</a></li>
			<? } else { ?>
				<li><a href="/site_admin/category/cate.php">도서분류 관리</a></li>
				<li class="on"><a href="/site_admin/book/book_input.php">도서 관리</a></li>
				<li class="<?= ($nowFolderName == "board")?"on":"" ?>"><a href="/site_admin/board/bbs_list.php">게시판 관리</a></li>
				<li class="<?= ($nowFolderName == "main")?"on":"" ?>"><a href="/site_admin/main/m_all.php">메인 관리</a></li>
				<li class="<?= ($nowFolderName == "banner")?"on":"" ?>"><a href="/site_admin/banner/bnr_all.php">베너 / 팝업 관리</a></li>
				<li class="<?= ($nowFolderName == "bookup")?"on":"" ?>"><a href="/site_admin/bookup/bookup.php">도서총목록 관리</a></li>
				<li><a href="http://weblog.cafe24.com/ReportV2/report_showData.html" target="_blank" >웹로그 분석 (아이디 : 000 비밀번호 : 000)</a></li>
			<? } ?>
				<li><a href="/" target="_blank" >홈페이지 바로가기</a></li>
			</ul>
		</div>