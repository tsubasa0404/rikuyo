;$(function(){
	//業種を追加
	$('.sector_form_btn').on('click', function(){
		var sector_jp = $('#sectorJp').val();
		var sector_en = $('#sectorEn').val();
		if(!sector_jp ||!sector_en){
			alert("入力されていない項目があります。");
			return ;
		}

		//select optionを追加
		var option = '<option value="'+"lastInsertId"+'">'+sector_jp+'</option>';
		$('.sel_sector').prepend(option);
		close();
	});

	$('.btn_close').on('click', function(){
		close();
	});
	function close(){
		$('#modal-sector').removeClass('md-show');
		$('#sectorJp').val("");
		$('#sectorEn').val("");
	}
});

$(function(){
	//職種を追加
	$('.job_form_btn').on('click', function(){
		var job_jp = $('#jobJp').val();
		var job_en = $('#jobEn').val();
		if(!job_jp ||!job_en){
			alert("入力されていない項目があります。");
			return ;
		}

		//select optionを追加
		var option = '<option value="'+"lastInsertId"+'">'+job_jp+'</option>';
		$('.sel_job').prepend(option);
		close();
	});

	$('.btn_close').on('click', function(){
		close();
	});
	function close(){
		$('#modal-job').removeClass('md-show');
		$('#jobJp').val("");
		$('#jobEn').val("");
	}
});
