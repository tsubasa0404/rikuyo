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
          var academic1_en = obj['Trainee']['academic1_en'];
          var academic2_en = obj['Trainee']['academic2_en'];
          var academic3_en = obj['Trainee']['academic3_en'];
          var academic4_en = obj['Trainee']['academic4_en'];
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
          var employ1_en = obj['Trainee']['employ1_en'];
          var employ2_en = obj['Trainee']['employ2_en'];
          var employ3_en = obj['Trainee']['employ3_en'];
          var employ4_en = obj['Trainee']['employ4_en'];
          var employ5_en = obj['Trainee']['employ5_en'];
          var job1_en = obj['Job1']['job_en'];
          var job1_term = obj['Trainee']['Job1_term'];
          var job2_en = obj['Job2']['job_en'];
          var job2_term = obj['Trainee']['Job2_term'];
          var english = obj['Trainee']['english'];
          var lang_others_en = obj['Trainee']['lang_others_en'];
          var visit_jpn = obj['Trainee']['visit_jpn'];
          var visit_jpn_from = obj['Trainee']['visit_jpn_from'];
          var visit_jpn_to = obj['Trainee']['visit_jpn_to'];


          $('input.trainee_family_name_en').val(family_name_en);
          $('input.trainee_given_name_en').val(given_name_en);
          $('input.trainee_family_name_jp').val(family_name_jp);
          $('input.trainee_given_name_jp').val(given_name_jp);
          if(sex == 'male'){
            $('.trainee_sex').html('<span class="circle">M</span>/F');
          } else {
            $('.trainee_sex').html('M/<span class="circle">F</span>');
          }
          if(married == 'married'){
            $('.trainee_married').html('<span class="circle">Y</span>/N');
          } else {
            $('.trainee_married').html('Y/<span class="circle">N</span>');
          }
          if(birthday != "0000-00-00"){
            $('input.trainee_birthday').val(format_date(birthday));
          }
          $('.trainee_address').val(chkNullToBlanc(address_en)+", Sangkat "+chkNullToBlanc(commune_en)+", Khan "+chkNullToBlanc(district_en)+", "+chkNullToBlanc(province_en));

          $('input.trainee_academic1_from').val(format_month(academic1_from));
          $('input.trainee_academic2_from').val(format_month(academic2_from));
          $('input.trainee_academic3_from').val(format_month(academic3_from));
          $('input.trainee_academic4_from').val(format_month(academic4_from));
          $('input.trainee_academic1_to').val(format_month(academic1_to));
          $('input.trainee_academic2_to').val(format_month(academic2_to));
          $('input.trainee_academic3_to').val(format_month(academic3_to));
          $('input.trainee_academic4_to').val(format_month(academic4_to));
          $('input.trainee_academic1_en').val(academic1_en);
          $('input.trainee_academic2_en').val(academic2_en);
          $('input.trainee_academic3_en').val(academic3_en);
          $('input.trainee_academic4_en').val(academic4_en);
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
          $('input.trainee_employ1_en').val(employ1_en);
          $('input.trainee_employ2_en').val(employ2_en);
          $('input.trainee_employ3_en').val(employ3_en);
          $('input.trainee_employ4_en').val(employ4_en);
          $('input.trainee_employ5_en').val(employ5_en);
          $('input.trainee_job1_en').val(job1_en);
          $('input.trainee_job1_term').val(job1_term);
          $('input.trainee_job2_en').val(job2_en);
          $('input.trainee_job2_term').val(job2_term);
          if(english==1){
            $('span.trainee_english').addClass('circle');
          } else {
            $('span.trainee_english').removeClass('circle');
          }
          $('input.trainee_english').val(english);
          $('input.trainee_lang_others_en').val(lang_others_en);
          if(visit_jpn==1){
            $('p.trainee_visit_jpn').html('<span class="circle">Y</span>/N');
          } else {
            $('p.trainee_visit_jpn').html('Y/<span class="circle">N</span>');
          }
          $('input.trainee_visit_jpn_from').val(format_month(visit_jpn_from));
          $('input.trainee_visit_jpn_to').val(format_month(visit_jpn_to));

          function chkNullToBlanc(val){
            if(val==null){
              return "";
            } else {
              return val;
            }
          }

          function format_date(date){
            if(date==""){
              return ;
            }
            var date_obj = new Date(date);
            var format_date = date_obj.getDate() + ' / ' + (date_obj.getMonth() + 1) + ' / ' +  date_obj.getFullYear() ;
            return format_date;
          }
          function format_month(month){
            if(month==null||month==""){
              return "";
            } else if(month=="Present"){
              return "Present";
            }
            var date_obj = new Date(month);
            var format_date = date_obj.getFullYear() +' / ' + (date_obj.getMonth() + 1);
            return format_date;
          }




        }, error: function(XMLHttpRequest, textStatus){
          console.log(textStatus);
        }
      });

    });

  });
})(jQuery);