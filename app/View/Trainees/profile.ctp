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
				<div class="col-lg-12 col-md-12 col-sm-12 maxW960">
					<div class="main-box clearfix">
						<header class="main-box-header clearfix">
							<h2><?php echo $this->request->data['Trainee']['family_name_en'] ." ". $this->request->data['Trainee']['given_name_en']  ?></h2>
						</header>

						<div class="main-box-body clearfix">
							<div class="row">
								<div class="col-lg-5 col-md-5 col-sm-5 maxW360">
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

									<div class="main-box-body clearfix center-block " style="padding-bottom: 10px !important;" >
										<?php
											echo $this->Form->create('TraineeProfileImage', array(
											'action' => 'add',
											'type' => 'file',
											'class' => 'form_trainee_prof',
											));
											if($prof_img){
											echo $this->Form->hidden('TraineeProfileImage.id', array('value' => $prof_img[0]['TraineeProfileImage1']['id']));
											}
										?>
										<?php echo $this->Form->hidden('TraineeProfileImage.trainee_id', array('value' => $this->request->data['Trainee']['id'])); ?>
										<?php echo $this->Form->hidden('TraineeProfileImage.trainee_control_no', array('value' => $this->request->data['Trainee']['control_no'])); ?>
										<div class="form-group">
											<?php echo $this->Form->file('TraineeProfileImage.img', array(
												'style'=>'cursor:pointer',
												'class' => ' validate[checkFileType[jpg|jpeg|gif|png]]')); ?>
										</div>
										<button type="submit" class="btn btn-success">
											<i class="fa fa-cloud-upload"></i>
											<?= __('Upload Profile Image') ?>
										</button>
										<?php echo $this->Form->end(); ?>
									</div>

									<div class="main-box-body clearfix">
										<div class="table-responsive flight-schedule maxW300">
											<?php echo $this->Form->create('Trainee', array(
												'class' => 'form_trainee_edit form_flight',
												'action' => 'updateFlightAjax',
												'inputDefaults' => array(
													'div' => false,
													)
											)); ?>
											<?php echo $this->Form->hidden('id'); ?>
											<table class="table table-bordered table-hover">
												<tbody>
													<tr>
														<td class="td_first_block"><?= __('Departure Date') ?></td>
														<td>
															<?php echo $this->Form->date('departure_date',array(
																'label' => false,
																'class' => 'form-control maxW160 departure_date'
															)) ?>
														</td>
													</tr>
													<tr>
														<td class="td_first_block"><?= __('Departure Status') ?></td>
														<td>
															<?php echo $this->Form->input('departure_status_id',array(
															'label' => false,
															'type' => 'select',
															'options' => array('0'=> __('Not Yet'),'1'=> __('Already')),
															'class' => "form-control maxW160 departure_status",
															'div' => false
														)); ?>
														</td>

													</tr>
													<tr>
														<td class="td_first_block"><?= __('Return Date') ?></td>
														<td><?php echo $this->Form->date('return_date',array(
															'label' => false,
															'class' => 'form-control maxW160 return_date'
														)) ?></td>
													</tr>
													<tr>
														<td class="td_first_block"><?= __('Return Status') ?></td>
														<td>
															<?php echo $this->Form->input('return_status_id',array(
																'label' => false,
																'type' => 'select',
																'options' => array('0'=> __('Not Yet'),'1'=> __('Already')),
																'class' => "form-control maxW160 return_status",
																'div' => false
															)); ?>
														</td>
													</tr>
												</tbody>
											</table>
											<button type="button" class="btn btn-default pull-right update_flight_btn" style="margin-top:-15px;"><span class=" fa fa-plane"></span> <?= __('Save') ?></button>
											<?php echo $this->Form->end(); ?>
										</div>
									</div>
								</div>

								<div class="col-lg-7 col-md-7 col-sm-7 maxW560">
									<div class="table-responsive">
										<?php echo $this->Form->create('Trainee', array(
											'class' => 'form_trainee_edit form_doc_chk',
											'action' => 'updateDocChkAjax',
											'inputDefaults' => array(
												'div' => false,
												)
										)); ?>
										<?php echo $this->Form->hidden('id'); ?>
										<table class="table table-bordered table-hover">
											<tbody>
												<tr>
													<td class="td_first_block"><?= __('Medical Checkup') ?></td>
													<td>
														<div class="row">
															<div class="form-group">
																<div class="col-lg-4 col-md-4 col-sm-4">
																	<?php echo $this->Form->input('medicalchk_status_id',array(
																		'label' => false,
																		'type' => 'select',
																		'options' => array('0'=> __('Not Yet'),'1'=> __('OK')),
																		'class' => "form-control maxW100 medicalchk_status_id",
																		'div' => false
																	)); ?>
																</div>
																<div class="col-lg-8 col-md-8 col-sm-8">
																	<?php echo $this->Form->input('medicalchk_note',array(
																		'label' => false,
																		'placeholder' => __('Note'),
																		'class' => 'form-control medicalchk_note'
																	)) ?>
																</div>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="td_first_block" rowspan="2"><?= __('ID Card') ?></td>
													<td>
														<div class="row">
															<div class="form-group">
																<div class="col-lg-4 col-md-4 col-sm-4">
																	<?php echo $this->Form->input('idcard_status_id',array(
																		'label' => false,
																		'type' => 'select',
																		'options' => array('0'=> __('Not Yet'),'1'=> __('OK')),
																		'class' => "form-control maxW100 idcard_status_id",
																		'div' => false
																	)); ?>
																</div>
																<div class="col-lg-8 col-md-8 col-sm-8">
																	<?php echo $this->Form->input('idcard_note',array(
																		'label' => false,
																		'placeholder' => __('Note'),
																		'class' => 'form-control idcard_note'
																	)) ?>
																</div>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="td_first_block">
														<div class="row">
															<div class="form-group">
																<div class="col-lg-4 col-md-4 col-sm-4">
																	<?php echo $this->Form->input('fb',array(
																		'label' => __('FB'),
																		'type' => 'select',
																		'options' => array('0'=> __('Not Yet'),'1'=> __('OK')),
																		'class' => "form-control maxW100 fb",
																		'div' => false
																	)); ?>
																</div>
																<div class="col-lg-4 col-md-4 col-sm-4">
																	<?php echo $this->Form->input('rb',array(
																		'label' => __('RB'),
																		'type' => 'select',
																		'options' => array('0'=> __('Not Yet'),'1'=> __('OK')),
																		'class' => "form-control maxW100 rb" ,
																		'div' => false
																	)); ?>
																</div>
																<div class="col-lg-4 col-md-4 col-sm-4">
																	<?php echo $this->Form->input('cb',array(
																		'label' => __('CB'),
																		'type' => 'select',
																		'options' => array('0'=> __('Not Yet'),'1'=> __('OK')),
																		'class' => "form-control maxW100 cb",
																		'div' => false
																	)); ?>
																</div>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="td_first_block"><?= __('Passport') ?></td>
													<td>
														<div class="row">
															<div class="form-group">
																<div class="col-lg-4 col-md-4 col-sm-4">
																	<?php echo $this->Form->input('passport_status_id',array(
																			'label' => false,
																			'type' => 'select',
																			'options' => array('0'=> __('Not Yet'),'1'=> __('OK')),
																			'class' => "form-control maxW100 passport_status_id",
																			'div' => false
																		)); ?>
																</div>
																<div class="col-lg-8 col-md-8 col-sm-8">
																	<?php echo $this->Form->input('passport_note',array(
																		'label' => false,
																		'placeholder' => __('Note'),
																		'class' => 'form-control passport_note'
																	)) ?>
																</div>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="td_first_block"><?= __('COE') ?></td>
													<td>
														<div class="row">
															<div class="form-group">
																<div class="col-lg-4 col-md-4 col-sm-4">
																	<?php echo $this->Form->input('coe_status_id',array(
																			'label' => false,
																			'type' => 'select',
																			'options' => array('0'=> __('Not Yet'),'1'=> __('OK')),
																			'class' => "form-control maxW100 coe_status_id",
																			'div' => false
																		)); ?>
																</div>
																<div class="col-lg-8 col-md-8 col-sm-8">
																	<?php echo $this->Form->input('coe_note',array(
																		'label' => false,
																		'placeholder' => __('Note'),
																		'class' => 'form-control coe_note'
																	)) ?>
																</div>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="td_first_block"><?= __('Immigration') ?></td>
													<td>
														<div class="row">
															<div class="form-group">
																<div class="col-lg-4 col-md-4 col-sm-4">
																	<?php echo $this->Form->input('immigration_status_id',array(
																			'label' => false,
																			'type' => 'select',
																			'options' => array('0'=> __('Not Yet'),'1'=> __('OK')),
																			'class' => "form-control maxW100 immigration_status_id",
																			'div' => false
																		)); ?>
																</div>
																<div class="col-lg-8 col-md-8 col-sm-8">
																	<?php echo $this->Form->input('immigration_note',array(
																		'label' => false,
																		'placeholder' => __('Note'),
																		'class' => 'form-control immigration_note'
																	)) ?>
																</div>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="td_first_block"><?= __('Labor Ministry') ?></td>
													<td>
														<div class="row">
															<div class="form-group">
																<div class="col-lg-4 col-md-4 col-sm-4">
																	<?php echo $this->Form->input('labor_ministry_status_id',array(
																			'label' => false,
																			'type' => 'select',
																			'options' => array('0'=> __('Not Yet'),'1'=> __('OK')),
																			'class' => "form-control maxW100 labor_ministry_status_id",
																			'div' => false
																		)); ?>
																</div>
																<div class="col-lg-8 col-md-8 col-sm-8">
																	<?php echo $this->Form->input('labor_ministry_note',array(
																		'label' => false,
																		'placeholder' => __('Note'),
																		'class' => 'form-control labor_ministry_note'
																	)) ?>
																</div>
															</div>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
										<button type="button" class="btn btn-default pull-right update_doc_chk_btn" style="margin-top:-15px;"><span class=" fa fa-file"></span> <?= __('Save') ?></button>
										<?php echo $this->Form->end(); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="main-box clearfix">
						<div class="tabs-wrapper profile-tabs">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#tab-profile" data-toggle="tab"><?= __('CV') ?></a></li>
								<li><a href="#tab-documents" data-toggle="tab"><?= __('Document') ?></a></li>
								<li><a href="#tab-interview" data-toggle="tab"><?= __('Interview') ?></a></li>
								<li><a href="#tab-finance" data-toggle="tab"><?= __('Finance') ?></a></li>
								<li><a href="#tab-chat" data-toggle="tab"><?= __('Voice') ?></a></li>
							</ul>

							<div class="tab-content">
								<div class="tab-pane fade in active" id="tab-profile">
									<div class="main-box clearfix">
										<div class="tabs-wrapper profile-tabs">
											<ul class="nav nav-tabs">
												<li class="active"><a href="#tab-profile-basic" data-toggle="tab"><?= __('Basic') ?></a></li>
												<li><a href="#tab-profile-personality" data-toggle="tab"><?= __('Personality') ?></a></li>
												<li><a href="#tab-profile-family" data-toggle="tab"><?= __('Family') ?></a></li>
												<li><a href="#tab-profile-career" data-toggle="tab"><?= __('Career') ?></a></li>
												<li><a href="#tab-profile-others" data-toggle="tab"><?= __('Others') ?></a></li>
											</ul>

											<div class="tab-content">
												<div class="tab-pane fade in active" id="tab-profile-basic">
													<div class="table-responsive maxW1200">
														<?php echo $this->Form->create('Trainee', array(
															'action' => 'updateBasicAjax',
															'class' => 'form_trainee_edit form_basic',
															'inputDefaults' => array(
																'div' => false,
																)
														)); ?>
														<?php echo $this->Form->hidden('id'); ?>
															<table class="table table-bordered table-hover">
																<thead>
																	<tr>
																		<th><span></span></th>
																		<th class="text-center maxW300"><span>日本語</span></th>
																		<th class="text-center maxW500"><span>English</span></th>
																		<th class="text-center maxW300"><span>Khmer</span></th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td class="td_first_block">
																			<?= __('Trainee ID') ?>
																		</td>
																		<td>
																			<?php echo $this->request->data['Trainee']['control_no'];?>
																		</td>
																		<td>

																		</td>
																		<td>

																		</td>
																	</tr>
																	<tr>
																		<td class="td_first_block">
																			<?= __('ID Number') ?>
																		</td>
																		<td>
																			<?php echo $this->Form->input('id_number',array(
																				'label' => false,
																				'class' => 'form-control maxW120 id_number'
																			)) ?>
																		</td>
																		<td>

																		</td>
																		<td>

																		</td>
																	</tr>
																	<tr>
																		<td class="td_first_block">
																			<?= __('Name') ?>
																		</td>
																		<td>
																			<div class="row">
																				<div class="col-lg-6 col-md-6 col-sm-6">
																					<label for="family_name_jp">名字</label>
																					<?php echo $this->Form->input('family_name_jp',array(
																						'label' => false,
																						'class' => 'form-control family_name_jp'
																					)) ?>
																				</div>
																				<div class="col-lg-6 col-md-6 col-sm-6">
																				<label for="given_name_jp">名前</label>
																					<?php echo $this->Form->input('given_name_jp',array(
																						'label' => false,
																						'class' => 'form-control given_name_jp'
																					)) ?>
																				</div>
																			</div>
																		</td>
																		<td>
																			<div class="row">
																				<div class="col-lg-6 col-md-6 col-sm-6">
																					<label for="family_name_en">Family Name</label>
																					<?php echo $this->Form->input('family_name_en',array(
																						'label' => false,
																						'class' => 'form-control maxW200 family_name_en'
																					)) ?>
																				</div>
																				<div class="col-lg-6 col-md-6 col-sm-6">
																					<label for="given_name_en">Given Name</label>
																					<?php echo $this->Form->input('given_name_en',array(
																						'label' => false,
																						'class' => 'form-control maxW200 given_name_en'
																					)) ?>
																				</div>
																			</div>
																		</td>
																		<td>
																			<div class="row">
																				<div class="col-lg-6 col-md-6 col-sm-6">
																					<label for="family_name_kh">Family Name(Khmer)</label>
																					<?php echo $this->Form->input('family_name_kh',array(
																						'label' => false,
																						'class' => 'form-control family_name_kh'
																					)) ?>
																				</div>
																				<div class="col-lg-6 col-md-6 col-sm-6">
																					<label for="given_name_kh">Given Name(Khmer)</label>
																					<?php echo $this->Form->input('given_name_kh',array(
																						'label' => false,
																						'class' => 'form-control given_name_kh'
																					)) ?>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td class="td_first_block">
																			<?= __('Introduced From') ?>
																		</td>
																		<td>

																		</td>
																		<td>
																			<?php echo $this->Form->input('introduced_from',array(
																				'label' => false,
																				'class' => 'form-control maxW160 introduced_from'
																			)) ?>
																		</td>
																		<td>
																		</td>
																	</tr>
																	<tr>
																		<td class="td_first_block">
																			<?= __('Sex') ?>
																		</td>
																		<td>
																			<?php if($this->request->data['Trainee']['sex']=='male'){echo "男";}
																				elseif($this->request->data['Trainee']['sex']=='female'){echo "女";};
																			?>
																		</td>
																		<td>
																			<div class="row">
																				<div class="col-lg-6 col-md-6 col-sm-6">
																					<?php echo $this->Form->input('sex', array(
																						'label' => false,
																						'class' => 'form-control maxW100 sex',
																						'type' => 'select',
																						'options' => array('male' => __('Male'), 'female' => __('Female'))
																					)) ?>
																				</div>
																			</div>
																		</td>
																		<td>
																		</td>
																	</tr>
																	<tr>
																		<td class="td_first_block">
																			<?= __('Birthday') ?>
																		</td>
																		<td>
																			<?php
																				$birthday = $this->request->data['Trainee']['birthday'];
																				$birthday_time = date('Y-m-d', strtotime($birthday));
																				list($y['y'], $m['m'], $d['d']) = explode('-', $birthday_time);
																				echo $y['y']."年".$m['m']."月" . $d['d'] ."日"."(".$this->Btn->calcAge($birthday)."歳".")";
																				?>
																		</td>
																		<td>
																			<div class="row">
																				<div class="col-lg-12 col-md-12 col-sm-12">
																					<?php echo $this->Form->date('birthday',array(
																						'label' => false,
																						'class' => 'form-control maxW200 birthday',
																					)) ?>
																				</div>
																			</div>
																		</td>
																		<td>

																		</td>
																	</tr>
																	<tr>
																		<td class="td_first_block">
																			<?= __('Marriage') ?>
																		</td>
																		<td>
																			<?php if($this->request->data['Trainee']['married']=='0'){echo "未婚";}
																				elseif($this->request->data['Trainee']['married']=='1'){echo "既婚";};
																			?>
																		</td>
																		<td>
																			<div class="row">
																				<div class="col-lg-12 col-md-12 col-sm-12">
																					<?php echo $this->Form->input('married', array(
																						'label' => false,
																						'class' => 'form-control maxW100 married',
																						'type' => 'select',
																						'options' => array('single' => __('Single'), 'married' => __('Married'))
																					)) ?>
																				</div>
																			</div>
																		</td>
																		<td>

																		</td>
																	</tr>
																	<tr>
																		<td class="td_first_block">
																			<?= __('Brothers') ?>
																		</td>
																		<td>

																		</td>
																		<td>
																			<div class="row">
																				<div class="form-group">
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<label class="" for="brother_cnt"><?= __('How many brothers?')?></label>
																						<?php echo $this->Form->input('brother_cnt',array(
																							'label' => false,
																							'class' => 'form-control brother_cnt'
																						)) ?>
																					</div>
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<label  class="" for="brother_index"><?= __('How manieth brother?')?></label>
																						<?php echo $this->Form->input('brother_index',array(
																							'label' => false,
																							'class' => 'form-control brother_index'
																						)) ?>
																					</div>
																				</div>
																			</div>
																		</td>
																		<td>

																		</td>
																	</tr>

																	<tr>
																		<td class="td_first_block">
																			<?= __('Birthplace') ?>
																		</td>
																		<td>

																		</td>
																		<td>
																			<div class="row">
																				<div class="form-group form-group-select2">
																					<div class="col-lg-12 col-md-12 col-sm-12">
																						<label for="TraineeBirthplaceProvinceId">Province</label>
																						<?php echo $this->Form->input('birthplace_province_id', array(
																							'label' => false,
																							'type' => 'select',
																							'div' => false,
																							'class' => 'form-control cam_province_id birthplace_province_id',
																							'value' => $this->request->data['Trainee']['birthplace_province_id'],
																							'options' => $option_provinces
																						)) ?>
																					</div>
																				</div>
																			</div>
																		</td>
																		<td>

																		</td>
																	</tr>
																	<tr>
																		<td class="td_first_block">
																			<?= __('Current Address') ?>
																		</td>
																		<td>
																			<div class="row">
																				<div class="col-lg-12 col-md-12 col-sm-12">
																					<div class="form-group">
																							<?php echo $province_en['CamPlaceDic']['place_jp']." 県 "; ?>
																							<?php echo $district_en['CamPlaceDic']['place_jp']." 市 "; ?>
																							<?php echo $commune_en['CamPlaceDic']['place_jp']." 地区"; ?>
																					</div>
																				</div>
																				<div class="col-lg-12 col-md-12 col-sm-12">
																					<div class="form-group">
																						<?php echo $this->Form->input('address_jp',array(
																							'label' => false,
																							'class' => 'form-control address_jp',
																							'placeholder' => '住所(地区以下、通り、番号、建物)'
																						)) ?>
																					</div>
																				</div>
																				<div class="col-lg-6 col-md-6 col-sm-6">
																					<div class="form-group">
																						<?php echo $this->Form->input('district_part_jp',array(
																							'label' => false,
																							'class' => 'form-control district_part_jp',
																							'placeholder' => '北部、中部、南部など'
																						)) ?>
																					</div>
																				</div>
																			</div>
																		</td>
																		<td>
																			<div class="row ">
																				<div class="col-lg-6 col-md-6 col-sm-6">
																					<div class="form-group ">
																						<label for="TraineeProvinceId">Province</label>
																						<?php echo $this->Form->input('province_id', array(
																							'label' => false,
																							'type' => 'select',
																							'div' => false,
																							'class' => 'form-control cam_province_id province_id',
																							'value' => $this->request->data['Trainee']['province_id'],
																							'options' => $option_provinces
																						)) ?>
																					</div>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-lg-6 col-md-6 col-sm-6">
																					<div class="form-group ">
																						<label for="TraineeDistrictId">District</label>
																						<?php echo $this->Form->input('district_id', array(
																							'label' => false,
																							'type' => 'select',
																							'div' => false,
																							'class' => 'form-control cam_district_id district_id',
																							'value' => $this->request->data['Trainee']['district_id'],
																							'options' => $option_districts
																						)) ?>
																					</div>
																				</div>
																				<div class="col-lg-6 col-md-6 col-sm-6">
																					<div class="form-group ">
																						<label for="TraineeCommuneId">Commune</label>
																						<?php echo $this->Form->input('commune_id', array(
																							'label' => false,
																							'type' => 'select',
																							'div' => false,
																							'class' => 'form-control cam_commune_id commune_id',
																							'value' => $this->request->data['Trainee']['commune_id'],
																							'options' => $option_communes
																						)) ?>
																						</select>
																					</div>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-lg-12 col-md-12 col-sm-12">
																					<div class="form-group">
																						<label for="addressEn">Address(No, Street, Village, English)</label>
																						<?php echo $this->Form->input('address_en',array(
																							'label' => false,
																							'class' => 'form-control address_en'
																						)) ?>
																					</div>
																				</div>
																				<div class="col-lg-6 col-md-6 col-sm-6">
																					<div class="form-group">
																						<label for="district_part">District Area</label>
																						<?php echo $this->Form->input('district_part_en',array(
																							'label' => false,
																							'class' => 'form-control district_part_en'
																						)) ?>
																					</div>
																				</div>
																			</div>
																		</td>
																		<td>
																			<div class="row">
																				<div class="form-group">
																					<div class="col-lg-12 col-md-12 col-sm-12">
																						<?php echo $this->Form->input('address_kh',array(
																							'label' => false,
																							'class' => 'form-control address_kh',
																							'placeholder' => __('Address(No, Street, Village, Khmer)')
																						)) ?>
																					</div>
																				</div>
																				<div class="form-group">
																					<div class="col-lg-12 col-md-12 col-sm-12">
																						<span style="font-size: 16px;">
																							<?php echo $commune_en['CamPlaceDic']['place_kh'].", "; ?>
																							<?php echo $district_en['CamPlaceDic']['place_kh'].", "; ?>
																							<?php echo $province_en['CamPlaceDic']['place_kh'].", "; ?>
																						</span>
																					</div>
																				</div>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td class="td_first_block">
																			<?= __('Phone') ?>
																		</td>
																		<td>
																		</td>
																		<td>
																			<?php echo $this->Form->input('phone',array(
																							'label' => false,
																							'class' => 'form-control maxW160 phone'
																						)) ?>
																		</td>
																		<td>

																		</td>
																	</tr>
																	<tr>
																		<td class="td_first_block">
																			<?= __('Languages') ?>
																		</td>
																		<td>
																			<p style="margin-bottom: 24px;">日本語 <?php if($this->request->data['Trainee']['english']==1){echo "、英語";} ?></p>
																			<?php echo $this->Form->input('lang_others_jp',array(
																							'label' => false,
																							'class' => 'form-control maxW160 lang_others_jp'
																						)) ?>
																			<label for="lang_others_jp"> その他</label>
																		</td>

																		<td>
																			<label>English
																				<?php echo $this->Form->checkbox('english', array(
																					'label' => false,
																					'value' => 1,
																					'selected' => $this->request->data['Trainee']['english'],
																					'class' => 'english'
																				)) ?>
																			</label>
																			<?php echo $this->Form->input('lang_others_en',array(
																				'label' => false,
																				'class' => 'form-control maxW160 lang_others_en'
																			)) ?>
																			<label for="lang_others_en"> others</label>

																		</td>
																		<td>

																		</td>
																	</tr>

																	<tr>
																		<td class="td_first_block">
																			<?= __('Facebook User ID') ?>
																		</td>
																		<td>
																			<a href="http://facebook.com/<?php echo $this->request->data['Trainee']['facebook'] ?>" target="_blank" ><?php echo $this->request->data['Trainee']['facebook'] ?></a>
																		</td>
																		<td>
																			<?php echo $this->Form->input('facebook',array(
																				'label' => false,
																				'class' => 'form-control maxW200 facebook',
																				'placeholder' => __('Enter Facebook User ID')
																			)) ?>
																		</td>
																		<td>
																		</td>
																	</tr>
																</tbody>
															</table>
															<div class="profile-message-btn center-block text-right">
																<button type="button" class="btn btn-default update_basic_btn">
																	<i class="fa fa-pencil"></i>
																	<?= __('Save') ?>
																</button>
															</div>
														<?php echo $this->Form->end(); ?>
													</div>

												</div>
												<div class="tab-pane fade" id="tab-profile-personality">
													<div class="table-responsive maxW960">
														<?php echo $this->Form->create('Trainee', array(
															'action' => 'updatePersonalityAjax',
															'class' => 'form_trainee_edit form_personality',
															'inputDefaults' => array(
																'div' => false,
																)
														)); ?>
														<?php echo $this->Form->hidden('id'); ?>
															<table class="table table-bordered table-hover">
																<thead>
																	<tr>
																		<th style="width:100px"></th>
																		<th style="width:100px"></th>
																		<th style="width:100px"></th>
																		<th style="width:100px"></th>
																		<th style="width:200px"></th>
																		<th style="width:100px"></th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td class="td_first_block">
																			<?php echo $this->Form->input('height',array(
																				'label' => __('Height(cm)'),
																				'class' => 'form-control maxW100 height'
																			)) ?>
																		</td>
																		<td>
																			<?php echo $this->Form->input('weight',array(
																				'label' => __('Weight(kg)'),
																				'class' => 'form-control maxW100 weight'
																			)) ?>
																		</td>
																		<td>
																			<?php echo $this->Form->input('shoe_size',array(
																				'label' => __('Shoe Size(cm)'),
																				'class' => 'form-control maxW100 shoe_size'
																			)) ?>
																		</td>
																		<td>
																			<?php echo $this->Form->input('handed',array(
																				'label' => __('Handedness'),
																				'class' => 'form-control maxW100 handed',
																				'type' => 'select',
																				'options' => array('right' => __('Right'), 'left' => __('Left'))
																			)) ?>
																		</td>
																		<td style="width:100px">
																			<div class="row">
																				<div class="form-group">
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<?php echo $this->Form->input('eyesight_left',array(
																							'label' => __('Eyesight Left'),
																							'class' => 'form-control maxW100 eyesight_left',
																						)) ?>
																					</div>
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<?php echo $this->Form->input('eyesight_right',array(
																							'label' => __('Eyesight right'),
																							'class' => 'form-control maxW100 eyesight_right',
																						)) ?>
																					</div>
																				</div>
																			</div>
																		</td>
																		<td style="width:150px">
																			<?php echo $this->Form->input('color_blindness',array(
																				'label' => __('Color Blindness'),
																				'class' => 'form-control maxW100 color_blindness',
																				'type' => 'select',
																				'options' => array('0' => __('Nothing'), '1' => __('Have'))
																			)) ?>
																		</td>
																	</tr>
																	<tr colspan="6">
																		<td class="td_first_block">
																			<?php echo $this->Form->input('blood_type',array(
																				'label' => __('Blood Type'),
																				'class' => 'form-control maxW100 blood_type',
																				'type' => 'select',
																				'options' => array('a' => __('A'), 'b' => __('B'), 'o' => __('O'), 'ab' => __('AB'))
																			)) ?>
																		</td>
																		<td>
																			<?php echo $this->Form->input('tatoo',array(
																				'label' => __('Tatoo'),
																				'class' => 'form-control maxW100 tatoo',
																				'type' => 'select',
																				'options' => array('0' => __('Nothing'), '1' => __('Have'))
																			)) ?>
																		</td>
																		<td>
																			<?php echo $this->Form->input('tabacco',array(
																				'label' => __('Tabacco'),
																				'class' => 'form-control maxW100 tabacco',
																				'type' => 'select',
																				'options' => array('0' => __('Nothing'), '1' => __('Have'))
																			)) ?>
																		</td>
																		<td>
																			<?php echo $this->Form->input('drink',array(
																				'label' => __('Alchole'),
																				'class' => 'form-control maxW100 drink',
																				'type' => 'select',
																				'options' => array('0' => __('Nothing'), '1' => __('Have'))
																			)) ?>
																		</td>

																		<td>
																			<?php echo $this->Form->input('experience_group_life',array(
																				'label' => __('Experience Group Life'),
																				'class' => 'form-control maxW100 experience_group_life',
																				'type' => 'select',
																				'options' => array('0' => __('Nothing'), '1' => __('Have'))
																			)) ?>
																		</td>
																		<td>
																			<div class="profile-message-btn center-block text-center">
																				<button type="button" class="btn btn-default update_personality_btn">
																					<i class="fa fa-pencil"></i>
																					<?= __('Save') ?>
																				</button>
																			</div>
																		</td>
																	</tr>
																</tbody>
															</table>
														<?php echo $this->Form->end(); ?>
													</div>
													<div class="table-responsive maxW960">
														<?php echo $this->Form->create('Trainee', array(
															'action' => 'updatePersonality2Ajax',
															'class' => 'form_trainee_edit form_personality_2',
															'inputDefaults' => array(
																'div' => false,
																)
														)); ?>
														<?php echo $this->Form->hidden('id'); ?>
															<table class="table table-bordered table-hover">
																<thead>
																	<tr>
																		<th style="width:200px;"><span></span></th>
																		<th class="text-center"><span>日本語</span></th>
																		<th class="text-center"><span>English</span></th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td class="td_first_block">
																			<?= __('Face Features') ?>
																		</td>
																		<td>
																			<?php echo $this->Form->input('face_feature_jp',array(
																							'label' => false,
																							'class' => 'form-control face_feature_jp'
																						)) ?>
																		</td>
																		<td>
																			<?php echo $this->Form->input('face_feature_en',array(
																							'label' => false,
																							'class' => 'form-control face_feature_en'
																						)) ?>
																		</td>

																	</tr>


																	<tr>
																		<td class="td_first_block">
																			<?= __('Health (Hepatitis B,AIDS)') ?>
																		</td>
																		<td>
																			<?php echo $this->Form->input('health_jp',array(
																							'label' => false,
																							'class' => 'form-control health_jp'
																						)) ?>
																		</td>
																		<td>
																			<?php echo $this->Form->input('health_en',array(
																							'label' => false,
																							'class' => 'form-control health_en'
																						)) ?>
																		</td>
																	</tr>


																	<tr>
																		<td class="td_first_block">
																			<?= __('Good Point') ?>
																		</td>
																		<td>
																			<?php echo $this->Form->input('good_point_jp',array(
																							'label' => false,
																							'class' => 'form-control good_point_jp'
																						)) ?>
																		</td>
																		<td>
																			<?php echo $this->Form->input('good_point_en',array(
																							'label' => false,
																							'class' => 'form-control good_point_en'
																						)) ?>
																		</td>
																	</tr>
																	<tr>
																		<td class="td_first_block">
																			<?= __('Bad Point') ?>
																		</td>
																		<td>
																			<?php echo $this->Form->input('bad_point_jp',array(
																							'label' => false,
																							'class' => 'form-control bad_point_jp'
																						)) ?>
																		</td>
																		<td>
																			<?php echo $this->Form->input('bad_point_en',array(
																							'label' => false,
																							'class' => 'form-control bad_point_en'
																						)) ?>
																		</td>
																	</tr>
																	<tr>
																		<td class="td_first_block">
																			<?= __('Hobby') ?>
																		</td>
																		<td>
																			<?php echo $this->Form->input('hobby_jp',array(
																							'label' => false,
																							'class' => 'form-control hobby_jp'
																						)) ?>
																		</td>
																		<td>
																			<?php echo $this->Form->input('hobby_en',array(
																							'label' => false,
																							'class' => 'form-control hobby_en'
																						)) ?>
																		</td>
																	</tr>
																	<tr>
																		<td class="td_first_block">
																			<?= __('Character') ?>
																		</td>
																		<td>
																			<?php echo $this->Form->input('character_jp',array(
																							'label' => false,
																							'class' => 'form-control character_jp'
																						)) ?>
																		</td>
																		<td>
																			<?php echo $this->Form->input('character_en',array(
																							'label' => false,
																							'class' => 'form-control character_en'
																						)) ?>
																		</td>
																	</tr>
																	<tr>
																		<td class="td_first_block">
																			<?= __('Specialty') ?>
																		</td>
																		<td>
																			<?php echo $this->Form->input('specialty_jp',array(
																							'label' => false,
																							'class' => 'form-control specialty_jp'
																						)) ?>
																		</td>
																		<td>
																			<?php echo $this->Form->input('specialty_en',array(
																							'label' => false,
																							'class' => 'form-control specialty_en'
																						)) ?>
																		</td>
																	</tr>
																	<tr>
																		<td class="td_first_block">
																			<?= __('Religious') ?>
																		</td>
																		<td>
																			<?php echo $this->Form->input('religious_jp',array(
																							'label' => false,
																							'class' => 'form-control religious_jp'
																						)) ?>
																		</td>
																		<td>
																			<?php echo $this->Form->input('religious_en',array(
																							'label' => false,
																							'class' => 'form-control religious_en'
																						)) ?>
																		</td>
																	</tr>
																</tbody>
															</table>
															<div class="profile-message-btn center-block text-right">
																<button type="button" class="btn btn-default update_personality_2_btn">
																	<i class="fa fa-pencil"></i>
																	<?= __('Save') ?>
																</button>
															</div>
														<?php echo $this->Form->end(); ?>
													</div>
												</div>

												<div class="tab-pane fade" id="tab-profile-family">
													<div class="row">
														<div class="col-lg-12 col-md-12 col-sm-12 maxW550">
															<div class="main-box">
																<header class="main-box-header clearfix">
																	<h2><?= __('Add Family') ?></h2>
																</header>
																<div class="main-box-body clearfix">
																	<?php echo $this->Form->create('TraineeFamily', array(
																		'action' => 'addAjax',
																		'class' => 'form_add_family',
																		'inputDefaults' => array(
																			'div' => false,
																			)
																	)); ?>
																	<?php echo $this->Form->hidden('trainee_id', array(
																		'value' => $this->request->data['Trainee']['id'],
																		'class' => 'family_trainee_id'
																		)); ?>
																		<div class="row">
																			<div class="form-group col-lg-3 col-md-3 col-sm-3" style="">
																				<label for="family_name_full" class=""><?= __('Full Name') ?></label>
																				<?php echo $this->Form->input('name',array(
																					'label' => false,
																					'class' => 'form-control maxW160 family_name',
																					'required' =>true
																				)) ?>
																			</div>

																			<div class="form-group col-lg-3 col-md-3 col-sm-3">
																				<label for="" class=""><?= __('Relationship') ?></label>
																				<?php echo $this->Form->input('relationship',array(
																					'label' => false,
																					'type' => 'select',
																					'options' => array(
																						'partner' => __('Partner'),
																						'father'				=>	__('Father'),
																						'mother'				=>	__('Mother'),
																						'child'					=>	__('Child'),
																						'brother'				=>	__('Brother'),
																						'sister'				=>	__('Sister'),
																						'young brother'	=>	__('Young Brother'),
																						'young sister'	=>	__('Young Sister'),
																						'grandfather'		=>	__('Grandfather'),
																						'grandmather'		=>	__('Grandmather'),
																						'grandchild'		=>	__('Grandchild'),
																						'father in law'	=>	__('Father in law'),
																						'mother in law'	=>	__('Mother in law'),
																						'uncle'					=>	__('Uncle'),
																						'aunt'					=>	__('Aunt'),
																						'nephew'				=>	__('Nephew'),
																						'niece'					=>	__('Niece')
																						 ),
																					'class' => "form-control maxW160 family_relationship",
																					'required' =>true
																				)); ?>
																			</div>
																			<div class="form-group col-lg-4 col-md-4 col-sm-4">
																				<label for="" class=""><?= __('Birthday') ?></label>
																				<div class="input-group">
																					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
																					<?php echo $this->Form->date('birthday', array(
																						'label' => false,
																						'div' => false,
																						'class' => 'form-control maxW160 family_birthday'
																					)) ?>
																				</div>
																			</div>
																		</div>
																		<div class="row">
																			<div class="form-group col-lg-3 col-md-3 col-sm-3">
																				<label for="" class=""><?= __('Phone') ?></label>
																				<?php echo $this->Form->input('phone', array(
																					'label' => false,
																					'class' => 'form-control maxW160 family_phone',
																				)) ?>
																			</div>
																			<div class="col-lg-8 col-md-8 col-sm-8">
																				<div class="form-group form-group-select2">
																					<?php echo $this->Form->input('job_id',array(
																						'label' => __('Job'),
																						'type' => 'select',
																						'value' => '',
																						'empty' => true,
																						'options' => $option_jobs,
																						'class' => "form-control sel_job_family family_job_id",
																						'div' => false,
																						'style' => 'width:200px;'
																					)); ?>

																		<button type="button" class="btn btn-success family_register_btn pull-right add_family_btn">
																			<i class="fa fa-plus-circle fa-lg"></i> <?= __('Add Family') ?>
																		</button>
																				</div>
																			</div>
																		</div>
																	<?php echo $this->Form->end(); ?>
																</div>
															</div>
														</div>
													</div>

													<div class="row">
														<div class="col-lg-12 col-md-12 col-sm-12 maxW600">
															<div class="table-responsive">
																<table class="table table-bordered table-hover">
																	<thead>
																		<tr>
																			<th class="maxW120"><?= __('Name') ?><span></span></th>
																			<th class="maxW100"><span><?= __('Relationship') ?></span></th>
																			<th class="maxW100"><span><?= __('Birthday(Age)') ?></span></th>
																			<th class="maxW100"><span><?= __('Job') ?></span></th>
																			<th class="maxW100"><span><?= __('Phone') ?></span></th>
																			<th class="maxW50"><span></span></th>
																		</tr>
																	</thead>
																	<tbody class="family_table">
																		<?php foreach ($trainee_families as $family) : ?>
																			<tr data-family-id="'.$family['TraineeFamily']['id'].'">
																				<td class="td_first_block">
																					<?php echo $family['TraineeFamily']['name'];?>
																				</td>
																				<td>
																					<?php echo $family['TraineeFamily']['relationship'];?>
																				</td>
																				<td>
																					<?php echo $family['TraineeFamily']['birthday']." (".$this->Btn->calcAge($family['TraineeFamily']['birthday']).")";?>
																				</td>
																				<td>
																					<?php echo $this->Btn->switchLang($lang, $family['Job']['job_jp'], $family['Job']['job_en']);?>
																				</td>
																				<td>
																					<?php echo $family['TraineeFamily']['phone'];?>
																				</td>
																				<td>
																					<div class="actions text-center">
																						<?php echo $this->Html->link(
																							'<i class="fa fa-pencil"></i>',
																							array('controller' => 'trainee_families', 'action' => 'edit',$family['TraineeFamily']['id']),
																							array('escape' => false, 'class' => 'table-link' )
																						);?>
																						<?php echo $this->Form->postlink(
																							'<i class="fa fa-trash-o"></i>',
																							array('controller' => 'trainee_families', 'action' => 'delete',$family['TraineeFamily']['id']),
																							array('confirm' => __('Are you sure you want to delete # %s?', $family['TraineeFamily']['id']),'escape' => false, 'class' => 'table-link red' )
																						);?>
																					</div>
																				</td>
																			</tr>
																		<?php endforeach; ?>
																		<tr data-family-id="" class="hide tmp_family_add">
																			<td class="name td_first_block">
																			</td>
																			<td class="relationship">
																			</td>
																			<td class="birthday">
																			</td>
																			<td class="job_id">
																			</td>
																			<td class="phone">
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
															</div>
														</div>
													</div>
													<div class="hide"><?php echo $this->Form->create('TraineeFamily', array(
															'action' => 'edit',
															'class' => 'hide family-edit-link'
														)) ?>
														<?php echo $this->Form->end(); ?>
														<?php echo $this->Form->create('TraineeFamily', array(
															'action' => 'delete',
															'class' => 'hide family-delete-link'
														)) ?>
														<?php echo $this->Form->end(); ?></div>
												</div>
												<div class="tab-pane fade" id="tab-profile-career">
													<div class="table-responsive maxW850">
														<?php echo $this->Form->create('Trainee', array(
															'action' => 'updateCareerAjax',
															'class' => 'form_trainee_edit form_career',
															'inputDefaults' => array(
																'div' => false,
																)
														)); ?>
														<?php echo $this->Form->hidden('id'); ?>
															<table class="table table-bordered table-hover">
																<thead>
																	<tr>
																		<th style="width:100px"><span></span></th>
																		<th class="text-center" style="width:300px"><span>日本語</span></th>
																		<th class="text-center" style="width:360px"><span>English</span></th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td rowspan="4" class="td_first_block">
																			<?= __('Academic History') ?>
																		</td>
																		<td class="td_first_block">
																			<?php echo $this->Form->input('academic1_jp',array(
																				'label' => '学校名',
																				'class' => 'form-control maxW250 academic1_jp'
																			)) ?>
																		</td>
																		<td>
																			<div class="form-group">
																				<div class="row">
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<label>From</label>
																						<input type="month" name="data[Trainee][academic1_from]" value="<?php echo $this->request->data['Trainee']['academic1_from']; ?>" class="form-control maxW200 academic1_from" id="TraineeAcademic1FromMonth">
																					</div>
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<label for="">To</label>
																						<input type="month" name="data[Trainee][academic1_to]" value="<?php echo $this->request->data['Trainee']['academic1_to']; ?>" class="form-control maxW200 academic1_to" id="TraineeAcademic1ToMonth">
																					</div>
																				</div>
																			</div>
																			<?php echo $this->Form->input('academic1_en',array(
																				'label' => 'Shool',
																				'class' => 'form-control maxW250 academic1_en'
																			)) ?>
																		</td>
																	</tr>
																	<tr>
																		<td class="td_first_block">
																			<?php echo $this->Form->input('academic2_jp',array(
																				'label' => '学校名',
																				'class' => 'form-control maxW250 academic2_jp'
																			)) ?>
																		</td>
																		<td>
																			<div class="form-group">
																				<div class="row">
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<label>From</label>
																						<input type="month" name="data[Trainee][academic2_from]" value="<?php echo $this->request->data['Trainee']['academic2_from']; ?>" class="form-control maxW200 academic2_from" id="TraineeAcademic2FromMonth">
																					</div>
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<label for="">To</label>
																						<input type="month" name="data[Trainee][academic2_to]" value="<?php echo $this->request->data['Trainee']['academic2_to']; ?>" class="form-control maxW200 academic2_to" id="TraineeAcademic2ToMonth">
																					</div>
																				</div>
																			</div>
																			<?php echo $this->Form->input('academic2_en',array(
																				'label' => 'Shool',
																				'class' => 'form-control maxW250 academic2_en'
																			)) ?>
																		</td>
																	</tr>
																	<tr>
																		<td class="td_first_block">
																			<?php echo $this->Form->input('academic3_jp',array(
																				'label' => '学校名',
																				'class' => 'form-control maxW250 academic3_jp'
																			)) ?>
																		</td>
																		<td>
																			<div class="form-group">
																				<div class="row">
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<label>From</label>
																						<input type="month" name="data[Trainee][academic3_from]" value="<?php echo $this->request->data['Trainee']['academic3_from']; ?>" class="form-control maxW200 academic3_from" id="TraineeAcademic3FromMonth">
																					</div>
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<label for="">To</label>
																						<input type="month" name="data[Trainee][academic3_to]" value="<?php echo $this->request->data['Trainee']['academic3_to']; ?>" class="form-control maxW200 academic3_to" id="TraineeAcademic3ToMonth">
																					</div>
																				</div>
																			</div>
																			<?php echo $this->Form->input('academic3_en',array(
																				'label' => 'Shool',
																				'class' => 'form-control maxW250 academic3_en'
																			)) ?>
																		</td>
																	</tr>
																	<tr>
																		<td class="td_first_block">
																			<?php echo $this->Form->input('academic4_jp',array(
																				'label' => '学校名',
																				'class' => 'form-control maxW250 academic4_jp'
																			)) ?>
																		</td>
																		<td>
																			<div class="form-group">
																				<div class="row">
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<label>From</label>
																						<input type="month" name="data[Trainee][academic4_from]" value="<?php echo $this->request->data['Trainee']['academic4_from']; ?>" class="form-control maxW200 academic4_from" id="TraineeAcademic4FromMonth">
																					</div>
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<label for="">To</label>
																						<input type="month" name="data[Trainee][academic4_to]" value="<?php echo $this->request->data['Trainee']['academic4_to']; ?>" class="form-control maxW200 academic4_to" id="TraineeAcademic4ToMonth">
																					</div>
																				</div>
																			</div>
																			<?php echo $this->Form->input('academic4_en',array(
																				'label' => 'Shool',
																				'class' => 'form-control maxW250 academic4_en'
																			)) ?>
																		</td>
																	</tr>
																	<tr>
																		<td rowspan="5" class="td_first_block">
																			<?= __('Employment History') ?>
																		</td>
																		<td class="td_first_block">
																			<div class="form-group">
																				<div class="row">
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<?php echo $this->Form->input('employ1_jp',array(
																							'label' => '会社名',
																							'class' => 'form-control maxW200 employ1_jp'
																						)) ?>
																					</div>
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<?php echo $this->Form->input('employ1_salary',array(
																							'label' => __('Basic Salary'),
																							'class' => 'form-control maxW100 employ1_salary'
																						)) ?>
																					</div>
																				</div>
																			</div>
																			<div class="form-group">
																				<div class="row">
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<label><?= __('Job') ?></label>
																							<?php echo $this->Form->input('employ1_job',array(
																								'label' => false,
																								'div' => false,
																								'class' => 'form-control sel_job employ1_job',
																								'options' => $option_jobs,
																								'empty' => true,
																								'value' => $this->request->data['Trainee']['employ1_job'],
																								'style' => 'width:100%'
																							)) ?>
																					</div>

																				</div>
																			</div>
																		</td>
																		<td>
																			<div class="form-group">
																				<div class="row">
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<label for="">From</label>
																						<input type="month" name="data[Trainee][employ1_from]" value="<?php echo $this->request->data['Trainee']['employ1_from']; ?>" class="form-control employ1_from" id="TraineeEmploy1FromMonth">
																					</div>
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<label for="">To</label>
																						<input type="month" name="data[Trainee][employ1_to]" value="<?php echo $this->request->data['Trainee']['employ1_to']; ?>" class="form-control employ1_to" id="TraineeEmploy1ToMonth">
																					</div>
																				</div>
																			</div>
																			<div class="form-group">
																				<div class="row">
																					<div class="col-lg-12 col-md-12 col-sm-12">
																						<?php echo $this->Form->input('employ1_en',array(
																							'label' => 'Company',
																							'class' => 'form-control maxW250 employ1_en'
																						)) ?>
																					</div>
																				</div>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td class="td_first_block">
																			<div class="form-group">
																				<div class="row">
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<?php echo $this->Form->input('employ2_jp',array(
																							'label' => '会社名',
																							'class' => 'form-control maxW200 employ2_jp'
																						)) ?>
																					</div>
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<?php echo $this->Form->input('employ2_salary',array(
																							'label' => __('Basic Salary'),
																							'class' => 'form-control maxW100 maxW100 employ2_salary'
																						)) ?>
																					</div>
																				</div>
																			</div>
																			<div class="form-group">
																				<div class="row">
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<label><?= __('Job') ?></label>
																							<?php echo $this->Form->input('employ2_job',array(
																								'label' => false,
																								'div' => false,
																								'class' => 'form-control sel_job employ2_job',
																								'options' => $option_jobs,
																								'empty' => true,
																								'value' => $this->request->data['Trainee']['employ2_job'],
																								'style' => 'width:100% employ2_job'
																							)) ?>
																					</div>

																				</div>
																			</div>
																		</td>
																		<td>
																			<div class="form-group">
																				<div class="row">
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<label for="">From</label>
																						<input type="month" name="data[Trainee][employ2_from]" value="<?php echo $this->request->data['Trainee']['employ2_from']; ?>" class="form-control employ2_from" id="TraineeEmploy2FromMonth">
																					</div>
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<label for="">To</label>
																						<input type="month" name="data[Trainee][employ2_to]" value="<?php echo $this->request->data['Trainee']['employ2_to']; ?>" class="form-control employ2_to" id="TraineeEmploy2ToMonth">
																					</div>
																				</div>
																			</div>
																			<div class="form-group">
																				<div class="row">
																					<div class="col-lg-12 col-md-12 col-sm-12">
																			<?php echo $this->Form->input('employ2_en',array(
																				'label' => 'Company',
																				'class' => 'form-control maxW250 employ2_en'
																			)) ?>
																			</div>
																			</div>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td class="td_first_block">
																			<div class="form-group">
																				<div class="row">
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<?php echo $this->Form->input('employ3_jp',array(
																							'label' => '会社名',
																							'class' => 'form-control maxW200 employ3_jp'
																						)) ?>
																					</div>
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<?php echo $this->Form->input('employ3_salary',array(
																							'label' => __('Basic Salary'),
																							'class' => 'form-control maxW100 employ3_salary'
																						)) ?>
																					</div>
																				</div>
																			</div>
																			<div class="form-group">
																				<div class="row">
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<label><?= __('Job') ?></label>
																							<?php echo $this->Form->input('employ3_job',array(
																								'label' => false,
																								'div' => false,
																								'class' => 'form-control sel_job employ3_job',
																								'options' => $option_jobs,
																								'empty' => true,
																								'value' => $this->request->data['Trainee']['employ3_job'],
																								'style' => 'width:100%'
																							)) ?>
																					</div>

																				</div>
																			</div>
																		</td>
																		<td>
																			<div class="form-group">
																				<div class="row">
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<label for="">From</label>
																						<input type="month" name="data[Trainee][employ3_from]" value="<?php echo $this->request->data['Trainee']['employ3_from']; ?>" class="form-control employ3_from" id="TraineeEmploy3FromMonth">
																					</div>
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<label for="">To</label>
																						<input type="month" name="data[Trainee][employ3_to]" value="<?php echo $this->request->data['Trainee']['employ3_to']; ?>" class="form-control employ3_to" id="TraineeEmploy3ToMonth">
																					</div>
																				</div>
																			</div>
																			<div class="form-group">
																				<div class="row">
																					<div class="col-lg-12 col-md-12 col-sm-12">
																			<?php echo $this->Form->input('employ3_en',array(
																				'label' => 'Company',
																				'class' => 'form-control maxW250 employ3_en'
																			)) ?>
																			</div>
																			</div>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td class="td_first_block">
																			<div class="form-group">
																				<div class="row">
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<?php echo $this->Form->input('employ4_jp',array(
																							'label' => '会社名',
																							'class' => 'form-control maxW200 employ4_jp'
																						)) ?>
																					</div>
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<?php echo $this->Form->input('employ4_salary',array(
																							'label' => __('Basic Salary'),
																							'class' => 'form-control maxW100 employ4_salary'
																						)) ?>
																					</div>
																				</div>
																			</div>
																			<div class="form-group">
																				<div class="row">
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<label><?= __('Job') ?></label>
																							<?php echo $this->Form->input('employ4_job',array(
																								'label' => false,
																								'div' => false,
																								'class' => 'form-control sel_job employ4_job',
																								'options' => $option_jobs,
																								'empty' => true,
																								'value' => $this->request->data['Trainee']['employ4_job'],
																								'style' => 'width:100%'
																							)) ?>
																					</div>

																				</div>
																			</div>
																		</td>
																		<td>
																			<div class="form-group">
																				<div class="row">
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<label for="">From</label>
																						<input type="month" name="data[Trainee][employ4_from]" value="<?php echo $this->request->data['Trainee']['employ4_from']; ?>" class="form-control employ4_from"  id="TraineeEmploy4FromMonth">
																					</div>
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<label for="">To</label>
																						<input type="month" name="data[Trainee][employ4_to]" value="<?php echo $this->request->data['Trainee']['employ4_to']; ?>" class="form-control employ4_to" id="TraineeEmploy4ToMonth">
																					</div>
																				</div>
																			</div>
																			<div class="form-group">
																				<div class="row">
																					<div class="col-lg-12 col-md-12 col-sm-12">
																			<?php echo $this->Form->input('employ4_en',array(
																				'label' => 'Company',
																				'class' => 'form-control maxW250 employ4_en'
																			)) ?>
																			</div>
																			</div>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td class="td_first_block">
																			<div class="form-group">
																				<div class="row">
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<?php echo $this->Form->input('employ5_jp',array(
																							'label' => '会社名',
																							'class' => 'form-control maxW200 employ5_jp'
																						)) ?>
																					</div>
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<?php echo $this->Form->input('employ5_salary',array(
																							'label' => __('Basic Salary'),
																							'class' => 'form-control maxW100 employ5_salary'
																						)) ?>
																					</div>
																				</div>
																			</div>
																			<div class="form-group">
																				<div class="row">
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<label><?= __('Job') ?></label>
																							<?php echo $this->Form->input('employ5_job',array(
																								'label' => false,
																								'div' => false,
																								'class' => 'form-control sel_job employ5_job',
																								'options' => $option_jobs,
																								'empty' => true,
																								'value' => $this->request->data['Trainee']['employ5_job'],
																								'style' => 'width:100%'
																							)) ?>
																					</div>

																				</div>
																			</div>
																		</td>
																		<td>
																			<div class="form-group">
																				<div class="row">
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<label for="">From</label>
																						<input type="month" name="data[Trainee][employ5_from]" value="<?php echo $this->request->data['Trainee']['employ5_from']; ?>" class="form-control employ5_from" id="TraineeEmploy5FromMonth">
																					</div>
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<label for="">To</label>
																						<input type="month" name="data[Trainee][employ5_to]" value="<?php echo $this->request->data['Trainee']['employ5_to']; ?>" class="form-control employ5_to" id="TraineeEmploy5ToMonth">
																					</div>
																				</div>
																			</div>
																			<div class="form-group">
																				<div class="row">
																					<div class="col-lg-12 col-md-12 col-sm-12">
																			<?php echo $this->Form->input('employ5_en',array(
																				'label' => 'Company',
																				'class' => 'form-control maxW250 employ5_en'
																			)) ?>
																			</div>
																			</div>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td rowspan="2" class="td_first_block">
																			<?= __('Positions Held') ?>
																		</td>
																		<td>
																			<?php echo $job1['Job1']['job_jp']; ?> 職 <?php echo $this->request->data['Trainee']['job1_term'] ?>年
																		</td>
																		<td>
																			<div class="form-group">
																				<div class="col-lg-6 col-md-6 col-sm-6">
																					<label><?= __('Job') ?></label>
																						<?php echo $this->Form->input('job1_id',array(
																							'label' => false,
																							'div' => false,
																							'class' => 'form-control sel_job job1_id',
																							'options' => $option_jobs,
																							'empty' => true,
																							'value' => $this->request->data['Trainee']['job1_id'],
																							'style' => 'width:100%'
																						)) ?>
																				</div>
																				<div class="col-lg-3 col-md-3 col-sm-3">
																					<label for="">For</label>
																						<?php echo $this->Form->input('job1_term',array(
																							'label' => false,
																							'class' => 'form-control job1_term'
																						)) ?> Year(s)
																				</div>

																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td class="td_first_block">
																			<?php echo $job2['Job2']['job_jp']; ?> 職 <?php echo $this->request->data['Trainee']['job2_term'] ?>年
																		</td>
																		<td>
																			<div class="form-group">
																				<div class="col-lg-6 col-md-6 col-sm-6">
																					<label><?= __('Job') ?></label>
																						<?php echo $this->Form->input('job2_id',array(
																							'label' => false,
																							'div' => false,
																							'class' => 'form-control sel_job job2_id',
																							'options' => $option_jobs,
																							'empty' => true,
																							'value' => $this->request->data['Trainee']['job2_id'],
																							'style' => 'width:100%'
																						)) ?>
																				</div>
																				<div class="col-lg-3 col-md-3 col-sm-3">
																					<label for="">For</label>
																					<?php echo $this->Form->input('job2_term',array(
																							'label' => false,
																							'class' => 'form-control job2_term'
																						)) ?> Year(s)
																				</div>

																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td class="td_first_block">
																			<?= __('Visit Japan') ?>
																		</td>
																		<td>
																			<?php if($this->request->data['Trainee']['visit_jpn'] == 0) {echo '無';}else{echo '有';} ?>
																			<?php
																				$from = $this->request->data['Trainee']['visit_jpn_from'];
																				$to = $this->request->data['Trainee']['visit_jpn_to'];
																				$term = array($from, $to);
																				if($from && $to){
																					for ($i=0; $i < 2; $i++) {
																						$term[$i] = date('Y-m-d', strtotime($term[$i]));
																						list($y[$i], $m[$i]) = explode('-', $term[$i]);
																					}
																					echo $y[0]."年".$m[0]."月 ～ ".$y[1]."年".$m[1]."月";
																				}
																			?>
																		</td>
																		<td>
																			<div class="row">
																				<div class="col-lg-6 col-md-6 col-sm-6">
																					<div class="form-group">
																						<?php echo $this->Form->input('visit_jpn',array(
																							'label' => __('Have you been to Japan?'),
																							'type' => 'select',
																							'options' => array('0'=> __('No'),'1'=> __('I have')),
																							'class' => "form-control maxW100 visit_jpn",
																							'div' => false
																						)); ?>
																					</div>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-lg-6 col-md-6 col-sm-6">
																					<label for="">From</label>
																					<input type="month" name="data[Trainee][visit_jpn_from]" value="<?php echo $this->request->data['Trainee']['visit_jpn_from']; ?>" class="form-control visit_jpn_from" id="TraineeVisitJpnFromMonth">
																				</div>
																				<div class="col-lg-6 col-md-6 col-sm-6">
																					<label for="">To</label>
																					<input type="month" name="data[Trainee][visit_jpn_to]" value="<?php echo $this->request->data['Trainee']['visit_jpn_to']; ?>" class="form-control visit_jpn_to" id="TraineeVisitJpnToMonth">
																				</div>
																			</div>
																		</td>
																	</tr>
																</tbody>
															</table>
															<div class="profile-message-btn center-block text-right">
																<button type="button" class="btn btn-default update_career_btn">
																	<i class="fa fa-pencil"></i>
																	<?= __('Save') ?>
																</button>
															</div>
														<?php echo $this->Form->end(); ?>
													</div>
												</div>
												<div class="tab-pane fade" id="tab-profile-others">
													<div class="table-responsive maxW900">
														<?php echo $this->Form->create('Trainee', array(
															'action' => 'updateOthersAjax',
															'class' => 'form_trainee_edit form_others',
															'inputDefaults' => array(
																'div' => false,
																)
														)); ?>
														<?php echo $this->Form->hidden('id'); ?>
															<table class="table table-bordered table-hover">
																<thead>
																	<tr>
																		<th ><span></span></th>
																		<th class="text-center"><span>日本語</span></th>
																		<th class="text-center"><span>English</span></th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td class="td_first_block">
																			<?= __('Purpose to visit Japan') ?>
																		</td>
																		<td>
																			<?php echo $this->Form->textarea('purpose_jp',array(
																				'rows' => '3',
																				'class' => 'form-control purpose_jp' ,
																				'label' => false
																			)) ?>
																		</td>
																		<td>
																			<?php echo $this->Form->textarea('purpose_en',array(
																				'rows' => '3',
																				'class' => 'form-control purpose_en',
																				'label' => false
																			)) ?>
																		</td>
																	</tr>
																	<tr>
																		<td class="td_first_block">
																			<?= __('Family, Brother or Friend in Japan') ?>
																		</td>
																		<td>
																			<div class="col-lg-6 col-md-6 col-sm-6">
																				<?php if($this->request->data['Trainee']['family_in_jpn'] == 0) {echo '無';}else{echo '有';} ?>
																			</div>
																			<div class="col-lg-6 col-md-6 col-sm-6">
																				<?php echo sprintf(__('%s'),$this->request->data['Trainee']['family_in_jpn_relationship_en']); ?>
																			</div>
																		</td>
																		<td>
																			<div class="row">
																				<div class="col-lg-6 col-md-6 col-sm-6">
																					<?php echo $this->Form->input('family_in_jpn',array(
																						'label' => __("Any acquaintances?"),
																						'type' => 'select',
																						'options' => array('0'=> __('Nothing'),'1'=> __('Have')),
																						'class' => "form-control maxW100 family_in_jpn",
																						'div' => false
																					)); ?>
																				</div>
																				<div class="col-lg-6 col-md-6 col-sm-6">
																					<label for="" class=""><?= __('Relationship') ?></label>
																						<?php echo $this->Form->input('family_in_jpn_relationship_en',array(
																							'label' => false,
																							'type' => 'select',
																							'options' => array(
																								'partner' => __('Partner'),
																								'father'				=>	__('Father'),
																								'mother'				=>	__('Mother'),
																								'child'					=>	__('Child'),
																								'brother'				=>	__('Brother'),
																								'sister'				=>	__('Sister'),
																								'young brother'	=>	__('Young Brother'),
																								'young sister'	=>	__('Young Sister'),
																								'grandfather'		=>	__('Grandfather'),
																								'grandmather'		=>	__('Grandmather'),
																								'grandchild'		=>	__('Grandchild'),
																								'father in law'	=>	__('Father in law'),
																								'mother in law'	=>	__('Mother in law'),
																								'uncle'					=>	__('Uncle'),
																								'aunt'					=>	__('Aunt'),
																								'nephew'				=>	__('Nephew'),
																								'niece'					=>	__('Niece'),
																								'friend'				=> __('Friend')
																								 ),
																							'class' => "form-control maxW160 family_in_jpn_relationship_en",
																							'empty' => true,
																							'required' =>true
																						)); ?>
																				</div>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td  class="td_first_block"><?= __('Plan after return') ?></td>
																		<td>
																			<?php echo $this->Form->textarea('plan_after_return_jp',array(
																				'rows' => '2',
																				'class' => 'form-control plan_after_return_jp',
																				'label' => false
																			)) ?>
																		</td>
																		<td>
																			<?php echo $this->Form->textarea('plan_after_return_en',array(
																				'rows' => '2',
																				'class' => 'form-control plan_after_return_en',
																				'label' => false
																			)) ?>
																		</td>
																	</tr>
																	<tr>
																		<td  class="td_first_block"><?= __('Save money in 3 years') ?></td>
																		<td>
																			<?php echo $this->Form->input('saving_money',array(
																				'class' => 'form-control saving_money',
																				'label' => false,
																				'style' => 'width:100px;display:inline'
																			)) ?> 万円
																		</td>
																		<td></td>
																	</tr>
																	<tr>
																		<td  class="td_first_block"><?= __('Current Status after return') ?></td>
																		<td>
																			<?php echo $this->Form->textarea('status_after_return_jp',array(
																				'rows' => '3',
																				'class' => 'form-control status_after_return_jp',
																				'label' => false
																			)) ?>
																		</td>
																		<td>
																			<?php echo $this->Form->textarea('status_after_return_en',array(
																				'rows' => '3',
																				'class' => 'form-control status_after_return_en',
																				'label' => false
																			)) ?>
																		</td>
																	</tr>
																</tbody>
															</table>
															<div class="profile-message-btn center-block text-right">
																<button type="button" class="btn btn-default update_others_btn">
																	<i class="fa fa-pencil"></i>
																	<?= __('Save') ?>
																</button>
															</div>

														<?php echo $this->Form->end(); ?>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="tab-pane fade" id="tab-documents">
									<div id="documents">

										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 maxW360">
												<div class="main-box clearfix">
													<header class="main-box-header clearfix">
														<h2><?= __('Trainee\'s Documents') ?></h2>
													</header>

													<div class="main-box-body clearfix">
														<div id="" class="main-box-body">
															<?php
																echo $this->Form->create('TraineeDocument', array(
																			'action' => 'add',
																			'type' => 'file',
																			'class' => 'form_trainee_document'
																			));
															?>
															<?php echo $this->Form->hidden('TraineeDocument.trainee_id', array('value' => $this->request->data['Trainee']['id'])); ?>
															<?php echo $this->Form->hidden('TraineeDocument.trainee_control_no', array('value' => $this->request->data['Trainee']['control_no'])); ?>
															<div class="form-group">
																<label><?= __('Choose Upload Document Image') ?></label>
																<?php echo $this->Form->file('TraineeDocument.img', array(
																		'required' => true,
																		'style'=>'cursor:pointer',
																		'class' => 'validate[checkFileType[jpg|jpeg|gif|png|pdf]]'
																));?>
																<?php echo $this->Form->error('Image.img') ?>
															</div>
															<div class="form-group">
																<?php echo $this->Form->input('doc_name_jp', array(
																	'class' => 'form-control',
																	'label' => __('Document Name_Japanese'),
																	'required' => true));
																?>
															</div>
															<div class="form-group">
																<?php echo $this->Form->input('doc_name_en', array(
																	'class' => 'form-control',
																	'label' => __('Document Name_English'),
																	'required' => true));
																?>
															</div>
															<button type="submit" class="btn btn-success upload_doc_btn">
																<i class="fa fa-cloud-upload"></i>
																<?= __('Upload Document') ?>
															</button>
															<?php echo $this->Form->end(); ?>
														</div>
													</div>
												</div>
											</div>

											<div class="col-lg-6 col-md-6 col-sm-6 maxW500">
												<div class="main-box clearfix">
													<div class="main-box-body">
														<div class="table-responsive story-images">
															<table class="table table-striped table-hover">
																<thead>
																	<tr>
																		<th><span><?= __('File Name') ?></span></th>
																		<th><span></span></th>
																	</tr>
																</thead>
																<tbody>
																	<?php if(!empty($doc_imgs[0]['DocImg']['id'])) : ?>
																	<?php foreach ($doc_imgs as $doc) : ?>
																		<tr>
																			<td class="td_first_block">
																				<?php echo $doc['DocImg']['doc_name_jp']."<br>".$doc['DocImg']['doc_name_en'];?>
																			</td>
																			<td class="text-center">
																				<?php echo $this->Html->link('<i class="fa fa-eye fa-lg"></i>',
																					'/img/trainee_documents/'.$doc["DocImg"]["img_file_name"],
																					array('class' => 'table-link popup', 'alt' => 'Show Image', 'escape' => false)
																				) ?>
																				<!-- <a href="<?php //$_SERVER["HTTP_HOST"]; ?>/dev/img/trainee_documents/<?php //echo $doc['DocImg']['img_file_name']?>" class="table-link popup" alt="Show Image"><i class="fa fa-eye fa-lg"></i>
																				</a> -->
																				<?php echo $this->Html->link(
																					'<i class="fa fa-pencil"></i>',
																					array(
																						'controller' => 'trainee_documents', 'action'=> 'edit', $doc['DocImg']['id']
																						),
																					array(
																						'escape' => false, 'class' => 'table-link'
																						)
																					);?>
																				<?php echo $this->Form->postlink(
																				'<i class="fa fa-trash-o"></i>',
																				array(
																					'controller' => 'trainee_documents', 'action' => 'delete',$doc['DocImg']['id']
																					),
																				array(
																					'confirm' => __('Are you sure you want to delete # %s?', $doc['DocImg']['id']),'escape' => false, 'class' => 'table-link red'
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


								<div class="tab-pane fade" id="tab-interview">

										<div class="table-responsive maxW600">
											<table class="table table-bordered">
												<thead>
													<tr>
														<th class="text-center" ><span><?= __('Interview Date') ?></span></th>
														<th class="text-center"><span><?= __('Company(Association)') ?></span></th>
														<th class="text-center" ><span><?= __('Result'); ?></span></th>
													</tr>
												</thead>
												<tbody>
													<?php if($int_results[0]['Interview']['id']):?>
														<?php foreach ($int_results as $res) : ?>
															<tr>
																<td class="td_first_block">
																	<?php echo $res['Interview']['interview_date'] . " " . $res['Interview']['interview_time'];?>
																	<?php echo $this->Html->link(
																		__(' Interview Detail Page'),
																		array('controller' => 'interviews', 'action' => 'profile',$res['Interview']['id']),
																		array('escape' => false, 'class' => '', 'target' => '_blank')
																	);?>
																</td>
																<td>
																	<?php echo $this->Btn->switchLang($lang, $res['Company']['company_jp'], $res['Company']['company_en']) . " (" . $this->Btn->switchLang($lang, $res['Association']['association_jp'], $res['Association']['association_en']) . " )";?>
																</td>
																<td>
																	<?php echo $this->Btn->switchLang($lang, $res['InterviewResultAlias']['result_jp'],$res['InterviewResultAlias']['result_en']);?>
																</td>
															</tr>
														<?php endforeach; ?>
													<?php endif; ?>
												</tbody>
											</table>
										</div>

								</div>
								<div class="tab-pane fade" id="tab-finance">
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
																								'class' => ' validate[checkFileType[jpg|jpeg|gif|png|pdf]]'));
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
																		<?php echo $this->Html->link(
																			'<i class="fa fa-pencil"></i>',
																			array('controller' => 'trainee_voices', 'action' => 'edit',$voice['TraineeVoice']['id']),
																			array('escape' => false, 'class' => 'table-link' )
																		);?>
																		<?php echo $this->Form->postlink(
																			'<i class="fa fa-trash-o"></i>',
																			array('controller' => 'trainee_voices', 'action' => 'delete',$voice['TraineeVoice']['id']),
																			array('confirm' => __('Are you sure you want to delete # %s?', $voice['TraineeVoice']['id']),'escape' => false, 'class' => 'table-link red' )
																		);?>
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

			//Flight Ajax Update
			$('.update_flight_btn').on('click', function(){
        var url                 = $('.form_flight').attr('action');
        var departure_date      = $('.departure_date').val();
        var departure_status_id = $('.departure_status').val();
        var return_date         = $('.return_date').val();
        var return_status_id    = $('.return_status').val();

				$.ajax({
					url:url,
					type:'POST',
					dataType:'json',
					data:{
						id:id,
						departure_date:departure_date,
						departure_status_id:departure_status_id,
						return_date:return_date,
						return_status_id:return_status_id
					}, success:function(){
						swal("<?= __('Saved!') ?>", "", "success")
					}, error:function(){
						swal("<?= __('Error!') ?>", "", "error")
					}
				});
			});

			//Doc Chk Ajax update
			$('.update_doc_chk_btn').on('click', function(){
        var url                       = $('.form_doc_chk').attr('action');
        var medicalchk_status_id      = $('.medicalchk_status_id').val();
        var medicalchk_note           = $('.medicalchk_note').val();
        var idcard_status_id          = $('.idcard_status_id').val();
        var idcard_note               = $('.idcard_note').val();
        var fb                        = $('.fb').val();
        var rb                        = $('.rb').val();
        var cb                        = $('.cb').val();
        var passport_status_id        = $('.passport_status_id').val();
        var passport_note             = $('.passport_note').val();
        var coe_status_id             = $('.coe_status_id').val();
        var coe_note                  = $('.coe_note').val();
        var immigration_status_id     = $('.immigration_status_id').val();
        var immigration_note          = $('.immigration_note').val();
        var labor_ministry_status_id  = $('.labor_ministry_status_id').val();
        var labor_ministry_note       = $('.labor_ministry_note').val();


				$.ajax({
					url:url,
					type:'POST',
					dataType:'json',
					data:{
						id:id,
						medicalchk_status_id:medicalchk_status_id,
						medicalchk_note:medicalchk_note,
						idcard_status_id:idcard_status_id,
						idcard_note:idcard_note,
						fb:fb,
						rb:rb,
						cb:cb,
						passport_status_id:passport_status_id,
						passport_note:passport_note,
						coe_status_id:coe_status_id,
						coe_note:coe_note,
						immigration_status_id:immigration_status_id,
						immigration_note:immigration_note,
						labor_ministry_status_id:labor_ministry_status_id,
						labor_ministry_note:labor_ministry_note,
					}, success:function(){
						swal("<?= __('Saved!') ?>", "", "success")
					}, error:function(){
						swal("<?= __('Error!') ?>", "", "error")
					}
				});
			});

			//Basic Ajax update
			$('.update_basic_btn').on('click', function(){
        var url                    = $('.form_basic').attr('action');
        var id_number              = $('.id_number').val();
        var family_name_jp         = $('.family_name_jp').val();
        var given_name_jp          = $('.given_name_jp').val();
        var family_name_en         = $('.family_name_en').val();
        var given_name_en          = $('.given_name_en').val();
        var family_name_kh         = $('.family_name_kh').val();
        var given_name_kh          = $('.given_name_kh').val();
        var introduced_from        = $('.introduced_from').val();
        var sex                    = $('.sex').val();
        var birthday               = $('.birthday').val();
        var married                = $('.married').val();
        var brother_cnt            = $('.brother_cnt').val();
        var brother_index          = $('.brother_index').val();
        var birthplace_province_id = $('.birthplace_province_id').val();
        var address_jp             = $('.address_jp').val();
        var district_part_jp       = $('.district_part_jp').val();
        var province_id            = $('.province_id').val();
        var district_id            = $('.district_id').val();
        var commune_id             = $('.commune_id').val();
        var address_en             = $('.address_en').val();
        var district_part_en       = $('.district_part_en').val();
        var address_kh             = $('.address_kh').val();
        var phone                  = $('.phone').val();
        var lang_others_jp         = $('.lang_others_jp').val();
        var english                = $('.english').val();
        var lang_others_en         = $('.lang_others_en').val();
        var facebook               = $('.facebook').val();
				$.ajax({
					url:url,
					type:'POST',
					dataType:'json',
					data:{
            id:                     id,
            id_number:              id_number,
            family_name_jp:         family_name_jp,
            given_name_jp:          given_name_jp,
            family_name_en:         family_name_en,
            given_name_en:          given_name_en,
            family_name_kh:         family_name_kh,
            given_name_kh:          given_name_kh,
            introduced_from:        introduced_from,
            sex:                    sex,
            birthday:               birthday,
            married:                married,
            brother_cnt:            brother_cnt,
            brother_index:          brother_index,
            birthplace_province_id: birthplace_province_id,
            address_jp:             address_jp,
            district_part_jp:       district_part_jp,
            province_id:            province_id,
            district_id:            district_id,
            commune_id:             commune_id,
            address_en:             address_en,
            district_part_en:       district_part_en,
            address_kh:             address_kh,
            phone:                  phone,
            lang_others_jp:         lang_others_jp,
            english:                english,
            lang_others_en:         lang_others_en,
            facebook:               facebook,
					}, success:function(){
						swal("<?= __('Saved!') ?>", "", "success")
					}, error:function(){
						swal("<?= __('Error!') ?>", "", "error")
					}
				});
			});

			//Personality Ajax update
			$('.update_personality_btn').on('click', function(){
        var url                   = $('.form_personality').attr('action');
        var height                = $('.height').val();
        var weight                = $('.weight').val();
        var shoe_size             = $('.shoe_size').val();
        var handed                = $('.handed').val();
        var eyesight_left         = $('.eyesight_left').val();
        var eyesight_right        = $('.eyesight_right').val();
        var color_blindness       = $('.color_blindness').val();
        var blood_type            = $('.blood_type').val();
        var tatoo                 = $('.tatoo').val();
        var tabacco               = $('.tabacco').val();
        var drink                 = $('.drink').val();
        var experience_group_life = $('.experience_group_life').val();

				$.ajax({
					url:url,
					type:'POST',
					dataType:'json',
					data:{
            id:                    id,
            height:                height,
            weight:                weight,
            shoe_size:             shoe_size,
            handed:                handed,
            eyesight_left:         eyesight_left,
            eyesight_right:        eyesight_right,
            color_blindness:       color_blindness,
            blood_type:            blood_type,
            tatoo:                 tatoo,
            tabacco:               tabacco,
            drink:                 drink,
            experience_group_life: experience_group_life,

					}, success:function(){
						swal("<?= __('Saved!') ?>", "", "success")
					}, error:function(){
						swal("<?= __('Error!') ?>", "", "error")
					}
				});
			});

			//Personality 2 Ajax update
			$('.update_personality_2_btn').on('click', function(){
        var url             = $('.form_personality_2').attr('action');
        var face_feature_jp = $('.face_feature_jp').val();
        var face_feature_en = $('.face_feature_en').val();
        var health_jp       = $('.health_jp').val();
        var health_en       = $('.health_en').val();
        var good_point_jp   = $('.good_point_jp').val();
        var good_point_en   = $('.good_point_en').val();
        var bad_point_jp    = $('.bad_point_jp').val();
        var bad_point_en    = $('.bad_point_en').val();
        var hobby_jp        = $('.hobby_jp').val();
        var hobby_en        = $('.hobby_en').val();
        var character_jp    = $('.character_jp').val();
        var character_en    = $('.character_en').val();
        var specialty_jp    = $('.specialty_jp').val();
        var specialty_en    = $('.specialty_en').val();
        var religious_jp    = $('.religious_jp').val();
        var religious_en    = $('.religious_en').val();

				$.ajax({
					url:url,
					type:'POST',
					dataType:'json',
					data:{
            id:              id,
            face_feature_jp: face_feature_jp,
            face_feature_en: face_feature_en,
            health_jp:       health_jp,
            health_en:       health_en,
            good_point_jp:   good_point_jp,
            good_point_en:   good_point_en,
            bad_point_jp:    bad_point_jp,
            bad_point_en:    bad_point_en,
            hobby_jp:        hobby_jp,
            hobby_en:        hobby_en,
            character_jp:    character_jp,
            character_en:    character_en,
            specialty_jp:    specialty_jp,
            specialty_en:    specialty_en,
            religious_jp:    religious_jp,
            religious_en:    religious_en,

					}, success:function(){
						swal("<?= __('Saved!') ?>", "", "success")
					}, error:function(){
						swal("<?= __('Error!') ?>", "", "error")
					}
				});
			});

			//Career Ajax update
			$('.update_career_btn').on('click', function(){
        var url                    = $('.form_career').attr('action');
        var academic1_jp    = $('.academic1_jp').val();
        var academic1_from  = $('.academic1_from').val();
        var academic1_to    = $('.academic1_to').val();
        var academic1_en    = $('.academic1_en').val();
        var employ1_jp      = $('.employ1_jp').val();
        var employ1_salary  = $('.employ1_salary').val();
        var employ1_job     = $('.employ1_job').val();
        var employ1_from    = $('.employ1_from').val();
        var employ1_to      = $('.employ1_to').val();
        var employ1_en      = $('.employ1_en').val();
        var academic2_jp    = $('.academic2_jp').val();
        var academic2_from  = $('.academic2_from').val();
        var academic2_to    = $('.academic2_to').val();
        var academic2_en    = $('.academic2_en').val();
        var employ2_jp      = $('.employ2_jp').val();
        var employ2_salary  = $('.employ2_salary').val();
        var employ2_job     = $('.employ2_job').val();
        var employ2_from    = $('.employ2_from').val();
        var employ2_to      = $('.employ2_to').val();
        var employ2_en      = $('.employ2_en').val();
        var academic3_jp    = $('.academic3_jp').val();
        var academic3_from  = $('.academic3_from').val();
        var academic3_to    = $('.academic3_to').val();
        var academic3_en    = $('.academic3_en').val();
        var employ3_jp      = $('.employ3_jp').val();
        var employ3_salary  = $('.employ3_salary').val();
        var employ3_job     = $('.employ3_job').val();
        var employ3_from    = $('.employ3_from').val();
        var employ3_to      = $('.employ3_to').val();
        var employ3_en      = $('.employ3_en').val();
        var academic4_jp    = $('.academic4_jp').val();
        var academic4_from  = $('.academic4_from').val();
        var academic4_to    = $('.academic4_to').val();
        var academic4_en    = $('.academic4_en').val();
        var employ4_jp      = $('.employ4_jp').val();
        var employ4_salary  = $('.employ4_salary').val();
        var employ4_job     = $('.employ4_job').val();
        var employ4_from    = $('.employ4_from').val();
        var employ4_to      = $('.employ4_to').val();
        var employ4_en      = $('.employ4_en').val();
        var employ5_jp      = $('.employ5_jp').val();
        var employ5_salary  = $('.employ5_salary').val();
        var employ5_job     = $('.employ5_job').val();
        var employ5_from    = $('.employ5_from').val();
        var employ5_to      = $('.employ5_to').val();
        var employ5_en      = $('.employ5_en').val();
        var job1_id         = $('.job1_id').val();
        var job1_term       = $('.job1_term').val();
        var job2_id         = $('.job2_id').val();
        var job2_term       = $('.job2_term').val();
        var visit_jpn       = $('.visit_jpn').val();
        var visit_jpn_from  = $('.visit_jpn_from').val();
        var visit_jpn_to    = $('.visit_jpn_to').val();

				$.ajax({
					url:url,
					type:'POST',
					dataType:'json',
					data:{
            id:                     id,
            academic1_jp:   academic1_jp,
            academic1_from: academic1_from,
            academic1_to:   academic1_to,
            academic1_en:   academic1_en,
            employ1_jp:     employ1_jp,
            employ1_salary: employ1_salary,
            employ1_job:    employ1_job,
            employ1_from:   employ1_from,
            employ1_to:     employ1_to,
            employ1_en:     employ1_en,
            academic2_jp:   academic2_jp,
            academic2_from: academic2_from,
            academic2_to:   academic2_to,
            academic2_en:   academic2_en,
            employ2_jp:     employ2_jp,
            employ2_salary: employ2_salary,
            employ2_job:    employ2_job,
            employ2_from:   employ2_from,
            employ2_to:     employ2_to,
            employ2_en:     employ2_en,
            academic3_jp:   academic3_jp,
            academic3_from: academic3_from,
            academic3_to:   academic3_to,
            academic3_en:   academic3_en,
            employ3_jp:     employ3_jp,
            employ3_salary: employ3_salary,
            employ3_job:    employ3_job,
            employ3_from:   employ3_from,
            employ3_to:     employ3_to,
            employ3_en:     employ3_en,
            academic4_jp:   academic4_jp,
            academic4_from: academic4_from,
            academic4_to:   academic4_to,
            academic4_en:   academic4_en,
            employ4_jp:     employ4_jp,
            employ4_salary: employ4_salary,
            employ4_job:    employ4_job,
            employ4_from:   employ4_from,
            employ4_to:     employ4_to,
            employ4_en:     employ4_en,
            employ5_jp:     employ5_jp,
            employ5_salary: employ5_salary,
            employ5_job:    employ5_job,
            employ5_from:   employ5_from,
            employ5_to:     employ5_to,
            employ5_en:     employ5_en,
            job1_id:        job1_id,
            job1_term:      job1_term,
            job2_id:        job2_id,
            job2_term:      job2_term,
            visit_jpn:      visit_jpn,
            visit_jpn_from: visit_jpn_from,
            visit_jpn_to:   visit_jpn_to,

					}, success:function(){
						swal("<?= __('Saved!') ?>", "", "success")
					}, error:function(){
						swal("<?= __('Error!') ?>", "", "error")
					}
				});
			});

			//Others Ajax update
			$('.update_others_btn').on('click', function(){
        var url                           = $('.form_others').attr('action');
        var purpose_jp                    = $('.purpose_jp').val();
        var purpose_en                    = $('.purpose_en').val();
        var family_in_jpn                 = $('.family_in_jpn').val();
        var family_in_jpn_relationship_en = $('.family_in_jpn_relationship_en').val();
        var plan_after_return_jp          = $('.plan_after_return_jp').val();
        var plan_after_return_en          = $('.plan_after_return_en').val();
        var saving_money                  = $('.saving_money').val();
        var status_after_return_jp        = $('.status_after_return_jp').val();
        var status_after_return_en        = $('.status_after_return_en').val();
				$.ajax({
					url:url,
					type:'POST',
					dataType:'json',
					data:{
            id:                            id,
            purpose_jp:                    purpose_jp,
            purpose_en:                    purpose_en,
            family_in_jpn:                 family_in_jpn,
            family_in_jpn_relationship_en: family_in_jpn_relationship_en,
            plan_after_return_jp:          plan_after_return_jp,
            plan_after_return_en:          plan_after_return_en,
            saving_money:                  saving_money,
            status_after_return_jp:        status_after_return_jp,
            status_after_return_en:        status_after_return_en,


					}, success:function(){
						swal("<?= __('Saved!') ?>", "", "success")
					}, error:function(){
						swal("<?= __('Error!') ?>", "", "error")
					}
				});
			});

			//family add Ajax
			$('.add_family_btn').on('click', function(){
        var url           = $('.form_add_family').attr('action');
        var trainee_id    = $('.family_trainee_id').val();
        var name          = $('.family_name').val();
        var relationship  = $('.family_relationship').val();
        var birthday      = $('.family_birthday').val();
        var phone         = $('.family_phone').val();
        var job_id        = $('.family_job_id').val();

				$.ajax({
					url:url,
					type:'POST',
					dataType:'json',
					data:{

            trainee_id:   trainee_id,
            name:         name,
            relationship: relationship,
            birthday:     birthday,
            phone:        phone,
            job_id:       job_id,

					}, success:function(rs){
						$tmp = $('tr.tmp_family_add').clone();
						$tmp = $('tr.tmp_family_add').removeClass('hide');
            var edit_url    = $('#tab-profile-family').find('.family-edit-link').attr('action');
            var delete_url  = $('#tab-profile-family').find('.family-delete-link').attr('action');
						$tmp.find('td.name').text(name);
						$tmp.find('td.relationship').text(relationship);
						$tmp.find('td.birthday').text(birthday);
						$tmp.find('td.job_id').text(job_id);
						$tmp.find('td.phone').text(phone);
						$tmp.find('a.edit').attr('href',edit_url+"/"+rs);
						$tmp.find('form.delete').attr('action',delete_url+"/"+rs);
						$tmp.find('form.delete').attr('name',"post_"+rs);
						$tmp.find('form.delete').attr('id',"post_"+rs);
						$tmp.find('a.delete').attr(
							'onclick',
							'if (confirm("Are you sure you want to delete")) {document.post_'+rs+'.submit();} event.returnValue = false; return false;');
						$('tbody.family_table').prepend($tmp);
						swal("<?= __('Saved!') ?>", "", "success");

					}, error:function(){
						swal("<?= __('Error!') ?>", "", "error");
					}
				});
			});

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

	//住所入力Select2設定
	$(function($){
		//nice select boxes( address Province)
		$('.cam_province_id').select2();
		$('.cam_province_id').change(function(){
			var province_id = $(this).select2('val');
			$(this).val(province_id);
		});

		//nice select boxes( address District)
		$('.cam_district_id').select2();
		$('.cam_district_id').change(function(){
			var district_id = $(this).select2('val');
			$(this).val(district_id);
		});

		//nice select boxes( address District)
		$commune_id = $('.cam_commune_id');
		$commune_id.select2();
		$commune_id.change(function(){
			var commune_id = $commune_id.select2('val');
			$commune_id.val(commune_id);
		});


			function setDistrictSelect(s){
				$('.cam_district_id').find('option').remove();
				$('.cam_district_id').append('<option value=""></option>');
				$(districts).each(function(i){
					if(districts[i].province_id == s){
						$('.cam_district_id').append($('<option></option>')
							.attr('province', districts[i].province)
							.val(districts[i].district_id)
							.text(districts[i].district));
						}
					}
				);
			}
			//setDistrictSelect(<?php $this->request->data['Trainee']['province_id']; ?>);



			function setCommuneSelect(s){
				$('.cam_commune_id').find('option').remove();
				$('.cam_commune_id').append('<option value=""></option>');
				$(communes).each(function(i){
					if(communes[i].district_id == s){
						$('.cam_commune_id').append($('<option></option>')
							.attr('district', communes[i].district)
							.val(communes[i].commune_id)
							.text(communes[i].commune));
						}
					}
				);
			}
			//setCommuneSelect('');
		var communes = <?php echo $communes = json_encode($communes, JSON_HEX_APOS); ?>;
		var districts = <?php echo $districts = json_encode($districts, JSON_HEX_APOS); ?>;
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
			placeholder: "<?= __('Select Job') ?>",
			allowClear:false
		});

		$('.sel_job_family').select2({
			placeholder: "<?= __('Select Job') ?>",
			allowClear:false
		});
	});

	<?php $this->Html->scriptEnd(); ?>