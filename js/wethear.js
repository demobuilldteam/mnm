$(document).ready(function() {
	$('#show_wethear').click(function(event) {
		/* Act on the event */
		var city = ('#city').val();
		if(city != ' '){
			$.$.ajax({
				url: 'http://api.openweathermap.org/data/2.5/weather?q=' + city+ '&&appid=b1b15e88fa797225412429c1c50c122a1',
				type: 'GET',
				dataType: 'jsonp',
				success: function(data){
					console.log(data);
				}
			})
			.done(function() {
				console.log("success");
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
			
		}else{
			$('#error_city').innerHTML = "You must enter city's name";
		}
	});
});