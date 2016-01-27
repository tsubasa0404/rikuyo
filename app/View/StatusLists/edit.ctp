<div class="statusLists form">
<?php echo $this->Form->create('StatusList'); ?>
	<fieldset>
		<legend><?php echo __('Edit Status List'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('status_en');
		echo $this->Form->input('status_jp');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('StatusList.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('StatusList.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Status Lists'), array('action' => 'index')); ?></li>
	</ul>
</div>
