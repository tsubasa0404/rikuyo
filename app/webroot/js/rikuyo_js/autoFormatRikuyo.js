;$(function(){

	//資本金・リエルを入力すると、3桁区切りのカンマ、日本円自動入力
	$('#capitalKh').on('click blur keydown keyup keypress change', function(){
		var inputPrice = $('#capitalKh').val();
		var	fmtPrice = Number(inputPrice).toLocaleString();
		var	jpPrice = Math.floor(inputPrice * 0.03);
		var	fmtJpPrice = jpPrice.toLocaleString();
				$('span[name="capitalKhOut"]').text(fmtPrice);
				$('#capitalJp').val(jpPrice);
				$('span[name="capitalJpOut"]').text(fmtJpPrice);
	});
	$('#capitalJp').on('click blur keydown keyup keypress change', function(){
		var inputPrice = $('#capitalJp').val();
		var	fmtPrice = Number(inputPrice).toLocaleString();
				$('span[name="capitalJpOut"]').text(fmtPrice);
	});

	$('#salesKh').on('click blur keydown keyup keypress change', function(){
		var inputPrice = $('#salesKh').val();
		var	fmtPrice = Number(inputPrice).toLocaleString();
		var	jpPrice = Math.floor(inputPrice * 0.03);
		var	fmtJpPrice = jpPrice.toLocaleString();
				$('span[name="salesKhOut"]').text(fmtPrice);
				$('#salesJp').val(jpPrice);
				$('span[name="salesJpOut"]').text(fmtJpPrice);
	});
	$('#salesJp').on('click blur keydown keyup keypress change', function(){
		var inputPrice = $('#salesJp').val();
		var	fmtPrice = Number(inputPrice).toLocaleString();
				$('span[name="salesJpOut"]').text(fmtPrice);
	});

});