<?php $this->set('title_for_layout', 'Documents List'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/rikuyo_css/print', array('inline'=>false, 'block'=>'page-css',array('media' => 'print')));?>
<?php $this->Html->css('libs/rikuyo_css/1_en', array('inline'=>false, 'block'=>'page-css'),array('media' => 'print'));?>
<?php $this->Html->addCrumb(__('Interviews'), '/interviews'); ?>
<?php $this->Html->addCrumb(__('Interview Profile'), '/interviews/profile/'.$interview_prof[0]['Interview']['id']); ?>
<?php $this->Html->addCrumb(__('Documents List'), '/output_documents/doc_list/'.$interview_prof[0]['Interview']['id']); ?>
<?php $this->Html->addCrumb(__('Letter of Recommendation')); ?>
					<h1><?= __('Letter of Recommendation') ?></h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 maxW700">
					<div class="main-box clearfix">


						<div class="main-box-body clearfix">
							<div class="print-area">


								<p align="right">
								    　　<span class="jitcoBox">JITCO書式10-23</span>　
								</p>
								<p align="center" style="font-size: 22px">
								    推　薦　状
								</p>
								<div class="pmB30" style="padding-left: 80px">
									<p class="mL20">
									    　下記の機関は、日本国向けに技能実習生の派遣を適正に行っていると認められる
									</p>
									<p style="margin-bottom: 0">
									    ので、同機関が派遣する　　　<input type="text" style="text-align: center" value="<?php echo $trainees[0]['Trainee']['given_name_en']." ".$trainees[0]['Trainee']['family_name_en'] ?>" >他　　<strong><input type="text" name="" value="<?php if(isset($formated_trainees_array)){echo count($formated_trainees_array)-1;} ?>" style="width: 20px;text-align: center;"></strong>　名
									</p>
									<p style="margin-top: 0">
									    　　　　　　　　　　　　　（技能実習生名）　　　　　　　（人数）
									</p>
									<p style="margin-bottom: 0">
									    （別添名簿のとおり）が、日本国　  <input type="text" name="" value="<?php echo $interview_prof[0]['Association']['association_jp'] ?>" style="width:240px;text-align: center;">  　に
									</p>
									<p style="margin-top: 0">
									    　　　　　　　　　　　　　　　　　　　　　（監理団体名）　
									</p>
									<p style="margin-bottom: 0">
									    受け入れられて、<strong><input type="text" name="" value="<?php if(isset($selected_interview_jobs)) {echo $this->Foreach->associate_jobs_jp($selected_interview_jobs);} ?>" style="width: 300px;text-align: center"></strong>に関する
									</p>
									<p style="margin-top: 0">
									    　　　　　　　　　　　　　　（職種）
									</p>
									<p>
									    技能実習を <input type="text" name="" value="" style="width:50px;text-align: center">
									    年<input type="text" name="" value="" style="width:30px;text-align: center">月から<input type="text" name="" value="" style="width:30px;text-align: center">年間　実施することについて推薦いたします。
									</p>
									<p>
									    　　　　　　　　　　　　　　（期間）
									</p>
									<p>
									    ただし、この推薦状の効力は、<input type="text" name="" value="" style="width:30px;text-align: center">年限りとします。
									</p>
								</div>
								<p align="center">
								    記
								</p>
								<div style="padding-left: 80px">
									<p>
									    1．送出し機関名 <input type="text" name="" value="HUMAN POWER Co.,Ltd." style="width: 400px">
									</p>
									<p>
									    2．代表者の氏名 <input type="text" name="" value="Ms. Leng Vichheka" style="width: 200px">
									</p>
									<p>
									    3．送出し機関の所在地
									</p>
									<p>
									    <input type="text" name="" value="Nº.115D, Street 18 , Tuol Sangke Commune, Russey Keo Distrct ,Phnom Penh Cambodia" style="width: 500px">
									</p>
									<p align="center">
									   <input type="text" name="" value="" style="width:50px;text-align: center">
									    年<input type="text" name="" value="" style="width:30px;text-align: center">月<input type="text" name="" value="" style="width:30px;text-align: center">日　　作成
									</p>
								</div>
								<p align="center">
								    　　　　　　　　国若しくは地方公共団体　カンボジア王国
								</p>
								<p align="center">
								    　　　　　　　　又はこれらに準ずる機関名　　労働職業訓練省　労働総局
								</p>
								<p align="center">
								    　　　　　　　　　　　<u>　役職・氏名　　　　　　　　　　　　　　　　　　　㊞</u>
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
										'action' => 'printout/'. $interview_prof[0]['Interview']['id']. '/3_jp',
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