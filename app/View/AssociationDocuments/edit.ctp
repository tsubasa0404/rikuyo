<div class="associationDocuments form">
<?php echo $this->Form->create('AssociationDocument'); ?>
	<fieldset>
		<legend><?php echo __('Edit Association Document'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('association_id');
		echo $this->Form->input('doc_name_id');
		echo $this->Form->input('note');
		echo $this->Form->input('selected');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('AssociationDocument.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('AssociationDocument.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Association Documents'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Associations'), array('controller' => 'associations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Association'), array('controller' => 'associations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Doc Names'), array('controller' => 'doc_names', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doc Name'), array('controller' => 'doc_names', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interview Doc Status Lists'), array('controller' => 'interview_doc_status_lists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interview Doc Status List'), array('controller' => 'interview_doc_status_lists', 'action' => 'add')); ?> </li>
	</ul>
</div>
