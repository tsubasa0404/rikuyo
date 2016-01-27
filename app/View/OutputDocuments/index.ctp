<div class="outputDocuments index">
	<h2><?php echo __('Output Documents'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('doc_template_id'); ?></th>
			<th><?php echo $this->Paginator->sort('temp_ctp'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($outputDocuments as $outputDocument): ?>
	<tr>
		<td><?php echo h($outputDocument['OutputDocument']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($outputDocument['DocTemplate']['id'], array('controller' => 'doc_templates', 'action' => 'view', $outputDocument['DocTemplate']['id'])); ?>
		</td>
		<td><?php echo h($outputDocument['OutputDocument']['temp_ctp']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $outputDocument['OutputDocument']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $outputDocument['OutputDocument']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $outputDocument['OutputDocument']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $outputDocument['OutputDocument']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Output Document'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Doc Templates'), array('controller' => 'doc_templates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doc Template'), array('controller' => 'doc_templates', 'action' => 'add')); ?> </li>
	</ul>
</div>
