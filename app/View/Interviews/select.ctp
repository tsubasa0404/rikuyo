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
												<?= __($prof['Interview']['sex']) ?>
											</td>
											<td>
												<?= __($prof['Interview']['age']) ?>
											</td>
											<td>
												<?= __($prof['Interview']['request']) ?>
											</td>
											<td>
												<?= __($prof['Interview']['interview_date']) ?>
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
				<div class="col-lg-12 maxW700">
					<div class="main-box clearfix">
						<header class="main-box-header clearfix">
							<h2 class="pull-left"><?= __('Search Trainees') ?></h2>
						</header>

						<div class="main-box-body clearfix">
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
										<input type="checkbox" class="filter_sex" id="filter_sex1" value="<?= __('male'); ?>"/><label for="filter_sex1"><?= __('Male') ?></label>
									</div>
									<div class="checkbox-nice pull-left mL5">
										<input type="checkbox" class="filter_sex" id="filter_sex2" value="<?= __('female'); ?>"/><label for="filter_sex2"><?= __('Female') ?></label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 maxW500">
					<div class="main-box clearfix">
						<header class="main-box-header clearfix">
							<h2 class="pull-left"><?= __('Trainees List') ?></h2>
						</header>
						<div class="main-box-body clearfix">
							<div class="table-responsive">
								<div class="hide">
									<?php echo $this->Form->create('InterviewCandidate', array(
										'action' => 'addAjax',
										'class' => 'hide select_candidate_form')); ?>
									<?php echo $this->Form->hidden('interview_id', array('value' => $this->request->data['Interview']['id'])) ?>
									<?php echo $this->Form->hidden('trainee_id') ?>
									<?php echo $this->Form->end(); ?>
								</div>
								<table id="select_trainee_table" class="table data select_trainee table-hover" data-page-size="30">
									<thead>
										<tr>
											<th class="control_no"><?= __('Trainee ID') ?></th>
											<th class="name"><?= __('Name') ?></th>
											<th class="sex"><?= __('Sex') ?></th>
											<th class="age"><?= __('Age') ?></th>
											<th class="image"></th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($trainees as $trainee) : ?>
											<?php
												echo '<tr id="select_trainee_table_'.$trainee['Trainee']['id'].'">';
												echo '<td><div class="checkbox-nice">';
												echo '<input type="checkbox" id="trainee_'.$trainee['Trainee']['id'].'" class="chk_selected_trainee '.$trainee['Trainee']['control_no'].'" name="trainee_id" value="" data-trainee-id="'.$trainee['Trainee']['id'].'" data-trainee-control-no="'.$trainee['Trainee']['control_no'].'" data-interview-candidate-id="">';
												echo '<label for="trainee_'.$trainee['Trainee']['id'].'">'.$trainee['Trainee']['control_no'].'</label>';
												echo '<input type="hidden" name="" value="1">';
												echo '</div></td>';
												echo '<td>';
												echo $this->Html->link(
													$trainee['Trainee']['given_name_en']." " .$trainee['Trainee']['family_name_en'],
													array('controller' => 'trainees', 'action' => 'profile', $trainee['Trainee']['id']),
													array('escape' => false, 'target' => '_blank')
												);
												echo '</td>';
												echo '<td>'.__($trainee['Trainee']['sex']).'</td>';
												echo '<td class="num">'.$this->Btn->calcAge($trainee['Trainee']['birthday']).'</td>';
												echo '<td>';
												if($trainee['TraineeProfileImage']['trainee_id']){
													echo $this->Html->image('trainee_profile_images/thumb/'.$trainee['TraineeProfileImage']['img_file_name'], array('width' => '60px', 'height' => '60px'));
												} else {
													echo $this->Html->image('trainee_profile_images/thumb/default.png', array('width' => '60px', 'height' => '60px'));
												}
												echo '</td></tr>';
											?>
										<?php endforeach; ?>
									</tbody>
								</table>
								<ul class="pagination pull-right hide-if-no-paging"></ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 maxW500">
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
									<tbody>
										<?php foreach ($candidates as $can) : ?>
											<?php
												echo '<tr id="selected_trainee_table_'.$can['CandidateTrainee']['id'].'">';
												echo '<td><div class="checkbox-nice">';
												echo '<input type="checkbox" id="selected_trainee_'.$can['CandidateTrainee']['id'].'" class="chk_selected_trainee '.$can['CandidateTrainee']['control_no'].'" value="'.$can['CandidateTrainee']['id'].'" data-trainee-id="'.$can['CandidateTrainee']['id'].'" data-trainee-control-no="'.$can['CandidateTrainee']['control_no'].'" checked="" data-interview-candidate-id="'.$can['InterviewCandidate']['id'].'">';
												echo '<label for="selected_trainee_'.$can['CandidateTrainee']['id'].'">'.$can['CandidateTrainee']['control_no'].'</label>';
												echo '</div></td>';
												echo '<td>'.$this->Html->link($can['CandidateTrainee']['given_name_en']." " .$can['CandidateTrainee']['family_name_en'],
													array('controller' => 'trainees', 'action' => 'profile', $can['CandidateTrainee']['id']),
													array('escape' => false, 'target' => '_blank'));
												echo '</td>';
												echo '<td>'.__($can['CandidateTrainee']['sex']).'</td>';
												echo '<td class="num">'.$this->Btn->calcAge($can['CandidateTrainee']['birthday']).'</td>';
												echo '<td>';
												if($can['ProfImg']['trainee_id']){
													echo $this->Html->image('trainee_profile_images/thumb/'.$can['ProfImg']['img_file_name'], array('width' => '60px', 'height' => '60px'));
												} else {
													echo $this->Html->image('trainee_profile_images/thumb/default.png', array('width' => '60px', 'height' => '60px'));
												}
												echo '</td></tr>';
											?>
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
					'<i class="fa fa-long-arrow-left fa-lg"></i> 前のページに戻る',
					array('action' => 'profile', $prof['Interview']['id']),
					array('escape' => false, 'class' => 'btn btn-default')
				) ?>


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
		$('table.data').exTableFilter({
			filters : {
				0:'input.filter_control_no',
				1:'input.filter_name',
				2:'input.filter_sex',
			}
		});

		$('table.data').footable();
		$('.footable').footable();
	});

	$(function(){
		$('#select_trainee_table').on('click', '.chk_selected_trainee', function(){
			var trainee_id = $(this).data('trainee-id');
			var $trainee_tr = $('#select_trainee_table_'+trainee_id);
			var trainee_control_no = $(this).data('trainee-control-no');
			var interview_candidate_id = $(this).data('interview-candidate-id');
			var interview_id = <?php echo $this->request->data['Interview']['id'] ?>;
			var url = $('.select_candidate_form').attr('action');
			console.log(trainee_id);
			console.log($trainee_tr);
			console.log(trainee_control_no);
			console.log(interview_candidate_id);
			console.log(interview_id);
			console.log(url);
			swal({
				title: trainee_control_no+"を面接候補者に登録しますか？",
				text: "",
				type: "info",
				showCancelButton: true,
				cancelButtonText: "キャンセル",
				confirmButtonColor: "#03a9f4",
				confirmButtonText: "はい、登録します",
				closeOnConfirm: false
				},
				function(isConfirm){
					if(isConfirm){
						$.ajax({
							url: url,
							type: 'POST',
							dataType: 'json',
							data: {
							'id': interview_candidate_id,
							'interview_id': interview_id,
							'trainee_id': trainee_id,
						},
							success: function(rs){
							$trainee_tr.attr('id', 'selected_trainee_table_'+trainee_id);
							$trainee_tr.find('.chk_selected_trainee').attr('data-interview-candidate-id', rs);
							$('#selected_trainee_table').prepend($trainee_tr.fadeIn());
							// $trainee_tr.fadeOut(800);
							swal("登録しました！", "", "success");
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
				} else {
					$('.'+trainee_control_no).prop('checked', false)
					return ;
					}
				}
			);//swal
		});
	});

	$('#selected_trainee_table').on('click', '.chk_selected_trainee', function(){
		var trainee_id = $(this).data('trainee-id');
		var $trainee_tr = $('#selected_trainee_table_'+trainee_id);
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
	<?php $this->Html->scriptEnd(); ?>