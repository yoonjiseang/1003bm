// left height100%
$( function() {
	$('#leftArea').css('height', $('body').css('height'));
});

$(window).resize( function() {
	$('#leftArea').css('height', $('body').css('height'));
});

// 좌측 분류 마우스오버 //
$(document).ready(function($) {
	
	$('.selD2List').on('click', function() {
		
		var idx = $(this).attr('id');
		
		$('#cateD3_' + idx.split('_')[1]).slideToggle();
	});
	//$.removeCookie("dcTopBannerToday");

	//네비게이션 핸들링
  //$('#cateD2').on('click', function(){        	
  //	$('#cateD3').slideToggle();
//		$('.subD3Cate').show();
  //});

//  $('.subD02').mouseleave(function(){
//  	$('.subD3Cate').stop().slideUp(200 , function(){});
//  });

});

//Open Windows
function popBook(){
window.open("/site_admin/book/book_sel.php","","width=800 height=540 left=300 top=50 scrollbars=auto")
}

//Open Windows
function popBookSelect(t){
window.open("/site_admin/main/book_sel.php?target=" + t,"","width=800 height=540 left=300 top=50 scrollbars=auto")
}

//Open Windows
function popBookSelect2(t){
window.open("/site_admin/board/book_sel.php?target=" + t,"","width=800 height=540 left=300 top=50 scrollbars=auto")
}