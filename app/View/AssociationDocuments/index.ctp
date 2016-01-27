<div class="associationDocuments index">
	<h2><?php echo __('Association Documents'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('association_id'); ?></th>
			<th><?php echo $this->Paginator->sort('doc_name_id'); ?></th>
			<th><?php echo $this->Paginator->sort('note'); ?></th>
			<th><?php echo $this->Paginator->sort('selected'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($associationDocuments as $associationDocument): ?>
	<tr>
		<td><?php echo h($associationDocument['AssociationDocument']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($associationDocument['Association']['id'], array('controller' => 'associations', 'action' => 'view', $associationDocument['Association']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($associationDocument['DocName']['id'], array('controller' => 'doc_names', 'action' => 'view', $associationDocument['DocName']['id'])); ?>
		</td>
		<td><?php echo h($associationDocument['AssociationDocument']['note']); ?>&nbsp;</td>
		<td><?php echo h($associationDocument['AssociationDocument']['selected']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $associationDocument['AssociationDocument']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $associationDocument['AssociationDocument']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $associationDocument['AssociationDocument']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $associationDocument['AssociationDocument']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Association Document'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Associations'), array('controller' => 'associations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Association'), array('controller' => 'associations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Doc Names'), array('controller' => 'doc_names', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doc Name'), array('controller' => 'doc_names', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interview Doc Status Lists'), array('controller' => 'interview_doc_status_lists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interview Doc Status List'), array('controller' => 'interview_doc_status_lists', 'action' => 'add')); ?> </li>
	</ul>
</div>
