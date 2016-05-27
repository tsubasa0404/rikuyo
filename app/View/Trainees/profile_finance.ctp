<?php $this->set('title_for_layout', 'Trainee Profile'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/sweetalert', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/dropzone', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/magnific-popup', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/validationEngine.jquery', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Trainee List'), '/trainees'); ?>
<?php $this->Html->addCrumb(__('Trainee Profile'), ''); ?>
					<h1><?= __('Trainee Profile') ?></h1>
					</div>
				</div>
			</div>
<?php echo $this->Session->flash(); ?>
			<div class="row" id="user-profile">
				<div class="col-lg-12 col-md-12 col-sm-12 maxW1200">
					<div class="main-box clearfix">
						<header class="main-box-header clearfix">
							<h2><?php echo $this->request->data['Trainee']['family_name_en'] ." ". $this->request->data['Trainee']['given_name_en']  ?></h2>
						</header>

						<div class="main-box-body clearfix">
							<div class="row">
								<div class="col-lg-5 col-md-5 col-sm-5 maxW500">
									<div class="trainee-profile-img maxW300">
									<?php echo $this->Form->error('TraineeProfileImage.img'); ?>
										<?php if($prof_img)
											{
												echo $this->Html->image('trainee_profile_images/big/'.$prof_img[0]['TraineeProfileImage1']['img_file_name'], array(
													'class' => 'profile-img img-responsive center-block',
													'style' => 'border-radius:initial'
													));
											} else {
												echo $this->Html->image('trainee_profile_images/big/default.png', array(
													'class' => 'profile-img img-responsive center-block',
													'style' => 'border-radius:initial'
													));
											}
										?>
									</div>


							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="main-box clearfix">
						<div class="tabs-wrapper profile-tabs">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#tab-finance" data-toggle="tab"><?= __('Finance') ?></a></li>
								<li><a href="#tab-chat" data-toggle="tab"><?= __('Customer Care') ?></a></li>
							</ul>

							<div class="tab-content">
								<div class="tab-pane fade in active" id="tab-finance">
									<div class="main-box clearfix">
										<div class="tabs-wrapper profile-tabs">
											<ul class="nav nav-tabs">
												<li class="active"><a href="#tab-school" data-toggle="tab"><?= __('School Fee') ?></a></li>
												<li><a href="#tab-microfinance" data-toggle="tab"><?= __('Micro Finance') ?></a></li>
											</ul>
											<div class="tab-content">
												<div class="tab-pane fade in active" id="tab-school">
													<div class="main-box-body clearfix">
														<div class="col-lg-12 col-md-12 col-sm-12">
															<div class="col-lg-6 col-md-6 col-sm-6 maxW300">
																<div class="main-box">
																	<header class="main-box-header clearfix">
																		<h2><?= __('Payment Schedule') ?></h2>
																	</header>
																	<div class="main-box-body clearfix">
																		<?php
																			echo $this->Form->create('TraineeExpense', array(
																			'action' => 'addAjax',
																			'class' => 'form_add_expense'
																			));
																		?>
																		<?php echo $this->Form->hidden('trainee_id', array('value' => $this->request->data['Trainee']['id'])) ?>
																		<div class="form-group">
																			<label for="payScheduleDate"><?= __('Expected Pay Date') ?></label>
																			<div class="input-group">
																				<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
																				<input type="date" name='data[TraineeExpense][expected_date]' class="form-control maxW200 expense_expected_date" id="" required="" >
																			</div>
																		</div>
																		<div class="form-group">
																			<label for="paySheduleAmount"><?= __('Expected Price') ?></label>
																			<div class="input-group">
																				<span class="input-group-addon">$</span>
																				<input type="number" name='data[TraineeExpense][expected_price]' class="form-control maxW200 expense_expected_price" id="paySheduleAmount" size="5" min="0" required="">
																			</div>
																		</div>
																		<button type="button" class="btn btn-primary add_expense_btn"><?= __('Add') ?></button>
																		<?php echo $this->Form->end(); ?>
																	</div>
																</div>
															</div>

															<div class="table-responsive col-lg-12 col-md-12 col-sm-12 maxW800">
																<table class="table table-bordered finance">
																	<thead>
																		<tr>
																			<th class="text-center"><span><?= __('Expected Date') ?></span></th>
																			<th class="text-center"><span><?= __('Expected Price') ?></span></th>
																			<th class="text-center"><span></span></th>
																			<th class="text-center"><span></span></th>
																		</tr>
																	</thead>
																	<tbody class="expense-table">
																		<?php if($expenses[0]['TraineeExpense']['id']): ?>
																			<?php foreach ($expenses as $expense) : ?>
																				<tr class="expense-<?php echo $expense['TraineeExpense']['id']?>" data-expense-id="<?php $expense['TraineeExpense']['id'];?> ">
																					<td class="text-center td_first_block">
																						<?php echo $expense['TraineeExpense']['expected_date'];?>
																					</td>
																					<td class="text-center">
																					<?php echo "$ ".$expense['TraineeExpense']['expected_price'];?>
																					</td>
																					<td>
																						<div class="row">
																							<div class="col-lg-4 col-md-4 col-sm-4">
																								<label><?= __('Pay Date')?></label>
																								<?php echo $this->Form->date('TraineeExpense.pay_date', array(
																									'label' => false,
																									'class' => 'form-control maxW200 chk ',
																									'value' => $expense['TraineeExpense']['pay_date'],
																									'data-expense-id' => $expense['TraineeExpense']['id'],
																									'data-column' => 'pay_date'
																									));?>
																							</div>
																							<div class="col-lg-3 col-md-3 col-sm-3">
																								<?php echo $this->Form->input('TraineeExpense.pay_price', array(
																									'label' => __('Price($)'),
																									'type' => 'number',
																									'class' => 'form-control maxW100 chk',
																									'value' => $expense['TraineeExpense']['pay_price'],
																									'data-expense-id' => $expense['TraineeExpense']['id'],
																									'data-column' => 'pay_price'
																									));?>
																							</div>
																							<div class="col-lg-4 col-md-4 col-sm-4">
																							<?php echo $this->Form->input('TraineeExpense.note', array(
																								'label' => __('Note'),
																								'class' => 'form-control chk',
																								'value' => $expense['TraineeExpense']['note'],
																								'data-expense-id' => $expense['TraineeExpense']['id'],
																								'data-column' => 'note'
																								));?>
																							</div>
																						</div>
																					</td>
																					<td class="text-center">
																					<?php echo $this->Form->postlink(
																						'<i class="fa fa-pencil"></i>',
																						array('controller' => 'trainee_expenses', 'action' => 'edit',$expense['TraineeExpense']['id']),
																						array('escape' => false, 'class' => 'table-link')
																					);
																					echo $this->Form->postlink(
																						'<i class="fa fa-trash-o"></i>',
																						array('controller' => 'trainee_expenses', 'action' => 'delete',$expense['TraineeExpense']['id']),
																						array('confirm' => __('Are you sure you want to delete # %s?',$expense['TraineeExpense']['id']),'escape' => false, 'class' => 'table-link red' )
																					);?>
																					</td>
																				</tr>
																			<?php endforeach; ?>
																		<?php endif; ?>
																		<tr data-expense-id="" class="hide tmp_expense_add">
																			<td class="expected_date td_first_block text-center">
																			</td>
																			<td class="expected_price text-center">
																			</td>
																			<td>
																				<div class="row">
																					<div class="col-lg-4 col-md-4 col-sm-4">
																						<label><?= __('Pay Date')?></label>
																						<input name="data[TraineeExpense][pay_date]" class="form-control maxW200 chk pay_date "  type="date" data-expense-id="" data-column="pay_date">
																					</div>
																					<div class="col-lg-3 col-md-3 col-sm-3">
																						<label><?= __('Price($)');?></label>
																						<input name="data[TraineeExpense][pay_price]" class="form-control maxW100 chk pay_price"  type="number" data-expense-id="" data-column="pay_price">
																					</div>
																					<div class="col-lg-4 col-md-4 col-sm-4">
																						<label for=""><?= __('Note') ?></label>
																						<input name="data[TraineeExpense][note]" class="form-control note chk"  maxlength="255" type="text" data-expense-id="" data-column="note">
																					</div>
																				</div>
																			</td>
																			<td>
																				<div class="actions text-center">
																					<a href="" class="table-link edit"><i class="fa fa-pencil"></i></a>
																					<form action="" name="" id="" style="display:none;" method="post" class="delete"><input type="hidden" name="_method" value="POST"></form>
																					<a href="#" class="table-link red delete" onclick=""><i class="fa fa-trash-o"></i></a>
																				</div>
																			</td>
																		</tr>
																	</tbody>
																</table>
																<div class="hide">
																	<?php echo $this->Form->create('TraineeExpense', array(
																			'action' => 'edit',
																			'class' => 'hide expense-edit-link'
																		)) ?>
																		<?php echo $this->Form->end(); ?>
																		<?php echo $this->Form->create('TraineeExpense', array(
																			'action' => 'delete',
																			'class' => 'hide expense-delete-link'
																		)) ?>
																	<?php echo $this->Form->end(); ?>
																</div>


																<?php echo $this->Form->create('TraineeExpense', array(
																	 'controller' => 'trainee_expenses', 'action' => 'updateAjax',
																	'class' => 'hide form_expense_update'
																)); ?>
																<?php echo $this->Form->end(); ?>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-pane fade" id="tab-microfinance">
													<div class="main-box-body clearfix">
														<div class="row">
															<div class="col-lg-12 col-md-12 col-sm-12">
																<div class="col-lg-4 col-md-4 col-sm-4 maxW250">
																	<div class="main-box">
																		<header class="main-box-header clearfix">
																			<h2><?= __('Register Pay Record') ?></h2>
																		</header>
																		<div class="main-box-body clearfix">
																			<?php
																				echo $this->Form->create('TraineeMicrofinanceRecord', array(
																				'action' => 'addAjax',
																				'class' => 'form_add_micro'
																				));
																			?>
																			<?php echo $this->Form->hidden('trainee_id', array('value' => $this->request->data['Trainee']['id'])) ?>
																				<div class="row">
																					<div class="col-lg-12 col-md-12 col-sm-12">
																						<div class="form-group">
																							<label for=""><?= __('Pay Month') ?></label>
																							<input type="month" name="data[TraineeMicrofinanceRecord][pay_month]" class="form-control micro_pay_month" id="TraineeMicrofinanceRecordPayMonthMonth" style="width:180px"  required="">
																						</div>
																					</div>
																					<div class="col-lg-12 col-md-12 col-sm-12">
																						<div class="form-group">
																							<label for=""><?= __('Pay Status') ?></label>
																							<?php echo $this->Form->input('status_id', array(
																								'label' => false,
																								'type' => 'select',
																								'class' => 'form-control maxW100 micro_status_id',
																								'options' => array('0'=> __('Not Yet'),'1'=> __('OK')),
																								'required' => true
																							)) ?>
																						</div>
																					</div>
																				</div>
																				<div class="form-group">
																					<?php echo $this->Form->input('note', array(
																						'label' => __('Note'),
																						'class' => 'form-control micro_note',
																					)) ?>
																				</div>
																				<button type="button" class="btn btn-primary add_micro_btn"><?= __('Add') ?></button>
																			<?php echo $this->Form->end(); ?>
																		</div>
																	</div>
																</div>

																<div class="col-lg-8 col-md-8 col-sm-8">
																	<div class="row">
																		<div class="col-lg-6 col-md-6 col-sm-6 maxW300">
																			<div class="main-box">
																				<header class="main-box-header clearfix">
																					<h2><?= __('Repayment Plan Sheet') ?></h2>
																				</header>
																				<div class="main-box-body clearfix">
																					<?php
																						echo $this->Form->create('TraineeMicrofinanceImage', array(
																						'action' => 'add',
																						'type' => 'file',
																						'class' => 'form_micro_img'
																						));
																					?>
																					<?php echo $this->Form->hidden('TraineeMicrofinanceImage.trainee_id', array('value' => $this->request->data['Trainee']['id'])); ?>
																					<input type="hidden" name="MAX_FILE_SIZE" value="20971520">
																					<?php echo $this->Form->hidden('TraineeMicrofinanceImage.trainee_control_no', array('value' => $this->request->data['Trainee']['control_no'])); ?>
																					<div class="form-group">
																						<label><?= __('Choose Upload Sheet') ?></label>
																						<?php echo $this->Form->file('TraineeMicrofinanceImage.img',
																							array(
																								'required' => true,
																								'style'=>'cursor:pointer',
																								'class' => ' validate[checkFileType[JPG|JPEG|GIF|PNG|PDF|jpg|jpeg|gif|png|pdf]]'));
																						?>
																					</div>
																					<div class="form-group">
																						<?php echo $this->Form->input('title', array(
																							'class' => 'form-control maxW300',
																							'label' => __('Sheet Name'),
																							'required' => true,
																							));
																						?>
																					</div>
																					<button type="submit" class="btn btn-success">
																						<i class="fa fa-cloud-upload"></i>
																						<?= __('Upload Sheet') ?>
																					</button>
																					<?php echo $this->Form->end(); ?>
																				</div>
																			</div>
																		</div>

																		<div class="col-lg-6 col-md-6 col-sm-6">
																			<div class="main-box">
																				<div class="main-box-body clearfix">
																					<div class="table-responsive story-images">
																						<table class="table table-striped table-hover">
																							<thead>
																								<tr>
																									<th><span><?= __('Sheet Name') ?></span></th>
																									<th><span></span></th>
																								</tr>
																							</thead>
																							<tbody id="microfinance">
																							<?php if(!empty($microfinance_images[0]['TraineeMicrofinanceImage']['id'])): ?>
																								<?php foreach ($microfinance_images as $image) : ?>
																									<tr>
																										<td>
																											<?php echo $image['TraineeMicrofinanceImage']['title'];?>
																										</td>
																										<td class="text-center">
																											<?php echo $this->Html->link('<i class="fa fa-eye fa-lg"></i>',
																												'/img/trainee_microfinance_images/original/'.$image['TraineeMicrofinanceImage']['img_file_name'],
																												array('class' => 'table-link popup', 'alt' => 'Show Image', 'escape' => false)
																											) ?>
																											<!-- <a href="/dev/img/trainee_microfinance_images/original/<?php // echo $image['TraineeMicrofinanceImage']['img_file_name'];?>" class="table-link popup" alt="Show Image">
																												<i class="fa fa-eye fa-lg"></i>
																											</a> -->
																										<?php echo $this->Form->postlink(
																											'<i class="fa fa-trash-o"></i>',
																											array(
																												'controller' => 'trainee_microfinance_images', 'action' => 'delete',$image['TraineeMicrofinanceImage']['id']
																												),
																											array(
																												'confirm' => __('Are you sure you want to delete # %s?', $image['TraineeMicrofinanceImage']['id']),'escape' => false, 'class' => 'table-link red'
																												)
																											);?>
																										</td>
																									</tr>
																								<?php endforeach; ?>
																							<?php endif; ?>
																							</tbody>
																						</table>
																					</div>
																				</div>
																			</div>
																		</div>

																	</div>
																</div>
															</div>
														</div>

														<div class="row">
															<div class="table-responsive col-lg-12 col-md-12 col-sm-12 maxW600">
																<div class="col-lg-12 col-md-12 col-sm-12">
																	<table class="table table-bordered finance">
																		<thead>
																			<tr>
																				<th class="text-center"><span><?= __('Pay Month') ?></span></th>
																				<th class="text-center"><span><?= __('Status') ?></span></th>
																				<th class="text-center"><span></span></th>
																			</tr>
																		</thead>
																		<tbody class="micro_table">
																			<?php if($microfinances[0]['TraineeMicrofinanceRecord']['id']): ?>
																				<?php foreach ($microfinances as $record) : ?>
																						<tr class="miacrofinance-<?php echo $record['TraineeMicrofinanceRecord']['id']?>" data-microfinance-id="<?php echo $record['TraineeMicrofinanceRecord']['id'];?>">
																							<td class="text-center td_first_block">
																						<?php echo $record['TraineeMicrofinanceRecord']['pay_month'];?>
																						</td>
																						<td>
																							<div class="row">
																								<div class="col-lg-4 col-md-4 col-sm-4 maxW160">
																									<label><?= __('Status'); ?></label>
																										<?php echo $this->form->input('TraineeMicrofinanceRecord.status_id', array(
																											'label' => false,
																											'class' => 'form-control maxW120 microfinance-'.$record['TraineeMicrofinanceRecord']['id'],
																											'value' => $record['TraineeMicrofinanceRecord']['status_id'],
																											'type' => 'select',
																											'options' => array('0'=> __('Not Yet'),'1'=> __('OK')),
																											));?>
																								</div>
																								<div class="col-lg-8 col-md-8 col-sm-8">
																									<?php echo $this->Form->input('TraineeMicrofinanceRecord.note', array(
																										'label' => __('Note'),
																										'class' => 'form-control microfinance-'.$record['TraineeMicrofinanceRecord']['id'],
																										'value' => $record['TraineeMicrofinanceRecord']['note']
																										));?>
																								</div>
																							</div>
																						</td>
																						<td class="text-center">
																							<?php echo $this->Form->postlink(
																								'<i class="fa fa-pencil"></i>',
																								array('controller' => 'trainee_microfinance_records', 'action' => 'edit',$record['TraineeMicrofinanceRecord']['id']),
																								array('escape' => false, 'class' => 'table-link' )
																							);
																							echo $this->Form->postlink(
																								'<i class="fa fa-trash-o"></i>',
																								array('controller' => 'trainee_microfinance_records', 'action' => 'delete',$record['TraineeMicrofinanceRecord']['id']),
																								array('confirm' => __('Are you sure you want to delete # %s?',$record['TraineeMicrofinanceRecord']['id']),'escape' => false, 'class' => 'table-link red' )
																							);?>
																						</td>
																					</tr>
																				<?php endforeach; ?>
																			<?php endif; ?>
																			<tr data-micro-id="" class="hide tmp_micro_add">
																				<td class="pay_month td_first_block text-center">
																				</td>
																				<td class="text-center">
																					<div class="row">
																						<div class="col-lg-4 col-md-4 col-sm-4 maxW160">
																							<label><?= __('Status'); ?></label>
																								<div class="input select">
																									<select name="data[TraineeMicrofinanceRecord][status_id]" class="form-control maxW120 chk status_id" data-micro-id="" data-column="status_id">
																										<option value="0"><?= __('Not Yet') ?></option>
																										<option value="1"><?= __('OK') ?></option>
																									</select>
																								</div>
																						</div>
																						<div class="col-lg-8 col-md-8 col-sm-8">
																							<div class="input text">
																								<label for="TraineeMicrofinanceRecordNote"><?= __('Note') ?></label>
																								<input name="data[TraineeMicrofinanceRecord][note]" class="form-control chk note" value="" maxlength="255" type="text" data-micro-id="" data-column="note"></div>
																						</div>
																					</div>
																				</td>
																				<td>
																					<div class="actions text-center">
																						<a href="" class="table-link edit"><i class="fa fa-pencil"></i></a>
																						<form action="" name="" id="" style="display:none;" method="post" class="delete"><input type="hidden" name="_method" value="POST"></form>
																						<a href="#" class="table-link red delete" onclick=""><i class="fa fa-trash-o"></i></a>
																					</div>
																				</td>
																			</tr>
																		</tbody>
																	</table>
																	<div class="hide">
																	<?php echo $this->Form->create('TraineeMicrofinanceRecord', array(
																			'action' => 'edit',
																			'class' => 'hide micro-edit-link'
																		)) ?>
																		<?php echo $this->Form->end(); ?>
																		<?php echo $this->Form->create('TraineeMicrofinanceRecord', array(
																			'action' => 'delete',
																			'class' => 'hide micro-delete-link'
																		)) ?>
																	<?php echo $this->Form->end(); ?>
																</div>


																<?php echo $this->Form->create('TraineeMicrofinanceRecord', array(
																	 'controller' => 'trainee_microfinance_records', 'action' => 'updateAjax',
																	'class' => 'hide form_micro_update'
																)); ?>
																<?php echo $this->Form->end(); ?>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="tab-pane fade" id="tab-chat">
									<div class="conversation-wrapper">
										<div class="col-lg-6 col-md-6 col-sm-6 maxW400">
											<div class="main-box">
												<div class="main-box-body clearfix">
													<div class="conversation-new-message">
														<?php echo $this->Form->create('TraineeVoice', array(
															'action' => 'addAjax',
															'class' => 'voice_form'
														)) ?>
															<div class="form-group">
																<?php echo $this->Form->input('title_en', array(
																	'class' => 'form-control title_en',
																	'label' => __('Title'),
																	'required' => true,
																)) ?>
															</div>
															<div class="form-group">
																<label for=""><?= __('Trainee\'s Voice') ?></label>
																<?php echo $this->Form->textarea('voice_en', array(
																	'class' => 'form-control voice_en',
																	'label' => false,
																	'rows' => 4,
																	'required' => true
																)) ?>
															</div>
															<?php echo $this->Form->hidden('trainee_id', array(
																'value' => $this->request->data['Trainee']['id']
															)); ?>
															<div class="clearfix">
																<button type="button" class="btn btn-primary pull-right voice_btn"><?= __('Add') ?></button>
															</div>
														<?php echo $this->Form->end(); ?>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 maxW500">
											<div class="main-box-body clearfix">
												<div class="conversation-content">
													<div class="conversation-inner">
														<?php foreach ($voices as $voice) : ?>
															<div class="conversation-item item-right clearfix">
																<div class="conversation-body">
																	<div class="name">
																		<?php echo $voice['TraineeVoice']['title_en']; ?>
																	</div>
																	<div class="time hidden-xs">
																		<?php echo $voice['TraineeVoice']['created']; ?>

																	</div>
																	<div class="text">
																		<?php echo $voice['TraineeVoice']['voice_en']; ?>
																	</div>
																</div>
															</div>
														<?php endforeach; ?>
													</div>
												</div>

														<div class="conversation-item item-right clearfix hide voice_tmp">
															<div class="conversation-body">
																<div class="name voice_title_en">

																</div>
																<div class="time hidden-xs voice_created">

																</div>
																<div class="text voice_en">

																</div>
															</div>
														</div>
											</div>
										</div>

</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>


	<?php
		echo $this->Html->script('jquery.slimscroll.min', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('jquery.magnific-popup.min', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('dropzone.min', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('moment.min', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('modernizr.custom', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('classie', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('modalEffects', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('rikuyo_js/myModal', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('select2.min', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('sweetalert.min', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('jquery.validationEngine.js', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('jquery.validationEngine-ja.js', array('inline' => false, 'block' => 'page-js'));
	 ?>

	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>

	//update cv ajaxs
	$(function(){
			var id = '<?php echo $this->request->data['Trainee']['id']; ?>';


			//expense add Ajax
			//連続投稿すると上書きされる。
			//removeClassに注意
			$('.add_expense_btn').on('click', function(){
        var url             = $('.form_add_expense').attr('action');
        var expected_date   = $('.expense_expected_date').val();
        var expected_price  = $('.expense_expected_price').val();

				$.ajax({
					url:url,
					type:'POST',
					dataType:'json',
					data:{
            trainee_id:     id,
            expected_date:  expected_date,
            expected_price: expected_price,
					}, success:function(rs){
						$tmp = $('tr.tmp_expense_add').clone();
						$tmp.removeClass('hide');
            var edit_url    = $('#tab-school').find('.expense-edit-link').attr('action');
            var delete_url  = $('#tab-school').find('.expense-delete-link').attr('action');
						$tmp.find('tr').attr('data-expense-id', rs);
						$tmp.find('td.expected_date').text(expected_date);
						$tmp.find('td.expected_date').attr('data-expense-id', rs);
						$tmp.find('td.expected_price').text("$ "+expected_price);
						$tmp.find('td.expected_price').attr('data-expense-id', rs);
						$tmp.find('input.pay_date').attr('data-expense-id', rs);
						$tmp.find('input.pay_price').attr('data-expense-id', rs);
						$tmp.find('input.note').attr('data-expense-id', rs);
						$tmp.find('a.edit').attr('href',edit_url+"/"+rs);
						$tmp.find('form.delete').attr('action',delete_url+"/"+rs);
						$tmp.find('form.delete').attr('name',"post_"+rs);
						$tmp.find('form.delete').attr('id',"post_"+rs);
						$tmp.find('a.delete').attr('onclick','if (confirm("Are you sure you want to delete")) {document.post_'+rs+'.submit();} event.returnValue = false; return false;');
						$('tbody.expense-table').prepend($tmp);
						$tmp.removeClass('tmp_expense_add');
						$('.expense_expected_date').val("");
						$('.expense_expected_price').val("");
						swal("<?= __('Saved!') ?>", "", "success");

					}, error:function(){
						swal("<?= __('Error!') ?>", "", "error");
					}
				});
			});

			//expense update ajax
			$('#tab-school').on('change', '.chk', function(){
				var url = $('#tab-school').find('.form_expense_update').attr('action');
				var expense_id = $(this).data('expense-id');
				url = url+"/"+expense_id;
				var column = $(this).data('column');
				var val = $(this).val();
				$.ajax({
					url:url,
					type:'POST',
					dataType:'json',
					data:{
						id:expense_id,
						column:column,
						val:val
					}, success:function(){

					}, error:function(){
					}
				});
			});

			//microfinance add Ajax
			$('.add_micro_btn').on('click', function(){
        var url        = $('.form_add_micro').attr('action');
        var pay_month  = $('.micro_pay_month').val();
        var status_id  = $('.micro_status_id').val();
        var note       = $('.micro_note').val();

				$.ajax({
					url:url,
					type:'POST',
					dataType:'json',
					data:{
            trainee_id:     id,
            pay_month:  pay_month,
            status_id: status_id,
            note: note,
					}, success:function(rs){
						$tmp = $('tr.tmp_micro_add').clone();
						$tmp.removeClass('hide');
            var edit_url    = $('#tab-microfinance').find('.micro-edit-link').attr('action');
            var delete_url  = $('#tab-microfinance').find('.micro-delete-link').attr('action');
						$tmp.find('tr').attr('data-micro-id', rs);
						$tmp.find('td.pay_month').text(pay_month);
						$tmp.find('select.status_id').val(status_id);
						$tmp.find('select.status_id').attr('data-micro-id',rs);
						$tmp.find('input.note').val(note);
						$tmp.find('input.note').attr('data-micro-id',rs);
						$tmp.find('a.edit').attr('href',edit_url+"/"+rs);
						$tmp.find('form.delete').attr('action',delete_url+"/"+rs);
						$tmp.find('form.delete').attr('name',"post_"+rs);
						$tmp.find('form.delete').attr('id',"post_"+rs);
						$tmp.find('a.delete').attr(
							'onclick',
							'if (confirm("Are you sure you want to delete")) {document.post_'+rs+'.submit();} event.returnValue = false; return false;');
						$('tbody.micro_table').prepend($tmp);
						$tmp.removeClass('tmp_micro_add');
						$('.micro_pay_month').val("");
						$('.micro_status_id').val("");
						$('.micro_note').val("");
						swal("<?= __('Saved!') ?>", "", "success");

					}, error:function(){
						swal("<?= __('Error!') ?>", "", "error");
					}
				});
			});

			//micro update ajax
			$('#tab-microfinance').on('change', '.chk', function(){
				var url = $('#tab-microfinance').find('.form_micro_update').attr('action');
				var micro_id = $(this).data('micro-id');
				url = url+"/"+micro_id;
				var column = $(this).data('column');
				var val = $(this).val();
				$.ajax({
					url:url,
					type:'POST',
					dataType:'json',
					data:{
						id:micro_id,
						column:column,
						val:val
					}, success:function(){

					}, error:function(){
					}
				});
			});
	});

	//Trainee Document validate
	$(function(){
		//validation engine plugin 読み込み
		$('.form_trainee_document').validationEngine();
		$('.form_trainee_prof').validationEngine();
		$('.form_micro_img').validationEngine();
		$('.form_trainee_document').submit(function(){
			swal({
				title: '<?= __("Wait a while...") ?>',
				timer: 4000,
				showConfirmButton: false
			});
		});
		$('.form_micro_img').submit(function(){
			swal({
				title: '<?= __("Wait a while...") ?>',
				timer: 4000,
				showConfirmButton: false
			});
		});
		$('.form_trainee_prof').submit(function(){
			swal({
				title: '<?= __("Wait a while...") ?>',
				timer: 6000,
				showConfirmButton: false
			});
		});
	});

	//学生Voice ajax
	$(document).ready(function() {
		$('.conversation-inner').slimScroll({
	    height: '340px'
	  });
	  $('.voice_btn').on('click', function(){
			var $voice_form = $('.voice_form');
			var url = $voice_form.attr('action');
			var trainee_id = '<?php echo $this->request->data['Trainee']['id']; ?>';
			var title = $voice_form.find('.title_en').val();
			var voice = $voice_form.find('.voice_en').val();
			$.ajax({
				url:url,
				type:'POST',
				dataType:'json',
				data: {
					trainee_id :trainee_id,
					title_en:title,
					voice_en:voice
				}, success:function(rs){
			var $tmp = $('.voice_tmp').clone();
					$tmp.removeClass('hide');
					$tmp.find('.voice_title_en').text(title);
					$tmp.find('.voice_en').text(voice);
					$('.conversation-inner').prepend($tmp);
					$voice_form.find('.title_en').val("");
					$voice_form.find('.voice_en').val("");
				}, error: function(){

				}
			});
	  });
	});

	//画像ポップアップ
	$(function() {
		$(document).ready(function() {
			$('#documents .popup').each(function(){
				var href = $(this).attr('href');
				if(href != null){
					href = href.replace(/#/g,'');
					if(href.match(/.pdf/i)){
						$(this).addClass('popup_pdf');
						$(this).removeClass('popup');
					}
				}
			});
			$('#documents .popup').magnificPopup({
				type: 'image',
				gallery: {
					enabled: true
			    }
			});
			$('#documents .popup_pdf').magnificPopup({
				type: 'iframe',
				gallery: {
					enabled: true
			    }
			});

			$('#microfinance .popup').each(function(){
				var href = $(this).attr('href');
				if(href != null){
					href = href.replace(/#/g,'');
					if(href.match(/.pdf/i)){
						$(this).addClass('popup_pdf');
						$(this).removeClass('popup');
					}
				}
			});
			$('#microfinance .popup').magnificPopup({
				type: 'image',
				gallery: {
					enabled: true
			    }
			});
			$('#microfinance .popup_pdf').magnificPopup({
				type: 'iframe',
				gallery: {
					enabled: true
			    }
			});
		});
	});


	//初期設定 select 2
	$(function(){
		$('.alert').fadeOut(5000);
		$('.md-modal').remove();
	  $('.half').on('blur', function(){
			var txt  = $(this).val();
			var han = txt.replace(/[Ａ-Ｚａ-ｚ０-９]/g,function(s){return String.fromCharCode(s.charCodeAt(0)-0xFEE0)});
			$(this).val(han);
		});
		$('.sel_job').select2({
		});

		$('.sel_job_family').select2({
		});

		$('.sel_company').select2({
		});
	});

	<?php $this->Html->scriptEnd(); ?>