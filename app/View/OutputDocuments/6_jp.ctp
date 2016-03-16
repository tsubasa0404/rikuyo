<?php $this->set('title_for_layout', 'Documents List'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/rikuyo_css/print', array('inline'=>false, 'block'=>'page-css',array('media' => 'print')));?>
<?php $this->Html->css('libs/rikuyo_css/1_en', array('inline'=>false, 'block'=>'page-css'),array('media' => 'print'));?>
<?php $this->Html->css('libs/rikuyo_css/6_jp', array('inline'=>false, 'block'=>'page-css'),array('media' => 'print'));?>
<?php $this->Html->addCrumb(__('Interviews'), '/interviews'); ?>
<?php $this->Html->addCrumb(__('Interview Profile'), '/interviews/profile/'.$interview_prof[0]['Interview']['id']); ?>
<?php $this->Html->addCrumb(__('Documents List'), '/output_documents/doc_list/'.$interview_prof[0]['Interview']['id']); ?>
<?php $this->Html->addCrumb(__('Name List of Dispatch Notice')); ?>
					<h1><?= __('Name List of Dispatch Notice') ?></h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 maxW1200">
					<div class="main-box clearfix">


						<div class="main-box-body clearfix">
							<div class="print-area" style="width: 1100px;">


								<p align="right">
								    <span class="jitcoBox">JITCO書式10-25-2</span>　
								</p>
								<p>
								    　　技能実習生派遣状－別添名簿　　　　　　　　　　　　　　　 　　　　　　　 送出し機関（所属機関）名　
								    <input type="text" class="agent_name_2" value="<?php echo $agent[0]['Agent']['agent_en']; ?>" style="width: 350px;" >
								<p>
								    　　　　　　　　　　　　　　　　　　　　　　　　 　　　　　　　　　　　　　　　　　　　　 責任者役職　<input type="text" style="width: 350px;" value="<?php echo $agent[0]['Agent']['rep_position_en'] ?>" >
								</p>
								<p>
								    　　　　　　　　　　　　　　　　　　　　　　　　　　 　　　　　　　　　　　　　　　　　　　　　 氏名　<input type="text" style="width: 200px;" value="<?php echo $agent[0]['Agent']['rep_family_name_en']." ".$agent[0]['Agent']['rep_given_name_en'] ?>" >㊞
								</p>
								<div align="center">
								    <table border="1" cellspacing="0" cellpadding="0" width="95%">
								            <thead>
								            	<tr>
								            	    <td width="30" class="w20" >
								            	        <p align="center">
								            	            番号
								            	        </p>
								            	    </td>
								            	    <td width="130">
								            	        <p align="center">
								            	            本国における
								            	        </p>
								            	        <p align="center">
								            	            所属部署
								            	        </p>
								            	    </td>
								            	    <td width="200">
								            	        <p align="center">
								            	            本国における職種
								            	        </p>
								            	    </td>
								            	    <td width="130">
								            	        <p align="center">
								            	            氏名
								            	        </p>
								            	    </td>
								            	    <td width="30">
								            	        <p align="center">
								            	            年齢
								            	        </p>
								            	    </td>
								            	    <td width="42">
								            	        <p align="center">
								            	            性別
								            	        </p>
								            	    </td>
								            	    <td width="180">
								            	        <p align="center">
								            	            受け入れ実施機関名
								            	        </p>
								            	    </td>
								            	    <td width="200">
								            	        <p align="center">
								            	            帰国後の職種
								            	        </p>
								            	    </td>
								            	</tr>
								            </thead>
								        <tbody>
								            <?php $i = 1;?>
								            <?php if(isset($formated_trainees_array)): ?>
									        	<?php foreach ($formated_trainees_array as $trainee) : ?>
								            <tr>
								                <td >
								                    <p align="center" style="margin-bottom: 0;margin-top: 5px;">
								                        <?php echo $i++ ?>
								                    </p>
								                </td>
								                <td >
								                    <p class="sFont" align="center" style="margin-bottom: 0;margin-top: 5px;">
								                        <textarea type="text" rows="2" value=""  style="text-align: center;width: 99%"><?php echo $this->Foreach->associate_sectors_jp($sectors) ?></textarea>
								                    </p>
								                </td>
								                <td >
								                    <p class="sFont" align="center" style="margin-bottom: 0;margin-top: 5px;">
								                        <textarea type="text" rows="2" value="" style="text-align: center;width: 99%" class="job_1"><?php $job_ids=explode(',',$trainee['Interview']['job']); echo $this->Foreach->trainees_job($job_ids, 'jp') ?></textarea>
								                    </p>
								                </td>
								                <td >
								                    <p align="center" style="margin-bottom: 0;margin-top: 5px;">
								                        <input type="text" name="" value="<?php echo $trainee['Trainee']['family_name_en']." ".$trainee['Trainee']['given_name_en'] ?>" style="text-align: center;width: 99%">
								                    </p>
								                </td>
								                <td>
								                    <p align="center" style="margin-bottom: 0;margin-top: 5px;">
								                        <?php echo $this->Btn->calcage($trainee['Trainee']['birthday']) ?>
								                    </p>
								                </td>
								                <td >
								                    <p align="center" style="margin-bottom: 0;margin-top: 5px;">
								                        <?php if ($trainee['Trainee']['sex']=='male'){echo "男";}else{echo "女";} ?>
								                    </p>
								                </td>
								                <td>
								                    <p class="sFont" align="center" style="margin-bottom: 0;margin-top: 5px;">
								                        <textarea type="text" rows="2" style="width: 98%;text-align: center"><?php $company_id=$trainee['Interview']['company_id']; echo $this->Foreach->printout_company($company_id, 'jp'); ?></textarea>
								                    </p>
								                </td>
								                <td >
								                    <p class="sFont" align="center" style="margin-bottom: 0;margin-top: 5px;">
								                       <textarea type="text" name="" rows="2" style="text-align: center;width: 98%;" class="job_2"><?php $job_ids=explode(',',$trainee['Interview']['job']); echo $this->Foreach->trainees_job($job_ids, 'jp') ?></textarea>
								                    </p>
								                </td>
								            </tr>
								          	<?php endforeach; ?>
									          <?php endif; ?>

								        </tbody>
								    </table>
								</div>


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
										'action' => 'printout/'. $interview_prof[0]['Interview']['id']. '/6_jp',
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