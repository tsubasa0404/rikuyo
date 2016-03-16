;(function(){
  $(document).ready(function() {

    //traineeのラジオがクリックされたら
    $('input.trainee_radio').on('change', function(){
      var trainee_id = $(this).val();
      var url = $(this).data('url');

      //学生の情報を一度クリア
      $('input.trainee_name').val("");

      $.ajax({
        url:url,
        type:'GET',
        data:{
          trainee_id:trainee_id
        }, success:function(rs){
          var obj = JSON.parse(rs);
          var family_name_en = obj['Trainee']["family_name_en"];
          var given_name_en = obj['Trainee']["given_name_en"];

          $('input.trainee_name').val(family_name_en+" "+given_name_en);
        }, error: function(XMLHttpRequest, textStatus){
          console.log(textStatus);
        }
      });

    });

  });
})(jQuery);