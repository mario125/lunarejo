
$(document).ready(function(){
	var altura = $('.menu').offset().top;

	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > altura ){
			$('.menu').addClass('menu-fixed');
			$('.logo').addClass('milogo');
		} else {
			$('.menu').removeClass('menu-fixed');
			$('.logo').removeClass('milogo');
		}
	});

});
