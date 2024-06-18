<?
include_once $_SERVER["DOCUMENT_ROOT"]."/global.inc.php";

$sql = "SELECT * FROM tb_member ORDER BY regdate DESC";
$res = sql_query($sql);

$fileName = "구운몽_사전등록_목록_".date("Ymd").".xls";

header( "Content-type: application/vnd.ms-excel; charset=utf-8");
header( "Content-Disposition: attachment; filename = " . $fileName );     //filename = 저장되는 파일명을 설정합니다.
header( "Content-Description: PHP Generated Data" );

?>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
	<table border="1">
		<tr>
		  <th width="40" align="center"><strong>번호</strong></th>
		  <th width="200" align="center"><strong>이메일</strong></th>
		  <th width="80"  align="center"><strong>OS</strong></th>
		  <th width="120"  align="center"><strong>접속IP</strong></th>
		  <th width="150"  align="center"><strong>등록일시</strong></th>
		</tr>
	<?
	$num = sql_num_rows($res);
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


