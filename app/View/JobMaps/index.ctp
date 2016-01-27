<div class="jobMaps index">
	<h2><?php echo __('Job Maps'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('company_id'); ?></th>
			<th><?php echo $this->Paginator->sort('job_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($jobMaps as $jobMap): ?>
	<tr>
		<td><?php echo h($jobMap['JobMap']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($jobMap['Company']['id'], array('controller' => 'companies', 'action' => 'view', $jobMap['Company']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($jobMap['Job']['id'], array('controller' => 'jobs', 'action' => 'view', $jobMap['Job']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $jobMap['JobMap']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $jobMap['JobMap']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $jobMap['JobMap']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $jobMap['JobMap']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Job Map'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
	</ul>
</div>
