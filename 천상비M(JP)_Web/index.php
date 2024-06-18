<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-6M0LDTC1HQ"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-6M0LDTC1HQ');
	</script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>天上碑M</title>
	<meta name="author" content="天上碑M" />
	<meta name="description" content="モバイルの天に上がる" />
	<meta name="keywords"  content="天上碑M" />

	<!-- sns -->
    <meta property="og:title" content="天上碑M">
    <meta property="og:description" content="モバイルの天に上がる">   
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://tenjouhim.sesisoft.com">
    <meta property="og:image" content="http://tenjouhim.sesisoft.com/assets/images/sns_visual.jpg">
    <meta name="format-detection" content="telephone=no">

	<meta name="facebook-domain-verification" content="r0ky4yi2e7p2l4b5wz3v9acvt571rp" />
	<link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/x-icon">

	<link rel="stylesheet" type="text/css" href="./assets/swiper/css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/coverflow.css" />
	<link rel="stylesheet" type="text/css" href="./assets/css/common.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/main.css" />
	<link rel="stylesheet" type="text/css" href="./assets/css/reset.css" />
	<link rel="stylesheet" type="text/css" href="./assets/css/jquery.fullPage.css" />
	<link rel="stylesheet" type="text/css" href="./assets/css/add.css" />
	<link rel="stylesheet" type="text/css" href="./assets/css/beta_add.css" />

	<!--[if IE]>
		<script type="text/javascript">
			var console = { log: function() {} };
		</script>
	<![endif]-->

		<script src="./assets/js/jquery.min.js"></script>
		<script src="./assets/js/jquery-ui.min.js"></script>
		<script type="text/javascript" src="./assets/scripts/script.js"></script>
		<script type="text/javascript" src="./assets/js/scrolloverflow.js"></script>
		<script type="text/javascript" src="./assets/js/jquery.fullPage.js"></script>
		<script type="text/javascript" src="./assets/swiper/js/swiper.js"></script>
		<script type="text/javascript" src="examples.js"></script>
		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11004028934"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'AW-11004028934');
		</script>

		<!-- 엔스위치 init -->
		<script type="text/javascript" src="https://scr.nsmartad.com/nswitch/npr_track/npr_track.js"></script>
		<script type="text/javascript">
		new NSW_init_pr_param();
		</script>

		<!-- 카울리 init -->
		<script type="text/javascript" src="//image.cauly.co.kr/tracker/caulytracker.js"> </script>
		<script type="text/javascript">
		var param = {
		  track_code : "b9f367aa-159f-40a5-8d43-7eba11783bc6",
		  event_name : "OPEN"
		};
		cauly_send(param);
		</script>
		<?php
		// 한국 시간으로 설정
		date_default_timezone_set('Asia/Seoul');

		// fetch_date.php 파일 포함
		$retArr = include 'fetch_date.php';

		$currentDateTime = time();

		if (isset($retArr['retCode']) && $retArr['retCode'] == "00") {
    		// startDateTime과 endDateTime이 있는 경우에만 처리
    		$startDateTime = strtotime($retArr['startDateTime']);
    		$endDateTime = strtotime($retArr['endDateTime']);
		} else {
		}
?>

</head>
<body>

	<div class="ham mo_only">
		<img src="./assets/images/ham.png" alt="">
	</div>
	<ul class="nav">
		<?php
		if ($currentDateTime > $startDateTime) {
			echo '<li class="one on"><a class="ham_close" href="#page1">メイン</a></li>
		<li class="two"><a class="ham_close" href="#page2">イベント</a></li>
		<li class="three"><a class="ham_close" href="#page3">ツイッター</a></li>
		<li class="four"><a class="ham_close" href="#page4">ゲーム紹介</a></li>';
		}
		else{
			echo '<li class="one on"><a class="ham_close" href="#page1">メイン</a></li>
		<li class="two"><a class="ham_close" href="#page2">ツイッター</a></li>
		<li class="three"><a class="ham_close" href="#page3">ゲーム紹介</a></li>';
		}
		?>
		
		<li class="sns mo900_only">
			<a href="https://twitter.com/tenjouhi_M" target="_blank"><img src="./assets/images/i_twitter.png" alt=""></a>
			<a href="https://discord.gg/Mf9Z94r8" target="_blank" class="ham_close"><img src="./assets/images/i_youtube.png" alt=""></a>
		</li>
	</ul>
<div id="fullpage">
	<!--Section1-->
	<div class="section" id="section1" style="background: url(./assets/images/sec1_bg.png) no-repeat top center; background-size: cover;">
		<ul class="link fade fade13 ani13">
			<li><a href="https://twitter.com/tenjouhi_M" target="_blank"><img src="./assets/images/i_twitter.png" alt=""></a></li>
			<li><a href="https://discord.gg/Mf9Z94r8" target="_blank"><img src="./assets/images/i_youtube.png" alt=""></a></li>
		</ul>
		<div class="intro wrap_center">
			<div class="top_txt fade fade1 ani1"><img src="./assets/images/sec1_h5.png" alt=""></div>
			<div class="logo_title fade fade4 ani4"><img src="./assets/images/sec1_logo.png" alt=""></div>

			<div class="beta_popup fade fade4 ani4">
				<button type="button" class="modal_step_open" modal_step="Pop1"><img src="./assets/images/B_popup.png"></button>
			</div>

			<!-- PC 버튼 -->
			<div class="btn fade fade10 ani10" style="margin-top: 40px;">
				<a href="#page2"><img src="./assets/images/Down_row.png" alt=""></a>
			</div>
		</div>
	</div>

	<!-- 날짜 확인 테스트 -->
<?php
	if ($currentDateTime > $startDateTime) {
		echo '
		<!--Section3-->
	<div class="section" id="section3" style="background: white;">
		<div class="wrap">
			<div class="top_tit" style="background: url(./assets/images/yw_pc_004.png) no-repeat center center; background-size: cover;">
				<div class="tit fade fade1">
					<img class="pc500_only" src="./assets/images/yw_pc_005.png" alt="">
					<img class="mo500_only fade fade1" src="./assets/images/yw_mo_005.png" alt="">
				</div>
				<img class="mo500_only" src="./assets/images/sec_mo_bg.png" alt="">
			</div>
			<div class="sections_back" style="background-size: cover; height: 700px;">
				<div class="items-box" style="background: whie;">
					<div class="items">
						<img class="items-1mg fade fade2" src="./assets/images/event1.png">
					</div>
					<div class="items">
						<img class="items-1mg fade fade4" src="./assets/images/event2.png">
					</div>
					<div class="items">
						<img class="items-1mg fade fade6" src="./assets/images/event3.png">
					</div>
					<div class="items">
						<img class="items-1mg fade fade8" src="./assets/images/event4.png">
					</div>
					<div class="items">
						<img class="items-1mg fade fade10" src="./assets/images/event5.png">
					</div>
				</div>
			</div>
		</div>
	</div>
		';
	}
?>
	<!--Section4-->
	<div class="section" id="section4" style="background: #f8f7f0;">
		<div class="wrap">
			<div class="top_tit" style="background: url(./assets/images/yw_pc_006.png) no-repeat center center; background-size: cover;">
				<div class="tit fade fade1">
					<img class="pc500_only" src="./assets/images/yw_pc_007.png" alt="">
					<img class="mo500_only fade fade1" src="./assets/images/yw_mo_007.png" alt="">
				</div>
				<img class="mo500_only" src="./assets/images/sec_mo_bg.png" alt="">
			</div>
			<div class="sections_back" style=" background-size: cover; height: 720px;">
				<!--트위터-->
				<div class="evt-twitter fade fade5">
					<div class="twitter-container">
					  <div class="twitter-timeline twitter-timeline-rendered" style="display: flex; max-width: 100%; margin-top: 0px; margin-bottom: 0px;"><iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" class="" style="position: static; visibility: visible; width: 727px; height: 3387px; display: block; flex-grow: 1;" title="Twitter Timeline" src="https://syndication.twitter.com/srv/timeline-profile/screen-name/tenjouhi_M?dnt=false&amp;embedId=twitter-widget-0&amp;features=eyJ0ZndfdGltZWxpbmVfbGlzdCI6eyJidWNrZXQiOltdLCJ2ZXJzaW9uIjpudWxsfSwidGZ3X2ZvbGxvd2VyX2NvdW50X3N1bnNldCI6eyJidWNrZXQiOnRydWUsInZlcnNpb24iOm51bGx9LCJ0ZndfdHdlZXRfZWRpdF9iYWNrZW5kIjp7ImJ1Y2tldCI6Im9uIiwidmVyc2lvbiI6bnVsbH0sInRmd19yZWZzcmNfc2Vzc2lvbiI6eyJidWNrZXQiOiJvbiIsInZlcnNpb24iOm51bGx9LCJ0ZndfZm9zbnJfc29mdF9pbnRlcnZlbnRpb25zX2VuYWJsZWQiOnsiYnVja2V0Ijoib24iLCJ2ZXJzaW9uIjpudWxsfSwidGZ3X21peGVkX21lZGlhXzE1ODk3Ijp7ImJ1Y2tldCI6InRyZWF0bWVudCIsInZlcnNpb24iOm51bGx9LCJ0ZndfZXhwZXJpbWVudHNfY29va2llX2V4cGlyYXRpb24iOnsiYnVja2V0IjoxMjA5NjAwLCJ2ZXJzaW9uIjpudWxsfSwidGZ3X3Nob3dfYmlyZHdhdGNoX3Bpdm90c19lbmFibGVkIjp7ImJ1Y2tldCI6Im9uIiwidmVyc2lvbiI6bnVsbH0sInRmd19kdXBsaWNhdGVfc2NyaWJlc190b19zZXR0aW5ncyI6eyJidWNrZXQiOiJvbiIsInZlcnNpb24iOm51bGx9LCJ0ZndfdXNlX3Byb2ZpbGVfaW1hZ2Vfc2hhcGVfZW5hYmxlZCI6eyJidWNrZXQiOiJvbiIsInZlcnNpb24iOm51bGx9LCJ0ZndfdmlkZW9faGxzX2R5bmFtaWNfbWFuaWZlc3RzXzE1MDgyIjp7ImJ1Y2tldCI6InRydWVfYml0cmF0ZSIsInZlcnNpb24iOm51bGx9LCJ0ZndfbGVnYWN5X3RpbWVsaW5lX3N1bnNldCI6eyJidWNrZXQiOnRydWUsInZlcnNpb24iOm51bGx9LCJ0ZndfdHdlZXRfZWRpdF9mcm9udGVuZCI6eyJidWNrZXQiOiJvbiIsInZlcnNpb24iOm51bGx9fQ%3D%3D&amp;frame=false&amp;hideBorder=true&amp;hideFooter=false&amp;hideHeader=false&amp;hideScrollBar=true&amp;lang=ja&amp;origin=https%3A%2F%2Fouterplane.game.onstove.com%2Fpreregist%2Fjapan&amp;sessionId=bafd07e3c135d400f2045b6fab5cce3f5208381f&amp;showHeader=true&amp;showReplies=false&amp;theme=dark&amp;transparent=true&amp;widgetsVersion=2615f7e52b7e0%3A1702314776716"></iframe></div>
					  <script async="" src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
					</div>
				</div>
				<img class="twitter-border fade fade5" src="./assets/images/border.png">
				<img class="twitter-line fade fade3" src="./assets/images/yw_pc_008.png">
				<img class="twitter-line2 fade fade8" src="./assets/images/yw_pc_008.png">
			</div>
		</div>
	</div>
	<!--Section5-->
	<div class="section" id="section5" style="background: #f8f7f0;">
		<div class="wrap">
			<div class="top_tit" style="background: url(./assets/images/yw_pc_009.png) no-repeat center center; background-size: cover;">
				<div class="tit fade fade1">
					<img class="pc500_only" src="./assets/images/yw_pc_010.png" alt="">
					<img class="mo500_only fade fade1" src="./assets/images/yw_mo_010.png" alt="">
				</div>
				<img class="mo500_only" src="./assets/images/sec_mo_bg.png" alt="">
				
			</div>
			<div class="tab_con">
				<div id="tab2-1" class="tab-content tab-content2 current" style="background: url(./assets/images/sec5_tab2_1_bg.png) no-repeat top center; background-size: cover;">
					<div class="con fade fade3">
						<div class="txt">
							小雨がしとしと降りる夜明け、北邙山のとある道――<br>
							命をかけた脱出に挑む者たちがいた。<br>
							<br>
							2人の男と三歳になったばかり子供。<br>
							<br>
							突然現れた身の知らず覆面の者たちによって滅門された天下一勢家。<br>
							その最後の末裔を生かすため、護法の小龍は<br>
							幼い小家主を抱きしめて避難するのであった。<br>
							<br>
							小家主を守るために、冷たい道に赤い血を散らしながら<br>
							倒れてしまった逸胄の悲鳴を後にしながら――
						</div>
					</div>
				</div>
				<div id="tab2-2" class="tab-content tab-content2" style="background: url(./assets/images/sec5_tab2_2_bg.png) no-repeat bottom center; background-size: cover;">
					<div class="con pc_on">
						<div class="img pc1300_only sapa fade fade1"><img src="./assets/images/sapa.png" alt=""></div>
						<div class="img pc1300_only jeong fade fade2"><img src="./assets/images/jeong.png" alt=""></div>
						<div class="img mo1300_only sapa fade fade1"><img src="./assets/images/sapa_mo.png" alt=""></div>
						<div class="img mo1300_only jeong fade fade2"><img src="./assets/images/jeong_mo.png" alt=""></div>
					</div>
				</div>
				<div id="tab2-3" class="tab-content tab-content2" style="background-size: cover;">
					<div class="con">
						<!-- Swiper -->
						<div class="slide_wrap">
							<div class="swiper-container swiper_coverflow">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<div class="slider-image">
											<img src="./assets/images/sec5_img1.png" alt="">
										</div>
									</div>
									<div class="swiper-slide">
										<div class="slider-image">
											<img src="./assets/images/sec5_img2.png" alt="">
										</div>
									</div>
									<div class="swiper-slide">
										<div class="slider-image">
											<img src="./assets/images/sec5_img3.png" alt="">
										</div>
									</div>
									<div class="swiper-slide">
										<div class="slider-image">
											<img src="./assets/images/sec5_img4.png" alt="">
										</div>
									</div>
									<div class="swiper-slide">
										<div class="slider-image">
											<img src="./assets/images/sec5_img5.png" alt="">
										</div>
									</div>
								</div>
								<div class="swiper-button-prev"></div>
					  			<div class="swiper-button-next"></div>
								<div class="swiper-pagination"></div>
							</div>
						</div>
					</div>
				</div>
				<ul class="tabs tabs2">
					<li class="tab-link current" data-tab="tab2-1"><img src="./assets/images/sec5_tab1.png" alt=""></li>
					<li class="tab-link" data-tab="tab2-2"><img src="./assets/images/sec5_tab2.png" alt=""></li>
					<li class="tab-link" data-tab="tab2-3"><img src="./assets/images/sec5_tab3.png" alt=""></li>
				</ul>
				<div class="top_btn">
					<a href="#page1"><img src="./assets/images/top_btn.png" alt=""></a>
				</div>
			</div>
		</div>
		<footer>
			<p class="copyrights">
				© NEOWIZ All rights reserved. © SESISOFT Co., Ltd. © GNISOFT Co., Ltd.
			</p>
		</footer>
	</div>
</div>

<!-- 비디오 -->
<div class="modal modal modal_step_type2 modal_step_type2Video hidden3">
	<div class="modal_overlay">
	</div>
	<div class="modal_content modal_video type2 scrollbar" style="background: #fff0;">
		<div class="modalContWrap">
			<div class="modal_close cancerButton2 stop">
				<img src="./assets/images/modal_close.png" alt="모달 닫기버튼">
			</div>
		</div>
			<iframe src="https://www.youtube.com/embed/gtjISDLNlrg?enablejsapi=1&version=3&playerapiid=ytplayer" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
</div>
<script>
	function joinRes() {
        if( $('input[name=os]:checked').val() != "Android" && $('input[name=os]:checked').val() != "iOS") {
				showModal('Faild');
                return;
        }

        var email = $('#m_email').val();
    	if (!email) {
        	showModal('Faild');
        	return;
    	}

        var emailRegex = /^[a-zA-Z0-9._%+-]+@(?:[a-zA-Z0-9-]+\.)+[a-zA-Z]{2,}$/;
        if( !emailRegex.test(email) ) {
                showModal('Fail3');
				alert('メール形式ではありません。');
                return;
        }

        if( !$('#check_1').attr('checked')) {
                showModal('Faild');
                return;
        }

        $.ajax({
                type: "POST",
                url: "ajax.join.php?m_os="+$('input[name=os]:checked').val()+"&m_email="+email,
                dataType: "json",
                error: function() {
                  alert('データ処理中にエラーが発生しました');
                },
                success: function(data) {
                        if( data.retCode == "88" ) {
								alert("すでに申請されているメールです。")
                                return;
                        } else if( data.retCode == "00" ) {
								$('input[name=os]').attr('checked',false);
                                $('#m_email').val('');
                                $('#check_1').attr('checked',false);
                                $('#check_all').attr('checked',false);
                                showModal('1');
								
								// 구글 데이터레이어
								window.dataLayer = window.dataLayer || [];
								window.dataLayer.push({'event': 'join completed'});
								
								// 앤스위치
								new NSW_pre_reservation({track_id : '399', conv_id : email});
								
								// TNK
								TnkSession.actionCompleted();
								
								// 카울리
								var param = {
								  track_code : "988d2150-f68b-44ae-bb05-f9091a34d5d0",
								  event_name : "CA_CONVERSION",
								  event_param : email
								};
								cauly_send(param);
								
                                return;
                        } else {
                                alert('データ処理中にエラーが発生しました');
                        }
                }
        });
	}

	function showModal(modal_step) {

	        $('.modal_step').addClass('hidden'); // 이전 모달창을 숨김
	        //$(this).addClass('current');
	        $("."+ "modal_step" +modal_step).removeClass('hidden');
			
			console.log('fffff' + modal_step);

	}
</script>

<script type="text/javascript">
	var swiper = new Swiper('.swiper_coverflow', {
		spaceBetween: -250,
		observer: true,
		observeParents: true,
		loop: true,
		centeredSlides: true,
		paginationClickable: true,
        slidesPerView: "auto",
	  	pagination: {
			el: ".swiper-pagination",
    		clickable: true,
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
		effect: 'coverflow',
		coverflowEffect: {
	        rotate: 0,
	        stretch: 80,
	        depth: 400,
	        modifier: 1,
	        slideShadows: false,
	    },
			breakpoints: { 
				900: {
					spaceBetween: 0,
            	coverflowEffect: {
			        rotate: 0,
			        stretch: 100,
			        depth: 0,
			        modifier: 1,
			        slideShadows: false,
			    },
        	},
        	680: {
        		spaceBetween: 0,
            	coverflowEffect: {
			        rotate: 0,
			        stretch: 80,
			        depth: 0,
			        modifier: 1,
			        slideShadows: false,
			    },
        	},
        	0: {
        		spaceBetween: 0,
            	coverflowEffect: {
			        rotate: 0,
			        stretch: 80,
			        depth: 0,
			        modifier: 1,
			        slideShadows: false,
			    },
        	},
      	},
    });
</script>
<script>
	//최초 로드 시 iframe 높이값 비율에 맞게 세팅

		$('iframe').each((n, i) => {
			$(i).attr('id', `video_${n}`);

			var $videoIframe = document.querySelector(`#video_${n}`);
			var responsiveHeight = $videoIframe.offsetWidth * 0.5625;
			$videoIframe.setAttribute('height', responsiveHeight);

			//브라우저 리사이즈 시 iframe 높이값 비율에 맞게 세팅
			window.addEventListener('resize', function () {
				responsiveHeight = $videoIframe.offsetWidth * 0.5625;
				$videoIframe.setAttribute('height', responsiveHeight);
			});
		})

		$(".stop").on("click", function(){
			$("iframe")[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');
		});
</script>

</body>
</html>

<script type="text/javascript">
	$(document).ready(function() {
		$('#fullpage').fullpage({
			navigation: false,
			anchors: ['page1', 'page2', 'page3', 'page4', 'page5'],
			animateAnchor:false,
			scrollOverflow: false,

			// 특정 인덱스일 때
			'afterLoad': function (anchorLink, index) {
				if (index == 1){
            		$('ul.nav li').removeClass('on');
            		$('ul.nav li.one').addClass('on');
            		$('ul.nav').addClass('hidden2');
				}
				if (index == 2){
            		$('ul.nav li').removeClass('on');
            		$('ul.nav li.two').addClass('on');
            		$('ul.nav').removeClass('hidden2');
				}
				if (index == 3){
            		$('ul.nav li').removeClass('on');
            		$('ul.nav li.three').addClass('on');
            		$('ul.nav').removeClass('hidden2');
				}
				if (index == 4){
            		$('ul.nav li').removeClass('on');
            		$('ul.nav li.four').addClass('on');
            		$('ul.nav').removeClass('hidden2');
				}
				if (index == 5){
            		$('ul.nav li').removeClass('on');
            		$('ul.nav li.five').addClass('on');
            		$('ul.nav').removeClass('hidden2');
				}
			},
		});
	});
</script>
<script>
	function Succes(){
		showModal('Succes');
	}
</script>
	


<!-- -------------팝업---------------- -->

<div class="modal modal modal_step modal_stepPop1 hidden">
	<div class="modal_overlay">
	</div>
	<div class="modal_content modal_md type1 scrollbar" style="background: transparent;">
		<img src="./assets/images/B_popup2.png" alt="">
		
		<div class="pop_btns">   
			<div class="pop_btn1">
				<li>
					<input type="checkbox" id="check_1">
					<label for="check_1" class="check_style1"><img src="./assets/images/pop_text1.png" alt=""></label>
				</li>
			</div>
			<ul class="os">
				<li class="radio1">
					<input class="os_radio" type="radio" name="os" id="os_2" value="iOS" checked>
					<label for="os_2" class="radio_style1"><img src="./assets/images/pop_text2.png" alt=""></label>
				</li>
				<li class="radio2">
					<input class="os_radio" type="radio" name="os" id="os_1" value="Android">
					<label for="os_1" class="radio_style1"><img src="./assets/images/pop_text3.png" alt=""></label>
				</li>
			</ul>
			<div class="input_wrap">
				<img class="input_bg" src="./assets/images/input_bg.png">
				<input type="text" id="m_email" value="" placeholder="メールアドレス">
			</div>
			<button type="button" class="modal_step_open3" onclick="joinRes();">
				<img src="./assets/images/Beta_btn.png" alt="">
			</button>
		</div>
		<div class="button" style="position: fixed; margin-top: -800px; margin-left: 590px;">
			<a href="#none" class="cancerButton modal_step_open scroll_block" modal_step="Pop2" ><img src="./assets/images/pop_x.png" alt=""></a>
		</div>
	</div>
</div>

<!-- B테스트 신청이 완료되었습니다. -->
<div class="modal modal modal_step modal_stepFaild hidden">
	<div class="modal_overlay">
	</div>
	<div class="modal_content modal_md type1 scrollbar" style="background: transparent;">
		<img src="./assets/images/succes_pop.png" alt="">
		<div class="layoutCont">
			<div class="certiTxt">
				<div class="modalContWrap">
					<div class="modal_con">   
						  <div class="button" style="margin-top: 40px;">
							<button type="button" class="cancerButton"><img src="./assets/images/succesPop_btn.png" alt=""></button>
						  </div>
					</div>
				</div>
			</div>           
		</div>
	</div>
</div>
<!-- B테스트 신청이 완료되었습니다. -->
<div class="modal modal modal_step modal_step1 hidden">
	<div class="modal_overlay">
	</div>
	<div class="modal_content modal_md type1 scrollbar" style="background: transparent;">
		<img src="./assets/images/Succes.png" alt="">
		<div class="layoutCont">
			<div class="certiTxt">
				<div class="modalContWrap">
					<div class="modal_con"> 
						<a href="https://x.com/tenjouhi_M" style="position: absolute; margin-top: 240px; margin-left: -245px; scale: 100%;"><img src="./assets/images/link_X.png"></a>  
						  <div class="button" style="margin-top: 285px;">
							<button type="button" class="cancerButton"><img src="./assets/images/succes_btn.png" alt=""></button>
						  </div>
					</div>
				</div>
			</div>           
		</div>
	</div>
</div>
