<div class="provinces index">
	<h2><?php echo __('Provinces'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('province_en'); ?></th>
			<th><?php echo $this->Paginator->sort('province_jp'); ?></th>
			<th><?php echo $this->Paginator->sort('province_kh'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($provinces as $province): ?>
	<tr>
		<td><?php echo h($province['Province']['id']); ?>&nbsp;</td>
		<td><?php echo h($province['Province']['province_en']); ?>&nbsp;</td>
		<td><?php echo h($province['Province']['province_jp']); ?>&nbsp;</td>
		<td><?php echo h($province['Province']['province_kh']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $province['Province']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $province['Province']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $province['Province']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $province['Province']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Province'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Agents'), array('controller' => 'agents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Agent'), array('controller' => 'agents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Districts'), array('controller' => 'districts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New District'), array('controller' => 'districts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainees'), array('controller' => 'trainees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trainee'), array('controller' => 'trainees', 'action' => 'add')); ?> </li>
	</ul>
</div>
