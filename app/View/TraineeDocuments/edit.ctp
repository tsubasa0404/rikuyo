<?php $this->set('title_for_layout', 'Edit Trainee Document'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Trainees List'), '/trainees'); ?>
<?php $this->Html->addCrumb(__('Trainee Profile'), '/trainees/profile/'. $this->request->data['TraineeDocument']['trainee_id']); ?>
<?php $this->Html->addCrumb(__('Edit Trainee Document')); ?>
					<h1><?= __('Edit Trainee Document') ?></h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 maxW360">
					<div class="main-box">
						<header class="main-box-header clearfix">
							<h2>
								<?php echo __('Edit Trainee Document'); ?>
							</h2>
						</header>
						<div class="main-box-body clearfix">
							<div class="traineeFamilies form">
								<?php echo $this->Session->flash() ?>

								<div class="traineeDocuments form">
								<?php echo $this->Form->create('TraineeDocument'); ?>
									<?php echo $this->Form->input('id');?>
									<?php echo $this->Form->hidden('trainee_id');?>
									<?php echo $this->Form->hidden('img_file_name');?>
									<div class="form-group">
										<?php echo $this->Form->input('doc_name_jp', array(
											'class' => 'form-control'
										));?>
									</div>
									<div class="form-group">
										<?php echo $this->Form->input('doc_name_en', array(
											'class' => 'form-control'
											));?>
									</div>
									<?php echo $this->Form->hidden('flag');?>
									<button type="submit" class="btn btn-primary pull-right">
										<i class=""></i> <?= __('Save') ?>
									</button>
								<?php echo $this->Form->end(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
