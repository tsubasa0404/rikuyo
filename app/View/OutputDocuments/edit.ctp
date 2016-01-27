<div class="outputDocuments form">
<?php echo $this->Form->create('OutputDocument'); ?>
	<fieldset>
		<legend><?php echo __('Edit Output Document'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('doc_template_id');
		echo $this->Form->input('temp_ctp');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('OutputDocument.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('OutputDocument.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Output Documents'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Doc Templates'), array('controller' => 'doc_templates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doc Template'), array('controller' => 'doc_templates', 'action' => 'add')); ?> </li>
	</ul>
</div>
