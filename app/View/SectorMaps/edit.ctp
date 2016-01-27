<div class="sectorMaps form">
<?php echo $this->Form->create('SectorMap'); ?>
	<fieldset>
		<legend><?php echo __('Edit Sector Map'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('association_id');
		echo $this->Form->input('sector_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SectorMap.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('SectorMap.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Sector Maps'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Associations'), array('controller' => 'associations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Association'), array('controller' => 'associations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sectors'), array('controller' => 'sectors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sector'), array('controller' => 'sectors', 'action' => 'add')); ?> </li>
	</ul>
</div>
