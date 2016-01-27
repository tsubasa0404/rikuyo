<div class="tasks form">
<?php echo $this->Form->create('Task'); ?>
	<fieldset>
		<legend><?php echo __('Add Task'); ?></legend>
	<?php
		echo $this->Form->input('task');
		echo $this->Form->input('someone');
		echo $this->Form->input('expected_date');
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

		<li><?php echo $this->Html->link(__('List Tasks'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Status Lists'), array('controller' => 'status_lists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status'), array('controller' => 'status_lists', 'action' => 'add')); ?> </li>
	</ul>
</div>
