<div class="traineeMicrofinanceRecords index">
	<h2><?php echo __('Trainee Microfinance Records'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('trainee_id'); ?></th>
			<th><?php echo $this->Paginator->sort('pay_month'); ?></th>
			<th><?php echo $this->Paginator->sort('pay_price'); ?></th>
			<th><?php echo $this->Paginator->sort('pay_date'); ?></th>
			<th><?php echo $this->Paginator->sort('status_id'); ?></th>
			<th><?php echo $this->Paginator->sort('note'); ?></th>
			<th><?php echo $this->Paginator->sort('flag'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($traineeMicrofinanceRecords as $traineeMicrofinanceRecord): ?>
	<tr>
		<td><?php echo h($traineeMicrofinanceRecord['TraineeMicrofinanceRecord']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($traineeMicrofinanceRecord['Trainee']['id'], array('controller' => 'trainees', 'action' => 'view', $traineeMicrofinanceRecord['Trainee']['id'])); ?>
		</td>
		<td><?php echo h($traineeMicrofinanceRecord['TraineeMicrofinanceRecord']['pay_month']); ?>&nbsp;</td>
		<td><?php echo h($traineeMicrofinanceRecord['TraineeMicrofinanceRecord']['pay_price']); ?>&nbsp;</td>
		<td><?php echo h($traineeMicrofinanceRecord['TraineeMicrofinanceRecord']['pay_date']); ?>&nbsp;</td>
		<td><?php echo h($traineeMicrofinanceRecord['TraineeMicrofinanceRecord']['status_id']); ?>&nbsp;</td>
		<td><?php echo h($traineeMicrofinanceRecord['TraineeMicrofinanceRecord']['note']); ?>&nbsp;</td>
		<td><?php echo h($traineeMicrofinanceRecord['TraineeMicrofinanceRecord']['flag']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $traineeMicrofinanceRecord['TraineeMicrofinanceRecord']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $traineeMicrofinanceRecord['TraineeMicrofinanceRecord']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $traineeMicrofinanceRecord['TraineeMicrofinanceRecord']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $traineeMicrofinanceRecord['TraineeMicrofinanceRecord']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Trainee Microfinance Record'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Trainees'), array('controller' => 'trainees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trainee'), array('controller' => 'trainees', 'action' => 'add')); ?> </li>
	</ul>
</div>
