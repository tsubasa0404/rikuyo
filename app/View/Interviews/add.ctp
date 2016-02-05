<?php $this->set('title_for_layout', 'Add Interview'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Interview List'), '/interviews'); ?>
<?php $this->Html->addCrumb(__('Add Interview')); ?>
					<h1><?= __('Add Interview') ?></h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 maxW450">
					<div class="main-box">
						<div class="main-box-body clearfix">
							<header class="main-box-header clearfix">
								<h2><?= __('Application Requirements ') ?></h2>
							</header>
							<h3><?= __('Basic Info') ?></h3>
							<?php echo $this->Form->create('Interview', array(
								'action' => 'add',
								'class' => 'form_interview_register',
								'inputDefault' => array(
									'div' => false
									)
							)); ?>
								<div class="form-group form-group-select2">
									<?php echo $this->Form->input('company_id', array(
										'label' => __('Interview Company'),
										'type' => 'select',
										'div' => false,
										'class' => 'form-control sel_company',
										'value' => '',
										'options' => $option_companies,
										'style' => 'max-width:300px;display:inline',
										'empty' => true,
										'required' => true
									)) ?>
								</div>
								<div class="form-group form-group-select2">
									<?php echo $this->Form->input('job',array(
										'label' => __('Job'),
										'options' => $option_jobs,
										'multiple' => true,
										'class' => "form-control sel_job",
										'multiple' => true,
										'style' => array("width:200px"),
										'div' => false
									)); ?>
									<button type="button" id="" class="md-trigger btn btn-primary" data-modal="modal-job"><i class="fa fa-plus-circle fa-lg"></i> <?= __('Add Job') ?></button>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('work_place', array(
										'label' => __('Work Place'),
										'type' => 'text',
										'class' => 'form-control maxW400',
										'placeholder' => __(''),
										'required' => false
									)); ?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('work_content', array(
										'label' => __('Work Content'),
										'type' => 'text',
										'class' => 'form-control maxW400',
										'placeholder' => __(''),
										'required' => false
									)); ?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('work_schedule', array(
										'label' => __('Work Schedule'),
										'type' => 'text',
										'class' => 'form-control maxW400',
										'placeholder' => __(''),
										'required' => false
									)); ?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('adoption_num', array(
										'label' => __('Adoption Number'),
										'type' => 'text',
										'class' => 'form-control maxW100',
										'placeholder' => __(''),
										'required' => false
									)); ?>
								</div>
								<div class="form-group">
									<label>Sex</label>
										<?php echo $this->Form->input('sex', array(
											'legend' => false,
											'before' => '<div class="radio">',
											'separator' => '</div><div class="radio">',
											'after' => '</div>',
											'type' => 'radio',
											'options' => array('male' =>__('Male'),'female' =>__('Female'), 'both' => __('Both'))
										)) ?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('age', array(
										'label' => __('Age'),
										'type' => 'text',
										'class' => 'form-control maxW200',
										'placeholder' => __(''),
										'required' => false
									)); ?>
								</div>
								<h3><?= __('Salary') ?></h3>
								<div class="form-group">
									<?php echo $this->Form->input('hourly_wage', array(
										'label' => __('Hourly Wage'),
										'type' => 'text',
										'class' => 'form-control maxW100',
										'placeholder' => __(''),
										'required' => false
									)); ?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('basic_wage', array(
										'label' => __('Basic Wage'),
										'type' => 'text',
										'class' => 'form-control maxW100',
										'placeholder' => __(''),
										'required' => false
									)); ?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('deduction', array(
										'label' => __('Deduction'),
										'type' => 'text',
										'class' => 'form-control maxW100',
										'placeholder' => __(''),
										'required' => false
									)); ?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('breakdown', array(
										'label' => __('Breakdown'),
										'type' => 'text',
										'class' => 'form-control maxW100',
										'placeholder' => __(''),
										'required' => false
									)); ?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('employment_insurance', array(
										'label' => __('Employment Insurance'),
										'type' => 'text',
										'class' => 'form-control maxW100',
										'placeholder' => __(''),
										'required' => false
									)); ?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('social_insurance', array(
										'label' => __('Social Insurance'),
										'type' => 'text',
										'class' => 'form-control maxW100',
										'placeholder' => __(''),
										'required' => false
									)); ?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('boarding_fee', array(
										'label' => __('Boarding Fee'),
										'type' => 'text',
										'class' => 'form-control maxW100',
										'placeholder' => __(''),
										'required' => false
									)); ?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('utility_cost', array(
										'label' => __('Utility Cost'),
										'type' => 'text',
										'class' => 'form-control maxW100',
										'placeholder' => __(''),
										'required' => false
									)); ?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('take_home', array(
										'label' => __('Take Home'),
										'type' => 'text',
										'class' => 'form-control maxW100',
										'placeholder' => __(''),
										'required' => false
									)); ?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('wage_note', array(
										'label' => __('Note for Wages'),
										'type' => 'text',
										'class' => 'form-control maxW400',
										'placeholder' => __(''),
										'required' => false
									)); ?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('request', array(
										'label' => __('Other Requests'),
										'type' => 'text',
										'class' => 'form-control maxW400',
										'placeholder' => __(''),
										'required' => false
									)); ?>
								</div>
								<h3><?= __('Schedules') ?></h3>
								<div class="form-group">
									<?php echo $this->Form->input('immigration_time', array(
										'label' => __('Immigration Time'),
										'type' => 'text',
										'class' => 'form-control maxW400',
										'placeholder' => __(''),
										'required' => false
									)); ?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('start_time', array(
										'label' => __('Commencement Time'),
										'type' => 'text',
										'class' => 'form-control maxW400',
										'placeholder' => __(''),
										'required' => false
									)); ?>
								</div>
								<div class="form-group">
									<label><?= __('Interview Date') ?></label>
										<?php echo $this->Form->date('interview_date', array(
											'label' => false,
											'class' => 'form-control maxW160',
										)) ?>
								</div>
								<div class="form-group">
									<label for="interviewTime"><?= __('Interview Time (Cambodia Time)') ?></label>
									<div class="input-group input-append bootstrap-timepicker">
									<span class="add-on input-group-addon"><i class="fa fa-clock-o"></i></span>
										<input type="time" class="form-control maxW200" id="interviewTime" name="data[Interview][interview_time]">
									</div>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('interview_place', array(
										'label' => __('Interview Place'),
										'type' => 'text',
										'class' => 'form-control maxW400',
										'placeholder' => __(''),
										'required' => false
									)); ?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('interview_detail', array(
										'label' => __('Interview Details'),
										'type' => 'text',
										'class' => 'form-control maxW400',
										'placeholder' => __(''),
										'required' => false
									)); ?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('interview_staff', array(
										'label' => __('Interview Commander of Rikuyo'),
										'type' => 'text',
										'class' => 'form-control maxW400',
										'placeholder' => __(''),
										'required' => false
									)); ?>
								</div>
								<button type="submit" class="btn btn-default pull-right">
									<i class="fa fa-plus-circle fa-lg"></i> <?= __('Add Interview') ?>
								</button>
							<?php echo $this->Form->end(); ?>
						</div>
					</div>
				</div>
	<?php
		echo $this->Html->script('modernizr.custom', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('classie', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('modalEffects', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('rikuyo_js/myModal', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('select2.min', array('inline' => false, 'block' => 'page-js'));
	 ?>

	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>


		$(document).ready(function() {

			$('.sel_company').select2({
				placeholder: "<?= __('Select Company') ?>",
				allowClear: false
			});

			$('.sel_job').select2({
				placeholder: "<?= __('Select Jobs') ?>",
				allowClear: false
			});

		});
			//モーダルフォーム
		$(function(){
			$('.job_form_btn').on('click', function(){
				var job_jp = $('#jobJp').val();
				var job_en = $('#jobEn').val();
				if(!job_jp ||!job_en){
					alert("入力されていない項目があります。");
					return ;
				}
				var option = '<option value="'+"lastInsertId"+'">'+job_jp+'</option>';
				$('.sel_job').prepend(option);
				close();
			});

			$('.btn_close').on('click', function(){
				close();
			});
			function close(){
				$('#modal-job').removeClass('md-show');
				$('#jobJp').val("");
				$('#jobEn').val("");
			}
		});

	<?php $this->Html->scriptEnd(); ?>