<div class="sectors view">
<h2><?php echo __('Sector'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sector['Sector']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sector En'); ?></dt>
		<dd>
			<?php echo h($sector['Sector']['sector_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sector Jp'); ?></dt>
		<dd>
			<?php echo h($sector['Sector']['sector_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sector Kh'); ?></dt>
		<dd>
			<?php echo h($sector['Sector']['sector_kh']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Flag'); ?></dt>
		<dd>
			<?php echo h($sector['Sector']['flag']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sector'), array('action' => 'edit', $sector['Sector']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sector'), array('action' => 'delete', $sector['Sector']['id']), array(), __('Are you sure you want to delete # %s?', $sector['Sector']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sectors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sector'), array('action' => 'add')); ?> </li>
	</ul>
</div>
