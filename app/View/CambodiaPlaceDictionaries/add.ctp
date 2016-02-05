<div class="cambodiaPlaceDictionaries form">
<?php echo $this->Form->create('CambodiaPlaceDictionary'); ?>
	<fieldset>
		<legend><?php echo __('Add Cambodia Place Dictionary'); ?></legend>
	<?php
		echo $this->Form->input('place_en');
		echo $this->Form->input('place_kh');
		echo $this->Form->input('place_jp');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cambodia Place Dictionaries'), array('action' => 'index')); ?></li>
	</ul>
</div>
