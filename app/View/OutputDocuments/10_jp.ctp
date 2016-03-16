<?php $this->set('title_for_layout', 'Documents List'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/rikuyo_css/print', array('inline'=>false, 'block'=>'page-css',array('media' => 'print')));?>
<?php $this->Html->css('libs/rikuyo_css/1_en', array('inline'=>false, 'block'=>'page-css'),array('media' => 'print'));?>
<?php $this->Html->addCrumb(__('Interviews'), '/interviews'); ?>
<?php $this->Html->addCrumb(__('Interview Profile'), '/interviews/profile/'.$interview_prof[0]['Interview']['id']); ?>
<?php $this->Html->addCrumb(__('Documents List'), '/output_documents/doc_list/'.$interview_prof[0]['Interview']['id']); ?>
<?php $this->Html->addCrumb(__('Summary of Sending Organization')); ?>
					<h1><?= __('Summary of Sending Organization') ?></h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 maxW750">
					<div class="main-box clearfix">

						<div class="main-box-body clearfix">
							<div class="print-area">


								<p align="right">
									<span class="jitcoBox">JITCO書式10-24</span>
									<p>
									</p>
								</p>
								<p align="center" class="header_1">
									<strong>
										送出し機関概要書
										<p>
										</p>
									</strong>
								</p>
								<p>
									<p>
									</p>
								</p>
								<div align="center">
									<table border="1" cellspacing="0" cellpadding="0" width="673" class="table jitco">
										<tbody>
											<tr>
												<td width="137">
													<p align="center">
														機関名
														<p>
														</p>
													</p>
												</td>
												<td width="536" colspan="5">
													<p align="center">
														<input type="text" class="agent_name" value="" style="width: 100%;text-align: center">
														<strong>
															<p>
															</p>
														</strong>
													</p>
												</td>
											</tr>
											<tr>
												<td width="137">
													<p align="center">
														経営者名
														<p>
														</p>
													</p>
													<p align="center">
														(代表者名)
														<p>
														</p>
													</p>
												</td>
												<td width="536" colspan="5">
													<p align="center">
														<input type="text" class="agent_rep_name" value="" style="width: 100%;text-align: center">
														<p>
														</p>
													</p>
												</td>
											</tr>
											<tr>
												<td width="137" rowspan="2">
													<p align="center">
														<p>
														</p>
													</p>
													<p align="center">
														所在地
														<p>
														</p>
													</p>
													<p align="center">
														<p>
														</p>
													</p>
												</td>
												<td width="536" colspan="5">
													<p align="center">
														<input type="text" class="agent_address" value="" style="width: 100%;text-align: center">
														<p>
														</p>
													</p>
												</td>
											</tr>
											<tr>
												<td width="255" colspan="3">
													<p>
														TEL:<input type="text" class="agent_phone" value="" style="text-align: center">
														<p>
														</p>
													</p>
												</td>
												<td width="281" colspan="2">
													<p>
														FAX:<input type="text" class="inputW80" value="" style="text-align: center">
														<p>
														</p>
													</p>
												</td>
											</tr>
											<tr>
												<td width="137">
													<p align="center">
														設立年月日
														<p>
														</p>
													</p>
												</td>
												<td width="536" colspan="5">
													<p align="center">
														<input type="text" class="agent_establish_date" value="" style="width: 100%;text-align: center">
														<p>
														</p>
													</p>
												</td>
											</tr>
											<tr>
												<td width="137">
													<p align="center">
														実習実施機関との関係
														<p>
														</p>
													</p>

												</td>
												<td width="536" colspan="5" class="pBoth10">
													<p>
														●技能実習イの場合
														<p>
														</p>
													</p>
													<p>
														□支店・子会社（出資率　　　　％）
														<p>
														</p>
													</p>
													<p>
														□取引会社（年間取引額　　　　　取引期間　　　　　　） □ その他 (　　　　　 )
														<p>
														</p>
													</p>

													<p>
														●技能実習ロの場合
														<p>
														</p>
													</p>
													<p>
														□送出し機関（外国の所属機関）
														<p>
														</p>
													</p>
													<p>
														☑送出し機関（その他技能実習の準備に関与する外国の機関）
														<p>
														</p>
													</p>

												</td>
											</tr>
											<tr>
												<td width="137">
													<p align="center">
														業種<br>主要製品<br>主要業務
													</p>
												</td>
												<td width="536" colspan="5">
													<p align="left">
														外国への労働者派遣サービス
														<p>
														</p>
													</p>
												</td>
											</tr>
											<tr>
												<td width="213" colspan="2">
													<p align="center">
														資本金
														<p>
														</p>
													</p>
												</td>
												<td width="227" colspan="3">
													<p align="center">
														売上げ（直近年度）
														<p>
														</p>
													</p>
												</td>
												<td width="233">
													<p align="center">
														常勤職員数
														<p>
														</p>
													</p>
												</td>
											</tr>
											<tr>
												<td width="213" colspan="2">
													<p align="center">
														<input type="text" class="agent_capital_riel" value="" style="width: 100%;text-align: center"><br>
														<span>(</span><input type="text" class="agent_capital_jpy" value="" style="width: 90%;text-align: center"><span>)</span>
														<p>
														</p>
													</p>
												</td>
												<td width="227" colspan="3">
													<p align="center">
														<input type="text" class="agent_sales_riel" value="" style="width: 100%;text-align: center"><br>
														<span>(</span><input type="text" class="agent_sales_jpy" value="" style="width: 90%;text-align: center"><span>)</span>
														<p>
														</p>
													</p>
												</td>
												<td width="233">
													<p align="center">
														<input type="text" class="agent_employee_num" value="" style="width: 100%;text-align: center">
														<p>
														</p>
													</p>
												</td>
											</tr>
											<tr>
												<td width="137" rowspan="2">
													<p align="center">
														主要貿易
														<p>
														</p>
													</p>
													<p align="center">
														(取引)相手国
														<p>
														</p>
													</p>
												</td>
												<td width="536" colspan="5">
													<p>
														輸出先<input type="text" class="agent_export_jp" value="" style="text-align: center;width: 400px">
														<p>
														</p>
													</p>
												</td>
											</tr>
											<tr>
												<td width="536" colspan="5">
													<p>
														輸入先<input type="text" class="agent_import_jp" value="" style="text-align: center;width: 400px">
														<p>
														</p>
													</p>
												</td>
											</tr>
											<tr>
												<td width="137">
													<p align="center">
														管理者名
														<p>
														</p>
													</p>
													<p align="center">
														(責任者名)
														<p>
														</p>
													</p>
												</td>
												<td width="214" colspan="2">
													<p align="center">
														<input type="text" class="agent_rep_name" value="" style="width: 100%;text-align: center">
														<p>
														</p>
													</p>
												</td>
												<td width="321" colspan="3">
													<p align="center">
														役職 <input type="text" class="inputW80 agent_rep_position" value="" style="text-align: center;width: 160px">
														<p>
														</p>
													</p>
												</td>
											</tr>
											<tr>
												<td width="673" colspan="6" class="pBoth10">
													<p style="font-size: 14px">
														1. 申請人又はその配偶者、直径若しくは同居の親族等との間で、当該技能実習が終了するまでに、保証金を徴収すること、その他名目のいかんを問わず金銭その他の財産を管理すること、労働契約の不履行に係る違約金を定める契約その他不当に金銭その他の財産の移転を予定する契約することの有無<br> <span style="margin-left: 500px;" class="">あり</span> ・ <span class="circle">なし</span>
														<p>
														</p>
													</p>
												</td>
											</tr>
											<tr>
												<td width="673" colspan="6" class="pBoth10">
													<p style="font-size: 14px">
														2. 実習実施機関との間で、当該技能実習が終了するまでに、労働契約の不履行に係る違約金を定める契約その他不当に金銭その他の財産の移転を予定する契約を締結することの有無<br> <span style="margin-left: 500px;" class="">あり</span> ・ <span class="circle">なし</span>
														<p>
														</p>
													</p>
												</td>
											</tr>
											<tr>
												<td width="673" colspan="6" class="pBoth10">
													<p style="font-size: 14px">
														3. 外国人に不正に入国・在留に係る許可を受けさせ、又は外国人の研修・技能実習に係る不正行為に関する事実を隠蔽する目的で、偽変造の文書・図画若しくは虚偽の文書・図画の行使・提供を行ったことの有無<br> <span style="margin-left: 500px;" class="">あり</span> ・ <span class="circle">なし</span>
														<p>
														</p>
													</p>
												</td>
											</tr>
											<tr>
												<td width="673" colspan="6" class="pBoth10">
													<p>
														<strong>
															<u>
																上記１～３において、「あり」に該当する場合に記載
																<p>
																</p>
															</u>
														</strong>
													</p>
													<p>
														時期
														<strong>
															<u>
																<p>
																</p>
															</u>
														</strong>
													</p>
												</td>
											</tr>
											<tr style="border-bottom: 1px solid #333">
												<td width="673" colspan="6" class="pBoth10">
													<p>
														内容
														<p>
														</p>
													</p>
												</td>
											</tr>

										</tbody>
									</table>
									<div style="width:673px">
										<p>

										</p>
										<p>
											<input type="text" value="" style="text-align: center;width: 50px">年<input type="text" value="" style="text-align: center;width: 50px">月<input type="text" value="" style="text-align: center;width: 50px">日 作成

										</p>
										<p>
											送出し機関名 <input type="text" class="agent_name" value="" style="text-align: center;width:50%">

										</p>

										<p style="text-align: right;margin-bottom: 0">
											責任者 役職・氏名<input type="text" class="agent_rep_position" value="" style="width: 25%;text-align: center"><input type="text" class="agent_rep_name" value="" style="width: 25%;text-align: center"> ㊞
										</p>
										<p style="margin-top: 1px;border-bottom: 1px solid #333;margin-left: 220px;"></p>



								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


				<div class="col-lg-4 maxW400 no-print">
					<div class="main-box clearfix">
						<div class="main-box-body clearfix">
							<header class="main-box-header clearfix">
							<h2><?= __('Agent(Organization)') ?>
							</h2>
						</header>

						<div class="main-box-body clearfix">
							<?php echo $this->Form->input('agent', array(
								'label' => false,
								'name' => 'agent_id',
								'data-url' => $this->Html->url(array('controller' => 'output_documents', 'action' => 'getAgentAjax')),
								'type' => 'select',
								'options' => $agents,
								'empty' => true,
								'class' => 'form-control sel_agent'
							)) ?>
						</div>
					</div>
				</div>
				<!-- /trainees -->
			</div>


	<?php echo $this->Html->script('select2.min', array('inline' => false, 'block' => 'page-js'));?>
	<?php echo $this->Html->script('rikuyo_js/10_jp', array('inline' => false, 'block' => 'page-js')); ?>

	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>
		$(function(){
			$('.md-modal').remove();
			$('.sel_agent').select2();
		});
	<?php $this->Html->scriptEnd(); ?>