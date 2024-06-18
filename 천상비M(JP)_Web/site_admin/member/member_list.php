<? include "../_inc/dtd.php" ?>
<?

$pageCnt = 20;
$st = 0;
$nowPage = ( $_REQUEST['page'] ) ? $_REQUEST['page']:1;

$whereStr = " 1=1 ";

//전체 회원 수 구하기
$query = "SELECT count(*) as cnt FROM tb_member WHERE {$whereStr}";
$row = sql_fetch($query);
$totalCnt = $row['cnt'];

$totalPage = ceil( $totalCnt / $pageCnt );

$st = ($nowPage - 1) * $pageCnt;

$sql = "SELECT * FROM tb_member WHERE {$whereStr} ORDER BY regdate DESC LIMIT $st, $pageCnt";
$res = sql_query($sql);
?>
<body>

<!-- #wrap //-->
<div id="wrap">

	<!-- #leftArea //-->
	<div id="leftArea">
		<? include "../_inc/leftmenu.php" ?>
	</div>
	<!-- #leftArea //-->

	<!-- #container //-->
	<div id="container">

		<!-- topMenu //-->
		<? include "../_inc/topmenu.php" ?>
		<!-- topMenu //-->

		<!-- contents //-->
		<div class="contents">

			<!-- conArea //-->
			<div class="conArea">
				<h2>사전예약목록 <span class="ft12 tGray lts00">(총 <?= number_format($totalCnt) ?>명 등록)</span></h2>

				<div class="maB20" style="padding-bottom:20px;">
					<span class="b" style="float:right">
						<span class="btnSave">
						<a href="./xls_down.php">엑셀 다운로드</a>
						</span>
					</span>
				</div>
				
				<!-- contents //-->
				<div class="conSingle maB20">
					<table>
						<tr>
						  <th width="40" align="center"><strong>번호</strong></th>
						  <th width="*" align="center"><strong>이메일</strong></th>
						  <th width="80"  align="center"><strong>OS</strong></th>
						  <th width="120"  align="center"><strong>접속IP</strong></th>
						  <th width="150"  align="center"><strong>등록일시</strong></th>
						</tr>
					<?
					$num = $totalCnt - $st;
					while( $row = sql_fetch_array($res) ) {
					?>
						<tr>
						  <td align="center"><?= $num ?></td>
						  <td align="center"><?= $row['m_email'] ?></td>
						  <td align="center"><?= $row['m_os'] ?></td>
						  <td align="center"><?= $row['m_ip'] ?></td>
						  <td align="center"><?= $row['regdate'] ?></td>
						</tr>
					<?
						$num--;
					}
					?>
					</table>

				</div>
				<!-- contents //-->
				
				<!-- paging //-->
				<div id="pageArea" class=" maT20 maB20">
					<? echo drawPagingNavi($totalCnt, $nowPage, $pageCnt); ?>
				</div>
				<!-- paging //-->
				
				<script>
				function goPage(page) {
					location.href = '?page=' + page;
				}
				</script>
				
			</div>
			<!-- conArea //-->

		</div>
		<!-- contents //-->

	</div>
	<!-- #container //-->

	<!-- #footer //-->
	<? include "../_inc/copyright.php" ?>
	<!-- #footer //-->

</div>
<!-- wrap //-->

</body>
</html>

