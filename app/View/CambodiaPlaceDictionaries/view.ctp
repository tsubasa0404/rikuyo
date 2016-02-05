<div class="cambodiaPlaceDictionaries view">
<h2><?php echo __('Cambodia Place Dictionary'); ?></h2>
	<dl>
		<dt><?php echo __('Place En'); ?></dt>
		<dd>
			<?php echo h($cambodiaPlaceDictionary['CambodiaPlaceDictionary']['place_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Place Kh'); ?></dt>
		<dd>
			<?php echo h($cambodiaPlaceDictionary['CambodiaPlaceDictionary']['place_kh']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Place Jp'); ?></dt>
		<dd>
			<?php echo h($cambodiaPlaceDictionary['CambodiaPlaceDictionary']['place_jp']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cambodia Place Dictionary'), array('action' => 'edit', $cambodiaPlaceDictionary['CambodiaPlaceDictionary']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cambodia Place Dictionary'), array('action' => 'delete', $cambodiaPlaceDictionary['CambodiaPlaceDictionary']['id']), array(), __('Are you sure you want to delete # %s?', $cambodiaPlaceDictionary['CambodiaPlaceDictionary']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cambodia Place Dictionaries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cambodia Place Dictionary'), array('action' => 'add')); ?> </li>
	</ul>
</div>
