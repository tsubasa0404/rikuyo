<div class="traineePhones form">
<?php echo $this->Form->create('TraineePhone'); ?>
	<fieldset>
		<legend><?php echo __('Add Trainee Phone'); ?></legend>
	<?php
		echo $this->Form->input('trainee_id');
		echo $this->Form->input('phone');
		echo $this->Form->input('owner');
		echo $this->Form->input('note');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Trainee Phones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Trainees'), array('controller' => 'trainees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trainee'), array('controller' => 'trainees', 'action' => 'add')); ?> </li>
	</ul>
</div>
