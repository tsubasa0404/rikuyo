<div class="subFolders form">
<?php echo $this->Form->create('SubFolder'); ?>
	<fieldset>
		<legend><?php echo __('Add Sub Folder'); ?></legend>
	<?php
		echo $this->Form->input('folder_id');
		echo $this->Form->input('sub_folder_jp');
		echo $this->Form->input('sub_folder_en');
		echo $this->Form->input('note');
		echo $this->Form->input('flag');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sub Folders'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Doc Folders'), array('controller' => 'doc_folders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doc Folder'), array('controller' => 'doc_folders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Doc Names'), array('controller' => 'doc_names', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doc Name'), array('controller' => 'doc_names', 'action' => 'add')); ?> </li>
	</ul>
</div>
