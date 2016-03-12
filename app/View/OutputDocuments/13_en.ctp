<?php $this->set('title_for_layout', 'Documents List'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/rikuyo_css/print', array('inline'=>false, 'block'=>'page-css',array('media' => 'print')));?>
<?php $this->Html->css('libs/rikuyo_css/1_en', array('inline'=>false, 'block'=>'page-css'),array('media' => 'print'));?>
<?php $this->Html->addCrumb(__('Interviews'), '/interviews'); ?>
<?php $this->Html->addCrumb(__('Interview Profile'), '/interviews/profile/'.$interview_prof[0]['Interview']['id']); ?>
<?php $this->Html->addCrumb(__('Documents List'), 'output_documents/doc_list/'.$interview_prof[0]['Interview']['id']); ?>
<?php $this->Html->addCrumb(__('Entrusted Agreement for Preliminary Training')); ?>
					<h1><?= __('Entrusted Agreement for Preliminary Training') ?></h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 maxW700">
					<div class="main-box clearfix">


						<div class="main-box-body clearfix">
							<div class="print-area" style="width: 700px">



								<p align="center" style="margin-top: 50px;font-size: 22px;margin-bottom: 30px">
								    <strong>Entrusted Agreement for Preliminary Training</strong>
								</p>

							<div style="margin-left: 60px;font-size: 18px;">
								<p align="center" style="margin-bottom: 20px;">
								    <strong>Between</strong>
								</p>

								<p>
								    <strong><span style="display: inline-block;padding-top: 4px;">Party-A :</span> <textarea style="width: 300px;vertical-align: top;font-size: 20px" rows="2" ><?php echo $interview_prof[0]['Association']['association_en'] ?> </textarea></strong>
								</p>
								<p  align="center" style="margin-bottom: 30px;margin-top: 10px;">
								    <strong> And</strong>
								</p>
								<p>
								    <strong>Party-B : </strong>
								    <strong><input type="text" value="HUMAN POWER JAPANESE TRAINING CENTER" style="width: 500px;font-size: 20px;" ></strong>
								</p>
								<p>
								    <strong>Both parties agree as the following :</strong>
								</p>
								<p>
								    Article 1 : “A” and “B” agree that, based on the discussion, “A” entrusts “B” to<br>
								    　　　　 provide basic Japanese language course, and vocational training for<br>
								    　　　　 trainees for about one month. The detail is as follows ;
								</p>
								<p style="margin-top: 0;margin-bottom: 0">
								    　　　　 (ⅰ) Basic Japanese Language Study (Reading, writing,<br>
								    　　　　 conversation and grammar)　　　　　　  <strong> More than 12</strong><strong>3 hours</strong>
								</p>
								<p style="margin-top: 0;margin-bottom: 0">
								    　　　　 (ⅱ) Basic Study about Japanese history, culture, custom, rules to<br>
								    　　　　 live and work in Japan 　　　　　　　　<strong> More than 28 hours</strong>
								</p>
								<p style="margin-top: 0;">
								    　　　　 (ⅲ) Basic Study about Industrial Training and Technical<br>
								    　　　　 Internship Program (ITTIP) 　　　　　　 <strong>More than 25 hours</strong>
								</p>
								<p style="margin-top: 10px;">
								    Article-2 : "A" and "B" agree to provide course materials as the following;
								</p>
								<p style="margin-top: 0;margin-bottom: 0">
								    　　　　 (ⅰ) “B” prepares course materials for Basic Japanese language<br>
								    　　　　 Study
								</p>
								<p style="margin-top: 0;margin-bottom: 0">
								    　　　　 (ⅱ) “A” and “B” cooperate to prepare materials for Basic Study<br>
								    　　　　 about Japanese culture and history, based on negotiation<br>
								    　　　　 between both parties
								</p>
								<p style="margin-top: 0;">
								    　　　　 (ⅲ) “A” provides course materials for Basic study about system<br>
								    　　　　 and purpose of ITTIP
								</p>
								<p style="margin-top: 10px;">
								    Article-3 : “A” and “B” come to an agreement about cost and fees for entrusted<br>
								    　　　　 preliminary training
								</p>
								<p style="margin-top: 0;margin-bottom: 0">
								    　　　　 (ⅰ) Training fee is <input type="text" name="" value="39" style="width:30px;text-align: center;"> USD per a person, including course<br>
								    　　　　 materials, water, electricity, accommodation and facilities<br>
								    　　　　 (except for food and living cost)
								</p>
								<p class="new-page"  style="padding-top: 50px;">
								    　　　　 (ⅱ) “B” has responsibilities preparing for studying place, teacher<br>
								    　　　　 and education, and maintaining quality of education that<br>
								    　　　　 trainees can speak and understand Japanese language<br>
								    　　　　 appropriately through the preliminary training.<br>
								    　　　　 In addition, “B” has responsibilities to assist trainees’ daily<br>
								    　　　　 management and existence.
								</p>
								<p  style="margin-top: 20px;">
								    In terms of conditions that both of them do not stipulate, both parties should<br>
								    negotiate about its renewal or complement. This document should be made two<br>
								    copies, and both parties should have and hold it each.
								</p>
								<p style="margin-top: 40px;">
								    This Agreement is made on the date of <input type="text" name="" value="" style="width: 100px;text-align: center">
								</p>
								<p  style="margin-top: 20px;margin-bottom: 0">
								    Signed and Sealed for and on behalf of
								</p>
								<p  style="margin-top: 0;">
								    <strong><span style="display: inline-block;padding-top: 4px;">Party-A :</span> <textarea style="width: 300px;vertical-align: top;font-size: 20px" rows="2" ><?php echo $interview_prof[0]['Association']['association_en'] ?> </textarea></strong>
								</p>
								<p  style="margin-top: 70px;margin-bottom: 30px;">
								    _________________________
								</p>
								<p>
								    and
								</p>
								<p style="margin-top: 20px;margin-bottom: 0">
								    Signed and Sealed for and on behalf of
								</p>
								<p style="margin-top: 0;">
								    <strong>Party-B : </strong>
								    <strong><input type="text" value="HUMAN POWER JAPANESE TRAINING CENTER" style="width: 500px;font-size: 20px;" ></strong>
								</p>
								<p style="margin-top: 90px;">
								    __________________________
								</p>
							</div>



								</div>
							</div>

							</div>
						</div>

	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>
		$(function(){
			$('.md-modal').remove();
		});
	<?php $this->Html->scriptEnd(); ?>