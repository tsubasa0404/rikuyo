<?php $this->set('title_for_layout', 'Documents List'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/rikuyo_css/print', array('inline'=>false, 'block'=>'page-css',array('media' => 'print')));?>
<?php $this->Html->css('libs/rikuyo_css/1_en', array('inline'=>false, 'block'=>'page-css'),array('media' => 'print'));?>
<?php $this->Html->addCrumb(__('Interviews'), '/interviews'); ?>
<?php $this->Html->addCrumb(__('Interview Profile'), '/interviews/profile/'.$interview_prof[0]['Interview']['id']); ?>
<?php $this->Html->addCrumb(__('Documents List'), 'output_documents/doc_list/'.$interview_prof[0]['Interview']['id']); ?>
<?php $this->Html->addCrumb(__('Entrusted Agreement for Preliminary Training')); ?>
					<h1><?= __('Entrusted Agreement for Preliminary Training') ?></h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 maxW750">
					<div class="main-box clearfix">


						<div class="main-box-body clearfix">
							<div class="print-area" style="width: 700px">


								<p align="center" style="margin-top: 50px;font-size: 22px;margin-bottom: 30px">
								    研修委託協議書
								</p>
								<div style="margin-left: 40px;font-size: 16px;">
									<p>
									    甲：<input type="text" value="<?php echo $interview_prof[0]['Association']['association_jp'] ?>" style="width: 200px;" >
									</p>
									<p>
									    乙：<input type="text" value="HUMAN POWER JAPANESE TRAINING CENTER" style="width: 400px;" >
									</p>
									<p style="margin-bottom: 0">
									    1 お互いに協議に基づき、約１ヶ月にわたる来日技能実習生の基礎日本語及び<br>職業道徳練習について、甲は以下の講習内容で乙に委託する。
									</p>
									<p style="margin-top: 0;margin-bottom: 0">
									    ①　基礎日本語（読み書き、会話、文法など）　　123時間以上
									</p>
									<p style="margin-top: 0;margin-bottom: 0">
									    ②　日本の歴史・文化、生活様式、職場のルール、交通法規など　28時間以上
									</p>
									<p style="margin-top: 0;margin-bottom: 0">
									    ③　技能実習生事業における修得技能の目標・内容、職場内規律、心構えなど<br>
									    　　25時間以上
									</p>
									<p style="margin-bottom: 0">
									    2　訓練の教材は以下のように分担して提供する
									</p>
									<p style="margin-top: 0;margin-bottom: 0">
									    ①　基礎日本語は乙の教案に合わせるもので、乙が提供する。
									</p>
									<p style="margin-top: 0;margin-bottom: 0">
									    ②　日本の歴史・文化、生活様式などの内容は両者が協議して提供する。
									</p>
									<p style="margin-top: 0;margin-bottom: 0">
									    ③　技能実習生事業制度、技能実施機構規則は甲より提供する。
									</p>
									<p style="margin-bottom: 0">
									    3　委託訓練費用：
									</p>
									<p style="margin-top: 0;margin-bottom: 0">
									    ①　訓練費 <input type="text" name="" value="39" style="width:30px;text-align: center;">USD (<input type="text" name="" value="3900" style="width:50px;text-align: center;">円)/一名。教材代、資料代（VCD、テープ）、宿泊代、<br>
									    　　水、電気代、教育施設代を含む。但し、食事代と生活費は含まない。
									</p>
									<p style="margin-top: 0;margin-bottom: 0">
									    ②　乙の義務は教員・教室の配置、教育の実施を行う。講習を通じて、受講生<br>
									    　　が日本語基本応用・対話等ができるよう、乙は教育品質を保つ責任がある。<br>
									    　　また、受講生の日常生活や、生活施設・食事を手配することも乙の義務で<br>
									    　　ある。
									</p>
									<p>
									    本協議に定めない事項に関しては、甲と乙が協議したうえで、補足をする。<br>本契約書は一式2通を作成し、甲と乙がそれぞれ保有する。
									</p>
										<p align="right" style="margin-right: 60px;margin-top: 30px;">
										    <input type="text" name="" value="" style="width:50px;text-align: center">
											    年<input type="text" name="" value="" style="width:30px;text-align: center">月<input type="text" name="" value="" style="width:30px;text-align: center">日
										</p>
									<div style="width: 260px;display: inline-block;vertical-align: top">
										<p>
										    甲：<input type="text" value="<?php echo $interview_prof[0]['Association']['association_jp'] ?>" style="width: 200px;" >
										</p>
										<p style="margin-top: 70px">
										    代表
										</p>
									</div>
									<div style="width: 390px;display: inline-block;">
										<p>
										    乙：<textarea type="text" style="width: 300px;vertical-align: top" rows="2">HUMAN POWER JAPANESE TRAINING CENTER</textarea>
										</p>
										<p style="margin-top: 50px;">
										    代表
										</p>
									</div>
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