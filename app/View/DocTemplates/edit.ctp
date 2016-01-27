<div class="docTemplates form">
<?php echo $this->Form->create('DocTemplate'); ?>
	<fieldset>
		<legend><?php echo __('Edit Doc Template'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('document_name_id');
		echo $this->Form->input('img_file_name');
		echo $this->Form->input('lang');
		echo $this->Form->input('note');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DocTemplate.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('DocTemplate.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Doc Templates'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Doc Names'), array('controller' => 'doc_names', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doc Name'), array('controller' => 'doc_names', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Output Documents'), array('controller' => 'output_documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Output Document'), array('controller' => 'output_documents', 'action' => 'add')); ?> </li>
	</ul>
</div>
