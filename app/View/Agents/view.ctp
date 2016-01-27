<div class="agents view">
<h2><?php echo __('Agent'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Agent En'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['agent_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Agent Jp'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['agent_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rep Family Name En'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['rep_family_name_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rep Family Name Jp'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['rep_family_name_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rep Given Name En'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['rep_given_name_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rep Given Name Jp'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['rep_given_name_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rep Position En'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['rep_position_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rep Position Jp'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['rep_position_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rep Sex'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['rep_sex']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Establish Date'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['establish_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Capital Riel'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['capital_riel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Capital Jpy'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['capital_jpy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sales Riel'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['sales_riel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sales Jpy'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['sales_jpy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employee Num'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['employee_num']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Export En'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['export_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Export Jp'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['export_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Import En'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['import_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Import Jp'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['import_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Province'); ?></dt>
		<dd>
			<?php echo $this->Html->link($agent['Province']['id'], array('controller' => 'provinces', 'action' => 'view', $agent['Province']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('District'); ?></dt>
		<dd>
			<?php echo $this->Html->link($agent['District']['id'], array('controller' => 'districts', 'action' => 'view', $agent['District']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Commune'); ?></dt>
		<dd>
			<?php echo $this->Html->link($agent['Commune']['id'], array('controller' => 'communes', 'action' => 'view', $agent['Commune']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address Kh'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['address_kh']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address En'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['address_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone1'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['phone1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone1 Smb'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['phone1_smb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone2'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['phone2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone2 Smb'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['phone2_smb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail1'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['mail1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail1 Smb'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['mail1_smb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail2'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['mail2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail2 Smb'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['mail2_smb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sector'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['sector']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Flag'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['flag']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Agent'), array('action' => 'edit', $agent['Agent']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Agent'), array('action' => 'delete', $agent['Agent']['id']), array(), __('Are you sure you want to delete # %s?', $agent['Agent']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Agents'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Agent'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Provinces'), array('controller' => 'provinces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Province'), array('controller' => 'provinces', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Districts'), array('controller' => 'districts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New District'), array('controller' => 'districts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Communes'), array('controller' => 'communes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Commune'), array('controller' => 'communes', 'action' => 'add')); ?> </li>
	</ul>
</div>
