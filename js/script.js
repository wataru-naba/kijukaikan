//ua
var ua = navigator.userAgent;
var ua_flag;
if(ua.indexOf('iPhone') > 0 || ua.indexOf('iPod') > 0 || (ua.indexOf('Android') > 0) && (ua.indexOf('Mobile') > 0) || ua.indexOf('Windows Phone') > 0) {
	ua_flag = 'sp';
	ua_sp();
}else if(ua.indexOf('iPad') > 0 || ua.indexOf('Android') > 0){
	ua_flag = 'tb';
}else{
	ua_flag = 'pc';
	$('body').addClass('hover');
}



//pagetop
var pagetop = $('.pagetop');
$(window).scroll(function(){
	if($(this).scrollTop() > 150){
		pagetop.fadeIn(400);
	}else{
		pagetop.fadeOut(400);
		setTimeout(function(){
			pagetop.removeClass('active');
		},400);
	}
});
pagetop.click(function(){
	pagetop.addClass('active');
	$('body,html').animate({
		scrollTop: 0
	}, 800 ,'easeInOutCirc');
	return false;
});

//スライダー
$(document).on('ready', function() {
	$('.slider').slick({
		fade:true,
		autoplay:true,
		arrows:true,
		autoplaySpeed:6000,
		speed:600,
		dots:true,
	});
	//$('.js-modal').fadeIn();
	$('.js-modal-close').on('click',function(){
        $('.js-modal').fadeOut();
        return false;
    }); 
});
if(ua_flag == 'sp' || ua_flag == 'tb'){
	$('.nav>ul>li').click(function(){

		if($(this).find('a').attr('href') === "" && $(this).attr('class') !== 'active'){
			$('.nav>ul>li').not($(this)).find('.nav_inner').slideUp(300);
			$('.nav>ul>li').not($(this)).removeClass('active');
			
			$(this).toggleClass('active');
			$(this).find('.nav_inner').stop().slideToggle(300);
			return false;
		}else{}
	});
}else{
	$('.nav>ul>li').hover(function(){
		$(this).toggleClass('active');
		$(this).find('.nav_inner').stop().slideToggle(300);
	});
}

$(document).on('touchend click','.nav-button-wrap',function(event){
	eventHandler(event,$(this));
	$('.nav').slideToggle(300);
	$('.main_nav').toggleClass('active');
	$('.nav-button').toggleClass('active');
	$(this).toggleClass('active');
});

//スマホ用ホバーアクション
$('.list_works ul li').on("touchstart touchmove",function(){
	$(this).addClass('ts');
});
$('.list_works ul li').on("touchend",function(){
	$(this).removeClass('ts');
});

$(window).on("load resize orientationchange",function(){
	responsive();
	//w_test();
});

function responsive(){

$('.menu-warp .thumb').imgLiquid();
$('#wedding .g_thumb a').imgLiquid();
var h_height = $('header').height()+15;	
$('.bgimg').css({'top':h_height+'px'});

var works_elm = $('.box_works');
var works_width = works_elm.width();
var works_height = works_width * (5/6);
works_elm.css('height',works_height + 'px');

$('#menupage .menu-warp').tile();

var w = window.innerWidth;
var h = $(window).height();

var s = 400;
var x = 767;
var y = 1024;
if (w <= s){
//sp1

}
else if (w > s && w <= x){
//sp2

}
else if (w > x && w <= y){
//tb

}
else{
/*pc*/

}

}
responsive();

function eventHandler(event,selector){
	event.stopPropagation();
	event.preventDefault();
	if(event.type === 'touchend')selector.off('click');
}

//smart phone
function ua_sp(){
	$('.tel').each(function(){
		var telnum = $(this).text();
		$(this).html(
			telnum.replace(telnum,'<a href="tel:' + telnum + '">' + telnum + '</a>')
		);
	});
	
	var tel = $('.tel_img').attr('alt');
	$('.tel_img').wrap('<a href="tel:'+tel+'">');
}

//test
function w_test(){
	var test = $(window).width();
	$('title').text(test);
}



//light box
/*
lightbox.option({
	'resizeDuration':300,
	'showImageNumberLabel':false,
});
*/
$(function() {
	//クリックしたときのファンクションをまとめて指定
	$('.tab li').click(function() {

		//.index()を使いクリックされたタブが何番目かを調べ、
		//indexという変数に代入します。
		var index = $('.tab li').index(this);

		//コンテンツを一度すべて非表示にし、
		$('.content li').css('display','none');

		//クリックされたタブと同じ順番のコンテンツを表示します。
		$('.content li').eq(index).css('display','block');

		//一度タブについているクラスselectを消し、
		$('.tab li').removeClass('select');

		//クリックされたタブのみにクラスselectをつけます。
		$(this).addClass('select')
	});
});

