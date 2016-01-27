<div class="agents index">
	<h2><?php echo __('Agents'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('agent_en'); ?></th>
			<th><?php echo $this->Paginator->sort('agent_jp'); ?></th>
			<th><?php echo $this->Paginator->sort('rep_family_name_en'); ?></th>
			<th><?php echo $this->Paginator->sort('rep_family_name_jp'); ?></th>
			<th><?php echo $this->Paginator->sort('rep_given_name_en'); ?></th>
			<th><?php echo $this->Paginator->sort('rep_given_name_jp'); ?></th>
			<th><?php echo $this->Paginator->sort('rep_position_en'); ?></th>
			<th><?php echo $this->Paginator->sort('rep_position_jp'); ?></th>
			<th><?php echo $this->Paginator->sort('rep_sex'); ?></th>
			<th><?php echo $this->Paginator->sort('establish_date'); ?></th>
			<th><?php echo $this->Paginator->sort('capital_riel'); ?></th>
			<th><?php echo $this->Paginator->sort('capital_jpy'); ?></th>
			<th><?php echo $this->Paginator->sort('sales_riel'); ?></th>
			<th><?php echo $this->Paginator->sort('sales_jpy'); ?></th>
			<th><?php echo $this->Paginator->sort('employee_num'); ?></th>
			<th><?php echo $this->Paginator->sort('export_en'); ?></th>
			<th><?php echo $this->Paginator->sort('export_jp'); ?></th>
			<th><?php echo $this->Paginator->sort('import_en'); ?></th>
			<th><?php echo $this->Paginator->sort('import_jp'); ?></th>
			<th><?php echo $this->Paginator->sort('province_id'); ?></th>
			<th><?php echo $this->Paginator->sort('district_id'); ?></th>
			<th><?php echo $this->Paginator->sort('commune_id'); ?></th>
			<th><?php echo $this->Paginator->sort('address_kh'); ?></th>
			<th><?php echo $this->Paginator->sort('address_en'); ?></th>
			<th><?php echo $this->Paginator->sort('phone1'); ?></th>
			<th><?php echo $this->Paginator->sort('phone1_smb'); ?></th>
			<th><?php echo $this->Paginator->sort('phone2'); ?></th>
			<th><?php echo $this->Paginator->sort('phone2_smb'); ?></th>
			<th><?php echo $this->Paginator->sort('mail1'); ?></th>
			<th><?php echo $this->Paginator->sort('mail1_smb'); ?></th>
			<th><?php echo $this->Paginator->sort('mail2'); ?></th>
			<th><?php echo $this->Paginator->sort('mail2_smb'); ?></th>
			<th><?php echo $this->Paginator->sort('sector'); ?></th>
			<th><?php echo $this->Paginator->sort('note'); ?></th>
			<th><?php echo $this->Paginator->sort('flag'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($agents as $agent): ?>
	<tr>
		<td><?php echo h($agent['Agent']['id']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['agent_en']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['agent_jp']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['rep_family_name_en']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['rep_family_name_jp']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['rep_given_name_en']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['rep_given_name_jp']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['rep_position_en']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['rep_position_jp']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['rep_sex']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['establish_date']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['capital_riel']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['capital_jpy']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['sales_riel']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['sales_jpy']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['employee_num']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['export_en']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['export_jp']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['import_en']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['import_jp']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($agent['Province']['id'], array('controller' => 'provinces', 'action' => 'view', $agent['Province']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($agent['District']['id'], array('controller' => 'districts', 'action' => 'view', $agent['District']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($agent['Commune']['id'], array('controller' => 'communes', 'action' => 'view', $agent['Commune']['id'])); ?>
		</td>
		<td><?php echo h($agent['Agent']['address_kh']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['address_en']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['phone1']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['phone1_smb']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['phone2']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['phone2_smb']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['mail1']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['mail1_smb']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['mail2']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['mail2_smb']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['sector']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['note']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['flag']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $agent['Agent']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $agent['Agent']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $agent['Agent']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $agent['Agent']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Agent'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Provinces'), array('controller' => 'provinces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Province'), array('controller' => 'provinces', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Districts'), array('controller' => 'districts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New District'), array('controller' => 'districts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Communes'), array('controller' => 'communes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Commune'), array('controller' => 'communes', 'action' => 'add')); ?> </li>
	</ul>
</div>
