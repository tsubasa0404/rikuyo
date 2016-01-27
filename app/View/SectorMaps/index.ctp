<div class="sectorMaps index">
	<h2><?php echo __('Sector Maps'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('association_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sector_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($sectorMaps as $sectorMap): ?>
	<tr>
		<td><?php echo h($sectorMap['SectorMap']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($sectorMap['Association']['id'], array('controller' => 'associations', 'action' => 'view', $sectorMap['Association']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($sectorMap['Sector']['id'], array('controller' => 'sectors', 'action' => 'view', $sectorMap['Sector']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $sectorMap['SectorMap']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $sectorMap['SectorMap']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $sectorMap['SectorMap']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $sectorMap['SectorMap']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Sector Map'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Associations'), array('controller' => 'associations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Association'), array('controller' => 'associations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sectors'), array('controller' => 'sectors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sector'), array('controller' => 'sectors', 'action' => 'add')); ?> </li>
	</ul>
</div>
