;(function(){
  $(document).ready(function() {

    //traineeのラジオがクリックされたら
    $('input.trainee_radio').on('change', function(){
      var trainee_id = $(this).val();
      var url = $(this).data('url');

      //学生の情報を一度クリア
      $('input.trainee_name').val("");
      $('input.trainee_address').val("");
      $('input.trainee_phone').val("");

      $.ajax({
        url:url,
        type:'GET',
        data:{
          trainee_id:trainee_id
        }, success:function(rs){
          var obj = JSON.parse(rs);
          var family_name_en = obj['Trainee']["family_name_en"];
          var given_name_en = obj['Trainee']["given_name_en"];
          var address_en = obj['Trainee']["address_en"];
          var phone = obj['Trainee']["phone"];
          var province_en = obj['Province']["province_en"];
          var district_en = obj['OutputDistrict']["district_en"];
          var commune_en = obj['OutputCommune']["commune_en"];

          $('input.trainee_name').val(family_name_en+" "+given_name_en);
          $('input.trainee_address').val(address_en+", Sangkat "+commune_en+", Khan "+district_en+", "+province_en);
          $('input.trainee_phone').val(phone);
        }, error: function(XMLHttpRequest, textStatus){
          console.log(textStatus);
        }
      });

    });

  });
})(jQuery);