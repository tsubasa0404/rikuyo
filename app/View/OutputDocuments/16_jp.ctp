<?php $this->set('title_for_layout', 'Documents List'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/rikuyo_css/print', array('inline'=>false, 'block'=>'page-css',array('media' => 'print')));?>
<?php $this->Html->css('libs/rikuyo_css/1_en', array('inline'=>false, 'block'=>'page-css'),array('media' => 'print'));?>
<?php $this->Html->addCrumb(__('Interviews'), '/interviews'); ?>
<?php $this->Html->addCrumb(__('Interview Profile'), '/interviews/profile/'.$interview_prof[0]['Interview']['id']); ?>
<?php $this->Html->addCrumb(__('Documents List'), 'output_documents/doc_list/'.$interview_prof[0]['Interview']['id']); ?>
<?php $this->Html->addCrumb(__('Outsourcing contract KOKUSAI RYUTSU ONLY')); ?>
					<h1><?= __('Outsourcing contract KOKUSAI RYUTSU ONLY') ?></h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 maxW800">
					<div class="main-box clearfix">


						<div class="main-box-body clearfix">
							<div class="print-area" style="width: 720px;">

								<p align="center"​​ style="font-size: 20px;margin-top: 50px;margin-bottom: 50px;">
								    <strong>業務委託契約書</strong>
								</p>
								<div style="margin-left: 60px;margin-right: 50px;">
									<p>
									    　本契約書は、国際流通事業協同組合​　（以下「甲」という）が<input type="text" name="" value="HUMAN POWER JAPANESE TRAINING CENTER" style="width:400px;text-align: center">（以下「乙」という）に対し、甲が行う外国人技能実習生入れ事業における技能実習生入国前に実施する事前講習での日本語等の教育を業務委託する件に係る契約である。
									</p>
									<p>
									    　甲及び乙は双方協議の上、下記の内容通り合意し契約する。
									</p>
									<p style="margin-bottom: 0">
									    第１条（日本語等教育委託期間）
									</p>
									<p style="margin-top: 0">
									    　　　　甲が受け入れる外国人技能実習生に対し行う事前講習期間内に、乙は160時間以上<br>
									    　　　　①日本語、②本邦での生活一般に関する知識③本邦での円滑な技能などの習得に資<br>
									    　　　　　する知識の教育を甲より委託され行うものとする。それぞれの事前講習期間は不定<br>
									    　　　　期的に実施されるため、その委託期間の設定は、その都度甲と乙が事前に協議し決定<br>
									    　　　　するものとする。
									</p>
									<p style="margin-bottom: 0">
									    第２条（委託する教育内容）
									</p>
									<p style="margin-top: 0">
									    　　　　甲の作成した日本語などの教育カリキュラムをもとに、甲と乙が協議し、決定する。<br>
									    　　　　委託期間中、教育内容に変更が生じた場合は、甲と乙で協議のうえ変更するものと<br>
									    　　　　する。
									</p>
									<p style="margin-bottom: 0">
									    第３条（報告書の提出）
									</p>
									<p style="margin-top: 0">
									    　　　　乙は委託教育が終了後、速やかに甲に対して日本語などの教育実施報告書を提出し<br>
									    　　　　なければならない。
									</p>
									<p style="margin-bottom: 0">
									    第４条（契約の終了）
									</p>
									<p style="margin-top: 0">
									    　　　　この契約は、甲・乙どちらか一方の申し出により終了する。
									</p>
									<p>
									    　　　　この契約書を証するため、本書２通を作成し、甲乙双方がそれぞれ捺印の上、各自１<br>
									    通ずつ保有することとする。
									</p>
									<div style="width: 200px;display: inline-block;vertical-align: top">
										<p style="margin-bottom: 0;">
										    甲：日本国
										</p>
										<p style="margin-bottom: 0;margin-top: 0">
										    国際流通事業協同組合
										</p>
										<p style="margin-bottom: 0;margin-top: 0">
										    代表者署名
										</p>
									</div>
									<div style="width: 400px;display: inline-block;vertical-align: top;float: right">
										<p style="margin-bottom: 0;">
										    乙：カンボジア
										</p>
										<p style="margin-bottom: 0;margin-top: 0">
										    <input type="text" name="" value="HUMAN POWER JAPANESE TRAINING CENTER" style="width:400px;">
										</p>
										<p style="margin-bottom: 0;margin-top: 0">
										    代表者署名
										</p>
									</div>
									<p style="margin-top: 80px;margin-left: 400px;">
									    <input type="text" name="" value="" style="width:50px;text-align: center">
											    年<input type="text" name="" value="" style="width:30px;text-align: center">月<input type="text" name="" value="" style="width:30px;text-align: center">日
									</p>
								</div>

							</div>
						</div>
					</div>
				</div>

	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>
		$(function(){
			$('.md-modal').remove();
		});
	<?php $this->Html->scriptEnd(); ?>