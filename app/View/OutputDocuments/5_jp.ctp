<?php $this->set('title_for_layout', 'Documents List'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/rikuyo_css/print', array('inline'=>false, 'block'=>'page-css',array('media' => 'print')));?>
<?php $this->Html->css('libs/rikuyo_css/1_en', array('inline'=>false, 'block'=>'page-css'),array('media' => 'print'));?>
<?php $this->Html->addCrumb(__('Interviews'), '/interviews'); ?>
<?php $this->Html->addCrumb(__('Interview Profile'), '/interviews/profile/'.$interview_prof[0]['Interview']['id']); ?>
<?php $this->Html->addCrumb(__('Documents List'), '/output_documents/doc_list/'.$interview_prof[0]['Interview']['id']); ?>
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
									    <span style="margin-right: 30px">所属部署</span><input type="text" name="" value="<?php echo $this->Foreach->associate_sectors_jp($sectors) ?>" style="width: 300px;">
									</p>
									<p>
									    <span style="margin-right: 30px">職　　種</span><input type="text" class="job_1" value="<?php if(isset($selected_interview_jobs)){echo $this->Foreach->associate_jobs_jp($selected_interview_jobs);} ?>" style="width: 300px;">
									</p>
									<p align="left">
									    <span style="margin-right: 30px">氏　　名</span><input type="text" name="" value="<?php echo $trainees[0]['Trainee']['family_name_en']." ".$trainees[0]['Trainee']['given_name_en'] ?>" placeholder=""> 年齢 <input type="text" value="<?php echo $this->Btn->calcage($trainees[0]['Trainee']['birthday']) ?>" style="width: 20px;">歳　<?php if($trainees[0]['Trainee']['sex']=='male'){echo '<span class="circle">男</span>・女';}else{echo '男・<span class="circle">女</span>';} ?>
									</p>
									<p align="left">
									    　　　　　　　（ほか <input type="text" name="" value="<?php if(isset($formated_trainees_array)){echo count($formated_trainees_array)-1;} ?>" style="width: 30px;text-align: center;"> 名） 　　（別添名簿の通り）
									</p>
								</div>
								<p align="center" style="margin-bottom: 0px">
								    　上記の者を <input type="text" class="job_2" value="<?php if(isset($selected_interview_jobs)){echo $this->Foreach->associate_jobs_jp($selected_interview_jobs);} ?>" style="width: 300px;text-align: center">についての技能実習を実施するため、
								</p>
								<!-- <p style="margin-top:1px;border-bottom: 1px solid #333;width: 300px;margin-left: 115px;margin-bottom: 0"></p> -->
								<p align="left" style="margin-top: 0">
								    　　　　　　　　　　　　　　　　（職種）　　
								</p>
								<p style="margin-bottom: 0">
								    　　　　<input type="text" name="" value="20" style="width: 35px">年<input type="text" style="width: 20px">月<input type="text" style="width: 20px">日から<input type="text" style="width: 20px">年間、日本国 <input type="text" value="<?php echo $interview_prof[0]['Association']['province'] ?>" style="text-align: center">  所在の
								</p>
								<p align="left" style="margin-top: 0">
								    　　　　　　　　　　　　　（期間）　　　　　（都道府県名）
								</p>
								<p align="left" style="padding-left: 40px;margin-bottom: 0">
										<input type="text" value="<?php echo $interview_prof[0]['ComPrint']['company_jp']; ?>" style="width: 200px;text-align: center">
								    （ほか <input type="text" style="width: 20px;text-align: center"> 社）に派遣する。
								</p>
								<p align="left" style="margin-top: 0">
								    　　　　　　　（実習実施機関名）
								</p>
								<p align="left" style="padding-left: 50px;margin-bottom: 0">
								    　技能実習期間中は、 <input type="text" name="" value="" style="width: 300px;"> こととし、技能実習
								</p>
								<p align="left" style="margin-top: 0">
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
									    事業所の名称　 ： <input class="agent_name_1" type="text" value="<?php echo $agent[0]['Agent']['agent_en']?>" style="width: 400px">
									</p>
									<p>
									    事業所の所在地 ： <textarea value="" style="width: 400px;font-family: 'Times New Roman';resize:none;vertical-align: top" rows="2"><?php echo $agent[0]['Agent']['address_en'].", Sangkat ".$agent[0]['Commune']['commune_en'].", Khan ".$agent[0]['District']['district_en'].", ".$agent[0]['Province']['province_en'] ?></textarea>
									</p>
									<p>
									    帰国後の職種　 ： <input type="text" class="job_2" value="<?php if(isset($selected_interview_jobs)){echo $this->Foreach->associate_jobs_jp($selected_interview_jobs);} ?>" style="width: 400px;">
									</p>
								</div>
								<p align="center" style="margin-top: 50px;margin-bottom: 20px;">
								    <input type="text" name="" value="" style="width:50px;text-align: center">
									    年<input type="text" name="" value="" style="width:30px;text-align: center">月<input type="text" name="" value="" style="width:30px;text-align: center">日　　作成
								</p>
								<p style="margin-bottom: 0">
								    　　　　　　送出し機関名　 <input type="text" class="agent_name_2" value="<?php echo $agent[0]['Agent']['agent_en']; ?>" style="width: 350px;" >
								</p>
								<p style="margin-top: 0;margin-bottom: 0">
								    　　　　　 （所属機関名）
								</p>
								<p align="center" style="margin-top: 0">
								    　　　責任者　役職・氏名 　<input type="text" style="text-align: center" value="<?php echo $agent[0]['Agent']['rep_position_en'] ?>" > <input type="text" style="text-align: center" value="<?php echo $trainees[0]['Trainee']['given_name_en']." ".$trainees[0]['Trainee']['family_name_en'] ?>" > ㊞
								</p>


								</div>
							</div>

						</div>
					</div>

				<div class="col-lg-4 maxW400 no-print">
					<div class="main-box clearfix">
						<div class="main-box-body clearfix">
							<header class="main-box-header clearfix">
								<h2><?= __('Select interviews to merge info') ?>
								</h2>
							</header>

							<div class="main-box-body clearfix">
								<ul id="interview_list" class="widget-todo">
									<?php echo $this->Form->create('OutputDocument', array(
										'type' => 'post',
										'action' => 'printout/'. $interview_prof[0]['Interview']['id']. '/5_jp',
										'class' => 'get_interviews_form'
									))  ?>
									<?php foreach ($same_association_interviews as $interview) : ?>
										<li class="clearfix">
											<div class="name">
												<div class="checkbox-nice">
													<input type="checkbox" id="interview_id_<?php echo $interview['Interview']['id'] ?>" class="" value="<?php echo $interview['Interview']['id'] ?>" name="interview_id[]" <?php if(isset($interview_ids)){if(in_array($interview['Interview']['id'], $interview_ids)){echo 'checked';};} ?>/>
													<label for="interview_id_<?php echo $interview['Interview']['id'] ?>" style="text-decoration: blink;"><?php echo  $interview['Company']['company_jp']."(".$interview['Interview']['interview_date'] .")" ?>
													</label>
												</div>
											</div>
										</li>
									<?php endforeach; ?>
								</ul>
								<button type="submit" class="btn btn-default right get_interviews_btn"><?= __('Refresh') ?></button>
								<?php echo $this->Form->end(); ?>
							</div>
						</div>
					</div>
					<!-- /interviews -->
				</div>



	<?php echo $this->Html->script('select2.min', array('inline' => false, 'block' => 'page-js'));?>
	<?php echo $this->Html->script('rikuyo_js/myOutput', array('inline' => false, 'block' => 'page-js'));?>
	<?php echo $this->Html->script('rikuyo_js/5_jp', array('inline' => false, 'block' => 'page-js'));?>
	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>
		$(function(){
			$('.md-modal').remove();
		});


		$(function(){
			var this_interview_id = '<?php echo $interview_prof[0]['Interview']['id']; ?>';
	    $('#interview_list input[type=checkbox]').each(function(){
				if($(this).val()==this_interview_id){
					$(this).attr('checked', 'checked');
					$(this).next().addClass('red');
				}
	    });
		});

	<?php $this->Html->scriptEnd(); ?>