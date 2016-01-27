<div class="subFolders view">
<h2><?php echo __('Sub Folder'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($subFolder['SubFolder']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Doc Folder'); ?></dt>
		<dd>
			<?php echo $this->Html->link($subFolder['DocFolder']['id'], array('controller' => 'doc_folders', 'action' => 'view', $subFolder['DocFolder']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sub Folder Jp'); ?></dt>
		<dd>
			<?php echo h($subFolder['SubFolder']['sub_folder_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sub Folder En'); ?></dt>
		<dd>
			<?php echo h($subFolder['SubFolder']['sub_folder_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($subFolder['SubFolder']['note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Flag'); ?></dt>
		<dd>
			<?php echo h($subFolder['SubFolder']['flag']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sub Folder'), array('action' => 'edit', $subFolder['SubFolder']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sub Folder'), array('action' => 'delete', $subFolder['SubFolder']['id']), array(), __('Are you sure you want to delete # %s?', $subFolder['SubFolder']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sub Folders'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub Folder'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Doc Folders'), array('controller' => 'doc_folders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doc Folder'), array('controller' => 'doc_folders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Doc Names'), array('controller' => 'doc_names', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doc Name'), array('controller' => 'doc_names', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Doc Names'); ?></h3>
	<?php if (!empty($subFolder['DocName'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name Jp'); ?></th>
		<th><?php echo __('Name En'); ?></th>
		<th><?php echo __('Folder Id'); ?></th>
		<th><?php echo __('Sub Folder Id'); ?></th>
		<th><?php echo __('Lang Jpn'); ?></th>
		<th><?php echo __('Lang Eng'); ?></th>
		<th><?php echo __('Lang Khm'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Flag'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($subFolder['DocName'] as $docName): ?>
		<tr>
			<td><?php echo $docName['id']; ?></td>
			<td><?php echo $docName['name_jp']; ?></td>
			<td><?php echo $docName['name_en']; ?></td>
			<td><?php echo $docName['folder_id']; ?></td>
			<td><?php echo $docName['sub_folder_id']; ?></td>
			<td><?php echo $docName['lang_jpn']; ?></td>
			<td><?php echo $docName['lang_eng']; ?></td>
			<td><?php echo $docName['lang_khm']; ?></td>
			<td><?php echo $docName['note']; ?></td>
			<td><?php echo $docName['created']; ?></td>
			<td><?php echo $docName['modified']; ?></td>
			<td><?php echo $docName['flag']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'doc_names', 'action' => 'view', $docName['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'doc_names', 'action' => 'edit', $docName['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'doc_names', 'action' => 'delete', $docName['id']), array(), __('Are you sure you want to delete # %s?', $docName['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Doc Name'), array('controller' => 'doc_names', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
