<div class="traineeMicrofinanceImages form">
<?php echo $this->Form->create('TraineeMicrofinanceImage'); ?>
	<fieldset>
		<legend><?php echo __('Edit Trainee Microfinance Image'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('trainee_id');
		echo $this->Form->input('img_file_name');
		echo $this->Form->input('title');
		echo $this->Form->input('flag');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TraineeMicrofinanceImage.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('TraineeMicrofinanceImage.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Trainee Microfinance Images'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Trainees'), array('controller' => 'trainees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trainee'), array('controller' => 'trainees', 'action' => 'add')); ?> </li>
	</ul>
</div>
