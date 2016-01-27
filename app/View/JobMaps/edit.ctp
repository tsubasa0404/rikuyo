<div class="jobMaps form">
<?php echo $this->Form->create('JobMap'); ?>
	<fieldset>
		<legend><?php echo __('Edit Job Map'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('company_id');
		echo $this->Form->input('job_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('JobMap.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('JobMap.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Job Maps'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
	</ul>
</div>
