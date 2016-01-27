<div class="traineeExpenses view">
<h2><?php echo __('Trainee Expense'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($traineeExpense['TraineeExpense']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trainee'); ?></dt>
		<dd>
			<?php echo $this->Html->link($traineeExpense['Trainee']['id'], array('controller' => 'trainees', 'action' => 'view', $traineeExpense['Trainee']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expected Date'); ?></dt>
		<dd>
			<?php echo h($traineeExpense['TraineeExpense']['expected_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expected Price'); ?></dt>
		<dd>
			<?php echo h($traineeExpense['TraineeExpense']['expected_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pay Date'); ?></dt>
		<dd>
			<?php echo h($traineeExpense['TraineeExpense']['pay_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pay Price'); ?></dt>
		<dd>
			<?php echo h($traineeExpense['TraineeExpense']['pay_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($traineeExpense['TraineeExpense']['note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Flag'); ?></dt>
		<dd>
			<?php echo h($traineeExpense['TraineeExpense']['flag']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Trainee Expense'), array('action' => 'edit', $traineeExpense['TraineeExpense']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Trainee Expense'), array('action' => 'delete', $traineeExpense['TraineeExpense']['id']), array(), __('Are you sure you want to delete # %s?', $traineeExpense['TraineeExpense']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainee Expenses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trainee Expense'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainees'), array('controller' => 'trainees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trainee'), array('controller' => 'trainees', 'action' => 'add')); ?> </li>
	</ul>
</div>
