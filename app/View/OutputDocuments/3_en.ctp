<?php $this->set('title_for_layout', 'Documents List'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/rikuyo_css/print', array('inline'=>false, 'block'=>'page-css',array('media' => 'print')));?>
<?php $this->Html->css('libs/rikuyo_css/1_en', array('inline'=>false, 'block'=>'page-css'),array('media' => 'print'));?>
<?php $this->Html->addCrumb(__('Interviews'), '/interviews'); ?>
<?php $this->Html->addCrumb(__('Interview Profile'), '/interviews/profile/'.$interview_prof[0]['Interview']['id']); ?>
<?php $this->Html->addCrumb(__('Documents List'), '/output_documents/doc_list/'.$interview_prof[0]['Interview']['id']); ?>
<?php $this->Html->addCrumb(__('Letter of Recommendation')); ?>
					<h1><?= __('Letter of Recommendation') ?></h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 maxW750">
					<div class="main-box clearfix">


						<div class="main-box-body clearfix">
							<div class="print-area" style="width: 700px;">


								<p align="right">
								    <span class="jitcoBox">JITCO書式10-23-3</span>
								</p>
								<p align="center" style="font-size: 20px">
								    Letter of Recommendation
								</p>
								<div class="pmB30" style="padding-left: 80px;">


								<p>
								    　　 Since the organization below has been recognized as appropriate for dispatch of
								</p>
								<p style="margin-bottom: 0">
								    technical interns to Japan, acceptance of <input type="text" style="text-align: center" value="<?php echo $trainees[0]['Trainee']['given_name_en']." ".$trainees[0]['Trainee']['family_name_en'] ?>" >and <input type="text" name="" value="<?php if(isset($formated_trainees_array)) {echo count($formated_trainees_array)-1;} ?>" style="width: 20px;text-align: center;"> other persons
								</p>
								<p style="margin-top: 0">
								    　　　　　　　　　　　　　　　　(name of technical intern) (number of persons)
								</p>
								<p>
								    dispatched from the organization (as shown on attached list) at
								</p>
								<p style="margin-bottom: 0">
									<input type="text" name="" value="<?php echo $interview_prof[0]['Association']['association_en'] ?>" style="width:240px;text-align: center;">in Japan for a technical internship in
								</p>
								<p style="margin-top: 0">
								    (name of management association)
								</p>
								<p style="margin-bottom: 0">
								     <input type="text" name="" value="<?php if(isset($selected_interview_jobs)) {echo $this->Foreach->associate_jobs_en($selected_interview_jobs);} ?>" style="width: 600px">
								</p>
								<p style="margin-top: 0">
								    　　　　　　　　　　　　　　　　　　　 (duties)
								</p>
								<p style="margin-bottom: 0">
									for a period of <input type="text" style="width:20px;text-align: center"> years from <input type="text" style="width:20px;text-align: center">(month),<input type="text" style="width:35px;text-align: center">is hereby recommended.
								</p>
								<p style="margin-top: 0">
								    　　　　　 (period)
								</p>
								<p style="margin-left: 20px">
								    This letter of recommendation shall be valid for<u> </u> years.
								</p>
								<div style="margin-left: 10px">
									<p>
									    1. Name of sending organization 　　　　 <input type="text" name="" value="HUMAN POWER Co.,Ltd." style="width: 400px">
									</p>
									<p>
									    2. Name of representative 　　　　 <input type="text" name="" value="Ms.Leng Vichheka" style="width: 200px">
									</p>
									<p>
									    3. Address of sending organization
									</p>
									<p>
									   <input type="text" name="" value="Nº.115D, Street 18 , Tuol Sangke Commune, Russey Keo Distrct , Phnom Penh Cambodia" style="width: 100%">
									</p>
								</div>
								<p>
								    Date prepared(Y/M/D):　　　　 <input type="text" name="" value="" placeholder="">
								</p>
								<p>
								    Name of national or local public association
								</p>
								<p align="center">
								    <strong>Kingdom of Cambodia Ministry of Labor and VocationalTraining</strong>
								</p>
								</div>

								<p align="center" style="margin-top: 100px">
								    　　　　　　　　　　 <u>Position/Name: </u><u>　　　　　　　　　　　　　　　　 (seal)</u>
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
										'action' => 'printout/'. $interview_prof[0]['Interview']['id']. '/3_en',
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