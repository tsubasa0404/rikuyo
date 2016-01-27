<div class="districts view">
<h2><?php echo __('District'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($district['District']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Province'); ?></dt>
		<dd>
			<?php echo $this->Html->link($district['Province']['id'], array('controller' => 'provinces', 'action' => 'view', $district['Province']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('District En'); ?></dt>
		<dd>
			<?php echo h($district['District']['district_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('District Jp'); ?></dt>
		<dd>
			<?php echo h($district['District']['district_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('District Kh'); ?></dt>
		<dd>
			<?php echo h($district['District']['district_kh']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit District'), array('action' => 'edit', $district['District']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete District'), array('action' => 'delete', $district['District']['id']), array(), __('Are you sure you want to delete # %s?', $district['District']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Districts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New District'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Provinces'), array('controller' => 'provinces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Province'), array('controller' => 'provinces', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Agents'), array('controller' => 'agents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Agent'), array('controller' => 'agents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Communes'), array('controller' => 'communes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Commune'), array('controller' => 'communes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainees'), array('controller' => 'trainees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trainee'), array('controller' => 'trainees', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Agents'); ?></h3>
	<?php if (!empty($district['Agent'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Agent En'); ?></th>
		<th><?php echo __('Agent Jp'); ?></th>
		<th><?php echo __('Rep Family Name En'); ?></th>
		<th><?php echo __('Rep Family Name Jp'); ?></th>
		<th><?php echo __('Rep Given Name En'); ?></th>
		<th><?php echo __('Rep Given Name Jp'); ?></th>
		<th><?php echo __('Rep Position En'); ?></th>
		<th><?php echo __('Rep Position Jp'); ?></th>
		<th><?php echo __('Rep Sex'); ?></th>
		<th><?php echo __('Establish Date'); ?></th>
		<th><?php echo __('Capital Riel'); ?></th>
		<th><?php echo __('Capital Jpy'); ?></th>
		<th><?php echo __('Sales Riel'); ?></th>
		<th><?php echo __('Sales Jpy'); ?></th>
		<th><?php echo __('Employee Num'); ?></th>
		<th><?php echo __('Export En'); ?></th>
		<th><?php echo __('Export Jp'); ?></th>
		<th><?php echo __('Import En'); ?></th>
		<th><?php echo __('Import Jp'); ?></th>
		<th><?php echo __('Province Id'); ?></th>
		<th><?php echo __('District Id'); ?></th>
		<th><?php echo __('Commune Id'); ?></th>
		<th><?php echo __('Address Kh'); ?></th>
		<th><?php echo __('Address En'); ?></th>
		<th><?php echo __('Phone1'); ?></th>
		<th><?php echo __('Phone1 Smb'); ?></th>
		<th><?php echo __('Phone2'); ?></th>
		<th><?php echo __('Phone2 Smb'); ?></th>
		<th><?php echo __('Mail1'); ?></th>
		<th><?php echo __('Mail1 Smb'); ?></th>
		<th><?php echo __('Mail2'); ?></th>
		<th><?php echo __('Mail2 Smb'); ?></th>
		<th><?php echo __('Sector'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th><?php echo __('Flag'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($district['Agent'] as $agent): ?>
		<tr>
			<td><?php echo $agent['id']; ?></td>
			<td><?php echo $agent['agent_en']; ?></td>
			<td><?php echo $agent['agent_jp']; ?></td>
			<td><?php echo $agent['rep_family_name_en']; ?></td>
			<td><?php echo $agent['rep_family_name_jp']; ?></td>
			<td><?php echo $agent['rep_given_name_en']; ?></td>
			<td><?php echo $agent['rep_given_name_jp']; ?></td>
			<td><?php echo $agent['rep_position_en']; ?></td>
			<td><?php echo $agent['rep_position_jp']; ?></td>
			<td><?php echo $agent['rep_sex']; ?></td>
			<td><?php echo $agent['establish_date']; ?></td>
			<td><?php echo $agent['capital_riel']; ?></td>
			<td><?php echo $agent['capital_jpy']; ?></td>
			<td><?php echo $agent['sales_riel']; ?></td>
			<td><?php echo $agent['sales_jpy']; ?></td>
			<td><?php echo $agent['employee_num']; ?></td>
			<td><?php echo $agent['export_en']; ?></td>
			<td><?php echo $agent['export_jp']; ?></td>
			<td><?php echo $agent['import_en']; ?></td>
			<td><?php echo $agent['import_jp']; ?></td>
			<td><?php echo $agent['province_id']; ?></td>
			<td><?php echo $agent['district_id']; ?></td>
			<td><?php echo $agent['commune_id']; ?></td>
			<td><?php echo $agent['address_kh']; ?></td>
			<td><?php echo $agent['address_en']; ?></td>
			<td><?php echo $agent['phone1']; ?></td>
			<td><?php echo $agent['phone1_smb']; ?></td>
			<td><?php echo $agent['phone2']; ?></td>
			<td><?php echo $agent['phone2_smb']; ?></td>
			<td><?php echo $agent['mail1']; ?></td>
			<td><?php echo $agent['mail1_smb']; ?></td>
			<td><?php echo $agent['mail2']; ?></td>
			<td><?php echo $agent['mail2_smb']; ?></td>
			<td><?php echo $agent['sector']; ?></td>
			<td><?php echo $agent['note']; ?></td>
			<td><?php echo $agent['flag']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'agents', 'action' => 'view', $agent['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'agents', 'action' => 'edit', $agent['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'agents', 'action' => 'delete', $agent['id']), array(), __('Are you sure you want to delete # %s?', $agent['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Agent'), array('controller' => 'agents', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Communes'); ?></h3>
	<?php if (!empty($district['Commune'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('District Id'); ?></th>
		<th><?php echo __('Commune En'); ?></th>
		<th><?php echo __('Commune Jp'); ?></th>
		<th><?php echo __('Commune Kh'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($district['Commune'] as $commune): ?>
		<tr>
			<td><?php echo $commune['id']; ?></td>
			<td><?php echo $commune['district_id']; ?></td>
			<td><?php echo $commune['commune_en']; ?></td>
			<td><?php echo $commune['commune_jp']; ?></td>
			<td><?php echo $commune['commune_kh']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'communes', 'action' => 'view', $commune['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'communes', 'action' => 'edit', $commune['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'communes', 'action' => 'delete', $commune['id']), array(), __('Are you sure you want to delete # %s?', $commune['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Commune'), array('controller' => 'communes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Trainees'); ?></h3>
	<?php if (!empty($district['Trainee'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Control No'); ?></th>
		<th><?php echo __('Family Name En'); ?></th>
		<th><?php echo __('Family Name Jp'); ?></th>
		<th><?php echo __('Family Name Kh'); ?></th>
		<th><?php echo __('Given Name En'); ?></th>
		<th><?php echo __('Given Name Jp'); ?></th>
		<th><?php echo __('Given Name Kh'); ?></th>
		<th><?php echo __('Sex'); ?></th>
		<th><?php echo __('Birthday'); ?></th>
		<th><?php echo __('Height'); ?></th>
		<th><?php echo __('Weight'); ?></th>
		<th><?php echo __('Face Feature En'); ?></th>
		<th><?php echo __('Face Feature Jp'); ?></th>
		<th><?php echo __('Face Feature Kh'); ?></th>
		<th><?php echo __('Shoe Size'); ?></th>
		<th><?php echo __('Married'); ?></th>
		<th><?php echo __('Families En'); ?></th>
		<th><?php echo __('Families Jp'); ?></th>
		<th><?php echo __('Province Id'); ?></th>
		<th><?php echo __('District Id'); ?></th>
		<th><?php echo __('Commune Id'); ?></th>
		<th><?php echo __('Address En'); ?></th>
		<th><?php echo __('Address Jp'); ?></th>
		<th><?php echo __('Address Kh'); ?></th>
		<th><?php echo __('Birthplace Province Id'); ?></th>
		<th><?php echo __('Birthplace District Id'); ?></th>
		<th><?php echo __('Birthplace Commune Id'); ?></th>
		<th><?php echo __('Birthplace Address En'); ?></th>
		<th><?php echo __('Birthplace Address Jp'); ?></th>
		<th><?php echo __('Birthplace Address Kh'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Handed'); ?></th>
		<th><?php echo __('Academic1 En'); ?></th>
		<th><?php echo __('Academic1 From'); ?></th>
		<th><?php echo __('Academic1 To'); ?></th>
		<th><?php echo __('Academic1 Jp'); ?></th>
		<th><?php echo __('Academic1 Kh'); ?></th>
		<th><?php echo __('Academic2 En'); ?></th>
		<th><?php echo __('Academic2 From'); ?></th>
		<th><?php echo __('Academic2 To'); ?></th>
		<th><?php echo __('Academic2 Jp'); ?></th>
		<th><?php echo __('Academic2 Kh'); ?></th>
		<th><?php echo __('Academic3 En'); ?></th>
		<th><?php echo __('Academic3 From'); ?></th>
		<th><?php echo __('Academic3 To'); ?></th>
		<th><?php echo __('Academic3 Jp'); ?></th>
		<th><?php echo __('Academic3 Kh'); ?></th>
		<th><?php echo __('Academic4 En'); ?></th>
		<th><?php echo __('Academic4 From'); ?></th>
		<th><?php echo __('Academic4 To'); ?></th>
		<th><?php echo __('Academic4 Jp'); ?></th>
		<th><?php echo __('Academic4 Kh'); ?></th>
		<th><?php echo __('Employ1 En'); ?></th>
		<th><?php echo __('Employ1 From'); ?></th>
		<th><?php echo __('Employ1 To'); ?></th>
		<th><?php echo __('Employ1 Jp'); ?></th>
		<th><?php echo __('Employ1 Kh'); ?></th>
		<th><?php echo __('Employ1 Job'); ?></th>
		<th><?php echo __('Employ1 Salary'); ?></th>
		<th><?php echo __('Employ2 En'); ?></th>
		<th><?php echo __('Employ2 From'); ?></th>
		<th><?php echo __('Employ2 To'); ?></th>
		<th><?php echo __('Employ2 Jp'); ?></th>
		<th><?php echo __('Employ2 Kh'); ?></th>
		<th><?php echo __('Employ2 Job'); ?></th>
		<th><?php echo __('Employ2 Salary'); ?></th>
		<th><?php echo __('Employ3 En'); ?></th>
		<th><?php echo __('Employ3 From'); ?></th>
		<th><?php echo __('Employ3 To'); ?></th>
		<th><?php echo __('Employ3 Jp'); ?></th>
		<th><?php echo __('Employ3 Kh'); ?></th>
		<th><?php echo __('Employ3 Job'); ?></th>
		<th><?php echo __('Employ3 Salary'); ?></th>
		<th><?php echo __('Employ4 En'); ?></th>
		<th><?php echo __('Employ4 From'); ?></th>
		<th><?php echo __('Employ4 To'); ?></th>
		<th><?php echo __('Employ4 Jp'); ?></th>
		<th><?php echo __('Employ4 Kh'); ?></th>
		<th><?php echo __('Employ4 Job'); ?></th>
		<th><?php echo __('Employ4 Salary'); ?></th>
		<th><?php echo __('Employ5 En'); ?></th>
		<th><?php echo __('Employ5 From'); ?></th>
		<th><?php echo __('Employ5 To'); ?></th>
		<th><?php echo __('Employ5 Jp'); ?></th>
		<th><?php echo __('Employ5 Kh'); ?></th>
		<th><?php echo __('Employ5 Job'); ?></th>
		<th><?php echo __('Employ5 Salary'); ?></th>
		<th><?php echo __('Job1 Id'); ?></th>
		<th><?php echo __('Job1 Term'); ?></th>
		<th><?php echo __('Job2 Id'); ?></th>
		<th><?php echo __('Job2 Term'); ?></th>
		<th><?php echo __('English'); ?></th>
		<th><?php echo __('Lang Others En'); ?></th>
		<th><?php echo __('Lang Others Jp'); ?></th>
		<th><?php echo __('Visit Jpn'); ?></th>
		<th><?php echo __('Visit Jpn From'); ?></th>
		<th><?php echo __('Visit Jpn To'); ?></th>
		<th><?php echo __('Facebook'); ?></th>
		<th><?php echo __('Religious En'); ?></th>
		<th><?php echo __('Religious Jp'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Medicalchk Status Id'); ?></th>
		<th><?php echo __('Medicalchk Note'); ?></th>
		<th><?php echo __('Idcard Status Id'); ?></th>
		<th><?php echo __('Idcard Note'); ?></th>
		<th><?php echo __('Fb'); ?></th>
		<th><?php echo __('Rb'); ?></th>
		<th><?php echo __('Cb'); ?></th>
		<th><?php echo __('Passport Status Id'); ?></th>
		<th><?php echo __('Passport Note'); ?></th>
		<th><?php echo __('Coe Status Id'); ?></th>
		<th><?php echo __('Coe Note'); ?></th>
		<th><?php echo __('Immigration Status Id'); ?></th>
		<th><?php echo __('Immigration Note'); ?></th>
		<th><?php echo __('Labor Ministry Status Id'); ?></th>
		<th><?php echo __('Labor Ministry Note'); ?></th>
		<th><?php echo __('Departure Date'); ?></th>
		<th><?php echo __('Departure Status Id'); ?></th>
		<th><?php echo __('Return Date'); ?></th>
		<th><?php echo __('Return Status Id'); ?></th>
		<th><?php echo __('Class Id'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th><?php echo __('Flag'); ?></th>
		<th><?php echo __('Health'); ?></th>
		<th><?php echo __('Blood Type'); ?></th>
		<th><?php echo __('Brother Cnt'); ?></th>
		<th><?php echo __('Brother Index'); ?></th>
		<th><?php echo __('Eyesight Left'); ?></th>
		<th><?php echo __('Eyesight Right'); ?></th>
		<th><?php echo __('Color Blindness'); ?></th>
		<th><?php echo __('District Part'); ?></th>
		<th><?php echo __('Tatoo'); ?></th>
		<th><?php echo __('Tabacco'); ?></th>
		<th><?php echo __('Drink'); ?></th>
		<th><?php echo __('Experience Group Life'); ?></th>
		<th><?php echo __('Good Point Jp'); ?></th>
		<th><?php echo __('Good Point En'); ?></th>
		<th><?php echo __('Hobby Jp'); ?></th>
		<th><?php echo __('Hobby En'); ?></th>
		<th><?php echo __('Character Jp'); ?></th>
		<th><?php echo __('Character En'); ?></th>
		<th><?php echo __('Specialty Jp'); ?></th>
		<th><?php echo __('Specialty En'); ?></th>
		<th><?php echo __('Purpose Jp'); ?></th>
		<th><?php echo __('Purpose En'); ?></th>
		<th><?php echo __('Plan After Return Jp'); ?></th>
		<th><?php echo __('Plan After Return En'); ?></th>
		<th><?php echo __('Saving Money'); ?></th>
		<th><?php echo __('Family In Jpn'); ?></th>
		<th><?php echo __('Family In Jpn Relationship Jp'); ?></th>
		<th><?php echo __('Family In Jpn Relationship En'); ?></th>
		<th><?php echo __('Family Permission'); ?></th>
		<th><?php echo __('Id Number'); ?></th>
		<th><?php echo __('Introduced From'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($district['Trainee'] as $trainee): ?>
		<tr>
			<td><?php echo $trainee['id']; ?></td>
			<td><?php echo $trainee['control_no']; ?></td>
			<td><?php echo $trainee['family_name_en']; ?></td>
			<td><?php echo $trainee['family_name_jp']; ?></td>
			<td><?php echo $trainee['family_name_kh']; ?></td>
			<td><?php echo $trainee['given_name_en']; ?></td>
			<td><?php echo $trainee['given_name_jp']; ?></td>
			<td><?php echo $trainee['given_name_kh']; ?></td>
			<td><?php echo $trainee['sex']; ?></td>
			<td><?php echo $trainee['birthday']; ?></td>
			<td><?php echo $trainee['height']; ?></td>
			<td><?php echo $trainee['weight']; ?></td>
			<td><?php echo $trainee['face_feature_en']; ?></td>
			<td><?php echo $trainee['face_feature_jp']; ?></td>
			<td><?php echo $trainee['face_feature_kh']; ?></td>
			<td><?php echo $trainee['shoe_size']; ?></td>
			<td><?php echo $trainee['married']; ?></td>
			<td><?php echo $trainee['families_en']; ?></td>
			<td><?php echo $trainee['families_jp']; ?></td>
			<td><?php echo $trainee['province_id']; ?></td>
			<td><?php echo $trainee['district_id']; ?></td>
			<td><?php echo $trainee['commune_id']; ?></td>
			<td><?php echo $trainee['address_en']; ?></td>
			<td><?php echo $trainee['address_jp']; ?></td>
			<td><?php echo $trainee['address_kh']; ?></td>
			<td><?php echo $trainee['birthplace_province_id']; ?></td>
			<td><?php echo $trainee['birthplace_district_id']; ?></td>
			<td><?php echo $trainee['birthplace_commune_id']; ?></td>
			<td><?php echo $trainee['birthplace_address_en']; ?></td>
			<td><?php echo $trainee['birthplace_address_jp']; ?></td>
			<td><?php echo $trainee['birthplace_address_kh']; ?></td>
			<td><?php echo $trainee['phone']; ?></td>
			<td><?php echo $trainee['handed']; ?></td>
			<td><?php echo $trainee['academic1_en']; ?></td>
			<td><?php echo $trainee['academic1_from']; ?></td>
			<td><?php echo $trainee['academic1_to']; ?></td>
			<td><?php echo $trainee['academic1_jp']; ?></td>
			<td><?php echo $trainee['academic1_kh']; ?></td>
			<td><?php echo $trainee['academic2_en']; ?></td>
			<td><?php echo $trainee['academic2_from']; ?></td>
			<td><?php echo $trainee['academic2_to']; ?></td>
			<td><?php echo $trainee['academic2_jp']; ?></td>
			<td><?php echo $trainee['academic2_kh']; ?></td>
			<td><?php echo $trainee['academic3_en']; ?></td>
			<td><?php echo $trainee['academic3_from']; ?></td>
			<td><?php echo $trainee['academic3_to']; ?></td>
			<td><?php echo $trainee['academic3_jp']; ?></td>
			<td><?php echo $trainee['academic3_kh']; ?></td>
			<td><?php echo $trainee['academic4_en']; ?></td>
			<td><?php echo $trainee['academic4_from']; ?></td>
			<td><?php echo $trainee['academic4_to']; ?></td>
			<td><?php echo $trainee['academic4_jp']; ?></td>
			<td><?php echo $trainee['academic4_kh']; ?></td>
			<td><?php echo $trainee['employ1_en']; ?></td>
			<td><?php echo $trainee['employ1_from']; ?></td>
			<td><?php echo $trainee['employ1_to']; ?></td>
			<td><?php echo $trainee['employ1_jp']; ?></td>
			<td><?php echo $trainee['employ1_kh']; ?></td>
			<td><?php echo $trainee['employ1_job']; ?></td>
			<td><?php echo $trainee['employ1_salary']; ?></td>
			<td><?php echo $trainee['employ2_en']; ?></td>
			<td><?php echo $trainee['employ2_from']; ?></td>
			<td><?php echo $trainee['employ2_to']; ?></td>
			<td><?php echo $trainee['employ2_jp']; ?></td>
			<td><?php echo $trainee['employ2_kh']; ?></td>
			<td><?php echo $trainee['employ2_job']; ?></td>
			<td><?php echo $trainee['employ2_salary']; ?></td>
			<td><?php echo $trainee['employ3_en']; ?></td>
			<td><?php echo $trainee['employ3_from']; ?></td>
			<td><?php echo $trainee['employ3_to']; ?></td>
			<td><?php echo $trainee['employ3_jp']; ?></td>
			<td><?php echo $trainee['employ3_kh']; ?></td>
			<td><?php echo $trainee['employ3_job']; ?></td>
			<td><?php echo $trainee['employ3_salary']; ?></td>
			<td><?php echo $trainee['employ4_en']; ?></td>
			<td><?php echo $trainee['employ4_from']; ?></td>
			<td><?php echo $trainee['employ4_to']; ?></td>
			<td><?php echo $trainee['employ4_jp']; ?></td>
			<td><?php echo $trainee['employ4_kh']; ?></td>
			<td><?php echo $trainee['employ4_job']; ?></td>
			<td><?php echo $trainee['employ4_salary']; ?></td>
			<td><?php echo $trainee['employ5_en']; ?></td>
			<td><?php echo $trainee['employ5_from']; ?></td>
			<td><?php echo $trainee['employ5_to']; ?></td>
			<td><?php echo $trainee['employ5_jp']; ?></td>
			<td><?php echo $trainee['employ5_kh']; ?></td>
			<td><?php echo $trainee['employ5_job']; ?></td>
			<td><?php echo $trainee['employ5_salary']; ?></td>
			<td><?php echo $trainee['job1_id']; ?></td>
			<td><?php echo $trainee['job1_term']; ?></td>
			<td><?php echo $trainee['job2_id']; ?></td>
			<td><?php echo $trainee['job2_term']; ?></td>
			<td><?php echo $trainee['english']; ?></td>
			<td><?php echo $trainee['lang_others_en']; ?></td>
			<td><?php echo $trainee['lang_others_jp']; ?></td>
			<td><?php echo $trainee['visit_jpn']; ?></td>
			<td><?php echo $trainee['visit_jpn_from']; ?></td>
			<td><?php echo $trainee['visit_jpn_to']; ?></td>
			<td><?php echo $trainee['facebook']; ?></td>
			<td><?php echo $trainee['religious_en']; ?></td>
			<td><?php echo $trainee['religious_jp']; ?></td>
			<td><?php echo $trainee['created']; ?></td>
			<td><?php echo $trainee['modified']; ?></td>
			<td><?php echo $trainee['medicalchk_status_id']; ?></td>
			<td><?php echo $trainee['medicalchk_note']; ?></td>
			<td><?php echo $trainee['idcard_status_id']; ?></td>
			<td><?php echo $trainee['idcard_note']; ?></td>
			<td><?php echo $trainee['fb']; ?></td>
			<td><?php echo $trainee['rb']; ?></td>
			<td><?php echo $trainee['cb']; ?></td>
			<td><?php echo $trainee['passport_status_id']; ?></td>
			<td><?php echo $trainee['passport_note']; ?></td>
			<td><?php echo $trainee['coe_status_id']; ?></td>
			<td><?php echo $trainee['coe_note']; ?></td>
			<td><?php echo $trainee['immigration_status_id']; ?></td>
			<td><?php echo $trainee['immigration_note']; ?></td>
			<td><?php echo $trainee['labor_ministry_status_id']; ?></td>
			<td><?php echo $trainee['labor_ministry_note']; ?></td>
			<td><?php echo $trainee['departure_date']; ?></td>
			<td><?php echo $trainee['departure_status_id']; ?></td>
			<td><?php echo $trainee['return_date']; ?></td>
			<td><?php echo $trainee['return_status_id']; ?></td>
			<td><?php echo $trainee['class_id']; ?></td>
			<td><?php echo $trainee['note']; ?></td>
			<td><?php echo $trainee['flag']; ?></td>
			<td><?php echo $trainee['health']; ?></td>
			<td><?php echo $trainee['blood_type']; ?></td>
			<td><?php echo $trainee['brother_cnt']; ?></td>
			<td><?php echo $trainee['brother_index']; ?></td>
			<td><?php echo $trainee['eyesight_left']; ?></td>
			<td><?php echo $trainee['eyesight_right']; ?></td>
			<td><?php echo $trainee['color_blindness']; ?></td>
			<td><?php echo $trainee['district_part']; ?></td>
			<td><?php echo $trainee['tatoo']; ?></td>
			<td><?php echo $trainee['tabacco']; ?></td>
			<td><?php echo $trainee['drink']; ?></td>
			<td><?php echo $trainee['experience_group_life']; ?></td>
			<td><?php echo $trainee['good_point_jp']; ?></td>
			<td><?php echo $trainee['good_point_en']; ?></td>
			<td><?php echo $trainee['hobby_jp']; ?></td>
			<td><?php echo $trainee['hobby_en']; ?></td>
			<td><?php echo $trainee['character_jp']; ?></td>
			<td><?php echo $trainee['character_en']; ?></td>
			<td><?php echo $trainee['specialty_jp']; ?></td>
			<td><?php echo $trainee['specialty_en']; ?></td>
			<td><?php echo $trainee['purpose_jp']; ?></td>
			<td><?php echo $trainee['purpose_en']; ?></td>
			<td><?php echo $trainee['plan_after_return_jp']; ?></td>
			<td><?php echo $trainee['plan_after_return_en']; ?></td>
			<td><?php echo $trainee['saving_money']; ?></td>
			<td><?php echo $trainee['family_in_jpn']; ?></td>
			<td><?php echo $trainee['family_in_jpn_relationship_jp']; ?></td>
			<td><?php echo $trainee['family_in_jpn_relationship_en']; ?></td>
			<td><?php echo $trainee['family_permission']; ?></td>
			<td><?php echo $trainee['id_number']; ?></td>
			<td><?php echo $trainee['introduced_from']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'trainees', 'action' => 'view', $trainee['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'trainees', 'action' => 'edit', $trainee['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'trainees', 'action' => 'delete', $trainee['id']), array(), __('Are you sure you want to delete # %s?', $trainee['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Trainee'), array('controller' => 'trainees', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
