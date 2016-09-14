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
								<div class="col-lg-5 col-md-5 col-sm-5 maxW400">
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
												'class' => ' validate[checkFileType[JPG|JPEG|GIF|PNG|jpg|jpeg|gif|png]]')); ?>
										</div>
										<button type="submit" class="btn btn-success">
											<i class="fa fa-cloud-upload"></i>
											<?= __('Upload Profile Image') ?>
										</button>
										<?php echo $this->Form->end(); ?>
									</div>


								</div>
								<div class="col-lg-7 col-md-7 col-sm-7">
									<div class="main-box-body clearfix">
										<div class="table-responsive flight-schedule maxW600">
											<?php echo $this->Form->create('Trainee', array(
												'class' => 'form_trainee_edit form_interview_status',
												'action' => 'updateInterviewStatusAjax',
												'inputDefaults' => array(
													'div' => false,
													)
											)); ?>
											<?php echo $this->Form->hidden('id'); ?>
											<table class="table table-bordered table-hover">
												<tbody>
													<tr>
														<td class="td_first_block"><?= __('Interview Status') ?></td>
														<td>
															<?php echo $this->Form->input('student_status_id',array(
															'label' => false,
															'type' => 'select',
															'options' => array('0'=> __('Not Yet'),'1'=> __('Unavailable'), '2' => __('Cancel'), '3' => __('Delayed'), '4' => __('Passed')),
															'class' => "form-control maxW160 student_status",
															'div' => false,
															'selected' => $this->request->data['Trainee']['student_status_id']
														)); ?>
														</td>

													</tr>

												</tbody>
											</table>
											<button type="button" class="btn btn-default pull-right update_interview_status_btn" style="margin-top:-15px;"><span class=" fa fa-plane"></span> <?= __('Save') ?></button>
											<?php echo $this->Form->end(); ?>
										</div>
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
								<li><a href="#tab-interview" data-toggle="tab"><?= __('Interview') ?></a></li>
								<li><a href="#tab-chat" data-toggle="tab"><?= __('Customer Care') ?></a></li>
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

											<!-- trainee profile -->
											<?php echo $this->element('trainee_profile'); ?>
											<!-- // trainee profile -->

										</div>
									</div>
								</div>



								<div class="tab-pane fade" id="tab-interview">

										<div class="table-responsive maxW800">
											<table class="table table-bordered">
												<thead>
													<tr>
														<th class="text-center" ><span><?= __('Interview Date') ?></span></th>
														<th class="text-center"><span><?= __('Company(Association)') ?></span></th>
														<th class="text-center" ><span><?= __('Result'); ?></span></th>
													</tr>
												</thead>
												<tbody>
													<?php if(isset($int_results[0]['Interview']['id'])):?>
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
																	<?php echo
																		$this->Btn->switchLang($lang, $res['Company']['company_jp'], $res['Company']['company_en']);?>
																	(
																	<?php echo
																		$this->Btn->switchLang($lang, $res['Association']['association_jp'], $res['Association']['association_en']);?>
																	)
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
			$('.update_interview_status_btn').on('click', function(){
        var url                 = $('.form_interview_status').attr('action');
        var student_status_id    = $('.student_status').val();

				$.ajax({
					url:url,
					type:'POST',
					dataType:'json',
					data:{
						id:id,
						student_status_id:student_status_id,
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
        var date_in                = $('.date_in').val();
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
            date_in:              date_in,
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
        var latest_academic_history = $('.latest_academic_history').val();
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
        var job_expectation = $('.job_expectation').val();
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
            latest_academic_history: latest_academic_history,
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
            job_expectation: job_expectation,
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

						$tmp = $('tr.tmp_family_add').clone().prependTo(".family_table").removeClass('hide').removeClass('tmp_family_add').attr('data-family-id', rs);
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
						swal("<?= __('Saved!') ?>", "", "success");
						$('.family_name').val("");
						$('.family_relationship').val("");
						$('.family_birthday').val("");
						$('.family_phone').val("");
						$('#select2-TraineeFamilyJobId-container').text("");

					}, error:function(){
						swal("<?= __('Error!') ?>", "", "error");
					}
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

		//nice select boxes( address District)
		$('.cam_district_id').select2();

		//nice select boxes( address District)
		$commune_id = $('.cam_commune_id');
		$commune_id.select2();
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

		$('.sel_job_family').select2();

		$('.family_relationship').select2();

		$('.sel_company').select2({
		});
	});

	<?php $this->Html->scriptEnd(); ?>