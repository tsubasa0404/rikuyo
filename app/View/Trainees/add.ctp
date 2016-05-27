<?php $this->set('title_for_layout', 'Add Student'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Student List'), '/students'); ?>
<?php $this->Html->addCrumb(__('Add Student'), ''); ?>
					<h1><?= __('Add Student') ?></h1>
					</div>
				</div>
			</div>

<?php echo $this->Session->flash() ?>

			<div class="row">
				<div class="col-lg-8 col-md-10 col-sm-12 maxW500">
					<div class="main-box">
						<div class="main-box-body clearfix">
							<?php echo $this->Form->create('Trainee', array(
								'action' => 'add',
								'class' => 'form_trainee_register',
								'inputDefault' => array(
									'div' => false
									)
							)); ?>
								<h3><span><?= __('Basic Info')?></span></h3>
								<div class="form-group">
									<?php echo $this->Form->input('control_no', array(
										'label' => __('Student ID'),
										'type' => 'text',
										'class' => 'form-control maxW160',
										'placeholder' => __('ex.T16030101'),
										'required' => true,
										'value' => $control_no
									)); ?>
								</div>
								<div class="row">
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<label><?= __('Date In') ?></label>
										<?php echo $this->Form->date('date_in', array(
											'label' => false,
											'class' => 'form-control maxW160',
											'required' => true
										)) ?>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-lg-6 col-md-6 col-sm-6">
										<?php echo $this->Form->input('family_name_kh', array(
											'label' => __('Famly Name in Khmer'),
											'type' => 'text',
											'class' => 'form-control',
											'placeholder' => 'ឈ្មោះគ្រួសារ',
											'required' => true
										)); ?>
									</div>
									<div class="form-group col-lg-6 col-md-6 col-sm-6">
										<?php echo $this->Form->input('family_name_en', array(
											'label' => __('Famly Name in English'),
											'type' => 'text',
											'class' => 'form-control',
											'placeholder' => 'Family Name in English',
											'required' => true
										)); ?>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-lg-6 col-md-6 col-sm-6">
										<?php echo $this->Form->input('given_name_kh', array(
											'label' => __('Given Name in Khmer'),
											'type' => 'text',
											'class' => 'form-control',
											'placeholder' => 'ឈ្មោះ',
											'required' => true
										)); ?>
									</div>
									<div class="form-group col-lg-6 col-md-6 col-sm-6">
										<?php echo $this->Form->input('given_name_en', array(
											'label' => __('Given Name in English'),
											'type' => 'text',
											'class' => 'form-control',
											'placeholder' => 'Given Name in English',
											'required' => true
										)); ?>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-lg-4 col-md-4 col-sm-4">
										<label><?= __('Sex')?></label>
										<?php echo $this->Form->input('sex', array(
												'legend' => false,
												'before' => '<div class="radio">',
												'separator' => '</div><div class="radio">',
												'after' => '</div>',
												'type' => 'radio',
												'options' => array('male' =>__('Male'),'female' =>__('Female')),
											'required' => true
											)) ?>
									</div>
									<div class="form-group col-lg-4 col-md-4 col-sm-4">
										<label><?= __('Handedness')?></label>
										<?php echo $this->Form->input('handed', array(
												'legend' => false,
												'before' => '<div class="radio">',
												'separator' => '</div><div class="radio">',
												'after' => '</div>',
												'type' => 'radio',
												'options' => array('right' =>__('Right'),'left' =>__('Left')),
											'required' => true
											)) ?>
									</div>
									<div class="form-group col-lg-4 col-md-4 col-sm-4">
										<label><?= __('Marriage')?></label>
										<?php echo $this->Form->input('married', array(
												'legend' => false,
												'before' => '<div class="radio">',
												'separator' => '</div><div class="radio">',
												'after' => '</div>',
												'type' => 'radio',
												'options' => array('single' =>__('Single'),'married' =>__('Married')),
											'required' => true
											)) ?>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<label><?= __('Birthday') ?></label>
										<?php echo $this->Form->date('birthday', array(
											'label' => false,
											'class' => 'form-control maxW160',
											'required' => true
										)) ?>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-lg-4 col-md-4 col-sm-4">
										<?php echo $this->Form->input('height', array(
										'label' => __('Height(cm)'),
										'type' => 'number',
										'class' => 'form-control maxW100',
										'required' => true,
										'min' => 0,
										'step' => 0.1
									)); ?>
									</div>
									<div class="form-group col-lg-4 col-md-4 col-sm-4">
										<?php echo $this->Form->input('weight', array(
										'label' => __('Weight(kg)'),
										'type' => 'number',
										'class' => 'form-control maxW100',
										'required' => true,
										'min' => 0,
										'step' => 0.1
									)); ?>
									</div>
									<div class="form-group col-lg-4 col-md-4 col-sm-4">
										<?php echo $this->Form->input('shoe_size', array(
										'label' => __('Shoe Size(cm)'),
										'type' => 'number',
										'class' => 'form-control maxW100',
										'required' => true,
										'min' => 0,
										'step' => 0.1
									)); ?>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-lg-6 col-md-6 col-sm-6">
										<?php echo $this->Form->input('face_feature_kh', array(
										'label' => __('Face Feature in Khmer(*)Optional'),
										'type' => 'text',
										'class' => 'form-control maxW200',
									)); ?>
									</div>
									<div class="form-group col-lg-6 col-md-6 col-sm-6">
										<?php echo $this->Form->input('face_feature_en', array(
										'label' => __('Face feature in English(*)Optional'),
										'type' => 'text',
										'class' => 'form-control maxW200',
									)); ?>
									</div>
								</div>

								<h3><span><?= __('Current Address')?></span></h3>
								<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-4">
										<div class="form-group form-group-select2">
											<label for="TraineeProvinceId"><?= __('Province') ?></label>
											<select  id="TraineeProvinceId" name="data[Trainee][province_id]" class="form-control cam_province_id" required="">
												<option value=""></option>
												<option value="1">Banteay Meanchey</option>
												<option value="2">Battambang</option>
												<option value="3">Kampong Cham</option>
												<option value="4">Kampong Chhnang</option>
												<option value="5">Kampong Speu</option>
												<option value="6">Kampong Thom</option>
												<option value="7">Kampot</option>
												<option value="8">Kandal</option>
												<option value="9">Kep</option>
												<option value="10">Koh Kong</option>
												<option value="11">Kratie</option>
												<option value="12">Mondol Kiri</option>
												<option value="13">Otdar Meanchey</option>
												<option value="14">Pailin</option>
												<option value="15">Phnom Penh</option>
												<option value="16">Preah Sihanouk</option>
												<option value="17">Preah Vihear</option>
												<option value="18">Prey Veng</option>
												<option value="19">Pursat</option>
												<option value="20">Ratanak Kiri</option>
												<option value="21">Siem Reap</option>
												<option value="22">Stung Treng</option>
												<option value="23">Svay Rieng</option>
												<option value="24">Takeo</option>
												<option value="25">Tbong Khmum</option>
											</select>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4">
										<div class="form-group form-group-select2">
											<label for="TraineeDistrictId"><?= __('District') ?></label>
											<select id="TraineeDistrictId" name="data[Trainee][district_id]" class="form-control cam_district_id" required="">
											</select>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4">
										<div class="form-group form-group-select2">
											<label for="TraineeCommuneId"><?= __('Commune')?></label>
											<select id="TraineeCommuneId" name="data[Trainee][commune_id]" class="form-control cam_commune_id" required="">
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<?php echo $this->Form->input('address_kh', array(
										'label' => __('Address(No, Street, Village, Khmer)'),
										'type' => 'text',
										'class' => 'form-control maxW300',
											'required' => true
									)); ?>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<?php echo $this->Form->input('address_en', array(
										'label' => __('Address(No, Street, Village, English)'),
										'type' => 'text',
										'class' => 'form-control maxW300',
											'required' => true
									)); ?>
									</div>
								</div>
								<div class="form-group">
									<label for=""><?= __('Phone') ?></label>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-phone"></i></span>
										<input name="data[Trainee][phone]" class="form-control maxW160" maxlength="255" type="text" id="TraineePhone">
									</div>
								</div>

								<div class="form-group">
									<label for=""><?= __('Facebook User ID(*)Optional') ?></label>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-facebook-square"></i></span>
										<textarea name="data[Trainee][facebook]" class="form-control" id="TraineeFacebook"></textarea>
									</div>
									<span class="help-block">http://www.facebook.com/<span class="red">user-id</span></span>
								</div>
								<div class="form-group">
									<label for=""><?= __('Mail(*)Optional') ?></label>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
										<input name="data[Trainee][mail]" class="form-control maxW200" maxlength="255" type="text" id="TraineeMail">
									</div>
								</div>
								<div class="row">
									<div class="form-group col-lg-4 col-md-4 col-sm-4">
										<label><?= __('Languages') ?></label><br>
										<div class="checkbox-nice checkbox-inline">
											<input type="hidden" name="data[Trainee][english]" value="0" id="TraineeEnglish_">
											<input type="checkbox" name="data[Trainee][english]" value="1" id="TraineeEnglish" />
											<label for="TraineeEnglish">
												<?= __('English') ?>
											</label>
										</div>
									</div>
									<div class="form-group col-lg-6 col-md-6 col-sm-6">
										<?php echo $this->Form->input('lang_others_en', array(
										'label' => __('Other languages'),
										'type' => 'text',
										'class' => 'form-control',
										'placeholder' => __('Enter in English')
									)); ?>
									</div>
								</div>
								<div class="form-group">
									<label><?= __('Experience to visit Japan') ?></label>
									<div class="radio">
										<input type="radio" name="data[Trainee][visit_jpn]" id="TraineeVisitJpnNo" value="0">
										<label for="TraineeVisitJpnNo">
											<?= __('No') ?>
										</label>
									</div>
									<div class="radio">
										<input type="radio" name="data[Trainee][visit_jpn]" id="TraineeVisitJpnYes" value="1">
										<label for="TraineeVisitJpnYes">
											<?= __('Yes') ?>
										</label>
									</div>

										<div class="row">
											<div class="form-group experience">
												<div class="col-lg-6 col-md-6 col-sm-6">
													<div class="hide toggle">
														<label for=""><?= __('From')?></label>
														<input type="month" name="data[Trainee][visit_jpn_from]" class="form-control maxW200" id="TraineeVisitJpnFromMonth">
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6">
													<div class="hide toggle">
														<label for=""><?= __('To')?></label>
														<input type="month" name="data[Trainee][visit_jpn_to]" class="form-control maxW200" id="TraineeVisitJpnToMonth">
													</div>
												</div>
											</div>
										</div>
								</div>
								<div class="btn_register">
									<button type="submit" class="pull-right btn btn-default btn_register">
										<i class="fa fa-plus-circle fa-lg"></i> <?= __('Add Student') ?>
									</button>
								</div>
							<?php echo $this->Form->end(); ?>
						</div>
					</div>
				</div>
					<?php echo $this->Form->create('Trainee', array(
						'action' => 'searchTraineeIdAjax',
						'class' => 'hide search_trainee_id_form'
					)) ?>
					<?php echo $this->Form->end(); ?>
	<?php
		echo $this->Html->script('modernizr.custom', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('classie', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('modalEffects', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('rikuyo_js/myModal', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('rikuyo_js/autoFormatRikuyo', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('select2.min', array('inline' => false, 'block' => 'page-js'));
	 ?>
	<!-- this page specific inline scripts -->
	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>

	//experience jp switch
	$(function($) {
		//yesが選択されたらhideをremove
		$('#TraineeVisitJpnYes').on('click', function(){
			$('.experience').find('.toggle').removeClass('hide');
		});
		//noが選択されたらhideをつけてvalueをクリア
		$('#TraineeVisitJpnNo').on('click', function(){
			$('.experience').find('.toggle').addClass('hide');
			$('.hide').each(function(){
				$(this).children('input').val("");
			});
		});

	});
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
		$('.cam_commune_id').select2();
		$('.cam_commune_id').change(function(){
			var commune_id = $(this).select2('val');
			$(this).val(commune_id);
		});


		var districts = <?php echo $districs = json_encode($districts, JSON_HEX_APOS); ?>;
		var communes = <?php echo $communes = json_encode($communes, JSON_HEX_APOS); ?>;
		$('.cam_province_id').change(function(){
				setDistrictSelect($(this).val());
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
			setDistrictSelect('');

			$('.cam_district_id').change(function(){
				setCommuneSelect($(this).val());
			});

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
			setCommuneSelect('');
	});
	<?php $this->Html->scriptEnd(); ?>
