charset="UTF-8";

$(function() {
$('#vegas').vegas({/*--backgroundのスライドショー--*/
    slides: [
        { src: 'asetts/image/1main/img1-1.jpg' },
        { src: 'asetts/image/1main/img1-2.jpg' },
        { src: 'asetts/image/1main/img1-3.jpg' },
        { src: 'asetts/image/1main/img1-4.jpg' },
        { src: 'asetts/image/1main/img1-5.jpg' },
        { src: 'asetts/image/1main/img1-6.jpg' }
    ],
    transition: 'fade', //スライドを遷移させる際のアニメーション
    delay: 8000, //スライド切り替え時の遅延時間
    animationDuration: 20000, //スライド表示中のアニメーションの時間
  });
});

/*--bx-slider--*/
$(document).ready(function(){
  $('.slider').bxSlider({
    mode:'fade',
    speed:1500,
    auto:false,
    pager:false,
  });
});

/*ハンバーガーメニュー*/
$(function(){
$('#hamburger').click(function(){
  $("header").toggleClass('open');
  $("nav").fadeToggle(500);
});
});

$(function() {
$('.Toggle').click(function() {
  $(this).toggleClass('active');
  if ($(this).hasClass('active')) {
    $('.NavMenu').addClass('active');　 //クラスを付与
  } else {
    $('.NavMenu').removeClass('active'); //クラスを外す
  }
});
});

/*--ページ内リンク--*/
$(function(){
var headerHight = 60;
	$('a[href^="#"]').click(function(){
		var href= jQuery(this).attr("href");
		var target = jQuery(href == "#" || href == "" ? 'body' : href);
		var position = target.offset().top-headerHight;
		$("html, body").animate({scrollTop:position}, 550, "swing");
		return false;
	});
});
