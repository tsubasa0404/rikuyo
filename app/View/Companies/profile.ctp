<?php $this->set('title_for_layout', 'Company Profile'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Company List'), '/companies'); ?>
<?php $this->Html->addCrumb(__('Company Profile'), ''); ?>
					<h1><?= __('Company Profile') ?></h1>
					</div>
				</div>
			</div>

			<div class="row" id="company-profile">
				<div class="col-lg-8 col-md-8 col-sm-12 maxW600">
					<div class="main-box clearfix">
						<header class="main-box-header clearfix">
							<h2><?php echo $this->request->data['Company']['company_jp']."(".$this->request->data['Company']['company_en'].")" ?></h2>
						</header>

						<div class="main-box-body clearfix">

							<div class="company-profile-details">
								<div class="table-responsive">
									<?php echo $this->Form->create('Company', array(
										'class' => 'form_company_edit',
										'inputDefaults' => array(
											'div' => false,
											)
									)); ?>
									<?php echo $this->Form->hidden('id'); ?>
									<table class="table table-bordered table-hover">
										<thead>
											<tr>
												<th><span></span></th>
												<th class="text-center"><span></span></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<?= __('Affiliated Association') ?>
												</td>
												<td>
													<div class=" form-group-select2">
														<?php echo $this->Form->input('association_id', array(
															'label' => false,
															'type' => 'select',
															'div' => false,
															'class' => 'form-control sel_association',
															'value' => $this->request->data['Company']['association_id'],
															'options' => $option_associations
														)) ?>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<?= __('Comapny Name') ?>
												</td>
												<td>
													<?php echo $this->Form->input('company_jp',array(
														'label' => false,
														'class' => 'form-control  maxW200'
													)) ?><br>
													<?php echo $this->Form->input('company_en',array(
														'label' => false,
														'class' => 'form-control maxW200'
													)) ?>
												</td>
											</tr>
											<tr>
												<td>
													<?= __('Representative') ?>
												</td>
												<td>
													<div class="form-group">
														<div class="row">
															<div class="col-lg-6 col-md-6 col-sm-6">
																<?php echo $this->Form->input('rep_family_name_jp',array(
																	'label' =>  __('Family Name_Japanese'),
																	'class' => 'form-control maxW200'
																)) ?>
															</div>
															<div class="col-lg-6 col-md-6 col-sm-6">
																<?php echo $this->Form->input('rep_given_name_jp',array(
																	'label' => __('Given Name_Japanese'),
																	'class' => 'form-control maxW200'
																)) ?>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-lg-6 col-md-6 col-sm-6">
															<?php echo $this->Form->input('rep_family_name_en',array(
																'label' => __('Family Name_English'),
																'class' => 'form-control maxW200'
															)) ?>
														</div>
														<div class="col-lg-6 col-md-6 col-sm-6">
															<?php echo $this->Form->input('rep_given_name_en',array(
																'label' => __('Given Name_English'),
																'class' => 'form-control maxW200'
															)) ?>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td rowspan="3">
													<?= __('Address') ?>
												</td>
												<td>
													<div class="row">
														<div class="col-lg-4 col-md-4 col-sm-4">
															<?php echo $this->Form->input('postcode',array(
																'label' => __('Postcode'),
																'class' => 'form-control maxW200',
																'id' => 'postcode',
																'type' => 'text'
															)) ?>
														</div>
													</div>
													<span class="help-block"><?= __('Enter Postcode')?><br>
													<a href="http://www.post.japanpost.jp/zipcode/" target="_blank" ><?= __('Click here if you want to search for postcode.')?></a> </span>
												</td>
											</tr>
											<tr>
												<td class="td_first_block">
													<div class="row">
														<div class="col-lg-4 col-md-4 col-sm-4">
															<?php echo $this->Form->input('province',array(
																'label' => __('Province'),
																'class' => 'form-control maxW200',
																'id' => 'province'
															)) ?>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td class="td_first_block">
													<?php echo $this->Form->input('address_jp',array(
														'label' => __('Address_Japanese(Not include Province)'),
														'class' => 'form-control',
														'id' => 'address1'
													)) ?><br>
													<?php echo $this->Form->input('address_en',array(
														'label' => __('Address_English(Enter Full Address including Province)'),
														'class' => 'form-control'
													)) ?>
												</td>
											</tr>
											<tr>
												<td rowspan="2">
													<?= __('Contact') ?>
												</td>
												<td>
													<div class="form-group">
														<div class="row">
															<div class="col-lg-6 col-md-6 col-sm-6">
																<?php echo $this->Form->input('phone1',array(
																	'label' => __('Phone1'),
																	'class' => 'form-control maxW200'
																)) ?>
															</div>
															<div class="col-lg-6 col-md-6 col-sm-6">
																<?php echo $this->Form->input('phone1_smb',array(
																	'label' => __('Contact Name'),
																	'class' => 'form-control maxW200'
																)) ?>
															</div>
														</div>
													</div>

													<div class="form-group">
														<div class="row">
															<div class="col-lg-6 col-md-6 col-sm-6">
																<?php echo $this->Form->input('phone2',array(
																	'label' => __('Phone2'),
																	'class' => 'form-control maxW200'
																)) ?>
															</div>
															<div class="col-lg-6 col-md-6 col-sm-6">
																<?php echo $this->Form->input('phone2_smb',array(
																	'label' => __('Contact Name'),
																	'class' => 'form-control maxW200'
																)) ?>
															</div>
														</div>
													</div>

													<div class="form-group">
														<div class="row">
															<div class="col-lg-6 col-md-6 col-sm-6">
																<?php echo $this->Form->input('phone3',array(
																	'label' => __('Phone3'),
																	'class' => 'form-control maxW200'
																)) ?>
															</div>
															<div class="col-lg-6 col-md-6 col-sm-6">
																<?php echo $this->Form->input('phone3_smb',array(
																	'label' => __('Contact Name'),
																	'class' => 'form-control maxW200'
																)) ?>
															</div>
														</div>
													</div>

													<div class="form-group">
														<div class="row">
															<div class="col-lg-6 col-md-6 col-sm-6">
																<?php echo $this->Form->input('phone4',array(
																	'label' => __('Phone4'),
																	'class' => 'form-control maxW200'
																)) ?>
															</div>
															<div class="col-lg-6 col-md-6 col-sm-6">
																<?php echo $this->Form->input('phone4_smb',array(
																	'label' => __('Contact Name'),
																	'class' => 'form-control maxW200'
																)) ?>
															</div>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td class="td_first_block">
													<div style="margin-bottom: 10px;border-bottom: 1px solid #e7ebee;padding-bottom: 10px;">
														<div class="row">
															<div class="col-lg-12 col-md-12 col-sm-12">
																<?php echo $this->Form->input('mail1',array(
																	'label' => __('mail1'),
																	'class' => 'form-control mB5'
																)) ?>
															</div>
															<div class="col-lg-6 col-md-6 col-sm-6">
																<?php echo $this->Form->input('mail1_smb',array(
																	'label' => __('Contact Name'),
																	'class' => 'form-control maxW200'
																)) ?>
															</div>
														</div>
													</div>
													<div style="margin-bottom: 10px;border-bottom: 1px solid #e7ebee;padding-bottom: 10px;">
														<div class="row">
															<div class="col-lg-12 col-md-12 col-sm-12">
																<?php echo $this->Form->input('mail2',array(
																	'label' => __('mail2'),
																	'class' => 'form-control mB5'
																)) ?>
															</div>
															<div class="col-lg-6 col-md-6 col-sm-6">
																<?php echo $this->Form->input('mail2_smb',array(
																	'label' => __('Contact Name'),
																	'class' => 'form-control maxW200'
																)) ?>
															</div>
														</div>
													</div>
													<div style="margin-bottom: 10px;border-bottom: 1px solid #e7ebee;padding-bottom: 10px;">
														<div class="row">
															<div class="col-lg-12 col-md-12 col-sm-12">
																<?php echo $this->Form->input('mail3',array(
																	'label' => __('mail3'),
																	'class' => 'form-control mB5'
																)) ?>
															</div>
															<div class="col-lg-6 col-md-6 col-sm-6">
																<?php echo $this->Form->input('mail3_smb',array(
																	'label' => __('Contact Name'),
																	'class' => 'form-control maxW200'
																)) ?>
															</div>
														</div>
													</div>
													<div>
														<div class="row">
															<div class="col-lg-12 col-md-12 col-sm-12">
																<?php echo $this->Form->input('mail4',array(
																	'label' => __('mail4'),
																	'class' => 'form-control mB5'
																)) ?>
															</div>
															<div class="col-lg-6 col-md-6 col-sm-6">
																<?php echo $this->Form->input('mail4_smb',array(
																	'label' => __('Contact Name'),
																	'class' => 'form-control maxW200'
																)) ?>
															</div>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<?= __('Job') ?>
												</td>
												<td>
													<!--これは別のフォームにとばしてsector_mapに格納する -->
													<?php echo $this->Form->input('job',array(
														'label' => false,
														'type' => 'select',
														'options' => $option_jobs,
														'selected' => explode(',', $this->request->data['Company']['job']),
														'class' => "form-control sel_job",
														'multiple' => true,
														'style' => array("width:200px"),
														'div' => false
													)); ?>

												</td>
											</tr>
											<tr>
												<td>
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
							<!-- <div class="center-block pull-left">
                  <a href="interview-order-detail.html" class="btn btn-default">
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
		echo $this->Html->script('jquery.jpostal', array('inline' => false, 'block' => 'page-js'));
	 ?>

	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>
		$(document).ready(function() {

			$('.sel_association').select2({
            placeholder: '所属組合を選択してください',
            allowClear: false
        });

			$('.sel_job').select2({
				placeholder: '職種を選択してください',
				allowClear: false
			});

			//住所自動入力
			$('#postcode').jpostal({
				postcode : [
					'#postcode'
				],
				address : {
					'#province'  : '%3',
					'#address1'  : '%4%5'
				}
			});
		});

	<?php $this->Html->scriptEnd(); ?>