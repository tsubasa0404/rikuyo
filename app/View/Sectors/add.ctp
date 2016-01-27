<div class="sectors form">
<?php echo $this->Form->create('Sector'); ?>
	<fieldset>
		<legend><?php echo __('Add Sector'); ?></legend>
	<?php
		echo $this->Form->input('sector_en');
		echo $this->Form->input('sector_jp');
		echo $this->Form->input('sector_kh');
		echo $this->Form->input('flag');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sectors'), array('action' => 'index')); ?></li>
	</ul>
</div>
