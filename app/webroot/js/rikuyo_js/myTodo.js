;(function($){
  $('li.hide').find('.delete_todo').attr('onclick', "");
  $('li.hide').find('form').attr('id', "");
  $('li.hide').find('form').attr('name', "");

  $('#todo_ajax input[type=checkbox]').each(function(){
    if($(this).data('status') == "1"){
      $(this).attr('checked', 'checked');
    }
  });

  //todo
  $('.todo_btn').on('click', function(){
    var url = $('.add_ajax_form').attr('action');
    var task = $('#new_task').val();
    var someone = $('#someone').val();
    var expected_date = $('#expected_date').val();
    var status_id = 0;
    var url_edit = $('.edit_task_form').attr('action');
    var url_delete = $('.delete_task_form').attr('action');
    $.ajax({
      url:url,
      type:'POST',
      dataType: 'json',
      data: {
        task:task,
        someone:someone,
        expected_date:expected_date,
        status_id:status_id
      },
      success:function(rs){
        var $new_todo = $('li.hide').clone();
        $new_todo.removeClass('hide');
        $('ul#todo_ajax').prepend($new_todo).fadeIn();
        $new_todo.find($('input[type=checkbox]')).attr('id', 'todo_'+ rs);
        $new_todo.find($('input[type=checkbox]')).attr('data-id', rs);
        $new_todo.find($('input[type=checkbox]')).attr('data-status', 0);
        $new_todo.find($('input[type=checkbox]')).attr('data-expected-date', expected_date);
        $new_todo.find($('label')).attr('for', 'todo_'+rs);
        $new_todo.find($('.todo_title')).text(task);
        $new_todo.find($('.someone_name')).text(someone);
        $new_todo.find($('.expected_date')).text(expected_date);
        $new_todo.find($('.edit_todo')).attr('href', url_edit+'/'+rs);
        $new_todo.find($('form')).attr('action', url_delete+'/'+rs);
        $new_todo.find($('form')).attr('id', 'post_'+ rs);
        $new_todo.find($('form')).attr('name', 'post_'+rs);
        $new_todo.find($('form')).next().attr('onclick', 'if(confirm("Are you sure you want to delete?")){document.post_'+rs+'.submit();}event.returnValue=false;return false;'); //ajaxで追加された要素のpostlinkはidとnameとonclick内を修正

        $('#new_task').val("");
        $('#someone').val("");
        $('#expected_date').val("");

      },
      error: function(){
        alert('error');
      }
    });
  });

  //checkbox
  $(document).on('click', '.update_todo', function(){ //新規で追加された要素に対するクリックアクションに注意。
      var url = $('.add_ajax_form').attr('action');
      var $input = $(this);
      var id = $input.data('id');
      var status_id = $input.val(); //data-が切り替わらないのでvalに変えた
      var expected_date = $input.data('expected-date');
      var task = $input.next().find('.todo_title').text();
      var someone = $input.next().find('.someone_name').text();
      if(status_id==1){status_id=0;}else{status_id=1;}
      $.ajax({
        url:url,
        type: 'POST',
        dataType: 'json',
        data: {
          id:id,
          status_id:status_id,
          task:task,
          someone:someone,
          expected_date:expected_date
        },
        success: function(){
          $input.val(status_id);
        },
        error: function(){
          alert('error');
        }
      });
  });
  })(jQuery);