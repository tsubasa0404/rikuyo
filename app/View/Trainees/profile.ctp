<?php $this->set('title_for_layout', 'Trainee Profile'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/dropzone', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/magnific-popup', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Trainee List'), '/trainees'); ?>
<?php $this->Html->addCrumb(__('Trainee Profile'), ''); ?>
					<h1><?= __('Trainee Profile') ?></h1>
					</div>
				</div>
			</div>

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

									<div class="main-box-body clearfix center-block " >
										<?php
											echo $this->Form->create('TraineeProfileImage', array(
											'action' => 'add',
											'type' => 'file'
											));
											if($prof_img){
											echo $this->Form->hidden('TraineeProfileImage.id', array('value' => $prof_img[0]['TraineeProfileImage1']['id']));
											}
										?>
										<?php echo $this->Form->hidden('TraineeProfileImage.trainee_id', array('value' => $this->request->data['Trainee']['id'])); ?>
										<?php echo $this->Form->hidden('TraineeProfileImage.trainee_control_no', array('value' => $this->request->data['Trainee']['control_no'])); ?>
										<div class="form-group">
											<?php echo $this->Form->file('TraineeProfileImage.img', array('style'=>'cursor:pointer')); ?>
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
												'class' => 'form_trainee_edit',
												'inputDefaults' => array(
													'div' => false,
													)
											)); ?>
											<?php echo $this->Form->hidden('id'); ?>
											<table class="table table-bordered table-hover">
												<tbody>
													<tr>
														<td><?= __('Departure Date') ?></td>
														<td>
															<?php echo $this->Form->date('departure_date',array(
																'label' => false,
																'class' => 'form-control maxW160'
															)) ?>
														</td>
													</tr>
													<tr>
														<td><?= __('Departure Status') ?></td>
														<td>
															<?php echo $this->Form->input('departure_status_id',array(
															'label' => false,
															'type' => 'select',
															'options' => array('0'=> __('Not Yet'),'1'=> __('Already')),
															'class' => "form-control maxW160",
															'div' => false
														)); ?>
														</td>

													</tr>
													<tr>
														<td><?= __('Return Date') ?></td>
														<td><?php echo $this->Form->date('return_date',array(
															'label' => false,
															'class' => 'form-control maxW160'
														)) ?></td>
													</tr>
													<tr>
														<td><?= __('Return Status') ?></td>
														<td>
															<?php echo $this->Form->input('return_status_id',array(
																'label' => false,
																'type' => 'select',
																'options' => array('0'=> __('Not Yet'),'1'=> __('Already')),
																'class' => "form-control maxW160",
																'div' => false
															)); ?>
														</td>
													</tr>
												</tbody>
											</table>
											<button type="submit" class="btn btn-default pull-right" style="margin-top:-15px;"><span class=" fa fa-plane"></span> <?= __('Save') ?></button>
											<?php echo $this->Form->end(); ?>
										</div>
									</div>
								</div>

								<div class="col-lg-7 col-md-7 col-sm-7 maxW560">
									<div class="table-responsive">
										<?php echo $this->Form->create('Trainee', array(
											'class' => 'form_trainee_edit',
											'inputDefaults' => array(
												'div' => false,
												)
										)); ?>
										<?php echo $this->Form->hidden('id'); ?>
										<table class="table table-bordered table-hover">
											<tbody>
												<tr>
													<td><?= __('Medical Checkup') ?></td>
													<td>
														<div class="row">
															<div class="form-group">
																<div class="col-lg-4 col-md-4 col-sm-4">
																	<?php echo $this->Form->input('medicalchk_status_id',array(
																		'label' => __('Status'),
																		'type' => 'select',
																		'options' => array('0'=> __('Not Yet'),'1'=> __('OK')),
																		'class' => "form-control maxW100",
																		'div' => false
																	)); ?>
																</div>
																<div class="col-lg-8 col-md-8 col-sm-8">
																	<?php echo $this->Form->input('medicalchk_note',array(
																		'label' => __('Note'),
																		'class' => 'form-control'
																	)) ?>
																</div>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td rowspan="2"><?= __('ID Card') ?></td>
													<td>
														<div class="row">
															<div class="form-group">
																<div class="col-lg-4 col-md-4 col-sm-4">
																	<?php echo $this->Form->input('idcard_status_id',array(
																		'label' => __('Status'),
																		'type' => 'select',
																		'options' => array('0'=> __('Not Yet'),'1'=> __('OK')),
																		'class' => "form-control maxW100",
																		'div' => false
																	)); ?>
																</div>
																<div class="col-lg-8 col-md-8 col-sm-8">
																	<?php echo $this->Form->input('idcard_note',array(
																		'label' => __('Note'),
																		'class' => 'form-control'
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
																		'class' => "form-control maxW100",
																		'div' => false
																	)); ?>
																</div>
																<div class="col-lg-4 col-md-4 col-sm-4">
																	<?php echo $this->Form->input('rb',array(
																		'label' => __('RB'),
																		'type' => 'select',
																		'options' => array('0'=> __('Not Yet'),'1'=> __('OK')),
																		'class' => "form-control maxW100",
																		'div' => false
																	)); ?>
																</div>
																<div class="col-lg-4 col-md-4 col-sm-4">
																	<?php echo $this->Form->input('cb',array(
																		'label' => __('CB'),
																		'type' => 'select',
																		'options' => array('0'=> __('Not Yet'),'1'=> __('OK')),
																		'class' => "form-control maxW100",
																		'div' => false
																	)); ?>
																</div>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><?= __('Passport') ?></td>
													<td>
														<div class="row">
															<div class="form-group">
																<div class="col-lg-4 col-md-4 col-sm-4">
																	<?php echo $this->Form->input('passport_status_id',array(
																			'label' => __('Status'),
																			'type' => 'select',
																			'options' => array('0'=> __('Not Yet'),'1'=> __('OK')),
																			'class' => "form-control maxW100",
																			'div' => false
																		)); ?>
																</div>
																<div class="col-lg-8 col-md-8 col-sm-8">
																	<?php echo $this->Form->input('passport_note',array(
																		'label' => __('Note'),
																		'class' => 'form-control'
																	)) ?>
																</div>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><?= __('COE') ?></td>
													<td>
														<div class="row">
															<div class="form-group">
																<div class="col-lg-4 col-md-4 col-sm-4">
																	<?php echo $this->Form->input('coe_status_id',array(
																			'label' => __('Status'),
																			'type' => 'select',
																			'options' => array('0'=> __('Not Yet'),'1'=> __('OK')),
																			'class' => "form-control maxW100",
																			'div' => false
																		)); ?>
																</div>
																<div class="col-lg-8 col-md-8 col-sm-8">
																	<?php echo $this->Form->input('coe_note',array(
																		'label' => __('Note'),
																		'class' => 'form-control'
																	)) ?>
																</div>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><?= __('Immigration') ?></td>
													<td>
														<div class="row">
															<div class="form-group">
																<div class="col-lg-4 col-md-4 col-sm-4">
																	<?php echo $this->Form->input('immigration_status_id',array(
																			'label' => __('Status'),
																			'type' => 'select',
																			'options' => array('0'=> __('Not Yet'),'1'=> __('OK')),
																			'class' => "form-control maxW100",
																			'div' => false
																		)); ?>
																</div>
																<div class="col-lg-8 col-md-8 col-sm-8">
																	<?php echo $this->Form->input('immigration_note',array(
																		'label' => __('Note'),
																		'class' => 'form-control'
																	)) ?>
																</div>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><?= __('Labor Ministry') ?></td>
													<td>
														<div class="row">
															<div class="form-group">
																<div class="col-lg-4 col-md-4 col-sm-4">
																	<?php echo $this->Form->input('labor_ministry_status_id',array(
																			'label' => __('Status'),
																			'type' => 'select',
																			'options' => array('0'=> __('Not Yet'),'1'=> __('OK')),
																			'class' => "form-control maxW100",
																			'div' => false
																		)); ?>
																</div>
																<div class="col-lg-8 col-md-8 col-sm-8">
																	<?php echo $this->Form->input('labor_ministry_note',array(
																		'label' => __('Note'),
																		'class' => 'form-control'
																	)) ?>
																</div>
															</div>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
										<button type="submit" class="btn btn-default pull-right" style="margin-top:-15px;"><span class=" fa fa-file"></span> <?= __('Save') ?></button>
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
															'class' => 'form_trainee_edit',
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
																		<td>
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
																		<td>
																			<?= __('ID Number') ?>
																		</td>
																		<td>
																			<?php echo $this->Form->input('id_number',array(
																				'label' => false,
																				'class' => 'form-control maxW120'
																			)) ?>
																		</td>
																		<td>

																		</td>
																		<td>

																		</td>
																	</tr>
																	<tr>
																		<td>
																			<?= __('Name') ?>
																		</td>
																		<td>
																			<div class="row">
																				<div class="col-lg-6 col-md-6 col-sm-6">
																					<label for="family_name_jp">名字</label>
																					<?php echo $this->Form->input('family_name_jp',array(
																						'label' => false,
																						'class' => 'form-control'
																					)) ?>
																				</div>
																				<div class="col-lg-6 col-md-6 col-sm-6">
																				<label for="given_name_jp">名前</label>
																					<?php echo $this->Form->input('given_name_jp',array(
																						'label' => false,
																						'class' => 'form-control'
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
																						'class' => 'form-control maxW200'
																					)) ?>
																				</div>
																				<div class="col-lg-6 col-md-6 col-sm-6">
																					<label for="given_name_en">Given Name</label>
																					<?php echo $this->Form->input('given_name_en',array(
																						'label' => false,
																						'class' => 'form-control maxW200'
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
																						'class' => 'form-control'
																					)) ?>
																				</div>
																				<div class="col-lg-6 col-md-6 col-sm-6">
																					<label for="given_name_kh">Given Name(Khmer)</label>
																					<?php echo $this->Form->input('given_name_kh',array(
																						'label' => false,
																						'class' => 'form-control'
																					)) ?>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><?= __('Introduced From') ?></td>
																		<td></td>
																		<td>
																			<?php echo $this->Form->input('introduced_from',array(
																				'label' => false,
																				'class' => 'form-control maxW160'
																			)) ?>
																		</td>
																		<td>
																		</td>
																	</tr>
																	<tr>
																		<td>
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
																						'class' => 'form-control maxW100',
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
																		<td>
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
																						'class' => 'form-control maxW160',
																					)) ?>
																				</div>
																			</div>
																		</td>
																		<td>
																			<?php
																				//$birthday = $this->request->data['Trainee']['birthday'];
																				//$birthday_time = date('Y-m-d', strtotime($birthday));
																				//list($y['y'], $m['m'], $d['d']) = explode('-', $birthday_time);
																				//echo $d['d']."/".$m['m']."/" . $y['y'] .""."(".$this->Btn->calcAge($birthday).")";
																				?>
																		</td>
																	</tr>
																	<tr>
																		<td>
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
																						'class' => 'form-control maxW100',
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
																		<td>
																			<?= __('Brothers') ?>
																		</td>
																		<td>

																		</td>
																		<td>
																			<div class="row">
																				<div class="form-group">
																					<div class="col-lg-3 col-md-3 col-sm-3">
																						<label class="" for="brother_cnt"><?= __('How many brothers?')?></label>
																						<?php echo $this->Form->input('brother_cnt',array(
																							'label' => false,
																							'class' => 'form-control maxW100'
																						)) ?>
																					</div>
																					<div class="col-lg-3 col-md-3 col-sm-3">
																						<label  class="" for="brother_index"><?= __('How manieth brother?')?></label>
																						<?php echo $this->Form->input('brother_index',array(
																							'label' => false,
																							'class' => 'form-control maxW100'
																						)) ?>
																					</div>
																				</div>
																			</div>
																		</td>
																		<td>

																		</td>
																	</tr>

																	<tr>
																		<td>
																			<?= __('Birthplace') ?>
																		</td>
																		<td>

																		</td>
																		<td>
																			<div class="row">
																				<div class="form-group form-group-select2">
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<label for="TraineeBirthplaceProvinceId">Province</label>
																						<?php echo $this->Form->input('birthplace_province_id', array(
																							'label' => false,
																							'type' => 'select',
																							'div' => false,
																							'class' => 'form-control cam_province_id',
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
																		<td>
																			<?= __('Current Address') ?>
																		</td>
																		<td>
																			<div class="row">
																				<div class="form-group">
																					<div class="col-lg-12 col-md-12 col-sm-12">
																							<?php echo $province_en['CamPlaceDic']['place_jp']." 県 "; ?>
																							<?php echo $district_en['CamPlaceDic']['place_jp']." 市 "; ?>
																							<?php echo $commune_en['CamPlaceDic']['place_jp']." 地区"; ?>
																					</div>
																				</div>
																				<div class="col-lg-8 col-md-8 col-sm-8">
																					<?php echo $this->Form->input('address_jp',array(
																						'label' => false,
																						'class' => 'form-control',
																						'placeholder' => '住所(地区以下、通り、番号、建物)'
																					)) ?>
																				</div>
																				<div class="col-lg-4 col-md-4 col-sm-4">
																					<?php echo $this->Form->input('district_part_jp',array(
																						'label' => false,
																						'class' => 'form-control maxW100',
																						'placeholder' => '北部、中部、南部など'
																					)) ?>
																				</div>
																			</div>
																		</td>
																		<td>
																			<div class="row maxW500">
																				<div class="col-lg-4 col-md-4 col-sm-4">
																					<div class="form-group ">
																						<label for="TraineeProvinceId"><?= __('Province') ?></label>
																						<?php echo $this->Form->input('province_id', array(
																							'label' => false,
																							'type' => 'select',
																							'div' => false,
																							'class' => 'form-control cam_province_id',
																							'value' => $this->request->data['Trainee']['province_id'],
																							'options' => $option_provinces
																						)) ?>
																					</div>
																				</div>
																				<div class="col-lg-4 col-md-4 col-sm-4">
																					<div class="form-group ">
																						<label for="TraineeDistrictId"><?= __('District') ?></label>
																						<?php echo $this->Form->input('district_id', array(
																							'label' => false,
																							'type' => 'select',
																							'div' => false,
																							'class' => 'form-control cam_district_id',
																							'value' => $this->request->data['Trainee']['district_id'],
																							'options' => $option_districts
																						)) ?>
																					</div>
																				</div>
																				<div class="col-lg-4 col-md-4 col-sm-4">
																					<div class="form-group ">
																						<label for="TraineeCommuneId"><?= __('Commune') ?></label>
																						<?php echo $this->Form->input('commune_id', array(
																							'label' => false,
																							'type' => 'select',
																							'div' => false,
																							'class' => 'form-control cam_commune_id',
																							'value' => $this->request->data['Trainee']['commune_id'],
																							'options' => $option_communes
																						)) ?>
																						</select>
																					</div>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-lg-6 col-md-6 col-sm-6">
																					<div class="form-group">
																						<label for="addressEn"><?= __('Address(No, Street, Village, English)') ?></label>
																						<?php echo $this->Form->input('address_en',array(
																							'label' => false,
																							'class' => 'form-control'
																						)) ?>
																					</div>
																				</div>
																				<div class="col-lg-6 col-md-6 col-sm-6">
																					<div class="form-group">
																						<label for="district_part"><?= __('District Area') ?></label>
																						<?php echo $this->Form->input('district_part_en',array(
																							'label' => false,
																							'class' => 'form-control maxW100'
																						)) ?>
																					</div>
																				</div>
																			</div>
																		</td>
																		<td>
																			<div class="row">
																				<div class="form-group">
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<?php echo $this->Form->input('address_kh',array(
																							'label' => false,
																							'class' => 'form-control',
																							'placeholder' => __('Address(No, Street, Village, Khmer)')
																						)) ?>
																					</div>
																				</div>
																				<div class="form-group">
																					<div class="col-lg-12 col-md-12 col-sm-12">
																							<?php echo $commune_en['CamPlaceDic']['place_kh'].", "; ?>
																							<?php echo $district_en['CamPlaceDic']['place_kh'].", "; ?>
																							<?php echo $province_en['CamPlaceDic']['place_kh'].", "; ?>
																					</div>
																				</div>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<?= __('Phone') ?>
																		</td>
																		<td>
																		</td>
																		<td>
																			<?php echo $this->Form->input('phone',array(
																							'label' => false,
																							'class' => 'form-control maxW160'
																						)) ?>
																		</td>
																		<td>

																		</td>
																	</tr>
																	<tr>
																		<td>
																			<?= __('Languages') ?>
																		</td>
																		<td>
																			<p style="margin-bottom: 24px;">日本語 <?php if($this->request->data['Trainee']['english']==1){echo "、英語";} ?></p>
																			<?php echo $this->Form->input('lang_others_jp',array(
																							'label' => false,
																							'class' => 'form-control maxW160'
																						)) ?>
																			<label for="lang_others_jp"> その他</label>
																		</td>

																		<td>
																			<label>English
																				<?php echo $this->Form->checkbox('english', array(
																					'label' => false,
																					'value' => 1,
																					'selected' => $this->request->data['Trainee']['english']
																				)) ?>
																			</label>
																			<?php echo $this->Form->input('lang_others_en',array(
																				'label' => false,
																				'class' => 'form-control maxW160'
																			)) ?>
																			<label for="lang_others_en"> others</label>

																		</td>
																		<td>

																		</td>
																	</tr>

																	<tr>
																		<td>
																			<?= __('Facebook User ID') ?>
																		</td>
																		<td>
																			<a href="http://facebook.com/<?php echo $this->request->data['Trainee']['facebook'] ?>" target="_blank" ><?php echo $this->request->data['Trainee']['facebook'] ?></a>
																		</td>
																		<td>
																			<?php echo $this->Form->input('facebook',array(
																				'label' => false,
																				'class' => 'form-control maxW200',
																				'placeholder' => 'Enter Facebook User ID'
																			)) ?>
																		</td>
																		<td>
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
												<div class="tab-pane fade" id="tab-profile-personality">
													<div class="table-responsive maxW960">
														<?php echo $this->Form->create('Trainee', array(
															'class' => 'form_trainee_edit',
															'inputDefaults' => array(
																'div' => false,
																)
														)); ?>
														<?php echo $this->Form->hidden('id'); ?>
															<table class="table table-bordered table-hover">
																<thead>
																	<tr>
																		<th style="width:90px"></th>
																		<th style="width:90px"></th>
																		<th style="width:90px"></th>
																		<th style="width:100px"></th>
																		<th style="width:200px"></th>
																		<th style="width:200px"></th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td class="td_first_block">
																			<?php echo $this->Form->input('height',array(
																				'label' => __('Height(cm)'),
																				'class' => 'form-control maxW100'
																			)) ?>
																		</td>
																		<td>
																			<?php echo $this->Form->input('weight',array(
																				'label' => __('Weight(kg)'),
																				'class' => 'form-control maxW100'
																			)) ?>
																		</td>
																		<td>
																			<?php echo $this->Form->input('shoe_size',array(
																				'label' => __('Shoe Size(cm)'),
																				'class' => 'form-control maxW100'
																			)) ?>
																		</td>
																		<td>
																			<?php echo $this->Form->input('handed',array(
																				'label' => __('Handedness'),
																				'class' => 'form-control maxW100',
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
																							'class' => 'form-control maxW100',
																						)) ?>
																					</div>
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<?php echo $this->Form->input('eyesight_right',array(
																							'label' => __('Eyesight right'),
																							'class' => 'form-control maxW100',
																						)) ?>
																					</div>
																				</div>
																			</div>
																		</td>
																		<td style="width:150px">
																			<?php echo $this->Form->input('color_blindness',array(
																				'label' => __('Color Blindness'),
																				'class' => 'form-control maxW100',
																				'type' => 'select',
																				'options' => array('0' => __('Nothing'), '1' => __('Have'))
																			)) ?>
																		</td>
																	</tr>
																	<tr colspan="6">
																		<td class="td_first_block">
																			<?php echo $this->Form->input('blood_type',array(
																				'label' => __('Blood Type'),
																				'class' => 'form-control maxW100',
																				'type' => 'select',
																				'options' => array('a' => __('A'), 'b' => __('B'), 'o' => __('O'), 'ab' => __('AB'))
																			)) ?>
																		</td>
																		<td>
																			<?php echo $this->Form->input('tatoo',array(
																				'label' => __('Tatoo'),
																				'class' => 'form-control maxW100',
																				'type' => 'select',
																				'options' => array('0' => __('Nothing'), '1' => __('Have'))
																			)) ?>
																		</td>
																		<td>
																			<?php echo $this->Form->input('tabacco',array(
																				'label' => __('Tabacco'),
																				'class' => 'form-control maxW100',
																				'type' => 'select',
																				'options' => array('0' => __('Nothing'), '1' => __('Have'))
																			)) ?>
																		</td>
																		<td>
																			<?php echo $this->Form->input('drink',array(
																				'label' => __('Alchole'),
																				'class' => 'form-control maxW100',
																				'type' => 'select',
																				'options' => array('0' => __('Nothing'), '1' => __('Have'))
																			)) ?>
																		</td>

																		<td>
																			<?php echo $this->Form->input('experience_group_life',array(
																				'label' => __('Experience Group Life'),
																				'class' => 'form-control maxW100',
																				'type' => 'select',
																				'options' => array('0' => __('Nothing'), '1' => __('Have'))
																			)) ?>
																		</td>
																		<td>
																			<div class="profile-message-btn center-block text-center">
																				<button type="submit" class="btn btn-default">
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
															'class' => 'form_trainee_edit',
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
																		<td>
																			<?= __('Face Features') ?>
																		</td>
																		<td>
																			<?php echo $this->Form->input('face_feature_jp',array(
																							'label' => false,
																							'class' => 'form-control'
																						)) ?>
																		</td>
																		<td>
																			<?php echo $this->Form->input('face_feature_en',array(
																							'label' => false,
																							'class' => 'form-control'
																						)) ?>
																		</td>

																	</tr>


																	<tr>
																		<td>
																			<?= __('Health (Hepatitis B,AIDS)') ?>
																		</td>
																		<td>
																			<?php echo $this->Form->input('health_jp',array(
																							'label' => false,
																							'class' => 'form-control'
																						)) ?>
																		</td>
																		<td>
																			<?php echo $this->Form->input('health_en',array(
																							'label' => false,
																							'class' => 'form-control'
																						)) ?>
																		</td>
																	</tr>


																	<tr>
																		<td>
																			<?= __('Good Point') ?>
																		</td>
																		<td>
																			<?php echo $this->Form->input('good_point_jp',array(
																							'label' => false,
																							'class' => 'form-control'
																						)) ?>
																		</td>
																		<td>
																			<?php echo $this->Form->input('good_point_en',array(
																							'label' => false,
																							'class' => 'form-control'
																						)) ?>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<?= __('Bad Point') ?>
																		</td>
																		<td>
																			<?php echo $this->Form->input('bad_point_jp',array(
																							'label' => false,
																							'class' => 'form-control'
																						)) ?>
																		</td>
																		<td>
																			<?php echo $this->Form->input('bad_point_en',array(
																							'label' => false,
																							'class' => 'form-control'
																						)) ?>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<?= __('Hobby') ?>
																		</td>
																		<td>
																			<?php echo $this->Form->input('hobby_jp',array(
																							'label' => false,
																							'class' => 'form-control'
																						)) ?>
																		</td>
																		<td>
																			<?php echo $this->Form->input('hobby_en',array(
																							'label' => false,
																							'class' => 'form-control'
																						)) ?>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<?= __('Character') ?>
																		</td>
																		<td>
																			<?php echo $this->Form->input('character_jp',array(
																							'label' => false,
																							'class' => 'form-control'
																						)) ?>
																		</td>
																		<td>
																			<?php echo $this->Form->input('character_en',array(
																							'label' => false,
																							'class' => 'form-control'
																						)) ?>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<?= __('Specialty') ?>
																		</td>
																		<td>
																			<?php echo $this->Form->input('specialty_jp',array(
																							'label' => false,
																							'class' => 'form-control'
																						)) ?>
																		</td>
																		<td>
																			<?php echo $this->Form->input('specialty_en',array(
																							'label' => false,
																							'class' => 'form-control'
																						)) ?>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<?= __('Religious') ?>
																		</td>
																		<td>
																			<?php echo $this->Form->input('religious_jp',array(
																							'label' => false,
																							'class' => 'form-control'
																						)) ?>
																		</td>
																		<td>
																			<?php echo $this->Form->input('religious_en',array(
																							'label' => false,
																							'class' => 'form-control'
																						)) ?>
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

												<div class="tab-pane fade" id="tab-profile-family">
													<div class="col-lg-12 col-md-12 col-sm-12 maxW600">
														<div class="main-box">
															<header class="main-box-header clearfix">
																<h2><?= __('Add Family') ?></h2>
															</header>
															<div class="main-box-body clearfix">
																<?php echo $this->Form->create('TraineeFamily', array(
																	'action' => 'add',
																	'inputDefaults' => array(
																		'div' => false,
																		)
																)); ?>
																<?php echo $this->Form->hidden('trainee_id', array('value' => $this->request->data['Trainee']['id'])); ?>
																	<div class="row">
																		<div class="form-group col-lg-3 col-md-3 col-sm-3" style="">
																			<label for="family_name_full" class=""><?= __('Full Name') ?></label>
																			<?php echo $this->Form->input('name',array(
																				'label' => false,
																				'class' => 'form-control maxW160',
																				'required' =>true
																			)) ?>
																		</div>
																	<!-- //新しいタスクを追加の処理
																		$('#new_todo_form').on('submit', function(){
																		//taskを取得
																		var task_var = $('#new_todo').val();
																		//ajax処理
																		$.post('_ajax.php', {
																			task: task_var,
																			mode: 'create',
																			token: $('#token').val()
																		}, function(res){ //自動発行されたid(lastInsertId())を取得してきてresに格納して持ってくる。
																		//liを一番上に追加する
																			var $li = $('#todo_template').clone();
																			//$liにすることで、オブジェクトとしてあとでattrなどメソッドチェーンが利用できる。
																			//.clone()によって、templateを引っ張ってこれる。
																			$li
																				.attr('id', 'todo_' + res.id) //liにid="todo_{lastInsertId()}"をattributeする。
																				.data('id', res.id) //data-id="{lastInsertId()}"にする。
																				.find('.todo_title').text(title); //li内の.todo_titleの中身(span)にtitleを挿入する。
																			$('#todos').prepend($li.fadeIn()); ul#todosの直下に$liをprepend(挿入)する。
																			$('#new_todo').val('').focus(); //入力した内容が削除されて、フォーカスが当たるようにする。
																		});
																		return false; //画面遷移させないようにするため。
																		</div>-->

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
																				'class' => "form-control maxW160",
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
																					'class' => 'form-control maxW160'
																				)) ?>
																			</div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="form-group col-lg-3 col-md-3 col-sm-3">
																			<label for="" class=""><?= __('Phone') ?></label>
																			<?php echo $this->Form->input('phone', array(
																				'label' => false,
																				'class' => 'form-control maxW160',
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
																					'class' => "form-control sel_job_family",
																					'div' => false,
																					'style' => 'width:200px;'
																				)); ?>
																				<button type="button" id="" class="md-trigger btn btn-primary" data-modal="modal-job">
																					<i class="fa fa-plus-circle fa-lg"></i> <?= __('Add Job') ?>
																				</button>
																			</div>
																		</div>
																	</div>
																	<button type="submit" class="btn btn-success family_register_btn pull-right">
																		<i class="fa fa-plus-circle fa-lg"></i> <?= __('Add Family') ?>
																	</button>
																<?php echo $this->Form->end(); ?>
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
																	<tbody>
																		<?php foreach ($trainee_families as $family) : ?>
																			<?php
																				echo '<tr data-family-id="'.$family['TraineeFamily']['id'].'">';
																				echo '<td>';
																				echo $family['TraineeFamily']['name'];
																				echo '</td><td>';
																				echo $family['TraineeFamily']['relationship'];
																				echo '</td><td>';
																				echo $family['TraineeFamily']['birthday']." (".$this->Btn->calcAge($family['TraineeFamily']['birthday']).")";
																				echo '</td><td>';
																				echo $this->Btn->switchLang($lang, $family['Job']['job_jp'], $family['Job']['job_en']);
																				echo '</td><td>';
																				echo $family['TraineeFamily']['phone'];
																				echo '</td>';
																				echo '<td><div class="actions text-center">';
																				echo $this->Form->postlink(
																					'<i class="fa fa-pencil"></i>',
																					array('controller' => 'trainee_families', 'action' => 'edit',$family['TraineeFamily']['id']),
																					array('escape' => false, 'class' => 'table-link' )
																				);
																				echo $this->Form->postlink(
																					'<i class="fa fa-trash-o"></i>',
																					array('controller' => 'trainee_families', 'action' => 'delete',$family['TraineeFamily']['id']),
																					array('confirm' => __('Are you sure you want to delete # %s?', $family['TraineeFamily']['id']),'escape' => false, 'class' => 'table-link red' )
																				);
																				echo '</div></td>';
																				echo "</tr>"
																			 ?>
																		<?php endforeach; ?>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-pane fade" id="tab-profile-career">
													<div class="table-responsive maxW850">
														<?php echo $this->Form->create('Trainee', array(
															'class' => 'form_trainee_edit',
															'inputDefaults' => array(
																'div' => false,
																)
														)); ?>
														<?php echo $this->Form->hidden('id'); ?>
															<table class="table table-bordered table-hover">
																<thead>
																	<tr>
																		<th ><span></span></th>
																		<th class="text-center" style="width:45%"><span>日本語</span></th>
																		<th class="text-center" style="width:45%"><span>English</span></th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td rowspan="4">
																			<?= __('Academic History') ?>
																		</td>
																		<td class="td_first_block">
																			<?php echo $this->Form->input('academic1_jp',array(
																				'label' => '学校名',
																				'class' => 'form-control maxW250'
																			)) ?>
																		</td>
																		<td>
																			<div class="form-group">
																				<div class="row">
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<label>From</label>
																						<input type="month" name="data[Trainee][academic1_from]" value="<?php echo $this->request->data['Trainee']['academic1_from']; ?>" class="form-control maxW200" id="TraineeAcademic1FromMonth">
																					</div>
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<label for="">To</label>
																						<input type="month" name="data[Trainee][academic1_to]" value="<?php echo $this->request->data['Trainee']['academic1_to']; ?>" class="form-control maxW200" id="TraineeAcademic1ToMonth">
																					</div>
																				</div>
																			</div>
																			<?php echo $this->Form->input('academic1_en',array(
																				'label' => 'Shool',
																				'class' => 'form-control maxW250'
																			)) ?>
																		</td>
																	</tr>
																	<tr>
																		<td class="td_first_block">
																			<?php echo $this->Form->input('academic2_jp',array(
																				'label' => '学校名',
																				'class' => 'form-control maxW250'
																			)) ?>
																		</td>
																		<td>
																			<div class="form-group">
																				<div class="row">
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<label>From</label>
																						<input type="month" name="data[Trainee][academic2_from]" value="<?php echo $this->request->data['Trainee']['academic2_from']; ?>" class="form-control maxW200" id="TraineeAcademic2FromMonth">
																					</div>
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<label for="">To</label>
																						<input type="month" name="data[Trainee][academic2_to]" value="<?php echo $this->request->data['Trainee']['academic2_to']; ?>" class="form-control maxW200" id="TraineeAcademic2ToMonth">
																					</div>
																				</div>
																			</div>
																			<?php echo $this->Form->input('academic2_en',array(
																				'label' => 'Shool',
																				'class' => 'form-control maxW250'
																			)) ?>
																		</td>
																	</tr>
																	<tr>
																		<td class="td_first_block">
																			<?php echo $this->Form->input('academic3_jp',array(
																				'label' => '学校名',
																				'class' => 'form-control maxW250'
																			)) ?>
																		</td>
																		<td>
																			<div class="form-group">
																				<div class="row">
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<label>From</label>
																						<input type="month" name="data[Trainee][academic3_from]" value="<?php echo $this->request->data['Trainee']['academic3_from']; ?>" class="form-control maxW200" id="TraineeAcademic3FromMonth">
																					</div>
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<label for="">To</label>
																						<input type="month" name="data[Trainee][academic3_to]" value="<?php echo $this->request->data['Trainee']['academic3_to']; ?>" class="form-control maxW200" id="TraineeAcademic3ToMonth">
																					</div>
																				</div>
																			</div>
																			<?php echo $this->Form->input('academic3_en',array(
																				'label' => 'Shool',
																				'class' => 'form-control maxW250'
																			)) ?>
																		</td>
																	</tr>
																	<tr>
																		<td class="td_first_block">
																			<?php echo $this->Form->input('academic4_jp',array(
																				'label' => '学校名',
																				'class' => 'form-control maxW250'
																			)) ?>
																		</td>
																		<td>
																			<div class="form-group">
																				<div class="row">
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<label>From</label>
																						<input type="month" name="data[Trainee][academic4_from]" value="<?php echo $this->request->data['Trainee']['academic4_from']; ?>" class="form-control maxW200" id="TraineeAcademic4FromMonth">
																					</div>
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<label for="">To</label>
																						<input type="month" name="data[Trainee][academic4_to]" value="<?php echo $this->request->data['Trainee']['academic4_to']; ?>" class="form-control maxW200" id="TraineeAcademic4ToMonth">
																					</div>
																				</div>
																			</div>
																			<?php echo $this->Form->input('academic4_en',array(
																				'label' => 'Shool',
																				'class' => 'form-control maxW250'
																			)) ?>
																		</td>
																	</tr>
																	<tr>
																		<td rowspan="5">
																			<?= __('Employment History') ?>
																		</td>
																		<td class="td_first_block">
																			<div class="form-group">
																				<div class="row">
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<?php echo $this->Form->input('employ1_jp',array(
																							'label' => '会社名',
																							'class' => 'form-control maxW200'
																						)) ?>
																					</div>
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<?php echo $this->Form->input('employ1_salary',array(
																							'label' => __('Basic Salary'),
																							'class' => 'form-control maxW100'
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
																								'class' => 'form-control sel_job',
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
																						<input type="month" name="data[Trainee][employ1_from]" value="<?php echo $this->request->data['Trainee']['employ1_from']; ?>" class="form-control" id="TraineeEmploy1FromMonth">
																					</div>
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<label for="">To</label>
																						<input type="month" name="data[Trainee][employ1_to]" value="<?php echo $this->request->data['Trainee']['employ1_to']; ?>" class="form-control" id="TraineeEmploy1ToMonth">
																					</div>
																				</div>
																			</div>
																			<div class="form-group">
																				<div class="row">
																					<div class="col-lg-12 col-md-12 col-sm-12">
																						<?php echo $this->Form->input('employ1_en',array(
																							'label' => 'Company',
																							'class' => 'form-control maxW250'
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
																							'class' => 'form-control maxW200'
																						)) ?>
																					</div>
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<?php echo $this->Form->input('employ2_salary',array(
																							'label' => __('Basic Salary'),
																							'class' => 'form-control maxW100 maxW100'
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
																								'class' => 'form-control sel_job',
																								'options' => $option_jobs,
																								'empty' => true,
																								'value' => $this->request->data['Trainee']['employ2_job'],
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
																						<input type="month" name="data[Trainee][employ2_from]" value="<?php echo $this->request->data['Trainee']['employ2_from']; ?>" class="form-control" id="TraineeEmploy2FromMonth">
																					</div>
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<label for="">To</label>
																						<input type="month" name="data[Trainee][employ2_to]" value="<?php echo $this->request->data['Trainee']['employ2_to']; ?>" class="form-control" id="TraineeEmploy2ToMonth">
																					</div>
																				</div>
																			</div>
																			<div class="form-group">
																				<div class="row">
																					<div class="col-lg-12 col-md-12 col-sm-12">
																			<?php echo $this->Form->input('employ2_en',array(
																				'label' => 'Company',
																				'class' => 'form-control maxW250'
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
																							'class' => 'form-control maxW200'
																						)) ?>
																					</div>
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<?php echo $this->Form->input('employ3_salary',array(
																							'label' => __('Basic Salary'),
																							'class' => 'form-control maxW100'
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
																								'class' => 'form-control sel_job',
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
																						<input type="month" name="data[Trainee][employ3_from]" value="<?php echo $this->request->data['Trainee']['employ3_from']; ?>" class="form-control" id="TraineeEmploy3FromMonth">
																					</div>
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<label for="">To</label>
																						<input type="month" name="data[Trainee][employ3_to]" value="<?php echo $this->request->data['Trainee']['employ3_to']; ?>" class="form-control" id="TraineeEmploy3ToMonth">
																					</div>
																				</div>
																			</div>
																			<div class="form-group">
																				<div class="row">
																					<div class="col-lg-12 col-md-12 col-sm-12">
																			<?php echo $this->Form->input('employ3_en',array(
																				'label' => 'Company',
																				'class' => 'form-control maxW250'
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
																							'class' => 'form-control maxW200'
																						)) ?>
																					</div>
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<?php echo $this->Form->input('employ4_salary',array(
																							'label' => __('Basic Salary'),
																							'class' => 'form-control maxW100'
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
																								'class' => 'form-control sel_job',
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
																						<input type="month" name="data[Trainee][employ4_from]" value="<?php echo $this->request->data['Trainee']['employ4_from']; ?>" class="form-control" id="TraineeEmploy4FromMonth">
																					</div>
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<label for="">To</label>
																						<input type="month" name="data[Trainee][employ4_to]" value="<?php echo $this->request->data['Trainee']['employ4_to']; ?>" class="form-control" id="TraineeEmploy4ToMonth">
																					</div>
																				</div>
																			</div>
																			<div class="form-group">
																				<div class="row">
																					<div class="col-lg-12 col-md-12 col-sm-12">
																			<?php echo $this->Form->input('employ4_en',array(
																				'label' => 'Company',
																				'class' => 'form-control maxW250'
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
																							'class' => 'form-control maxW200'
																						)) ?>
																					</div>
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<?php echo $this->Form->input('employ5_salary',array(
																							'label' => __('Basic Salary'),
																							'class' => 'form-control maxW100'
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
																								'class' => 'form-control sel_job',
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
																						<input type="month" name="data[Trainee][employ5_from]" value="<?php echo $this->request->data['Trainee']['employ5_from']; ?>" class="form-control" id="TraineeEmploy5FromMonth">
																					</div>
																					<div class="col-lg-6 col-md-6 col-sm-6">
																						<label for="">To</label>
																						<input type="month" name="data[Trainee][employ5_to]" value="<?php echo $this->request->data['Trainee']['employ5_to']; ?>" class="form-control" id="TraineeEmploy5ToMonth">
																					</div>
																				</div>
																			</div>
																			<div class="form-group">
																				<div class="row">
																					<div class="col-lg-12 col-md-12 col-sm-12">
																			<?php echo $this->Form->input('employ5_en',array(
																				'label' => 'Company',
																				'class' => 'form-control maxW250'
																			)) ?>
																			</div>
																			</div>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td rowspan="2">
																			<?= __('Positions Held') ?>
																		</td>
																		<td>
																			<?php echo $job1['Job1']['job_jp']; ?> 職 <?php echo $this->request->data['Trainee']['job1_term'] ?>年
																		</td>
																		<td>
																			<div class="form-group">
																				<div class="col-lg-4 col-md-4 col-sm-4">
																					<label><?= __('Job') ?></label>
																						<?php echo $this->Form->input('job1_id',array(
																							'label' => false,
																							'div' => false,
																							'class' => 'form-control sel_job',
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
																							'class' => 'form-control'
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
																				<div class="col-lg-4 col-md-4 col-sm-4">
																					<label><?= __('Job') ?></label>
																						<?php echo $this->Form->input('job2_id',array(
																							'label' => false,
																							'div' => false,
																							'class' => 'form-control sel_job',
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
																							'class' => 'form-control'
																						)) ?> Year(s)
																				</div>

																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td>
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
																							'options' => array('0'=> __('No'),'1'=> __('Yes')),
																							'class' => "form-control maxW100",
																							'div' => false
																						)); ?>
																					</div>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-lg-6 col-md-6 col-sm-6">
																					<label for="">From</label>
																					<input type="month" name="data[Trainee][visit_jpn_from]" value="<?php echo $this->request->data['Trainee']['visit_jpn_from']; ?>" class="form-control" id="TraineeVisitJpnFromMonth">
																				</div>
																				<div class="col-lg-6 col-md-6 col-sm-6">
																					<label for="">To</label>
																					<input type="month" name="data[Trainee][visit_jpn_to]" value="<?php echo $this->request->data['Trainee']['visit_jpn_to']; ?>" class="form-control" id="TraineeVisitJpnToMonth">
																				</div>
																			</div>
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
												<div class="tab-pane fade" id="tab-profile-others">
													<div class="table-responsive maxW900">
														<?php echo $this->Form->create('Trainee', array(
															'class' => 'form_trainee_edit',
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
																		<td>
																			<?= __('Purpose to visit Japan') ?>
																		</td>
																		<td>
																			<?php echo $this->Form->textarea('purpose_jp',array(
																				'rows' => '3',
																				'class' => 'form-control',
																				'label' => false
																			)) ?>
																		</td>
																		<td>
																			<?php echo $this->Form->textarea('purpose_en',array(
																				'rows' => '3',
																				'class' => 'form-control',
																				'label' => false
																			)) ?>
																		</td>
																	</tr>
																	<tr>
																		<td>
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
																						'class' => "form-control maxW100",
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
																							'class' => "form-control maxW160",
																							'required' =>true
																						)); ?>
																				</div>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><?= __('Plan after return') ?></td>
																		<td>
																			<?php echo $this->Form->textarea('plan_after_return_jp',array(
																				'rows' => '2',
																				'class' => 'form-control',
																				'label' => false
																			)) ?>
																		</td>
																		<td>
																			<?php echo $this->Form->textarea('plan_after_return_en',array(
																				'rows' => '2',
																				'class' => 'form-control',
																				'label' => false
																			)) ?>
																		</td>
																	</tr>
																	<tr>
																		<td><?= __('Save money in 3 years') ?></td>
																		<td>
																			<?php echo $this->Form->input('saving_money',array(
																				'class' => 'form-control',
																				'label' => false,
																				'style' => 'width:100px;display:inline'
																			)) ?> 万円
																		</td>
																		<td></td>
																	</tr>
																	<tr>
																		<td><?= __('Current Status after return') ?></td>
																		<td>
																			<?php echo $this->Form->textarea('status_after_return_jp',array(
																				'rows' => '3',
																				'class' => 'form-control',
																				'label' => false
																			)) ?>
																		</td>
																		<td>
																			<?php echo $this->Form->textarea('status_after_return_en',array(
																				'rows' => '3',
																				'class' => 'form-control',
																				'label' => false
																			)) ?>
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
																			'type' => 'file'
																			));
															?>
															<?php echo $this->Form->hidden('TraineeDocument.trainee_id', array('value' => $this->request->data['Trainee']['id'])); ?>
															<?php echo $this->Form->hidden('TraineeDocument.trainee_control_no', array('value' => $this->request->data['Trainee']['control_no'])); ?>
															<div class="form-group">
																<label><?= __('Choose Upload Document') ?></label>
																<?php echo $this->Form->file('TraineeDocument.img',
																	array(
																		'required' => true,
																		'style'=>'cursor:pointer'));
																?>
															</div>
															<div class="form-group">
																<?php echo $this->Form->input('doc_name_en', array(
																	'class' => 'form-control',
																	'label' => __('Document Name_English'),
																	'required' => true));
																?>
															</div>
															<div class="form-group">
																<?php echo $this->Form->input('doc_name_jp', array(
																	'class' => 'form-control',
																	'label' => __('Document Name_Japanese'),
																	'required' => true));
																?>
															</div>
															<button type="submit" class="btn btn-success">
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
																		<?php
																			echo "<tr>";
																			echo "<td>";
																			echo $doc['DocImg']['doc_name_jp']."<br>".$doc['DocImg']['doc_name_en'];
																			echo '</td><td class="text-center">';
																			echo '<a href="/dev/img/trainee_documents/'.$doc['DocImg']['img_file_name'].'" class="table-link popup" alt="Show Image"><i class="fa fa-eye fa-lg"></i></a>';
																			echo $this->Html->link(
																				'<i class="fa fa-pencil"></i>',
																				array(
																					'controller' => 'trainee_documents', 'action'=> 'edit', $doc['DocImg']['id']
																					),
																				array(
																					'escape' => false, 'class' => 'table-link'
																					)
																				);
																			echo $this->Form->postlink(
																				'<i class="fa fa-trash-o"></i>',
																				array(
																					'controller' => 'trainee_documents', 'action' => 'delete',$doc['DocImg']['id']
																					),
																				array(
																					'confirm' => __('Are you sure you want to delete # %s?', $doc['DocImg']['id']),'escape' => false, 'class' => 'table-link red'
																					)
																				);
																			echo "</td></tr>";
																		 ?>
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
									<!--
									//getImages()というメソッドを使い、$images[]に画像を格納して
									予め準備しておいた
									//<ul>内にforeachで回していく。
									//<li> <a href="<?php //echo basename(IMAGES_DIR).'/'.basename($image);;?>"> //basename(IMAGE_DIR) =>
									 -->
									<!-- 画像アップロード処理
									//画像を入れるフォルダ img/trainee/
									//サムネイルを入れるフォルダ img/trainee/thumbs/
									//パーミッションは755に
									<form action="" enctype="multipart/form-data" id="upload_form"> <=jquery用にidをセット
									<input type="hidden" name="MAX_FILE_SIZE" value="<?php //echo h(MAX_FILESIZE);?>" defineでMAX_FILE_SIZEを作成し、ファイルの最大容量(10*1024*1024=10MB)を設定
									<input type="file" name="image" id="upload_file"> //jquery用にidをセット
									<script>
									$(function(){ //input#upload_fileの中身がchangeしたら、#upload_formをsubmit
										$('#upload_file').on('change', function(){$('#upload_form').submit();});
									})
									</script>
									 -->

								<div class="tab-pane fade" id="tab-interview">
									<div class="">
										<div class="table-responsive maxW750">
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
															<?php
																echo "<tr><td>";
																echo $res['Interview']['interview_date'] . " " . $res['Interview']['interview_time'];
																echo $this->Html->link(
																	__('Interview Detail Page'),
																	array('controller' => 'interviews', 'action' => 'profile',$res['Interview']['id']),
																	array('escape' => false, 'class' => '', 'target' => '_blank')
																);
																echo "</td><td>";
																echo $this->Btn->switchLang($lang, $res['Company']['company_jp'], $res['Company']['company_en']) . " (" . $this->Btn->switchLang($lang, $res['Association']['association_jp'], $res['Association']['association_en']) . " )";
																echo "</td><td>";
																echo $this->Btn->switchLang($lang, $res['InterviewResultAlias']['result_jp'],$res['InterviewResultAlias']['result_en']);
																echo "</td></tr>"
															 ?>
														<?php endforeach; ?>
													<?php endif; ?>
												</tbody>
											</table>
										</div>
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
																			'action' => 'add',
																			));
																		?>
																		<?php echo $this->Form->hidden('trainee_id', array('value' => $this->request->data['Trainee']['id'])) ?>
																		<div class="form-group">
																			<label for="payScheduleDate"><?= __('Expected Pay Date') ?></label>
																			<div class="input-group">
																				<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
																				<input type="date" name='data[TraineeExpense][expected_date]' class="form-control maxW200" id="" >
																			</div>
																		</div>
																		<div class="form-group">
																			<label for="paySheduleAmount"><?= __('Expected Price') ?></label>
																			<div class="input-group">
																				<span class="input-group-addon">$</span>
																				<input type="number" name='data[TraineeExpense][expected_price]' class="form-control maxW200" id="paySheduleAmount" size="5">
																			</div>
																		</div>
																		<button type="submit" class="btn btn-primary"><?= __('Add') ?></button>
																		<?php echo $this->Form->end(); ?>
																	</div>
																</div>
															</div>
															<!-- <div class="col-lg-6 col-md-6 col-sm-6">
																<div class="main-box">
																	<header class="main-box-header clearfix">
																		<h2>Pay Record</h2>
																	</header>
																	<div class="main-box-body clearfix">
																		<div class="form-group">
																			<p>必要支払い金額: $5000</p>
																			<p>支払い済み金額: $500</p>
																			<p>残額: <span class="red">$4500</span></p>
																		</div>
																	</div>
																</div>
															</div> -->

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
																						<?php echo $this->form->date('TraineeExpense.pay_date', array(
																							'label' => false,
																							'class' => 'form-control maxW200 chk expense-'.$expense['TraineeExpense']['id'],
																							'value' => $expense['TraineeExpense']['pay_date'],
																							'disabled' => true
																							));?>
																					</div>
																					<div class="col-lg-3 col-md-3 col-sm-3">
																						<?php echo $this->form->input('TraineeExpense.pay_price', array(
																							'label' => __('Price($)'),
																							'type' => 'number',
																							'class' => 'form-control maxW100 chk expense-'.$expense['TraineeExpense']['id'],
																							'value' => $expense['TraineeExpense']['pay_price'],
																							'disabled' => true
																							));?>
																					</div>
																					<div class="col-lg-4 col-md-4 col-sm-4">
																					<?php echo $this->Form->input('TraineeExpense.note', array(
																						'label' => __('Note'),
																						'class' => 'form-control expense-'.$expense['TraineeExpense']['id'],
																						'value' => $expense['TraineeExpense']['note'],
																						'disabled' => true
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
																	</tbody>
																</table>
																<?php echo $this->Form->create('TraineeExpense', array(
																	 'controller' => 'trainee_expenses', 'action' => 'update',
																	'class' => 'hide'
																)); ?>
																<?php echo $this->Form->hidden('id', array('label' => false,)) ?>
																<?php echo $this->Form->hidden('trainee_id', array('label' => false,)) ?>
																<?php echo $this->Form->hidden('pay_date', array('label' => false,)) ?>
																<?php echo $this->Form->hidden('pay_price', array('label' => false,)) ?>
																<?php echo $this->Form->hidden('note', array('label' => false,)) ?>

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
																				'action' => 'add',
																				));
																			?>
																			<?php echo $this->Form->hidden('trainee_id', array('value' => $this->request->data['Trainee']['id'])) ?>
																				<div class="row">
																					<div class="col-lg-12 col-md-12 col-sm-12">
																						<div class="form-group">
																							<label for=""><?= __('Pay Month') ?></label>
																							<input type="month" name="data[TraineeMicrofinanceRecord][pay_month]" class="form-control" id="TraineeMicrofinanceRecordPayMonthMonth" style="width:180px">
																						</div>
																					</div>
																					<div class="col-lg-12 col-md-12 col-sm-12">
																						<div class="form-group">
																							<label for=""><?= __('Pay Status') ?></label>
																							<?php echo $this->Form->input('status_id', array(
																								'label' => false,
																								'type' => 'select',
																								'class' => 'form-control maxW100',
																								'options' => array('0'=> __('Not Yet'),'1'=> __('OK')),
																							)) ?>
																						</div>
																					</div>
																				</div>
																				<div class="form-group">
																					<?php echo $this->Form->input('note', array(
																						'label' => __('Note'),
																						'class' => 'form-control',
																					)) ?>
																				</div>
																				<button type="submit" class="btn btn-primary"><?= __('Add') ?></button>
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
																						'type' => 'file'
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
																								'style'=>'cursor:pointer'));
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
																											<a href="/dev/img/trainee_microfinance_images/original/<?php echo $image['TraineeMicrofinanceImage']['img_file_name'];?>" class="table-link popup" alt="Show Image">
																												<i class="fa fa-eye fa-lg"></i>
																											</a>
																										<?php echo $this->Html->link(
																											'<i class="fa fa-pencil"></i>',
																											array(
																												'controller' => 'trainee_microfinance_images', 'action'=> 'edit', $image['TraineeMicrofinanceImage']['id']
																												),
																											array(
																												'escape' => false, 'class' => 'table-link'
																												)
																											);
																										echo $this->Form->postlink(
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
																		<tbody>
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
								</div>
								<div class="tab-pane fade" id="tab-chat">
									<div class="conversation-wrapper">
										<div class="conversation-content">
											<div class="conversation-inner">
												<div class="conversation-item item-right clearfix">
													<!-- <div class="conversation-user">
														<img src="img/samples/kunis.png" alt=""/>
													</div> -->
													<div class="conversation-body">
														<div class="name">
															期待していること
														</div>
														<div class="time hidden-xs">
															12/07/2015
														</div>
														<div class="text">
															にほんにいったら、おいしいごはんをたくさんたべて、かわいいおんなひとをたくさんたべて、しごとをがんばりたいです。
														</div>
													</div>
												</div>
												<div class="conversation-item item-right clearfix">
													<!-- <div class="conversation-user">
														<img src="img/samples/kunis.png" alt=""/>
													</div> -->
													<div class="conversation-body">
														<div class="name">
															不安なこと
														</div>
														<div class="time hidden-xs">
															12/07/2015
														</div>
														<div class="text">
															日本人はわたしをやさしいかわからないですから不安です。また、わたしは日本語を話せないですので、もしわたしがこまったとき、たすけてくれる友だちがいないかもしれません。またかわいいおんなひとにお金をとられるかも知れないですので困ります。
														</div>
													</div>
												</div>
												<!-- <div class="conversation-item item-left clearfix">
													<div class="conversation-user">
														<img src="img/samples/ryan.png" alt=""/>
													</div>
													<div class="conversation-body">
														<div class="name">
															Ryan Gossling
														</div>
														<div class="time hidden-xs">
															September 21, 2013 18:28
														</div>
														<div class="text">
															I don't think they tried to market it to the billionaire, spelunking,
															base-jumping crowd.
														</div>
													</div>
												</div> -->
												<div class="conversation-item item-right clearfix">
													<!-- <div class="conversation-user">
														<img src="img/samples/kunis.png" alt=""/>
													</div> -->
													<div class="conversation-body">
														<div class="name">
															日本に行ってよかったこと
														</div>
														<div class="time hidden-xs">
															12/05/2016
														</div>
														<div class="text">
															私は日本へ技能実習生として採用頂き、縫製に関わる技術は元より、日本国民固有の改善への飽くなき探究心に触れ、また人と人との調和を大切にする心とそれに基づく独特な言動に深く感銘を受けました。祖国カンボジアを出国するときに抱えていた数多くの不安がありましたが、現地の受入企業で働く方々、街の警察官、道行く知らない人たち一人一人が優しく手助けをしてくださったので、安心安全に日々を過ごすことができました。
														</div>
													</div>
												</div>
												<div class="conversation-item item-right clearfix">
													<!-- <div class="conversation-user">
														<img src="img/samples/kunis.png" alt=""/>
													</div> -->
													<div class="conversation-body">
														<div class="name">
															日本に行って困ったこと
														</div>
														<div class="time hidden-xs">
															12/05/2016
														</div>
														<div class="text">
															上記には日本国最高バンザイという旨書きましたけどぶっちゃけ日本最悪でした。マジ給料未払いのときとかあったし、職場の人は明らか差別的な目で見てくるし、全然日本語教えてくれないし、てか「家の上にバナナがあります」とか使うとこなかったんですけどｗｗまあ冗談は置いておいて、一番困ったのが冬がむちゃくちゃ寒いのに洋服が高すぎて買えなかったことと、本当に言葉が通じなくて上司や先輩にたくさん迷惑をかけたので、次に日本へ行く人は、マジでホントちゃんと日本語勉強しといた方がいいよ。日本行ってから欝気味の連れとか結構いてマジ半端なかったからね。
														</div>
													</div>
												</div>

											</div>
										</div>
										<div class="conversation-new-message">
											<form>
												<div class="form-group">
													<textarea class="form-control" rows="2" placeholder="Enter your message..."></textarea>
												</div>

												<div class="clearfix">
													<button type="submit" class="btn btn-success pull-right">Send message</button>
												</div>
											</form>
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
	 ?>

	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>

	$(function(){
		$('.ok').on('click', function(){
			var id = $(this).data('id');
			var trainee_id = $(this).data('trainee-id');

				if ($('.expense-table').find('tr').data('expense-id') == id){
        var pay_date  = $('tr.expense-'+id+ ' #TraineeExpensePayDate').val();
        var pay_price = $('tr.expense-'+id+ ' #TraineeExpensePayPrice').val();
        var note      = $('tr.expense-'+id+ ' #TraineeExpenseNote').val();

        alert(id);
        alert(trainee_id);
        alert(pay_date);
        alert(pay_price);
        alert(note);


				$('#TraineeExpenseUpdateForm #TraineeExpenseId').val(id);
				$('#TraineeExpenseUpdateForm #TraineeExpenseTraineeId').val(trainee_id);
				$('#TraineeExpenseUpdateForm #TraineeExpensePayDate').val(pay_date);
				$('#TraineeExpenseUpdateForm #TraineeExpensePayPrice').val(pay_price);
				$('#TraineeExpenseUpdateForm #TraineeExpenseNote').val(note);
				$('#TraineeExpenseUpdateForm').submit();
			}
		});
	});

	$(function(){
		$('.sel_job').select2({
			placeholder: "<?= __('Select Job') ?>",
			allowClear:false
		});

		$('.sel_job_family').select2({
			placeholder: "<?= __('Select Job') ?>",
			allowClear:false
		});
	});

	//モーダルフォーム
	$(function(){
			$('.job_form_btn').on('click', function(){
				var job_jp = $('#jobJp').val();
				var job_en = $('#jobEn').val();
				if(!job_jp ||!job_en){
					alert("入力されていない項目があります。");
					return ;
				}
				var option = '<option value="'+"lastInsertId"+'">'+job_jp+'</option>';
				$('.sel_job').prepend(option);
				close();
			});

			$('.btn_close').on('click', function(){
				close();
			});
			function close(){
				$('#modal-job').removeClass('md-show');
				$('#jobJp').val("");
				$('#jobEn').val("");
			}
		});

	//学生Voice
	$(document).ready(function() {
		$('.conversation-inner').slimScroll({
	    height: '340px'
	  });
	});

	//画像ポップアップ
	$(function() {
		$(document).ready(function() {
			$('#documents .popup').magnificPopup({
				type: 'image',
				gallery: {
					enabled: true
			    }
			});

			$('#microfinance .popup').magnificPopup({
				type: 'image',
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

	<?php $this->Html->scriptEnd(); ?>