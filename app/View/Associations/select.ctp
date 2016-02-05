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

			<div class="row">
				<div class="col-lg-12 maxW900">
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
																<th class="text-center"><span><?= __('Memo') ?></span></th>
																<th style="width:70px"></th>
															</tr>
														</thead>
														<tbody>
															<?php foreach($this->Foreach->association_documents($folder['DocFolder']['id']) as $doc): ?>

																<tr>
																	<td>
																		<div class="checkbox-nice">
																			<input type="checkbox" id="doc_<?php echo $doc['DocName']['id']?>" name="data[AssociationDocument][doc_name_id]" value="<?php echo $doc['DocName']['id']?>"  data-id="<?php echo $doc['DocName']['id']?>" data-association-id="<?php echo $this->request->data['Association']['id'] ?>" <?php if(!empty($doc['AssociationDocument'])) { if($doc['AssociationDocument'][0]['selected'] == 1){ echo "checked";}else{echo "non checked" ;} }  ?>>
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
																	<td>
																		<input type="text" class="form-control" name="data[AssociationDocument][note]" value="<?php if(!empty($doc['AssociationDocument']))
																		{ echo $doc['AssociationDocument'][0]['note'];} ?>"></td>
																	<td><button type="button" class="btn btn-default" value="保存" data-submit-id="doc_<?php $doc['DocName']['id']?>">保存</button></td>

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

						</div>
					</div>
				</div>
			</div>


				<div class="center-block text-left" style="margin-bottom: 15px">
				<?php echo $this->Html->link(
					'<i class="fa fa-long-arrow-left fa-lg"></i> 前のページに戻る',
					array('action' => 'profile', $this->request->data['Association']['id']),
					array('escape' => false, 'class' => 'btn btn-default')
				) ?>


	<?php
		echo $this->Html->script('modernizr.custom', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('classie', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('notificationFx', array('inline' => false, 'block' => 'page-js'));
	 ?>

	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>


	$(function(){
		var doc_id_arr;
		$('#document_select_table tr').each(function(){
			if($(this).find('[type=checkbox]').prop('checked')){
				$(this).find('td>[type=text]').removeClass('hide');
				$(this).find('td>button').removeClass('hide');
			} else {
				$(this).find('[type=text]').addClass('hide');
				$(this).find('td>button').addClass('hide');
			}
		});
		$('[type=checkbox]').on('click', function(){

			var doc_id = $(this).data('id');
			var doc_name = $(this).next('label').text();
			var checked;
			console.log(doc_name);
			$(this).parents('tr').find('[type=text]').toggleClass('hide');
			$(this).parents('tr').find('button').toggleClass('hide');

			var notification = new NotificationFx({
				message : '<p>「 '+ doc_name + ' 」をリストに加えました',
				layout : 'growl',
				effect : 'slide',
				type : 'success',
				ttl : 5000,
				onClose : function(){
					return true;
				}
			});
			notification.show();

		});
	});

<!-- todo_ajax.jsを外部ファイルに作成
$(function(){
	'use strict';

	//チェックボックスがクリックされたときの挙動
	//_ajax.php->Todo.php->post()->_update()->return 'state'の値をresとして取得してきて、function(res)の処理を実行
	$('#todos').on('click', '.update_todo', function(){
		//checkBoxがクリックされたら、そのタスクのidを取得
		var id = $(this).parents('li').data('id');
		//ajax処理
		$.post('_ajax.php', { //_ajax.phpにはpostで渡ってきた情報をjson_encode($res)、またはエラーを表示するtry catchを作成
			id: id,
			mode: 'update' //class Todoの条件分岐switchで使用する
		}, function(res){ //ここのresがなぞ。=> todo.php
			if(res.state === '1'){
				$('#todo_' + id).attr('checked', 'checked');
			} else{
				$('#todo_' + id).removeAttr('checked');
			}
		});
	});

	//delete_todo(削除ボタン)がクリックされた時の挙動
	$('#todos').on('click', '.delete_todo', function(){
		var id = $(this).parents('li').data('id');
		//ajax処理
		if(confirm('are you sure?')){ //削除するかどうかの確認処理をして、
			$.post('_ajax.php', {
				id: id,
				mode: 'delete',
				token: $('#token').val()
			}, function(){ //なぜresを除いた???=>削除処理の場合は、返り値returnは空の配列[]を返すだけなので不要。
				$('#todo_' + id).fadeout(800); //liが消える。
			}
			);
		}
	});
}) -->
<!-- jquery php Todoのロジックメモ
1.取得してきたタスクの、stateカラム(0が未了、1が完了)が1だったら、echo 'checked'
2.jqueryの動作用に、class="update_todo"を指定
3.各タスク毎に、li id="todo_{タスクのid}"とdata-id={タスクのid}を設置
-->
		<?php $this->Html->scriptEnd(); ?>
