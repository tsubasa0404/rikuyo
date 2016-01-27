<div class="tasks index">
	<h2><?php echo __('Tasks'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('task'); ?></th>
			<th><?php echo $this->Paginator->sort('someone'); ?></th>
			<th><?php echo $this->Paginator->sort('expected_date'); ?></th>
			<th><?php echo $this->Paginator->sort('status_id'); ?></th>
			<th><?php echo $this->Paginator->sort('note'); ?></th>
			<th><?php echo $this->Paginator->sort('flag'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($tasks as $task): ?>
	<tr>
		<td><?php echo h($task['Task']['id']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['task']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['someone']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['expected_date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($task['Status']['id'], array('controller' => 'status_lists', 'action' => 'view', $task['Status']['id'])); ?>
		</td>
		<td><?php echo h($task['Task']['note']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['flag']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $task['Task']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $task['Task']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $task['Task']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $task['Task']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Task'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Status Lists'), array('controller' => 'status_lists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status'), array('controller' => 'status_lists', 'action' => 'add')); ?> </li>
	</ul>
</div>
