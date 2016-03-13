;(function(){
  $(document).ready(function() {

    $('.agent_name_1').on('change', function(){
        var val = $(this).val();
        $('.agent_name_2').val("");
        $('.agent_name_2').val(val);
      });
      $('.job_1').on('change', function(){
        var val = $(this).val();
        $('.job_2').val("");
        $('.job_2').val(val);
      });


  });
})(jQuery);