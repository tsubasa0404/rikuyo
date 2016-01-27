;(function($){

	$.fn.onChangeSubmit = function() {
		var input_elem = this; //thisをわかりやすい名前にする

		input_elem.each(function(){

			$(this).change(function(){
				//valueとdata-lang取得
				var type = $(this).data('type');
        var val  = $(this).val();
				var lang = $(this).data('lang');
				var id = $(this).data('id');
				var alias = $(this).data('alias');
				if(!val||!alias){return false}

				if(type == 'sector'){
	        //inputにvalueを渡す
	        if(lang == 'sector_jp'){
	        	$('div.hide').find('input.sector_jp').val(val);
	        	$('div.hide').find('input.sector_en').val(alias);
	        } else {
	        	$('div.hide').find('input.sector_en').val(val);
	        	$('div.hide').find('input.sector_jp').val(alias);
	        }
	        var url = $('form.sector_form').attr('action');
	        var new_url = url+'/'+id;
	        $('form.sector_form').find('.sector_id').val(id);
	        $('form.sector_form').attr('action', new_url).submit();

				} else {

					if(lang == 'job_jp'){
	        	$('div.hide').find('input.job_jp').val(val);
	        	$('div.hide').find('input.job_en').val(alias);
	        } else {
	        	$('div.hide').find('input.job_en').val(val);
	        	$('div.hide').find('input.job_jp').val(alias);
	        }
	        var url = $('form.job_form').attr('action');
	        var new_url = url+'/'+id;
	        $('form.job_form').find('.job_id').val(id);
	        $('form.job_form').attr('action', new_url).submit();

				}
			});
		});

		return this;

	};

})(jQuery);