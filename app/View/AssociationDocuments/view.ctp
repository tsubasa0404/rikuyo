<div class="associationDocuments view">
<h2><?php echo __('Association Document'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($associationDocument['AssociationDocument']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Association'); ?></dt>
		<dd>
			<?php echo $this->Html->link($associationDocument['Association']['id'], array('controller' => 'associations', 'action' => 'view', $associationDocument['Association']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Doc Name'); ?></dt>
		<dd>
			<?php echo $this->Html->link($associationDocument['DocName']['id'], array('controller' => 'doc_names', 'action' => 'view', $associationDocument['DocName']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($associationDocument['AssociationDocument']['note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Selected'); ?></dt>
		<dd>
			<?php echo h($associationDocument['AssociationDocument']['selected']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Association Document'), array('action' => 'edit', $associationDocument['AssociationDocument']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Association Document'), array('action' => 'delete', $associationDocument['AssociationDocument']['id']), array(), __('Are you sure you want to delete # %s?', $associationDocument['AssociationDocument']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Association Documents'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Association Document'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Associations'), array('controller' => 'associations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Association'), array('controller' => 'associations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Doc Names'), array('controller' => 'doc_names', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doc Name'), array('controller' => 'doc_names', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interview Doc Status Lists'), array('controller' => 'interview_doc_status_lists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interview Doc Status List'), array('controller' => 'interview_doc_status_lists', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Interview Doc Status Lists'); ?></h3>
	<?php if (!empty($associationDocument['InterviewDocStatusList'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Interview Id'); ?></th>
		<th><?php echo __('Association Document Id'); ?></th>
		<th><?php echo __('Status Id'); ?></th>
		<th><?php echo __('Interview Doc Status Listscol'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($associationDocument['InterviewDocStatusList'] as $interviewDocStatusList): ?>
		<tr>
			<td><?php echo $interviewDocStatusList['id']; ?></td>
			<td><?php echo $interviewDocStatusList['interview_id']; ?></td>
			<td><?php echo $interviewDocStatusList['association_document_id']; ?></td>
			<td><?php echo $interviewDocStatusList['status_id']; ?></td>
			<td><?php echo $interviewDocStatusList['interview_doc_status_listscol']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'interview_doc_status_lists', 'action' => 'view', $interviewDocStatusList['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'interview_doc_status_lists', 'action' => 'edit', $interviewDocStatusList['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'interview_doc_status_lists', 'action' => 'delete', $interviewDocStatusList['id']), array(), __('Are you sure you want to delete # %s?', $interviewDocStatusList['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Interview Doc Status List'), array('controller' => 'interview_doc_status_lists', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
