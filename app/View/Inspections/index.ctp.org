<div class="inspections index">
	<h2><?php echo __('Inspections'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('association_id'); ?></th>
			<th><?php echo $this->Paginator->sort('company_id'); ?></th>
			<th><?php echo $this->Paginator->sort('smb'); ?></th>
			<th><?php echo $this->Paginator->sort('staff'); ?></th>
			<th><?php echo $this->Paginator->sort('from'); ?></th>
			<th><?php echo $this->Paginator->sort('to'); ?></th>
			<th><?php echo $this->Paginator->sort('note'); ?></th>
			<th><?php echo $this->Paginator->sort('flag'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($inspections as $inspection): ?>
	<tr>
		<td><?php echo h($inspection['Inspection']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($inspection['Association']['id'], array('controller' => 'associations', 'action' => 'view', $inspection['Association']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($inspection['Company']['id'], array('controller' => 'companies', 'action' => 'view', $inspection['Company']['id'])); ?>
		</td>
		<td><?php echo h($inspection['Inspection']['smb']); ?>&nbsp;</td>
		<td><?php echo h($inspection['Inspection']['staff']); ?>&nbsp;</td>
		<td><?php echo h($inspection['Inspection']['from']); ?>&nbsp;</td>
		<td><?php echo h($inspection['Inspection']['to']); ?>&nbsp;</td>
		<td><?php echo h($inspection['Inspection']['note']); ?>&nbsp;</td>
		<td><?php echo h($inspection['Inspection']['flag']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $inspection['Inspection']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $inspection['Inspection']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $inspection['Inspection']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $inspection['Inspection']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Inspection'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Associations'), array('controller' => 'associations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Association'), array('controller' => 'associations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
