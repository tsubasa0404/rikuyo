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
								<div class="col-lg-6 col-md-6 col-sm-6 maxW600">
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
									</div>
									<div class="main-box-body clearfix">
										<div class="table-responsive flight-schedule maxW600">
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
														<td class="td_first_block"><?= __('Company') ?></td>
														<td>
															<div class="form-group form-group-select2">
																<?php echo $this->Form->input('company_id', array(
																	'label' => false,
																	'type' => 'select',
																	'div' => false,
																	'class' => 'form-control sel_company company_id',
																	'selected' => $this->request->data['Trainee']['company_id'],
																	'options' => $option_companies,
																	'style' => 'display:inline;width:100%',
																	'empty' => '-- Select Company --'
																)) ?>
															</div>
														</td>
													</tr>
													<tr>
														<td class="td_first_block"><?= __('Interview Date') ?></td>
														<td>
															<?php echo $this->Form->date('interview_date',array(
																'label' => false,
																'class' => 'form-control maxW200 interview_date'
															)) ?>
														</td>
													</tr>
													<tr>
														<td class="td_first_block"><?= __('Departure Date') ?></td>
														<td>
															<?php echo $this->Form->date('departure_date',array(
																'label' => false,
																'class' => 'form-control maxW200 departure_date'
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
															'class' => "form-control maxW200 departure_status",
															'div' => false
														)); ?>
														</td>

													</tr>
													<tr>
														<td class="td_first_block"><?= __('Return Date') ?></td>
														<td><?php echo $this->Form->date('return_date',array(
															'label' => false,
															'class' => 'form-control maxW200 return_date'
														)) ?></td>
													</tr>
													<tr>
														<td class="td_first_block"><?= __('Return Status') ?></td>
														<td>
															<?php echo $this->Form->input('return_status_id',array(
																'label' => false,
																'type' => 'select',
																'options' => array('0'=> __('Not Yet'),'1'=> __('Already'), '2'=>__('Run Away')),
																'class' => "form-control maxW200 return_status",
																'div' => false
															)); ?>
														</td>
													</tr>
													<tr>
														<td class="td_first_block"><?= __('Trainee Job') ?></td>
														<td>
															<div class="form-group form-group-select2">
																<?php echo $this->Form->input('trainee_job', array(
																	'label' => false,
								                  'options' => $option_jobs,
								                  'multiple' => true,
								                  'class' => "form-control sel_job trainee_job",
								                  'selected' => explode(",", $this->request->data['Trainee']['trainee_job']),
								                  'style' => array("width:100%"),
								                  'div' => false
																)) ?>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
											<button type="button" class="btn btn-default pull-right update_flight_btn" style="margin-top:-15px;"><span class=" fa fa-plane"></span> <?= __('Save') ?></button>
											<?php echo $this->Form->end(); ?>
										</div>
									</div>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-6 maxW560">
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
												<tr>
													<td class="td_first_block"><?= __('Bank') ?></td>
													<td>
														<div class="row">
															<div class="form-group">
																<div class="col-lg-4 col-md-4 col-sm-4">
																	<?php echo $this->Form->input('bank_status_id',array(
																			'label' => false,
																			'type' => 'select',
																			'options' => array('0'=> __('Not Yet'),'1'=> __('OK')),
																			'class' => "form-control maxW100 bank_status_id",
																			'div' => false
																		)); ?>
																</div>
																<div class="col-lg-8 col-md-8 col-sm-8">
																	<?php echo $this->Form->input('bank_note',array(
																		'label' => false,
																		'placeholder' => __('Note'),
																		'class' => 'form-control bank_note'
																	)) ?>
																</div>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="td_first_block"><?= __('Sign') ?></td>
													<td>
														<div class="row">
															<div class="form-group">
																<div class="col-lg-4 col-md-4 col-sm-4">
																	<?php echo $this->Form->input('sign_status_id',array(
																			'label' => false,
																			'type' => 'select',
																			'options' => array('0'=> __('Not Yet'),'1'=> __('OK')),
																			'class' => "form-control maxW100 sign_status_id",
																			'div' => false
																		)); ?>
																</div>
																<div class="col-lg-8 col-md-8 col-sm-8">
																	<?php echo $this->Form->input('sign_note',array(
																		'label' => false,
																		'placeholder' => __('Note'),
																		'class' => 'form-control sign_note'
																	)) ?>
																</div>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="td_first_block"><?= __('Remark') ?></td>
													<td>
														<div class="row">
															<div class="form-group">
																<div class="col-lg-12 col-md-12 col-sm-12">
																	<?php echo $this->Form->textarea('note',array(
																		'label' => false,
																		'rows' => '4',
																		'class' => 'form-control remark'
																	)) ?>
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
								<li class="active"><a href="#tab-documents" data-toggle="tab"><?= __('Document') ?></a></li>
								<li><a href="#tab-chat" data-toggle="tab"><?= __('Customer Care') ?></a></li>
							</ul>

							<div class="tab-content">
								<div class="tab-pane fade in active" id="tab-documents">
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
																		'class' => 'validate[checkFileType[JPG|JPEG|GIF|PNG|PDF|jpg|jpeg|gif|png|pdf]]'
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
        var company_id = $('.company_id').val();
        var interview_date = $('.interview_date').val();
        var departure_date      = $('.departure_date').val();
        var departure_status_id = $('.departure_status').val();
        var return_date         = $('.return_date').val();
        var return_status_id    = $('.return_status').val();
        var trainee_job    = $('.trainee_job').val();
				$.ajax({
					url:url,
					type:'POST',
					dataType:'json',
					data:{
						id:id,
						company_id:company_id,
						interview_date:interview_date,
						departure_date:departure_date,
						departure_status_id:departure_status_id,
						return_date:return_date,
						return_status_id:return_status_id,
						trainee_job:trainee_job
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
        var bank_status_id            = $('.bank_status_id').val();
        var bank_note                 = $('.bank_note').val();
        var sign_status_id            = $('.sign_status_id').val();
        var sign_note                 = $('.sign_note').val();
        var remark                 = $('.remark').val();


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
						bank_status_id:bank_status_id,
						bank_note:bank_note,
						sign_status_id:sign_status_id,
						sign_note:sign_note,
						remark:remark,
					}, success:function(){
						swal("<?= __('Saved!') ?>", "", "success")
					}, error:function(){
						swal("<?= __('Error!') ?>", "", "error")
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