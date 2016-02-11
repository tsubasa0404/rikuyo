;(function($){

	$.fn.onChangeSubmit = function() {
		var input_elem = this; //thisをわかりやすい名前にする


			$(document).on('change keyup bind', '.on_change_input', function(){
				//valueとdata-lang取得
				var $input = $(this);
				var type = $(this).data('type');
        var val  = $(this).val();
				var lang = $(this).data('lang');
				var id = $(this).data('id');
				var alias = $(this).data('alias');
				var input_id = $(this).attr('id');
				var jp = "";
				var en = "";
				if(!val||!alias){return false;}

				if(type === 'sector'){
	        //inputにvalueを渡す
	        if(lang === 'sector_jp'){
	        	jp = val;
	        	en = alias;
	        } else {
	        	jp = alias;
	        	en = val;
	        }
	        var url = $('form.sector_form').attr('action');

	        $.ajax({
	        	url : url,
	        	type :'POST',
	        	dataType: 'json',
	        	data: {
	        		id:id,
	        		sector_jp:jp,
	        		sector_en:en,
	        	},
	        	success: function(){
	        		$('input').parents('tr').find('.en-'+id).attr('data-alias', jp);
	        		$('input').parents('tr').find('.jp-'+id).attr('data-alias', en);

	        	},
	        	error: function(){

	        	}
	        });

				} else {

					if(lang == 'job_jp'){
	        	jp = val;
	        	en = alias;
	        } else {
	        	jp = alias;
	        	en = val;
	        }
	        var url = $('form.job_form').attr('action');
	        var new_url = url+'/'+id;
	        var url = $('form.job_form').attr('action');

	        $.ajax({
	        	url : url,
	        	type :'POST',
	        	dataType: 'json',
	        	data: {
	        		id:id,
	        		job_jp:jp,
	        		job_en:en,
	        	},
	        	success: function(){//ajaxAdd後にvalueなどの要素が変わらない。
	        		$('input').parents('tr').find('.en-'+id).attr('data-alias', jp);
	        		$('input').parents('tr').find('.jp-'+id).attr('data-alias', en);

	        	},
	        	error: function(){

	        	}
	        });

				}
			});


		return this;

	};

})(jQuery);