<div class="docNames view">
<h2><?php echo __('Doc Name'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($docName['DocName']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name Jp'); ?></dt>
		<dd>
			<?php echo h($docName['DocName']['name_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name En'); ?></dt>
		<dd>
			<?php echo h($docName['DocName']['name_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Doc Folder'); ?></dt>
		<dd>
			<?php echo $this->Html->link($docName['DocFolder']['id'], array('controller' => 'doc_folders', 'action' => 'view', $docName['DocFolder']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sub Folder'); ?></dt>
		<dd>
			<?php echo $this->Html->link($docName['SubFolder']['id'], array('controller' => 'sub_folders', 'action' => 'view', $docName['SubFolder']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lang Jpn'); ?></dt>
		<dd>
			<?php echo h($docName['DocName']['lang_jpn']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lang Eng'); ?></dt>
		<dd>
			<?php echo h($docName['DocName']['lang_eng']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lang Khm'); ?></dt>
		<dd>
			<?php echo h($docName['DocName']['lang_khm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($docName['DocName']['note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($docName['DocName']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($docName['DocName']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Flag'); ?></dt>
		<dd>
			<?php echo h($docName['DocName']['flag']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Doc Name'), array('action' => 'edit', $docName['DocName']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Doc Name'), array('action' => 'delete', $docName['DocName']['id']), array(), __('Are you sure you want to delete # %s?', $docName['DocName']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Doc Names'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doc Name'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Doc Folders'), array('controller' => 'doc_folders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doc Folder'), array('controller' => 'doc_folders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sub Folders'), array('controller' => 'sub_folders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub Folder'), array('controller' => 'sub_folders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Association Documents'), array('controller' => 'association_documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Association Document'), array('controller' => 'association_documents', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Association Documents'); ?></h3>
	<?php if (!empty($docName['AssociationDocument'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Association Id'); ?></th>
		<th><?php echo __('Doc Name Id'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th><?php echo __('Selected'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($docName['AssociationDocument'] as $associationDocument): ?>
		<tr>
			<td><?php echo $associationDocument['id']; ?></td>
			<td><?php echo $associationDocument['association_id']; ?></td>
			<td><?php echo $associationDocument['doc_name_id']; ?></td>
			<td><?php echo $associationDocument['note']; ?></td>
			<td><?php echo $associationDocument['selected']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'association_documents', 'action' => 'view', $associationDocument['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'association_documents', 'action' => 'edit', $associationDocument['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'association_documents', 'action' => 'delete', $associationDocument['id']), array(), __('Are you sure you want to delete # %s?', $associationDocument['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Association Document'), array('controller' => 'association_documents', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
