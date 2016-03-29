<?php $this->set('title_for_layout', 'Association Profile'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Association List'), '/associations'); ?>
<?php $this->Html->addCrumb(__('Association Profile'), ''); ?>
					<h1><?= __('Association Profile') ?></h1>
					</div>
				</div>
			</div>
<?php echo $this->Session->flash() ?>
			<div class="row" id="company-profile">
				<div class="col-lg-6 col-md-6 col-sm-6 maxW500">
					<div class="main-box">
						<header class="main-box-header clearfix">
							<h2><?= __('Basic Information') ?></h2>
						</header>
						<div class="main-box-body clearfix">
							<div class="company-profile-details">
								<div class="table-responsive">
									<?php echo $this->Form->create('Association', array(
										'class' => 'form_association_edit',
										'inputDefaults' => array(
											'div' => false,
											)
									)); ?>
									<?php echo $this->Form->hidden('id'); ?>
										<table class="table table-bordered table-hover">

											<tbody>
												<tr>
													<td>
														<?= __('Association Name') ?>
													</td>
													<td>
														<?php echo $this->Form->input('association_jp',array(
															'label' => false,
															'class' => 'form-control maxW360',
															'required' => true
														)) ?><br>
														<?php echo $this->Form->input('association_en',array(
															'label' => false,
															'class' => 'form-control maxW360',
															'required' => true
														)) ?>
													</td>
												</tr>
												<tr>
													<td>
														<?= __('Companies') ?>
													</td>
													<td>
														<?php foreach ($companies as $com) : ?>
															<?php echo $this->Html->link(
																$this->Btn->switchLang($lang, $com['Company']['company_jp'], $com['Company']['company_en'])." , " ,
																array('controller' => 'companies', 'action' => 'profile', $com['Company']['id']),
																array('escape' => false, 'class' => '', 'target' => '_blank')
															) ?>
														<?php endforeach; ?>
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
															<div class="col-lg-12 col-md-12 col-sm-12">
																<?php echo $this->Form->input('postcode',array(
																	'label' => __('Postcode'),
																	'class' => 'form-control maxW100',
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
															<div class="col-lg-12 col-md-12 col-sm-12">
																<?php echo $this->Form->input('province',array(
																	'label' => __('Province'),
																	'class' => 'form-control maxW100',
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
									</div>
								</div>
								<?php echo $this->Form->end(); ?>
							</div>
					</div>
				</div> <!-- /basic info -->
				<div class="col-lg-6 col-md-6 col-sm-6 maxW600">
					<div class="main-box">
						<header class="main-box-header clearfix">
							<h2 class="pull-left"><?= __('Documents List') ?></h2>
							<?php echo $this->Html->link(
								'<i class="fa fa-lg fa-plus-circle"></i> '. __('Select Document') ,
								array('controller' => 'associations', 'action' => 'select', $this->request->data['Association']['id']),
								array('escape' => false, 'class' => 'btn btn-primary pull-right')
							) ?>
						</header>
						<div class="main-box-body clearfix">
							<div class="table-responsive">
								<table class="table table-bordered table-hover">
									<thead>
										<tr>
											<th><span><?= __('Document Name') ?></span></th>
											<th><span><?= __('Language') ?></span></th>
											<th><span><?= __('Note') ?></span></th>

										</tr>
									</thead>
									<tbody>
										<?php foreach ($folders as $folder) : ?>
											<tr class="warning">
												<th colspan="3"><span><?php echo $folder['DocFolder']['folder_jp']."(".$folder['DocFolder']['folder_en'].")" ?></span></th>
											</tr>
												<?php foreach($this->Foreach->association_documents($folder['DocFolder']['id']) as $doc): ?>
													<tr>
														<td class="td_first_block"><?php echo $doc['DocName']['name_jp']."<br>".$doc['DocName']['name_en'] ;?></td>
														<td><?php if($doc['DocName']['lang_jpn'] == 1){echo __('Japanese').", ";}if($doc['DocName']['lang_eng'] == 1){echo __('English').", ";}if($doc['DocName']['lang_khm'] == 1){echo __('Khmer');} ?></td>
														<td><?php echo $doc['DocName']['note']."<br>". $doc['AssociationDocument'][0]['note']; ?></td>
													</tr>
												<?php endforeach; ?>
											<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div><!-- /Selected Document -->
				<div class="col-lg-6 col-md-6 col-sm-6 maxW600">
					<div class="main-box-body clearfix">

							<div class="main-box">
								<header class="main-box-header clearfix">
									<h2><?= __('Management Expenses') ?></h2>
								</header>
								<div class="main-box-body clearfix">
									<?php
										echo $this->Form->create('AssociationExpense', array(
										'action' => 'add',
										'class' => 'form_add_expense'
										));
									?>
									<?php echo $this->Form->hidden('association_id', array('value' => $this->request->data['Association']['id'])) ?>
									<div class="form-group">
										<label for="payDate"><?= __('Pay Date') ?></label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
											<input type="date" name='data[AssociationExpense][pay_date]' class="form-control maxW200 expense_pay_date" id="" required="" >
										</div>
									</div>
									<div class="form-group">
										<label for="payAmount"><?= __('Price') ?></label>
										<div class="input-group">
											<span class="input-group-addon">&yen;</span>
											<input type="number" name='data[AssociationExpense][pay_price]' class="form-control maxW200 expense_pay_price" id="paySheduleAmount" size="5" min="0" required="">
										</div>
									</div>
									<div class="form-group">
										<?php echo $this->Form->input('note', array(
											'class' => 'form-control maxW300',
											'rows' => 3
										)) ?>
									</div>
									<button type="submit" class="btn btn-primary add_expense_btn"><?= __('Add') ?></button>
									<?php echo $this->Form->end(); ?>
								</div>
								<hr>
								<div class="main-box-body clearfix">
									<div class="table-responsive col-lg-12 col-md-12 col-sm-12 maxW800">
										<table class="table table-bordered finance">
											<thead>
												<tr>
													<th class="text-center"><span><?= __('Pay Date') ?></span></th>
													<th class="text-center"><span><?= __('Price') ?></span></th>
													<th class="text-center"><span><?= __('Note') ?></span></th>
													<th class="text-center"><span></span></th>
												</tr>
											</thead>
											<tbody class="expense-table">
												<?php if($expenses): ?>
													<?php foreach ($expenses as $expense) : ?>
														<tr class="expense-<?php echo $expense['AssociationExpense']['id']?>" data-expense-id="<?php $expense['AssociationExpense']['id'];?> ">
															<td class="text-center td_first_block">
																<?php echo $expense['AssociationExpense']['pay_date'];?>
															</td>
															<td class="text-center">
															<?php echo "&yen; ".$expense['AssociationExpense']['pay_price'];?>
															</td>
															<td>
																<?php echo $expense['AssociationExpense']['note'] ?>
															</td>
															<td class="text-center">
															<?php echo $this->Form->postlink(
																'<i class="fa fa-pencil"></i>',
																array('controller' => 'association_expenses', 'action' => 'edit',$expense['AssociationExpense']['id']),
																array('escape' => false, 'class' => 'table-link')
															);
															echo $this->Form->postlink(
																'<i class="fa fa-trash-o"></i>',
																array('controller' => 'association_expenses', 'action' => 'delete',$expense['AssociationExpense']['id']),
																array('confirm' => __('Are you sure you want to delete # %s?',$expense['AssociationExpense']['id']),'escape' => false, 'class' => 'table-link red' )
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
																<input name="data[AssociationExpense][pay_date]" class="form-control maxW200 chk pay_date "  type="date" data-expense-id="" data-column="pay_date">
															</div>
															<div class="col-lg-3 col-md-3 col-sm-3">
																<label><?= __('Price($)');?></label>
																<input name="data[AssociationExpense][pay_price]" class="form-control maxW100 chk pay_price"  type="number" data-expense-id="" data-column="pay_price">
															</div>
															<div class="col-lg-4 col-md-4 col-sm-4">
																<label for=""><?= __('Note') ?></label>
																<input name="data[AssociationExpense][note]" class="form-control note chk"  maxlength="255" type="text" data-expense-id="" data-column="note">
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
											<?php echo $this->Form->create('AssociationExpense', array(
													'action' => 'edit',
													'class' => 'hide expense-edit-link'
												)) ?>
												<?php echo $this->Form->end(); ?>
												<?php echo $this->Form->create('AssociationExpense', array(
													'action' => 'delete',
													'class' => 'hide expense-delete-link'
												)) ?>
											<?php echo $this->Form->end(); ?>
										</div>


										<?php echo $this->Form->create('AssociationExpense', array(
											 'controller' => 'association_expenses', 'action' => 'updateAjax',
											'class' => 'hide form_expense_update'
										)); ?>
										<?php echo $this->Form->end(); ?>
									</div>

								</div>
							</div>

					</div>
				</div>

			</div>
			<div class="row">
				<div class="col-lg-6 col-md-8 col-sm-8 maxW500">
					<div class="main-box">
						<header class="main-box-header clearfix">
							<h2><?= __('Select Sectors') ?></h2>
						</header>
						<div class="main-box-body clearfix">
							<div class="company-profile-details">
								<div class="table-responsive">
									<?php echo $this->Form->create('Association', array(
										'action' => 'sectorAdd',
										'class' => 'form_association_edit',
										'inputDefaults' => array(
											'div' => false,
											)
									)); ?>
									<?php echo $this->Form->hidden('id'); ?>
										<table class="table table-bordered table-hover">

											<tbody>

												<tr>
													<td class="td_first_block">

														<?php echo $this->Form->input('sector',array(
															'label' => false,
															'type' => 'select',
															'options' => $option_sectors,
															'selected' => explode(',', $this->request->data['Association']['sector']),
															'class' => "form-control sel_sector",
															'multiple' => true,
															'div' => false
														)); ?>

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
									</div>
								</div>
								<?php echo $this->Form->end(); ?>
							</div>
					</div>
				</div><!-- /Sector -->
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-8 col-sm-8 maxW500">
					<div class="main-box">
						<header class="main-box-header clearfix">
							<h2><?= __('Contact List') ?></h2>
						</header>
						<div class="main-box-body clearfix">
							<div class="company-profile-details">
								<div class="table-responsive">
									<?php echo $this->Form->create('Association', array(
										'class' => 'form_association_edit',
										'inputDefaults' => array(
											'div' => false,
											)
									)); ?>
									<?php echo $this->Form->hidden('id'); ?>
										<table class="table table-bordered table-hover">

											<tbody>
												<tr>
													<td rowspan="2">
														<?= __('Contacts') ?>
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
																<div class="col-lg-12 col-md-12 col-sm-12">
																	<?php echo $this->Form->input('mail1_smb',array(
																		'label' => __('Contact Name'),
																		'class' => 'form-control '
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
																<div class="col-lg-12 col-md-12 col-sm-12">
																	<?php echo $this->Form->input('mail2_smb',array(
																		'label' => __('Contact Name'),
																		'class' => 'form-control '
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
																<div class="col-lg-12 col-md-12 col-sm-12">
																	<?php echo $this->Form->input('mail3_smb',array(
																		'label' => __('Contact Name'),
																		'class' => 'form-control '
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
																<div class="col-lg-12 col-md-12 col-sm-12">
																	<?php echo $this->Form->input('mail4_smb',array(
																		'label' => __('Contact Name'),
																		'class' => 'form-control '
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
									</div>
								</div>
								<?php echo $this->Form->end(); ?>
							</div>
					</div>
				</div><!-- /Contacts -->




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
			$('.alert').fadeOut(5000);
			$('.sel_sector').select2({
				placeholder: "<?= __('Select Sectors') ?>",
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