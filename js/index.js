$(function() {

	$('.fa1').on('click', function(event) {
		event.preventDefault();
		/* Act on the event */
		$('.sub1').slideToggle("slow");
	});
	$('.fa2').on('click', function(event) {
		event.preventDefault();
		/* Act on the event */
		$('.sub2').slideToggle("slow");
	});
	$('.fa3').on('click', function(event) {
		event.preventDefault();
		/* Act on the event */
		$('.sub3').slideToggle("slow");
	});
	$('.menu_left ul li #home').on('click', function(event) {
		event.preventDefault();
		/* Act on the event */
		$(this).toggleClass('.selected');
	});
});