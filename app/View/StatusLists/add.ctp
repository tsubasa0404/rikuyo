<div class="statusLists form">
<?php echo $this->Form->create('StatusList'); ?>
	<fieldset>
		<legend><?php echo __('Add Status List'); ?></legend>
	<?php
		echo $this->Form->input('status_en');
		echo $this->Form->input('status_jp');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Status Lists'), array('action' => 'index')); ?></li>
	</ul>
</div>
