<?php $this->set('title_for_layout', 'Documents'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Documents List')); ?>
					<h1><?= __('Documents List') ?></h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 maxW900">
					<div class="main-box clearfix">
						<header class="main-box-header clearfix">
							<h2><?= __('Documents List') ?>
								<button type="button" id="" class="md-trigger btn btn-primary pull-right mL5" data-modal="modal-edit-folder">
								<i class="fa fa-edit fa-lg"></i> <?= __('Edit/Delete Folder') ?></button>
								<button type="button" id="" class="md-trigger btn btn-primary pull-right" data-modal="modal-new-folder">
								<i class="fa fa-folder fa-lg"></i> <?= __('Add New Folder') ?></button>
							</h2>
						</header>

						<div class="main-box-body clearfix">
							<div class="panel-group accordion" id="accordion">

								<?php foreach ($folders as $folder) : ?>
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#folder_id_<?php echo $folder['DocFolder']['id'] ?>">
													<?php echo $folder['DocFolder']['folder_jp']."(".$folder['DocFolder']['folder_en'].")"; ?>
												</a>
											</h4>
										</div>
										<div id="folder_id_<?php echo $folder['DocFolder']['id'] ?>" class="panel-collapse collapse">
											<div class="panel-body">
												<div class="row">
													<button type="button" id="" class="md-trigger btn btn-default mrg-b-lg pull-right mL5" data-modal="modal-new-sub-folder" data-folder-id="<?php echo $folder['DocFolder']['id'] ?>">
														<i class="fa fa-folder fa-lg"></i> <?= __('Add New Sub Folder') ?>
													</button>
													<button type="button" id="" class="md-trigger btn btn-danger mrg-b-lg pull-left new-file-btn" data-modal="modal-new-file" data-folder-id="<?php echo $folder['DocFolder']['id'] ?>" data-sub-folder-id="0">
														<i class="fa fa-file-text"></i> <?= __('Add New Document') ?>
													</button>
													<button type="button" id="" class="md-trigger btn btn-success mrg-b-lg pull-left mL5 upload-file-btn" data-modal="modal-upload-file" data-folder-id="<?php echo $folder['DocFolder']['id'] ?>" data-sub-folder-id="0" data-url="<?php echo $this->Html->url(array('controller' => 'doc_names', 'action' => 'ajaxGetDocOption')); ?>">
														<i class="fa fa-cloud-upload fa-lg"></i> <?= __('Upload Document') ?>
													</button>
												</div>
												<div class="table-responsive">
													<table class="table table-bordered">
														<thead>
															<tr>
																<th class="text-center"><span><?= __('Document Name') ?></span></th>
																<th class="text-center"><span><?= __('Language') ?></span></th>
																<th class="text-center"><span><?= __('Note') ?></span></th>
																<th class="text-center"><span><?= __('Download') ?></span></th>
																<th class="text-center"><span></span></th>
															</tr>
														</thead>
														<tbody>
															<?php foreach($this->Foreach->documents($folder['DocFolder']['id'], 0) as $doc): ?>
																<tr>
																	<td class="td_first_block">
																		<?php echo $doc['DocName']['name_jp']."<br>".$doc['DocName']['name_en'] ?>
																	</td>
																	<td>
																		<?php if($doc['DocName']['lang_jpn'] == 1){echo __('Japanese').", ";}if($doc['DocName']['lang_eng'] == 1){echo __('English').", ";}if($doc['DocName']['lang_khm'] == 1){echo __('Khmer');} ?>
																	</td>
																	<td class="text-center">
																		<?php echo $doc['DocName']['note']; ?>
																	</td>
																	<td class="text-center">
																		<?php foreach($this->Foreach->downloadJpn($doc['DocName']['id']) as $jpn ): ?>
																			<?php if($jpn['DocTemplate']['img_file_name']): ?>
																			<button type="button" class="btn btn-info"><a href="doc/doc_templates/<?php echo $jpn['DocTemplate']['img_file_name']; ?>" class="red"><i class="fa fa-cloud-download"></i> JP</a></button>
																			<?php endif; ?>
																		<?php endforeach; ?>
																		<?php foreach($this->Foreach->downloadEng($doc['DocName']['id']) as $eng ): ?>
																			<?php if($eng['DocTemplate']['img_file_name']): ?>
																			<button type="button" class="btn btn-info"><a href="doc/doc_templates/<?php echo $eng['DocTemplate']['img_file_name']; ?>" class="red"><i class="fa fa-cloud-download"></i> EN</a></button>
																			<?php endif; ?>
																		<?php endforeach; ?>
																		<?php foreach($this->Foreach->downloadKhm($doc['DocName']['id']) as $khm ): ?>
																			<?php if($khm['DocTemplate']['img_file_name']): ?>
																			<button type="button" class="btn btn-info"><a href="doc/doc_templates/<?php echo $khm['DocTemplate']['img_file_name']; ?>" class="red"><i class="fa fa-cloud-download"></i> KH</a></button>
																			<?php endif; ?>
																		<?php endforeach; ?>
																	</td>
																	<td class="text-center">
																		<div class="actions">
																			<?php echo $this->Form->postlink(
																				'<i class="fa fa-trash-o"></i>',
																				array('controller' => 'doc_names', 'action' => 'update_delete_flag',$doc['DocName']['id']),
																				array('confirm' => __('Are you sure you want to delete # %s?', $doc['DocName']['id']),'escape' => false, 'class' => 'table-link red' )
																			);?>
																		</div>
																	</td>
																</tr>
															<?php endforeach; ?>
														</tbody>
													</table>
												</div>
												<div class="panel-group accordion" id="accordion_sub">

													<?php foreach ($this->Foreach->subfolder($folder['DocFolder']['id']) as $sub): ?>
														<div class="panel panel-default">
															<div class="panel-heading">
																<h4 class="panel-title">
																	<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion_sub" href="#sub_folder_id_<?php echo $sub['SubFolder']['id'] ?>">
																		<?php echo $sub['SubFolder']['sub_folder_jp']."(".$sub['SubFolder']['sub_folder_en'].")" ?>
																	</a>
																</h4>
															</div>
															<div id="sub_folder_id_<?php echo $sub['SubFolder']['id'] ?>" class="panel-collapse collapse">
																<div class="panel-body">
																	<div class="row">
																		<button type="button" id="" class="md-trigger btn btn-danger mrg-b-lg pull-left new-file-btn" data-modal="modal-new-file" data-folder-id="<?php echo $sub['DocFolder']['id'] ?>" data-sub-folder-id="<?php echo $sub['SubFolder']['id'] ?>">
																			<i class="fa fa-file-text"></i> <?= __('Add New Document') ?>
																		</button>

																		<button type="button" id="" class="md-trigger btn btn-success mrg-b-lg pull-left mL5 upload-file-btn" data-modal="modal-upload-file" data-folder-id="<?php echo $sub['DocFolder']['id'] ?>" data-sub-folder-id="<?php echo $sub['SubFolder']['id'] ?>" data-url="<?php echo $this->Html->url(array('controller' => 'doc_names', 'action' => 'ajaxGetDocOption')); ?>">
																			<i class="fa fa-cloud-upload fa-lg"></i> <?= __('Upload Document') ?>
																		</button>
																	</div>
																	<div class="table-responsive">
																		<table class="table table-bordered">
																			<thead>
																				<tr>
																					<th class="text-center"><span><?= __('Document Name') ?></span></th>
																					<th class="text-center"><span><?= __('Language') ?></span></th>
																					<th class="text-center"><span><?= __('Note') ?></span></th>
																					<th class="text-center"><span><?= __('Download') ?></span></th>
																					<th class="text-center"><span></span></th>
																				</tr>
																			</thead>
																			<tbody>
																				<?php foreach($this->Foreach->documents($folder['DocFolder']['id'], $sub['SubFolder']['id']) as $sub_doc): ?>
																					<tr>
																						<td class="td_first_block">
																							<?php echo $sub_doc['DocName']['name_jp']."<br>".$sub_doc['DocName']['name_en'] ?>
																						</td>
																						<td>
																							<?php if($sub_doc['DocName']['lang_jpn'] == 1){echo __('Japanese').", ";}if($sub_doc['DocName']['lang_eng'] == 1){echo __('English').", ";}if($sub_doc['DocName']['lang_khm'] == 1){echo __('Khmer');} ?>
																						</td>
																						<td class="text-center">
																							<?php echo $sub_doc['DocName']['note']; ?>
																						</td>
																						<td>
																							<?php foreach($this->Foreach->downloadJpn($sub_doc['DocName']['id']) as $jpn ): ?>
																								<?php if($jpn['DocTemplate']['img_file_name']): ?>
																								<button type="button" class="btn btn-info"><a href="doc/doc_templates/<?php echo $jpn['DocTemplate']['img_file_name']; ?>" class="red"><i class="fa fa-cloud-download"></i> JP</a></button>
																								<?php endif; ?>
																							<?php endforeach; ?>
																							<?php foreach($this->Foreach->downloadEng($sub_doc['DocName']['id']) as $eng ): ?>
																								<?php if($eng['DocTemplate']['img_file_name']): ?>
																								<button type="button" class="btn btn-info"><a href="doc/doc_templates/<?php echo $eng['DocTemplate']['img_file_name']; ?>" class="red"><i class="fa fa-cloud-download"></i> EN</a></button>
																								<?php endif; ?>
																							<?php endforeach; ?>
																							<?php foreach($this->Foreach->downloadKhm($sub_doc['DocName']['id']) as $khm ): ?>
																								<?php if($khm['DocTemplate']['img_file_name']): ?>
																								<button type="button" class="btn btn-info"><a href="doc/doc_templates/<?php echo $khm['DocTemplate']['img_file_name']; ?>" class="red"><i class="fa fa-cloud-download"></i> KH</a></button>
																								<?php endif; ?>
																							<?php endforeach; ?>
																						</td>
																						<td class="text-center">
																							<div class="actions">
																								<?php echo $this->Form->postlink(
																									'<i class="fa fa-trash-o"></i>',
																									array('controller' => 'doc_names', 'action' => 'update_delete_flag',$sub['DocName'][0]['id']),
																									array('confirm' => __('Are you sure you want to delete # %s?', $sub['DocName'][0]['id']),'escape' => false, 'class' => 'table-link red' )
																								);?>
																							</div>
																						</td>
																					</tr>
																				<?php endforeach; ?>
																			</tbody>
																		</table>
																	</div>
																	<button type="button" id="" class="md-trigger btn btn-default mrg-b-lg pull-right mL5 edit-sub-folder-btn" data-modal="modal-edit-sub-folder" data-folder-id="<?php echo $sub['DocFolder']['id'] ?>" data-sub-folder-id="<?php echo $sub['SubFolder']['id'] ?>">
																		<i class="fa fa-edit fa-lg"></i> <?= __('Edit/Delete Sub Folder') ?>
																	</button>
																</div>
															</div>
														</div>
													<?php endforeach; ?>
												</div>
											</div>
										</div>
									</div>
								<?php endforeach; ?>
							</div>

						</div>
					</div>
				</div>











	<?php
		echo $this->Html->script('select2.min', array('inline' => false, 'block' => 'table-js'));
		echo $this->Html->script('modernizr.custom', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('classie', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('modalEffects', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('rikuyo_js/doc_modal', array('inline' => false, 'block' => 'modal-js'));
	 ?>

	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>

	<?php $this->Html->scriptEnd(); ?>