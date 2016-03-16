<?php $this->set('title_for_layout', 'Documents List'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/rikuyo_css/print', array('inline'=>false, 'block'=>'page-css',array('media' => 'print')));?>
<?php $this->Html->css('libs/rikuyo_css/1_en', array('inline'=>false, 'block'=>'page-css'),array('media' => 'print'));?>
<?php $this->Html->css('libs/rikuyo_css/4_en', array('inline'=>false, 'block'=>'page-css'),array('media' => 'screen'));?>
<?php $this->Html->addCrumb(__('Interviews'), '/interviews'); ?>
<?php $this->Html->addCrumb(__('Interview Profile'), '/interviews/profile/'.$interview_prof[0]['Interview']['id']); ?>
<?php $this->Html->addCrumb(__('Documents List'), '/output_documents/doc_list/'.$interview_prof[0]['Interview']['id']); ?>
<?php $this->Html->addCrumb(__('List of Dispatch Trainees to Japan')); ?>
					<h1><?= __('List of Dispatch Trainees to Japan') ?></h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 maxW800">
					<div class="main-box clearfix">


						<div class="main-box-body clearfix">
							<div class="print-area">


								<p align="center" style="font-size: 22px;margin-top: 50px;">
								    <strong>List of Dispatch Trainees to Japan</strong>
								</p>
								<div style="padding-left: 80px;margin-top: 100px;margin-bottom: 50px; font-size: 18px">
									<p>
									    Sending Organization<span style="padding-left: 45px">：</span><input type="text" name="" value="HUMAN POWER Co., Ltd." style="width:400px;font-size: 18px;font-family: 'Times New Roman' ">
									</p>
									<p>
									    Supervising Organization　：<input type="text" name="" value="<?php echo $interview_prof[0]['Association']['association_en'] ?>" style="width:400px;font-size: 18px;font-family: 'Times New Roman' ">
									</p>
								</div>
								<div align="center" style="padding-left: 20px;padding-right: 20px;">
									<table border="1" cellspacing="0" cellpadding="0" width="680">
									    <tbody>
									        <tr>
									            <td width="30" nowrap="">
									                <p align="center">
									                    No
									                </p>
									            </td>
									            <td width="160">
									                <p align="center">
									                    Name (Japanese)
									                </p>
									            </td>
									            <td width="160">
									                <p align="center">
									                    Name (Alphabet)
									                </p>
									            </td>
									            <td width="50" nowrap="">
									                <p align="center">
									                    Sex
									                </p>
									            </td>
									            <td width="130" nowrap="">
									                <p align="center">
									                    Date of Birth
									                </p>
									            </td>
									            <td width="123" nowrap="">
									                <p align="center">
									                    Nationality
									                </p>
									            </td>
									        </tr>
									        <?php $i = 1;?>
									        <?php if(isset($formated_trainees_array)) : ?>
									        <?php foreach ($formated_trainees_array as $trainee) : ?>
									        	<tr>
									            <td width="38" nowrap="">
									                <p align="center">
									                    <?php echo $i++ ?>
									                </p>
									            </td>
									            <td width="160" nowrap="">
									                <p align="center">
																		<?php echo $trainee['Trainee']['family_name_jp']." ".$trainee['Trainee']['given_name_jp'] ?>
									                </p>
									            </td>
									            <td width="160" nowrap="">
									                <p align="center">
									                    <?php echo $trainee['Trainee']['family_name_en']." ".$trainee['Trainee']['given_name_en'] ?>
									                </p>
									            </td>
									            <td width="47" nowrap="">
									                <p align="center">
									                    <?php if ($trainee['Trainee']['sex']=='male'){echo "M";}else{echo "F";} ?>
									                </p>
									            </td>
									            <td width="151" nowrap="">
									                <p align="center">
									                    <?php echo date('d/m/Y', strtotime($trainee['Trainee']['birthday'])); ?>
									                </p>
									            </td>
									            <td width="123" nowrap="">
									                <p align="center">
									                    Cambodia
									                </p>
									            </td>
									        </tr>
									        <?php endforeach; ?>
										      <?php endif; ?>
									    </tbody>
									</table>
								</div>
								<p>
								    Dispatch trainees to Japan just only above  <input type="text" style="width: 50px;text-align: center" value="<?php if(isset($formated_trainees_array)){echo count($formated_trainees_array);} ?>" placeholder=""> person(s).
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
										'action' => 'printout/'. $interview_prof[0]['Interview']['id']. '/4_en',
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