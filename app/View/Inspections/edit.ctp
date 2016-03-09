<div class="inspections form">
<?php echo $this->Form->create('Inspection'); ?>
	<fieldset>
		<legend><?php echo __('Edit Inspection'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('association_id');
		echo $this->Form->input('company_id');
		echo $this->Form->input('smb');
		echo $this->Form->input('staff');
		echo $this->Form->input('from', array('label' => __('From')));
		echo $this->Form->input('to', array('label' => __('To')));
		echo $this->Form->input('note');
		echo $this->Form->input('flag');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Inspection.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Inspection.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Inspections'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Associations'), array('controller' => 'associations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Association'), array('controller' => 'associations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
