<?php $this->set('title_for_layout', 'Agent Profile'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Agent List'), '/agents'); ?>
<?php $this->Html->addCrumb(__('Agent Profile'), ''); ?>
					<h1><?= __('Agent Profile') ?></h1>
					</div>
				</div>
			</div>
<?php echo $this->Session->flash() ?>
			<div class="row" id="agent-profile">
				<div class="col-lg-8 col-md-8 col-sm-12 maxW410">
					<div class="main-box clearfix">
						<header class="main-box-header clearfix">
							<h2><?php echo $this->request->data['Agent']['agent_jp'] ?>(<?php echo $this->request->data['Agent']['agent_en'] ?>)</h2>

						</header>
						<div class="main-box-body clearfix">
							<div class="agent-profile-details">
								<div class="table-responsive">
									<?php echo $this->Form->create('Agent', array(
										'action' => 'update',
										'class' => 'form_agent_edit',
										'inputDefaults' => array(
											'div' => false,
											)
									)); ?>
									<?php echo $this->Form->hidden('id'); ?>
										<table class="table table-bordered table-hover">

											<tbody>
												<tr>
													<td class="td_first_block">
														<?= __('Agent Name') ?>
													</td>
													<td class="td_first_block">
														<?php echo $this->Form->input('agent_en', array(
															'label' => __('Agent Name_English'),
															'type' => 'text',
															'class' => 'form-control maxW200',
															'placeholder' => __('Enter Agent Name in English'),
															'required' => true
														)); ?><br>
														<?php echo $this->Form->input('agent_jp', array(
															'label' => __('Agent Name_Japanese'),
															'type' => 'text',
															'class' => 'form-control maxW200',
															'placeholder' => __('Enter Agent Name in Japanese'),
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
																			'class' => 'form-control maxW200',
																			'placeholder' => __('Enter Representative Family Name in English'),
																		'required' => true
																		)); ?>
																</div>
															</div>
															<div class="col-lg-6 col-md-6 col-sm-6">
																<div class="form-group">
																	<?php echo $this->Form->input('rep_given_name_en', array(
																			'label' => __('Given Name_English'),
																			'type' => 'text',
																			'class' => 'form-control maxW200',
																			'placeholder' => __('Enter Representative Given Name in English'),
																		'required' => true
																		)); ?>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-lg-6 col-md-6 col-sm-6">
																<div class="form-group">
																	<?php echo $this->Form->input('rep_position_en', array(
																		'label' => __('Position_English'),
																		'type' => 'text',
																		'class' => 'form-control ',
																		'placeholder' => __('Enter Position in English'),
																		'required' => true
																	)); ?>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="form-group col-lg-3 col-md-3 col-sm-3">
																<label>Sex</label>
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
																	'class' => 'form-control maxW200',
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
																		'class' => 'form-control maxW200',
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
																		'class' => 'form-control maxW200',
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
																		'class' => 'form-control maxW200',
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
																		'class' => 'form-control maxW200',
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
																	'class' => 'form-control maxW200',
																)) ?>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="td_first_block">
														<?= __('Trading Partners') ?>

													</td>
													<td class="td_first_block">
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
														<?= __('Sector') ?>
													</td>
													<td class="td_first_block">
														<?php echo $this->Form->input('sector',array(
															'label' => false,
															'type' => 'select',
															'options' => $option_sectors,
															'selected' => explode(',', $this->request->data['Agent']['sector']),
															'class' => "form-control sel_sector",
															'multiple' => true,
															'div' => false
														)); ?>

													</td>
												</tr>
												<tr>
													<td class="td_first_block">
														<?= __('Note') ?>
													</td>
													<td class="td_first_block">
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
				<div class="col-lg-8 col-md-8 col-sm-12 maxW410">
					<div class="main-box clearfix">
						<header class="main-box-header clearfix">
							<h2></h2>

						</header>
						<div class="main-box-body clearfix">
							<div class="agent-profile-details">
								<div class="table-responsive">
									<?php echo $this->Form->create('Agent', array(
										'action' => 'update',
										'class' => 'form_agent_edit',
										'inputDefaults' => array(
											'div' => false,
											)
									)); ?>
									<?php echo $this->Form->hidden('id'); ?>
										<table class="table table-bordered table-hover">

											<tbody>

												<tr>
													<td class="td_first_block">
														<?= __('Address') ?>
													</td>
													<td>
														<div class="row">
															<div class="col-lg-12 col-md-12 col-sm-12">
																<div class="form-group form-group-select2">
																	<label for="AgentProvinceId"><?= __('Province') ?></label>
																		<?php echo $this->Form->input('province_id', array(
																			'label' => false,
																			'type' => 'select',
																			'div' => false,
																			'class' => 'form-control cam_province_id',
																			'value' => $this->request->data['Agent']['province_id'],
																			'options' => $option_provinces
																		)) ?>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-lg-12 col-md-12 col-sm-12">
																<div class="form-group form-group-select2">
																	<label for="AgentDistrictId"><?= __('District') ?></label>
																	<?php echo $this->Form->input('district_id', array(
																		'label' => false,
																		'type' => 'select',
																		'div' => false,
																		'class' => 'form-control cam_district_id',
																		'value' => $this->request->data['Agent']['district_id'],
																		'options' => $option_districts
																	)) ?>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-lg-12 col-md-12 col-sm-12">
																<div class="form-group form-group-select2">
																	<label for="AgentCommuneId"><?= __('Commune')?></label>
																	<?php echo $this->Form->input('commune_id', array(
																		'label' => false,
																		'type' => 'select',
																		'div' => false,
																		'class' => 'form-control cam_commune_id',
																		'value' => $this->request->data['Agent']['commune_id'],
																		'options' => $option_communes
																	)) ?>
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
																		'class' => 'form-control maxW160'
																	)) ?>
																</div>
																<div class="col-lg-6 col-md-6 col-sm-6">
																	<?php echo $this->Form->input('phone1_smb',array(
																		'label' => __('Contact Name'),
																		'class' => 'form-control maxW160'
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
																		'class' => 'form-control  maxW160'
																	)) ?>
																</div>
																<div class="col-lg-6 col-md-6 col-sm-6">
																	<?php echo $this->Form->input('phone2_smb',array(
																		'label' => __('Contact Name'),
																		'class' => 'form-control maxW160'
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
																		'class' => 'form-control maxW160'
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
																		'class' => 'form-control maxW160'
																	)) ?>
																</div>
															</div>
														</div>
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
							<!-- <div class="center-block pull-left">
                  <a href="agent-db.html" class="btn btn-default">
                    <i class="fa fa-long-arrow-left fa-lg"></i>
                    前のページに戻る
                  </a>
              </div> -->
						</div>
					</div>
				</div>


	<?php
		echo $this->Html->script('modernizr.custom', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('classie', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('modalEffects', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('rikuyo_js/myModal', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('select2.min', array('inline' => false, 'block' => 'page-js'));
	 ?>

	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>
	$(document).ready(function() {
		$('.alert').fadeOut(5000);
			$('.sel_sector').select2({
				placeholder: "<?= __('Select Sectors') ?>",
				allowClear: false
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
			//setDistrictSelect(<?php $this->request->data['Agent']['province_id']; ?>);



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