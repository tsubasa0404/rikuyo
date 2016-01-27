<div class="inspections view">
<h2><?php echo __('Inspection'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($inspection['Inspection']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Association'); ?></dt>
		<dd>
			<?php echo $this->Html->link($inspection['Association']['id'], array('controller' => 'associations', 'action' => 'view', $inspection['Association']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo $this->Html->link($inspection['Company']['id'], array('controller' => 'companies', 'action' => 'view', $inspection['Company']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Smb'); ?></dt>
		<dd>
			<?php echo h($inspection['Inspection']['smb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Staff'); ?></dt>
		<dd>
			<?php echo h($inspection['Inspection']['staff']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('From'); ?></dt>
		<dd>
			<?php echo h($inspection['Inspection']['from']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('To'); ?></dt>
		<dd>
			<?php echo h($inspection['Inspection']['to']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($inspection['Inspection']['note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Flag'); ?></dt>
		<dd>
			<?php echo h($inspection['Inspection']['flag']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Inspection'), array('action' => 'edit', $inspection['Inspection']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Inspection'), array('action' => 'delete', $inspection['Inspection']['id']), array(), __('Are you sure you want to delete # %s?', $inspection['Inspection']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Inspections'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inspection'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Associations'), array('controller' => 'associations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Association'), array('controller' => 'associations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
