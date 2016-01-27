<div class="sectorMaps form">
<?php echo $this->Form->create('SectorMap'); ?>
	<fieldset>
		<legend><?php echo __('Add Sector Map'); ?></legend>
	<?php
		echo $this->Form->input('association_id');
		echo $this->Form->input('sector_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sector Maps'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Associations'), array('controller' => 'associations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Association'), array('controller' => 'associations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sectors'), array('controller' => 'sectors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sector'), array('controller' => 'sectors', 'action' => 'add')); ?> </li>
	</ul>
</div>
