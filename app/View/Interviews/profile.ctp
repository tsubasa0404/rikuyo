<?php $this->set('title_for_layout', 'Trainee Profile'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/ns-default', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/ns-style-growl', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/ns-style-bar', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/ns-style-attached', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/ns-style-other', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/ns-style-theme', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Interview List'), '/interviews'); ?>
<?php $this->Html->addCrumb(__('Interview Profile'), ''); ?>
					<h1><?= __('Interview Profile') ?></h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 maxW400">
					<div class="main-box clearfix">
						<header class="main-box-header clearfix">
							<h2><?= __('Schedule') ?></h2>
						</header>
						<div class="main-box-body clearfix">
							<div class="table-responsive" id="">
								<?php echo $this->Form->create('Interview',
									array('action' => 'update'))
								?>
								<?php echo $this->Form->hidden('id', array('value' => $this->request->data['Interview']['id'])) ?>
									<table class="table table-bordered">
										<tbody>
											<tr class="warning">
												<th colspan="2" ><span><?= __('Association') ?></span></th>
											</tr>
											<tr>
												<td>
													<?= __('Association') ?>
												</td>
												<td>
													<?php echo $this->Html->link(
														$prof['Asso']['association_jp'],array(
															'controller' => 'associations', 'action' => 'profile', $prof['Asso']['id']),
														array('target' => '_blank')
													) ?><br>
													(<?php echo $prof['Asso']['association_en']; ?>)
												</td>
											</tr>
											<tr>
												<td>
													<?= __('Company') ?>
												</td>
												<td>
													<?php echo $this->Form->input('company_id', array(
														'label' => false,
														'type' => 'select',
														'div' => false,
														'class' => 'form-control sel_company',
														'value' => $prof['Com']['id'],
														'options' => $option_companies,
														'style' => 'max-width:300px;display:inline',
													)) ?>
												</td>
											</tr>
											<tr class="warning">
												<th colspan="2"><?= __('Schedules') ?></th>
											</tr>
											<tr>
												<td><?= __('Immigration Time') ?></td>
												<td>
													<?php echo $this->Form->input('immigration_time',array(
														'label' => false,
														'class' => "form-control",
													)); ?>
												</td>
											</tr>
											<tr>
												<td><?= __('Commencement Time') ?></td>
												<td>
													<?php echo $this->Form->input('start_time',array(
														'label' => false,
														'class' => "form-control",
													)); ?>
												</td>
											</tr>
											<tr>
												<td><?= __('Interview Date') ?></td>
												<td>
													<?php echo $this->Form->date('interview_date',array(
														'label' => false,
														'class' => "form-control maxW200",

													)); ?>
												</td>
											</tr>
											<tr>
												<td><?= __('Interview Time (Cambodia Time)') ?></td>
												<td>
													<div class="input-group input-append bootstrap-timepicker">
														<span class="add-on input-group-addon"><i class="fa fa-clock-o"></i></span>
															<input type="time" class="form-control maxW160" id="interviewTime" name="data[Interview][interview_time]" value="<?php echo $prof['Interview']['interview_time'] ?>">
														</div>
											</tr>
											<tr>
												<td><?= __('Interview Place') ?></td>
												<td>
													<?php echo $this->Form->input('interview_place',array(
														'label' => false,
														'class' => "form-control",
													)); ?>
												</td>
											</tr>
											<tr>
												<td><?= __('Interview Details') ?></td>
												<td>
													<?php echo $this->Form->input('interview_detail',array(
														'label' => false,
														'class' => "form-control",
													)); ?>
												</td>
											</tr>
											<tr>
												<td><?= __('Interview Commander of Rikuyo') ?></td>
												<td>
													<?php echo $this->Form->input('interview_staff',array(
														'label' => false,
														'class' => "form-control",
													)); ?>
												</td>
											</tr>
										</tbody>
									</table>

							<div class="profile-message-btn center-block text-right">
								<button type="submit" class="btn btn-default">
									<i class="fa fa-pencil"></i>
									<?= __('Save') ?>
								</button>
							</div>
							<?php echo $this->Form->end(); ?>
							</div>
						</div>
					</div> <!-- /Schedule-->

					<div class="main-box clearfix">
						<header class="main-box-header clearfix">
							<h2><?= __('Select Jobs') ?></h2>
						</header>
						<div class="main-box-body clearfix">
							<div class="table-responsive" id="">
								<?php echo $this->Form->create('Interview',
									array('action' => 'jobAdd' ))
								?>
								<?php echo $this->Form->hidden('id', array('value' => $this->request->data['Interview']['id'])) ?>
									<table class="table table-bordered">
										<tbody>
											<tr>
												<td>
													<?= __('Job') ?>
												</td>
												<td>
													<?php echo $this->Form->input('job',array(
														'label' => false,
														'options' => $option_jobs,
														'selected' => explode(",", $this->request->data['Interview']['job']), //複数選択は値を配列で渡すだけ
														'multiple' => true,
														'class' => "form-control sel_job",
														'style' => array("width:200px"),
														'div' => false,

													)); ?>
												</td>
											</tr>
										</tbody>
									</table>
									<div class="profile-message-btn center-block text-right">
										<button type="submit" class="btn btn-default">
											<i class="fa fa-pencil"></i>
											<?= __('Save') ?>
										</button>
									</div>
								<?php echo $this->Form->end(); ?>
							</div>
						</div>
					</div> <!-- /Select jobs-->

					<div class="main-box clearfix">
						<header class="main-box-header clearfix">
							<h2><?= __('Requests') ?></h2>
						</header>
						<div class="main-box-body clearfix">
							<div class="table-responsive" id="">
								<?php echo $this->Form->create('Interview',
									array('action' => 'update'))
								?>
								<?php echo $this->Form->hidden('id', array('value' =>  $this->request->data['Interview']['id'])) ?>
									<table class="table table-bordered">
										<tbody>

											<tr class="warning">
												<th colspan="2"><span><?= __('Details') ?></span></th>
											</tr>

											<tr>
												<td>
													<?= __('Work Content') ?>
												</td>
												<td>
													<?php echo $this->Form->input('work_content',array(
														'label' => false,
														'class' => "form-control",
														'value' => $prof['Interview']['work_content']
													)); ?>
												</td>
											</tr>
											<tr>
												<td>
													<?= __('Work Schedule') ?>
												</td>
												<td>
													<?php echo $this->Form->input('work_schedule',array(
														'label' => false,
														'class' => "form-control",
														'value' => $prof['Interview']['work_schedule']
													)); ?>
												</td>
											</tr>
											<tr>
												<td>
													<?= __('Adoption Number') ?>
												</td>
												<td>
													<div class="row">
														<div class="col-lg-4 col-md-4 col-sm-4">
															<?php echo $this->Form->input('adoption_num',array(
																'label' => false,
																'class' => "form-control maxW50",
																'value' => $prof['Interview']['adoption_num']
															)); ?> <span><?= __('People') ?></span>
														</div>
														<div class=" col-lg-8 col-md-8 col-sm-8 maxW160">
															<?php echo $this->Form->input('sex',array(
																'label' => false,
																'class' => "form-control",
																'type' => 'select',
																'options' => array('male' => __('Male'),'female' => __('Female'),'both' => __('Both'), ),
																'value' => $prof['Interview']['sex']
															)); ?>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<?= __('Age') ?>
												</td>
												<td>
													<?php echo $this->Form->input('age',array(
														'label' => false,
														'class' => "form-control maxW200",
														'value' => $prof['Interview']['age']
													)); ?>
												</td>
											</tr>
											<tr>
												<td rowspan="9"><?= __('Salary') ?></td>
												<td>
													<div class="row">
														<div class="col-lg-12 col-md-12 col-sm-12">
															<span class="mT10 mR5 left"><?= __('時給') ?></span>
															<?php echo $this->Form->input('hourly_wage',array(
																'label' => false,
																'class' => "form-control maxW70 left ",
																'value' => $prof['Interview']['hourly_wage']
															)); ?> <span class="mT10 mL5 left"><?= __('円') ?></span>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td class="td_first_block">
													<div class="row">
														<div class="col-lg-12 col-md-12 col-sm-12">
															<span class="mT10 mR5 left"><?= __('基本給') ?></span>
															<?php echo $this->Form->input('basic_wage',array(
																'label' => false,
																'class' => "form-control maxW70 left ",
																'value' => $prof['Interview']['basic_wage']
															)); ?> <span class="mT10 mL5 left"><?= __('円') ?></span>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td class="td_first_block">
													<div class="row">
														<div class="col-lg-12 col-md-12 col-sm-12">
															<span class="mT10 mR5 left"><?= __('控除額(固定費等含む)約') ?></span>
															<?php echo $this->Form->input('deduction',array(
																'label' => false,
																'class' => "form-control maxW70 left",
																'value' => $prof['Interview']['deduction']
															)); ?> <span class="mT10 mL5 left"><?= __('円') ?></span>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td class="td_first_block">
												<div class="row">

													<div class="col-lg-12 col-md-12 col-sm-12">
														<span class="mT10 mR5"><?= __('(内訳) ※総支給額') ?></span>
															<?php echo $this->Form->input('breakdown',array(
																'label' => false,
																'class' => "form-control maxW70 left",
																'value' => $prof['Interview']['breakdown']
															)); ?> <span class="mT10 mL5 left"><?= __('円での計算の場合') ?></span>
													</div>
												</div>
												</td>
											</tr>
											<tr>
												<td class="td_first_block">
												<div class="row">

													<div class="col-lg-12 col-md-12 col-sm-12">
														<span class="mT10 mR5 left"><?= __('雇用保険 約') ?></span>
															<?php echo $this->Form->input('employment_insurance',array(
																'label' => false,
																'class' => "form-control maxW70 left",
																'value' => $prof['Interview']['employment_insurance']
															)); ?> <span class="mT10 mL5 left"><?= __('円') ?></span>
													</div>
												</div>
												</td>
											</tr>
											<tr>
												<td class="td_first_block">
												<div class="row">

													<div class="col-lg-12 col-md-12 col-sm-12">
														<span class="mT10 mR5 left"><?= __('社会保険 約') ?></span>
															<?php echo $this->Form->input('social_insurance',array(
																'label' => false,
																'class' => "form-control maxW70 left",
																'value' => $prof['Interview']['social_insurance']
															)); ?> <span class="mT10 mL5 left"><?= __('円') ?></span>
													</div>
												</div>
												</td>
											</tr>
											<tr>
												<td class="td_first_block">
												<div class="row">

													<div class="col-lg-12 col-md-12 col-sm-12">
														<span class="mT10 mR5 left"><?= __('寮費 約') ?></span>
															<?php echo $this->Form->input('boarding_fee',array(
																'label' => false,
																'class' => "form-control maxW70 left",
																'value' => $prof['Interview']['boarding_fee']
															)); ?> <span class="mT10 mL5 left"><?= __('円') ?></span>
													</div>
												</div>
												</td>
											</tr>
											<tr>
												<td class="td_first_block">
												<div class="row">

													<div class="col-lg-12 col-md-12 col-sm-12">
														<span class="mT10 mR5 left"><?= __('光熱費 約') ?></span>
															<?php echo $this->Form->input('utility_cost',array(
																'label' => false,
																'class' => "form-control maxW70 left",
																'value' => $prof['Interview']['utility_cost']
															)); ?> <span class="mT10 mL5 left"><?= __('円') ?></span>
													</div>
												</div>
												</td>
											</tr>
											<tr>
												<td class="td_first_block">
												<div class="row">

													<div class="col-lg-12 col-md-12 col-sm-12">
														<span class="mT10 mR5 left"><?= __('手取り給与額(概算) 約') ?></span>
															<?php echo $this->Form->input('take_home',array(
																'label' => false,
																'class' => "form-control maxW70 left",
																'value' => $prof['Interview']['take_home']
															)); ?> <span class="mT10 mL5 left"><?= __('円') ?></span>
													</div>
												</div>
												</td>
											</tr>
											<tr>
												<td><?= __('Requests') ?></td>
												<td>
													<?php echo $this->Form->textarea('request',array(
														'label' => false,
														'class' => "form-control",
														'value' => $prof['Interview']['request'],
														'rows' => 3
													)); ?>
												</td>

										</tbody>
									</table>

									<div class="profile-message-btn center-block text-right">
										<button type="submit" class="btn btn-default">
											<i class="fa fa-pencil"></i>
											<?= __('Save') ?>
										</button>
									</div>
								<?php echo $this->Form->end(); ?>
							</div>
						</div>
					</div> <!-- Requests -->
				</div>

				<div class="col-lg-6 col-md-6 col-sm-12 maxW360">
					<div class="main-box clearfix">
						<header class="main-box-header clearfix">
							<h2><?= __('Candidates List') ?>
								<?php echo $this->Html->link(
									'<i class="fa fa-plus-circle fa-lg"></i> '.__('Select Candidates'),
									array( 'action' => 'select', $prof['Interview']['id']),
									array('escape' => false, 'class' => 'btn btn-primary pull-right')
								) ?>
							</h2>
						</header>

						<div class="main-box-body clearfix">
							<div class="table-responsive">
								<div class="hidden">
									<?php echo $this->Form->create('InterviewCandidate', array(
										'action' => 'add'
									)) ?>
										<?php echo $this->Form->hidden('id') ?>
										<?php echo $this->Form->hidden('trainee_id') ?>
										<?php echo $this->Form->hidden('interview_result_id') ?>
										<?php echo $this->Form->hidden('interview_id', array('value' => $this->request->data['Interview']['id'])) ?>
									<?php echo $this->Form->end(); ?>
								</div>
								<table class="table table-products table-bordered">
									<tbody>
										<?php foreach ($candidates as $can) : ?>
											<tr>
												<td>
													<?php if($can['ProfImg']['img_file_name']){
														echo $this->Html->image('trainee_profile_images/thumb/'.$can['ProfImg']['img_file_name'], array('width' => '60px', 'height' => '60px'));
													} else {
														echo $this->Html->image('trainee_profile_images/thumb/default.png', array('width' => '60px', 'height' => '60px'));
													}?>
												</td>
												<td>
													<span class="name">
														<?php echo $can['CandidateTrainee']['control_no']. " / " ?>
														<?php echo $this->Html->link($can['CandidateTrainee']['given_name_en']." " .$can['CandidateTrainee']['family_name_en'],
															array('controller' => 'trainees', 'action' => 'profile', $can['CandidateTrainee']['id']),
															array('escape' => false, 'target' => '_blank'));
														?>
													</span>
														<?php echo $this->Form->input('interview_result_id',array(
															'label' => false,
															'class' => "form-control maxW160 interview_result_btn",
															'type' => 'select',
															'options' => $option_results,
															'value' => $can['InterviewCandidate']['interview_result_id'],
															'data-interview-candidate-id' => $can['InterviewCandidate']['id'],
															'data-trainee-id' => $can['CandidateTrainee']['id']
														)); ?>
												</td>
											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div> <!-- /Candidates-->




				<div class="col-lg-12 col-md-12 col-sm-12 maxW700">
					<div class="main-box">
						<header class="main-box-header clearfix">
							<h2 class="pull-left"><?= __('Documents List') ?></h2>
						</header>
						<div class="main-box-body clearfix">
							<div class="table-responsive">
								<table class="table table-bordered table-hover widget-todo">
									<thead>
										<tr>
											<th><span><?= __('Document Name') ?></span></th>
											<th><span><?= __('Language') ?></span></th>
											<th><span><?= __('Note') ?></span></th>
											<th><span><?= __('') ?></span></th>

										</tr>
									</thead>
									<tbody>
										<?php foreach ($folders as $folder) : ?>
											<tr class="warning">
												<th colspan="4"><span><?php echo $folder['DocFolder']['folder_jp']."(".$folder['DocFolder']['folder_en'].")" ?></span></th>
											</tr>
												<?php foreach($this->Foreach->association_document_list($folder['DocFolder']['id']) as $doc): ?>
													<tr>
														<td class="td_first_block">
															<div class="checkbox-nice">
																<input type="checkbox" id="doc_<?php echo $doc['AssociationDocument'][0]['id']; ?>" name="data[InterviewDocumentStatusList][status_id]" value="<?php if(!empty($doc['InterviewDocStatusList']['id'])) {echo $doc['InterviewDocStatusList']['status_id'];} ?>"  data-doc-status-id="<?php if(!empty($doc['InterviewDocStatusList'])) {echo $doc['InterviewDocStatusList']['id'];} ?>" data-interview-id="<?php echo $this->request->data['Interview']['id']; ?>" data-association-document-id="<?php echo $doc['AssociationDocument'][0]['id']; ?>" class="doc-chk">
																<label for="doc_<?php echo $doc['AssociationDocument'][0]['id']; ?>">
																	<?php echo $doc['DocName']['name_jp']."<br>".$doc['DocName']['name_en'] ;?>
																</label>
															</div>
														</td>
														<td><?php if($doc['DocName']['lang_jpn'] == 1){echo __('Japanese').", ";}if($doc['DocName']['lang_eng'] == 1){echo __('English').", ";}if($doc['DocName']['lang_khm'] == 1){echo __('Khmer');} ?></td>
														<td><?php echo $doc['DocName']['note']."<br>". $doc['AssociationDocument'][0]['note']; ?></td>
														<td><a href="docs/html/organization_outline_en.html" class="btn btn-info " target="_blank"><i class="fa fa-print"></i> Print</a></td>
													</tr>
												<?php endforeach; ?>
											<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div> <!-- /Documents List-->


			<?php echo $this->Form->create('InterviewCandidate', array(
				'action' => 'updateResultAjax',
				'class' => 'hide interview_result_form'
			)) ?>
			<?php echo $this->Form->end(); ?>
			<?php echo $this->Form->create('InterviewDocStatusList', array(
				'action' => 'addAjax',
				'class' => 'hide doc_status_form'
			)) ?>
			<?php echo $this->Form->end(); ?>
			<?php echo $this->Form->create('InterviewDocStatusList', array(
				'action' => 'updateAjax',
				'class' => 'hide doc_status_update_form'
			)) ?>
			<?php echo $this->Form->end(); ?>



	<?php
		echo $this->Html->script('moment.min', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('modernizr.custom', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('snap.svg-min', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('classie', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('modalEffects', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('rikuyo_js/myModal', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('select2.min', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('notificationFx', array('inline' => false, 'block' => 'modal-js'));
	 ?>

	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>
		//モーダル削除
		$(function(){
			$('.md-modal').remove();
		});
		//実習生募集要項フォーム
		$(function(){
			$('.sel_company').select2({
				allowClear:false
			});
			$('.sel_job').select2();
		});

		//インタビュー結果変更ajax
		$(function(){
			$('.interview_result_btn').on('change', function(){
				var result_id = $(this).val();
				var candidate_id = $(this).data('interview-candidate-id');
				var trainee_id = $(this).data('trainee-id');
				var url = $('.interview_result_form').attr('action');
				console.log(result_id);
				console.log(candidate_id);

				$.ajax({
					url: url,
					type: 'POST',
					dataType:'json',
					data : {
						id:candidate_id,
						interview_result_id:result_id,
						trainee_id:trainee_id
					},
					success: function(){
						var notification = new NotificationFx({
							message:'<p><?= __('Interview Result has successfully Updated!') ?>',
							'layout': 'other',
							'effect': 'boxspinner',
							ttl:6000,
							type:'success',
							onClose:function(){
							bttnBoxSpinner.disabled = false;
							}
						});
						notification.show();
					},
					error: function(){
						alert('error');
					}
				}); //ajax

			});
		});

		//提出書類チェッカー
		$(function(){
			$('.doc-chk').each(function(){
				if($(this).val() == 1){
					$(this).attr('checked', 'checked');
				} else {
					$(this).attr('checked', false);
				}
			});

			$('.doc-chk').on('click', function(){
				var id = $(this).data('doc-status-id');
				var interview_id = $(this).data('interview-id');
				var association_document_id = $(this).data('association-document-id');
				var status_id = $(this).val();
				var url = $('.doc_status_form').attr('action');
				var $input = $(this);

				if(id === ""){
					status_id = "1";
					$.ajax({
						url: url,
						type:'POST',
						dataType:'json',
						data:{
							id:id,
							interview_id:interview_id,
							association_document_id:association_document_id,
							status_id:status_id
						},
						success:function(rs){
							$input.val(status_id);
							$input.attr('data-doc-status-id', rs);
							location.reload();
						},
						error: function(){
							alert('error2');
						}
					});
				} else if(id){
					if(status_id == "1"){
	          status_id = "0";
	          url = $('.doc_status_update_form').attr('action');
	        } else if(status_id == "0") {
	          status_id = "1";
	          url = $('.doc_status_update_form').attr('action');
	        }
	        $.ajax({
	          url: url,
	          type:'POST',
	          dataType:'json',
	          data:{
	            id:id,
	            interview_id:interview_id,
	            association_document_id:association_document_id,
	            status_id:status_id
	          },
	          success:function(rs){
	            $input.val(status_id);
	            var notification = new NotificationFx({
							message:'<p><?= __('Document Status has successfully Updated!') ?>',
								'layout': 'growl',
								'effect': 'genie',
								ttl:4000,
								type:'notice',
								onClose:function(){
									bttnBoxSpinner.disabled = false;
								}
							});
						notification.show();
	          },
	          error: function(){
	            alert('error');
	          }
	        });
				}
			});
		});

	<?php $this->Html->scriptEnd(); ?>
