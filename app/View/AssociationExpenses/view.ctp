<div class="associationExpenses view">
<h2><?php echo __('Association Expense'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($associationExpense['AssociationExpense']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Association'); ?></dt>
		<dd>
			<?php echo $this->Html->link($associationExpense['Association']['id'], array('controller' => 'associations', 'action' => 'view', $associationExpense['Association']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pay Date'); ?></dt>
		<dd>
			<?php echo h($associationExpense['AssociationExpense']['pay_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pay Price'); ?></dt>
		<dd>
			<?php echo h($associationExpense['AssociationExpense']['pay_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($associationExpense['AssociationExpense']['note']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Association Expense'), array('action' => 'edit', $associationExpense['AssociationExpense']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Association Expense'), array('action' => 'delete', $associationExpense['AssociationExpense']['id']), array(), __('Are you sure you want to delete # %s?', $associationExpense['AssociationExpense']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Association Expenses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Association Expense'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Associations'), array('controller' => 'associations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Association'), array('controller' => 'associations', 'action' => 'add')); ?> </li>
	</ul>
</div>
