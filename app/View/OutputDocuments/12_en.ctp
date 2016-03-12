<?php $this->set('title_for_layout', 'Documents List'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/rikuyo_css/print', array('inline'=>false, 'block'=>'page-css',array('media' => 'print')));?>
<?php $this->Html->css('libs/rikuyo_css/1_en', array('inline'=>false, 'block'=>'page-css'),array('media' => 'print'));?>
<?php $this->Html->addCrumb(__('Interviews'), '/interviews'); ?>
<?php $this->Html->addCrumb(__('Interview Profile'), '/interviews/profile/'.$interview_prof[0]['Interview']['id']); ?>
<?php $this->Html->addCrumb(__('Documents List'), 'output_documents/doc_list/'.$interview_prof[0]['Interview']['id']); ?>
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
									        <tr>
									            <td width="35" nowrap="">
									                <p align="center">
									                    1
									                </p>
									            </td>
									            <td width="286" nowrap="">
									                <p align="center">
									                    SORY RIDA
									                </p>
									            </td>
									            <td width="205" nowrap="">
									                <p align="center">
									                    25/10/1987
									                </p>
									            </td>
									            <td width="69" nowrap="">
									                <p align="center">
									                    F
									                </p>
									            </td>
									        </tr>
									        <tr>
									            <td width="35" nowrap="">
									                <p align="center">
									                    2
									                </p>
									            </td>
									            <td width="286" nowrap="">
									                <p align="center">
									                    CHHAV SREY CHANN
									                </p>
									            </td>
									            <td width="205" nowrap="">
									                <p align="center">
									                    22/06/1985
									                </p>
									            </td>
									            <td width="69" nowrap="">
									                <p align="center">
									                    F
									                </p>
									            </td>
									        </tr>
									        <tr>
									            <td width="35" nowrap="">
									                <p align="center">
									                    3
									                </p>
									            </td>
									            <td width="286" nowrap="">
									                <p align="center">
									                    SAING SAM OL
									                </p>
									            </td>
									            <td width="205" nowrap="">
									                <p align="center">
									                    05/10/1979
									                </p>
									            </td>
									            <td width="69" nowrap="">
									                <p align="center">
									                    F
									                </p>
									            </td>
									        </tr>
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

	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>
		$(function(){
			$('.md-modal').remove();
		});
	<?php $this->Html->scriptEnd(); ?>