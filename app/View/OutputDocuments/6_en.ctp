<?php $this->set('title_for_layout', 'Documents List'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/rikuyo_css/print', array('inline'=>false, 'block'=>'page-css',array('media' => 'print')));?>
<?php $this->Html->css('libs/rikuyo_css/1_en', array('inline'=>false, 'block'=>'page-css'),array('media' => 'print'));?>
<?php $this->Html->css('libs/rikuyo_css/6_en', array('inline'=>false, 'block'=>'page-css'),array('media' => 'print'));?>
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
								    <span class="jitcoBox">JITCO書式10-25-6</span>　
								</p>
								<p>
								    　　Technical Intern Dispatch Notice:Attached List　　　　　　　　　　　　　　　　 Name of sending organization　
								</p>
								<p>　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　(organization belonged to) :
								  <input type="text" class="agent_name_2" value="<?php echo $agent[0]['Agent']['agent_en']; ?>" style="width: 350px;" >
								</p>
								<p>
								    　　　　　　　　　　　　　　　　　　　　　　　　 　　　　　　　　　　　　　Person responsible Position : <input type="text" style="width: 350px;" value="<?php echo $agent[0]['Agent']['rep_position_en'] ?>" >
								</p>
								<p>
								    　　　　　　　　　　　　　　　　　　　　　　　　　　 　　　　　　　　　　　　　　　　　　　　Name : <input type="text" style="width: 200px;" value="<?php echo $agent[0]['Agent']['rep_family_name_en']." ".$agent[0]['Agent']['rep_given_name_en'] ?>" >seal
								</p>
								<div align="center">
								    <table border="1" cellspacing="0" cellpadding="0" width="95%">
								            <thead>
								            	<tr>
								            	    <td class="w20" >
								            	        <p align="center" style="padding-left: 0;padding-right: 0">
								            	            No
								            	        </p>
								            	    </td>
								            	    <td width="160">
								            	        <p align="center">
								            	            Section belonged to<br>
								            	            in home country
								            	        </p>
								            	    </td>
								            	    <td width="230">
								            	        <p align="center">
								            	            Occupation in<br>home country
								            	        </p>
								            	    </td>
								            	    <td width="120">
								            	        <p align="center">
								            	            Name
								            	        </p>
								            	    </td>
								            	    <td width="30">
								            	        <p align="center" style="padding-left: 1px;padding-right: 1px;">
								            	            Age
								            	        </p>
								            	    </td>
								            	    <td width="42">
								            	        <p align="center" style="padding-left: 1px;padding-right: 1px;">
								            	            Gender
								            	        </p>
								            	    </td>
								            	    <td width="160">
								            	        <p align="center">
								            	            Internship training organization
								            	        </p>
								            	    </td>
								            	    <td width="230">
								            	        <p align="center">
								            	            Occupation after returning to home country
								            	        </p>
								            	    </td>
								            	</tr>
								            </thead>
								        <tbody>
								            <?php $i = 1;?>
								            <?php if(isset($formated_trainees_array)): ?>
									        	<?php foreach ($formated_trainees_array as $trainee) : ?>
								            <tr>
								                <td  class="w20">
								                    <p class="w20" align="center" style="margin-bottom: 0;margin-top: 5px;padding-left: 1px;padding-right: 1px;">
								                        <?php echo $i++ ?>
								                    </p>
								                </td>
								                <td >
								                    <p class="sFont" align="center" style="margin-bottom: 0;margin-top: 5px;">
								                        <textarea type="text" rows="2" value=""  style="text-align: center;width: 98%"><?php echo $this->Foreach->associate_sectors_en($sectors) ?></textarea>
								                    </p>
								                </td>
								                <td>
								                    <p class="sFont" align="center" style="margin-bottom: 0;margin-top: 5px;">
								                        <textarea type="text" rows="2" value="" style="text-align: center;width: 98%"><?php $job_ids=explode(',',$trainee['Interview']['job']); echo $this->Foreach->trainees_job($job_ids, 'en') ?></textarea>
								                    </p>
								                </td>
								                <td >
								                    <p align="center" style="margin-bottom: 0;margin-top: 5px;">
								                        <input type="text" value="<?php echo $trainee['Trainee']['family_name_en']." ".$trainee['Trainee']['given_name_en'] ?>" style="width: 98%;text-align: center">
								                    </p>
								                </td>
								                <td>
								                    <p align="center" style="margin-bottom: 0;margin-top: 5px;padding-left: 1px;padding-right: 1px;">
								                        <?php echo $this->Btn->calcage($trainee['Trainee']['birthday']) ?>
								                    </p>
								                </td>
								                <td >
								                    <p align="center" style="margin-bottom: 0;margin-top: 5px;padding-left: 1px;padding-right: 1px;">
								                        <?php if ($trainee['Trainee']['sex']=='male'){echo "M";}else{echo "F";} ?>
								                    </p>
								                </td>
								                <td>
								                    <p class="sFont" align="center" style="margin-bottom: 0;margin-top: 5px;">
								                        <textarea type="text" rows="2" style="width: 98%;text-align: center"><?php $company_id=$trainee['Interview']['company_id']; echo $this->Foreach->printout_company($company_id, 'en'); ?></textarea>
								                    </p>
								                </td>
								                <td>
								                    <p class="sFont" align="center" style="margin-bottom: 0;margin-top: 5px;">
								                       <textarea type="text" rows="2" style="text-align: center;width: 98%;"><?php $job_ids=explode(',',$trainee['Interview']['job']); echo $this->Foreach->trainees_job($job_ids, 'en') ?></textarea>
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
										'action' => 'printout/'. $interview_prof[0]['Interview']['id']. '/6_en',
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