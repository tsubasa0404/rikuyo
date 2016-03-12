<?php $this->set('title_for_layout', 'Documents List'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/rikuyo_css/print', array('inline'=>false, 'block'=>'page-css',array('media' => 'print')));?>
<?php $this->Html->css('libs/rikuyo_css/1_en', array('inline'=>false, 'block'=>'page-css'),array('media' => 'print'));?>
<?php $this->Html->addCrumb(__('Interviews'), '/interviews'); ?>
<?php $this->Html->addCrumb(__('Interview Profile'), '/interviews/profile/'.$interview_prof[0]['Interview']['id']); ?>
<?php $this->Html->addCrumb(__('Documents List'), 'output_documents/doc_list/'.$interview_prof[0]['Interview']['id']); ?>
<?php $this->Html->addCrumb(__('Technical Intern Dispatch Notice')); ?>
					<h1><?= __('Technical Intern Dispatch Notice') ?></h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 maxW700">
					<div class="main-box clearfix">


						<div class="main-box-body clearfix">
							<div class="print-area">


								<p align="right">
								    <span class="jitcoBox">JITCO書式10-25-55</span>
								</p>
								<p align="center" style="font-size: 22px;margin-top: 25px;">
								    <strong>Technical Intern Dispatch Notice</strong>
								</p>
								<div style="margin-left: 250px;margin-top: 50px">
									<p>
									    <span style="margin-right: 10px">Section</span> <input type="text" name="" value="Construction Department" style="width: 250px;">
									</p>
									<p>
									    <span style="margin-right: 7px">Position</span> <input type="text" name="" value="construction work, reinforcement work" style="width: 250px;" >
									</p>
									<p>
									    <span style="margin-right: 20px">Name</span> <input type="text" name="" value="<?php echo $trainees[0]['Trainee']['family_name_en']." ".$trainees[0]['Trainee']['given_name_en'] ?>" placeholder=""> Age <?php echo $this->Btn->calcage($trainees[0]['Trainee']['birthday']) ?> <?php if($trainees[0]['Trainee']['sex']=='male'){echo 'M';}else{'F';} ?>
									</p>
									<p>
									    (In addition to<input type="text" name="" value="<?php echo count($trainees)-1 ?>" style="width: 30px;text-align: center;"> persons, as shown on attached list)
									</p>
								</div>
								<p>
								    　　This is to certify that, for the purpose of a technical internship in
								</p>
								<p>
									<input type="text" name="" value="construction work, reinforcement work" style="width:400px;"> the above person(s) will be dispatched
								</p>
								<p>
								   　　　　　　　　 (occupation)
								</p>
								<p>
									for a period of <input type="text" name="" value="" style="width:20px;text-align: center"> years from <input type="text" name="" value="" style="width:20px;text-align: center">(month),<input type="text" name="" value="" style="width:35px;text-align: center">(year),
								</p>
								<p>
								   　　　　　 (Period)
								</p>
								<p>
								    to <input type="text" value="<?php echo $interview_prof[0]['ComPrint']['company_en']; ?>" style="width: 250px;text-align: center"> including <input type="text" style="width: 20px;text-align: center"> other firms, located in <input type="text" value="<?php echo $interview_prof[0]['Association']['province'] ?>" style="text-align: center;width: 100px;"> , Japan.
								</p>
								<p>
								   　　　 (name of training institution) 　　　　　　　　　　　　　　　　　　　　(prefecture)
								</p>
								<p style="margin-top: 30px;">
								    His/her current position of employment is to be
								</p>
								<p>
								    □ Held during the technical internship,
								</p>
								<p>
								    □ Change to a leave of absence during the technical internship,
								</p>
								<p style="margin-top: 30px">
								    And following completion of the internship, when returning to his or her home country he or she will perform the following duties.
								</p>
								<p style="margin-top: 30px;">
								    Name of business facility 　　: <?php echo $this->Form->input('association_id', array(
																													'label' => false,
																													'type' => 'select',
																													'div' => false,
																													'class' => 'agent_name_1',
																													'selected' => $agent[0]['Agent']['id'],
																													'options' => $option_agents,
																													'empty' => true,
																													'style' => 'width:430px'
																												)) ?>
								</p>
								<p>
								    Address of business facility　  : <textarea value="" style="width: 430px;font-family: 'Times New Roman';resize:none;vertical-align: top" rows="2"><?php echo $agent[0]['Agent']['address_en'].", Sangkat ".$agent[0]['Commune']['commune_en'].", Khan ".$agent[0]['District']['district_en'].", ".$agent[0]['Province']['province_en'] ?></textarea>
								</p>
								<p style="margin-top: 30px;">
								    Occupation after returning to home country : <input type="text" name="" value="construction work, reinforcement work" style="width:350px;">
								</p>
								<div style="padding-left: 50px;">
									<p style="margin-top: 50px">
									    Date prepared(Y/M/D):　　　  <input type="text" name="" value="" placeholder="">
									</p>
									<p>
									    Name of sending organization : <input type="text" class="agent_name_2" value="<?php echo $agent[0]['Agent']['agent_en']; ?>" style="width: 350px;" >
									</p>
									<p style="margin-top: 30px;margin-bottom: 30px">
									    (Name of organization to which intern belongs)
									</p>
								</div>
								<p align="center">
								    Position and name of person responsible:
								    <input type="text" style="text-align: center" value="<?php echo $agent[0]['Agent']['rep_position_en'] ?>" >
								     <input type="text" style="text-align: center" value="<?php echo $trainees[0]['Trainee']['given_name_en']." ".$trainees[0]['Trainee']['family_name_en'] ?>" >

								    (seal)


								</p>


								</div>
							</div>

							</div>
						</div>

	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>
		$(function(){
			$('.md-modal').remove();
		});
		$(function(){
			$('.agent_name_1').on('change', function(){
				var val = $('.agent_name_1 option:selected').text();
				$('.agent_name_2').val("");
				$('.agent_name_2').val(val);
			});
		});
	<?php $this->Html->scriptEnd(); ?>