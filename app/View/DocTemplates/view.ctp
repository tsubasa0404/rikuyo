<div class="docTemplates view">
<h2><?php echo __('Doc Template'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($docTemplate['DocTemplate']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Doc Name'); ?></dt>
		<dd>
			<?php echo $this->Html->link($docTemplate['DocName']['id'], array('controller' => 'doc_names', 'action' => 'view', $docTemplate['DocName']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Img File Name'); ?></dt>
		<dd>
			<?php echo h($docTemplate['DocTemplate']['img_file_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lang'); ?></dt>
		<dd>
			<?php echo h($docTemplate['DocTemplate']['lang']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($docTemplate['DocTemplate']['note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($docTemplate['DocTemplate']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($docTemplate['DocTemplate']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Doc Template'), array('action' => 'edit', $docTemplate['DocTemplate']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Doc Template'), array('action' => 'delete', $docTemplate['DocTemplate']['id']), array(), __('Are you sure you want to delete # %s?', $docTemplate['DocTemplate']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Doc Templates'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doc Template'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Doc Names'), array('controller' => 'doc_names', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doc Name'), array('controller' => 'doc_names', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Output Documents'), array('controller' => 'output_documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Output Document'), array('controller' => 'output_documents', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Output Documents'); ?></h3>
	<?php if (!empty($docTemplate['OutputDocument'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Doc Template Id'); ?></th>
		<th><?php echo __('Temp Ctp'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($docTemplate['OutputDocument'] as $outputDocument): ?>
		<tr>
			<td><?php echo $outputDocument['id']; ?></td>
			<td><?php echo $outputDocument['doc_template_id']; ?></td>
			<td><?php echo $outputDocument['temp_ctp']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'output_documents', 'action' => 'view', $outputDocument['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'output_documents', 'action' => 'edit', $outputDocument['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'output_documents', 'action' => 'delete', $outputDocument['id']), array(), __('Are you sure you want to delete # %s?', $outputDocument['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Output Document'), array('controller' => 'output_documents', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
