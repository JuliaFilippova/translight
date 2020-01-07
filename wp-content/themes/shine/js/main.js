// Slider swiper 1
var mySwiper = new Swiper ('#swiper-project', {
    // Optional parameters
    slidesPerView: 2,
    observer: true,
    loop: false,
    loopFillGroupWithBlank: false,
	    // Navigation arrows
	    navigation: {
	      nextEl: '.swiper-button-next_project',
	      prevEl: '.swiper-button-prev_project',
	    },
	    breakpoints: {
			// when window width is >= 320px
			320: {
				slidesPerView: 1
			},
			// when window width is >= 768px
			1100: {
				slidesPerView: 2
			}
		}
});
// Slider swiper 2
var mySwiper = new Swiper ('#swiper-rent', {
    // Optional parameters
    slidesPerView: 1,
    observer: true,
    loop: false,
    loopFillGroupWithBlank: false,
	    // Navigation arrows
	    navigation: {
	      nextEl: '.swiper-button-next_rent',
	      prevEl: '.swiper-button-prev_rent',
	    },
	    breakpoints: {
			// when window width is >= 320px
			320: {
				slidesPerView: 1
			},
			// when window width is >= 768px
			1200: {
				slidesPerView: 1
			}
		}
});


$(document).ready(function(){

	// ПЛАВНЫЙ СКРОЛЛ
    $(".nav-head, .offer__content, .hamburger-menu").on("click","a", function (event) {

    //отменяем стандартную обработку нажатия по ссылке
        event.preventDefault();

    //забираем идентификатор бока с атрибута href
        var id  = $(this).attr('href'),

    //узнаем высоту от начала страницы до блока на который ссылается якорь
            top = $(id).offset().top;

    //анимируем переход на расстояние - top за 1500 мс
        $('body,html').animate({scrollTop: top}, 1000);
    });


	//ГАМБУРГЕР-МЕНЮ
	$('.burger-menu__button').on('click',function() {
		$('.modal-overlay').toggle();
		$('.hamburger-menu').toggle();
	});
	$('#menuClouse').on('click',function(){
		$('.modal-overlay').hide();
		$('.hamburger-menu').hide();
	});

	//закрытие по фону
	$('.modal-overlay').on('click',function() {
		$('.modal-overlay').hide();
		$('.hamburger-menu').hide();
	});

	// открыть все новости NEWS
	$('.news-link').click(function(){
	  $(".news-block__all").show();
	});
	// открыть все новости NEWS
	$('.news-link__off').click(function(){
	  $(".news-block__all").hide();
	});

	// Каталог продукции catalog-tabs
	var links = document.querySelectorAll('.catalog-tabs li');
	var content = document.querySelectorAll('.catalog-content li');
	for(var i=0; i <links.length; i++) {
	    (function(i) {
	       var link = links[i];
	       link.onclick = function() {
	           for(var j=0; j <content.length; j++) {
	              var opacity = window.getComputedStyle(content[j]).opacity;
	              if(opacity == "1") {
	                 content[j].style.opacity = "0";
	              }
	           }
	        content[i].style.opacity = "1";
	        }
	    })(i);
	}

});
// MENU-HEADER SCROLL
	window.onscroll = function showHeader () {
		var header = document.querySelector ('.menu-header');

		// условие: если скролл превысит 200px то..
		if(window.pageYOffset > 150) {
			// применится класс для переменной header
			header.classList.add('.menu-header__fixed');
		} else {
			header.classList.remove('.menu-header__fixed');
		}
	}
