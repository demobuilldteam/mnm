$(document).ready(function() {
	$(".fa1").on('click', function(event) {
		event.preventDefault();
		/* Act on the event */
		$(".sub1").slideToggle("slow");
	});
	$(".fa2").on('click', function(event) {
		event.preventDefault();
		/* Act on the event */
		$(".sub2").slideToggle("slow");
	});
	$(".fa3").on('click', function(event) {
		event.preventDefault();
		/* Act on the event */
		$(".sub3").slideToggle("slow");
	});
	$('.ccc').on('click', function(event) {
		event.preventDefault();
		/* Act on the event */
		$('.list_menu ul').slideToggle("slow"); 
	});
	$(window).scroll(function(event) {
		var scoll = $(window).scrollTop();
		// console.log(scoll);
		if( scoll > 700 ){
			$('.back_top').show('fast');
		}else{
			$('.back_top').hide('fast');
		}
	});
	$('.back_top').on('click', function(event) {
		event.preventDefault();
		$('html, body').animate({scrollTop:0}, 1000);
	});

});