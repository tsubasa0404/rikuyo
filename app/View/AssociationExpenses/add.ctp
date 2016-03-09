<div class="associationExpenses form">
<?php echo $this->Form->create('AssociationExpense'); ?>
	<fieldset>
		<legend><?php echo __('Add Association Expense'); ?></legend>
	<?php
		echo $this->Form->input('association_id');
		echo $this->Form->input('pay_date');
		echo $this->Form->input('pay_price');
		echo $this->Form->input('note');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Association Expenses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Associations'), array('controller' => 'associations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Association'), array('controller' => 'associations', 'action' => 'add')); ?> </li>
	</ul>
</div>
