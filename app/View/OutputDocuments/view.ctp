<div class="outputDocuments view">
<h2><?php echo __('Output Document'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($outputDocument['OutputDocument']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Doc Template'); ?></dt>
		<dd>
			<?php echo $this->Html->link($outputDocument['DocTemplate']['id'], array('controller' => 'doc_templates', 'action' => 'view', $outputDocument['DocTemplate']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Temp Ctp'); ?></dt>
		<dd>
			<?php echo h($outputDocument['OutputDocument']['temp_ctp']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Output Document'), array('action' => 'edit', $outputDocument['OutputDocument']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Output Document'), array('action' => 'delete', $outputDocument['OutputDocument']['id']), array(), __('Are you sure you want to delete # %s?', $outputDocument['OutputDocument']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Output Documents'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Output Document'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Doc Templates'), array('controller' => 'doc_templates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doc Template'), array('controller' => 'doc_templates', 'action' => 'add')); ?> </li>
	</ul>
</div>
