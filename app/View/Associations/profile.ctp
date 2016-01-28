<?php $this->set('title_for_layout', 'Association Profile'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Association List'), '/associations'); ?>
<?php $this->Html->addCrumb(__('Association Profile'), ''); ?>
					<h1><?= __('Association Profile') ?></h1>
					</div>
				</div>
			</div>

			<div class="row" id="company-profile">
				<div class="col-lg-6 col-md-8 col-sm-8">
					<div class="main-box">
						<header class="main-box-header clearfix">
							<h2><?php echo $this->request->data['Association']['association_jp'] ?></h2>
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
											<thead>
												<tr>
													<th><span></span></th>
													<th class="text-center"><span></span></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<?= __('Association Name') ?>
													</td>
													<td>
														<?php echo $this->Form->input('association_jp',array(
															'label' => false,
															'class' => 'form-control'
														)) ?><br>
														<?php echo $this->Form->input('association_en',array(
															'label' => false,
															'class' => 'form-control'
														)) ?>
													</td>
												</tr>
												<tr>
													<td>
														<?= __('Companies') ?>
													</td>
													<td>
														<a href="company-profile.html" title="" target="_blank">山本株式会社</a>,
														<a href="company-profile.html" title="" target="_blank">橋本株式会社</a>,
														<a href="company-profile.html" title="" target="_blank">引地株式会社</a>,
														<a href="company-profile.html" title="" target="_blank">Rikuyo Co.,Ltd</a>
														</select>
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
																		'class' => 'form-control'
																	)) ?>
																</div>
																<div class="col-lg-6 col-md-6 col-sm-6">
																	<?php echo $this->Form->input('rep_given_name_jp',array(
																		'label' => __('Given Name_Japanese'),
																		'class' => 'form-control'
																	)) ?>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-lg-6 col-md-6 col-sm-6">
																<?php echo $this->Form->input('rep_family_name_en',array(
																	'label' => __('Family Name_English'),
																	'class' => 'form-control'
																)) ?>
															</div>
															<div class="col-lg-6 col-md-6 col-sm-6">
																<?php echo $this->Form->input('rep_given_name_en',array(
																	'label' => __('Given Name_English'),
																	'class' => 'form-control'
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
																	'class' => 'form-control',
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
																	'class' => 'form-control',
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
														<?= __('Contacts') ?>
													</td>
													<td>
														<div class="form-group">
															<div class="row">
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

														<div class="form-group">
															<div class="row">
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

														<div class="form-group">
															<div class="row">
																<div class="col-lg-6 col-md-6 col-sm-6">
																	<?php echo $this->Form->input('phone3',array(
																		'label' => __('Phone3'),
																		'class' => 'form-control'
																	)) ?>
																</div>
																<div class="col-lg-6 col-md-6 col-sm-6">
																	<?php echo $this->Form->input('phone3_smb',array(
																		'label' => __('Contact Name'),
																		'class' => 'form-control'
																	)) ?>
																</div>
															</div>
														</div>

														<div class="form-group">
															<div class="row">
																<div class="col-lg-6 col-md-6 col-sm-6">
																	<?php echo $this->Form->input('phone4',array(
																		'label' => __('Phone4'),
																		'class' => 'form-control'
																	)) ?>
																</div>
																<div class="col-lg-6 col-md-6 col-sm-6">
																	<?php echo $this->Form->input('phone4_smb',array(
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
																		'class' => 'form-control'
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
																		'class' => 'form-control'
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
																		'class' => 'form-control'
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
																		'class' => 'form-control'
																	)) ?>
																</div>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<?= __('Sectors') ?>
													</td>
													<td>
													<!--これは別のフォームにとばしてsector_mapに格納する -->
														<?php echo $this->Form->input('sector',array(
															'label' => false,
															'type' => 'select',
															'options' => $option_sectors,
															'class' => "form-control sel_sector",
															'multiple' => true,
															'style' => array("width:200px"),
															'div' => false
														)); ?>
														<button type="button" id="" class="md-trigger btn btn-primary" data-modal="modal-sector"><i class="fa fa-plus-circle fa-lg"></i> <?= __('Add Sector') ?></button><button type="button" class="test">test</button>
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
						<div class="hide">

						</div>
					</div>
				<div class="col-lg-6 col-md-8 col-sm-12">
					<div class="main-box">
						<header class="main-box-header clearfix">
							<h2 class="pull-left">提出書類一覧</h2>
							<a href="document-select.html" class="btn btn-primary pull-right"><i class="fa fa-lg fa-plus-circle"></i> 提出書類を選択</a>
						</header>
						<div class="main-box-body clearfix">
							<div class="table-responsive">
								<table class="table table-bordered table-hover">
									<thead>
										<tr>
											<th><span>書類名</span></th>
											<th><span>言語</span></th>
											<th><span>備考</span></th>
											<th><span></span></th>
										</tr>
									</thead>
									<tbody>
										<tr class="warning">
											<th colspan="4"><span>送り出し機関</span></th>
										</tr>
										<tr>
											<td>Human Power(送り出し機関)概要書</td>
											<td>日本語,英語</td>
											<td>1セット<br>手書きサイン必要</td>
											<td class="text-center">
												<div class="actions">
													<a href="#" class="table-link">
														<i class="fa fa-pencil"></i>
													</a>
													<a href="#" class="table-link danger" onclick="if (confirm(&quot;Are you sure you want to delete?&quot;)) { document.post_568f82753acbc295427860.submit(); } event.returnValue = false; return false;">
														<i class="fa fa-trash-o"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>Human Power(送り出し機関)概要書</td>
											<td>日本語,英語</td>
											<td>1セット</td>
											<td class="text-center">
												<div class="actions">
													<a href="#" class="table-link">
														<i class="fa fa-pencil"></i>
													</a>
													<a href="#" class="table-link danger" onclick="if (confirm(&quot;Are you sure you want to delete?&quot;)) { document.post_568f82753acbc295427860.submit(); } event.returnValue = false; return false;">
														<i class="fa fa-trash-o"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>Human Power(送り出し機関)概要書</td>
											<td>日本語,英語</td>
											<td>1セット</td>
											<td class="text-center">
												<div class="actions">
													<a href="#" class="table-link">
														<i class="fa fa-pencil"></i>
													</a>
													<a href="#" class="table-link danger" onclick="if (confirm(&quot;Are you sure you want to delete?&quot;)) { document.post_568f82753acbc295427860.submit(); } event.returnValue = false; return false;">
														<i class="fa fa-trash-o"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr class="warning">
											<th colspan="4"><span>所属機関</span></th>
										</tr>
										<tr>
											<td>Human Power(送り出し機関)概要書</td>
											<td>日本語,英語</td>
											<td>1セット</td>
											<td class="text-center">
												<div class="actions">
													<a href="#" class="table-link">
														<i class="fa fa-pencil"></i>
													</a>
													<a href="#" class="table-link danger" onclick="if (confirm(&quot;Are you sure you want to delete?&quot;)) { document.post_568f82753acbc295427860.submit(); } event.returnValue = false; return false;">
														<i class="fa fa-trash-o"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr class="warning">
											<th colspan="4"><span>Rikuyo Japan Training Center</span></th>
										</tr>
										<tr>
											<td>Human Power(送り出し機関)概要書</td>
											<td>日本語,英語</td>
											<td>1セット</td>
											<td class="text-center">
												<div class="actions">
													<a href="#" class="table-link">
														<i class="fa fa-pencil"></i>
													</a>
													<a href="#" class="table-link danger" onclick="if (confirm(&quot;Are you sure you want to delete?&quot;)) { document.post_568f82753acbc295427860.submit(); } event.returnValue = false; return false;">
														<i class="fa fa-trash-o"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>Human Power(送り出し機関)概要書</td>
											<td>日本語,英語</td>
											<td>1セット</td>
											<td class="text-center">
												<div class="actions">
													<a href="#" class="table-link">
														<i class="fa fa-pencil"></i>
													</a>
													<a href="#" class="table-link danger" onclick="if (confirm(&quot;Are you sure you want to delete?&quot;)) { document.post_568f82753acbc295427860.submit(); } event.returnValue = false; return false;">
														<i class="fa fa-trash-o"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr class="warning">
											<th colspan="4"><span>カンボジア労働省</span></th>
										</tr>
										<tr>
											<td>Human Power(送り出し機関)概要書</td>
											<td>日本語,英語</td>
											<td>1セット</td>
											<td class="text-center">
												<div class="actions">
													<a href="#" class="table-link">
														<i class="fa fa-pencil"></i>
													</a>
													<a href="#" class="table-link danger" onclick="if (confirm(&quot;Are you sure you want to delete?&quot;)) { document.post_568f82753acbc295427860.submit(); } event.returnValue = false; return false;">
														<i class="fa fa-trash-o"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr class="warning">
											<th colspan="4"><span>実習生関係</span></th>
										</tr>
										<tr>
											<td>Human Power(送り出し機関)概要書</td>
											<td>日本語,英語</td>
											<td>1セット</td>
											<td class="text-center">
												<div class="actions">
													<a href="#" class="table-link">
														<i class="fa fa-pencil"></i>
													</a>
													<a href="#" class="table-link danger" onclick="if (confirm(&quot;Are you sure you want to delete?&quot;)) { document.post_568f82753acbc295427860.submit(); } event.returnValue = false; return false;">
														<i class="fa fa-trash-o"></i>
													</a>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
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

			$('.sel_sector').select2({
				placeholder: "<?= __('Select Sectors') ?>",
				allowClear: false
			});

			$('.sel_sector').on('select2:close', function(e){
				var select_val = $('.sel_sector').select2('val');
				alert(select_val);
				$('#AssociationSector_').val(select_val);
				$('.sel_sector').val(select_val);
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