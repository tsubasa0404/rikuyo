<?php $this->set('title_for_layout', 'Select Candidates'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/ns-default', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/ns-style-growl', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/ns-style-bar', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/ns-style-attached', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/ns-style-other', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/ns-style-theme', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/sweetalert', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Interview Profile'), '/interviews/profile/'.$prof['Interview']['id']); ?>
<?php $this->Html->addCrumb(__('Select Candidate')); ?>
          <h1><?= __('Add Interview') ?></h1>
          </div>
        </div>
      </div>


              <div class="row">
                <div class="col-lg-12">
                  <div class="main-box clearfix">
                    <header class="main-box-header clearfix">
                      <h2 class="pull-left">実習生募集要項</h2>
                    </header>
                    <div class="main-box-body clearfix">
                      <div class="table-responsive">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th><span>企業名</span></th>
                              <th><span>募集職種</span></th>
                              <th><span>採用人数</span></th>
                              <th><span>性別</span></th>
                              <th><span>年齢</span></th>
                              <th><span>その他要望</span></th>
                              <th><span>面接予定日</span></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                山本株式会社
                              </td>
                              <td>
                                型枠
                              </td>
                              <td>
                                3名
                              </td>
                              <td>
                                男
                              </td>
                              <td>
                                18歳以上
                              </td>
                              <td>
                                真面目な人。
                              </td>
                              <td>
                                2013/08/08
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="main-box clearfix">
                    <header class="main-box-header clearfix">
                      <h2 class="pull-left">実習生絞り込み条件</h2>
                    </header>

                    <div class="main-box-body clearfix">
                      <div class="col-lg-3 col-md-3 col-sm-3">
                        <label class="control-label">実習生ID:</label>
                        <input type="text" class="filter_control_no form-control" value="">
                      </div>
                      <div class="col-lg-3 col-md-3 col-sm-3">
                        <label class="control-label">名前:</label>
                        <input type="text" class="filter_name form-control" value="">
                      </div>
                      <div class="col-lg-3 col-md-3 col-sm-3">
                        <label class="control-label">性別:</label>
                        <div class="">
                          <div class="checkbox-nice pull-left mR5">
                            <input type="checkbox" class="filter_sex" id="filter_sex1" value="男"/><label for="filter_sex1">男</label>
                          </div>
                          <div class="checkbox-nice pull-left mL5">
                            <input type="checkbox" class="filter_sex" id="filter_sex2" value="女"/><label for="filter_sex2">女</label>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-3 col-sm-3">
                        <label class="control-label">希望職種:</label>
                          <input type="text" class="filter_job form-control" value="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="main-box clearfix">
                    <header class="main-box-header clearfix">
                      <h2 class="pull-left">実習生一覧</h2>
                    </header>
                    <div class="main-box-body clearfix">
                      <div class="table-responsive">
                        <div class="hide">
                          <form action="interviewCandidate/addAjax" method="post" accept-charset="utf-8">
                            <input type="hidden" name="interview_id" value="">
                            <input type="hidden" name="trainee_id" value="">
                            <input type="submit" name="interview_candidate_form">
                          </form>
                        </div>
                        <table id="select_trainee_table" class="table data select_trainee table-hover" data-page-size="30">
                          <thead>
                            <tr>
                              <th class="control_no">実習生ID</th>
                              <th class="name">名前</th>
                              <th class="sex">性別</th>
                              <th class="job">希望職種</th>
                              <th class="age">年齢</th>
                              <th class="image"></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr id="select_trainee_table_1">
                              <td>
                                <div class="checkbox-nice">
                                  <input type="checkbox" id="trainee_1" class="chk_selected_trainee T08010_1" name="trainee_id" value="" data-trainee-id="1" data-trainee-control-no="T08010_1">
                                  <label for="trainee_1">T08010_1</label>
                                  <input type="hidden" name="" value="1">
                                </div>
                              </td>
                              <td><a href="trainee-profile.html" target="_blank">Yamamoto Takahiro</a></td>
                              <td>男</td>
                              <td>型枠</td>
                              <td class="num">20</td>
                              <td>
                                <img src="img/samples/scarlet-159.png" width="60px" height="68px" alt="" title="">
                              </td>
                            </tr>
                            <tr id="select_trainee_table_2">
                              <td>
                                <div class="checkbox-nice">
                                  <input type="checkbox" id="trainee_2" class="chk_selected_trainee" name="trainee_id" value="" data-trainee-id="2">
                                  <label for="trainee_2">T08010_2</label>
                                  <input type="hidden" name="" value="1" id>
                                </div>
                              </td>
                              <td><a href="trainee-profile.html" target="_blank">Yamamoto Takahiro</a></td>
                              <td>女</td>
                              <td>縫製</td>
                              <td class="num">24</td>
                              <td>

                              </td>
                            </tr>
                            <tr id="select_trainee_table_3">
                              <td>
                                <div class="checkbox-nice">
                                  <input type="checkbox" id="trainee_3" class="chk_selected_trainee" name="trainee_id" value="" data-trainee-id="3">
                                  <label for="trainee_3">T08010_3</label>
                                  <input type="hidden" name="" value="1" id>
                                </div>
                              </td>
                              <td><a href="trainee-profile.html" target="_blank">Yamamoto Takahiro</a></td>
                              <td>男</td>
                              <td>建設</td>
                              <td class="num">30</td>
                              <td>

                              </td>
                            </tr>
                            <tr id="select_trainee_table_4">
                              <td>
                                <div class="checkbox-nice">
                                  <input type="checkbox" id="trainee_4" class="chk_selected_trainee" name="trainee_id" value="" data-trainee-id="4">
                                  <label for="trainee_4">T08010_4</label>
                                  <input type="hidden" name="" value="1" id>
                                </div>
                              </td>
                              <td><a href="trainee-profile.html" target="_blank">Yamamoto Takahiro</a></td>
                              <td>女</td>
                              <td>型枠</td>
                              <td class="num">40</td>
                              <td>

                              </td>
                            </tr>
                            <tr id="select_trainee_table_5">
                              <td>
                                <div class="checkbox-nice">
                                  <input type="checkbox" id="trainee_5" class="chk_selected_trainee" name="trainee_id" value="" data-trainee-id="5">
                                  <label for="trainee_5">T08010_5</label>
                                  <input type="hidden" name="" value="1" id>
                                </div>
                              </td>
                              <td><a href="trainee-profile.html" target="_blank">Yamamoto Takahiro</a></td>
                              <td>男</td>
                              <td>縫製</td>
                              <td class="num">41</td>
                              <td>

                              </td>
                            </tr>
                            <tr id="select_trainee_table_6">
                              <td>
                                <div class="checkbox-nice">
                                  <input type="checkbox" id="trainee_6" class="chk_selected_trainee" name="trainee_id" value="" data-trainee-id="6">
                                  <label for="trainee_6">T08010_6</label>
                                  <input type="hidden" name="" value="1" id>
                                </div>
                              </td>
                              <td><a href="trainee-profile.html" target="_blank">Yamamoto Takahiro</a></td>
                              <td>女</td>
                              <td>建設</td>
                              <td class="num">31</td>
                              <td>

                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <ul class="pagination pull-right hide-if-no-paging"></ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="row">
                <div class="col-lg-12">
                  <div class="main-box clearfix">
                    <header class="main-box-header clearfix">
                      <h2 class="pull-left">面接候補者一覧</h2>
                    </header>
                    <div class="main-box-body clearfix">
                      <div class="table-responsive">
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th class="">実習生ID</th>
                              <th class="">名前</th>
                              <th class="">性別</th>
                              <th class="">希望職種</th>
                              <th class="">年齢</th>
                              <th class=""></th>
                            </tr>
                          </thead>
                          <tbody id="selected_trainee_table">
                            <tr id="selected_trainee_1">
                              <td>
                                <div class="checkbox-nice">
                                  <input type="checkbox" id="selected_trainee_10" class="chk_selected_trainee" name="trainee_id" value="1" data-trainee-id="1" checked="">
                                  <label for="selected_trainee_10">1</label>
                                </div>
                              </td>
                              <td><a href="trainee-profile.html" target="_blank">Yamamoto Takahiro</a></td>
                              <td>男</td>
                              <td>型枠</td>
                              <td class="num">20</td>
                              <td>

                              </td>
                            </tr>
                            <tr id="selected_trainee_2">
                              <td>
                                <div class="checkbox-nice">
                                  <input type="checkbox" id="selected_trainee_11" class="chk_selected_trainee" name="trainee_id" value="2" data-trainee-id="2" checked="">
                                  <label for="selected_trainee_11">2</label>
                                </div>
                              </td>
                              <td><a href="trainee-profile.html" target="_blank">Yamamoto Takahiro</a></td>
                              <td>女</td>
                              <td>縫製</td>
                              <td class="num">24</td>
                              <td>

                              </td>
                            </tr>

                          </tbody>
                        </table>
                        <ul class="pagination pull-right hide-if-no-paging"></ul>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
              <div class="center-block text-left" style="margin-bottom: 15px">
                <a href="interview-order-detail.html" class="btn btn-default">
                  <i class="fa fa-long-arrow-left fa-lg"></i>
                  前のページに戻る
                </a>
              </div>
            </div>
          </div>

          <footer id="footer-bar" class="row">
            <p id="footer-copyright" class="col-xs-12">
              Powered by Mangetsu Ltd.
            </p>
          </footer>
        </div>
      </div>
    </div>
  </div>

  <!-- global scripts -->

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/jquery.nanoscroller.min.js"></script>

  <!-- this page specific scripts -->
  <script src="js/footable.js"></script>
  <script src="js/footable.sort.js"></script>
  <script src="js/footable.paginate.js"></script>
  <script src="js/jquery.ex-table-filter.js"></script>
  <script src="js/select2.min.js"></script>
  <script src="js/sweetalert.min.js"></script>

  <!-- theme scripts -->
  <script src="js/scripts.js"></script>
  <script src="js/pace.min.js"></script>

  <!-- this page specific inline scripts -->
  <script type="text/javascript">

  $('table.data').exTableFilter({
    filters : {
      0:'input.filter_control_no',
      1:'input.filter_name',
      2:'input.filter_sex',
      3:'input.filter_job',
      4:'input.filter_sex'
    }
  });

  $('table.data').footable();

  $('#select_trainee_table').on('click', '.chk_selected_trainee', function(){
    var trainee_id = $(this).data('trainee-id');
    var $trainee_tr = $('#select_trainee_table_'+trainee_id);
    var trainee_control_no = $(this).data('trainee-control-no');

    swal({
        title: trainee_control_no+"を面接候補者に登録しますか？",
        text: "",
        type: "info",
        showCancelButton: true,
        cancelButtonText: "キャンセル",
        confirmButtonColor: "#03a9f4",
        confirmButtonText: "はい、登録します",
        closeOnConfirm: false
      }, function(isConfirm){
        if(isConfirm){
          $trainee_tr.attr('id', 'selected_trainee_'+trainee_id);
          $('#selected_trainee_table').prepend($trainee_tr.fadeIn());
         // $trainee_tr.fadeOut(800);

          swal("登録しました！", "", "success");
        } else {
          $('.'+trainee_control_no).prop('checked', false)
          return ;
        }
      });//swal

  });
  $('#selected_trainee_table').on('click', '.chk_selected_trainee', function(){
    var trainee_id = $(this).data('trainee-id');
    var $trainee_tr = $('#selected_trainee_'+trainee_id);
    var trainee_control_no = $(this).data('trainee-control-no');

    swal({
            title: trainee_control_no+"を面接候補者から削除しますか？",
            text: "",
            type: "info",
            showCancelButton: true,
            cancelButtonText: "キャンセル",
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "はい、削除します",
            closeOnConfirm: false
          }, function(isConfirm){
            if(isConfirm){
              $trainee_tr.attr('id', 'select_trainee_table_'+trainee_id);
              $('#select_trainee_table').prepend($trainee_tr.fadeIn());
             // $trainee_tr.fadeOut(800);

              swal("削除しました", "", "success");
            } else {
              $('.'+trainee_control_no).prop('checked', true)
              return ;
            }
          });//swal


  });

  </script>
  <script type="text/javascript">



  $(document).ready(function(){

    $('button.btn_addCandidate').click(function(){



      $('div.sa-confirm-button-container>button.confirm').click(function(){

        alert("ここでリストに"+trainee_id+" と "+interview_id+" をAjaxで保存");

        // $.ajax({
        //  url: formAction,
        //  type: 'POST',
        //  dataType: 'json',
        //  data: {
        //    trainee_id: trainee_id,
        //    interview_id: interview_id
        //  },
        //  success: function(rs){
        //    swal("登録しました。", "", "success");
        //  }
        // });
      });//div.sa-confi
            //location.reload();

    });//button.btn

  });//document
  </script>



</body>
</html>