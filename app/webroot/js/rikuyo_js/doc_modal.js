;(function(){
  $(document).ready(function() {

      //モーダルボタンが押されたら、
      //フォルダーIDを取得
    init();

    //Edit/delete folder モーダルで、
    //表示項目の切り替えと、
    //flagの切り替え
    $('.edit-folder').on('click', function(){
      $('.renew-folder-name').removeClass('hide');
      $('.delete-folder-btn').addClass('hide');
      $('.delete-folder-flag').val(0);
    });
    $('.delete-folder').on('click', function(){
      $('.renew-folder-name').addClass('hide');
      $('.delete-folder-btn').removeClass('hide');
      $('.delete-folder-flag').val(1);
    });

    //new sub folderモーダル内saveボタンがクリックされたら、
    //folder idをセットしてsubmit
    $('.sub_folder_form_btn').on('click', function(){
      $('.form_new_sub_folder_folder_id').val(folder_id);

    });

    //Edit/delete sub folderのモーダルボタンがクリックされたら
    $('button.edit-sub-folder-btn').on('click', function(){
      $('.edit_sub_folder_id').val(sub_folder_id);
    });
    //Edit/delete sub folderモーダル内のradioの挙動
    $('input.edit-sub-folder').on('click', function(){
      $('.renew-sub-folder-name').removeClass('hide');
      $('.delete-sub-folder-btn').addClass('hide');
      $('.delete-sub-folder-flag').val(0);
    });
    //Delete Sub Folder のラジオがクリックされたら
    $('.delete-sub-folder').on('click', function(){
      $('.renew-sub-folder-name').addClass('hide');
      $('.delete-sub-folder-btn').removeClass('hide');
      $('.delete-sub-folder-flag').val(1);
      $('input[name="data[SubFolder][sub_folder_jp]"]').val(" ");
      $('input[name="data[SubFolder][sub_folder_en]"]').val(" ");
    });

    //Add New fileのモーダルが開くとき
    $('button.new-file-btn').on('click', function(){
      $('input.form_new_file_folder_id').val(folder_id);
      $('input.form_new_file_sub_folder_id').val(sub_folder_id);
    });

    $('.edit-file').on('click', function(){
      $('.delete-file-hidden').removeClass('hide');
      $('.edit-file-btn').removeClass('hide');
      $('.delete-file-btn').addClass('hide');
    });
    $('.delete-file').on('click', function(){
      $('.delete-file-hidden').addClass('hide');
      $('.edit-file-btn').addClass('hide');
      $('.delete-file-btn').removeClass('hide');
    });

    //upload documentのモーダルが開くとき
    $('button.upload-file-btn').on('click', function(){
      folder_id = $(this).data('folder-id');
      sub_folder_id = $(this).data('sub-folder-id');
      $('.upload-document-folder-id').val(folder_id);
      $('.upload-document-sub-folder-id').val(sub_folder_id);
      var url = $(this).data('url');

      $.ajax({
        url: url,
        type: 'GET',
        //dataType:'json'を削除したらAjaxGetのParserError突破...
        data: {
          folder_id: folder_id,
          sub_folder_id: sub_folder_id
        },success:function(rs){
          var obj = JSON.parse(rs); //戻り値のJson形式文字列をJSONにparseする。
          var option ="";
          var option_arr = "";
          for(var i = 0; i<obj.length;i++){
            for(j in obj[i]){
              $('#DocTemplateDocumentNameId').append('<option value="'+obj[i][j]["id"]+'">'+obj[i][j]["name_jp"]+"("+obj[i][j]["name_en"]+")"+'</option>');
            }
          }
        }, error: function(XMLHttpRequest,textStatus){
        }
      });//end ajax
    });
    //upload documentモーダルを閉じる前にselect optionを空にする。


      $('.edit_file_btn').on('click', function(){
        //書類編集ボタンクリック時
        var file_id = $(this).data('file-id');
        var file_name_jp = $(this).data('file-name-jp');
        var file_name_en = $(this).data('file-name-en');
        var file_lang_jpn = $(this).data('lang-jpn');
        var file_lang_eng = $(this).data('lang-eng');
        var file_lang_khm = $(this).data('lang-khm');
        var file_note = $(this).data('note');

        //input要素にvalueを継承
        $('.inputFileNameJp').val(file_name_jp);
        $('.inputFileNameEn').val(file_name_en);
        isChk(file_lang_jpn, '.lang_jpn');
        isChk(file_lang_eng, '.lang_eng');
        isChk(file_lang_khm, '.lang_khm');
        $('.note').val(file_note);



        function isChk(lang, class_lang){
          if(lang == 1){
            $(class_lang).prop('checked', true);
          } else {
            $(class_lang).prop('checked', false);
          }
        }

        $('.form_edit_file').on('submit', function(){
          $('.lang-chk').each(function(i){
            if($(this).prop('checked')){
              $(this).val('1');
              alert('true' + i);
            } else {
              $(this).val('0');
              alert('false' + i);
            }
          });
        });

      });

      //common function
      $('.btn_close').on('click', function(){
        close();
      });

      function init(){
        $('.md-trigger').on('click', function(){
          $('input[name="data[DocTemplate][img]"]').val('');
          $('input.init').val('');
          $('#DocTemplateDocumentNameId option').remove();
          $('#DocTemplateDocumentNameId').append($("<option>"));
          folder_id = 0;
          sub_folder_id = 0;
          folder_id = $(this).data('folder-id');
          sub_folder_id = $(this).data('sub-folder-id');
        });
      }
      function close(){
        $('body').find('.md-show').removeClass('md-show');
      }
    });



})(jQuery);