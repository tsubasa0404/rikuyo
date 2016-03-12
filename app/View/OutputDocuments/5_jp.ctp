<?php $this->set('title_for_layout', 'Documents List'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/rikuyo_css/print', array('inline'=>false, 'block'=>'page-css',array('media' => 'print')));?>
<?php $this->Html->css('libs/rikuyo_css/1_en', array('inline'=>false, 'block'=>'page-css'),array('media' => 'print'));?>
<?php $this->Html->addCrumb(__('Interviews'), '/interviews'); ?>
<?php $this->Html->addCrumb(__('Interview Profile'), '/interviews/profile/'.$interview_prof[0]['Interview']['id']); ?>
<?php $this->Html->addCrumb(__('Documents List'), 'output_documents/doc_list/'.$interview_prof[0]['Interview']['id']); ?>
<?php $this->Html->addCrumb(__('Technical Intern Dispatch Notice')); ?>
					<h1><?= __('Technical Intern Dispatch Notice') ?></h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 maxW700">
					<div class="main-box clearfix">


						<div class="main-box-body clearfix">
							<div class="print-area">


								<p align="right">
								    <span class="jitcoBox">JITCO書式 10-25</span>
								</p>
								<p align="center" style="font-size: 22px;margin-top: 75px;">
								    <strong>技能実習生派遣状</strong>
								</p>
								<div style="margin-left: 250px;margin-top: 50px">
									<p>
									    <span style="margin-right: 30px">所属部署</span><input type="text" name="" value="建設部門">
									</p>
									<p>
									    <span style="margin-right: 30px">職　　種</span><input type="text" name="" value="とび、鉄筋施工" placeholder="">
									</p>
									<p align="left">
									    <span style="margin-right: 30px">氏　　名</span><input type="text" name="" value="<?php echo $trainees[0]['Trainee']['family_name_en']." ".$trainees[0]['Trainee']['given_name_en'] ?>" placeholder=""> 年齢<?php echo $this->Btn->calcage($trainees[0]['Trainee']['birthday']) ?>歳　<?php if($trainees[0]['Trainee']['sex']=='male'){echo '男';}else{echo '女';} ?>
									</p>
									<p align="left">
									    　　　　　　　（ほか <input type="text" name="" value="<?php echo count($trainees)-1 ?>" style="width: 30px;text-align: center;"> 名） 　　（別添名簿の通り）
									</p>
								</div>
								<p align="center">
								    　上記の者を <u> 　</u><u> とび、鉄筋施工</u><u> </u> についての技能実習を実施するため、<u></u>
								</p>
								<p align="left">
								    　　　　　　　　　　　　　　　　（職種）　　
								</p>
								<p align="center">
								    <input type="text" name="" value="20" style="width: 35px">年<input type="text" style="width: 20px">月<input type="text" style="width: 20px">日から<input type="text" style="width: 20px">年間、日本国 <input type="text" value="<?php echo $interview_prof[0]['Association']['province'] ?>" style="text-align: center">  所在の
								</p>
								<p align="left">
								    　　　　　　　　　　　　　　　（期間）　　　　　　　（都道府県名）
								</p>
								<p align="left" style="padding-left: 80px;">
										<input type="text" value="<?php echo $interview_prof[0]['ComPrint']['company_jp']; ?>" style="width: 200px;text-align: center">
								    （ほか <input type="text" style="width: 20px;text-align: center"> 社）に派遣する。
								</p>
								<p align="left">
								    　　　　　　　（実習実施機関名）
								</p>
								<p align="left" style="padding-left: 50px;">
								    　技能実習期間中は、 <input type="text" name="" value="" style="width: 300px;"> こととし、技能実習
								</p>
								<p align="left">
								    　　　　　　　　　　　　　　　　（現職にとどめる、休職等とする）
								</p>
								<p align="left"  style="padding-left: 50px;">
								    　終了後、帰国したときは、下記の業務に就くことを証明する。
								</p>
								<p  align="center" style="margin-top: 30px;margin-bottom: 30px;">
								    記
								</p>
								<div style="padding-left: 50px;">
									<p>
									    事業所の名称　 ：
																		<?php echo $this->Form->input('association_id', array(
																			'label' => false,
																			'type' => 'select',
																			'div' => false,
																			'class' => 'agent_name_1',
																			'selected' => $agent[0]['Agent']['id'],
																			'options' => $option_agents,
																			'empty' => true,
																			'style' => 'width:400px'
																		)) ?>

									</p>
									<p>
									    事業所の所在地 ： <textarea value="" style="width: 400px;font-family: 'Times New Roman';resize:none;vertical-align: top" rows="2"><?php echo $agent[0]['Agent']['address_en'].", Sangkat ".$agent[0]['Commune']['commune_en'].", Khan ".$agent[0]['District']['district_en'].", ".$agent[0]['Province']['province_en'] ?></textarea>
									</p>
									<p>
									    帰国後の職種　 ： <input type="text"  value="とび、鉄筋施工">
									</p>
								</div>
								<p align="center" style="margin-top: 50px;margin-bottom: 20px;">
								    <input type="text" name="" value="" style="width:50px;text-align: center">
									    年<input type="text" name="" value="" style="width:30px;text-align: center">月<input type="text" name="" value="" style="width:30px;text-align: center">日　　作成
								</p>
								<p>
								    　　　　　　送出し機関名　 <input type="text" class="agent_name_2" value="<?php echo $agent[0]['Agent']['agent_en']; ?>" style="width: 350px;" >
								</p>
								<p>
								    　　　　　 （所属機関名）
								</p>
								<p align="center">
								    　　　責任者　役職・氏名 　<input type="text" name="" value="<?php echo $agent[0]['Agent']['rep_position_en'] ?>" > <input type="text" style="text-align: center" value="<?php echo $trainees[0]['Trainee']['given_name_en']." ".$trainees[0]['Trainee']['family_name_en'] ?>" > ㊞
								</p>


								</div>
							</div>

							</div>
						</div>

	<?php echo $this->Html->script('select2.min', array('inline' => false, 'block' => 'page-js'));?>
	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>
		$(function(){
			$('.md-modal').remove();
		});

		$(function(){
			$('.agent_name_1').on('change', function(){
				var val = $('.agent_name_1 option:selected').text();
				$('.agent_name_2').val("");
				$('.agent_name_2').val(val);
			});
		});
	<?php $this->Html->scriptEnd(); ?>