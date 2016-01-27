<div class="traineeVoices index">
	<h2><?php echo __('Trainee Voices'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('trainee_id'); ?></th>
			<th><?php echo $this->Paginator->sort('title_en'); ?></th>
			<th><?php echo $this->Paginator->sort('title_jp'); ?></th>
			<th><?php echo $this->Paginator->sort('title_kh'); ?></th>
			<th><?php echo $this->Paginator->sort('voice_en'); ?></th>
			<th><?php echo $this->Paginator->sort('voice_jp'); ?></th>
			<th><?php echo $this->Paginator->sort('voice_kh'); ?></th>
			<th><?php echo $this->Paginator->sort('answer_en'); ?></th>
			<th><?php echo $this->Paginator->sort('answer_jp'); ?></th>
			<th><?php echo $this->Paginator->sort('answer_kh'); ?></th>
			<th><?php echo $this->Paginator->sort('note'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($traineeVoices as $traineeVoice): ?>
	<tr>
		<td><?php echo h($traineeVoice['TraineeVoice']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($traineeVoice['Trainee']['id'], array('controller' => 'trainees', 'action' => 'view', $traineeVoice['Trainee']['id'])); ?>
		</td>
		<td><?php echo h($traineeVoice['TraineeVoice']['title_en']); ?>&nbsp;</td>
		<td><?php echo h($traineeVoice['TraineeVoice']['title_jp']); ?>&nbsp;</td>
		<td><?php echo h($traineeVoice['TraineeVoice']['title_kh']); ?>&nbsp;</td>
		<td><?php echo h($traineeVoice['TraineeVoice']['voice_en']); ?>&nbsp;</td>
		<td><?php echo h($traineeVoice['TraineeVoice']['voice_jp']); ?>&nbsp;</td>
		<td><?php echo h($traineeVoice['TraineeVoice']['voice_kh']); ?>&nbsp;</td>
		<td><?php echo h($traineeVoice['TraineeVoice']['answer_en']); ?>&nbsp;</td>
		<td><?php echo h($traineeVoice['TraineeVoice']['answer_jp']); ?>&nbsp;</td>
		<td><?php echo h($traineeVoice['TraineeVoice']['answer_kh']); ?>&nbsp;</td>
		<td><?php echo h($traineeVoice['TraineeVoice']['note']); ?>&nbsp;</td>
		<td><?php echo h($traineeVoice['TraineeVoice']['created']); ?>&nbsp;</td>
		<td><?php echo h($traineeVoice['TraineeVoice']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $traineeVoice['TraineeVoice']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $traineeVoice['TraineeVoice']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $traineeVoice['TraineeVoice']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $traineeVoice['TraineeVoice']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Trainee Voice'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Trainees'), array('controller' => 'trainees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trainee'), array('controller' => 'trainees', 'action' => 'add')); ?> </li>
	</ul>
</div>
