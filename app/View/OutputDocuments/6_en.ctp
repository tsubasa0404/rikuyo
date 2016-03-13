<?php $this->set('title_for_layout', 'Documents List'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/rikuyo_css/print', array('inline'=>false, 'block'=>'page-css',array('media' => 'print')));?>
<?php $this->Html->css('libs/rikuyo_css/1_en', array('inline'=>false, 'block'=>'page-css'),array('media' => 'print'));?>
<?php $this->Html->css('libs/rikuyo_css/6_en', array('inline'=>false, 'block'=>'page-css'),array('media' => 'print'));?>
<?php $this->Html->addCrumb(__('Interviews'), '/interviews'); ?>
<?php $this->Html->addCrumb(__('Interview Profile'), '/interviews/profile/'.$interview_prof[0]['Interview']['id']); ?>
<?php $this->Html->addCrumb(__('Documents List'), '/output_documents/doc_list/'.$interview_prof[0]['Interview']['id']); ?>
<?php $this->Html->addCrumb(__('Name List of Dispatch Notice')); ?>
					<h1><?= __('Name List of Dispatch Notice') ?></h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 maxW1200">
					<div class="main-box clearfix">


						<div class="main-box-body clearfix">
							<div class="print-area" style="width: 1100px;">


								<p align="right">
								    <span class="jitcoBox">JITCO書式10-25-6</span>　
								</p>
								<p>
								    　　Technical Intern Dispatch Notice:Attached List　　　　　　　　　　　　　　　　 Name of sending organization　
								</p>
								<p>　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　(organization belonged to) :
								  <input type="text" class="agent_name_2" value="<?php echo $agent[0]['Agent']['agent_en']; ?>" style="width: 350px;" >
								</p>
								<p>
								    　　　　　　　　　　　　　　　　　　　　　　　　 　　　　　　　　　　　　　Person responsible Position : <input type="text" style="width: 350px;" value="<?php echo $agent[0]['Agent']['rep_position_en'] ?>" >
								</p>
								<p>
								    　　　　　　　　　　　　　　　　　　　　　　　　　　 　　　　　　　　　　　　　　　　　　　　Name : <input type="text" style="width: 200px;" value="<?php echo $agent[0]['Agent']['rep_family_name_en']." ".$agent[0]['Agent']['rep_given_name_en'] ?>" >seal
								</p>
								<div align="center">
								    <table border="1" cellspacing="0" cellpadding="0" width="95%">
								            <thead>
								            	<tr>
								            	    <td class="w20" >
								            	        <p align="center" style="padding-left: 0;padding-right: 0">
								            	            No
								            	        </p>
								            	    </td>
								            	    <td width="160">
								            	        <p align="center">
								            	            Section belonged to<br>
								            	            in home country
								            	        </p>
								            	    </td>
								            	    <td width="230">
								            	        <p align="center">
								            	            Occupation in<br>home country
								            	        </p>
								            	    </td>
								            	    <td width="120">
								            	        <p align="center">
								            	            Name
								            	        </p>
								            	    </td>
								            	    <td width="30">
								            	        <p align="center" style="padding-left: 1px;padding-right: 1px;">
								            	            Age
								            	        </p>
								            	    </td>
								            	    <td width="42">
								            	        <p align="center" style="padding-left: 1px;padding-right: 1px;">
								            	            Gender
								            	        </p>
								            	    </td>
								            	    <td width="160">
								            	        <p align="center">
								            	            Internship training organization
								            	        </p>
								            	    </td>
								            	    <td width="230">
								            	        <p align="center">
								            	            Occupation after returning to home country
								            	        </p>
								            	    </td>
								            	</tr>
								            </thead>
								        <tbody>
								            <?php $i = 1;?>
									        	<?php foreach ($trainees as $trainee) : ?>
								            <tr>
								                <td  class="w20">
								                    <p class="w20" align="center" style="margin-bottom: 0;margin-top: 5px;padding-left: 1px;padding-right: 1px;">
								                        <?php echo $i++ ?>
								                    </p>
								                </td>
								                <td >
								                    <p class="sFont" align="center" style="margin-bottom: 0;margin-top: 5px;">
								                        <textarea type="text" rows="2" value=""  style="text-align: center;width: 99%"><?php echo $this->Foreach->associate_sectors_en($sectors) ?></textarea>
								                    </p>
								                </td>
								                <td>
								                    <p class="sFont" align="center" style="margin-bottom: 0;margin-top: 5px;">
								                        <textarea type="text" rows="2" value="" style="text-align: center;width: 99%"><?php echo $this->Foreach->associate_jobs_en($jobs) ?></textarea>
								                    </p>
								                </td>
								                <td >
								                    <p align="center" style="margin-bottom: 0;margin-top: 5px;">
								                        <input type="text" value="<?php echo $trainee['Trainee']['family_name_en']." ".$trainee['Trainee']['given_name_en'] ?>" style="width: 99%;text-align: center">
								                    </p>
								                </td>
								                <td>
								                    <p align="center" style="margin-bottom: 0;margin-top: 5px;padding-left: 1px;padding-right: 1px;">
								                        <?php echo $this->Btn->calcage($trainee['Trainee']['birthday']) ?>
								                    </p>
								                </td>
								                <td >
								                    <p align="center" style="margin-bottom: 0;margin-top: 5px;padding-left: 1px;padding-right: 1px;">
								                        <?php if ($trainee['Trainee']['sex']=='male'){echo "M";}else{echo "F";} ?>
								                    </p>
								                </td>
								                <td>
								                    <p class="sFont" align="center" style="margin-bottom: 0;margin-top: 5px;">
								                        <textarea type="text" rows="2" style="width: 99%;text-align: center"><?php echo $interview_prof[0]['ComPrint']['company_en']; ?></textarea>
								                    </p>
								                </td>
								                <td>
								                    <p class="sFont" align="center" style="margin-bottom: 0;margin-top: 5px;">
								                       <textarea type="text" rows="2" style="text-align: center;width: 99%;"><?php echo $this->Foreach->associate_jobs_en($jobs) ?></textarea>
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