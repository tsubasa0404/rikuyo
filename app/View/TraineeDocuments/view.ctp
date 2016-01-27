<div class="traineeDocuments view">
<h2><?php echo __('Trainee Document'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($traineeDocument['TraineeDocument']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trainee'); ?></dt>
		<dd>
			<?php echo $this->Html->link($traineeDocument['Trainee']['id'], array('controller' => 'trainees', 'action' => 'view', $traineeDocument['Trainee']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Img File Name'); ?></dt>
		<dd>
			<?php echo h($traineeDocument['TraineeDocument']['img_file_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Doc Name Jp'); ?></dt>
		<dd>
			<?php echo h($traineeDocument['TraineeDocument']['doc_name_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Doc Name En'); ?></dt>
		<dd>
			<?php echo h($traineeDocument['TraineeDocument']['doc_name_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Flag'); ?></dt>
		<dd>
			<?php echo h($traineeDocument['TraineeDocument']['flag']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Trainee Document'), array('action' => 'edit', $traineeDocument['TraineeDocument']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Trainee Document'), array('action' => 'delete', $traineeDocument['TraineeDocument']['id']), array(), __('Are you sure you want to delete # %s?', $traineeDocument['TraineeDocument']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainee Documents'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trainee Document'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainees'), array('controller' => 'trainees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trainee'), array('controller' => 'trainees', 'action' => 'add')); ?> </li>
	</ul>
</div>
