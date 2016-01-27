<div class="companies index">
	<h2><?php echo __('Companies'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('company_jp'); ?></th>
			<th><?php echo $this->Paginator->sort('company_en'); ?></th>
			<th><?php echo $this->Paginator->sort('association_id'); ?></th>
			<th><?php echo $this->Paginator->sort('rep_family_name_jp'); ?></th>
			<th><?php echo $this->Paginator->sort('rep_family_name_en'); ?></th>
			<th><?php echo $this->Paginator->sort('rep_given_name_jp'); ?></th>
			<th><?php echo $this->Paginator->sort('rep_given_name_en'); ?></th>
			<th><?php echo $this->Paginator->sort('postcode'); ?></th>
			<th><?php echo $this->Paginator->sort('province'); ?></th>
			<th><?php echo $this->Paginator->sort('address_jp'); ?></th>
			<th><?php echo $this->Paginator->sort('address_en'); ?></th>
			<th><?php echo $this->Paginator->sort('job'); ?></th>
			<th><?php echo $this->Paginator->sort('phone1'); ?></th>
			<th><?php echo $this->Paginator->sort('phone1_smb'); ?></th>
			<th><?php echo $this->Paginator->sort('phone2'); ?></th>
			<th><?php echo $this->Paginator->sort('phone2_smb'); ?></th>
			<th><?php echo $this->Paginator->sort('phone3'); ?></th>
			<th><?php echo $this->Paginator->sort('phone3_smb'); ?></th>
			<th><?php echo $this->Paginator->sort('phone4'); ?></th>
			<th><?php echo $this->Paginator->sort('phone4_smb'); ?></th>
			<th><?php echo $this->Paginator->sort('mail1'); ?></th>
			<th><?php echo $this->Paginator->sort('mail1_smb'); ?></th>
			<th><?php echo $this->Paginator->sort('mail2'); ?></th>
			<th><?php echo $this->Paginator->sort('mail2_smb'); ?></th>
			<th><?php echo $this->Paginator->sort('mail3'); ?></th>
			<th><?php echo $this->Paginator->sort('mail3_smb'); ?></th>
			<th><?php echo $this->Paginator->sort('mail4'); ?></th>
			<th><?php echo $this->Paginator->sort('mail4_smb'); ?></th>
			<th><?php echo $this->Paginator->sort('url'); ?></th>
			<th><?php echo $this->Paginator->sort('company_info'); ?></th>
			<th><?php echo $this->Paginator->sort('note'); ?></th>
			<th><?php echo $this->Paginator->sort('flag'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($companies as $company): ?>
	<tr>
		<td><?php echo h($company['Company']['id']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['company_jp']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['company_en']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($company['Association']['id'], array('controller' => 'associations', 'action' => 'view', $company['Association']['id'])); ?>
		</td>
		<td><?php echo h($company['Company']['rep_family_name_jp']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['rep_family_name_en']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['rep_given_name_jp']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['rep_given_name_en']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['postcode']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['province']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['address_jp']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['address_en']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['job']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['phone1']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['phone1_smb']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['phone2']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['phone2_smb']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['phone3']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['phone3_smb']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['phone4']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['phone4_smb']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['mail1']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['mail1_smb']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['mail2']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['mail2_smb']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['mail3']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['mail3_smb']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['mail4']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['mail4_smb']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['url']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['company_info']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['note']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['flag']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $company['Company']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $company['Company']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $company['Company']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $company['Company']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Company'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Associations'), array('controller' => 'associations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Association'), array('controller' => 'associations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inspections'), array('controller' => 'inspections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inspection'), array('controller' => 'inspections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interviews'), array('controller' => 'interviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interview'), array('controller' => 'interviews', 'action' => 'add')); ?> </li>
	</ul>
</div>
