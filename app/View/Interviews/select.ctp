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
					<h1><?= __('Select Candidate') ?></h1>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<div class="center-block text-left" style="margin-bottom: 15px">
						<?php echo $this->Html->link(
							'<i class="fa fa-long-arrow-left fa-lg"></i> '. __('Back to Previous Page'),
							array('action' => 'profile', $prof['Interview']['id']),
							array('escape' => false, 'class' => 'btn btn-default')
						) ?>
						</div>
				</div>
					<div class="col-lg-12 maxW700">
						<div class="main-box clearfix">
							<header class="main-box-header clearfix">
								<h2 class="pull-left"><?= __('Interview Requests') ?></h2>
							</header>
							<div class="main-box-body clearfix">
								<div class="table-responsive">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th><span><?= __('Company') ?></span></th>
												<th><span><?= __('Job') ?></span></th>
												<th><span><?= __('Adoption Number') ?></span></th>
												<th><span><?= __('Sex') ?></span></th>
												<th><span><?= __('Age') ?></span></th>
												<th><span><?= __('Requests') ?></span></th>
												<th><span><?= __('Interview Date') ?></span></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="td_first_block">
													<?php echo $this->Btn->switchLang($lang, $prof['Com']['company_jp'], $prof['Com']['company_en']) ?>
												</td>
												<td>
													<?php echo $this->Btn->switchLang($lang, $prof['Job']['job_jp'], $prof['Job']['job_en']) ?>
												</td>
												<td>
													<?php echo $prof['Interview']['adoption_num']; ?>
												</td>
												<td>
													<?= $prof['Interview']['sex'] ?>
												</td>
												<td>
													<?= $prof['Interview']['age'] ?>
												</td>
												<td>
													<?= $prof['Interview']['request'] ?>
												</td>
												<td>
													<?= $prof['Interview']['interview_date'] ?>
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
							<h2 class="pull-left"><?= __('Search Trainees') ?></h2>
						</header>

						<div class="main-box-body clearfix">
							<div class="row mB10">
								<div class="col-lg-3 col-md-3 col-sm-3">
									<label class="control-label"><?= __('Trainee ID') ?></label>
									<input type="text" class="filter_control_no form-control" value="">
								</div>
								<div class="col-lg-3 col-md-3 col-sm-3">
									<label class="control-label"><?= __('Name') ?></label>
									<input type="text" class="filter_name form-control" value="">
								</div>
								<div class="col-lg-3 col-md-3 col-sm-3">
									<label class="control-label"><?= __('Sex') ?></label>
									<div class="">
										<div class="checkbox-nice pull-left mR5">
											<input type="checkbox" class="filter_sex" id="filter_sex1" value="<?= __('male'); ?>"/>
											<label for="filter_sex1"><?= __('Male') ?></label>
										</div>
										<div class="checkbox-nice pull-left mL5">
											<input type="checkbox" class="filter_sex" id="filter_sex2" value="<?= __('female'); ?>"/>
											<label for="filter_sex2"><?= __('Female') ?></label>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-3">
									<label class="control-label"><?= __('Age') ?></label>
									<input type="text" class="filter_age_min form-control" name="filter_age_min" value="20">
								</div>
							</div>
							<div class="row">
								<div class="col-lg-3 col-md-3 col-sm-3">
									<label class="control-label"><?= __('Language') ?></label>
									<input type="text" class="filter_language form-control" value="">
								</div>
								<div class="col-lg-3 col-md-3 col-sm-3">
									<label class="control-label"><?= __('Skill') ?></label>
									<input type="text" class="filter_skill form-control" value="">
								</div>
								<div class="col-lg-3 col-md-3 col-sm-3">
									<label class="control-label"><?= __('Hand') ?></label>
									<input type="text" class="filter_hand form-control" value="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="main-box clearfix">
						<header class="main-box-header clearfix">
							<h2 class="pull-left"><?= __('Trainees List') ?></h2>
						</header>
						<div class="main-box-body clearfix">
							<div class="table-responsive">

								<table id="select_trainee_table" class="table data select_trainee table-hover" data-page-size="10">
									<thead>
										<tr>
											<th class="control_no"><?= __('Trainee ID') ?></th>
											<th class="name"><?= __('Name') ?></th>
											<th class="sex"><?= __('Sex') ?></th>
											<th class="age"><?= __('Age') ?></th>
											<th class="image"></th>
											<th class="age"><?= __('language') ?></th>
											<th class="age"><?= __('skills') ?></th>
											<th class="age"><?= __('Hand') ?></th>
										</tr>
									</thead>
									<tbody class="select_trainee_table_tbody">
										<?php foreach ($trainees as $trainee) : ?>
											<?php if($trainee['Candidate']['interview_id'] == $this->request->data['Interview']['id'] || $trainee['Candidate']['interview_result_id'] == 2){
												} else { ;?>
												<?php echo '<tr class="select_trainee_table_'.$trainee['Trainee']['id'].'">';?>
												<td>
													<div class="checkbox-nice">
														<input type="checkbox" id="trainee_<?php echo $trainee['Trainee']['id'];?>" class="chk_select_trainee <?php echo $trainee['Trainee']['control_no']?>" name="trainee_id" value="" data-trainee-id="<?php echo $trainee['Trainee']['id']?>" data-trainee-control-no="<?php echo $trainee['Trainee']['control_no']?>" data-interview-candidate-id="">
														<label for="trainee_<?php echo $trainee['Trainee']['id']?>">
															<?php echo $trainee['Trainee']['control_no']?>
														</label>
													</div>
												</td>
												<td>
													<?php echo $this->Html->link(
														$trainee['Trainee']['given_name_en']." " .$trainee['Trainee']['family_name_en'],
														array('controller' => 'trainees', 'action' => 'profile', $trainee['Trainee']['id']),
														array('escape' => false, 'target' => '_blank')
													);?>
												</td>
												<td><?php echo $trainee['Trainee']['sex']?></td>
												<td class="num">
													<?php echo $this->Btn->calcAge($trainee['Trainee']['birthday'])?>
												</td>
												<td>
													<?php //if($trainee['TraineeProfileImage']['trainee_id']){
														//echo $this->Html->image('trainee_profile_images/thumb/'.$trainee['//TraineeProfileImage']['img_file_name'], array('width' => '60px', '//height' => '60px'));
														//} else {
														//	echo $this->Html->image('trainee_profile_images/thumb/default.png', //array('width' => '60px', 'height' => '60px'));
														//};?>
												</td>
												<td>
													<?php if($trainee['Trainee']['english'] == 1){
														echo __('English') . "<br>";
													} ?>
													<?php if($trainee['Trainee']['lang_others_en']){
														echo $trainee['Trainee']['lang_others_en'];
													} ?>
												</td>
												<td><?php echo $this->Foreach->trainees_job(array($trainee['Trainee']['job1_id'],$trainee['Trainee']['job2_id']),$lang) ;?></td>
												<td><?php echo $trainee['Trainee']['handed'];?></td>
											</tr>



											<?php	} ;?>

										<?php endforeach; ?>
									</tbody>
								</table>
								<ul class="pagination pull-right hide-if-no-paging"></ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="main-box clearfix">
						<header class="main-box-header clearfix">
							<h2 class="pull-left"><?= __('Candidates List') ?></h2>
						</header>
						<div class="main-box-body clearfix">
							<div class="table-responsive">
								<table id="selected_trainee_table" class="table table-hover">
									<thead>
										<tr>
											<th class=""><?= __('Trainee ID') ?></th>
											<th class=""><?= __('Name') ?></th>
											<th class=""><?= __('Sex') ?></th>
											<th class=""><?= __('Age') ?></th>
											<th class=""></th>
										</tr>
									</thead>
									<tbody class="selected_trainee_table_tbody">
										<?php foreach ($candidates as $can) : ?>
											<tr class="selected_trainee_table_<?php echo $can['CandidateTrainee']['id'];?>">
												<td>
													<div class="checkbox-nice">
														<input type="checkbox" id="selected_trainee_<?php echo $can['CandidateTrainee']['id'];?>" class="chk_selected_trainee <?php echo $can['CandidateTrainee']['control_no'];?>" value="<?php echo $can['CandidateTrainee']['id'];?>" data-trainee-id="<?php echo $can['CandidateTrainee']['id'];?>" data-trainee-control-no="<?php echo $can['CandidateTrainee']['control_no'];?>" checked="" data-interview-candidate-id="<?php echo $can['InterviewCandidate']['id'];?>">
														<label for="selected_trainee_<?php echo $can['CandidateTrainee']['id'];?>">
															<?php echo $can['CandidateTrainee']['control_no'];?>
														</label>
													</div>
												</td>
												<td>
													<?php echo $this->Html->link($can['CandidateTrainee']['given_name_en']." " .$can['CandidateTrainee']['family_name_en'],
														array('controller' => 'trainees', 'action' => 'profile', $can['CandidateTrainee']['id']),
														array('escape' => false, 'target' => '_blank'));?>
												</td>
												<td><?php echo $can['CandidateTrainee']['sex'];?></td>
												<td class="num"><?php echo $this->Btn->calcAge($can['CandidateTrainee']['birthday']);?></td>
												<td>
													<?php //if($can['ProfImg']['trainee_id']){
													//	echo $this->Html->image('trainee_profile_images/thumb/'.$can['ProfImg'][//'img_file_name'], array('width' => '60px', 'height' => '60px'));
													//	} else {
													//		echo $this->Html->image('trainee_profile_images/thumb/default.png', //array('width' => '60px', 'height' => '60px'));
													//};?>
												</td>
											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
								<ul class="pagination pull-right hide-if-no-paging"></ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="center-block text-left" style="margin-bottom: 15px">
				<?php echo $this->Html->link(
					'<i class="fa fa-long-arrow-left fa-lg"></i> '. __('Back to Previous Page'),
					array('action' => 'profile', $prof['Interview']['id']),
					array('escape' => false, 'class' => 'btn btn-default')
				) ?>
				<?php echo $this->Form->create('InterviewCandidate', array(
					'action' => 'addAjax',
					'class' => 'hide select_candidate_form')); ?>
				<?php echo $this->Form->end(); ?>
				<?php echo $this->Form->create('InterviewCandidate', array(
					'action' => 'deleteAjax',
					'class' => 'hide delete_candidate_form')); ?>
				<?php echo $this->Form->end(); ?>



	<?php
		echo $this->Html->script('footable', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('footable.sort.js', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('footable.paginate', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('jquery.ex-table-filter', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('select2.min', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('sweetalert.min', array('inline' => false, 'block' => 'page-js'));
	 ?>

	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>
		<!-- this page specific scripts -->
		$(function(){
			$('.md-modal').each(function(){
				$(this).remove();
			});

		});

		//学生検索
		$(function(){
			$('table.data').exTableFilter({
				filters : {
					0:'input.filter_control_no',
					1:'input.filter_name',
					2:'input.filter_sex',
					3: {
						element : 'input.filter_age_min',
						onFiltering : function(api){
							return api.getCurrentCellNum() >= api.getCurrentFilterNum();
						}
					},
					4:'input.filter_image',
					5:'input.filter_language',
					6:'input.filter_skill',
					7:'input.filter_hand',
				}
			});
			$('table.data').footable();
			$('.footable').footable();
		});

		$(document).ready(function($) {
			//もしTrainee Listのchk_select_traineeがクリックされたら、
			$('#select_trainee_table').on('click', '.chk_select_trainee', function(){
				var this_obj = $(this);
				console.log(this_obj);
				//Swalを表示して、YesかCancelを選択。
				swal({
					title: "<?= __('Do you register this trainee as Candidate?') ?>",
					text: "",
					type: "info",
					showCancelButton: true,
					cancelButtonText: "<?= __('Cancel') ?>",
					confirmButtonColor: "#03a9f4",
					confirmButtonText: "<?= __('Yes') ?>",
					closeOnConfirm: false
					},
				function(isConfirm){
				//もしYesだったら、
						if(isConfirm){
							var id;
							var interview_id = <?php echo $this->request->data['Interview']['id'];?>;
							var trainee_id = this_obj.attr('data-trainee-id');
							var $this_tr = $('.select_trainee_table_'+trainee_id);
							var interview_result_id = 0;
							var note = "";
							var url = $('.select_candidate_form').attr('action');
							//Ajaxで、InterviewCandidateに、
							//interview_id, trainee_id, interview_result_id=0, note=""を投げる。
							$.ajax({
								url: url,
								type: 'POST',
								dataType: 'json',
								data: {
									id:id,
									interview_id: interview_id,
									trainee_id: trainee_id,
									interview_result_id: interview_result_id,
									note: note
								},
								//Ajax処理が通ったら、
								success: function(rs){

								//TrのコピーをCandidates ListにPrependTo()
								$this_tr.clone().prependTo('tbody.selected_trainee_table_tbody')
									.removeClass('select_trainee_table_'+trainee_id)
									.addClass('selected_trainee_table_'+trainee_id)
									.find('.chk_select_trainee')
									.removeClass('chk_select_trainee')
									.addClass('chk_selected_trainee')
									.attr('data-interview-candidate-id', rs);
								$this_tr.hide();
								swal("<?= __('OK') ?>", "", "success");

								this_obj.remove(); //※ここでクリック時のthisを破棄。
								},
								error: function(exception){
									alert('Exception:'+exception);
									swal({
										title: "Oops...",
										text: "Please try it again.",
										type:"error",
										confirmButtonText:"OK"
									});
								}
							});
						}

				//もしCancelだったら
				else {
				//チェックボックスをオフにして終了
							this_obj.prop('checked', false);
						}
					}
				);//swal
			});
		});

		$(document).ready(function($) {
			//もしCandidates Listのチェックボックスがクリックされたら
			$('.selected_trainee_table_tbody').on('click', '.chk_selected_trainee', function(){
				var selected_trainee_obj = $(this);
				console.log(selected_trainee_obj);
				//Swalを表示して、
				swal({
								title: "<?= __('Do you remove this trainee from Candidate List?') ?>",
								text: "",
								type: "info",
								showCancelButton: true,
								cancelButtonText: "<?= __('Cancel') ?>",
								confirmButtonColor: "#DD6B55",
								confirmButtonText: "<?= __('Yes') ?>",
								closeOnConfirm: false
							},
					function(isConfirm){

				//Yesがクリックされたら
						if(isConfirm){
							//checkbox内のinterview_candidatesのidを取得
							var id;
              var interview_id          = <?php echo $this->request->data['Interview']['id'];?>;
              var trainee_id            = selected_trainee_obj.attr('data-trainee-id');
              var interview_candidate_id= selected_trainee_obj.attr('data-interview-candidate-id');
              var $this_tr              = $('.selected_trainee_table_'+trainee_id);
              var selected_url_delete = $('.delete_candidate_form').attr('action');

							//Ajaxで削除処理
							$.ajax({
								url: selected_url_delete,
								type: 'POST',
								dataType: 'json',
								data: {
									id : interview_candidate_id
								},
							//削除処理が上手くいったら
							success:function(){
								//TrのコピーをTrainees ListにPrependTo()
								$this_tr.clone().prependTo('tbody.select_trainee_table_tbody')
									.removeClass('selected_trainee_table_'+trainee_id)
									.addClass('select_trainee_table_'+trainee_id)
									.find('.chk_selected_trainee')
									.removeClass('chk_selected_trainee')
									.addClass('chk_select_trainee')
									.attr('data-interview-candidate-id', "");
								$this_tr.hide();
								swal("<?= __('Removed') ?>", "", "success");

								},
						//エラーが発生した場合
							error: function(exception){
								}
							});
						}　
					//Cancelがクリックされたら
						else {
							selected_trainee_obj.prop('checked', true);
						}
					});
				});//swal
		});


// $(function(){
		// 	$('#select_trainee_table').on('click', '.chk_select_trainee', function(){
		//       var trainee_id              = $(this).data('trainee-id');
  	//       var $trainee_tr             = $('#select_trainee_table_'+trainee_id);
  	//       var trainee_control_no      = $(this).data('trainee-control-no');
  	//       var interview_candidate_id  = $(this).data('interview-candidate-id');
  	//       var interview_id            = <?php //echo $this->request->data['Interview']['id'] ?>;
		// 		var url= $('.select_candidate_form').attr('action');
		// 		var id;

		// 		swal({
		// 			title: "<?= __('Do you register this trainee as Candidate?') ?>",
		// 			text: "",
		// 			type: "info",
		// 			showCancelButton: true,
		// 			cancelButtonText: "<?= __('Cancel') ?>",
		// 			confirmButtonColor: "#03a9f4",
		// 			confirmButtonText: "<?= __('Yes') ?>",
		// 			closeOnConfirm: false
		// 			},
		// 			function(isConfirm){
		// 				if(isConfirm){
		// 					$.ajax({
		// 						url: url,
		// 						type: 'POST',
		// 						dataType: 'json',
		// 						data: {
		// 							id:id,
		// 							interview_id: interview_id,
		// 							trainee_id: trainee_id,
		// 							interview_result_id: 0,
		// 							note: ""
		// 						},
		// 						success: function(rs){
		// 							$trainee_tr.attr('id', 'selected_trainee_table_'+trainee_id);
		// 							$trainee_tr.find('.chk_selected_trainee').attr('data-interview-candidate-id', rs);
		// 							$trainee_tr.find('.chk_selected_trainee').attr('id', "selected_trainee_" + trainee_id);
		// 							$trainee_tr.find('.chk_selected_trainee').attr('value', trainee_id);
		// 							$trainee_tr.find('.chk_selected_trainee').attr('checked', "");
		// 							$('#selected_trainee_table').prepend($trainee_tr.fadeIn());
		// 							swal("<?= __('OK') ?>", "", "success");

		// 							trainee_id = "";
		// 							$trainee_tr = "";
		// 							trainee_control_no = "";
		// 							interview_candidate_id = "";
		// 							interview_id = "";
		// 							url = "";
		// 							url_delete = "";
		// 							id = "";

		// 						},
		// 						error: function(exception){
		// 							alert('Exception:'+exception);
		// 							swal({
		// 								title: "Oops...",
		// 								text: "Please try it again.",
		// 								type:"error",
		// 								confirmButtonText:"OK"
		// 							});

		// 							trainee_id = "";
		// 							$trainee_tr = "";
		// 							trainee_control_no = "";
		// 							interview_candidate_id = "";
		// 							interview_id = "";
		// 							url = "";
		// 							url_delete = "";
		// 							id = "";
		// 						}
		// 					});
		// 				} else {
		// 					$('.'+trainee_control_no).prop('checked', false);
		// 						trainee_id = "";
		// 						$trainee_tr = "";
		// 						trainee_control_no = "";
		// 						interview_candidate_id = "";
		// 						interview_id = "";
		// 						url = "";
		// 						url_delete = "";
		// 						id = "";
		// 				}
		// 			}
		// 		);//swal
		// 	});
// });

// $(function(){
		// 	$('#selected_trainee_table').on('click', '.chk_selected_trainee', function(){
	 //      var selected_trainee_id              = $(this).data('trainee-id');
	 //      var $selected_trainee_tr             = $('#selected_trainee_table_'+selected_trainee_id);
	 //      var selected_trainee_control_no      = $(this).data('trainee-control-no');
	 //      var selected_interview_candidate_id  = $(this).data('interview-candidate-id');
	 //      var selected_interview_id            = <?php //echo $this->request->data['Interview']['id'] ?>;
	 //      var selected_url_delete              = $('.delete_candidate_form').attr('action');

		// 		var what_is_this						= $(this);


		// 			console.log(what_is_this);
		// 			console.log("selected_trainee_id: "+selected_trainee_id);
		// 			console.log( $selected_trainee_tr);
		// 			console.log("selected_trainee_control_no: " + selected_trainee_control_no);
		// 			console.log("selected_interview_candidate_id: " + selected_interview_candidate_id);
		// 			console.log("selected_interview_id: " + selected_interview_id);
		// 			console.log("selected_url_delete: " + selected_url_delete);

		// 		swal({
		// 						title: "<?= __('Do you remove this trainee from Candidate List?') ?>",
		// 						text: "",
		// 						type: "info",
		// 						showCancelButton: true,
		// 						cancelButtonText: "<?= __('Cancel') ?>",
		// 						confirmButtonColor: "#DD6B55",
		// 						confirmButtonText: "<?= __('Yes') ?>",
		// 						closeOnConfirm: false
		// 					},
		// 					function(isConfirm){
		// 						if(isConfirm){
		// 							$.ajax({
		// 								url: selected_url_delete,
		// 								type: 'POST',
		// 								dataType: 'json',
		// 								data: {
		// 									selected_interview_candidate_id : selected_interview_candidate_id
		// 								},

		// 								success:function(){
		// 									$selected_trainee_tr.attr('id', 'select_trainee_table_'+selected_trainee_id);
		// 									$selected_trainee_tr.find('.chk_selected_trainee').attr('data-interview-candidate-id', "");
		// 									$('#select_trainee_table.select_trainee').prepend($selected_trainee_tr.fadeIn());

		// 								swal("<?= __('Removed') ?>", "", "success");

		// 								selected_trainee_id = "";
		// 								$selected_trainee_tr = "";
		// 								selected_trainee_control_no = "";
		// 								selected_interview_candidate_id = "";
		// 								selected_interview_id = "";
		// 								selected_url_delete = "";
		// 								what_is_this = ""

		// 								}, error: function(exception){
		// 									selected_trainee_id = "";
		// 									$selected_trainee_tr = "";
		// 									selected_trainee_control_no = "";
		// 									selected_interview_candidate_id = "";
		// 									selected_interview_id = "";
		// 									selected_url_delete = "";
		// 									what_is_this = ""
		// 								}
		// 							});


		// 						} else {
		// 							$selected_trainee_tr.find('.chk_selected_trainee').prop('checked', true);
		// 							selected_trainee_id = "";
		// 									$selected_trainee_tr = "";
		// 									selected_trainee_control_no = "";
		// 									selected_interview_candidate_id = "";
		// 									selected_interview_id = "";
		// 									selected_url_delete = "";
		// 									what_is_this = ""
		// 						}
		// 					});
		// 		});//swal
// });


	<?php $this->Html->scriptEnd(); ?>