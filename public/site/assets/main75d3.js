window.awe = window.awe || {};
awe.init = function () {
	awe.showPopup();
	awe.hidePopup();	
};
awe_lazyloadImage();
function awe_lazyloadImage() {
	var ll = new LazyLoad({
		elements_selector: ".lazyload",
		load_delay: 100,
		threshold: 0
	});
} window.awe_lazyloadImage=awe_lazyloadImage;
let isload = 0;
$(window).on('scroll  mousemove touchstart',function(){
	try{
		if(!isload){
			isload = 1
			
			var placeholderText = ['Bạn muốn tìm gì?','Quần áo bảo hộ', 'Nón bảo hộ', 'Găng tay bảo hộ', 'Dây an toàn'];
			$('.search-auto').placeholderTypewriter({text: placeholderText});
			
			var wDWs = $(window).width();


		

			$('.btn-close').click(function() {
				$(this).parents('.dropdown').toggleClass('open');
			}); 


			$('.ul_collections li > svg').click(function(){
				$(this).parent().toggleClass('current');
				$(this).toggleClass('fa-angle-down fa-angle-right');
				$(this).next('ul').slideToggle("fast");
				$(this).next('div').slideToggle("fast");
			});
			awe_backtotop();
			$(document).on('click','.overlay, .close-window, .btn-continue, .fancybox-close', function() {   
				awe.hidePopup('.awe-popup'); 
				setTimeout(function(){
					$('.loading').removeClass('loaded-content');
				},500);
				return false;
			})
			if (wDWs < 991) {
				$('.menu-bar').on('click', function(){
					$('.opacity_menu').addClass('current');
					$('.header-nav').addClass('current');
				})

				$('.item_big li .fa').click(function(e){
					if($(this).hasClass('current')) {
						$(this).closest('ul').find('li, .fa').removeClass('current');
					} else {
						$(this).closest('ul').find('li, .fa').removeClass('current');
						$(this).closest('li').addClass('current');
						$(this).addClass('current');
					}
				});
				$('.opacity_menu').on('click', function(){
					$('.header-nav').removeClass('current');
					$('.opacity_menu').removeClass('current');
					$('.ul-contact').removeClass('current');
				})
			}
			awe_category();


			$('.dropdown-toggle').click(function() {
				$(this).parent().toggleClass('open'); 	
			}); 


			$(document).ready(function() {
				var margin_left = 0;
				$('#prev').on('click', function(e) {
					e.preventDefault();
					animateMargin( 190 );
				});
				$('#next').on('click', function(e) {
					e.preventDefault();
					animateMargin( -190 );
				});
				const animateMargin = ( amount ) => {
					margin_left = Math.min(0, Math.max( getMaxMargin(), margin_left + amount ));
					$('ul.item_big').animate({
						'margin-left': margin_left
					}, 300);
				};
				const getMaxMargin = () => 
				$('ul.item_big').parent().width() - $('ul.item_big')[0].scrollWidth;
				$('.btn-video').on('click', function(e){
					var idVideo = $(this).attr('data-video');
					$('.popup-video').addClass('active');
					$('.popup-video .body-popup').html(`<iframe width="560" height="315" src="https://www.youtube.com/embed/` + idVideo + `" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>`)
				});
				$('.close-popup-video').on('click', function(e){
					$('.popup-video').removeClass('active');
					$('.popup-video .body-popup').html(' ');
				});
			})

			function awe_showLoading(selector) {
				var loading = $('.loader').html();
				$(selector).addClass("loading").append(loading); 
			}  window.awe_showLoading=awe_showLoading;
			function awe_hideLoading(selector) { 
				$(selector).removeClass("loading"); 
				$(selector + ' .loading-icon').remove();
			}  window.awe_hideLoading=awe_hideLoading;
			function awe_showPopup(selector) {
				$(selector).addClass('active');
			}  window.awe_showPopup=awe_showPopup;
			function awe_hidePopup(selector) {
				$(selector).removeClass('active');
			}  window.awe_hidePopup=awe_hidePopup;
			awe.hidePopup = function (selector) {
				$(selector).removeClass('active');
			}


			function awe_convertVietnamese(str) { 
				str= str.toLowerCase();
				str= str.replace(/Ă |Ă¡|áº¡|áº£|Ă£|Ă¢|áº§|áº¥|áº­|áº©|áº«|Äƒ|áº±|áº¯|áº·|áº³|áºµ/g,"a"); 
				str= str.replace(/Ă¨|Ă©|áº¹|áº»|áº½|Ăª|á»|áº¿|á»‡|á»ƒ|á»…/g,"e"); 
				str= str.replace(/Ă¬|Ă­|á»‹|á»‰|Ä©/g,"i"); 
				str= str.replace(/Ă²|Ă³|á»|á»|Ăµ|Ă´|á»“|á»‘|á»™|á»•|á»—|Æ¡|á»|á»›|á»£|á»Ÿ|á»¡/g,"o"); 
				str= str.replace(/Ă¹|Ăº|á»¥|á»§|Å©|Æ°|á»«|á»©|á»±|á»­|á»¯/g,"u"); 
				str= str.replace(/á»³|Ă½|á»µ|á»·|á»¹/g,"y"); 
				str= str.replace(/Ä‘/g,"d"); 
				str= str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'| |\"|\&|\#|\[|\]|~|$|_/g,"-");
				str= str.replace(/-+-/g,"-");
				str= str.replace(/^\-+|\-+$/g,""); 
				return str; 
			} window.awe_convertVietnamese=awe_convertVietnamese;
			var wDWs = $(window).width();


			function awe_category(){
				$('.nav-category .fa-angle-right').click(function(e){
					$(this).toggleClass('fa-angle-down fa-angle-right');
					$(this).parent().toggleClass('active');
				});
				$('.nav-category .fa-angle-down').click(function(e){
					$(this).toggleClass('fa-angle-right');
					$(this).parent().toggleClass('active');
				});
			} window.awe_category=awe_category;


			function awe_backtotop() { 
				$(window).scroll(function() {
					$(this).scrollTop() > 200 ? $('.backtop').addClass('show') : $('.backtop').removeClass('show')
				});
				$('.backtop').click(function() {
					return $("body,html").animate({
						scrollTop: 0
					}, 800), !1
				});
			} window.awe_backtotop=awe_backtotop;


			var swipertext = new Swiper('.text-slider', {
				autoplay: true,
				effect: 'fade',
			});
			if (wDWs > 992) {
				function horizontalNav() {
					return {
						wrapper: $('.header-menu-des'),
						navigation: $('.header-menu-des .header-nav'),
						item: $('.header-menu-des .header-nav .nav-item'),
						totalStep: 0,
						onCalcNavOverView: function(){
							let itemHeight = this.item.eq(0).outerWidth(),
								lilength = this.item.length,
								total = 0;
							for (var i = 0; i < lilength; i++) {
								itemHeight = this.item.eq(i).outerWidth();
								total += itemHeight;
							}
							return Math.ceil(total)
						},
						onCalcTotal: function(){
							let  navHeight = this.navigation.width();
							return Math.ceil(navHeight)
						},
						init:function(){
							this.totalStep = this.onCalcNavOverView();
							this.totalTo = this.onCalcTotal();
							if(this.totalStep > this.totalTo){
								$('.control-menu').addClass("d-lg-block");

							} 
						}
					}	
				}
			}
			$(document).ready(function ($) {
				if(window.matchMedia('(min-width: 992px)').matches){
					horizontalNav().init()
				}
			});
			var swiperins = new Swiper('.instagram-swiper', {
				spaceBetween: 0,
				loop: false,
				breakpoints: {
					300: {
						slidesPerView: 3,

					},
					500: {
						slidesPerView: 3,

					},
					640: {
						slidesPerView: 4,

					},
					768: {
						slidesPerView: 5,

					},
					991: {
						slidesPerView: 6,

					},
					1200: {
						slidesPerView: 8,

					}
				}
			});

		}
	}catch(e){
		console.log(e);
	}
});
$('.counter').counterUp({
	delay: 10,
	time: 1500
});