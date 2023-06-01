// JavaScript Document

function numberFormat(num, ext) {
	ext = (!ext) ? '  VNĐ' : ext;
	return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ext;
}

function textboxChange(tb, f, sb)
{
    if (!f)
    {
        if (tb.value == "")
        {
            tb.value = sb;
        }
    }
    else
    {
        if (tb.value == sb)
        {
            tb.value = "";
        }
    }
}

function change_alias(alias)
{
	var str = alias;
	str= str.toLowerCase(); 
	str= str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ  |ặ|ẳ|ẵ/g,"a"); 
	str= str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e"); 
	str= str.replace(/ì|í|ị|ỉ|ĩ/g,"i"); 
	str= str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ  |ợ|ở|ỡ/g,"o"); 
	str= str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u"); 
	str= str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y"); 
	str= str.replace(/đ/g,"d"); 
	str= str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'| |\"|\&|\#|\[|\]|~|$|_/g,"-");
	/* tìm và thay thế các kí tự đặc biệt trong chuỗi sang kí tự - */
	str= str.replace(/-+-/g,"-"); //thay thế 2- thành 1-
	str= str.replace(/^\-+|\-+$/g,""); 
	//cắt bỏ ký tự - ở đầu và cuối chuỗi 
	return str;
}

function initAjax(options){
  var defaults = { 
    url:      '', 
    type:    'post', 
	data:null,
    dataType:  'html', 
    error:  function(e){console.log(e)},
	success:function(){return false;},
	beforeSend:function(){},
  }; 

  // Overwrite default options 
  // with user provided ones 
  // and merge them into "options". 
  var options = $.extend({}, defaults, options); 
	$.ajax({
		url:options.url,
		data:options.data,
		success:options.success,
		error:options.error,
		type:options.type,
		dataType:options.dataType,
		
	})
}


// PHAN NOI DUNG MOI THEM VO SAU NAY
function loadToCart(id,sl){
	$.ajax({
		type:'post',
		url:"gio-hang",
		data:{id:id,sl:sl,act:'add'},
		success:function(data) {
			console.log(data);
			if (data && data.isLogin) {
				swal("Lỗi", "Bạn cần đăng nhập trước.", "error");
				return false;
			}
			
			location.href = "gio-hang.html";
		}
	});
	return false;
}

function addToCart(id,sl){
	$.ajax({
		type:'post',
		url:"gio-hang",
		data:{id:id,sl:sl,act:'add'},
		success:function(data){
			var myObj = JSON.parse(data);
			$("#cart-number").html(myObj.num);
			$(".box_carts").find(".load").html(myObj.mes);
			$(".box_carts").fadeIn();
		}
	});
	return false;
}

function updateCartNum(){
	$.get("ajax/cart.php",{type:"cart_number"},function(data){
		$("#cart-number").html(data);
	});
}


/** INIT CAC DOAN CUSTOM */
$("#pre-loader").fadeOut();

$("#cssmenu").menumaker({
	title: '<svg viewBox="0 0 512 512" aria-hidden="true" role="img" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1em" height="1em"><path d="M0 96c0-13.255 10.745-24 24-24h464c13.255 0 24 10.745 24 24s-10.745 24-24 24H24c-13.255 0-24-10.745-24-24zm0 160c0-13.255 10.745-24 24-24h464c13.255 0 24 10.745 24 24s-10.745 24-24 24H24c-13.255 0-24-10.745-24-24zm0 160c0-13.255 10.745-24 24-24h464c13.255 0 24 10.745 24 24s-10.745 24-24 24H24c-13.255 0-24-10.745-24-24z"></path></svg><svg viewBox="0 0 512 512" aria-hidden="true" role="img" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1em" height="1em"><path d="M71.029 71.029c9.373-9.372 24.569-9.372 33.942 0L256 222.059l151.029-151.03c9.373-9.372 24.569-9.372 33.942 0 9.372 9.373 9.372 24.569 0 33.942L289.941 256l151.03 151.029c9.372 9.373 9.372 24.569 0 33.942-9.373 9.372-24.569 9.372-33.942 0L256 289.941l-151.029 151.03c-9.373 9.372-24.569 9.372-33.942 0-9.372-9.373-9.372-24.569 0-33.942L222.059 256 71.029 104.971c-9.372-9.373-9.372-24.569 0-33.942z"></path></svg>',
	format: "multitoggle"
});

$(".small-screen").find("ul li").each(function () {
	if ($(this).hasClass("line")) {
		$(this).remove();
	}
	if ($(this).find('a transitionAll').hasClass("icon_menu")) {
		$(this).remove();
	}
});

$('a.xem_video').click(function(){
	var link_viveo = $(this).attr('href');
	$('body').append('<div class="login-popup"><div class="close-popup"></div><iframe id="dh-iframe" width="800px" height="500px" src="https://www.youtube.com/embed/'+link_viveo+'?rel=0" frameborder="0" allowfullscreen></iframe></div>');
	$('.login-popup').fadeIn(300);
				
	var chieucao = $('.login-popup').height() / 2;
	var chieurong = $('.login-popup').width() /2;
	$('.login-popup').css({'margin-top':-chieucao,'margin-left':-chieurong});
	$('body').append('<div id="baophu"></div>');
	$('#baophu').fadeIn(300);
	
	$('#baophu, .close-popup').click(function(){
		$('#baophu, .login-popup').fadeOut(300, function(){
			$('#baophu').remove();
			$('.login-popup').remove();
		});			
	});
	return false;
});

$(".numbers-row").append('<div class="inc button">-</div><div class="dec button">+</div>');

$(".nut-mua").click(function() {
	var id = $(this).data("id");
	loadToCart(id,1);
});
$(".nut-them").click(function() {
	var id = $(this).data("id");
	addtocart(id,1);
});
$(".spct-mua").click(function() {
	var id = $(this).data("id");
	var sl = $("#french-hens").val();
	loadToCart(id,sl);
});
$(".spct-them").click(function() {
	var id = $(this).data("id");
	var sl = $("#french-hens").val();
	addtocart(id,sl);
});

$(".button").on("click", function() {
	var $button = $(this);
	var oldValue = $button.parent().find("input").val();
	if ($button.text() == "+") {
		var newVal = parseFloat(oldValue) + 1;
	} else {
		// Don't allow decrementing below zero
		if (oldValue > 0) {
		var newVal = parseFloat(oldValue) - 1;
		} else {
		newVal = 0;
		}
	}
	$button.parent().find("input").val(newVal);
});

$(".box_carts .close").click(function(){
	$(".box_carts").fadeOut();
});

$('.httt-tab').click(function(){
	var rel=$(this).attr("rel");
	$('.httt-tab').removeClass("active");
	$('.ht-thanhtoan-nd').css({"display":"none"});
	$(this).addClass("active");
	$(rel).fadeIn();
});

$('.search-btn').click(function() {
	const keys = $(this).parent().find('input[name="search"]').val();
	if(keys=='') {
		alert('Vui lòng nhập từ khóa!');
	} else {
		location.href = "tim-kiem.html/keyword="+keys;
	}
});

$(document).on("keypress", ".search-input", function(e) {
	var code = e.keyCode || e.which;

	if(code == 13) {
		$(this).next().click();
	}
});

// Lazy load Initialize
var lazyLoadInstance = new LazyLoad({
	// Your custom settings go here
});

$('body').append('<div id="toptop"></div>');

$(window).scroll(function() {
	if($(window).scrollTop() != 0) {
		$('#toptop').fadeIn();
	} else {
		$('#toptop').fadeOut();
	}
});

$('#toptop').click(function() {
	$('html, body').animate({scrollTop:0},800);
});

/* Facebook Fanpage Chat JS */
var fb_icon_height=$('.contain_chatpopup2').width();
$('.chat_facebook').css({'bottom':-fb_icon_height});
//$('.chat_popup').css({'right':0});
$('.button_chat2').click(function(){
	var this_button=$(this);
	if(!this_button.hasClass('move_button')){
		this_button.addClass('move_button');
		setTimeout(function(){
		/*if(this_button.hasClass('onlick')){
			$('.chat_popup2').css({'bottom':-fb_icon_height});
			this_button.removeClass('onlick')
			this_button.removeClass('move_button');
		}else{*/
			$('.chat_facebook').css({'bottom':0});
			this_button.addClass('onlick')
		//}
		},300);
	}else{
		$('.chat_facebook').css({'bottom':-fb_icon_height});
		setTimeout(function(){
			this_button.removeClass('onlick');
			this_button.removeClass('move_button');
		},400);
	}	
});
/* Facebook Fanpage Chat JS */

$("#reload-capt").click();

/** toggle | close menu mobile */
$(".edu-mobile-menu-toggle").click(function() {
	$("#edu-mobile-menu-layout").addClass("active").next().addClass('active');
});
$(".edu-mobile-menu-black-screen").click(function() {
	$(this).removeClass("active").prev().removeClass("active");
});
$(".edu-mobile-menu-close").click(function() {
	$(this).parents("div.edu-mobile-menu-layout").removeClass("active");
	$(this).parents("div.edu-mobile-menu-layout").next().removeClass("active");
});
$(".edu-menu-show-btn").click(function() {
	if($(this).hasClass("active")) {
		$(this).removeClass("active");
		$(this).next().slideUp();
	} else {
		$(this).addClass("active");
		$(this).next().slideDown();
	}
});
/** toggle | close menu mobile */

$('.slick-banner').slick({
	lazyLoad: 'ondemand',
	slidesToShow: 1,
	slidesToScroll: 1,
	fade: true,
	cssEase: 'linear',
	autoplay:true,
	autoplaySpeed:4000,
	accessibility: false,
	pauseOnHover:true,
	//vertical:true,
	//verticalSwiping:true,
	dots: true,
	arrows:false,
	responsive: [
		{
			breakpoint: 481,
			settings: {
			dots: false,
			arrows: false
			}
		}
	]
});
$('.slick-hakt').slick({
	slidesToShow: 3,
	slidesToScroll: 1,
	autoplay:false,
	autoplaySpeed:5000,
	infinite: false,
	accessibility: false,
	pauseOnHover:true,
	//vertical:true,
	//verticalSwiping:true,
	dots: false,
	arrows:true
});
$('.slick-brand').slick({
	lazyLoad: 'ondemand',
	slidesToShow: 3,
	slidesToScroll: 1,
	autoplay:true,
	autoplaySpeed:4000,
	accessibility: false,
	pauseOnHover:true,
	//vertical:true,
	//verticalSwiping:true,
	dots: false,
	arrows: true,
	responsive: [
		{
			breakpoint: 1024,
			settings: {
			slidesToShow: 3,
			slidesToScroll: 1,
			infinite: true,
			}
		},
		{
			breakpoint: 601,
			settings: {
			slidesToShow: 2,
			slidesToScroll: 1
			}
		},
		{
			breakpoint: 481,
			settings: {
			slidesToShow: 1,
			slidesToScroll: 1
			}
		}
		// You can unslick at a given breakpoint now by adding:
		// settings: "unslick"
		// instead of a settings object
	]
});
// $('.slick-product1').slick({
// 	slidesToShow: 1,
// 	slidesToScroll: 1,
// 	arrows: true,
// 	dots: false,
// 	fade: true,
// 	asNavFor: '.slick-product2'
// });
	$('.slick-product2').slick({
	slidesToShow: 3,
	slidesToScroll: 1,
	dots: false,
	arrows: false,
	centerMode: true,
	focusOnSelect: true,
	centerPadding: '0',
	responsive: [
		{
			breakpoint: 1024,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
				infinite: true,
			}
		},
		{
			breakpoint: 601,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 481,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				centerMode: false
			}
		}
		// You can unslick at a given breakpoint now by adding:
		// settings: "unslick"
		// instead of a settings object
	]
});
// $('.slick-product2').slick({
// 	lazyLoad: 'ondemand',
// 	slidesToShow: 3,
// 	slidesToScroll: 1,
// 	autoplay:true,
// 	autoplaySpeed:4000,
// 	accessibility: false,
// 	pauseOnHover:true,
// 	centerMpd:true,
// 	//vertical:true,
// 	//verticalSwiping:true,
// 	infinite: true,
// 	dots: false,
// 	arrows: false,
// 	responsive: [
// 		{
// 			breakpoint: 1024,
// 			settings: {
// 			slidesToShow: 3,
// 			slidesToScroll: 1,
// 			infinite: true,
// 			}
// 		},
// 		{
// 			breakpoint: 601,
// 			settings: {
// 			slidesToShow: 2,
// 			slidesToScroll: 1
// 			}
// 		},
// 		{
// 			breakpoint: 481,
// 			settings: {
// 			slidesToShow: 1,
// 			slidesToScroll: 1
// 			}
// 		}
// 		// You can unslick at a given breakpoint now by adding:
// 		// settings: "unslick"
// 		// instead of a settings object
// 	]
// });
// $('.slick-cook').slick({
// 	lazyLoad: 'ondemand',
// 	slidesToShow: 3,
// 	slidesToScroll: 1,
// 	autoplay:true,
// 	autoplaySpeed:4000,
// 	accessibility: false,
// 	pauseOnHover:true,
// 	//vertical:true,
// 	//verticalSwiping:true,
// 	dots: false,
// 	arrows: true,
// 	responsive: [
// 		{
// 			breakpoint: 1024,
// 			settings: {
// 			slidesToShow: 3,
// 			slidesToScroll: 1,
// 			infinite: true,
// 			}
// 		},
// 		{
// 			breakpoint: 601,
// 			settings: {
// 			slidesToShow: 2,
// 			slidesToScroll: 1
// 			}
// 		},
// 		{
// 			breakpoint: 481,
// 			settings: {
// 			slidesToShow: 1,
// 			slidesToScroll: 1
// 			}
// 		}
// 		// You can unslick at a given breakpoint now by adding:
// 		// settings: "unslick"
// 		// instead of a settings object
// 	]
// });
// $('.slick-productlist').slick({
// 	lazyLoad: 'ondemand',
// 	slidesToShow: 3,
// 	slidesToScroll: 1,
// 	autoplay:true,
// 	autoplaySpeed:4000,
// 	accessibility: false,
// 	pauseOnHover:true,
// 	//vertical:true,
// 	//verticalSwiping:true,
// 	dots: false,
// 	arrows: false,
// 	responsive: [
// 		{
// 			breakpoint: 1024,
// 			settings: {
// 			slidesToShow: 3,
// 			slidesToScroll: 1,
// 			infinite: true,
// 			}
// 		},
// 		{
// 			breakpoint: 769,
// 			settings: {
// 			slidesToShow: 2,
// 			slidesToScroll: 1
// 			}
// 		},
// 		{
// 			breakpoint: 481,
// 			settings: {
// 			slidesToShow: 1,
// 			slidesToScroll: 1
// 			}
// 		}
// 		// You can unslick at a given breakpoint now by adding:
// 		// settings: "unslick"
// 		// instead of a settings object
// 	]
// });
// $('.slick-community2').slick({
// 	lazyLoad: 'ondemand',
// 	slidesToShow: 4,
// 	slidesToScroll: 1,
// 	autoplay:true,
// 	autoplaySpeed:4000,
// 	accessibility: false,
// 	pauseOnHover:true,
// 	//vertical:true,
// 	//verticalSwiping:true,
// 	dots: false,
// 	arrows: false,
// 	responsive: [
// 		{
// 			breakpoint: 1024,
// 			settings: {
// 			slidesToShow: 3,
// 			slidesToScroll: 1,
// 			infinite: true,
// 			}
// 		},
// 		{
// 			breakpoint: 601,
// 			settings: {
// 			slidesToShow: 2,
// 			slidesToScroll: 1
// 			}
// 		},
// 		{
// 			breakpoint: 481,
// 			settings: {
// 			slidesToShow: 1,
// 			slidesToScroll: 1
// 			}
// 		}
// 		// You can unslick at a given breakpoint now by adding:
// 		// settings: "unslick"
// 		// instead of a settings object
// 	]
// });
// $('.slick-marketing1').slick({
// 	lazyLoad: 'ondemand',
// 	slidesToShow: 6,
// 	slidesToScroll: 1,
// 	autoplay:true,
// 	autoplaySpeed:4000,
// 	accessibility: false,
// 	pauseOnHover:true,
// 	//vertical:true,
// 	//verticalSwiping:true,
// 	dots: false,
// 	arrows: false,
// 	responsive: [
// 		{
// 			breakpoint: 1024,
// 			settings: {
// 			slidesToShow: 4,
// 			slidesToScroll: 1,
// 			infinite: true,
// 			}
// 		},
// 		{
// 			breakpoint: 601,
// 			settings: {
// 			slidesToShow: 3,
// 			slidesToScroll: 1
// 			}
// 		},
// 		{
// 			breakpoint: 481,
// 			settings: {
// 			slidesToShow: 2,
// 			slidesToScroll: 1
// 			}
// 		}
// 		// You can unslick at a given breakpoint now by adding:
// 		// settings: "unslick"
// 		// instead of a settings object
// 	]
// });
// $('.slick-marketing2').slick({
// 	lazyLoad: 'ondemand',
// 	slidesToShow: 4,
// 	slidesToScroll: 1,
// 	autoplay:true,
// 	autoplaySpeed:4000,
// 	accessibility: false,
// 	pauseOnHover:true,
// 	//vertical:true,
// 	//verticalSwiping:true,
// 	dots: false,
// 	arrows: false,
// 	responsive: [
// 		{
// 			breakpoint: 1024,
// 			settings: {
// 			slidesToShow: 3,
// 			slidesToScroll: 1,
// 			infinite: true,
// 			}
// 		},
// 		{
// 			breakpoint: 601,
// 			settings: {
// 			slidesToShow: 3,
// 			slidesToScroll: 1
// 			}
// 		},
// 		{
// 			breakpoint: 481,
// 			settings: {
// 			slidesToShow: 2,
// 			slidesToScroll: 1
// 			}
// 		}
// 		// You can unslick at a given breakpoint now by adding:
// 		// settings: "unslick"
// 		// instead of a settings object
// 	]
// });
// $('.slick-related').slick({
// 	lazyLoad: 'ondemand',
// 	slidesToShow: 4,
// 	slidesToScroll: 1,
// 	autoplay:true,
// 	autoplaySpeed:4000,
// 	accessibility: false,
// 	pauseOnHover:true,
// 	//vertical:true,
// 	//verticalSwiping:true,
// 	dots: false,
// 	arrows: false,
// 	responsive: [
// 		{
// 			breakpoint: 1024,
// 			settings: {
// 			slidesToShow: 3,
// 			slidesToScroll: 1,
// 			infinite: true,
// 			}
// 		},
// 		{
// 			breakpoint: 601,
// 			settings: {
// 			slidesToShow: 3,
// 			slidesToScroll: 1
// 			}
// 		},
// 		{
// 			breakpoint: 481,
// 			settings: {
// 			slidesToShow: 1,
// 			slidesToScroll: 1
// 			}
// 		}
// 		// You can unslick at a given breakpoint now by adding:
// 		// settings: "unslick"
// 		// instead of a settings object
// 	]
// });
$('.slick-cook2').slick({
	lazyLoad: 'ondemand',
	slidesToShow: 3,
	slidesToScroll: 1,
	autoplay:true,
	autoplaySpeed:4000,
	accessibility: false,
	pauseOnHover:true,
	//vertical:true,
	//verticalSwiping:true,
	dots: false,
	arrows: true,
	responsive: [
		{
			breakpoint: 1024,
			settings: {
			slidesToShow: 3,
			slidesToScroll: 1,
			infinite: true,
			}
		},
		{
			breakpoint: 601,
			settings: {
			slidesToShow: 2,
			slidesToScroll: 1
			}
		},
		{
			breakpoint: 481,
			settings: {
			slidesToShow: 1,
			slidesToScroll: 1
			}
		}
		// You can unslick at a given breakpoint now by adding:
		// settings: "unslick"
		// instead of a settings object
	]
});
// panel collapse event
$(".product-card-head-js").click(function() {
	if($(this).hasClass("active")) {
		$(this).removeClass("active");
		$(this).next().slideUp();
	} else {
		$(".product-card-head-js").removeClass('active');
		$(".product-card-content").css({"display" : "none"});
		$(this).addClass("active");
		$(this).next().slideDown();
	}
});
$('.product-detail-tab-js').click(function() {
	$('.product-detail-head').removeClass('active');
	$(this).addClass('active');
	$('.product-detail-tabcontent').css({'display' : 'none'});
	$($(this).attr('rel')).fadeIn();
});
$('.productlist-js').click(function() {
	const element = $(this);
	if(element.hasClass('active')) return false;
	$('.productlist-box').removeClass('active');
	element.addClass('active');
	$('.ajax-preloader').fadeIn();

	$.ajax({
		url: 'load-more-product',
		type: 'POST',
		data: {id : element.data('id')},
		dataType: 'json',
		success: function (data) {
			if(data.status == true) {
				$('#products').html(data.result);
			}
			$('.ajax-preloader').fadeOut();
		}
	});
});
$('.tuyendung-js').click(function() {
	window.location.href = $(this).data('href');
});

// slick a Tien
$('.slick-vote').slick({
    lazyLoad: 'ondemand',
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay:true,
    autoplaySpeed:3000,
    accessibility: false,
    pauseOnHover:true,
    //vertical:true,
    //verticalSwiping:true,
    dots: false,
    arrows:false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        }
      },
      {
        breakpoint: 769,
        settings: {
        slidesToShow: 2,
        slidesToScroll: 1
        }
      },
      {
        breakpoint: 620,
        settings: {
        slidesToShow: 1,
        slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  $('.slick-news').slick({
    lazyLoad: 'ondemand',
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay:true,
    autoplaySpeed:3000,
    accessibility: false,
    pauseOnHover:true,
    //vertical:true,
    //verticalSwiping:true,
    dots: false,
    arrows:false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        }
      },
      {
        breakpoint: 769,
        settings: {
        slidesToShow: 2,
        slidesToScroll: 1
        }
      },
      {
        breakpoint: 481,
        settings: {
        slidesToShow: 1,
        slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  $('.slick-partner').slick({
    lazyLoad: 'ondemand',
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay:true,
    autoplaySpeed:3000,
    accessibility: false,
    pauseOnHover:true,
    //vertical:true,
    //verticalSwiping:true,
    dots: false,
    arrows:false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        }
      },
      {
        breakpoint: 601,
        settings: {
        slidesToShow: 3,
        slidesToScroll: 1
        }
      },
      {
        breakpoint: 481,
        settings: {
        slidesToShow: 2,
        slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  $('.slick-banner').slick({
    lazyLoad: 'ondemand',
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true,
    cssEase: 'linear',
    autoplay:true,
    autoplaySpeed:4000,
    accessibility: false,
    pauseOnHover:true,
    //vertical:true,
    //verticalSwiping:true,
    dots: false,
    arrows:false,
    responsive: [
      {
        breakpoint: 481,
        settings: {
        dots: false,
        arrows: false
        }
      }
    ]
  });
	
	$('.slick-hocvien').slick({
    lazyLoad: 'ondemand',
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay:true,
    autoplaySpeed:3000,
    accessibility: false,
    pauseOnHover:true,
    //vertical:true,
    //verticalSwiping:true,
    dots: false,
    arrows:false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        }
      },
      {
        breakpoint: 769,
        settings: {
        slidesToShow: 2,
        slidesToScroll: 1
        }
      },
      {
        breakpoint: 481,
        settings: {
        slidesToShow: 1,
        slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  $('.slick-banner').slick({
    lazyLoad: 'ondemand',
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true,
    cssEase: 'linear',
    autoplay:true,
    autoplaySpeed:4000,
    accessibility: false,
    pauseOnHover:true,
    //vertical:true,
    //verticalSwiping:true,
    dots: false,
    arrows:false,
    responsive: [
      {
        breakpoint: 481,
        settings: {
        dots: false,
        arrows: false
        }
      }
    ]
  });


  /* active cauhoi */
  $('.cauhoi-box').click(function() {
    $('.cauhoi-box').removeClass('active').find('div.cauhoi-desc').css({'display':'none'});
    $(this).addClass('active');
    $(this).find('div.cauhoi-desc').slideDown();
  });
// end slick a Tien

// event delay after ms second
function delay(callback, ms) {
    var timer = 0;
    return function() {
        var context = this, args = arguments;
            clearTimeout(timer);
            timer = setTimeout(function () {
                callback.apply(context, args);
        }, ms || 0);
    };
}
$('.dnvb-search-js').click( delay(function(e) {
	const element = $(this);
	const oldText = element.text();
	element.prop('disabled', true);
	element.text('Đang xử lý...');
	$('.ajax-preloader').fadeIn();

	$.ajax({
		url: 'load-post',
		type: 'POST',
		data: {
			id : $('select[name="category"]').val(),
			keyword : $('input[name="postname"]').val()
		},
		dataType: 'json',
		success: function (data) {
			if(data.status == true) {
				$('#products').html(data.result);
			}
			$('.ajax-preloader').fadeOut();
			element.prop('disabled', false);
			element.text(oldText);
		}
	});
}, 500));


$(window).scroll(function(){
	var scrollTop  = $(window).scrollTop();
	if(scrollTop > 35){
		$('header').addClass('fixed');
		$(".main").css({"margin-top":$("header").height()})
	}else{
		$('header').removeClass('fixed');
		$(".main").css({"margin-top":"0px"})
	}
})