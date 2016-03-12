<?php $this->set('title_for_layout', 'Documents List'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/rikuyo_css/print', array('inline'=>false, 'block'=>'page-css',array('media' => 'print')));?>
<?php $this->Html->css('libs/rikuyo_css/1_en', array('inline'=>false, 'block'=>'page-css'),array('media' => 'print'));?>
<?php $this->Html->css('libs/rikuyo_css/6_jp', array('inline'=>false, 'block'=>'page-css'),array('media' => 'print'));?>
<?php $this->Html->addCrumb(__('Interviews'), '/interviews'); ?>
<?php $this->Html->addCrumb(__('Interview Profile'), '/interviews/profile/'.$interview_prof[0]['Interview']['id']); ?>
<?php $this->Html->addCrumb(__('Documents List'), 'output_documents/doc_list/'.$interview_prof[0]['Interview']['id']); ?>
<?php $this->Html->addCrumb(__('Technical Intern Dispatch Notice:Attached List')); ?>
					<h1><?= __('Technical Intern Dispatch Notice:Attached List') ?></h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 maxW1200">
					<div class="main-box clearfix">


						<div class="main-box-body clearfix">
							<div class="print-area" style="width: 1100px;">


								<p align="right">
								    <span class="jitcoBox">JITCO書式10-25-22</span>　
								</p>
								<p>
								    　　Technical Intern Dispatch Notice:Attached List　　　　　　　　　　　　　　　　 Name of sending organization　
								</p>
								<p>　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　(organization belonged to) :
								  <?php echo $this->Form->input('association_id', array(
											'label' => false,
											'type' => 'select',
											'div' => false,
											'class' => 'agent_name_1',
											'selected' => $agent[0]['Agent']['id'],
											'options' => $option_agents,
											'empty' => true,
											'style' => 'width:350px;'
										)) ?>
								</p>
								<p>
								    　　　　　　　　　　　　　　　　　　　　　　　　 　　　　　　　　　　　　　Person responsible Position : <input type="text" style="width: 350px;" value="<?php echo $agent[0]['Agent']['rep_position_en'] ?>" >
								</p>
								<p>
								    　　　　　　　　　　　　　　　　　　　　　　　　　　 　　　　　　　　　　　　　　　　　　　　Name : <input type="text" style="width: 200px;" value="<?php echo $trainees[0]['Trainee']['given_name_en']." ".$trainees[0]['Trainee']['family_name_en'] ?>" >seal
								</p>
								<div align="center">
								    <table border="1" cellspacing="0" cellpadding="0" width="95%">
								        <tbody>
								            <tr>
								                <td width="50">
								                    <p align="center">
								                        No
								                    </p>
								                </td>
								                <td width="142">
								                    <p align="center">
								                        Section belonged to<br>
								                        in home country
								                    </p>
								                </td>
								                <td width="151">
								                    <p align="center">
								                        Occupation in<br>home country
								                    </p>
								                </td>
								                <td width="189">
								                    <p align="center">
								                        Name
								                    </p>
								                </td>
								                <td width="66">
								                    <p align="center">
								                        Age
								                    </p>
								                </td>
								                <td width="66">
								                    <p align="center">
								                        Gender
								                    </p>
								                </td>
								                <td width="209">
								                    <p align="center">
								                        Internship training organization
								                    </p>
								                </td>
								                <td width="117">
								                    <p align="center">
								                        Occupation after returning to home country
								                    </p>
								                </td>
								            </tr>
								            <?php $i = 1;?>
									        	<?php foreach ($trainees as $trainee) : ?>
								            <tr>
								                <td >
								                    <p align="center" style="margin-bottom: 0;margin-top: 5px;">
								                        <?php echo $i++ ?>
								                    </p>
								                </td>
								                <td >
								                    <p align="center" style="margin-bottom: 0;margin-top: 5px;">
								                        <input type="text" name="" value="建設部門"  style="text-align: center;width: 150px">
								                    </p>
								                </td>
								                <td >
								                    <p align="center" style="margin-bottom: 0;margin-top: 5px;">
								                        <input type="text" name="" value="とび" style="text-align: center;width: 150px">
								                    </p>
								                </td>
								                <td >
								                    <p align="center" style="margin-bottom: 0;margin-top: 5px;">
								                        <?php echo $trainee['Trainee']['family_name_en']." ".$trainee['Trainee']['given_name_en'] ?>
								                    </p>
								                </td>
								                <td>
								                    <p align="center" style="margin-bottom: 0;margin-top: 5px;">
								                        <?php echo $this->Btn->calcage($trainees[0]['Trainee']['birthday']) ?>
								                    </p>
								                </td>
								                <td >
								                    <p align="center" style="margin-bottom: 0;margin-top: 5px;">
								                        <?php if ($trainee['Trainee']['sex']=='male'){echo "M";}else{echo "F";} ?>
								                    </p>
								                </td>
								                <td>
								                    <p align="center" style="margin-bottom: 0;margin-top: 5px;">
								                        <input type="text" value="<?php echo $interview_prof[0]['ComPrint']['company_en']; ?>" style="width: 200px;text-align: center">
								                    </p>
								                </td>
								                <td >
								                    <p align="center" style="margin-bottom: 0;margin-top: 5px;">
								                       <input type="text" name="" value="とび" style="text-align: center;width: 150px;">
								                    </p>
								                </td>
								            </tr>
								          	<?php endforeach; ?>

								        </tbody>
								    </table>
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