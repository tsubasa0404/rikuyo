<div class="traineeExpenses form">
<?php echo $this->Form->create('TraineeExpense'); ?>
	<fieldset>
		<legend><?php echo __('Add Trainee Expense'); ?></legend>
	<?php
		echo $this->Form->input('trainee_id');
		echo $this->Form->input('expected_date');
		echo $this->Form->input('expected_price');
		echo $this->Form->input('pay_date');
		echo $this->Form->input('pay_price');
		echo $this->Form->input('note');
		echo $this->Form->input('flag');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Trainee Expenses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Trainees'), array('controller' => 'trainees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trainee'), array('controller' => 'trainees', 'action' => 'add')); ?> </li>
	</ul>
</div>
