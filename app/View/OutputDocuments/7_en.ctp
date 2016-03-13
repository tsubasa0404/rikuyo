<?php $this->set('title_for_layout', 'Documents List'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/rikuyo_css/print', array('inline'=>false, 'block'=>'page-css',array('media' => 'print')));?>
<?php $this->Html->css('libs/rikuyo_css/1_en', array('inline'=>false, 'block'=>'page-css'),array('media' => 'print'));?>
<?php $this->Html->addCrumb(__('Interviews'), '/interviews'); ?>
<?php $this->Html->addCrumb(__('Interview Profile'), '/interviews/profile/'.$interview_prof[0]['Interview']['id']); ?>
<?php $this->Html->addCrumb(__('Documents List'), '/output_documents/doc_list/'.$interview_prof[0]['Interview']['id']); ?>
<?php $this->Html->addCrumb(__('Curriculum Vitae')); ?>
					<h1><?= __('Curriculum Vitae') ?></h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 maxW750">
					<div class="main-box clearfix">


						<div class="main-box-body clearfix">
							<div class="print-area">


								<p align="right">
								    <span class="jitcoBox">JITCO書式10-2-3</span>
								</p>
								<p align="center" style="font-size: 18px;">
								    <strong>Curriculum 　 Vitae</strong>
								</p>
								<p align="center">
								    　　　　　　　　　　　　　　　　　　　　　　　　　　Date prepared (Y/M/D):<input type="text" name="" value="" style="width:100px;text-align: center">
								</p>
								<div align="center">
								    <table border="2" cellspacing="0" cellpadding="0">
								        <tbody style="border: 2px  black solid;">
								            <tr >
								                <td width="34" rowspan="2">
								                    <p align="center">
								                        Name
								                    </p>

								                </td>
								                <td width="66">
								                    <p align="center">
								                        Roman<br>
								                        alphabet
								                    </p>
								                </td>
								                <td width="360" colspan="2">
								                    <p style="height: 15px;">
								                        <span style="float: left;width: 160px;"><input class="trainee_family_name_en" type="text" style="text-align: center" ></span>
								                        <span style="float: right;width: 160px;"><input class="trainee_given_name_en" type="text" style="text-align: center;width: 160px" ></span>
								                    </p>
								                    <p style="height: 10px;">
								                        <span style="font-size: 8px;float: left;width: 115px;padding-left: 30px;border-top: solid 1px">LAST NAME(FAMILY NAME)</span>　　　 <span style="font-size: 8px;float: right;width: 115px;padding-left: 30px;padding-right:10px;border-top: solid 1px">FIRST NAME(GIVENNAMES)</span>　
								                    </p>
								                </td>
								                <td width="66" colspan="2">
								                    <p align="center">
								                        Gender
								                    </p>
								                </td>
								                <td width="126">
								                    <p align="center" class="trainee_sex">

								                    </p>
								                </td>
								            </tr>
								            <tr>
								                <td width="66">
								                    <p align="center">
								                        Kanji
								                    </p>
								                </td>
								                <td width="360" colspan="2" valign="top">
								                    <p style="height: 15px;">
								                        <span style="float: left;width: 160px;"><input class="trainee_family_name_jp" type="text" style="text-align: center" value=""></span>
								                        <span style="float: right;width: 160px;"><input class="trainee_given_name_jp" type="text" style="text-align: center;width: 160px" value=""></span>
								                    </p>
								                    <p style="height: 10px;">
								                        <span style="font-size: 10px;float: left;width: 85px;padding-left: 60px;border-top: solid 1px">性</span>　　　 <span style="font-size: 10px;float: right;width: 85px;padding-left: 60px;padding-right:10px;border-top: solid 1px">名</span>　
								                    </p>
								                </td>
								                <td width="66" colspan="2">
								                    <p align="center">
								                        Married
								                    </p>
								                </td>
								                <td width="126">
								                    <p align="center" class="trainee_married">

								                    </p>
								                </td>
								            </tr>
								            <tr>
								                <td width="100" colspan="2">
								                    <p align="center" style="font-size: 12px;">
								                        Date of birth
								                    </p>
								                </td>
								                <td width="552" colspan="5">
								                    <p align="center">
								                        <input type="text" class="trainee_birthday" name=""  style="text-align: center">
								                    </p>
								                </td>
								            </tr>
								            <tr>
								                <td width="100" colspan="2">
								                    <p align="center">
								                        Current address
								                    </p>
								                </td>
								                <td width="552" colspan="5">
								                    <p align="center">
								                        <input type="text" class="trainee_address" value="" style="text-align: center;width: 95%">
								                    </p>
								                </td>
								            </tr>
								            <tr>
								                <td width="100" colspan="2" rowspan="5">
								                    <p align="center">
								                        Academic history
								                    </p>
								                </td>
								                <td width="284">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        Dates
								                    </p>
								                </td>
								                <td width="268" colspan="4">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        Name of school, employer, etc.
								                    </p>
								                </td>
								            </tr>
								            <tr>
								               <td width="284">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_academic1_from" style="width: 100px;text-align:center;"><span>To</span>
								                        <input type="text" class="trainee_academic1_to" style="width: 100px;text-align:center;">
								                    </p>
								                </td>
								                <td width="268" colspan="4">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_academic1_en" style="width:95%;text-align:center;">
								                    </p>
								                </td>
								            </tr>
								            <tr>

								                <td width="284">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_academic2_from" style="width: 100px;text-align:center;"><span>To</span>
								                        <input type="text" class="trainee_academic2_to" style="width: 100px;text-align:center;">
								                    </p>
								                </td>
								                <td width="268" colspan="4">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_academic2_en" style="width:95%;text-align:center;">
								                    </p>
								                </td>
								            </tr>
								            <tr>
								                <td width="284">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_academic3_from" style="width: 100px;text-align:center;"><span>To</span>
								                        <input type="text" class="trainee_academic3_to" style="width: 100px;text-align:center;">
								                    </p>
								                </td>
								                <td width="268" colspan="4">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_academic3_en" style="width:95%;text-align:center;">
								                    </p>
								                </td>
								            </tr>
								            <tr>
								               <td width="284">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_academic4_from" style="width: 100px;text-align:center;"><span>To</span>
								                        <input type="text" class="trainee_academic4_to" style="width: 100px;text-align:center;">
								                    </p>
								                </td>
								                <td width="268" colspan="4">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_academic4_en" style="width:95%;text-align:center;">
								                    </p>
								                </td>
								            </tr>

								            <tr>
								                <td width="100" colspan="2" rowspan="5">
								                    <p align="center">
								                        Employment<br>history
								                    </p>
								                </td>
								                <td width="284">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_employ1_from" style="width: 100px;text-align:center;"><span>To</span>
								                        <input type="text" class="trainee_employ1_to" style="width: 100px;text-align:center;">
								                    </p>
								                </td>
								                <td width="268" colspan="4">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_employ1_en" style="width:95%;text-align:center;">
								                    </p>
								                </td>
								            </tr>
								            <tr>
								                <td width="284">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_employ2_from" style="width: 100px;text-align:center;"><span>To</span>
								                        <input type="text" class="trainee_employ2_to" style="width: 100px;text-align:center;">
								                    </p>
								                </td>
								                <td width="268" colspan="4">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_employ2_en" style="width:95%;text-align:center;">
								                    </p>
								                </td>
								            </tr>
								            <tr>
								                <td width="284">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_employ3_from" style="width: 100px;text-align:center;"><span>To</span>
								                        <input type="text" class="trainee_employ3_to" style="width: 100px;text-align:center;">
								                    </p>
								                </td>
								                <td width="268" colspan="4">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_employ3_en" style="width:95%;text-align:center;">
								                    </p>
								                </td>
								            </tr>
								            <tr>
								                <td width="284">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_employ4_from" style="width: 100px;text-align:center;"><span>To</span>
								                        <input type="text" class="trainee_employ4_to" style="width: 100px;text-align:center;">
								                    </p>
								                </td>
								                <td width="268" colspan="4">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_employ4_en" style="width:95%;text-align:center;">
								                    </p>
								                </td>
								            </tr>
								            <tr>
								                <td width="284">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_employ5_from" style="width: 100px;text-align:center;"><span>To</span>
								                        <input type="text" class="trainee_employ5_to" style="width: 100px;text-align:center;">
								                    </p>
								                </td>
								                <td width="268" colspan="4">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_employ5_en" style="width:95%;text-align:center;">
								                    </p>
								                </td>
								            </tr>
								            <tr>
								                <td width="100" colspan="2" rowspan="2">
								                    <p align="center">
								                        Positions held
								                    </p>
								                </td>
								                <td width="284">
								                    <p align="" style="margin-top: 8px;margin-bottom: 0px">
								                        <span style="width: 40px;">Position</span> <input type="text" class="trainee_job1_en" value="" style="text-align:center;width: 210px">
								                    </p>
								                    <p style="margin-top: 0;margin-bottom: 3px;">
								                    	<span style="margin-left: 150px;">For</span>  <input type="text" class="trainee_job1_term" value="" style="text-align:center;;width: 20px;">Year(s)
								                    </p>
								                </td>

								                <td width="84" colspan="2" rowspan="2">
								                    <p align="center">
								                        Foreign<br>language(s)
								                    </p>
								                </td>
								                <td width="185" colspan="2" rowspan="2">
								                    <p align="center">
								                        <span class="circle">Japanese</span>,<span class="trainee_english">English</span>
								                    </p>
								                    <p align="center">
								                        other(<input type="text" class="trainee_lang_others_jp" value="" style="width: 80px;text-align: center">)
								                    </p>
								                </td>
								            </tr>
								            <tr>
								                <td width="284">
								                 <p align="" style="margin-top: 8px;margin-bottom: 0px">
						                        <span style="width: 40px;">Position</span> <input type="text" class="trainee_job2_en" value="" style="text-align:center;width: 210px">
							                    </p>
								                  <p style="margin-top: 0;margin-bottom: 3px;">
								                    	<span style="margin-left: 150px;">For</span>  <input type="text" class="trainee_job2_term" value="" style="text-align:center;;width: 20px;">Year(s)
								                    </p>
								                </td>
								            </tr>
								            <tr>
								                <td width="100" colspan="2">
								                    <p align="center">
								                        Previous visits to<br>Japan
								                    </p>
								                </td>
								                <td width="284">
								                    <p class="trainee_visit_jpn" style="width: 40px;display: inline-block;">

								                    </p>
								                    <p style="width: 160px;display: inline-block;">
								                    	<span>From</span><input type="text" class="trainee_visit_jpn_from" style="width: 50px;text-align: center">to<input type="text" class="trainee_visit_jpn_to" style="width: 50px;text-align: center">
								                    </p>
								                </td>
								                <td width="268" colspan="4" rowspan="2" valign="top">
								                    <p>
								                        Signature
								                    </p>
								                </td>
								            </tr>
								            <tr>
								                <td width="100" colspan="2">
								                    <p align="center">
								                        Other
								                    </p>
								                </td>
								                <td width="284" valign="top">
								                </td>
								            </tr>
								            <tr height="0">
								                <td width="34">
								                </td>
								                <td width="66">
								                </td>
								                <td width="284">
								                </td>
								                <td width="76">
								                </td>
								                <td width="7">
								                </td>
								                <td width="59">
								                </td>
								                <td width="126">
								                </td>
								            </tr>
								        </tbody>
								    </table>
								</div>
								<p>
								   　　Your name written by roman letter must be the same as your passport’s name.
								</p>



								</div>
							</div>
						</div>
					</div>


					<div class="col-lg-4 maxW400 no-print">
						<div class="main-box clearfix">
							<div class="main-box-body clearfix">
								<header class="main-box-header clearfix">
								<h2><?= __('Successful Trainees') ?>
								</h2>
							</header>

							<div class="main-box-body clearfix">
								<div class="table-responsive">
									<table class="table table-products table-bordered">
										<tbody>
											<?php foreach ($trainees as $trainee) : ?>
												<tr>
													<td>
														<div class="radio">
															<input class="trainee_radio" type="radio" name="trainee_id" value="<?php echo $trainee['Trainee']['id']?>" id="<?php echo $trainee['Trainee']['control_no'] ?>" data-url="<?php echo $this->Html->url(array('controller' => 'output_documents', 'action' => 'getTraineeAjax')); ?>">
															<label for="<?php echo $trainee['Trainee']['control_no'] ?>">
																<?php echo $trainee['Trainee']['control_no']. " / " ?>
																<?php echo $this->Html->link($trainee['Trainee']['given_name_en']." " .$trainee['Trainee']['family_name_en'],
																	array('controller' => 'trainees', 'action' => 'profile', $trainee['Trainee']['id']),
																	array('escape' => false, 'target' => '_blank'));
																?>
															</label>
														</div>
													</td>
												</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
							</div>
							</div>
						</div>
						<!-- /trainees -->
					</div>

	<?php echo $this->Html->script('rikuyo_js/7_en', array('inline' => false, 'block' => 'page-js')); ?>

	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>
		$(function(){
			$('.md-modal').remove();
		});
	<?php $this->Html->scriptEnd(); ?>