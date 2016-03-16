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
								    <strong>Certificate of Exterior Training Course</strong>

								</p>
								<div style="margin-left: 20px;">
									<p>
									    For Representative Director of　 <input type="text" value="<?php echo $interview_prof[0]['Association']['association_en'] ?>" style="width: 300px;" >
									</p>
									<p>
									    Term of the Course : From <input type="text" name="" value="" style="width:100px;text-align: center"> to <input type="text" name="" value="" style="width:100px;text-align: center">
									</p>
									<p>
									    Content of the Course
									</p>
									<p>
									    (ⅰ)Basic Japanese Language Study 　　<strong>More than 123 hours</strong>
									</p>
									<p>
									    　　-　 Reading,Writing,Conversation and Grammar
									</p>
									<p>
									    (ⅱ)Basic Study 　　　　　　　　　　<strong>More than 28 hours</strong>
									</p>
									<p>
									    　　-　 about Japanese history, culture, custom, rules to live and work in Japan
									</p>
									<p>
									    (ⅲ)Basic Study 　　　　　　　　　　<strong>More than 25 hours</strong>
									</p>
									<p>
									    　　-　 about Industrial Traning and Technical Internship Program (ITTIP)
									</p>
									<p>
									    　　　　　　　　　　　　　　　　<strong>TOTAL 176hours</strong>
									</p>
									<p>
									    <strong> </strong>
									</p>
									<p>
									    Name list of students who took the course
									</p>
									<table border="1" cellspacing="0" cellpadding="0" width="620" style="margin-left: 20px;">
									    <tbody>
									        <tr>
									            <td width="35" nowrap="">
									            </td>
									            <td width="286" nowrap="">
									                <p align="center">
									                    Name
									                </p>
									            </td>
									            <td width="205" nowrap="">
									                <p align="center">
									                    Date of Birth
									                </p>
									            </td>
									            <td width="69" nowrap="">
									                <p align="center">
									                    Sex
									                </p>
									            </td>
									        </tr>
									        <?php $i=0; ?>
									        <?php if(isset($formated_trainees_array)): ?>
								        <?php foreach ($formated_trainees_array as $trainee) : ?>

								        <tr>
								            <td width="41" nowrap="">
								                <p align="center" style="margin-top: 5px;margin-bottom: 5px;">
								                    <?php echo ++$i ?>
								                </p>
								            </td>
								            <td width="274" nowrap="">
								                <p align="center" style="margin-top: 5px;margin-bottom: 5px;">
								                    <?php echo $trainee['Trainee']['family_name_en']." ".$trainee['Trainee']['given_name_en'] ?>
								                </p>
								            </td>
								            <td width="217" nowrap="">
								                <p align="center" style="margin-top: 5px;margin-bottom: 5px;">
								                    <?php echo date('d/m/Y', strtotime($trainee['Trainee']['birthday'])); ?>
								                </p>
								            </td>
								            <td width="95" nowrap="">
								                <p align="center" style="margin-top: 5px;margin-bottom: 5px;">
								                    <?php if($trainee['Trainee']['sex']=='male'){echo 'M' ;}else{echo 'F';} ?>
								                </p>
								            </td>
								        </tr>
								        <?php endforeach; ?>
								      <?php endif; ?>
									    </tbody>
									</table>
									<p style="margin-top: 40px">
									    This certificate presents for successfully completing the course
									</p>
								</div>
								<p align="right"  style="margin-top: 40px">
								    <span style="margin-right: 345px">above on</span><br><input type="text" name="" value="HUMAN POWER JAPANESE TRAINING CENTER" style="width:400px;">
								</p>
								<p align="right" style="margin-right: 145px;">
								    President
								</p>
								<p align="right" style="margin-right: 0;">
									<input type="text" name="" value="SOK SOPHEAK" style="width:200px;">
								</p>

								<p align="right" style="margin-right: 20px;margin-top: 50px;">
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
										'action' => 'printout/'. $interview_prof[0]['Interview']['id']. '/12_en',
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