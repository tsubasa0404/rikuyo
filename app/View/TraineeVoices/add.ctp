<div class="traineeVoices form">
<?php echo $this->Form->create('TraineeVoice'); ?>
	<fieldset>
		<legend><?php echo __('Add Trainee Voice'); ?></legend>
	<?php
		echo $this->Form->input('trainee_id');
		echo $this->Form->input('title_en');
		echo $this->Form->input('title_jp');
		echo $this->Form->input('title_kh');
		echo $this->Form->input('voice_en');
		echo $this->Form->input('voice_jp');
		echo $this->Form->input('voice_kh');
		echo $this->Form->input('answer_en');
		echo $this->Form->input('answer_jp');
		echo $this->Form->input('answer_kh');
		echo $this->Form->input('note');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Trainee Voices'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Trainees'), array('controller' => 'trainees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trainee'), array('controller' => 'trainees', 'action' => 'add')); ?> </li>
	</ul>
</div>
