<div class="associationExpenses index">
	<h2><?php echo __('Association Expenses'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('association_id'); ?></th>
			<th><?php echo $this->Paginator->sort('pay_date'); ?></th>
			<th><?php echo $this->Paginator->sort('pay_price'); ?></th>
			<th><?php echo $this->Paginator->sort('note'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($associationExpenses as $associationExpense): ?>
	<tr>
		<td><?php echo h($associationExpense['AssociationExpense']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($associationExpense['Association']['id'], array('controller' => 'associations', 'action' => 'view', $associationExpense['Association']['id'])); ?>
		</td>
		<td><?php echo h($associationExpense['AssociationExpense']['pay_date']); ?>&nbsp;</td>
		<td><?php echo h($associationExpense['AssociationExpense']['pay_price']); ?>&nbsp;</td>
		<td><?php echo h($associationExpense['AssociationExpense']['note']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $associationExpense['AssociationExpense']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $associationExpense['AssociationExpense']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $associationExpense['AssociationExpense']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $associationExpense['AssociationExpense']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Association Expense'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Associations'), array('controller' => 'associations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Association'), array('controller' => 'associations', 'action' => 'add')); ?> </li>
	</ul>
</div>
