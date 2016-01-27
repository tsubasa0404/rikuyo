<div class="subFolders index">
	<h2><?php echo __('Sub Folders'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('folder_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sub_folder_jp'); ?></th>
			<th><?php echo $this->Paginator->sort('sub_folder_en'); ?></th>
			<th><?php echo $this->Paginator->sort('note'); ?></th>
			<th><?php echo $this->Paginator->sort('flag'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($subFolders as $subFolder): ?>
	<tr>
		<td><?php echo h($subFolder['SubFolder']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($subFolder['DocFolder']['id'], array('controller' => 'doc_folders', 'action' => 'view', $subFolder['DocFolder']['id'])); ?>
		</td>
		<td><?php echo h($subFolder['SubFolder']['sub_folder_jp']); ?>&nbsp;</td>
		<td><?php echo h($subFolder['SubFolder']['sub_folder_en']); ?>&nbsp;</td>
		<td><?php echo h($subFolder['SubFolder']['note']); ?>&nbsp;</td>
		<td><?php echo h($subFolder['SubFolder']['flag']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $subFolder['SubFolder']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $subFolder['SubFolder']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $subFolder['SubFolder']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $subFolder['SubFolder']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Sub Folder'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Doc Folders'), array('controller' => 'doc_folders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doc Folder'), array('controller' => 'doc_folders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Doc Names'), array('controller' => 'doc_names', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doc Name'), array('controller' => 'doc_names', 'action' => 'add')); ?> </li>
	</ul>
</div>
