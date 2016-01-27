<div class="interviewDocStatusLists view">
<h2><?php echo __('Interview Doc Status List'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($interviewDocStatusList['InterviewDocStatusList']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Interview'); ?></dt>
		<dd>
			<?php echo $this->Html->link($interviewDocStatusList['Interview']['id'], array('controller' => 'interviews', 'action' => 'view', $interviewDocStatusList['Interview']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Association Document'); ?></dt>
		<dd>
			<?php echo $this->Html->link($interviewDocStatusList['AssociationDocument']['id'], array('controller' => 'association_documents', 'action' => 'view', $interviewDocStatusList['AssociationDocument']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status Id'); ?></dt>
		<dd>
			<?php echo h($interviewDocStatusList['InterviewDocStatusList']['status_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Interview Doc Status Listscol'); ?></dt>
		<dd>
			<?php echo h($interviewDocStatusList['InterviewDocStatusList']['interview_doc_status_listscol']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Interview Doc Status List'), array('action' => 'edit', $interviewDocStatusList['InterviewDocStatusList']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Interview Doc Status List'), array('action' => 'delete', $interviewDocStatusList['InterviewDocStatusList']['id']), array(), __('Are you sure you want to delete # %s?', $interviewDocStatusList['InterviewDocStatusList']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Interview Doc Status Lists'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interview Doc Status List'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interviews'), array('controller' => 'interviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interview'), array('controller' => 'interviews', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Association Documents'), array('controller' => 'association_documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Association Document'), array('controller' => 'association_documents', 'action' => 'add')); ?> </li>
	</ul>
</div>
