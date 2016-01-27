<div class="traineeMicrofinanceRecords view">
<h2><?php echo __('Trainee Microfinance Record'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($traineeMicrofinanceRecord['TraineeMicrofinanceRecord']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trainee'); ?></dt>
		<dd>
			<?php echo $this->Html->link($traineeMicrofinanceRecord['Trainee']['id'], array('controller' => 'trainees', 'action' => 'view', $traineeMicrofinanceRecord['Trainee']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pay Month'); ?></dt>
		<dd>
			<?php echo h($traineeMicrofinanceRecord['TraineeMicrofinanceRecord']['pay_month']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pay Price'); ?></dt>
		<dd>
			<?php echo h($traineeMicrofinanceRecord['TraineeMicrofinanceRecord']['pay_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pay Date'); ?></dt>
		<dd>
			<?php echo h($traineeMicrofinanceRecord['TraineeMicrofinanceRecord']['pay_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status Id'); ?></dt>
		<dd>
			<?php echo h($traineeMicrofinanceRecord['TraineeMicrofinanceRecord']['status_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($traineeMicrofinanceRecord['TraineeMicrofinanceRecord']['note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Flag'); ?></dt>
		<dd>
			<?php echo h($traineeMicrofinanceRecord['TraineeMicrofinanceRecord']['flag']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Trainee Microfinance Record'), array('action' => 'edit', $traineeMicrofinanceRecord['TraineeMicrofinanceRecord']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Trainee Microfinance Record'), array('action' => 'delete', $traineeMicrofinanceRecord['TraineeMicrofinanceRecord']['id']), array(), __('Are you sure you want to delete # %s?', $traineeMicrofinanceRecord['TraineeMicrofinanceRecord']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainee Microfinance Records'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trainee Microfinance Record'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainees'), array('controller' => 'trainees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trainee'), array('controller' => 'trainees', 'action' => 'add')); ?> </li>
	</ul>
</div>
