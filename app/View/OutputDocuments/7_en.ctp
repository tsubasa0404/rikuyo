
<?php $this->set('title_for_layout', 'Documents List'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/rikuyo_css/print', array('inline'=>false, 'block'=>'page-css',array('media' => 'print')));?>
<?php $this->Html->css('libs/rikuyo_css/1_en', array('inline'=>false, 'block'=>'page-css'),array('media' => 'print'));?>
<?php $this->Html->addCrumb(__('Interviews'), '/interviews'); ?>
<?php $this->Html->addCrumb(__('Interview Profile'), '/interviews/profile/'.$interview_prof[0]['Interview']['id']); ?>
<?php $this->Html->addCrumb(__('Documents List'), 'output_documents/doc_list/'.$interview_prof[0]['Interview']['id']); ?>
<?php $this->Html->addCrumb(__('Curriculum Vitae')); ?>
					<h1><?= __('Curriculum Vitae') ?></h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 maxW700">
					<div class="main-box clearfix">


						<div class="main-box-body clearfix">
							<div class="print-area">


								<p align="right">
								    <span class="jitcoBox">JITCO書式10－2－3</span>
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
								                        <span style="float: left;width: 160px;"><strong><input type="text" style="text-align: center" value="<?php echo $trainees[0]['Trainee']['family_name_en']?>"></strong></span>
								                        <span style="float: right;width: 160px;"><strong><input type="text" style="text-align: center;width: 160px" value="<?php echo $trainees[0]['Trainee']['given_name_en']?>"></strong></span>
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
								                    <p align="center">
								                        <?php if($trainees[0]['Trainee']['sex']=='male'){echo '<span class="circle">M</span>・F';}else{echo 'M・<span class="circle">F</span>';} ?>
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
								                        <span style="float: left;width: 160px;"><strong><input type="text" style="text-align: center" value="<?php echo $trainees[0]['Trainee']['family_name_jp']?>"></strong></span>
								                        <span style="float: right;width: 160px;"><strong><input type="text" style="text-align: center;width: 160px" value="<?php echo $trainees[0]['Trainee']['given_name_jp']?>"></strong></span>
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
								                    <p align="center">
								                        <?php if($trainees[0]['Trainee']['married'] && $trainees[0]['Trainee']['married']=='married'){echo '<span class="circle">Y</span>・N';}else{echo 'Y・<span class="circle">N</span>';} ?>
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
								                        <input type="text" name="" value="<?php echo date('d/m/Y', strtotime($trainees[0]['Trainee']['birthday'])) ?>" style="text-align: center">
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
								                        <!-- <input type="text" name="" value="<?php //echo $trainees[0]['Trainee']['address_en'].", Sangkat ".$trainees[0]['Commune']['commune_en'].", Khan ".$trainees[0]['District']['district_en'].", ".$trainees[0]['Province']['province_en'] ?>" style="text-align: center"> -->
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
								                        <input type="text" value="1999年10月 ～ 2005年8月" style="text-align:center;font-family: 'Times New Roman'">
								                    </p>
								                </td>
								                <td width="268" colspan="4">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" value="TANGEN小学校" style="text-align:center;font-family: 'Times New Roman'">
								                    </p>
								                </td>
								            </tr>
								            <tr>
								                <td width="284">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" value="1999年10月 ～ 2005年8月" style="text-align:center;font-family: 'Times New Roman'">
								                    </p>
								                </td>
								                <td width="268" colspan="4">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" value="TANGEN小学校" style="text-align:center;font-family: 'Times New Roman'">
								                    </p>
								                </td>
								            </tr>
								            <tr>
								               <td width="284">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" value="1999年10月 ～ 2005年8月" style="text-align:center;font-family: 'Times New Roman'">
								                    </p>
								                </td>
								                <td width="268" colspan="4">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" value="TANGEN小学校" style="text-align:center;font-family: 'Times New Roman'">
								                    </p>
								                </td>
								            </tr>
								            <tr>
								               <td width="284">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" value="1999年10月 ～ 2005年8月" style="text-align:center;font-family: 'Times New Roman'">
								                    </p>
								                </td>
								                <td width="268" colspan="4">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" value="TANGEN小学校" style="text-align:center;font-family: 'Times New Roman'">
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
								                        <input type="text" value="1999年10月 ～ 2005年8月" style="text-align:center;font-family: 'Times New Roman'">
								                    </p>
								                </td>
								                <td width="268" colspan="4">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" value="WALES FOOD Co.,Ltd" style="text-align:center;font-family: 'Times New Roman'">
								                    </p>
								                </td>
								            </tr>
								            <tr>
								                <td width="284">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" value="1999年10月 ～ 2005年8月" style="text-align:center;font-family: 'Times New Roman'">
								                    </p>
								                </td>
								                <td width="268" colspan="4">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" value="WALES FOOD Co.,Ltd" style="text-align:center;font-family: 'Times New Roman'">
								                    </p>
								                </td>
								            </tr>
								            <tr>
								                <td width="284">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" value="1999年10月 ～ 2005年8月" style="text-align:center;font-family: 'Times New Roman'">
								                    </p>
								                </td>
								                <td width="268" colspan="4">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" value="WALES FOOD Co.,Ltd" style="text-align:center;font-family: 'Times New Roman'">
								                    </p>
								                </td>
								            </tr>
								            <tr>
								                <td width="284">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" value="1999年10月 ～ 2005年8月" style="text-align:center;font-family: 'Times New Roman'">
								                    </p>
								                </td>
								                <td width="268" colspan="4">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" value="WALES FOOD Co.,Ltd" style="text-align:center;font-family: 'Times New Roman'">
								                    </p>
								                </td>
								            </tr>
								            <tr>
								                <td width="284">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" value="1999年10月 ～ 2005年8月" style="text-align:center;font-family: 'Times New Roman'">
								                    </p>
								                </td>
								                <td width="268" colspan="4">
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        <input type="text" value="WALES FOOD Co.,Ltd" style="text-align:center;font-family: 'Times New Roman'">
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
								                    <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        Position <input type="text" value="水産練り製品製造" style="text-align:center;font-family: 'Times New Roman'"> <br>For  <input type="text" value="6" style="text-align:center;font-family: 'Times New Roman';width: 20px;">Year(s)
								                    </p>
								                </td>

								                <td width="84" colspan="2" rowspan="2">
								                    <p align="center">
								                        Foreign<br>language(s)
								                    </p>
								                </td>
								                <td width="185" colspan="2" rowspan="2">
								                    <p align="center">
								                        <span class="circle">Japanese</span>,English
								                    </p>
								                    <p align="center">
								                        other(　　　　　)
								                    </p>
								                </td>
								            </tr>
								            <tr>
								                <td width="284">
								                 <p align="center" style="margin-top: 8px;margin-bottom: 8px">
								                        Position <input type="text" value="水産練り製品製造" style="text-align:center;font-family: 'Times New Roman'"> <br>For  <input type="text" value="6" style="text-align:center;font-family: 'Times New Roman';width: 20px;">Year(s)
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
								                    <p>
								                        Y・N　　　　　　 From // to //
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

	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>
		$(function(){
			$('.md-modal').remove();
		});
	<?php $this->Html->scriptEnd(); ?>