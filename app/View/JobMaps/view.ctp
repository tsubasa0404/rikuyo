<div class="jobMaps view">
<h2><?php echo __('Job Map'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($jobMap['JobMap']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo $this->Html->link($jobMap['Company']['id'], array('controller' => 'companies', 'action' => 'view', $jobMap['Company']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job'); ?></dt>
		<dd>
			<?php echo $this->Html->link($jobMap['Job']['id'], array('controller' => 'jobs', 'action' => 'view', $jobMap['Job']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Job Map'), array('action' => 'edit', $jobMap['JobMap']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Job Map'), array('action' => 'delete', $jobMap['JobMap']['id']), array(), __('Are you sure you want to delete # %s?', $jobMap['JobMap']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Job Maps'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Map'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
	</ul>
</div>
