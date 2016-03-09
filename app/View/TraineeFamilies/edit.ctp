<?php $this->set('title_for_layout', 'Edit Trainee Family'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Trainees List'), '/trainees'); ?>
<?php $this->Html->addCrumb(__('Trainee Profile'), '/trainees/profile/'. $this->request->data['TraineeFamily']['trainee_id']); ?>
<?php $this->Html->addCrumb(__('Edit Trainee Family')); ?>
					<h1><?= __('Edit Trainee Family') ?></h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 maxW360">
					<div class="main-box">
						<header class="main-box-header clearfix">
							<h2>
								<?php echo __('Edit Trainee Family'); ?>
							</h2>
						</header>
						<div class="main-box-body clearfix">
							<div class="traineeFamilies form">
								<?php echo $this->Session->flash() ?>

								<?php echo $this->Form->create('TraineeFamily'); ?>
									<?php echo $this->Form->hidden('id');?>
									<?php echo $this->Form->hidden('trainee_id');?>
									<div class="form-group">
										<?php echo $this->Form->input('name', array('class' => 'form-control'));?></div>
									<div class="form-group">
										<?php echo $this->Form->input('relationship', array('class' => 'form-control'));?>
									</div>
									<label for=""><?= __('Birthday') ?></label>
									<div class="form-group">
										<?php echo $this->Form->date('birthday', array('class' => 'form-control'));?>
									</div>
									<div class="form-group">
										<?php echo $this->Form->input('job_id', array(
										'class' => 'form-control sel_job',
										'options' => $option_jobs
										));?>
									</div>
									<div class="form-group">
										<?php echo $this->Form->input('note', array('class' => 'form-control'));?>
									</div>
									<button type="submit" class="btn btn-primary pull-right">
										<i class=""></i> <?= __('Save') ?>
									</button>
								<?php echo $this->Form->end(); ?>
							</div>
						</div>
					</div>
				</div>
	<?php echo $this->Html->script('select2.min', array('inline' => false, 'block' => 'page-js'));?>

	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>
		$('.sel_job').select2({
			placeholder: "<?= __('Select Job') ?>",
			allowClear:false
		});
	<?php $this->Html->scriptEnd(); ?>
