
								<?php foreach ($folders as $folder) : ?>
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#folder_id_<?php echo $doc['DocFolder']['id'] ?>">
													<?php echo $doc['DocFolder']['folder_jp']."(".$doc['DocFolder']['folder_en'].")"; ?>
												</a>
											</h4>
										</div>
										<div id="folder_id_<?php echo $doc['DocFolder']['id'] ?>" class="panel-collapse collapse">
											<div class="panel-body">
												<div class="row">
													<button type="button" id="" class="md-trigger btn btn-warning mrg-b-lg pull-right mL5" data-modal="modal-new-sub-folder" data-folder-id="<?php echo $doc['DocFolder']['id'] ?>">
														<i class="fa fa-folder fa-lg"></i> <?= __('Add New Sub Folder') ?>
													</button>
													<button type="button" id="" class="md-trigger btn btn-danger mrg-b-lg pull-left new-file-btn" data-modal="modal-new-file" data-folder-id="<?php echo $doc['DocFolder']['id'] ?>" data-sub-folder-id="0">
														<i class="fa fa-file-text"></i> <?= __('Add New Document') ?>
													</button>
													<button type="button" id="" class="md-trigger btn btn-success mrg-b-lg pull-left mL5 upload-file-btn" data-modal="modal-upload-file" data-folder-id="<?php echo $doc['DocFolder']['id'] ?>" data-sub-folder-id="0">
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
															<tr>
																	<td>

																	</td>
																	<td>
																		日本語、英語
																	</td>
																	<td class="text-center">
																		1セット
																	</td>
																	<td>
																		<button type="button" class="btn btn-info"><a href="docs/hp/outline_jp.docx" class="red"><i class="fa fa-cloud-download"></i> JP</a></button>
																		<button type="button" class="btn btn-info"><a href="docs/hp/outline_en.docx" class="red"><i class="fa fa-cloud-download"></i> EN</a></button>
																		<button type="button" class="btn btn-info"><i class="fa fa-cloud-download"></i> KH</button>
																	</td>
																	<td>
																		<div class="actions">
																			<a href="#" class="md-trigger edit_file_btn table-link" data-modal="modal-edit-file" data-file-id="1" data-file-name-jp="送り出し機関概要書" data-file-name-en="Okuridashikikangaisyousyo" data-lang-jpn="1" data-lang-eng="1" data-lang-khm="0" data-note="memo">
																				<i class="fa fa-pencil"></i>
																			</a>
																			<!-- jquery用にdelete_todoクラスを準備 -->
																			<a href="#" class="table-link danger delete_todo">
																				<i class="fa fa-trash-o"></i>
																			</a>
																		</div>
																	</td>
																</tr>

															<tr>
																<td>
																	送り出し機関概要書
																</td>
																<td>
																	日本語、英語
																</td>
																<td class="text-center">
																	1セット
																</td>
																<td>
																	<button type="button" class="btn btn-info"><a href="docs/hp/outline_jp.docx" class="red"><i class="fa fa-cloud-download"></i> JP</a></button>
																	<button type="button" class="btn btn-info"><a href="docs/hp/outline_en.docx" class="red"><i class="fa fa-cloud-download"></i> EN</a></button>
																	<button type="button" class="btn btn-info"><i class="fa fa-cloud-download"></i> KH</button>
																</td>
																<td>
																	<div class="actions">
																		<a href="#" class="md-trigger edit_file_btn table-link" data-modal="modal-edit-file" data-file-id="1" data-file-name-jp="送り出し機関概要書" data-file-name-en="Okuridashikikangaisyousyo" data-lang-jpn="1" data-lang-eng="1" data-lang-khm="0" data-note="memo">
																			<i class="fa fa-pencil"></i>
																		</a>
																		<!-- jquery用にdelete_todoクラスを準備 -->
																		<a href="#" class="table-link danger delete_todo">
																			<i class="fa fa-trash-o"></i>
																		</a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	HP社人材派遣ライセンス(英訳・和訳付き)
																</td>
																<td>
																	クメール語
																</td>
																<td class="text-center">
																	1セット
																</td>
																<td>
																	<button type="button" class="btn btn-info"><i class="fa fa-cloud-download"></i> KH</button>
																</td>
															</tr>
															<tr>
																<td>
																	HP社パンフレット(和訳付き)
																</td>
																<td>
																	クメール語
																</td>
																<td class="text-center">
																	1セット
																</td>
																<td>
																	<button type="button" class="btn btn-info"><i class="fa fa-cloud-download"></i> KH</button>
																</td>
															</tr>
															<tr>
																<td>
																	日本への技能実習のための派遣契約書(和訳付き)
																</td>
																<td>
																	クメール語
																</td>
																<td class="text-center">
																	1セット
																</td>
																<td>
																	<button type="button" class="btn btn-info"><i class="fa fa-cloud-download"></i> KH</button>
																</td>
															</tr>
															<tr>
																<td>
																	カンボジア王国 外国人技能実習事業に関する協定書
																</td>
																<td>
																	日本語、英語
																</td>
																<td class="text-center">
																	1セット
																</td>
																<td>
																	<button type="button" class="btn btn-info"><i class="fa fa-cloud-download"></i> JP</button>
																	<button type="button" class="btn btn-info"><i class="fa fa-cloud-download"></i> EN</button>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
												<div class="panel-group accordion" id="accordion_sub">
													<?php foreach ($documents as $sub) : ?>
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
																	<button type="button" id="" class="md-trigger btn btn-danger mrg-b-lg pull-left" data-modal="modal-new-file" data-folder-id="<?php echo $doc['DocFolder']['id'] ?>" data-sub-folder-id="<?php echo $sub['SubFolder']['id'] ?>">
																		<i class="fa fa-file-text"></i> 新規書類登録
																	</button>
																	<button type="button" id="" class="md-trigger btn btn-success mrg-b-lg pull-left mL5" data-modal="modal-upload-file" data-folder-id="<?php echo $doc['DocFolder']['id'] ?>" data-sub-folder-id="<?php echo $sub['SubFolder']['id'] ?>">
																		<i class="fa fa-cloud-upload fa-lg"></i> 書類アップロード
																	</button>
																</div>
																<div class="table-responsive">
																	<table class="table table-bordered">
																		<thead>
																			<tr>
																				<th class="text-center"><span>書類名</span></th>
																				<th class="text-center"><span>言語</span></th>
																				<th class="text-center"><span>備考</span></th>
																				<th class="text-center"><span>ダウンロード</span></th>
																			</tr>
																		</thead>
																		<tbody>
																			<tr>
																				<td>
																					送り出し機関概要書
																				</td>
																				<td>
																					日本語、英語
																				</td>
																				<td class="text-center">
																					1セット
																				</td>
																				<td>
																					<button type="button" class="btn btn-info"><a href="docs/hp/outline_jp.docx" class="red"><i class="fa fa-cloud-download"></i> JP</a></button>
																					<button type="button" class="btn btn-info"><a href="docs/hp/outline_en.docx" class="red"><i class="fa fa-cloud-download"></i> EN</a></button>
																					<button type="button" class="btn btn-info"><i class="fa fa-cloud-download"></i> KH</button>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					HP社人材派遣ライセンス(英訳・和訳付き)
																				</td>
																				<td>
																					クメール語
																				</td>
																				<td class="text-center">
																					1セット
																				</td>
																				<td>
																					<button type="button" class="btn btn-info"><i class="fa fa-cloud-download"></i> KH</button>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					HP社パンフレット(和訳付き)
																				</td>
																				<td>
																					クメール語
																				</td>
																				<td class="text-center">
																					1セット
																				</td>
																				<td>
																					<button type="button" class="btn btn-info"><i class="fa fa-cloud-download"></i> KH</button>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					日本への技能実習のための派遣契約書(和訳付き)
																				</td>
																				<td>
																					クメール語
																				</td>
																				<td class="text-center">
																					1セット
																				</td>
																				<td>
																					<button type="button" class="btn btn-info"><i class="fa fa-cloud-download"></i> KH</button>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					カンボジア王国 外国人技能実習事業に関する協定書
																				</td>
																				<td>
																					日本語、英語
																				</td>
																				<td class="text-center">
																					1セット
																				</td>
																				<td>
																					<button type="button" class="btn btn-info"><i class="fa fa-cloud-download"></i> JP</button>
																					<button type="button" class="btn btn-info"><i class="fa fa-cloud-download"></i> EN</button>
																				</td>
																			</tr>
																		</tbody>
																	</table>
																</div>
																<button type="button" id="" class="md-trigger btn btn-warning mrg-b-lg pull-right mL5 edit-sub-folder-btn" data-modal="modal-edit-sub-folder" data-folder-id="<?php echo $doc['DocFolder']['id'] ?>" data-sub-folder-id="<?php echo $sub['SubFolder']['id'] ?>">
																	<i class="fa fa-edit fa-lg"></i> サブフォルダ編集/削除
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