;(function($){

  $.fn.onChangeSubmitAddress = function() {
    var input_elem = this; //thisをわかりやすい名前にする


      $(document).on('change', '.on_change_input', function(){
        //valueとdata-lang取得
        var $input = $(this);
        var id = $(this).data('id');
        var type = $(this).data('type');
        var val  = $(this).val();
        var lang = $(this).data('lang');
        var alias_jp = $(this).data('alias-jp');
        var alias_en = $(this).data('alias-en');
        var alias_kh = $(this).data('alias-kh');
        var input_id = $(this).attr('id');
        var jp = "";
        var en = "";
        var kh = "";
        if(!val){return false;}

        if(type === 'province'){
          //inputにvalueを渡す
          if(lang === 'jp'){
            jp = val;
            en = alias_en;
            kh = alias_kh;
          } else if(lang === 'en') {
            jp = alias_jp;
            en = val;
            kh = alias_kh;
          } else if(lang === 'kh') {
            jp = alias_jp;
            en = alias_kh;
            kh = val;
          }
          var url = $('form.province_form').attr('action');

          $.ajax({
            url : url,
            type :'POST',
            dataType: 'json',
            data: {
              id:id,
              province_jp:jp,
              province_en:en,
              province_kh:kh,
            },
            success: function(){
              $('input').parents('tr').find('.jp-'+id).attr('data-alias-en', en);
              $('input').parents('tr').find('.jp-'+id).attr('data-alias-kh', kh);
              $('input').parents('tr').find('.en-'+id).attr('data-alias-jp', jp);
              $('input').parents('tr').find('.en-'+id).attr('data-alias-kh', kh);
              $('input').parents('tr').find('.kh-'+id).attr('data-alias-jp', jp);
              $('input').parents('tr').find('.kh-'+id).attr('data-alias-en', en);
            },
            error: function(){

            }
          });

        } else {

          if(lang === 'jp'){
            jp = val;
            en = alias_en;
            kh = alias_kh;
          } else if(lang === 'en') {
            jp = alias_jp;
            en = val;
            kh = alias_kh;
          } else if(lang === 'kh') {
            jp = alias_jp;
            en = alias_kh;
            kh = val;
          }
          var url = $('form.place_form').attr('action');

          $.ajax({
            url : url,
            type :'POST',
            dataType: 'json',
            data: {
              id:id,
              place_jp:jp,
              place_en:en,
              place_kh:kh,
            },
            success: function(){
              $('input').parents('tr').find('.jp-'+id).attr('data-alias-en', en);
              $('input').parents('tr').find('.jp-'+id).attr('data-alias-kh', kh);
              $('input').parents('tr').find('.en-'+id).attr('data-alias-jp', jp);
              $('input').parents('tr').find('.en-'+id).attr('data-alias-kh', kh);
              $('input').parents('tr').find('.kh-'+id).attr('data-alias-jp', jp);
              $('input').parents('tr').find('.kh-'+id).attr('data-alias-en', en);
            },
            error: function(){

            }
          });

        }
      });


    return this;

  };

})(jQuery);