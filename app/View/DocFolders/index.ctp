<div class="docFolders index">
	<h2><?php echo __('Doc Folders'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('folder_jp'); ?></th>
			<th><?php echo $this->Paginator->sort('folder_en'); ?></th>
			<th><?php echo $this->Paginator->sort('note'); ?></th>
			<th><?php echo $this->Paginator->sort('flag'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($docFolders as $docFolder): ?>
	<tr>
		<td><?php echo h($docFolder['DocFolder']['id']); ?>&nbsp;</td>
		<td><?php echo h($docFolder['DocFolder']['folder_jp']); ?>&nbsp;</td>
		<td><?php echo h($docFolder['DocFolder']['folder_en']); ?>&nbsp;</td>
		<td><?php echo h($docFolder['DocFolder']['note']); ?>&nbsp;</td>
		<td><?php echo h($docFolder['DocFolder']['flag']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $docFolder['DocFolder']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $docFolder['DocFolder']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $docFolder['DocFolder']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $docFolder['DocFolder']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Doc Folder'), array('action' => 'add')); ?></li>
	</ul>
</div>
