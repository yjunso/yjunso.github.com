 // JavaScript Document

//<![CDATA[
$(window).scroll(function () {
	if ($(this).scrollTop() > 100) {
			$("#header .top_area").filter(":not(:animated)").slideUp(200)
		} else {
			$("#header .top_area").filter(":not(:animated)").slideDown(200)	
		}
});

function goOPT(){	
	$('.hid > option').click(function(){
	  $(this).parent('.hid').parent('.form_sec1').next('.dpn').show();
	});
}

//매물상세_right_area
$(function(){
	$(window).scroll(function() {
		var winH = $(window).height();
		var position = $(window).scrollTop();
		var offset = position+winH
		var footerP = $("#footer").offset().top;
		
		if(position > 0){
			if (offset < footerP){
				$(".goods_detail .right_area").addClass('on');
				$(".goods_detail .right_area").css("top", "110px");
			}else{
				$(".goods_detail .right_area").addClass('on');
				$(".goods_detail .right_area").css("top", "-10px");
			}
			
		}else{
			$(".goods_detail .right_area").removeClass('on');
		}
	});
});

//매물상세_펼쳐보기
$(function(){
	if ($(window).width()<=767){
		max = $(".right_area .b_m.phone").height();
		var boxSize = 180; 
		if(boxSize < max){
			$(".right_area .b_m.phone").css("height", boxSize + "px");		
			$(".right_area .f_m > a").click(function(){ 										   
				$(".right_area .b_m.phone").css({"height": max });
				//$('.right_area .f_m > a').css('display','none');	
				//$('.slide_top').css('display','block');	
			});
		};
	}else if ($(window).width() > 767 && $(window).width() <= 1024){
		$(".right_area .b_m.phone").css("height", "320px");
	}else{
		$(".right_area .b_m.phone").css("height", "465px");
	}
});

jQuery(window).resize(function(){
	if ($(window).width()<=767){
		max = $(".right_area .b_m.phone").height();
		var boxSize = 180; 
		if(boxSize < max){
			$(".right_area .b_m.phone").css("height", boxSize + "px");		
			$(".right_area .f_m > a").click(function(){ 										   
				$(".right_area .b_m.phone").css({"height": max });
				//$('.right_area .f_m > a').css('display','none');	
				//$('.slide_top').css('display','block');	
			});
		};
	}else if ($(window).width() > 767 && $(window).width() <= 1024){
		$(".right_area .b_m.phone").css("height", "320px");
	}else{
		$(".right_area .b_m.phone").css("height", "465px");
	}
});

//tab1
$(function(){
	$(".tab_idx.over > li").each(function (i) {
		$(this).attr("idx", i);
		}).mouseenter(function () {
		var n = $(this).attr("idx");
		$(this).parents(".wrap_idx").find.hide();
		$(this).parents(".wrap_idx").find(".con_idx .idx:eq("+n+")").show();
		$(this).parents(".wrap_idx").find(".tab_idx > li").removeClass("on");
		$(this).addClass("on");
	});
	$(".tab_idx.click > li").each(function (i) {
		$(this).attr("idx", i);
		}).click(function () {
		var n = $(this).attr("idx");
		$(this).parents(".wrap_idx").find(".con_idx .idx").hide();
		$(this).parents(".wrap_idx").find(".con_idx .idx:eq("+n+")").show();
		$(this).parents(".wrap_idx").find(".tab_idx > li").removeClass("on");
		$(this).addClass("on");
		img_resize5()
	});
});

//tab2
$(function(){
	$(".tab_idx_m.over > li").each(function (i) {
		$(this).attr("idx", i);
		}).mouseenter(function () {
		var n = $(this).attr("idx");
		$(this).parents(".wrap_idx").find.hide();
		$(this).parents(".wrap_idx").find(".con_idx_m .idx:eq("+n+")").show();
		$(this).parents(".wrap_idx").find(".tab_idx_m > li").removeClass("on");
		$(this).addClass("on");
	});
	$(".tab_idx_m.click > li").each(function (i) {
		$(this).attr("idx", i);
		}).click(function () {
		var n = $(this).attr("idx");
		$(this).parents(".wrap_idx").find(".con_idx_m .idx").hide();
		$(this).parents(".wrap_idx").find(".con_idx_m .idx:eq("+n+")").show();
		$(this).parents(".wrap_idx").find(".tab_idx_m > li").removeClass("on");
		$(this).addClass("on");
	});
});

//mypage_maylist1
function img_resize1(){
	$(".img_resize").css("overflow","hidden");
	$(".img_resize img").css("width","100%")
	function resize(){
		$(".img_resize").each(function (i) {
			var imgW = $(this).width();
			$(this).height(imgW*0.555)
			$(this).find("img").css("min-height",imgW*0.5556)
		});
	}
	function resize2(){
		$(".img_resize").each(function (i) {
			var imgW = $(this).width();
			var imgH = $(this).find("img").height();
			if(imgW > imgH || imgW == imgH){
				var gap = (imgH - $(".img_resize").height())/2
				$(this).find("img").css("margin-top","-"+gap+"px")
			}
		});
	}
	$(window).load(function(){
		resize()
		resize2()
	})
	$(window).resize(function(){
		resize()
		resize2()
	})
}

//매물구하기,내놓기 면적
function img_resize2(){
	$(".img_resize").css("overflow","hidden");
	$(".img_resize img").css("width","100%")
	function resize(){
		$(".img_resize").each(function (i) {
			var imgW = $(this).width();
			$(this).height(imgW*4.888)
			$(this).find("img").css("min-height",imgW*4.8889)
		});
	}
	function resize2(){
		$(".img_resize").each(function (i) {
			var imgW = $(this).width();
			var imgH = $(this).find("img").height();
			if(imgW > imgH || imgW == imgH){
				var gap = (imgH - $(".img_resize").height())/2
				$(this).find("img").css("margin-top","-"+gap+"px")
			}
		});
	}
	$(window).load(function(){
		resize()
		resize2()
	})
	$(window).resize(function(){
		resize()
		resize2()
	})
}

//부동산 구하기 매물
function img_resize3(){
	$(".img_resize").css("overflow","hidden");
	$(".img_resize img").css("width","100%")

	$(".img_resize").each(function (i) {
		var imgW = $(this).width();
		$(this).height(imgW*0.5555)
		$(this).find("img").css("min-height",imgW*0.5556)
	});

	$(".img_resize").each(function (i) {
		var imgW = $(this).width();
		var imgH = $(this).find("img").height();
		if(imgW > imgH || imgW == imgH){
			var gap = (imgH - $(".img_resize").height())/2
			$(this).find("img").css("margin-top","-"+gap+"px")
		}
	});
}

//img_resize_제품 큰 사진
function img_resize_b(){
	$(".img_resize_b").css("overflow","hidden");
	$(".img_resize_b img").css("width","100%")
	function resize(){
		$(".img_resize_b").each(function (i) {
			var imgW = $(this).width();
			$(this).height(imgW*0.5332)
		$(this).find("img").css("min-height",imgW*0.5333)
		});
	}
	function resize2(){
		$(".img_resize_b").each(function (i) {
			var imgW = $(this).width();
			var imgH = $(this).find("img").height();
			if(imgW > imgH || imgW == imgH){
				var gap = (imgH - $(".img_resize_b").height())/2
				$(this).find("img").css("margin-top","-"+gap+"px")
			}
		});
	}
	$(window).load(function(){
		resize()
		resize2()
	})
	$(window).resize(function(){
		resize()
		resize2()
	})
}

//단지 상세정보 img_resize_제품 썸네일 사진
function img_resize_s2(){
	$(".img_resize_s").css("overflow","hidden");
	$(".img_resize_s img").css("width","100%")
	function resize(){
		$(".img_resize_s").each(function (i) {
			var imgW = $(this).width();
			$(this).height(imgW*0.666)
			$(this).find("img").css("min-height",imgW*0.6666)
		});
	}
	function resize2(){
		$(".img_resize_s").each(function (i) {
			var imgW = $(this).width();
			var imgH = $(this).find("img").height();
			if(imgW > imgH || imgW == imgH){
				var gap = (imgH - $(".img_resize_s").height())/2.2
				$(this).find("img").css("margin-top","-"+gap+"px")
			}
		});
	}
	$(window).load(function(){
		resize()
		resize2()
	})
	$(window).resize(function(){
		resize()
		resize2()
	})
}

//단지 상세정보 img_resize_제품 큰 사진
function img_resize_b2(){
	$(".img_resize_b").css("overflow","hidden");
	$(".img_resize_b img").css("width","100%")
	function resize(){
		$(".img_resize_b").each(function (i) {
			var imgW = $(this).width();
			$(this).height(imgW*0.5822)
		$(this).find("img").css("min-height",imgW*0.5822)
		});
	}
	function resize2(){
		$(".img_resize_b").each(function (i) {
			var imgW = $(this).width();
			var imgH = $(this).find("img").height();
			if(imgW > imgH || imgW == imgH){
				var gap = (imgH - $(".img_resize_b").height())/2
				$(this).find("img").css("margin-top","-"+gap+"px")
			}
		});
	}
	$(window).load(function(){
		resize()
		resize2()
	})
	$(window).resize(function(){
		resize()
		resize2()
	})
}

//img_resize_제품 썸네일 사진
function img_resize_s(){
	$(".img_resize_s").css("overflow","hidden");
	$(".img_resize_s img").css("width","100%")
	function resize(){
		$(".img_resize_s").each(function (i) {
			var imgW = $(this).width();
			$(this).height(imgW*0.666)
			$(this).find("img").css("min-height",imgW*0.6666)
		});
	}
	function resize2(){
		$(".img_resize_s").each(function (i) {
			var imgW = $(this).width();
			var imgH = $(this).find("img").height();
			if(imgW > imgH || imgW == imgH){
				var gap = (imgH - $(".img_resize_s").height())/2.2
				$(this).find("img").css("margin-top","-"+gap+"px")
			}
		});
	}
	$(window).load(function(){
		resize()
		resize2()
	})
	$(window).resize(function(){
		resize()
		resize2()
	})
}

//img_resize_매물상세_매물사진
function img_resize5(){
	$(".img_resize_pic").css("overflow","hidden");
	$(".img_resize_pic img").css("width","100%")
	function resize(){
		$(".img_resize_pic").each(function (i) {
			var imgW = $(this).width();
			$(this).height(imgW*0.665)
			$(this).find("img").css("min-height",imgW*0.665)
		});
	}
	function resize2(){
		$(".img_resize_pic").each(function (i) {
			var imgW = $(this).width();
			var imgH = $(this).find("img").height();
			if(imgW > imgH || imgW == imgH){
				var gap = (imgH - $(".img_resize_pic").height())/2
				$(this).find("img").css("margin-top","-"+gap+"px")
			}
		});
	}
	$(window).load(function(){
		resize()
		resize2()
	})
	$(window).resize(function(){
		resize()
		resize2()
	})
}

//매물상세_레이어팝업
$(function(){
	$('#blackbox').css({opacity:0.7});
	$('.img_big').click(function(){
		$('#blackbox').show();
		$("#r_big").prop("src", $(this).prop("src"));
		$('.pop_big').fadeIn(800);
		$('body').css({overflow:"hidden"});
	});
	$('.pop_big .close').click(function(){
		$('.pop_big').fadeOut(); 
		$('#blackbox').hide(); 
		$('body').css({overflow:"auto"});
	});
});

//메인 select박스
$(document).ready(function($){
	$(".option_sel_box .sel_st").click(function(){
		if ($(this).next(".sel_list").css("display") == "none") {
			$(this).addClass('on');
			$(".sel_list").slideUp(100);
			$(this).next(".sel_list").slideDown(200);
			//$(this).children(".arrow").children("img").attr('src','..../images/icon/arrow_t.gif');
		}else{
			$(this).next(".sel_list").slideUp(100);
		}
	});
	$ (".option_sel_box .sel_list > ul > li.optclick").click(function(){		
		$(this).parents(".sel_list").slideUp(100);	
	});
	
	$ (".option_sel_box .sel_list > ul > li.optclick").click(function(){		
		var txt = $(this).attr("data-txt");		
		$(this).parents(".sel_list").prev(".sel_st").find(".title").html(txt);
		$(this).parents(".sel_list").slideUp(100);		
		
	});
	//
});

//]]>