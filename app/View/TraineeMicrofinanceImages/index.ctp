<div class="traineeMicrofinanceImages index">
	<h2><?php echo __('Trainee Microfinance Images'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('trainee_id'); ?></th>
			<th><?php echo $this->Paginator->sort('img_file_name'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('flag'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($traineeMicrofinanceImages as $traineeMicrofinanceImage): ?>
	<tr>
		<td><?php echo h($traineeMicrofinanceImage['TraineeMicrofinanceImage']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($traineeMicrofinanceImage['Trainee']['id'], array('controller' => 'trainees', 'action' => 'view', $traineeMicrofinanceImage['Trainee']['id'])); ?>
		</td>
		<td><?php echo h($traineeMicrofinanceImage['TraineeMicrofinanceImage']['img_file_name']); ?>&nbsp;</td>
		<td><?php echo h($traineeMicrofinanceImage['TraineeMicrofinanceImage']['title']); ?>&nbsp;</td>
		<td><?php echo h($traineeMicrofinanceImage['TraineeMicrofinanceImage']['flag']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $traineeMicrofinanceImage['TraineeMicrofinanceImage']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $traineeMicrofinanceImage['TraineeMicrofinanceImage']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $traineeMicrofinanceImage['TraineeMicrofinanceImage']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $traineeMicrofinanceImage['TraineeMicrofinanceImage']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Trainee Microfinance Image'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Trainees'), array('controller' => 'trainees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trainee'), array('controller' => 'trainees', 'action' => 'add')); ?> </li>
	</ul>
</div>
