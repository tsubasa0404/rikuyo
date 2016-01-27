<div class="traineeMicrofinanceRecords form">
<?php echo $this->Form->create('TraineeMicrofinanceRecord'); ?>
	<fieldset>
		<legend><?php echo __('Edit Trainee Microfinance Record'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('trainee_id');
		echo $this->Form->input('pay_month');
		echo $this->Form->input('pay_price');
		echo $this->Form->input('pay_date');
		echo $this->Form->input('status_id');
		echo $this->Form->input('note');
		echo $this->Form->input('flag');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TraineeMicrofinanceRecord.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('TraineeMicrofinanceRecord.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Trainee Microfinance Records'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Trainees'), array('controller' => 'trainees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trainee'), array('controller' => 'trainees', 'action' => 'add')); ?> </li>
	</ul>
</div>
