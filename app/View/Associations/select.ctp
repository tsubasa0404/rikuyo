<?php $this->set('title_for_layout', 'Select Candidates'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/ns-default', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/ns-style-growl', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/ns-style-bar', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/ns-style-attached', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/ns-style-other', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/ns-style-theme', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/sweetalert', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Association Profile'), '/associations/profile/'.$this->request->data['Association']['id']); ?>
<?php $this->Html->addCrumb(__('Select Documents')); ?>
					<h1><?= __('Select Documents') ?></h1>
					</div>
				</div>
			</div>
<?php echo $this->Session->flash() ?>
			<div class="row">
				<div class="col-lg-12 maxW700">
					<div class="main-box clearfix">
						<header class="main-box-header clearfix">
							<h2><?= __('Documents List') ?></h2>
						</header>

						<div class="main-box-body clearfix">
							<div class="panel-group accordion" id="document_select_table">
								<?php foreach ($folders as $folder) : ?>
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
													<?php echo $folder['DocFolder']['folder_jp']."(".$folder['DocFolder']['folder_en'].")" ?>
											</h4>
										</div>
										<div id="collapseOne" class="panel-collapse collapse in">
											<div class="panel-body">
												<div class="table-responsive">
													<table class="table table-bordered">
														<thead>
															<tr>
																<th class="text-center"><span><?= __('Document Name') ?></span></th>
																<th class="text-center"><span><?= __('Language') ?></span></th>
																<th class="text-center"><span><?= __('Note') ?></span></th>
															</tr>
														</thead>
														<tbody>
															<?php foreach($this->Foreach->association_documents($folder['DocFolder']['id']) as $doc): ?>
																<tr>
																	<td>
																		<div class="checkbox-nice">
																			<input type="checkbox" id="doc_<?php echo $doc['DocName']['id']?>" name="data[AssociationDocument][id]" value="<?php if(empty($doc['AssociationDocument'])){echo "" ;}else{echo $doc['AssociationDocument'][0]['id'];}?>"  data-doc-id="<?php echo $doc['DocName']['id']?>" data-association-id="<?php echo $this->request->data['Association']['id'] ?>">
																			<label for="doc_<?php echo $doc['DocName']['id']?>" >
																				<?php echo $doc['DocName']['name_jp']."<br>".$doc['DocName']['name_en']; ?>
																			</label>
																		</div>
																	</td>

																	<td>
																		<?php if($doc['DocName']['lang_jpn'] == 1){echo __('Japanese').", ";}if($doc['DocName']['lang_eng'] == 1){echo __('English').", ";}if($doc['DocName']['lang_khm'] == 1){echo __('Khmer');} ?>
																	</td>
																	<td class="text-center">
																		<?php echo $doc['DocName']['note']; ?>
																	</td>
																</tr>
															<?php endforeach; ?>
														</tbody>
													</table>

												</div>
											</div>
										</div>
									</div>

								<?php endforeach; ?>
							</div>
							<?php echo $this->Form->create('AssociationDocument', array(
								'action' => 'addAjax',
								'class' => 'hide'
							)) ?>
							<?php echo $this->Form->end(); ?>
							<?php echo $this->Form->create('AssociationDocument', array(
								'action' => 'delete',
								'class' => 'hide'
							)) ?>
							<?php echo $this->Form->hidden('id') ?>
							<?php echo $this->Form->end(); ?>
						</div>
					</div>
				</div>
			</div>


				<div class="center-block text-left" style="margin-bottom: 15px">
				<?php echo $this->Html->link(
					'<i class="fa fa-long-arrow-left fa-lg"></i> '.__('Back') ,
					array('action' => 'profile', $this->request->data['Association']['id']),
					array('escape' => false, 'class' => 'btn btn-default')
				) ?>


	<?php
		echo $this->Html->script('modernizr.custom', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('classie', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('notificationFx', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('sweetalert.min', array('inline' => false, 'block' => 'page-js'));
		//echo $this->Html->script('rikuyo_js/document_select', array('inline' => false, 'block' => 'page-js'));
	 ?>

	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>

	$(function(){
		$('.alert').fadeOut(5000);
	});

	//書類選択処理
	$(function(){
		//変数一覧
		var url = $('#AssociationDocumentAddAjaxForm').attr('action');
		var url_delete = $('#AssociationDocumentDeleteForm').attr('action');
		var id = '';
		var doc_id = '';
		var association_id = '';
		var doc_name = '';

		//AssociationDocumentにデータがあるかチェックし、チェックボックスを入れる。
		$('[type=checkbox]').each(function(){
			if($(this).val()){
				$(this).prop('checked', true);
			} else {
				$(this).prop('checked', false);
			}
		});

		//チェックボックスがクリックされたら、
		$('[type=checkbox]').on('click', function(){
				id = $(this).val();
				doc_id = $(this).data('doc-id');
				doc_name = $(this).next('label').text();
				association_id = $(this).data('association-id');

			if(!$(this).val()){ //AssociationDocumentにデータがなかったら新規登録

				$.ajax({
							url: url,
							type: 'POST',
							dataType: 'json',
							data: {
								id: id,
								doc_name_id: doc_id,
								association_id: association_id,
							},
							success: function(rs){
								var notification = new NotificationFx({
									message : '<p>「 '+ doc_name + ' 」 is added in the list.',
									layout : 'growl',
									effect : 'slide',
									type : 'success',
									ttl : 3000,
									onClose : function(){
										return true;
									}
								});
							notification.show();
							console.log(rs);

							$('#doc_'+doc_id).attr('data-id', rs);
							$('#doc_'+doc_id).val(rs);

						},
							error: function(exception){
								console.log(exception);
						}
					});
			} else {
				$('#AssociationDocumentId').val(id);
				swal({
				title: '<?= __("Do you remove this from Document List?") ?>',
				text: "",
				type: "warning",
				showCancelButton: true,
				cancelButtonText: "Cancel",
				confirmButtonColor: "#DD6B55",
				confirmButtonText: "Yes",
				closeOnConfirm: false
				},
				function(isConfirm){
					if(isConfirm){
							$('#AssociationDocumentDeleteForm').submit();
						}
					else {

						$('#doc_'+doc_id).prop('checked', 'checked')
					return ;
					}
				}
				);//swal

			}
		});



	});


		<?php $this->Html->scriptEnd(); ?>
