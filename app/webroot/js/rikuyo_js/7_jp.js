;(function(){
  $(document).ready(function() {

    //traineeのラジオがクリックされたら
    $('input.trainee_radio').on('change', function(){
      var trainee_id = $(this).val();
      var url = $(this).data('url');

      //学生の情報を一度クリア

      $.ajax({
        url:url,
        type:'GET',
        data:{
          trainee_id:trainee_id
        }, success:function(rs){
          var obj = JSON.parse(rs);
          var family_name_en = obj['Trainee']["family_name_en"];
          var given_name_en = obj['Trainee']["given_name_en"];
          var family_name_jp = obj['Trainee']["family_name_jp"];
          var given_name_jp = obj['Trainee']["given_name_jp"];
          var sex = obj['Trainee']["sex"];
          var married = obj['Trainee']["married"];
          var birthday = obj['Trainee']["birthday"];
          var address_en = obj['Trainee']["address_en"];
          var province_en = obj['Province']["province_en"];
          var district_en = obj['OutputDistrict']["district_en"];
          var commune_en = obj['OutputCommune']["commune_en"];
          var academic1_from = obj['Trainee']['academic1_from'];
          var academic2_from = obj['Trainee']['academic2_from'];
          var academic3_from = obj['Trainee']['academic3_from'];
          var academic4_from = obj['Trainee']['academic4_from'];
          var academic1_to = obj['Trainee']['academic1_to'];
          var academic2_to = obj['Trainee']['academic2_to'];
          var academic3_to = obj['Trainee']['academic3_to'];
          var academic4_to = obj['Trainee']['academic4_to'];
          var academic1_jp = obj['Trainee']['academic1_jp'];
          var academic2_jp = obj['Trainee']['academic2_jp'];
          var academic3_jp = obj['Trainee']['academic3_jp'];
          var academic4_jp = obj['Trainee']['academic4_jp'];
          var employ1_from = obj['Trainee']['employ1_from'];
          var employ2_from = obj['Trainee']['employ2_from'];
          var employ3_from = obj['Trainee']['employ3_from'];
          var employ4_from = obj['Trainee']['employ4_from'];
          var employ5_from = obj['Trainee']['employ5_from'];
          var employ1_to = obj['Trainee']['employ1_to'];
          var employ2_to = obj['Trainee']['employ2_to'];
          var employ3_to = obj['Trainee']['employ3_to'];
          var employ4_to = obj['Trainee']['employ4_to'];
          var employ5_to = obj['Trainee']['employ5_to'];
          var employ1_jp = obj['Trainee']['employ1_jp'];
          var employ2_jp = obj['Trainee']['employ2_jp'];
          var employ3_jp = obj['Trainee']['employ3_jp'];
          var employ4_jp = obj['Trainee']['employ4_jp'];
          var employ5_jp = obj['Trainee']['employ5_jp'];
          var job1_jp = obj['Job1']['job_jp'];
          var job1_term = obj['Trainee']['job1_term'];
          var job2_jp = obj['Job2']['job_jp'];
          var job2_term = obj['Trainee']['job2_term'];
          var english = obj['Trainee']['english'];
          var lang_others_jp = obj['Trainee']['lang_others_jp'];
          var visit_jpn = obj['Trainee']['visit_jpn'];


          $('input.trainee_family_name_en').val(family_name_en);
          $('input.trainee_given_name_en').val(given_name_en);
          $('input.trainee_family_name_jp').val(family_name_jp);
          $('input.trainee_given_name_jp').val(given_name_jp);
          if(sex == 'male'){
            $('.trainee_sex').html('<span class="circle">男</span>・女');
          } else {
            $('.trainee_sex').html('男・<span class="circle">女</span>');
          }
          if(married == 'married'){
            $('.trainee_married').html('<span class="circle">有</span>・無');
          } else {
            $('.trainee_married').html('有・<span class="circle">無</span>');
          }

          $('input.trainee_birthday').val(format_date(birthday));
          $('.trainee_address').val(address_en+", Sangkat "+commune_en+", Khan "+district_en+", "+province_en);
          $('input.trainee_academic1_from').val(format_month(academic1_from));
          $('input.trainee_academic2_from').val(format_month(academic2_from));
          $('input.trainee_academic3_from').val(format_month(academic3_from));
          $('input.trainee_academic4_from').val(format_month(academic4_from));
          $('input.trainee_academic1_to').val(format_month(academic1_to));
          $('input.trainee_academic2_to').val(format_month(academic2_to));
          $('input.trainee_academic3_to').val(format_month(academic3_to));
          $('input.trainee_academic4_to').val(format_month(academic4_to));
          $('input.trainee_academic1_jp').val(academic1_jp);
          $('input.trainee_academic2_jp').val(academic2_jp);
          $('input.trainee_academic3_jp').val(academic3_jp);
          $('input.trainee_academic4_jp').val(academic4_jp);
          $('input.trainee_employ1_from').val(format_month(employ1_from));
          $('input.trainee_employ2_from').val(format_month(employ2_from));
          $('input.trainee_employ3_from').val(format_month(employ3_from));
          $('input.trainee_employ4_from').val(format_month(employ4_from));
          $('input.trainee_employ5_from').val(format_month(employ5_from));
          $('input.trainee_employ1_to').val(format_month(employ1_to));
          $('input.trainee_employ2_to').val(format_month(employ2_to));
          $('input.trainee_employ3_to').val(format_month(employ3_to));
          $('input.trainee_employ4_to').val(format_month(employ4_to));
          $('input.trainee_employ5_to').val(format_month(employ5_to));
          $('input.trainee_employ1_jp').val(employ1_jp);
          $('input.trainee_employ2_jp').val(employ2_jp);
          $('input.trainee_employ3_jp').val(employ3_jp);
          $('input.trainee_employ4_jp').val(employ4_jp);
          $('input.trainee_employ5_jp').val(employ5_jp);
          $('input.trainee_job1_jp').val(job1_jp);
          $('input.trainee_job1_term').val(job1_term);
          $('input.trainee_job2_jp').val(job2_jp);
          $('input.trainee_job2_term').val(job2_term);
          if(english==1){
            $('span.trainee_english').addClass('circle');
          } else {
            $('span.trainee_english').removeClass('circle');
          }
          $('input.trainee_english').val(english);
          $('input.trainee_lang_others_jp').val(lang_others_jp);
          if(visit_jpn==1){
            $('p.trainee_visit_jpn').html('<span class="circle">有</span>・無');
          } else {
            $('p.trainee_visit_jpn').html('有・<span class="circle">無</span>');
          }
          $('input.trainee_visit_jpn').val(visit_jpn);

          function format_date(date){
            if(date==""){
              return ;
            }
            var date_obj = new Date(date);
            var format_date = date_obj.getFullYear() +' 年 ' + (date_obj.getMonth() + 1) + ' 月 ' +  date_obj.getDate() + ' 日';
            return format_date;
          }
          function format_month(month){
            if(month==""){
              return ;
            } else if(month=="現在"){
              return "現在";
            }
            var date_obj = new Date(month);
            var format_date = date_obj.getFullYear() +' 年 ' + (date_obj.getMonth() + 1) + ' 月 ';
            return format_date;
          }




        }, error: function(XMLHttpRequest, textStatus){
          console.log(textStatus);
        }
      });

    });

  });
})(jQuery);