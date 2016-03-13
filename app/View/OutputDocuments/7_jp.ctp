<?php $this->set('title_for_layout', 'Documents List'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/rikuyo_css/print', array('inline'=>false, 'block'=>'page-css',array('media' => 'print')));?>
<?php $this->Html->css('libs/rikuyo_css/1_en', array('inline'=>false, 'block'=>'page-css'),array('media' => 'print'));?>
<?php $this->Html->css('libs/rikuyo_css/7_jp', array('inline'=>false, 'block'=>'page-css'),array('media' => 'print'));?>
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
								    　<span class="jitcoBox">JITCO書式10-2</span>　　
								</p>
								<p align="center" style="font-size: 22px;">
								    <strong>履　歴　書</strong>
								</p>
								<p align="center">
								    　　　　　　　　　　　　　　　　　　　　　　　　　　　　<input type="text" name="" value="" style="width:50px;text-align: center">
									    年<input type="text" name="" value="" style="width:30px;text-align: center">月<input type="text" name="" value="" style="width:30px;text-align: center">日　　作成
								</p>
								<div align="center">
								    <table border="2" cellspacing="0" cellpadding="0">
								        <tbody style="border: 2px  black solid;">
								            <tr >
								                <td width="34" rowspan="2">
								                    <p align="center">
								                        姓
								                    </p>
								                    <p align="center">
								                        名
								                    </p>
								                </td>
								                <td width="66">
								                    <p align="center">
								                        英字
								                    </p>
								                </td>
								                <td width="360" colspan="2">
								                    <p style="height: 15px;">
								                        <span style="float: left;width: 160px;"><strong><input class="trainee_family_name_en" type="text" style="text-align: center" value=""></strong></span>
								                        <span style="float: right;width: 160px;"><strong><input class="trainee_given_name_en" type="text" style="text-align: center;width: 160px" value=""></strong></span>
								                    </p>
								                    <p style="height: 10px;">
								                        <span style="font-size: 8px;float: left;width: 115px;padding-left: 30px;border-top: solid 1px">LAST NAME(FAMILY NAME)</span>　　　 <span style="font-size: 8px;float: right;width: 115px;padding-left: 30px;padding-right:10px;border-top: solid 1px">FIRST NAME(GIVENNAMES)</span>　
								                    </p>
								                </td>
								                <td width="66" colspan="2">
								                    <p align="center">
								                        性別
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
								                        漢字
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
								                        配偶者
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
								                        生年月日
								                    </p>
								                </td>
								                <td width="552" colspan="5">
								                    <p align="center">
								                        <input type="text" class="trainee_birthday" value="" style="text-align: center">
								                    </p>
								                </td>
								            </tr>
								            <tr>
								                <td width="100" colspan="2">
								                    <p align="center">
								                        現住所
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
								                        学
								                    </p>
								                    <p align="center">
								                        歴
								                    </p>
								                </td>
								                <td width="284">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        期　　　　　間
								                    </p>
								                </td>
								                <td width="268" colspan="4">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        学校名・就職先名等
								                    </p>
								                </td>
								            </tr>
								            <tr>
								                <td width="284">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_academic1_from" style="width: 100px;text-align:center;"><span>～</span>
								                        <input type="text" class="trainee_academic1_to" style="width: 100px;text-align:center;">
								                    </p>
								                </td>
								                <td width="268" colspan="4">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_academic1_jp" style="width:95%;text-align:center;">
								                    </p>
								                </td>
								            </tr>
								            <tr>
								                <td width="284">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_academic2_from" style="width: 100px;text-align:center;"><span>～</span>
								                        <input type="text" class="trainee_academic2_to" style="width: 100px;text-align:center;">
								                    </p>
								                </td>
								                <td width="268" colspan="4">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_academic2_jp" style="width:95%;text-align:center;">
								                    </p>
								                </td>
								            </tr>
								            <tr>
								               <td width="284">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_academic3_from" style="width: 100px;text-align:center;"><span>～</span>
								                        <input type="text" class="trainee_academic3_to" style="width: 100px;text-align:center;">
								                    </p>
								                </td>
								                <td width="268" colspan="4">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_academic3_jp" style="width:95%;text-align:center;">
								                    </p>
								                </td>
								            </tr>
								            <tr>
								               <td width="284">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_academic4_from" style="width: 100px;text-align:center;"><span>～</span>
								                        <input type="text" class="trainee_academic4_to" style="width: 100px;text-align:center;">
								                    </p>
								                </td>
								                <td width="268" colspan="4">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_academic4_jp" style="width:95%;text-align:center;">
								                    </p>
								                </td>
								            </tr>
								            <tr>
								                <td width="100" colspan="2" rowspan="5">
								                    <p align="center">
								                        職
								                    </p>
								                    <p align="center">
								                        歴
								                    </p>
								                </td>
								                <td width="284">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_employ1_from" style="width: 100px;text-align:center;"><span>～</span>
								                        <input type="text" class="trainee_employ1_to" style="width: 100px;text-align:center;">
								                    </p>
								                </td>
								                <td width="268" colspan="4">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_employ1_jp" style="width:95%;text-align:center;">
								                    </p>
								                </td>
								            </tr>
								            <tr>
								                <td width="284">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_employ2_from" style="width: 100px;text-align:center;"><span>～</span>
								                        <input type="text" class="trainee_employ2_to" style="width: 100px;text-align:center;">
								                    </p>
								                </td>
								                <td width="268" colspan="4">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_employ2_jp" style="width:95%;text-align:center;">
								                    </p>
								                </td>
								            </tr>
								            <tr>
								                <td width="284">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_employ3_from" style="width: 100px;text-align:center;"><span>～</span>
								                        <input type="text" class="trainee_employ3_to" style="width: 100px;text-align:center;">
								                    </p>
								                </td>
								                <td width="268" colspan="4">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_employ3_jp" style="width:95%;text-align:center;">
								                    </p>
								                </td>
								            </tr>
								            <tr>
								                <td width="284">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_employ4_from" style="width: 100px;text-align:center;"><span>～</span>
								                        <input type="text" class="trainee_employ4_to" style="width: 100px;text-align:center;">
								                    </p>
								                </td>
								                <td width="268" colspan="4">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_employ4_jp" style="width:95%;text-align:center;">
								                    </p>
								                </td>
								            </tr>
								            <tr>
								                <td width="284">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_employ5_from" style="width: 100px;text-align:center;"><span>～</span>
								                        <input type="text" class="trainee_employ5_to" style="width: 100px;text-align:center;">
								                    </p>
								                </td>
								                <td width="268" colspan="4">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_employ5_jp" style="width:95%;text-align:center;">
								                    </p>
								                </td>
								            </tr>
								            <tr>
								                <td width="100" colspan="2" rowspan="2">
								                    <p align="center">
								                        経　歴
								                    </p>
								                    <p align="center">
								                        職　歴
								                    </p>
								                </td>
								                <td width="284">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_job1_jp" value="" style="text-align:center;width: 200px;"> 職 <input type="text" class="trainee_job1_term" value="" style="text-align:center;width: 20px;">年
								                    </p>
								                </td>

								                <td width="84" colspan="2" rowspan="2">
								                    <p align="center">
								                        外国語
								                    </p>
								                </td>
								                <td width="185" colspan="2" rowspan="2">
								                    <p align="center">
								                        <span class="circle">日本語</span>、<span class="trainee_english">英語</span>
								                    </p>
								                    <p align="center">
								                        その他(<input type="text" class="trainee_lang_others_jp" value="" style="width: 80px;text-align: center">)
								                    </p>
								                </td>
								            </tr>
								            <tr>
								                <td width="284">
								                <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" class="trainee_job2_jp" value="" style="text-align:center;width: 200px;"> 職 <input type="text" class="trainee_job2_term" value="" style="text-align:center;width: 20px;">年
								                    </p>
								                </td>
								            </tr>
								            <tr>
								                <td width="100" colspan="2">
								                    <p align="center">
								                        訪日経験
								                    </p>
								                </td>
								                <td width="284">
								                    <p style="margin-left: 5px;" class="trainee_visit_jpn">

								                    </p>
								                </td>
								                <td width="268" colspan="4" rowspan="2" valign="top">
								                    <p>
								                        署名
								                    </p>
								                </td>
								            </tr>
								            <tr>
								                <td width="100" colspan="2">
								                    <p align="center">
								                        その他
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
									   　　ローマ字で記載した姓名は、旅券発給に用いるものと同一です。
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


	<?php echo $this->Html->script('rikuyo_js/7_jp', array('inline' => false, 'block' => 'page-js')); ?>

	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>
		$(function(){
			$('.md-modal').remove();
		});
	<?php $this->Html->scriptEnd(); ?>