<div class="traineeMicrofinanceImages view">
<h2><?php echo __('Trainee Microfinance Image'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($traineeMicrofinanceImage['TraineeMicrofinanceImage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trainee'); ?></dt>
		<dd>
			<?php echo $this->Html->link($traineeMicrofinanceImage['Trainee']['id'], array('controller' => 'trainees', 'action' => 'view', $traineeMicrofinanceImage['Trainee']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Img File Name'); ?></dt>
		<dd>
			<?php echo h($traineeMicrofinanceImage['TraineeMicrofinanceImage']['img_file_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($traineeMicrofinanceImage['TraineeMicrofinanceImage']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Flag'); ?></dt>
		<dd>
			<?php echo h($traineeMicrofinanceImage['TraineeMicrofinanceImage']['flag']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Trainee Microfinance Image'), array('action' => 'edit', $traineeMicrofinanceImage['TraineeMicrofinanceImage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Trainee Microfinance Image'), array('action' => 'delete', $traineeMicrofinanceImage['TraineeMicrofinanceImage']['id']), array(), __('Are you sure you want to delete # %s?', $traineeMicrofinanceImage['TraineeMicrofinanceImage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainee Microfinance Images'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trainee Microfinance Image'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainees'), array('controller' => 'trainees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trainee'), array('controller' => 'trainees', 'action' => 'add')); ?> </li>
	</ul>
</div>
