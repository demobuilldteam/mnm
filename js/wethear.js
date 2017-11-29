$(document).ready(function() {
	load_index('');
	$('#show_wethear').click(function(event) {
		/* Act on the event */
		var city = $('#city').val();
		load_index(city);
	});
});

load_index = function(city){
	if (city != '') {
		url = 'http://api.openweathermap.org/data/2.5/weather?q='+city+'&mode=html&appid=75fd472d6b3b460d6dc67202c44bbca7';
	}else{
		url = 'http://api.openweathermap.org/data/2.5/weather?q=London&mode=html&appid=75fd472d6b3b460d6dc67202c44bbca7';
	}
	$.ajax({
		url: url,
		type: 'GET',
		dataType: 'html',
		success: function(data){
			// console.log(data.weather[0].description);
			alert('successful');

		},
		complete:function(data){
			$('.rowdata').html(data);
		}
	});
}