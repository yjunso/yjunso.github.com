<?
$short_name = "성심공인";
$sname = "성심공인중개사 사무소";
$ceo_name = "이경노";
$address = "경기도 성남시 분당구 정자일로 227 (백궁지엔느빌딩 105호)";
$cellphone = "010-8613-6273";
$tel = "031-718-4500";
$fax="";
$email="knlee2010@gmail.com";
$register_num="886-06-00823";
?>

 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ko" lang="ko">

<!-- Mirrored from www.banman.net/main/main.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Aug 2017 05:30:51 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2, user-scalable=yes" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta property="og:type" content="website" />
<meta property="og:title" content="<?=$sname?>">
<meta property="og:site_name" content="<?=$sname?>">
<meta property="og:image" content="../images/inc/sungsim.jpg" />
<meta name="keyword" content="정자동부동산, 정자역부동산, 분당부동산, 부동산수수료, 중개수수료">
<meta name="description" content="'<?=$short_name?> 부동산'은 공인중개사의 안전하고 전문적인 중개서비스를 반값에 제공합니다"/>
<meta property="og:description" content="'<?=$short_name?> 부동산'은 공인중개사의 안전하고 전문적인 중개서비스를 반값에 제공합니다">
<title><?=$sname?></title>
<script type="text/javascript" src="/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="/js/inc.js"></script>
<script type="text/javascript" src="/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="/js/jquery.flexslider.js"></script>
<script type="text/javascript" src="/js/jquery.fullPage.js"></script>
<script type="text/javascript" src="/js/jquery.slimscroll.js"></script>
<script src="/ISAF/Libs/js/frmCheck.js" type="text/javascript"></script>
<link href="/css/inc.css" rel="stylesheet" type="text/css" />
<link href="/css/style_phone.css" rel="stylesheet" type="text/css" media="only screen and (max-width:1024px)" />
<link href="/css/style_pc.css" rel="stylesheet" type="text/css" media="only screen and (min-width:1025px)" />
<link href="/css/board.css" rel="stylesheet" type="text/css" />
<link href="/css/flexslider.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="/css/font.css" />
<link rel="stylesheet" href="/ISAF/Libs/js/jquery-ui/css/smoothness/jquery-ui-1.10.3.custom.css" />
<!--[if lt IE 9]>
<link type="text/css" href="../css/style_pc.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../css/font_ie.css" />
<![endif]-->
<link rel="shortcut icon" href="../images/inc/favicon.ico" />
<!--<script src="../../dmaps.daum.net/map_js_init/postcode.v2.js"></script>-->

<!--네이버 애널리틱스-->
<!--<script type="text/javascript" src="../../wcs.naver.net/wcslog.js"></script>
<script type="text/javascript">
if(!wcs_add) var wcs_add = {};
wcs_add["wa"] = "25bdd638e85ae4";
wcs_do();
</script>
-->
<script type="text/javascript">
//<![CDATA[
$(function(){
	$("#header .gnb_area .gnb > li.m_1").mouseenter(function(){
		$("#header .gnb_area .gnb .dp2").slideUp();
		if ($(this).children(".dp2").css("display") == "none") {
			$("#header .gnb_area .gnb .dp2").slideUp();
			$(this).children(".dp2").slideDown();
			$("#header .gnb_area .gnb .dp1").removeClass("on");
			$(this).children(".dp1").addClass("on");
			$("#header .gnb_area .gnb .m_main .dp1").addClass("on");
		}
	});
	$("#header .gnb_area .gnb > li.m_1").mouseleave(function(){
		$(this).children(".dp2").slideUp();
		$(this).children(".dp1").removeClass("on");
		$("#header .gnb_area .gnb .m_main .dp1").addClass("on");
	});

		$("#header .gnb_area .gnb .m_main .dp1").addClass("on");
		$("#contents .nav_area .gnb .m_main").css("display","block");
	$("#contents .nav_area .gnb .sm_main").addClass("on");

	//bookmark
	$(document).on('click', '#bookmark', function(e){
		e.preventDefault();
		var bUrl = location.href;
		var bTitle = "<?=$sname?>에 오신 것을 환영합니다.";
		try {
			if (window.sidebar) {
				window.sidebar.addPanel(bTitle, bUrl, "");
			} else if (window.external || document.all) {
				window.external.AddFavorite(bUrl, bTitle);
			} else if (window.opera) {
				$("a#bookmark").attr("rel","sidebar");
			}
		} catch (err) {
			alert("죄송합니다. 현재 브라우저는 스크립트로 즐겨찾기 추가 기능을 지원하지 않습니다.\n즐겨찾기에 추가하시려면,\n Ctrl + D 키를 눌러주십시오.");
		}
	});
})
//]]>
</script>
<iframe name='doquery' width='100%' height='200' align='center' style='display:none;'></iframe>
</head><script language="javascript">
<!--
function kakaoOnline(){
	var n = $("#quick_name").val();
	var h = $("#quick_hp").val();
	var c = $("#quick_content").val();
	if (!n.trim()){
		alert("신청자명을 입력해주세요.");
		$("#quick_name").focus();
		return;
	}
	if (!h.trim()){
		alert("연락처를 입력해주세요.");
		$("#quick_hp").focus();
		return;
	}
	if (!c.trim()){
		alert("내용을 입력해주세요.");
		$("#quick_content").focus();
		return;
	}

	var paramq = $("#qTFrm").serialize();
	var urlq = "../dev/ajax_executeq.html";
	$.post(urlq, paramq, function(result) {
		if(result=="ok"){
			alert("전송되었습니다. \n담당자 확인 후 빠르게 연락드리겠습니다.");
			$("#qTFrm")[0].reset();
			$(".kt").hide();
		}else{
			alert("등록에 실패했습니다. \n잠시 후 다시 시도해주세요.");
			$("#qTFrm")[0].reset();
			$(".kt").hide();
		}
	});
}
-->
</script>
<body class="main">
<div class="l-wrapper box0">
<div class="l-main" id="divMain">
<!--header-->
<div id="header">
	<div class="top_area">
		<div class="box1">
			<ul class="left_menu">
				<li class="st1"><a href="../guide/sitemap.html">전체메뉴</a></li>
				<li class="st2"><a href="/main/main.php">홈</a></li>
				<li class="st3" id="bookmark"><a href="javascript:void();">즐겨찾기</a></li>
			</ul>
			<ul class="right_menu">
								<li class="st1"><a href="../member/login.html">로그인</a></li>
				<li class="st2"><a href="../member/join.html">회원가입</a></li>
							</ul>
		</div>
	</div>
	<div class="gnb_area">
		<div class="box1">
			<h1 class="logo"><a href="/main/main.php"><img src="../images/inc/h_logo.png" alt="<?=$sname?>"></a></h1>
			   			<ul class="gnb center">
	<li class="m_1">
	<a href="../sub1/goods_find.html" class="dp1">부동산 구하기<span class="icon"></span></a>
	<ul class="dp2">
		<li class="sm_goods_find"><a href="../sub1/goods_find.html">지도로 찾기<span class="icon"></span></a></li>
		<li class="sm_1"><a href="../sub1/1_1.html">분양정보<span class="icon"></span></a></li>
		<li class="sm_2"><a href="../sub2/2_2.html">요청하기<span class="icon"></span></a></li>
	</ul>
	</li>
	<li class="m_2">
	<a href="../sub2/2_1.html" class="dp1">부동산 내놓기<span class="icon"></span></a>
	<ul class="dp2">
		<li class="sm_2"><a href="../sub2/2_2.html">부동산 구하기<span class="icon"></span></a></li>
		<li class="sm_1"><a href="../sub2/2_1.html">부동산 내놓기<span class="icon"></span></a></li>
	</ul>
	</li>
	<li data-menuanchor="4thPage" class="m_3">
	<a href="main.php#4thPage" class="dp1">서비스소개<span class="icon"></span></a>
	<ul class="dp2">
		<li class="sm_1"><a href="../sub3/3_1.html">서비스소개<span class="icon"></span></a></li>
		<!--<li class="sm_2"><a href="../sub3/3_2.php">부동산 구하는 방법<span class="icon"></span></a></li>
            <li class="sm_3"><a href="../sub3/3_3.php">부동산 내놓는 방법<span class="icon"></span></a></li>-->
		<li class="sm_4"><a href="../sub3/3_4.html">수수료 알아보기<span class="icon"></span></a></li>
	</ul>
	</li>
	<!--    <li class="m_4">
        <a href="../main/main.php#8thPage" class="dp1">도움말<span class="icon"></span></a>
        <ul class="dp2">
            <li class="sm_1"><a href="../main/main.php#8thPage">서비스 이용 질문<span class="icon"></span></a></li>
            <li class="sm_2"><a href="../main/main.php#8thPage">부동산 구하기 질문<span class="icon"></span></a></li>
            <li class="sm_3"><a href="../main/main.php#8thPage">부동산 내놓기 질문<span class="icon"></span></a></li>
        </ul>
    </li>-->
	<li data-menuanchor="8thPage" class="m_4">
	<a href="main.php#8thPage" class="dp1">도움말<span class="icon"></span></a>
	<ul class="dp2">
		<li class="sm_1"><a href="main.php#8thPage">서비스 이용 질문<span class="icon"></span></a></li>
		<li class="sm_2"><a href="main.php#8thPage">부동산 구하기 질문<span class="icon"></span></a></li>
		<li class="sm_3"><a href="main.php#8thPage">부동산 내놓기 질문<span class="icon"></span></a></li>
	</ul>
	</li>
	<li class="m_member">
	<a href="../member/login.html" class="dp1">로그인<span class="icon"></span></a>
	<ul class="dp2">
		<li class="sm_login"><a href="../member/login.html">로그인<span class="icon"></span></a></li>
		<li class="sm_join"><a href="../member/join.html">회원가입<span class="icon"></span></a></li>
		<!--<li class="sm_id"><a href="../member/id.php">아이디 찾기<span class="icon"></span></a></li>
            <li class="sm_pw"><a href="../member/pw.php">비밀번호 찾기<span class="icon"></span></a></li>-->
	</ul>
	</li>
	 
	<li class="m_guide">
	<a href="../guide/agree.html" class="dp1">홈페이지 이용안내<span class="icon"></span></a>
	<ul class="dp2">
		<li class="sm_sitemap"><a href="../guide/sitemap.html">사이트맵<span class="icon"></span></a></li>
		<li class="sm_agree"><a href="../guide/agree.html">이용약관<span class="icon"></span></a></li>
		<li class="sm_privacy"><a href="../guide/privacy.html">개인정보처리방침<span class="icon"></span></a></li>
		<!--<li class="sm_email"><a href="../guide/email.php">이메일무단수집거부<span class="icon"></span></a></li>-->
	</ul>
	</li>
</ul>
                        <ul class="tel_area">
            	<li>
                	<div class="tel_clu st1">Tel. <span><?=$tel?></span></div>
                	<div class="tel_clu st2">H.P. <span><?=$cellphone?></span></div>
                	
                </li>
                <li><p>상담시간 : 월~토 AM 10:00 ~ PM 07:00</p></li>
            </ul>
                        <a href="#nav" class="js-toggle-nav nav_btn open pc_hide"></a>
			<ul class="sns_list">
				<li class="st1">
                    <a href="javascript:void(0);"><img src="../images/inc/icon_katalk.png" alt="카카오톡" /></a>
                    <div class="pop_sub kt">
                        <span class="arrow"></span>
                        <div class="inner">
                            <div class="k_banner">
                                <p class="t1">kakao <span>talk</span></p>
                                <p class="t2">카톡아이디1 : <span>banman</span></p>
                                <p class="t2">카톡아이디2 : <span>banman2</span></p>
                                <p class="t3">고객분들께 친절한 상담을 약속드립니다.</p>
                            </div>
							<form name="qTFrm" id="qTFrm">
                            <p class="inp_mg"><input type="text" name="quick_name" id="quick_name" class="input_st inp_w6" placeholder="신청자명" /></p>
                            <p class="inp_mg"><input type="text" name="quick_hp" id="quick_hp" class="input_st inp_w6" placeholder="(예시) 01012345678" /></p>
                            <p class="inp_mg"><textarea name="quick_content" id="quick_content" class="input_st textarea_w2 " placeholder="내용"></textarea></p>
                            <p class="sp_apply"><span class="bg"></span><input type="button" class="input_st online" value="전송하기" onClick="kakaoOnline()"/></p>
							</form>
                        </div>
                    </div>
                </li>
				<li class="st2"><a href="" target="_blank"><img src="../images/inc/icon_blog.png" alt="블로그" /></a></li>
				<li class="st4">
                	 <a class="phone_tel" href="tel:<?=$tel?>"><img src="../images/inc/icon_tel.png" alt="전화" /></a>
					<a class="pc_tel" href="javascript:void(0);"><img src="../images/inc/icon_tel.png" alt="전화" /></a>
                    <div class="pop_sub tel">
                        <span class="arrow"></span>
                        <div class="inner">
							<p class="tel1">Tel. <span><?=$tel?></span></p>
							<p class="tel2">H.P. <span><?=$cell_phone?></span></p>
							
                        </div>
                    </div>
                </li>
				<li class="st3" data-menuanchor="5thPage"><a href="/main/main.php#5thPage"><img src="../images/inc/icon_loca.png" alt="오시는길" /></a></li>
			</ul>
		</div>
		<script type="text/javascript">
            $(function(){
                $(".sns_list > li > a").click(function(){
                    if($(this).next(".pop_sub").css("display") == "none"){
						$(".pop_sub").hide();
                        $(this).next(".pop_sub").show();
                    }else{
                        $(this).next(".pop_sub").hide();
                    }
                });
            });
        </script>
		<p class="cl"></p>
	</div>
	
	</div>
<!--header end-->
<!--contents-->
<div id="contents">
	    <div class="doc">
	<div id="fullpage">
		<div id="section0" class="section main_bg0">
				<div class="main_visu_main">
					<ul class="slides">
						<li >
						<div class="box1">
							<div class="slo_area">
								<p class="slo_t1">부동산 중개 수수료</p>
								<p class="slo_t2">이제는 <span><?=$short_name?></span></p>
								<p class="slo_t3"><strong>'<?=$short_name?> 부동산'</strong>은 발상의 전환을 통한 합리적 운영으로 공인중개사의 안전하고<br />전문적인 부동산 중개서비스를 반값에 제공합니다</p>
							</div>
							<ul class="quick_btn">
								<li><a href="../sub1/goods_find.html"><span class="bg"></span><span class="tt plus">부동산 구하기</span></a></li>
								<li><a href="../sub2/2_1.html"><span class="bg"></span><span class="tt minus">부동산 내놓기</span></a></li>
								<li class="distri"><a href="../sub1/1_1.html"><span class="bg"></span><span class="tt plus">분양정보 보기</span></a></li>
							</ul>
						</div>
						</li>
						<!--
						<li class="st2">
						<div class="box1">
							<div class="slo_area">
								<p class="slo_t1">부동산 중개 수수료</p>
								<p class="slo_t2">이제는 <span><?=$short_name?></span></p>
								<p class="slo_t3"><strong>'<?=$short_name?> 부동산'</strong>은 발상의 전환을 통한 합리적 운영으로 공인중개사의 안전하고<br />전문적인 부동산 중개서비스를 반값에 제공합니다</p>
							</div>
							<ul class="quick_btn">
								<li><a href="../sub1/goods_find.html"><span class="bg"></span><span class="tt plus">부동산 구하기</span></a></li>
								<li><a href="../sub2/2_1.html"><span class="bg"></span><span class="tt minus">부동산 내놓기</span></a></li>
								<li class="distri"><a href="../sub1/1_1.html"><span class="bg"></span><span class="tt plus">분양정보 보기</span></a></li>
							</ul>
						</div>
						</li>
						<li class="st3">
						<div class="box1">
							<div class="slo_area">
								<p class="slo_t1">부동산 중개 수수료</p>
								<p class="slo_t2">이제는 <span><?=$short_name?></span></p>
								<p class="slo_t3"><strong>'<?=$short_name?> 부동산'</strong>은 발상의 전환을 통한 합리적 운영으로 공인중개사의 안전하고<br />전문적인 부동산 중개서비스를 반값에 제공합니다</p>
							</div>
							<ul class="quick_btn">
								<li><a href="../sub1/goods_find.html"><span class="bg"></span><span class="tt plus">부동산 구하기</span></a></li>
								<li><a href="../sub2/2_1.html"><span class="bg"></span><span class="tt minus">부동산 내놓기</span></a></li>
								<li class="distri"><a href="../sub1/1_1.html"><span class="bg"></span><span class="tt plus">분양정보 보기</span></a></li>
							</ul>
						</div>
						</li>
						-->
					</ul>
				</div>
				<!--<script type="text/javascript">
                    $(window).load(function(){
                        $(".main_visu_main > ul > li").css("min-height", $(window).height())
                    });
                    $(window).resize(function(){ 
                        $(".main_visu_main > ul > li").css("min-height", $(window).height())
                    });
                </script>-->

			<div class="navi_area">
				<div class="box1">
					<ul>
						<li data-menuanchor="2ndPage"><span class="bar"></span><span class="va"></span><span class="va_tt"><a href="#2ndPage"><div class="num"><span>1</span></div><div class="tt_wrap"><span class="st1">real estate</span><span class="st2">서비스소개</span></div></a></span></li>
						<li data-menuanchor="4thPage"><span class="bar"></span><span class="va"></span><span class="va_tt"><a href="#4thPage"><div class="num"><span>2</span></div><div class="tt_wrap"><span class="st1">real estate</span><span class="st2">수수료 알아보기</span></div></a></span></li>
						<li data-menuanchor="6thPage"><span class="bar"></span></span><span class="va"></span><span class="va_tt"><a href="#6thPage"><div class="num"><span>3</span></div><div class="tt_wrap"><span class="st1">real estate</span><span class="st2">부동산 구하는 방법</span></div></a></span></li>
						<li data-menuanchor="7thPage"><span class="bar"></span><span class="va"></span><span class="va_tt"><a href="#7thPage"><div class="num"><span>4</span></div><div class="tt_wrap"><span class="st1">real estate</span><span class="st2">부동산 내놓는 방법</span></div></a></span></li>
					</ul>
				</div>
			</div>
		</div>
		<!--section1 -->
		<div id="section1" class="section main_bg1">
			<div class="box1">
				<p class="tit_icon"></p>
				<div class="main_tit"><p class="tit_icon"></p>'<?=$short_name?>는'</div>
				<ul class="service_list">
					<li>
					<div class="wrap">
						<div>
							<p class="icon_st1"></p>
							<p class="t1">수수료 반값</p>
							<p class="t2"><strong>'<?=$short_name?>'</strong>는 모든 부동산 거래에 대해 법정 <br />중개수수료의 50%만을 받습니다</p>
						</div>
					</div>
					</li>
					<li>
					<div class="wrap">
						<div>
							<p class="icon_st2"></p>
							<p class="t1">전월세 재계약 무료</p>
							<p class="t2"><strong>'<?=$short_name?>'</strong>는 모든 부동산의 전월세 재계약을 <br />무료로 진행하여 드립니다</p>
						</div>
					</div>
					</li>
					<li>
					<div class="wrap">
						<div>
							<p class="icon_st3"></p>
							<p class="t1">정직한 매물</p>
							<p class="t2"><strong>'<?=$short_name?>'</strong>는 모든 매물을 확인 후 등록하여 <br />허위매물이 없습니다</p>
						</div>
					</div>
					</li>
					<li>
					<div class="wrap">
						<div>
							<p class="icon_st4"></p>
							<p class="t1">편리한 결제</p>
							<p class="t2"><strong>'<?=$short_name?>'</strong>는 중개수수료를 카드, 계좌이체 현금 등<br />고객님께서 편리하신 방법으로 받습니다</p>
						</div>
					</div>
					</li>
					<li>
					<div class="wrap">
						<div>
							<p class="icon_st5"></p>
							<p class="t1">안전한 거래</p>
							<p class="t2"><strong>'<?=$short_name?>'</strong>는 일반적인 손해배상 한도의 두배인 2억원의<br />공제보험에 가입하여 더욱 안전합니다</p>
						</div>
					</div>
					</li>
					<li>
					<div class="wrap">
						<div>
							<p class="icon_st6"></p>
							<p class="t1">준법경영</p>
							<p class="t2"><strong>'<?=$short_name?>'</strong>는 소비자의 권익보호와 건전한 부동산 중개문화<br />정착을 위해 관련 법규정을 철저히 준수합니다</p>
						</div>
					</div>
					</li>
				</ul>
			</div>
		</div>
		<!--section2 -->
		<div id="section2" class="section main_bg2">
			<div class="box1">
				<p class="main_info"><strong class="st1">‘<?=$short_name?>’의 부동산 중개 수수료</strong>는 법정 수수료의 50% 이나<br />부가가체세를 포함하고 있어 <strong class="st2">실제 50% 이상 저렴</strong>합니다</p>
				<div><img src="../images/main/p3.png" /></div>
			</div>
		</div>
		<!--section3 -->
		<div id="section3" class="section main_bg3">
			<div class="box1">
				<input type="hidden" name="type1" id="type1">
				<input type="hidden" name="type2" id="type2">
				<p class="tit_icon"></p>
				<div class="main_tit"><p class="tit_icon"></p>'<?=$short_name?>는'</div>
				<p class="exp">거래금액을 입력하면 <strong>'<?=$short_name?>'</strong>의 수수료를 확인하실 수 있습니다.</p>
				<ul class="m_tab">
					<li class="st1 on">
					<div class="option_sel_box selectlayer">
						<div class="sel_st" id="defaultSel2"><span class="va"></span><a href="javascript:void(0);" class="title">건물종류 선택</a></div>
						<div class="sel_list">
							<ul>
								<li img-data="" data-idx="1" data-index="1" data-txt="아파트" data-val="H" class="optclick">
								<a href="javascript:void(0);" >아파트</a>
								</li>
								<li img-data="" data-idx="2" data-index="2" data-txt="오피스텔" data-val="O" class="optclick">
								<a href="javascript:void(0);" >오피스텔</a>
								</li>
								<li img-data="" data-idx="3" data-index="3" data-txt="단독/다가구" data-val="H" class="optclick">
								<a href="javascript:void(0);" >단독/다가구</a>
								</li>
								<li img-data="" data-idx="4" data-index="4" data-txt="연립/다세대" data-val="H" class="optclick">
								<a href="javascript:void(0);" >연립/다세대</a>
								</li>
								<li img-data="" data-idx="5" data-index="5" data-txt="원룸" data-val="H" class="optclick">
								<a href="javascript:void(0);" >원룸</a>
								</li>
								<li img-data="" data-idx="6" data-index="6" data-txt="상가" data-val="L" class="optclick">
								<a href="javascript:void(0);" >상가</a>
								</li>
								<li img-data="" data-idx="7" data-index="7" data-txt="사무실" data-val="L" class="optclick">
								<a href="javascript:void(0);" >사무실</a>
								</li>
								<li img-data="" data-idx="8" data-index="8" data-txt="토지" data-val="L" class="optclick">
								<a href="javascript:void(0);" >토지</a>
								</li>
								<li img-data="" data-idx="9" data-index="9" data-txt="빌딩" data-val="L" class="optclick">
								<a href="javascript:void(0);" >빌딩</a>
								</li>
							</ul>
						</div>
					</div>
					</li>
					<li class="st2">
					<div class="option_sel_box selectlayer">
						<div class="sel_st" id="defaultSel2"><a href="javascript:void(0);"><span class="va"></span><span class="title">거래종류 선택</span></a></div>
						<div class="sel_list">
							<ul>
								<li img-data="" thumb-data="201602061834580.jpg" data-idx="1" data-index="1" data-txt="매매" data-val="S" class="optclick">
								<a href="javascript:void(0);" >매매</a>
								</li>
								<li img-data="" thumb-data="201603311751370.jpg" data-idx="2" data-index="2" data-txt="전세" data-val="Y" class="optclick">
								<a href="javascript:void(0);" >전세</a>
								</li>
								<li img-data="" thumb-data="" data-idx="3" data-index="3" data-txt="월세" data-val="M" class="optclick">
								<a href="javascript:void(0);" >월세</a>
								</li>
							</ul>
						</div>
					</div>
					</li>
				</ul>

                <div class="out_inner">
				<div class="output1">
					<div class="op_left">
                        <div class="op_tit_top dn" id="MdivView"><span>월세</span><input type="text" name="input_price1" id="input_price1" class="input_st" onkeyup="chkNum(this, ''); comma(this);view_price();" /><span>만원</span></div>
                        <div class="op_tit_bottom"><span id="pr_txt">거래금액</span><input type="text" name="input_price" id="input_price" class="input_st" onkeyup="chkNum(this, ''); comma(this);view_price();" /><span>만원</span></div>
                    </div>
					<div class="op_center">=</div>
					<div class="op_right"><span class="price_tt"><?=$short_name?> 수수료</span><span class="money" id="ban1"><span>부가가치세 포함</span>0만원</span></div>
				</div>
				<div class="output2">
					<span class="line_left"></span>
					<span class="line_bottom"></span>
					<dl class="st1">
					<dt><?=$sname?></dt>
					<dd>
					<div class="gra1">
						<span class="va"></span>
						<div>
							<span class="p1" id="ban2">0만원</span>
							<span class="p2" id="rate">(100%)</span>
						</div>
					</div>
					<div class="gra2">
						<span class="va"></span>
						<div>
							<span class="p2" id="diff">절감액(0만원)</span>
						</div>
					</div>
					</dd>
					</dl>
					<dl class="st2">
					<dt>법정중개수수료</dt>
					<dd>
					<div class="gra1">
						<span class="va"></span>
						<div>
							<span class="p1" id="comm">0만원</span>
							<span class="p2">(100%)</span>
						</div>
					</div>
					<p class="info_t">※ 부가가치세 10%포함</p>
					</dd>
					</dl>
				</div>
                </div>
			</div>
		</div>

		<!--section4 -->
		<div id="section4" class="section main_bg4">
			<div class="box1">
				<div class="main_tit"><p class="tit_icon"></p>오시는 길</div>
				<div class="loca_inner">
					<div class="rd_box">
						<ol>
							<li><span class="numb">1</span>분당선 정자역 3번 출구에서 전면에 보이는 두개의 고층빌딩 중 좌측의 킨스타워로 이동 (우측은 SK U Tower)</li>
							<li><span class="numb">2</span>빌딩 앞 광장을 지나 1층 로비의 엘리베이터 또는 로비 옆 외부공간의 에스컬레이터를 이용하여 3층에서 하차</li>
							<li><span class="numb">3</span>3층 복도를 따라 이동 후 ‘<?=$short_name?> 부동산’ 도착 (클린토피아 옆)</li>
						</ol>
					</div>
					<ul class="loca">
						<li class="pic_area">
						<div class="pic_l">
							<div>
								<img src="../images/main/loca_pic1.jpg" />
								<p class="tt">① 분당선 정자역 3번출구</p>
								<p class="arrow right"></p>
							</div>
							<div>
								<img src="../images/main/loca_pic2.jpg" />
								<p class="tt">② 좌측 킨스타워 3층</p>
								<p class="arrow right"></p>
							</div>
							<div>
								<img src="../images/main/loca_pic3.jpg" />
								<p class="tt">③ <?=$short_name?> 부동산</p>
							</div>
						</div>
						</li>
						<li class="map_area">
						<div class="m_map"><div><div id="daumRoughmapContainer1495978912250" class="root_daum_roughmap root_daum_roughmap_landing"></div></div></div>
						<script charset="UTF-8" class="daum_roughmap_loader_script" src="../../dmaps.daum.net/map_js_init/roughmapLoader.js"></script>
						<script charset="UTF-8">
						new daum.roughmap.Lander({
						"timestamp" : "1495978912250",
						"key" : "hvfa",
						"mapWidth" : "600",
						"mapHeight" : "100%"
						}).render();
						</script>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<!--section5 -->
		<div id="section5" class="section main_bg4">
            <div class="main_visu5">
                <ul class="slides">
                    <li class="st1">
                    <div class="box1">
                        <div class="slogan">
                            <p class="t1">부동산 구하는 방법 STEP.01</p>
                            <p class="t2">매물 정보확인</p>
                            <p class="t3">전화 또는 사무실을 직접 방문하여 매물정보를 문의하시거나<br />
                            홈페이지의 매물정보를 검색하여 원하시는 부동산을 찾습니다</p>
                        </div>
                    </div>
                    </li>
                    <li class="st2">
                    <div class="box1">
                        <div class="slogan">
                            <p class="t1">부동산 구하는 방법 STEP.02</p>
                            <p class="t2">현장 방문</p>
                            <p class="t3">방문일정 협의 후 <strong>'<?=$short_name?>'</strong> 담당자와 함께 현장의<br />
                            이모저모를 살펴봅니다</p>
                        </div>
                    </div>
                    </li>
                    <li class="st3">
                    <div class="box1">
                        <div class="slogan">
                            <p class="t1">부동산 내놓는 방법 STEP.03</p>
                            <p class="t2">계약서 작성</p>
                            <p class="t3">마음에 드는 매물이 있을 경우 <strong>'<?=$short_name?>'</strong> 공인중개사와 함께 거래 계약서를 작성하고<br />계약금을 계약상대방에게 지급합니다.</p>
                        </div>
                    </div>
                    </li>
                    <li class="st4">
                    <div class="box1">
                        <div class="slogan">
                            <p class="t1">부동산 내놓는 방법 STEP.04</p>
                            <p class="t2">잔금 지급</p>
                            <p class="t3">잔금지급 당일 <strong>‘<?=$short_name?>’</strong> 공인중개사의 입회 하에 계약상대방에게<br />잔금을 지급하고 중개 수수료는 <strong>‘<?=$short_name?> 부동산’</strong> 에 지불 합니다</p>
                        </div>
                    </div>
                    </li>
                </ul>
            </div>
		</div>
		<!--section6 -->
		<div id="section6" class="section main_bg5">
			<div class="wrap">
				<div class="main_visu6">
					<ul class="slides">
						<li class="st1">
						<div class="box1">
							<div class="slogan">
								<p class="t1">부동산 내놓는 방법 STEP.01</p>
								<p class="t2">매물 등록 요청</p>
								<p class="t3">전화 또는 사무실을 직접 방문하여 매물을 등록 하시거나<br />
								홈페이지의 <strong>‘부동산 내놓기’</strong> 기능을 이용해 매물등록을 요청합니다</p>
							</div>
						</div>
						</li>
						<li class="st2">
						<div class="box1">
							<div class="slogan">
								<p class="t1">부동산 내놓는 방법 STEP.02</p>
								<p class="t2">방문 및 사진촬영</p>
								<p class="t3">고객님과 방문일정 협의 후 <strong>‘<?=$short_name?>’</strong> 담당자가 방문하여<br />매물점검 및 사진촬영을 진행합니다</p>
							</div>
						</div>
						</li>
						<li class="st3">
						<div class="box1">
							<div class="slogan">
								<p class="t1">부동산 내놓는 방법 STEP.03</p>
								<p class="t2">매물 홍보</p>
								<p class="t3"><strong>'<?=$short_name?>'</strong> 홈페이지와 기타 매체 등을 통해<br />등록된 매물을 홍보합니다.</p>
							</div>
						</div>
						</li>
						<li class="st4">
						<div class="box1">
							<div class="slogan">
								<p class="t1">부동산 내놓는 방법 STEP.04</p>
								<p class="t2">현장 방문</p>
								<p class="t3"><strong>'<?=$short_name?>'</strong> 담당자가 거래를 원하는 고객과 함께<br />방문하여 매물을 소개합니다</p>
							</div>
						</div>
						</li>
						<li class="st5">
						<div class="box1">
							<div class="slogan">
								<p class="t1">부동산 내놓는 방법 STEP.05</p>
								<p class="t2">계약서 작성</p>
								<p class="t3"><strong>'<?=$short_name?>'</strong> 공인중개사와 함께 거래 계약서를 작성하고<br />계약상대방으로부터 계약금을 수령합니다</p>
							</div>
						</div>
						</li>
						<li class="st6">
						<div class="box1">
							<div class="slogan">
								<p class="t1">부동산 내놓는 방법 STEP.06</p>
								<p class="t2">잔금수령</p>
								<p class="t3">잔금수령 당일 <strong>‘<?=$short_name?>’</strong> 공인중개사의 입회 하에 계약상대방으로부터 잔금을<br />수령하고 중개 수수료는 <strong>‘<?=$short_name?> 부동산’</strong> 에 지불 합니다</p>
							</div>
						</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!--section7 -->
		<div id="section7" class="section main_bg6">
			<div class="box1">
				<p class="tit_icon"></p>
				<div class="main_tit"><p class="tit_icon"></p>도움말</div>
				<div class="wrap_idx">
					<ul class="tab_idx_m click">
						<li class="on tab1" idx="0"><a href="javascript:void(0);"><span class="va"></span><p>서비스 이용 질문</p></a></li>
						<li class="tab2" idx="1"><a href="javascript:void(0);"><span class="va"></span><p>부동산 구하기 질문</p></a></li>
						<li class="tab3" idx="2"><a href="javascript:void(0);"><span class="va"></span><p>부동산 내놓기 질문</p></a></li>
					</ul>
					<div class="detail_wrap con_idx_m">
						<div class="idx detail" style=" display:block;">
							<ul class="faq_area faq_title">
																<li>
								<div class="inner">
									<p class="num">No.1</p>
									<span class="bar"></span>
									<p class="txt wordbk">회원가입은 꼭 해야 하나요?</p>
									<div class="f_btn_area"><a href="javascript:void(0);">펼쳐보기</a></div>
								</div>
								<div class="faq_view">
									<div class="title_area"><p>회원가입은 꼭 해야 하나요?</p></div>
									<div class="text_area">
										<iframe src="help_view81cb.html?b_name=service&amp;number=6" width="100%" height="175" frameborder="0"></iframe>
										<!-- <div class="text_in"><p><p>아닙니다 회원가입 없이도 매물보기, 수수료 조회하기 등&nbsp;모든 기능을 사용하실 수 있습니다.&nbsp;</p><p>다만 회원가입 시 마이페이지 메뉴에서&nbsp;나의 관심매물 등 일부 기능을 추가로 활용하실 수 있습니다.</p></p></div> -->
										<div class="close_area"><a href="javascript:void(0);"><p>닫기</p></a></div>
									</div>
								</div>
								</li>
																<li>
								<div class="inner">
									<p class="num">No.2</p>
									<span class="bar"></span>
									<p class="txt wordbk"><?=$sname?>의 중개 지역은 어디까지 인가요?</p>
									<div class="f_btn_area"><a href="javascript:void(0);">펼쳐보기</a></div>
								</div>
								<div class="faq_view">
									<div class="title_area"><p><?=$sname?>의 중개 지역은 어디까지 인가요?</p></div>
									<div class="text_area">
										<iframe src="help_view2e87.html?b_name=service&amp;number=19" width="100%" height="175" frameborder="0"></iframe>
										<!-- <div class="text_in"><p><p><?=$sname?>의 주요 중개지역은 분당, 판교등 성남시 전역이나 </p><p>수지, 죽전, 광교, 위례, 서울 등 인접지역에 대한 중개도&nbsp;가능합니다.&nbsp;</p></p></div> -->
										<div class="close_area"><a href="javascript:void(0);"><p>닫기</p></a></div>
									</div>
								</div>
								</li>
																<li>
								<div class="inner">
									<p class="num">No.3</p>
									<span class="bar"></span>
									<p class="txt wordbk">거래 시 수수료 외에 추가비용이 있나요?</p>
									<div class="f_btn_area"><a href="javascript:void(0);">펼쳐보기</a></div>
								</div>
								<div class="faq_view">
									<div class="title_area"><p>거래 시 수수료 외에 추가비용이 있나요?</p></div>
									<div class="text_area">
										<iframe src="help_view43fe.html?b_name=service&amp;number=20" width="100%" height="175" frameborder="0"></iframe>
										<!-- <div class="text_in"><p><p><?=$sname?>의 중개수수료는 법정수수료의 50%이며 부가가치세를 포함하고 있어 별도의 추가비용이 발생하지 않습니다.</p><p>&nbsp;</p><p>단, 부동산 매수(소유권이전 등기)와 전세(전세권설정&nbsp;등기)시 발생하는 등기수수료는 중개수수료에 포함되어 있지 않습니다.</p><p>또한&nbsp;상가거래 시 권리금이 있는 경우 기존 임차인에게만 권리금에 대한 일부 컨설팅비용이 발생할 수 있습니다.</p></p></div> -->
										<div class="close_area"><a href="javascript:void(0);"><p>닫기</p></a></div>
									</div>
								</div>
								</li>
																<li>
								<div class="inner">
									<p class="num">No.4</p>
									<span class="bar"></span>
									<p class="txt wordbk"><?=$sname?>은 아파트만 거래하나요?</p>
									<div class="f_btn_area"><a href="javascript:void(0);">펼쳐보기</a></div>
								</div>
								<div class="faq_view">
									<div class="title_area"><p><?=$sname?>은 아파트만 거래하나요?</p></div>
									<div class="text_area">
										<iframe src="help_view100a.html?b_name=service&amp;number=21" width="100%" height="175" frameborder="0"></iframe>
										<!-- <div class="text_in"><p><p>아닙니다 <?=$sname?>은 일반부동산업소와 동일하게 아파트, 오피스텔, 단독주택, 사무실, 상가, 토지 등 모든 매물을 중개합니다.</p><p>단, 고객님의 안전한 거래와 건전한 중개문화 정착을 위해 전매제한이 있는 분양권거래, 다운 계약서 작성&nbsp;등 위법성이 있는 중개업무는 하지 않습니다.&nbsp;</p></p></div> -->
										<div class="close_area"><a href="javascript:void(0);"><p>닫기</p></a></div>
									</div>
								</div>
								</li>
															</ul>
						</div>
						<div class="idx detail">
							<ul class="faq_area faq_title">
																<li>
								<div class="inner">
									<p class="num">No.1</p>
									<span class="bar"></span>
									<p class="txt wordbk">원하는 매물이 홈페이지에 없으면 어떻게 하나요?</p>
									<div class="f_btn_area"><a href="javascript:void(0);">펼쳐보기</a></div>
								</div>
								<div class="faq_view">
									<div class="title_area"><p>원하는 매물이 홈페이지에 없으면 어떻게 하나요?</p></div>
									<div class="text_area">
										<iframe src="help_view63a1.html?b_name=budong1&amp;number=3" width="100%" height="175" frameborder="0"></iframe>
										<div class="close_area"><a href="javascript:void(0);"><p>닫기</p></a></div>
									</div>
								</div>
								</li>
																<li>
								<div class="inner">
									<p class="num">No.2</p>
									<span class="bar"></span>
									<p class="txt wordbk"><?=$sname?>엔 허위매물이 없나요?</p>
									<div class="f_btn_area"><a href="javascript:void(0);">펼쳐보기</a></div>
								</div>
								<div class="faq_view">
									<div class="title_area"><p><?=$sname?>엔 허위매물이 없나요?</p></div>
									<div class="text_area">
										<iframe src="help_view2763.html?b_name=budong1&amp;number=14" width="100%" height="175" frameborder="0"></iframe>
										<div class="close_area"><a href="javascript:void(0);"><p>닫기</p></a></div>
									</div>
								</div>
								</li>
																<li>
								<div class="inner">
									<p class="num">No.3</p>
									<span class="bar"></span>
									<p class="txt wordbk"><?=$sname?>의 중개수수료는 얼마인가요?</p>
									<div class="f_btn_area"><a href="javascript:void(0);">펼쳐보기</a></div>
								</div>
								<div class="faq_view">
									<div class="title_area"><p><?=$sname?>의 중개수수료는 얼마인가요?</p></div>
									<div class="text_area">
										<iframe src="help_vieweaa7.html?b_name=budong1&amp;number=23" width="100%" height="175" frameborder="0"></iframe>
										<div class="close_area"><a href="javascript:void(0);"><p>닫기</p></a></div>
									</div>
								</div>
								</li>
																<li>
								<div class="inner">
									<p class="num">No.4</p>
									<span class="bar"></span>
									<p class="txt wordbk">부동산을 구할때 대출이 필요한데 대출상담도 해주나요? </p>
									<div class="f_btn_area"><a href="javascript:void(0);">펼쳐보기</a></div>
								</div>
								<div class="faq_view">
									<div class="title_area"><p>부동산을 구할때 대출이 필요한데 대출상담도 해주나요? </p></div>
									<div class="text_area">
										<iframe src="help_view9371.html?b_name=budong1&amp;number=24" width="100%" height="175" frameborder="0"></iframe>
										<div class="close_area"><a href="javascript:void(0);"><p>닫기</p></a></div>
									</div>
								</div>
								</li>
															</ul>
						</div>
						<div class="idx detail">
							<ul class="faq_area faq_title">
																<li>
								<div class="inner">
									<p class="num">No.1</p>
									<span class="bar"></span>
									<p class="txt wordbk"><?=$sname?>에 부동산을 내놓으려면 어떻게 해야 하나요?</p>
									<div class="f_btn_area"><a href="javascript:void(0);">펼쳐보기</a></div>
								</div>
								<div class="faq_view">
									<div class="title_area"><p><?=$sname?>에 부동산을 내놓으려면 어떻게 해야 하나요?</p></div>
									<div class="text_area">
										<iframe src="help_view7394.html?b_name=budong2&amp;number=4" width="100%" height="175" frameborder="0"></iframe>
										<div class="close_area"><a href="javascript:void(0);"><p>닫기</p></a></div>
									</div>
								</div>
								</li>
																<li>
								<div class="inner">
									<p class="num">No.2</p>
									<span class="bar"></span>
									<p class="txt wordbk"><?=$sname?>과 함께 다른업소에 매물을 내놓아도 되나요?</p>
									<div class="f_btn_area"><a href="javascript:void(0);">펼쳐보기</a></div>
								</div>
								<div class="faq_view">
									<div class="title_area"><p><?=$sname?>과 함께 다른업소에 매물을 내놓아도 되나요?</p></div>
									<div class="text_area">
										<iframe src="help_view20fb.html?b_name=budong2&amp;number=25" width="100%" height="175" frameborder="0"></iframe>
										<div class="close_area"><a href="javascript:void(0);"><p>닫기</p></a></div>
									</div>
								</div>
								</li>
																<li>
								<div class="inner">
									<p class="num">No.3</p>
									<span class="bar"></span>
									<p class="txt wordbk">매물을 내놓을때 내부 사진을 꼭 찍어야 하나요?</p>
									<div class="f_btn_area"><a href="javascript:void(0);">펼쳐보기</a></div>
								</div>
								<div class="faq_view">
									<div class="title_area"><p>매물을 내놓을때 내부 사진을 꼭 찍어야 하나요?</p></div>
									<div class="text_area">
										<iframe src="help_view8a85.html?b_name=budong2&amp;number=26" width="100%" height="175" frameborder="0"></iframe>
										<div class="close_area"><a href="javascript:void(0);"><p>닫기</p></a></div>
									</div>
								</div>
								</li>
																<li>
								<div class="inner">
									<p class="num">No.4</p>
									<span class="bar"></span>
									<p class="txt wordbk">전월세 갱신계약은 정말 무료인가요?</p>
									<div class="f_btn_area"><a href="javascript:void(0);">펼쳐보기</a></div>
								</div>
								<div class="faq_view">
									<div class="title_area"><p>전월세 갱신계약은 정말 무료인가요?</p></div>
									<div class="text_area">
										<iframe src="help_viewfa75.html?b_name=budong2&amp;number=27" width="100%" height="175" frameborder="0"></iframe>
										<div class="close_area"><a href="javascript:void(0);"><p>닫기</p></a></div>
									</div>
								</div>
								</li>
															</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script type="text/javascript">
		$(function(){
		$(".faq_area > li .f_btn_area").click(function(){
			var tmpindex = $(".f_btn_area").index(this);
			$(".faq_view:eq("+tmpindex+")").show();
		});
		$(".close_area > a").click(function(){
		$(this).parent(".close_area").parent(".text_area").parent(".faq_view").css("display","none");
		})
		$(".m_tab .st1 .optclick").click(function(){
		$("#type1").val(($(this).attr("data-val")));
		if($("#type2").val() && $("#input_price").val()){
		view_price();
		}
		});
		$(".m_tab .st2 .optclick").click(function(){
		if ($(this).attr("data-val") =="M"){
			$("#MdivView").removeClass("dn");
			$("#pr_txt").html("보증금");
		}else{
			$("#MdivView").addClass("dn");
			$("#pr_txt").html("거래금액");
		}
		$("#type2").val(($(this).attr("data-val")));
		if($("#type1").val() && $("#input_price").val()){
		view_price();
		}
		});
		});
		view_price = function(){
			if($("#type1").val()==""){
				alert("건물종류를 먼저 선택해주세요.");
				$("#input_price").val("");
				return false;
			}
			if($("#type2").val()==""){
				alert("거래종류를 먼저 선택해주세요.");
				$("#input_price").val("");
				return false;
			}
			if ($("#type2").val() == "M"){
				if (!$("#input_price").val() || !$("#input_price1").val()){
					return false;
				}
			}
			var url = "../dev/ajax_calfee.html";
			$.post(url, {val1:$("#type1").val(), val2:$("#type2").val(), val3:$("#input_price").val(), val4:$("#input_price1").val()}, function(result) {
			if(result=="fail"){
			}else{
			var sp_result = result.split("//");
			$("#ban1").html("<span>부가가치세 포함</span>"+sp_result[1]+"만원</span>");
			$("#ban2").html(sp_result[1]+"만원");
			$("#rate").html("("+sp_result[3]+"%)");
			$("#diff").html("절감액("+sp_result[4]+"만원)");
			$("#comm").html(sp_result[2]+"만원");
			}
			});
		}
		</script>
		<!--section End -->
	</div>
	<!--#fullpage End -->
	<script type="text/javascript">
	$(document).ready(function() {
	var winH = $(window).height()
	var footerH = $("#footer").height()
	$('#fullpage').fullpage({
	sectionsColor: ['#fff', '', ''],
	anchors: ['1stPage', '2ndPage', '3rdPage', '4thPage', '5thPage', '6thPage', '7thPage', '8thPage'],
	menu: '.menu_dot',
	scrollOverflow: true,
	afterLoad: function(anchorLink, index){
	if(index == 1){
	$("#header .tel_area").fadeIn();
	$("#header .search, #header .gnb_area .gnb").hide();
	$("#header .gnb_area .gnb > li.m_1 .dp1").removeClass('on');
	$("#header .gnb_area .gnb > li.m_2 .dp1").removeClass('on');
	$("#header .gnb_area .gnb > li.m_3 .dp1").removeClass('on');
	$("#header .gnb_area .gnb > li.m_4 .dp1").removeClass('on');
	$(".navi_area").removeClass('on');
	$("#footer").slideUp();
	visual_main()
	visual5()
	visual6()
	}
	else if(index == 2 || index == 3 || index == 5){
	$("#header .tel_area").hide();
	$("#header .search, #header .gnb_area .gnb").fadeIn();
	$(".navi_area").addClass('on');
	$("#header .gnb_area .gnb > li.m_1 .dp1").removeClass('on');
	$("#header .gnb_area .gnb > li.m_2 .dp1").removeClass('on');
	$("#header .gnb_area .gnb > li.m_3 .dp1").addClass('on');
	$("#header .gnb_area .gnb > li.m_4 .dp1").removeClass('on');
	$("#footer").slideUp();
	visual_main()
	visual5()
	visual6()
	}
	else if(index == 4){
	$("#header .tel_area").hide();
	$("#header .search, #header .gnb_area .gnb").fadeIn();
	$(".navi_area").addClass('on');
	$("#header .gnb_area .gnb > li.m_3 .dp1").addClass('on');
	$("#header .gnb_area .gnb > li.m_4 .dp1").removeClass('on');
	$(".output2").animate({opacity:1},1000);
	$(".output2 dl.st1 > dd").delay(500).animate({opacity:1},1500);
	$(".output2 dl.st2 > dd").delay(1200).animate({opacity:1},1500);
	$("#footer").slideUp();
	visual_main()
	visual5()
	visual6()
	}
	else if(index == 6){
	$("#header .tel_area").hide();
	$("#header .search, #header .gnb_area .gnb").fadeIn();
	$("#header .gnb_area .gnb > li.m_1 .dp1").addClass('on');
	$("#header .gnb_area .gnb > li.m_2 .dp1").removeClass('on');
	$("#header .gnb_area .gnb > li.m_3 .dp1").removeClass('on');
	$("#header .gnb_area .gnb > li.m_4 .dp1").removeClass('on');
	$("#footer").slideUp();
	visual_main()
	visual5()
	visual6()
	}
	else if(index == 7){
	$("#header .tel_area").hide();
	$("#header .search, #header .gnb_area .gnb").fadeIn();
	$("#header .gnb_area .gnb > li.m_2 .dp1").addClass('on');
	$("#header .gnb_area .gnb > li.m_1 .dp1").removeClass('on');
	$("#header .gnb_area .gnb > li.m_3 .dp1").removeClass('on');
	$("#header .gnb_area .gnb > li.m_4 .dp1").removeClass('on');
	$("#footer").slideUp();
	visual_main()
	visual5()
	visual6()
	}
	else if(index == 8){
	$("#header .tel_area").hide();
	$("#header .search, #header .gnb_area .gnb").fadeIn();
	$("#header .gnb_area .gnb > li.m_1 .dp1").removeClass('on');
	$("#header .gnb_area .gnb > li.m_2 .dp1").removeClass('on');
	$("#header .gnb_area .gnb > li.m_3 .dp1").removeClass('on');
	$("#header .gnb_area .gnb > li.m_4 .dp1").addClass('on');
	$("#footer").slideDown();
	visual_main()
	visual5()
	visual6()
	}
	else{
	$("#header .tel_area").hide();
	$("#header .search, #header .gnb_area .gnb").fadeIn();
	$(".navi_area").removeClass('on');
	$("#header .gnb_area .gnb > li.m_1 .dp1").removeClass('on');
	$("#header .gnb_area .gnb > li.m_2 .dp1").removeClass('on');
	$("#header .gnb_area .gnb > li.m_3 .dp1").removeClass('on');
	$("#header .gnb_area .gnb > li.m_4 .dp1").removeClass('on');
	$("#footer").slideUp();
	visual_main()
	visual5()
	visual6()
	}
	}
	});
	});
	function visual_main(){
		$('.main_visu_main').flexslider({
		animation: "fade",
		controlNav: false,
		directionNav : false,
		animationLoop: true,
		slideshow: true,
		pausePlay: false,
		slideshowSpeed: 4000,
		animationSpeed: 1000,
		start: function(slider){
		$('body').removeClass('loading');
		}
		});
	}
	function visual5(){
		$('.main_visu5').flexslider({
		animation: "fade",
		controlNav: true,
		directionNav : false,
		animationLoop: true,
		slideshow: true,
		pausePlay: false,
		slideshowSpeed: 8000,
		animationSpeed: 1000,
		start: function(slider){
		$('body').removeClass('loading');
		}
		});
	}
	function visual6(){
		$('.main_visu6').flexslider({
		animation: "fade",
		controlNav: true,
		directionNav : false,
		animationLoop: true,
		slideshow: true,
		pausePlay: false,
		slideshowSpeed: 8000,
		animationSpeed: 1000,
		start: function(slider){
		$('body').removeClass('loading');
		}
		});
	}
	</script>
</div>

</body>

</html>

</div>
<!--contents end-->
    
<!--footer-->
<div id="footer">
	<div class="box1">
        <ul class="f_link">
        <!--
        	<li><a href="../guide/privacy.html">개인정보처리방침</a></li>
        	<li><a href="../guide/agree.html">이용약관</a></li>
        	<li class="admin"><a href="../ISAF/index.html" target="_blank">관리자</a></li>
        -->
        </ul>    
        <dl class="copy_info">
        	<dt>상호명. <?=$sname?></dt>
        	<dd>대표. <?=$ceo_name?></dd>
        	<dd>주소. <?=$address?></dd>
        	<dd>사업자등록번호. <?=$register_num?></dd>
        	<dd>Tel. <?=$tel?></dd>
        	<dd>H.P. <?=$cellphone?></dd>
        	<dd>Fax. <?=$fax?></dd>
        	<dd>E-Mail. <?=$email?></dd>
        	<dd class="copy">COPYRIGHTS (C) <?=$sname?>. ALL RIGHTS RESERVED.</dd>
        </dl>
    </div>
</div>
<!--footer end-->

</div>
<!-- l-main end-->
<div id="LeftNavigation" class="l-nav">
	<div class="nav_top">
        <p class="nav_logo"><img src="../images/inc/h_logo.png" /></p>
        <a href="#" class="js-toggle-nav nav_close"></a>
    </div>
	<ul class="nav_tit">
				<li><a href="../member/login.html"><p>로그인</p></a></li>
		<li><a href="../member/join.html"><p>회원가입</p></a></li>
		    </ul>
    <ul class="gnb center">
	<li class="m_1">
	<a href="../sub1/goods_find.html" class="dp1">부동산 구하기<span class="icon"></span></a>
	<ul class="dp2">
		<li class="sm_goods_find"><a href="../sub1/goods_find.html">지도로 찾기<span class="icon"></span></a></li>
		<li class="sm_1"><a href="../sub1/1_1.html">분양정보<span class="icon"></span></a></li>
		<li class="sm_2"><a href="../sub2/2_2.html">요청하기<span class="icon"></span></a></li>
	</ul>
	</li>
	<li class="m_2">
	<a href="../sub2/2_1.html" class="dp1">부동산 내놓기<span class="icon"></span></a>
	<ul class="dp2">
		<li class="sm_2"><a href="../sub2/2_2.html">부동산 구하기<span class="icon"></span></a></li>
		<li class="sm_1"><a href="../sub2/2_1.html">부동산 내놓기<span class="icon"></span></a></li>
	</ul>
	</li>
	<li data-menuanchor="4thPage" class="m_3">
	<a href="/main/main.php#4thPage" class="dp1">서비스소개<span class="icon"></span></a>
	<ul class="dp2">
		<li class="sm_1"><a href="../sub3/3_1.html">서비스소개<span class="icon"></span></a></li>
		<!--<li class="sm_2"><a href="../sub3/3_2.php">부동산 구하는 방법<span class="icon"></span></a></li>
            <li class="sm_3"><a href="../sub3/3_3.php">부동산 내놓는 방법<span class="icon"></span></a></li>-->
		<li class="sm_4"><a href="../sub3/3_4.html">수수료 알아보기<span class="icon"></span></a></li>
	</ul>
	</li>
	<!--    <li class="m_4">
        <a href="../main/main.php#8thPage" class="dp1">도움말<span class="icon"></span></a>
        <ul class="dp2">
            <li class="sm_1"><a href="../main/main.php#8thPage">서비스 이용 질문<span class="icon"></span></a></li>
            <li class="sm_2"><a href="../main/main.php#8thPage">부동산 구하기 질문<span class="icon"></span></a></li>
            <li class="sm_3"><a href="../main/main.php#8thPage">부동산 내놓기 질문<span class="icon"></span></a></li>
        </ul>
    </li>-->
	<li data-menuanchor="8thPage" class="m_4">
	<a href="/main/main.php#8thPage" class="dp1">도움말<span class="icon"></span></a>
	<ul class="dp2">
		<li class="sm_1"><a href="/main/main.php#8thPage">서비스 이용 질문<span class="icon"></span></a></li>
		<li class="sm_2"><a href="/main/main.php#8thPage">부동산 구하기 질문<span class="icon"></span></a></li>
		<li class="sm_3"><a href="/main/main.php#8thPage">부동산 내놓기 질문<span class="icon"></span></a></li>
	</ul>
	</li>
	<li class="m_member">
	<a href="../member/login.html" class="dp1">로그인<span class="icon"></span></a>
	<ul class="dp2">
		<li class="sm_login"><a href="../member/login.html">로그인<span class="icon"></span></a></li>
		<li class="sm_join"><a href="../member/join.html">회원가입<span class="icon"></span></a></li>
		<!--<li class="sm_id"><a href="../member/id.php">아이디 찾기<span class="icon"></span></a></li>
            <li class="sm_pw"><a href="../member/pw.php">비밀번호 찾기<span class="icon"></span></a></li>-->
	</ul>
	</li>
	 
	<li class="m_guide">
	<a href="../guide/agree.html" class="dp1">홈페이지 이용안내<span class="icon"></span></a>
	<ul class="dp2">
		<li class="sm_sitemap"><a href="../guide/sitemap.html">사이트맵<span class="icon"></span></a></li>
		<li class="sm_agree"><a href="../guide/agree.html">이용약관<span class="icon"></span></a></li>
		<li class="sm_privacy"><a href="../guide/privacy.html">개인정보처리방침<span class="icon"></span></a></li>
		<!--<li class="sm_email"><a href="../guide/email.php">이메일무단수집거부<span class="icon"></span></a></li>-->
	</ul>
	</li>
</ul>
    <ul class="sns_link">
    	<li>
        	<a href="../online/online.html">
            	<p class="st1">온라인상담</p>
            </a>
        </li>
    	<li>
        	<a href="http://blog.naver.com/banmanneyo" target="_blank">
            	<p class="st2">블로그</p>
            </a>
        </li>
    </ul>
</div>
<script type="text/javascript">
//<![CDATA[
(function ( window, document, $, m, ui, undefined ) {
'use strict';
var documentElement = document.documentElement,
	$win = $( window ),
	$root = $( document ),
	$html = $( documentElement ),
	transitionEnd;
$(function () {
	$html.addClass( 'ready' );
});
if ( !window.ui ) {
	window.ui = ui;
}
if ( ui.prefixed ) {
	transitionEnd = ui.prefixed.transitionend;
}
// 네비게이션 사이드바
function openNav() {
	$html.addClass( 'l-nav-open' );
}
function closeNav() {
	$( '.l-main' )
	.one( transitionEnd, function () {
		$html.removeClass( 'l-nav-closing' );
	});
	$html
	.addClass( 'l-nav-closing' )
	.removeClass( 'l-nav-open' );
}
function toggleNav() {
	if ( $html.hasClass( 'l-nav-open' ) ) {
		closeNav();
	} else {
		openNav();
	}
}
$root
// 네비게이션 사이드바 토글 버튼
.on( 'click', '.js-toggle-nav', function ( e ) {
	e.preventDefault();
	toggleNav();
})
// 네비게이션 사이드바 열린 상태에서 메인 영역 터치 시 사이드바 닫기
.on( 'click touchstart', '.l-nav-open .l-main', function ( e ) {
	e.preventDefault();
	closeNav();
});
ui.nav = {
	open: openNav,
	close: closeNav,
	toggle: toggleNav
};
}( this, this.document, this.jQuery, this.Modernizr, this.ui || {} ));

//
$(".l-nav .gnb .dp1").not(".l-nav .gnb > li.m_3 > a, .l-nav .gnb > li.m_4 > a").attr("href","javascript:void()").click(function(){
	if($(this).next(".dp2").css("display") == "none"){
		$(".l-nav .gnb .dp2").slideUp(200)
		$(this).next(".dp2").slideDown(200)
		$(".l-nav .gnb .dp1").removeClass("on")
		$(this).addClass("on")
	}else{
		$(".l-nav .gnb .dp1").removeClass("on")
		$(this).next(".dp2").slideUp(200)
	}
})
//]]>
</script></div>
<!-- l-wrapper end-->
</body>
</html><script language="JavaScript">
<!--

// 쿠키값 설정
function setCookie(name, value, expiredays)
{
  var today = new Date();
  today.setDate( today.getDate() + expiredays );
  document.cookie = name + "=" + escape( value ) + "; path=/; expires=" + today.toGMTString() + ";"
}

function Sclose(nid){
	var chk_pop = document.getElementsByName("popchk_"+nid);
	var chkpop = document.getElementById("pop_"+nid);
	if(chk_pop[0].checked == true){
		$.post("../dev/Cook_C.html", { start : "set_Cookie", uid : nid}, function(msg){
			chkpop.style.display="none";
		});
	}else{
		chkpop.style.display="none";
	}
}

$( function() {
$( ".PopupDiv" ).draggable();
} );
// -->
</script>
