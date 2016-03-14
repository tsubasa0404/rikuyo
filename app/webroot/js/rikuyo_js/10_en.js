;(function(){
  $(document).ready(function() {

    //agentのセレクトボックスの値が変更されたら
    $('select.sel_agent').on('change', function(){
      var agent_id = $(this).val();
      var url = $(this).data('url');

      $.ajax({
        url:url,
        type:'GET',
        data:{
          agent_id:agent_id
        }, success:function(rs){
          var obj = JSON.parse(rs);
          console.log(obj);
          var agent_en = obj['Agent']['agent_en'];
          var rep_family_name_en = obj['Agent']["rep_family_name_en"];
          var rep_given_name_en = obj['Agent']["rep_given_name_en"];
          var rep_family_name_jp = obj['Agent']["rep_family_name_jp"];
          var rep_given_name_jp = obj['Agent']["rep_given_name_jp"];
          var rep_position_en = obj['Agent']["rep_position_en"];
          var address_en = obj['Agent']["address_en"];
          var province_en = obj['Province']["province_en"];
          var district_en = obj['District']["district_en"];
          var commune_en = obj['Commune']["commune_en"];
          var phone = obj['Agent']["phone1"];
          var establish_date = obj['Agent']["establish_date"];
          var capital_riel = obj['Agent']["capital_riel"];
          var capital_jpy = obj['Agent']["capital_jpy"];
          var sales_riel = obj['Agent']["sales_riel"];
          var sales_jpy = obj['Agent']["sales_jpy"];
          var employee_num = obj['Agent']["employee_num"];
          var export_jp = obj['Agent']["export_jp"];
          var import_jp = obj['Agent']["import_jp"];


          $('input.agent_name').val(agent_en);
          $('input.agent_rep_name').val(rep_family_name_en+" "+rep_given_name_en);
          $('input.agent_rep_position').val(rep_position_en);
          $('.agent_address').val(address_en+", Sangkat "+commune_en+", Khan "+district_en+", "+province_en);
          $('input.agent_phone').val(phone);
          $('input.agent_establish_date').val(format_date(establish_date));
          $('input.agent_capital_riel').val(capital_riel/4000+" USD");
          $('input.agent_capital_jpy').val(capital_jpy+" Yen");
          $('input.agent_sales_riel').val(sales_riel/4000+" USD");
          $('input.agent_sales_jpy').val(sales_jpy+" Yen");
          $('input.agent_employee_num').val(employee_num+" People");
          $('input.agent_export_jp').val(export_jp);
          $('input.agent_import_jp').val(import_jp);

          function format_date(date){
            if(date==""){
              return ;
            }
            var date_obj = new Date(date);
            var month         = date_obj.getMonth() + 1;
            var day           = date_obj.getDate();
             month_en      = month_en(month);
             day_en        = day_en(day);
            var format_date   = month_en + " " + day_en + " " + date_obj.getFullYear();
            return format_date;
          }
          function month_en(month){
            switch (month) {
              case 12: month = 'Dec'; break;
              case 11: month = 'Nov'; break;
              case 10: month = 'Oct'; break;
              case 9: month = 'Sep'; break;
              case 8: month = 'Aug'; break;
              case 7: month = 'Jul'; break;
              case 6: month = 'Jun'; break;
              case 5: month = 'May'; break;
              case 4: month = 'Apr'; break;
              case 3: month = 'Mar'; break;
              case 2: month = 'Feb'; break;
              case 1: month = 'Jan'; break;
            }
            return month;
          }
          function day_en(day){
            switch (day) {
              case 1: day = '1st'; break;
              case 2: day = '2nd'; break;
              case 3: day = '3rd'; break;
              default : day = day+'th';
            }
            return day;
          }


        }, error: function(XMLHttpRequest, textStatus){
          console.log(textStatus);
        }
      });

    });

  });
})(jQuery);