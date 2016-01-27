<div class="interviewDocStatusLists form">
<?php echo $this->Form->create('InterviewDocStatusList'); ?>
	<fieldset>
		<legend><?php echo __('Edit Interview Doc Status List'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('interview_id');
		echo $this->Form->input('association_document_id');
		echo $this->Form->input('status_id');
		echo $this->Form->input('interview_doc_status_listscol');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('InterviewDocStatusList.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('InterviewDocStatusList.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Interview Doc Status Lists'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Interviews'), array('controller' => 'interviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interview'), array('controller' => 'interviews', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Association Documents'), array('controller' => 'association_documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Association Document'), array('controller' => 'association_documents', 'action' => 'add')); ?> </li>
	</ul>
</div>
