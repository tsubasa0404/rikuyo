<div class="traineeFamilies form">
<?php echo $this->Form->create('TraineeFamily'); ?>
	<fieldset>
		<legend><?php echo __('Edit Trainee Family'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('trainee_id');
		echo $this->Form->input('name');
		echo $this->Form->input('relationship');
		echo $this->Form->input('birthday');
		echo $this->Form->input('job');
		echo $this->Form->input('note');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TraineeFamily.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('TraineeFamily.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Trainee Families'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Trainees'), array('controller' => 'trainees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trainee'), array('controller' => 'trainees', 'action' => 'add')); ?> </li>
	</ul>
</div>
