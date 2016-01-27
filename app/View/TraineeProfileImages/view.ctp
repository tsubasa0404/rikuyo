<div class="traineeProfileImages view">
<h2><?php echo __('Trainee Profile Image'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($traineeProfileImage['TraineeProfileImage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trainee'); ?></dt>
		<dd>
			<?php echo $this->Html->link($traineeProfileImage['Trainee']['id'], array('controller' => 'trainees', 'action' => 'view', $traineeProfileImage['Trainee']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Img File Name'); ?></dt>
		<dd>
			<?php echo h($traineeProfileImage['TraineeProfileImage']['img_file_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($traineeProfileImage['TraineeProfileImage']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Flag'); ?></dt>
		<dd>
			<?php echo h($traineeProfileImage['TraineeProfileImage']['flag']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Trainee Profile Image'), array('action' => 'edit', $traineeProfileImage['TraineeProfileImage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Trainee Profile Image'), array('action' => 'delete', $traineeProfileImage['TraineeProfileImage']['id']), array(), __('Are you sure you want to delete # %s?', $traineeProfileImage['TraineeProfileImage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainee Profile Images'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trainee Profile Image'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainees'), array('controller' => 'trainees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trainee'), array('controller' => 'trainees', 'action' => 'add')); ?> </li>
	</ul>
</div>
