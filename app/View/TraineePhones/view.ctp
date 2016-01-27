<div class="traineePhones view">
<h2><?php echo __('Trainee Phone'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($traineePhone['TraineePhone']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trainee'); ?></dt>
		<dd>
			<?php echo $this->Html->link($traineePhone['Trainee']['id'], array('controller' => 'trainees', 'action' => 'view', $traineePhone['Trainee']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($traineePhone['TraineePhone']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Owner'); ?></dt>
		<dd>
			<?php echo h($traineePhone['TraineePhone']['owner']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($traineePhone['TraineePhone']['note']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Trainee Phone'), array('action' => 'edit', $traineePhone['TraineePhone']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Trainee Phone'), array('action' => 'delete', $traineePhone['TraineePhone']['id']), array(), __('Are you sure you want to delete # %s?', $traineePhone['TraineePhone']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainee Phones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trainee Phone'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainees'), array('controller' => 'trainees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trainee'), array('controller' => 'trainees', 'action' => 'add')); ?> </li>
	</ul>
</div>
