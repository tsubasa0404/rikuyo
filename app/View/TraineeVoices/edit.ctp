<?php $this->set('title_for_layout', 'Trainee Voice'); ?>
<?php $this->Html->addCrumb(__('Trainee List'), '/trainees'); ?>
<?php $this->Html->addCrumb(__('Trainee Profile'), '/trainees/profile/'.$this->request->data['TraineeVoice']['trainee_id']); ?>
<?php $this->Html->addCrumb(__('Trainee Voice Edit') ); ?>
					<h1><?= __('Trainee Voice Edit') ?></h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 maxW400">
					<div class="main-box">
						<header class="main-box-header clearfix">
							<h2>
								<?php echo __('Edit Voice'); ?>
							</h2>
						</header>
						<div class="main-box-body clearfix">
							<div class="traineeVoices form">
								<?php echo $this->Form->create('TraineeVoice'); ?>
									<?php echo $this->Form->input('id');?>
									<?php echo $this->Form->input('title_en', array('class' => 'form-control'));?>
									<?php echo $this->Form->input('voice_en', array('class' => 'form-control', 'rows' => 4));?>
									<button type="submit" class="btn btn-default pull-right mT10"><?= __('Save') ?></button>
								<?php echo $this->Form->end(); ?>
							</div>
						</div>
					</div>
				</div>