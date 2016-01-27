<div class="docNames index">
	<h2><?php echo __('Doc Names'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name_jp'); ?></th>
			<th><?php echo $this->Paginator->sort('name_en'); ?></th>
			<th><?php echo $this->Paginator->sort('folder_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sub_folder_id'); ?></th>
			<th><?php echo $this->Paginator->sort('lang_jpn'); ?></th>
			<th><?php echo $this->Paginator->sort('lang_eng'); ?></th>
			<th><?php echo $this->Paginator->sort('lang_khm'); ?></th>
			<th><?php echo $this->Paginator->sort('note'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('flag'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($docNames as $docName): ?>
	<tr>
		<td><?php echo h($docName['DocName']['id']); ?>&nbsp;</td>
		<td><?php echo h($docName['DocName']['name_jp']); ?>&nbsp;</td>
		<td><?php echo h($docName['DocName']['name_en']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($docName['DocFolder']['id'], array('controller' => 'doc_folders', 'action' => 'view', $docName['DocFolder']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($docName['SubFolder']['id'], array('controller' => 'sub_folders', 'action' => 'view', $docName['SubFolder']['id'])); ?>
		</td>
		<td><?php echo h($docName['DocName']['lang_jpn']); ?>&nbsp;</td>
		<td><?php echo h($docName['DocName']['lang_eng']); ?>&nbsp;</td>
		<td><?php echo h($docName['DocName']['lang_khm']); ?>&nbsp;</td>
		<td><?php echo h($docName['DocName']['note']); ?>&nbsp;</td>
		<td><?php echo h($docName['DocName']['created']); ?>&nbsp;</td>
		<td><?php echo h($docName['DocName']['modified']); ?>&nbsp;</td>
		<td><?php echo h($docName['DocName']['flag']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $docName['DocName']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $docName['DocName']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $docName['DocName']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $docName['DocName']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Doc Name'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Doc Folders'), array('controller' => 'doc_folders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doc Folder'), array('controller' => 'doc_folders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sub Folders'), array('controller' => 'sub_folders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub Folder'), array('controller' => 'sub_folders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Association Documents'), array('controller' => 'association_documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Association Document'), array('controller' => 'association_documents', 'action' => 'add')); ?> </li>
	</ul>
</div>
