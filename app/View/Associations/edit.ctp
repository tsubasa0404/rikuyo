<div class="associations form">
<?php echo $this->Form->create('Association'); ?>
	<fieldset>
		<legend><?php echo __('Edit Association'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('association_jp');
		echo $this->Form->input('association_en');
		echo $this->Form->input('rep_family_name_jp');
		echo $this->Form->input('rep_family_name_en');
		echo $this->Form->input('rep_given_name_jp');
		echo $this->Form->input('rep_given_name_en');
		echo $this->Form->input('postcode');
		echo $this->Form->input('province');
		echo $this->Form->input('address_jp');
		echo $this->Form->input('address_en');
		echo $this->Form->input('sector');
		echo $this->Form->input('phone1');
		echo $this->Form->input('phone1_smb');
		echo $this->Form->input('phone2');
		echo $this->Form->input('phone2_smb');
		echo $this->Form->input('phone3');
		echo $this->Form->input('phone3_smb');
		echo $this->Form->input('phone4');
		echo $this->Form->input('phone4_smb');
		echo $this->Form->input('mail1');
		echo $this->Form->input('mail1_smb');
		echo $this->Form->input('mail2');
		echo $this->Form->input('mail2_smb');
		echo $this->Form->input('mail3');
		echo $this->Form->input('mail3_smb');
		echo $this->Form->input('mail4');
		echo $this->Form->input('mail4_smb');
		echo $this->Form->input('note');
		echo $this->Form->input('flag');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Association.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Association.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Associations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Association Documents'), array('controller' => 'association_documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Association Document'), array('controller' => 'association_documents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inspections'), array('controller' => 'inspections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inspection'), array('controller' => 'inspections', 'action' => 'add')); ?> </li>
	</ul>
</div>
