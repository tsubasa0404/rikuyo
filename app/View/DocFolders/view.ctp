<div class="docFolders view">
<h2><?php echo __('Doc Folder'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($docFolder['DocFolder']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Folder Jp'); ?></dt>
		<dd>
			<?php echo h($docFolder['DocFolder']['folder_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Folder En'); ?></dt>
		<dd>
			<?php echo h($docFolder['DocFolder']['folder_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($docFolder['DocFolder']['note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Flag'); ?></dt>
		<dd>
			<?php echo h($docFolder['DocFolder']['flag']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Doc Folder'), array('action' => 'edit', $docFolder['DocFolder']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Doc Folder'), array('action' => 'delete', $docFolder['DocFolder']['id']), array(), __('Are you sure you want to delete # %s?', $docFolder['DocFolder']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Doc Folders'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doc Folder'), array('action' => 'add')); ?> </li>
	</ul>
</div>
