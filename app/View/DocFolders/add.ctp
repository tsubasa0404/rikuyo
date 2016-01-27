<div class="docFolders form">
<?php echo $this->Form->create('DocFolder'); ?>
	<fieldset>
		<legend><?php echo __('Add Doc Folder'); ?></legend>
	<?php
		echo $this->Form->input('folder_jp');
		echo $this->Form->input('folder_en');
		echo $this->Form->input('note');
		echo $this->Form->input('flag');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Doc Folders'), array('action' => 'index')); ?></li>
	</ul>
</div>
