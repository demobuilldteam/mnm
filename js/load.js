$(document).ready(function($) {
	$('.title').click(function(event) {
		var maloai = $(this).attr('loai');
		alert(maloai);
		$.get("../xulyuser.php",{maloais: maloai},function(data){
			$('.right_content').html(data);
			// alert(data);
		});
	});
	$('.sub_item').click(function(event) {
		var conditions = $(this).attr('ten');

		var arr = conditions.split('-');
		var kieu = arr[0];
		var loai = arr[1];
		// alert(kieu+loai);
		$.get("../xulyloaiuser.php",{kieux: kieu,loaix: loai},function(data){
			// alert(data);
			$('.right_content').html(data);
		});

	}); 
}); 