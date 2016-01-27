<div class="traineeDocuments form">
<?php echo $this->Form->create('TraineeDocument'); ?>
	<fieldset>
		<legend><?php echo __('Add Trainee Document'); ?></legend>
	<?php
		echo $this->Form->input('trainee_id');
		echo $this->Form->input('img_file_name');
		echo $this->Form->input('doc_name_jp');
		echo $this->Form->input('doc_name_en');
		echo $this->Form->input('flag');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Trainee Documents'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Trainees'), array('controller' => 'trainees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trainee'), array('controller' => 'trainees', 'action' => 'add')); ?> </li>
	</ul>
</div>
