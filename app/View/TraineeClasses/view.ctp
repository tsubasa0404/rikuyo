<div class="traineeClasses view">
<h2><?php echo __('Trainee Class'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($traineeClass['TraineeClass']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Class En'); ?></dt>
		<dd>
			<?php echo h($traineeClass['TraineeClass']['class_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Class Jp'); ?></dt>
		<dd>
			<?php echo h($traineeClass['TraineeClass']['class_jp']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Trainee Class'), array('action' => 'edit', $traineeClass['TraineeClass']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Trainee Class'), array('action' => 'delete', $traineeClass['TraineeClass']['id']), array(), __('Are you sure you want to delete # %s?', $traineeClass['TraineeClass']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainee Classes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trainee Class'), array('action' => 'add')); ?> </li>
	</ul>
</div>
