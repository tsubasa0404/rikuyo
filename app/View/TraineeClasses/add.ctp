<div class="traineeClasses form">
<?php echo $this->Form->create('TraineeClass'); ?>
	<fieldset>
		<legend><?php echo __('Add Trainee Class'); ?></legend>
	<?php
		echo $this->Form->input('class_en');
		echo $this->Form->input('class_jp');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Trainee Classes'), array('action' => 'index')); ?></li>
	</ul>
</div>
