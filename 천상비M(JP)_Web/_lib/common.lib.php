<?php
/*********************************************
File : common.lib.php
Desc : 공통사용 함수 모음 
*********************************************/

// 문자열 자르기
function str_cut($string, $cut, $suffix = '...')
{ 
	if (!$string || strlen($string)<=$cut) return $string; 
	return preg_replace("/(([\\x80-\\xff].)*)[\\x80-\\xff]?$/", "\\1".$suffix, substr($string,0,$cut)); 
}


// URI 파싱 (특정 param 제거)
function url_parse($value=""){
	parse_str($_SERVER[QUERY_STRING],$QUERY_STRING);
	$aa=explode(",",$value);
	for($a=0;$a<count($aa);$a++) unset($QUERY_STRING[$aa[$a]]);
	foreach($QUERY_STRING as $key=>$value){
		if(!$temp) $temp="$key=".urlencode($value);
		else $temp.="&$key=".urlencode($value);	
	}
	return $QUERY_STRING=$temp;
}

// 랜덤 문자 만들기 $len 길이 만큼
function getRandomString($len=10) {
	$str  = "abcdefghijklmnopqrstuvwxyz";
	$str .= "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	//$str .= "01234567890";
	//$str .= "!@#$%^&*()_+-=<>?,./";

	$retStr = str_shuffle($str);
	$retStr = substr($retStr, 0, $len);

	return $retStr;
}

// 메타태그를 이용한 URL 이동
// header("location:URL") 을 대체
function goto_url($url)
{
    $url = str_replace("&amp;", "&", $url);
    //echo "<script> location.replace('$url'); </script>";

    if (!headers_sent())
        header('Location: '.$url);
    else {
        echo '<script>';
        echo 'location.replace("'.$url.'");';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
        echo '</noscript>';
    }
    exit;
}

// 메세지 alert 후 페이지 이동
function go_url($url, $msg='') {
	echo "<script>";
	
	if( $msg != "" ) {
		echo "alert('".$msg."');";
	}
	
	echo "location.href = '".$url."'";
	echo "</script>";
	exit;
}

// alert 메세지 후 history go
function errMsg($msg, $go = -1) {
	echo "<script language='javascript'>
		alert('".$msg."');
		history.go(".$go.");
		</script>";
	exit;
}

function login_check() {
	global $gUserId;
	
	if( $gUserId == "" ) {
		go_url('login.php', '로그인이 필요합니다.');
	}
}


//페이징 네비게이션 생성
function drawPagingNavi($totalCnt, $nowPage, $pageCnt = "10", $naviSize = "10", $scriptName = "goPage"  ) {
	$pageStr = "";
	$firstPG = "";
	$finalPG = "";
	$startPG = "";
	$endPG		= "";

	$totalPage = ceil($totalCnt / $pageCnt );
	$total_block = ceil($totalPage / $naviSize);
	$block = ceil( $nowPage / $naviSize );

	$first_page = ($block-1) * $naviSize;
	$last_page = $block * $naviSize;
	$go_page = $first_page + 1;

	$prevPG = $first_page;
	$nextPG = $last_page + 1;

	if( $totalPage > 1 ) {
		$firstPG = 1;
		$finalPG = $totalPage;
	}

	if( $total_block <= $block) $last_page = $totalPage;

	$pageStr = '<div class="paginate maB20">'.chr(13);

	//이전 페이지 block 보기
	if($totalPage > 0 ) {
		if( $block > 1 ) $prev_b .= "<a href=\"javascript:" . $scriptName . "('" . $prevPG . "')\">&lt;&lt;</a>".chr(13);
		//else $prev_b .= "<a href=\"javascript:void(0)\">이전</a>".chr(13);
		else $prev_b .= "";

		//다음 페이지 block 보기
		if( $block < $total_block) $next_b .= "<a href=\"javascript:" . $scriptName . "('" . $nextPG . "')\">&gt;&gt;</a>".chr(13);
		//else $next_b .= "<a href=\"javascript:void(0)\">다음</a>".chr(13);
		else $next_n .= "";

		$pageStr .= $prev_b;

		for( $go_page = $go_page ; $go_page <= $last_page; $go_page++) {
			if( $nowPage == $go_page) $pageStr .= "<strong>" . $go_page . "</strong>".chr(13);
			else  $pageStr .= " <a href=\"javascript:" . $scriptName . "('" . $go_page . "')\">" . $go_page . "</a>".chr(13);
		}

		$pageStr .= $next_b;
	}

	$pageStr .= "</div>".chr(13);

	return $pageStr;

}
?>