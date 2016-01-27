<div class="docNames form">
<?php echo $this->Form->create('DocName'); ?>
	<fieldset>
		<legend><?php echo __('Edit Doc Name'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name_jp');
		echo $this->Form->input('name_en');
		echo $this->Form->input('folder_id');
		echo $this->Form->input('sub_folder_id');
		echo $this->Form->input('lang_jpn');
		echo $this->Form->input('lang_eng');
		echo $this->Form->input('lang_khm');
		echo $this->Form->input('note');
		echo $this->Form->input('flag');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DocName.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('DocName.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Doc Names'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Doc Folders'), array('controller' => 'doc_folders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doc Folder'), array('controller' => 'doc_folders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sub Folders'), array('controller' => 'sub_folders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub Folder'), array('controller' => 'sub_folders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Association Documents'), array('controller' => 'association_documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Association Document'), array('controller' => 'association_documents', 'action' => 'add')); ?> </li>
	</ul>
</div>
