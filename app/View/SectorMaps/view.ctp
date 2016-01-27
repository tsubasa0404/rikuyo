<div class="sectorMaps view">
<h2><?php echo __('Sector Map'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sectorMap['SectorMap']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Association'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sectorMap['Association']['id'], array('controller' => 'associations', 'action' => 'view', $sectorMap['Association']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sector'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sectorMap['Sector']['id'], array('controller' => 'sectors', 'action' => 'view', $sectorMap['Sector']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sector Map'), array('action' => 'edit', $sectorMap['SectorMap']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sector Map'), array('action' => 'delete', $sectorMap['SectorMap']['id']), array(), __('Are you sure you want to delete # %s?', $sectorMap['SectorMap']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sector Maps'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sector Map'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Associations'), array('controller' => 'associations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Association'), array('controller' => 'associations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sectors'), array('controller' => 'sectors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sector'), array('controller' => 'sectors', 'action' => 'add')); ?> </li>
	</ul>
</div>
