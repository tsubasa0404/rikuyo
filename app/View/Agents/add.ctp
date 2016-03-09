<?php $this->set('title_for_layout', 'Add Agent'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Agent List'), '/agents'); ?>
<?php $this->Html->addCrumb(__('Add Agent'), ''); ?>
					<h1><?= __('Add Agent') ?></h1>
					</div>
				</div>
			</div>
<?php echo $this->Session->flash(); ?>
			<div class="row" id="company-profile">
				<div class="col-lg-8 col-md-12 col-sm-12 maxW500">
					<div class="main-box clearfix">
						<header class="main-box-header clearfix">
						</header>

						<div class="main-box-body clearfix">
							<div class="company-profile-details">
								<div class="table-responsive">
									<?php echo $this->Form->create('Agent', array(
											'action' => 'add',
											'class' => 'form_agent_register',
											'inputDefault' => array(
												'div' => false
												)
										)); ?>
										<table class="table table-bordered table-hover">
											<tbody>
												<tr>
													<td class="td_first_block">
														<?= __('Agent Name') ?>
													</td>
													<td>
														<?php echo $this->Form->input('agent_en', array(
															'label' => __('Agent Name_English'),
															'type' => 'text',
															'class' => 'form-control',
															'placeholder' => __('Agent Name in English'),
															'required' => true
														)); ?><br>
														<?php echo $this->Form->input('agent_jp', array(
															'label' => __('Agent Name_Japanese'),
															'type' => 'text',
															'class' => 'form-control',
															'placeholder' => __('Agent Name in Japanese'),
															'required' => true
														)); ?>
													</td>
												</tr>
												<tr>
													<td class="td_first_block">
														<?= __('Representative') ?>
													</td>
													<td>
														<div class="row">
															<div class="col-lg-6 col-md-6 col-sm-6">
																<div class="form-group">
																	<?php echo $this->Form->input('rep_family_name_en', array(
																			'label' => __('Family Name_English'),
																			'type' => 'text',
																			'class' => 'form-control',
																			'placeholder' => __('Family Name in English'),
																		'required' => true
																		)); ?>
																</div>
															</div>
															<div class="col-lg-6 col-md-6 col-sm-6">
																<div class="form-group">
																	<?php echo $this->Form->input('rep_given_name_en', array(
																			'label' => __('Given Name_English'),
																			'type' => 'text',
																			'class' => 'form-control',
																			'placeholder' => __('Given Name in English'),
																		'required' => true
																		)); ?>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-lg-12 col-md-12 col-sm-12">
																<div class="form-group">
																	<?php echo $this->Form->input('rep_position_en', array(
																		'label' => __('Position_English'),
																		'type' => 'text',
																		'class' => 'form-control maxW200',
																		'placeholder' => __('Position in English'),
																		'required' => true
																	)); ?>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="form-group col-lg-3 col-md-3 col-sm-3">
																<label><?= __('Sex')?></label>
																<?php echo $this->Form->input('rep_sex', array(
																		'legend' => false,
																		'before' => '<div class="radio">',
																		'separator' => '</div><div class="radio">',
																		'after' => '</div>',
																		'type' => 'radio',
																		'options' => array('male' =>__('Male'),'female' =>__('Female'))
																	)) ?>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="td_first_block">
														<?= __('Establish Date') ?>
													</td>
													<td>
														<div class="row">
															<div class="col-lg-12 col-md-12 col-sm-12">
																<?php echo $this->Form->date('establish_date', array(
																	'label' => false,
																	'class' => 'form-control maxW160',
																)) ?>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="td_first_block">
														<?= __('Capitals') ?>
													</td>
													<td>
														<div class="row">
															<div class="col-lg-6 col-md-6 col-sm-6">
																<div class="form-group">
																	<?php echo $this->Form->input('capital_riel', array(
																		'label' => __('KHR'),
																		'type' => 'number',
																		'class' => 'form-control',
																		'id' => 'capitalKh'
																	)); ?>
																	(<span class="" name="capitalKhOut"></span>)
																</div>
															</div>

															<div class="col-lg-6 col-md-6 col-sm-6">
																<div class="form-group">
																	<?php echo $this->Form->input('capital_jpy', array(
																		'label' => __('JPY'),
																		'type' => 'number',
																		'class' => 'form-control',
																		'id' => 'capitalJp'
																	)); ?>
																	(<span class="" name="capitalJpOut"></span>)
																</div>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="td_first_block">
														<?= __('Sales') ?>
													</td>
													<td>
														<div class="row">
															<div class="col-lg-6 col-md-6 col-sm-6">
																<div class="form-group">
																	<?php echo $this->Form->input('sales_riel', array(
																		'label' => __('KHR'),
																		'type' => 'number',
																		'class' => 'form-control',
																		'id' => 'salesKh'
																	)); ?>
																	(<span class="" name="salesKhOut"></span>)
																</div>
															</div>

															<div class="col-lg-6 col-md-6 col-sm-6">
																<div class="form-group">
																	<?php echo $this->Form->input('sales_jpy', array(
																		'label' => __('JPY'),
																		'type' => 'number',
																		'class' => 'form-control',
																		'id' => 'salesJp'
																	)); ?>
																	(<span class="" name="salesJpOut"></span>)
																</div>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="td_first_block">
														<?= __('Employees Count') ?>

													</td>
													<td>
														<div class="row">
															<div class="col-lg-6 col-md-6 col-sm-6">
																<?php echo $this->Form->input('employee_num', array(
																	'label' => __('Employees Count'),
																	'type' => 'number',
																	'class' => 'form-control',
																	'min' => 0
																)) ?>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="td_first_block">
														<?= __('Trading Partners') ?>
													</td>
													<td>
														<?php echo $this->Form->input('export_en', array(
															'label' => __('Export To_English'),
															'type' => 'text',
															'class' => 'form-control',
														)) ?><br>
														<?php echo $this->Form->input('import_en', array(
															'label' => __('Import From_English'),
															'type' => 'text',
															'class' => 'form-control',
														)) ?>
													</td>
												</tr>

												<tr>
													<td class="td_first_block">
														<?= __('Address') ?>
													</td>
													<td>
														<div class="row">
															<div class="col-lg-6 col-md-6 col-sm-6">
																<div class="form-group form-group-select2">
																	<label for="AssociationProvinceId"><?= __('Province') ?></label>
																	<select  id="AssociationProvinceId" name="data[Association][province_id]" class="form-control cam_province_id">
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
														</div>
														<div class="row">
															<div class="col-lg-6 col-md-6 col-sm-6">
																<div class="form-group form-group-select2">
																	<label for="AssociationDistrictId"><?= __('District') ?></label>
																	<select id="AssociationDistrictId" name="data[Association][district_id]" class="form-control cam_district_id" >
																	</select>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-lg-6 col-md-6 col-sm-6">
																<div class="form-group form-group-select2">
																	<label for="AssociationCommuneId"><?= __('Commune')?></label>
																	<select id="AssociationCommuneId" name="data[Association][commune_id]" class="form-control cam_commune_id" >
																	</select>
																</div>
															</div>
														</div>
														<div class="form-group">
															<?php echo $this->Form->input('address_en', array(
																'label' => __('Address(No, Street, Village, in English)'),
																'type' => 'text',
																'class' => 'form-control'
															)) ;?>
														</div>
													</td>
												</tr>
												<tr>
													<td rowspan="4" class="td_first_block">
														<?= __('Contact') ?>
													</td>
													<td>
														<div class="row">
															<div class="form-group">
																<div class="col-lg-6 col-md-6 col-sm-6">
																	<?php echo $this->Form->input('phone1',array(
																		'label' => __('Phone1'),
																		'class' => 'form-control'
																	)) ?>
																</div>
																<div class="col-lg-6 col-md-6 col-sm-6">
																	<?php echo $this->Form->input('phone1_smb',array(
																		'label' => __('Contact Name'),
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
																<div class="col-lg-6 col-md-6 col-sm-6">
																	<?php echo $this->Form->input('phone2',array(
																		'label' => __('Phone2'),
																		'class' => 'form-control'
																	)) ?>
																</div>
																<div class="col-lg-6 col-md-6 col-sm-6">
																	<?php echo $this->Form->input('phone2_smb',array(
																		'label' => __('Contact Name'),
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
																<div class="col-lg-6 col-md-6 col-sm-6">
																	<?php echo $this->Form->input('mail1',array(
																		'label' => __('Mail1'),
																		'class' => 'form-control'
																	)) ?>
																</div>
																<div class="col-lg-6 col-md-6 col-sm-6">
																	<?php echo $this->Form->input('mail1_smb',array(
																		'label' => __('Contact Name'),
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
																<div class="col-lg-6 col-md-6 col-sm-6">
																	<?php echo $this->Form->input('mail2',array(
																		'label' => __('Mail2'),
																		'class' => 'form-control'
																	)) ?>
																</div>
																<div class="col-lg-6 col-md-6 col-sm-6">
																	<?php echo $this->Form->input('mail2_smb',array(
																		'label' => __('Contact Name'),
																		'class' => 'form-control'
																	)) ?>
																</div>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="td_first_block">
														<?= __('Sector') ?>
													</td>
													<td>
														<?php echo $this->Form->input('sector',array(
															'label' => false,
															'type' => 'select',
															'options' => $option_sectors,
															'class' => "form-control sel_sector",
															'multiple' => true,
															'style' => array("width:140px"),
															'div' => false
														)); ?>

													</td>
												</tr>
												<tr>
													<td class="td_first_block">
														<?= __('Note') ?>
													</td>
													<td>
														<?php echo $this->Form->textarea('note',array(
															'rows' => '4',
															'class' => 'form-control',
															'label' => false
														)) ?>
													</td>
												</tr>
											</tbody>
										</table>
										<div class="profile-message-btn center-block text-right">
										<button type="submit" class="btn btn-default pull-right">
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


	<?php
		echo $this->Html->script('modernizr.custom', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('classie', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('modalEffects', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('rikuyo_js/myModal', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('rikuyo_js/autoFormatRikuyo', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('select2.min', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('jquery.jpostal', array('inline' => false, 'block' => 'page-js'));
	 ?>

	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>
	$(document).ready(function() {

			$('.sel_sector').select2({
				placeholder: '',
				allowClear: false
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

