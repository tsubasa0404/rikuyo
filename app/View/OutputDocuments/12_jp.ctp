<?php $this->set('title_for_layout', 'Documents List'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/rikuyo_css/print', array('inline'=>false, 'block'=>'page-css',array('media' => 'print')));?>
<?php $this->Html->css('libs/rikuyo_css/1_en', array('inline'=>false, 'block'=>'page-css'),array('media' => 'print'));?>
<?php $this->Html->css('libs/rikuyo_css/12_jp', array('inline'=>false, 'block'=>'page-css'),array('media' => 'print'));?>
<?php $this->Html->addCrumb(__('Interviews'), '/interviews'); ?>
<?php $this->Html->addCrumb(__('Interview Profile'), '/interviews/profile/'.$interview_prof[0]['Interview']['id']); ?>
<?php $this->Html->addCrumb(__('Documents List'), '/output_documents/doc_list/'.$interview_prof[0]['Interview']['id']); ?>
<?php $this->Html->addCrumb(__('Certificate of Exterior Training Course')); ?>
					<h1><?= __('Certificate of Exterior Training Course') ?></h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 maxW750">
					<div class="main-box clearfix">


						<div class="main-box-body clearfix">
							<div class="print-area">


								<p align="center" style="margin-top: 30px;font-size: 22px;margin-bottom: 30px">
								    本邦外における講習・外部講習修了証
								</p>
								<p>
								    <input type="text" value="<?php echo $interview_prof[0]['Association']['association_jp'] ?>" style="width: 200px;text-align: center" >　　理事長殿
								</p>
								<p>
								    　　講習期間　：<input type="text" name="" value="" style="width:50px;text-align: center">
									    年<input type="text" name="" value="" style="width:30px;text-align: center">月<input type="text" name="" value="" style="width:30px;text-align: center">日　～<input type="text" name="" value="" style="width:50px;text-align: center">
									    年<input type="text" name="" value="" style="width:30px;text-align: center">月<input type="text" name="" value="" style="width:30px;text-align: center">日
								</p>
								<p>
								    　　講習内容　：　日本語123時間
								</p>
								<p>
								    　　　　　　　　　（読み書き・文法・会話など）
								</p>
								<p>
								    　　　　　　　　　日本での生活一般に関する知識28時間
								</p>
								<p>
								    　　　　　　　　（日本の歴史、文化・生活様式、職場のルール等）
								</p>
								<p>
								    　　　　　　　　　その他本邦での円滑な技能などの習得に資する知識25時間
								</p>
								<p>
								    　　　　　　　　（習得技能の目標・内容、職場内規律、心構え等）
								</p>
								<p>
								    　　　　　　　　　合計　176時間
								</p>
								<p style="margin-left: 20px;">
								    受講者名
								</p>
								<table border="1" cellspacing="0" cellpadding="0" width="626" style="margin-left: 40px;">
								    <tbody>
								        <tr>
								            <td width="41" nowrap="">
								            </td>
								            <td width="274" nowrap="">
								                <p align="center" style="margin-top: 5px;margin-bottom: 5px">
								                    氏名
								                </p>
								            </td>
								            <td width="217" nowrap="">
								                <p align="center" style="margin-top: 5px;margin-bottom: 5px">
								                    生年月日
								                </p>
								            </td>
								            <td width="95" nowrap="">
								                <p align="center" style="margin-top: 5px;margin-bottom: 5px">
								                    性別
								                </p>
								            </td>
								        </tr>
								        <?php $i=0; ?>
								        <?php if(isset($formated_trainees_array)): ?>
								        <?php foreach ($formated_trainees_array as $trainee) : ?>

								        <tr>
								            <td width="41" nowrap="">
								                <p align="center" style="margin-top: 5px;margin-bottom: 5px">
								                    <?php echo ++$i ?>
								                </p>
								            </td>
								            <td width="274" nowrap="">
								                <p align="center" style="margin-top: 5px;margin-bottom: 5px">
								                    <?php echo $trainee['Trainee']['family_name_en']." ".$trainee['Trainee']['given_name_en'] ?>
								                </p>
								            </td>
								            <td width="217" nowrap="">
								                <p align="center" style="margin-top: 5px;margin-bottom: 5px">
								                    <?php echo date('Y年m月d日', strtotime($trainee['Trainee']['birthday'])); ?>
								                </p>
								            </td>
								            <td width="95" nowrap="">
								                <p align="center" style="margin-top: 5px;margin-bottom: 5px">
								                    <?php if($trainee['Trainee']['sex']=='male'){echo '男性' ;}else{echo '女性';} ?>
								                </p>
								            </td>
								        </tr>
								        <?php endforeach; ?>
									      <?php endif; ?>

								    </tbody>
								</table>
								<p style="margin-top: 40px">
								    <input type="text" name="" value="" style="width:50px;text-align: center">
									    年<input type="text" name="" value="" style="width:30px;text-align: center">月<input type="text" name="" value="" style="width:30px;text-align: center">日をもって当該予定の講習を修了したことをご報告いたします。
								</p>
								<p align="right"  style="margin-top: 40px">
								    <input type="text" name="" value="HUMAN POWER JAPANESE TRAINING CENTER" style="width:400px;">
								</p>
								<p align="right" style="margin-right: 140px;">
								    役職　　<input type="text" name="" value="President" style="width:200px;">
								</p>
								<p align="right" style="margin-right: 140px;">
								    氏名　　<input type="text" name="" value="SOK SOPHEAK" style="width:200px;">
								</p>
								<p align="right" style="margin-right: 100px;margin-top: 50px;">
								    <u> 　　　　　　　　　　　　　　</u>
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
										'action' => 'printout/'. $interview_prof[0]['Interview']['id']. '/12_jp',
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