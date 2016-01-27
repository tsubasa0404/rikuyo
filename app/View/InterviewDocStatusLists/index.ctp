<div class="interviewDocStatusLists index">
	<h2><?php echo __('Interview Doc Status Lists'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('interview_id'); ?></th>
			<th><?php echo $this->Paginator->sort('association_document_id'); ?></th>
			<th><?php echo $this->Paginator->sort('status_id'); ?></th>
			<th><?php echo $this->Paginator->sort('interview_doc_status_listscol'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($interviewDocStatusLists as $interviewDocStatusList): ?>
	<tr>
		<td><?php echo h($interviewDocStatusList['InterviewDocStatusList']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($interviewDocStatusList['Interview']['id'], array('controller' => 'interviews', 'action' => 'view', $interviewDocStatusList['Interview']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($interviewDocStatusList['AssociationDocument']['id'], array('controller' => 'association_documents', 'action' => 'view', $interviewDocStatusList['AssociationDocument']['id'])); ?>
		</td>
		<td><?php echo h($interviewDocStatusList['InterviewDocStatusList']['status_id']); ?>&nbsp;</td>
		<td><?php echo h($interviewDocStatusList['InterviewDocStatusList']['interview_doc_status_listscol']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $interviewDocStatusList['InterviewDocStatusList']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $interviewDocStatusList['InterviewDocStatusList']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $interviewDocStatusList['InterviewDocStatusList']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $interviewDocStatusList['InterviewDocStatusList']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Interview Doc Status List'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Interviews'), array('controller' => 'interviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interview'), array('controller' => 'interviews', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Association Documents'), array('controller' => 'association_documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Association Document'), array('controller' => 'association_documents', 'action' => 'add')); ?> </li>
	</ul>
</div>
