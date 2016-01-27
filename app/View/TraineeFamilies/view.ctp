<div class="traineeFamilies view">
<h2><?php echo __('Trainee Family'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($traineeFamily['TraineeFamily']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trainee'); ?></dt>
		<dd>
			<?php echo $this->Html->link($traineeFamily['Trainee']['id'], array('controller' => 'trainees', 'action' => 'view', $traineeFamily['Trainee']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($traineeFamily['TraineeFamily']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Relationship'); ?></dt>
		<dd>
			<?php echo h($traineeFamily['TraineeFamily']['relationship']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Birthday'); ?></dt>
		<dd>
			<?php echo h($traineeFamily['TraineeFamily']['birthday']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job'); ?></dt>
		<dd>
			<?php echo h($traineeFamily['TraineeFamily']['job']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($traineeFamily['TraineeFamily']['note']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Trainee Family'), array('action' => 'edit', $traineeFamily['TraineeFamily']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Trainee Family'), array('action' => 'delete', $traineeFamily['TraineeFamily']['id']), array(), __('Are you sure you want to delete # %s?', $traineeFamily['TraineeFamily']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainee Families'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trainee Family'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainees'), array('controller' => 'trainees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trainee'), array('controller' => 'trainees', 'action' => 'add')); ?> </li>
	</ul>
</div>
