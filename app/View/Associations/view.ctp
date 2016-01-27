<div class="associations view">
<h2><?php echo __('Association'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($association['Association']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Association Jp'); ?></dt>
		<dd>
			<?php echo h($association['Association']['association_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Association En'); ?></dt>
		<dd>
			<?php echo h($association['Association']['association_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rep Family Name Jp'); ?></dt>
		<dd>
			<?php echo h($association['Association']['rep_family_name_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel2 Smb'); ?></dt>
		<dd>
			<?php echo h($association['Association']['tel2_smb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rep Family Name En'); ?></dt>
		<dd>
			<?php echo h($association['Association']['rep_family_name_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rep Given Name Jp'); ?></dt>
		<dd>
			<?php echo h($association['Association']['rep_given_name_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rep Given Name En'); ?></dt>
		<dd>
			<?php echo h($association['Association']['rep_given_name_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Postcode'); ?></dt>
		<dd>
			<?php echo h($association['Association']['postcode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Province'); ?></dt>
		<dd>
			<?php echo h($association['Association']['province']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address Jp'); ?></dt>
		<dd>
			<?php echo h($association['Association']['address_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address En'); ?></dt>
		<dd>
			<?php echo h($association['Association']['address_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sector'); ?></dt>
		<dd>
			<?php echo h($association['Association']['sector']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone1'); ?></dt>
		<dd>
			<?php echo h($association['Association']['phone1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone1 Smb'); ?></dt>
		<dd>
			<?php echo h($association['Association']['phone1_smb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone2'); ?></dt>
		<dd>
			<?php echo h($association['Association']['phone2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone2 Smb'); ?></dt>
		<dd>
			<?php echo h($association['Association']['phone2_smb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone3'); ?></dt>
		<dd>
			<?php echo h($association['Association']['phone3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone3 Smb'); ?></dt>
		<dd>
			<?php echo h($association['Association']['phone3_smb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone4'); ?></dt>
		<dd>
			<?php echo h($association['Association']['phone4']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone4 Smb'); ?></dt>
		<dd>
			<?php echo h($association['Association']['phone4_smb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail1'); ?></dt>
		<dd>
			<?php echo h($association['Association']['mail1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail1 Smb'); ?></dt>
		<dd>
			<?php echo h($association['Association']['mail1_smb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail2'); ?></dt>
		<dd>
			<?php echo h($association['Association']['mail2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail2 Smb'); ?></dt>
		<dd>
			<?php echo h($association['Association']['mail2_smb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail3'); ?></dt>
		<dd>
			<?php echo h($association['Association']['mail3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail3 Smb'); ?></dt>
		<dd>
			<?php echo h($association['Association']['mail3_smb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail4'); ?></dt>
		<dd>
			<?php echo h($association['Association']['mail4']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail4 Smb'); ?></dt>
		<dd>
			<?php echo h($association['Association']['mail4_smb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($association['Association']['note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Flag'); ?></dt>
		<dd>
			<?php echo h($association['Association']['flag']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Association'), array('action' => 'edit', $association['Association']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Association'), array('action' => 'delete', $association['Association']['id']), array(), __('Are you sure you want to delete # %s?', $association['Association']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Associations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Association'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Association Documents'), array('controller' => 'association_documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Association Document'), array('controller' => 'association_documents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inspections'), array('controller' => 'inspections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inspection'), array('controller' => 'inspections', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Association Documents'); ?></h3>
	<?php if (!empty($association['AssociationDocument'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Association Id'); ?></th>
		<th><?php echo __('Doc Name Id'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th><?php echo __('Selected'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($association['AssociationDocument'] as $associationDocument): ?>
		<tr>
			<td><?php echo $associationDocument['id']; ?></td>
			<td><?php echo $associationDocument['association_id']; ?></td>
			<td><?php echo $associationDocument['doc_name_id']; ?></td>
			<td><?php echo $associationDocument['note']; ?></td>
			<td><?php echo $associationDocument['selected']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'association_documents', 'action' => 'view', $associationDocument['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'association_documents', 'action' => 'edit', $associationDocument['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'association_documents', 'action' => 'delete', $associationDocument['id']), array(), __('Are you sure you want to delete # %s?', $associationDocument['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Association Document'), array('controller' => 'association_documents', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Companies'); ?></h3>
	<?php if (!empty($association['Company'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Company Jp'); ?></th>
		<th><?php echo __('Company En'); ?></th>
		<th><?php echo __('Association Id'); ?></th>
		<th><?php echo __('Rep Family Name Jp'); ?></th>
		<th><?php echo __('Rep Family Name En'); ?></th>
		<th><?php echo __('Rep Given Name Jp'); ?></th>
		<th><?php echo __('Rep Given Name En'); ?></th>
		<th><?php echo __('Postcode'); ?></th>
		<th><?php echo __('Province'); ?></th>
		<th><?php echo __('Address Jp'); ?></th>
		<th><?php echo __('Address En'); ?></th>
		<th><?php echo __('Job'); ?></th>
		<th><?php echo __('Phone1'); ?></th>
		<th><?php echo __('Phone1 Smb'); ?></th>
		<th><?php echo __('Phone2'); ?></th>
		<th><?php echo __('Phone2 Smb'); ?></th>
		<th><?php echo __('Phone3'); ?></th>
		<th><?php echo __('Phone3 Smb'); ?></th>
		<th><?php echo __('Phone4'); ?></th>
		<th><?php echo __('Phone4 Smb'); ?></th>
		<th><?php echo __('Mail1'); ?></th>
		<th><?php echo __('Mail1 Smb'); ?></th>
		<th><?php echo __('Mail2'); ?></th>
		<th><?php echo __('Mail2 Smb'); ?></th>
		<th><?php echo __('Mail3'); ?></th>
		<th><?php echo __('Mail3 Smb'); ?></th>
		<th><?php echo __('Mail4'); ?></th>
		<th><?php echo __('Mail4 Smb'); ?></th>
		<th><?php echo __('Url'); ?></th>
		<th><?php echo __('Company Info'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th><?php echo __('Flag'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($association['Company'] as $company): ?>
		<tr>
			<td><?php echo $company['id']; ?></td>
			<td><?php echo $company['company_jp']; ?></td>
			<td><?php echo $company['company_en']; ?></td>
			<td><?php echo $company['association_id']; ?></td>
			<td><?php echo $company['rep_family_name_jp']; ?></td>
			<td><?php echo $company['rep_family_name_en']; ?></td>
			<td><?php echo $company['rep_given_name_jp']; ?></td>
			<td><?php echo $company['rep_given_name_en']; ?></td>
			<td><?php echo $company['postcode']; ?></td>
			<td><?php echo $company['province']; ?></td>
			<td><?php echo $company['address_jp']; ?></td>
			<td><?php echo $company['address_en']; ?></td>
			<td><?php echo $company['job']; ?></td>
			<td><?php echo $company['phone1']; ?></td>
			<td><?php echo $company['phone1_smb']; ?></td>
			<td><?php echo $company['phone2']; ?></td>
			<td><?php echo $company['phone2_smb']; ?></td>
			<td><?php echo $company['phone3']; ?></td>
			<td><?php echo $company['phone3_smb']; ?></td>
			<td><?php echo $company['phone4']; ?></td>
			<td><?php echo $company['phone4_smb']; ?></td>
			<td><?php echo $company['mail1']; ?></td>
			<td><?php echo $company['mail1_smb']; ?></td>
			<td><?php echo $company['mail2']; ?></td>
			<td><?php echo $company['mail2_smb']; ?></td>
			<td><?php echo $company['mail3']; ?></td>
			<td><?php echo $company['mail3_smb']; ?></td>
			<td><?php echo $company['mail4']; ?></td>
			<td><?php echo $company['mail4_smb']; ?></td>
			<td><?php echo $company['url']; ?></td>
			<td><?php echo $company['company_info']; ?></td>
			<td><?php echo $company['note']; ?></td>
			<td><?php echo $company['flag']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'companies', 'action' => 'view', $company['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'companies', 'action' => 'edit', $company['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'companies', 'action' => 'delete', $company['id']), array(), __('Are you sure you want to delete # %s?', $company['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Inspections'); ?></h3>
	<?php if (!empty($association['Inspection'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Association Id'); ?></th>
		<th><?php echo __('Company Id'); ?></th>
		<th><?php echo __('Smb'); ?></th>
		<th><?php echo __('Staff'); ?></th>
		<th><?php echo __('From'); ?></th>
		<th><?php echo __('To'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th><?php echo __('Flag'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($association['Inspection'] as $inspection): ?>
		<tr>
			<td><?php echo $inspection['id']; ?></td>
			<td><?php echo $inspection['association_id']; ?></td>
			<td><?php echo $inspection['company_id']; ?></td>
			<td><?php echo $inspection['smb']; ?></td>
			<td><?php echo $inspection['staff']; ?></td>
			<td><?php echo $inspection['from']; ?></td>
			<td><?php echo $inspection['to']; ?></td>
			<td><?php echo $inspection['note']; ?></td>
			<td><?php echo $inspection['flag']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'inspections', 'action' => 'view', $inspection['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'inspections', 'action' => 'edit', $inspection['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'inspections', 'action' => 'delete', $inspection['id']), array(), __('Are you sure you want to delete # %s?', $inspection['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Inspection'), array('controller' => 'inspections', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
