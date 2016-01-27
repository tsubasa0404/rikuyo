<div class="tasks view">
<h2><?php echo __('Task'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($task['Task']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Task'); ?></dt>
		<dd>
			<?php echo h($task['Task']['task']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Someone'); ?></dt>
		<dd>
			<?php echo h($task['Task']['someone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expected Date'); ?></dt>
		<dd>
			<?php echo h($task['Task']['expected_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo $this->Html->link($task['Status']['id'], array('controller' => 'status_lists', 'action' => 'view', $task['Status']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($task['Task']['note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Flag'); ?></dt>
		<dd>
			<?php echo h($task['Task']['flag']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Task'), array('action' => 'edit', $task['Task']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Task'), array('action' => 'delete', $task['Task']['id']), array(), __('Are you sure you want to delete # %s?', $task['Task']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tasks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Task'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Status Lists'), array('controller' => 'status_lists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status'), array('controller' => 'status_lists', 'action' => 'add')); ?> </li>
	</ul>
</div>
