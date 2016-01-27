<div class="statusLists view">
<h2><?php echo __('Status List'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($statusList['StatusList']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status En'); ?></dt>
		<dd>
			<?php echo h($statusList['StatusList']['status_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status Jp'); ?></dt>
		<dd>
			<?php echo h($statusList['StatusList']['status_jp']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Status List'), array('action' => 'edit', $statusList['StatusList']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Status List'), array('action' => 'delete', $statusList['StatusList']['id']), array(), __('Are you sure you want to delete # %s?', $statusList['StatusList']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Status Lists'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status List'), array('action' => 'add')); ?> </li>
	</ul>
</div>
