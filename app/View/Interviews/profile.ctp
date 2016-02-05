<?php $this->set('title_for_layout', 'Trainee Profile'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
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
				</div>

				<div class="col-lg-6 col-md-6 col-sm-12 maxW450">
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
					</div>
				</div> <!-- /Job and Salary-->


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
															'data-interview-candidate-id' => $can['InterviewCandidate']['id']
														)); ?>
												</td>
											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
							<!-- <button class="md-trigger btn mrg-b-lg btn-success pull-left" data-modal="modal-result">
								<span class="fa fa-heart"></span> 面接結果確定
							</button> -->
								<?php echo $this->Html->link(
									'<i class="fa fa-child"></i> '. __('Success Candidates List'),
									array( 'action' => 'success', $prof['Interview']['id']),
									array('escape' => false, 'class' => 'btn btn-success pull-right')
								) ?>
						</div>
					</div>
				</div> <!-- /Candidates-->

				<div class="col-lg-12 col-md-12 col-sm-12 maxW600">
					<div class="main-box">
						<header class="main-box-header clearfix">
							<h2 class="pull-left">書類提出状況一覧</h2>
							<!-- <a href="document-select.html" class="btn btn-primary pull-right"><i class="fa fa-lg fa-plus-circle"></i> 提出書類を選択</a> -->
						</header>
						<div class="main-box-body clearfix">
							<div class="table-responsive ">
								<table class="table table-bordered table-hover widget-todo">
									<thead>
										<tr>
											<th><span>書類名</span></th>
											<th><span>言語</span></th>
											<th><span>備考</span></th>
											<th><span></span></th>
										</tr>
									</thead>
									<tbody>
										<tr class="warning">
											<th colspan="4"><span>送り出し機関</span></th>
										</tr>
										<tr>
											<td>
												<div class="checkbox-nice">
													<input type="checkbox" id="chk_doc_1" name="doc" value=""  data-id="doc_1" class="doc-chk doc_1">
												<label for="chk_doc_1">
												Human Power(送り出し機関)概要書
												</label>
												</div>
											</td>
											<td>日本語,英語</td>
											<td>1セット<br>手書きサイン必要</td>
											<td class="text-center">
												<a href="docs/html/organization_outline_en.html" class="btn btn-info " target="_blank"><i class="fa fa-print"></i> Print</a>

											</td>
										</tr>
										<tr>
											<td>
												<div class="checkbox-nice">
													<input type="checkbox" class="doc-chk doc_2" id="chk_doc_2" name="doc" value=""  data-id="doc_2">
												<label for="chk_doc_2">
												Human Power(送り出し機関)概要書
												</label>
												</div>
											</td>
											<td>日本語,英語</td>
											<td>1セット</td>
											<td class="text-center">
												<a href="docs/html/organization_outline_en.html" class="btn btn-info " target="_blank"><i class="fa fa-print"></i> Print</a>
											</td>
										</tr>
										<tr>
											<td>
												<div class="checkbox-nice">
													<input type="checkbox" class="doc-chk doc_3" id="chk_doc_3" name="doc" value=""  data-id="doc_3">
												<label for="chk_doc_3">
												Human Power(送り出し機関)概要書
												</label>
												</div>
											</td>
											<td>日本語,英語</td>
											<td>1セット</td>
											<td class="text-center">
												<a href="docs/html/organization_outline_en.html" class="btn btn-info " target="_blank"><i class="fa fa-print"></i> Print</a>
											</td>
										</tr>
										<tr class="warning">
											<th colspan="4"><span>所属機関</span></th>
										</tr>
										<tr>
											<td>
												<div class="checkbox-nice">
													<input type="checkbox" class="doc-chk doc_4" id="chk_doc_4" name="doc" value=""  data-id="doc_4">
												<label for="chk_doc_4">
												Human Power(送り出し機関)概要書
												</label>
												</div>
											</td>
											<td>日本語,英語</td>
											<td>1セット</td>
											<td class="text-center">
												<a href="docs/html/organization_outline_en.html" class="btn btn-info " target="_blank"><i class="fa fa-print"></i> Print</a>
											</td>
										</tr>
										<tr class="warning">
											<th colspan="4"><span>Rikuyo Japan Training Center</span></th>
										</tr>
										<tr>
											<td>
												<div class="checkbox-nice">
													<input type="checkbox" class="doc-chk doc_5" id="chk_doc_5" name="doc" value="" data-id="doc_5">
												<label for="chk_doc_5">
												Human Power(送り出し機関)概要書
												</label>
												</div>
											</td>
											<td>日本語,英語</td>
											<td>1セット</td>
											<td class="text-center">
												<a href="docs/html/organization_outline_en.html" class="btn btn-info " target="_blank"><i class="fa fa-print"></i> Print</a>
											</td>
										</tr>
										<tr>
											<td>
												<div class="checkbox-nice">
													<input type="checkbox" class="doc-chk doc_6" id="chk_doc_6" name="doc" value="" data-id="doc_6">
												<label for="chk_doc_6">
												Human Power(送り出し機関)概要書
												</label>
												</div>
											</td>
											<td>日本語,英語</td>
											<td>1セット</td>
											<td class="text-center">
												<a href="docs/html/organization_outline_en.html" class="btn btn-info " target="_blank"><i class="fa fa-print"></i> Print</a>
											</td>
										</tr>
										<tr class="warning">
											<th colspan="4"><span>カンボジア労働省</span></th>
										</tr>
										<tr>
											<td>
												<div class="checkbox-nice">
													<input type="checkbox" class="doc-chk doc_7" id="chk_doc_7" name="doc" value="" data-id="doc_7">
												<label for="chk_doc_7">
												Human Power(送り出し機関)概要書
												</label>
												</div>
											</td>
											<td>日本語,英語</td>
											<td>1セット</td>
											<td class="text-center">
												<a href="docs/html/organization_outline_en.html" class="btn btn-info " target="_blank"><i class="fa fa-print"></i> Print</a>
											</td>
										</tr>
										<tr class="warning">
											<th colspan="4"><span>実習生関係</span></th>
										</tr>
										<tr>
											<td>
												<div class="checkbox-nice">
													<input type="checkbox" class="doc-chk doc_8" id="chk_doc_8" name="doc" value="" data-id="doc_8">
												<label for="chk_doc_8">
												Human Power(送り出し機関)概要書
												</label>
												</div>
											</td>
											<td>日本語,英語</td>
											<td>1セット</td>
											<td class="text-center">
												<a href="docs/html/organization_outline_en.html" class="btn btn-info " target="_blank"><i class="fa fa-print"></i> Print</a>
											</td>
										</tr>
										<tr class="warning">
											<th colspan="4"><span>返還待ち書類</span></th>
										</tr>
										<tr>
											<td>
												<div class="checkbox-nice">
													<input type="checkbox" class="doc-chk doc_9" id="chk_doc_9" name="doc" value="" data-id="doc_9">
												<label for="chk_doc_9">
												雇用条件書
												</label>
												</div>
											</td>
											<td>日本語,クメール語</td>
											<td>1セット</td>
											<td class="text-center">
											</td>
										</div>
										<tr>
											<td>
												<div class="checkbox-nice">
													<input type="checkbox" class="doc-chk doc_10" id="chk_doc_10" name="doc" value="" data-id="doc_10">
													<label for="chk_doc_10">
													雇用契約書
													</label>
												</div>
											</td>
											<td>日本語、クメール語</td>
											<td>1セット</td>
											<td class="text-center">
											</td>
										</tr>
									</tbody>
								</table>
							</div>


							<!--
							下のテーブルには、
							interview_idが同じで、
							selected = 1の場合、
							association_document_idを取得
							 -->
							<table class="hide check-doc-list">
								<thead>
									<tr>
										<th>id</th>
										<th>interview_id</th>
										<th>association_doc_id</th>
										<th>doc_name_id</th>
										<th>status</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>1</td>
										<td>1</td>
										<td data-doc-id="doc_1" class="checked_doc_id">doc_1</td>
									</tr>
									<tr>
										<td>2</td>
										<td>1</td>
										<td>2</td>
										<td data-doc-id="doc_2" class="checked_doc_id">doc_2</td>
										<td data-selected="0">0</td>
									</tr>
									<tr>
										<td>3</td>
										<td>1</td>
										<td>3</td>
										<td data-doc-id="doc_3" class="checked_doc_id">doc_3</td>
									</tr>
									<tr>
										<td>3</td>
										<td>1</td>
										<td>3</td>
										<td data-doc-id="doc_4" class="checked_doc_id">doc_3</td>
									</tr>
									<tr>
										<td>3</td>
										<td>1</td>
										<td>3</td>
										<td data-doc-id="doc_5" class="checked_doc_id">doc_3</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div> <!-- /Documents List-->





	<?php
		echo $this->Html->script('moment.min', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('modernizr.custom', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('classie', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('modalEffects', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('rikuyo_js/myModal', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('select2.min', array('inline' => false, 'block' => 'page-js'));
	 ?>

	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>
		//実習生募集要項フォーム
		$(function(){
			$('.sel_company').select2({
				allowClear:false
			});
			$('.sel_job').select2();
		});

		$(function(){
			$('.interview_result_btn').on('change', function(){
				var result_id = $(this).val();
				var candidate_id = $(this).data('interview-candidate-id');
				$('.interview_result_form').on('submit', function(){
					$.post('', {

					}, function(res){

					});
				});
					console.log(candidate_id + "/" +result_id);
			});
			return false; //画面遷移をさせない。
		});

		//提出書類チェッカー
		$(function(){
			var asc_doc_id;
			var checked_doc_list = [];
			$('table.check-doc-list td.checked_doc_id').each(function(){
				checked_doc_list.push($(this).data('doc-id'));
			});

			$('.doc-chk').each(function(){
				asc_doc_id = $(this).data('id');
				console.log(asc_doc_id);
				console.log(checked_doc_list);
				compare_doc_id(asc_doc_id, checked_doc_list);
			});


			function compare_doc_id(asc_doc_id, checked_doc_list){
				if($.inArray(asc_doc_id, checked_doc_list)>=0){
					console.log('have');
					$('.' +asc_doc_id).prop('checked', true);
				}else{
					console.log('not have');
				};
			}
			function set_checked(){
				$('.doc-chk');
			}

		});
	<?php $this->Html->scriptEnd(); ?>
