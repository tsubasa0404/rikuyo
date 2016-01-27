<div class="traineeFamilies index">
	<h2><?php echo __('Trainee Families'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('trainee_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('relationship'); ?></th>
			<th><?php echo $this->Paginator->sort('birthday'); ?></th>
			<th><?php echo $this->Paginator->sort('job'); ?></th>
			<th><?php echo $this->Paginator->sort('note'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($traineeFamilies as $traineeFamily): ?>
	<tr>
		<td><?php echo h($traineeFamily['TraineeFamily']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($traineeFamily['Trainee']['id'], array('controller' => 'trainees', 'action' => 'view', $traineeFamily['Trainee']['id'])); ?>
		</td>
		<td><?php echo h($traineeFamily['TraineeFamily']['name']); ?>&nbsp;</td>
		<td><?php echo h($traineeFamily['TraineeFamily']['relationship']); ?>&nbsp;</td>
		<td><?php echo h($traineeFamily['TraineeFamily']['birthday']); ?>&nbsp;</td>
		<td><?php echo h($traineeFamily['TraineeFamily']['job']); ?>&nbsp;</td>
		<td><?php echo h($traineeFamily['TraineeFamily']['note']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $traineeFamily['TraineeFamily']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $traineeFamily['TraineeFamily']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $traineeFamily['TraineeFamily']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $traineeFamily['TraineeFamily']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Trainee Family'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Trainees'), array('controller' => 'trainees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trainee'), array('controller' => 'trainees', 'action' => 'add')); ?> </li>
	</ul>
</div>
