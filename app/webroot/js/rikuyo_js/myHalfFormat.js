;(function($){
  $('.half').change(function(){
    var txt = $(this).val();
    var half = txt.replace(/[A-Za-z0-9]/g, function(s){
      return String.fromCharCode(s.charCodeAt(0)-0xFEE0)
    });
    $(this).val(half);
  });
})(jQuery);