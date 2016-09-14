<?php $this->set('title_for_layout', 'CV'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/rikuyo_css/print', array('inline'=>false, 'block'=>'page-css',array('media' => 'print')));?>
<?php $this->Html->css('libs/rikuyo_css/1_en', array('inline'=>false, 'block'=>'page-css'),array('media' => 'print'));?>
<?php $this->Html->addCrumb(__('Trainees'), '/trainees'); ?>
<?php $this->Html->addCrumb(__('Trainee Profile'), '/trainees/profile/'.$trainee_id); ?>
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
								                        <span style="float: left;width: 160px;"><input class="trainee_family_name_en" type="text" style="text-align: center" value="<?php echo $trainee_profile_for_cv['Trainee']['family_name_en']; ?>"></span>
								                        <span style="float: right;width: 160px;"><input class="trainee_given_name_en" type="text" style="text-align: center;width: 160px" value="<?php echo $trainee_profile_for_cv['Trainee']['given_name_en']; ?>"></span>
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
																			<?php if($trainee_profile_for_cv['Trainee']['sex'] == "female"){
																					echo 'M / <span class="circle">F</span>';
																				} elseif($trainee_profile_for_cv['Trainee']['sex'] == "male"){
																						echo '<span class="circle">M</span> / F';
																					} else {
																						echo 'M / F';
																					}
																			 ?>
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
								                        <span style="float: left;width: 160px;"><input class="trainee_family_name_en" type="text" style="text-align: center" value="<?php echo $trainee_profile_for_cv['Trainee']['family_name_jp']; ?>"></span>
								                        <span style="float: right;width: 160px;"><input class="trainee_given_name_en" type="text" style="text-align: center;width: 160px" value="<?php echo $trainee_profile_for_cv['Trainee']['given_name_jp']; ?>"></span>
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
																			<?php if($trainee_profile_for_cv['Trainee']['married'] == "single"){
																					echo 'Y / <span class="circle">N</span>';
																				} elseif($trainee_profile_for_cv['Trainee']['married'] == "married"){
																						echo '<span class="circle">Y</span> / N';
																					} else {
																						echo 'Y / N';
																					}
																			 ?>
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
								                        <input type="text" class="trainee_birthday" name=""  style="text-align: center" value="<?php $this->HlpCalcDate->transform_date($trainee_profile_for_cv['Trainee']['birthday'],'en') ?>">
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
								                        <input type="text" class="trainee_address" value="<?php echo $trainee_profile_for_cv['Trainee']['address_en']." , Sangkat ".$trainee_profile_for_cv['OutputCommune']['commune_en']." , Khan ".$trainee_profile_for_cv['OutputDistrict']['district_en']." , ".$trainee_profile_for_cv['Province']['province_en'] ?>" style="text-align: center;width: 95%">
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
								                        <input type="text" class="trainee_academic1_from" style="width: 100px;text-align:center;" value="<?php echo $trainee_profile_for_cv['Trainee']['academic1_from'] ?>"><span>To</span>
								                        <input type="text" class="trainee_academic1_to" style="width: 100px;text-align:center;" value="<?php echo $trainee_profile_for_cv['Trainee']['academic1_to'] ?>">
								                    </p>
								                </td>
								                <td width="268" colspan="4">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_academic1_en" style="width:95%;text-align:center;" value="<?php echo $trainee_profile_for_cv['Trainee']['academic1_en'] ?>">
								                    </p>
								                </td>
								            </tr>
								            <tr>
								                <td width="284">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_academic2_from" style="width: 100px;text-align:center;" value="<?php echo $trainee_profile_for_cv['Trainee']['academic2_from'] ?>"><span>To</span>
								                        <input type="text" class="trainee_academic2_to" style="width: 100px;text-align:center;" value="<?php echo $trainee_profile_for_cv['Trainee']['academic2_to'] ?>">
								                    </p>
								                </td>
								                <td width="268" colspan="4">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_academic2_en" style="width:95%;text-align:center;" value="<?php echo $trainee_profile_for_cv['Trainee']['academic2_en'] ?>">
								                    </p>
								                </td>
								            </tr>
								            <tr>
								               <td width="284">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_academic3_from" style="width: 100px;text-align:center;" value="<?php echo $trainee_profile_for_cv['Trainee']['academic3_from'] ?>"><span>To</span>
								                        <input type="text" class="trainee_academic3_to" style="width: 100px;text-align:center;" value="<?php echo $trainee_profile_for_cv['Trainee']['academic3_to'] ?>">
								                    </p>
								                </td>
								                <td width="268" colspan="4">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_academic3_en" style="width:95%;text-align:center;" value="<?php echo $trainee_profile_for_cv['Trainee']['academic3_en'] ?>">
								                    </p>
								                </td>
								            </tr>
								            <tr>
								               <td width="284">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_academic4_from" style="width: 100px;text-align:center;" value="<?php echo $trainee_profile_for_cv['Trainee']['academic4_from'] ?>"><span>To</span>
								                        <input type="text" class="trainee_academic4_to" style="width: 100px;text-align:center;" value="<?php echo $trainee_profile_for_cv['Trainee']['academic4_to'] ?>">
								                    </p>
								                </td>
								                <td width="268" colspan="4">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_academic4_en" style="width:95%;text-align:center;" value="<?php echo $trainee_profile_for_cv['Trainee']['academic4_en'] ?>">
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
								                        <input type="text" class="trainee_employ1_from" style="width: 100px;text-align:center;" value="<?php echo $trainee_profile_for_cv['Trainee']['employ1_from'] ?>"><span>To</span>
								                        <input type="text" class="trainee_employ1_to" style="width: 100px;text-align:center;" value="<?php echo $trainee_profile_for_cv['Trainee']['employ1_to'] ?>">
								                    </p>
								                </td>
								                <td width="268" colspan="4">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_employ1_en" style="width:95%;text-align:center;" value="<?php echo $trainee_profile_for_cv['Trainee']['employ1_en'] ?>">
								                    </p>
								                </td>
								            </tr>
								            <tr>
								                <td width="284">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_employ2_from" style="width: 100px;text-align:center;" value="<?php echo $trainee_profile_for_cv['Trainee']['employ2_from'] ?>"><span>To</span>
								                        <input type="text" class="trainee_employ2_to" style="width: 100px;text-align:center;" value="<?php echo $trainee_profile_for_cv['Trainee']['employ2_to'] ?>">
								                    </p>
								                </td>
								                <td width="268" colspan="4">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_employ2_en" style="width:95%;text-align:center;" value="<?php echo $trainee_profile_for_cv['Trainee']['employ2_en'] ?>">
								                    </p>
								                </td>
								            </tr>
								            <tr>
								                <td width="284">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_employ3_from" style="width: 100px;text-align:center;" value="<?php echo $trainee_profile_for_cv['Trainee']['employ3_from'] ?>"><span>To</span>
								                        <input type="text" class="trainee_employ3_to" style="width: 100px;text-align:center;" value="<?php echo $trainee_profile_for_cv['Trainee']['employ3_to'] ?>">
								                    </p>
								                </td>
								                <td width="268" colspan="4">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_employ3_en" style="width:95%;text-align:center;" value="<?php echo $trainee_profile_for_cv['Trainee']['employ3_en'] ?>">
								                    </p>
								                </td>
								            </tr>
								            <tr>
								                <td width="284">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_employ4_from" style="width: 100px;text-align:center;" value="<?php echo $trainee_profile_for_cv['Trainee']['employ4_from'] ?>"><span>To</span>
								                        <input type="text" class="trainee_employ4_to" style="width: 100px;text-align:center;" value="<?php echo $trainee_profile_for_cv['Trainee']['employ4_to'] ?>">
								                    </p>
								                </td>
								                <td width="268" colspan="4">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_employ4_en" style="width:95%;text-align:center;" value="<?php echo $trainee_profile_for_cv['Trainee']['employ4_en'] ?>">
								                    </p>
								                </td>
								            </tr>
								            <tr>
								                <td width="284">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_employ5_from" style="width: 100px;text-align:center;" value="<?php echo $trainee_profile_for_cv['Trainee']['employ5_from'] ?>"><span>To</span>
								                        <input type="text" class="trainee_employ5_to" style="width: 100px;text-align:center;" value="<?php echo $trainee_profile_for_cv['Trainee']['employ5_to'] ?>">
								                    </p>
								                </td>
								                <td width="268" colspan="4">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_employ5_en" style="width:95%;text-align:center;" value="<?php echo $trainee_profile_for_cv['Trainee']['employ5_en'] ?>">
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
								                        <span style="width: 40px;">Position</span> <input type="text" class="trainee_job1_en" value="<?php echo $trainee_profile_for_cv['Job1']['job_en'] ?>" style="text-align:center;width: 210px">
								                    </p>
								                    <p style="margin-top: 0;margin-bottom: 3px;">
								                    	<span style="margin-left: 150px;">For</span>  <input type="text" class="trainee_job1_term" value="<?php echo $trainee_profile_for_cv['Trainee']['Job1_term'] ?>" style="text-align:center;;width: 20px;">Year(s)
								                    </p>
								                </td>

								                <td width="84" colspan="2" rowspan="2">
								                    <p align="center">
								                        Foreign<br>language(s)
								                    </p>
								                </td>
								                <td width="185" colspan="2" rowspan="2">
								                    <p align="center">
								                        <span class="circle">Japanese</span>,<?php if($trainee_profile_for_cv['Trainee']['english']==1){echo '<span class="trainee_english circle">English</span>';} else {echo '<span class="trainee_english">English</span>';} ?>
								                    </p>
								                    <p align="center">
								                        other(<input type="text" class="trainee_lang_others_en" value="<?php echo $trainee_profile_for_cv['Trainee']['lang_others_en']; ?>" style="width: 80px;text-align: center">)
								                    </p>
								                </td>
								            </tr>
								            <tr>
								                <td width="284">
								                 <p align="" style="margin-top: 8px;margin-bottom: 0px">
						                        <span style="width: 40px;">Position</span> <input type="text" class="trainee_job2_en" value="<?php echo $trainee_profile_for_cv['Job2']['job_en'] ?>" style="text-align:center;width: 210px">
							                    </p>
								                  <p style="margin-top: 0;margin-bottom: 3px;">
								                    	<span style="margin-left: 150px;">For</span>  <input type="text" class="trainee_job2_term" value="<?php echo $trainee_profile_for_cv['Trainee']['Job2_term'] ?>" style="text-align:center;;width: 20px;">Year(s)
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
								                    <p class="trainee_visit_enn" style="width: 40px;display: inline-block;">

								                    </p>
								                    <p style="width: 160px;display: inline-block;">
								                    	<span>From</span><input type="text" class="trainee_visit_enn_from" style="width: 50px;text-align: center" value="<?php echo $trainee_profile_for_cv['Trainee']['visit_jpn_from']?>">to<input type="text" class="trainee_visit_enn_to" style="width: 50px;text-align: center" value="<?php echo $trainee_profile_for_cv['Trainee']['visit_jpn_to']?>">
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


	<?php echo $this->Html->script('rikuyo_js/7_en', array('inline' => false, 'block' => 'page-js')); ?>

	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>
		$(function(){
			$('.md-modal').remove();
		});
	<?php $this->Html->scriptEnd(); ?>