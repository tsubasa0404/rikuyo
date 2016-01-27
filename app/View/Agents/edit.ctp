<div class="agents form">
<?php echo $this->Form->create('Agent'); ?>
	<fieldset>
		<legend><?php echo __('Edit Agent'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('agent_en');
		echo $this->Form->input('agent_jp');
		echo $this->Form->input('rep_family_name_en');
		echo $this->Form->input('rep_family_name_jp');
		echo $this->Form->input('rep_given_name_en');
		echo $this->Form->input('rep_given_name_jp');
		echo $this->Form->input('rep_position_en');
		echo $this->Form->input('rep_position_jp');
		echo $this->Form->input('rep_sex');
		echo $this->Form->input('establish_date');
		echo $this->Form->input('capital_riel');
		echo $this->Form->input('capital_jpy');
		echo $this->Form->input('sales_riel');
		echo $this->Form->input('sales_jpy');
		echo $this->Form->input('employee_num');
		echo $this->Form->input('export_en');
		echo $this->Form->input('export_jp');
		echo $this->Form->input('import_en');
		echo $this->Form->input('import_jp');
		echo $this->Form->input('province_id');
		echo $this->Form->input('district_id');
		echo $this->Form->input('commune_id');
		echo $this->Form->input('address_kh');
		echo $this->Form->input('address_en');
		echo $this->Form->input('phone1');
		echo $this->Form->input('phone1_smb');
		echo $this->Form->input('phone2');
		echo $this->Form->input('phone2_smb');
		echo $this->Form->input('mail1');
		echo $this->Form->input('mail1_smb');
		echo $this->Form->input('mail2');
		echo $this->Form->input('mail2_smb');
		echo $this->Form->input('sector');
		echo $this->Form->input('note');
		echo $this->Form->input('flag');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Agent.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Agent.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Agents'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Provinces'), array('controller' => 'provinces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Province'), array('controller' => 'provinces', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Districts'), array('controller' => 'districts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New District'), array('controller' => 'districts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Communes'), array('controller' => 'communes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Commune'), array('controller' => 'communes', 'action' => 'add')); ?> </li>
	</ul>
</div>
