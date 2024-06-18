<script>
location.href = './member/member_list.php';
</script>
<?php
exit;
?>
<? include "./_inc/dtd.php" ?>
<body>

<!-- #wrap //-->
<div id="wrap">

	<!-- #leftArea //-->
	<div id="leftArea">
		<? include "./_inc/leftmenu.php" ?>
	</div>
	<!-- #leftArea //-->

	<!-- #container //-->
	<div id="container">

		<!-- topMenu //-->
		<? include "./_inc/topmenu.php" ?>
		<!-- topMenu //-->

		<!-- contents //-->
		<div class="contents">

			<!-- searchArea //-->
			<div class="searchArea">
				<span class="maL20 maR20 b">기간선택</span>
				<input type="text" value="" id="" class="inputSearch wd90 maR5" /> <a href="#" class="maR5"><img src="/site_admin/images/btn_cal.png" alt="달력" /></a> ~ 
				<input type="text" value="" id="" class="inputSearch wd90 maR5 maL5" /> <a href="#"><img src="/site_admin/images/btn_cal.png" alt="달력" /></a>
				<span class="btnSearch maL10"><a href="#">검색</a></span>
			</div>
			<!-- searchArea //-->

			<!-- conArea //-->
			<div class="conArea">
				<h2></h2>

				<!-- contents //-->
				<div class="conSingle">
					<table>
						<tr>
							<th>최근 등록 서평</th>
							<td></td>
						</tr>
						<tr>
							<th>최근 등록 독한 아이들</th>
							<td></td>
						</tr>
						<tr>
							<th>최근 등록 원화 · 강연 문의</th>
							<td></td>
						</tr>
						<tr>
							<th>최근 등록 2차 저작권 문의</th>
							<td></td>
						</tr>
					</table>
				</div>
				<!-- contents //-->

			</div>
			<!-- conArea //-->

		</div>
		<!-- contents //-->

	</div>
	<!-- #container //-->

	<!-- #footer //-->
	<? include "./_inc/copyright.php" ?>
	<!-- #footer //-->

</div>
<!-- wrap //-->

</body>
</html>
