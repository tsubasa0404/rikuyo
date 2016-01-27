<div class="companies view">
<h2><?php echo __('Company'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($company['Company']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company Jp'); ?></dt>
		<dd>
			<?php echo h($company['Company']['company_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company En'); ?></dt>
		<dd>
			<?php echo h($company['Company']['company_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Association'); ?></dt>
		<dd>
			<?php echo $this->Html->link($company['Association']['id'], array('controller' => 'associations', 'action' => 'view', $company['Association']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rep Family Name Jp'); ?></dt>
		<dd>
			<?php echo h($company['Company']['rep_family_name_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rep Family Name En'); ?></dt>
		<dd>
			<?php echo h($company['Company']['rep_family_name_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rep Given Name Jp'); ?></dt>
		<dd>
			<?php echo h($company['Company']['rep_given_name_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rep Given Name En'); ?></dt>
		<dd>
			<?php echo h($company['Company']['rep_given_name_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Postcode'); ?></dt>
		<dd>
			<?php echo h($company['Company']['postcode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Province'); ?></dt>
		<dd>
			<?php echo h($company['Company']['province']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address Jp'); ?></dt>
		<dd>
			<?php echo h($company['Company']['address_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address En'); ?></dt>
		<dd>
			<?php echo h($company['Company']['address_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job'); ?></dt>
		<dd>
			<?php echo h($company['Company']['job']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone1'); ?></dt>
		<dd>
			<?php echo h($company['Company']['phone1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone1 Smb'); ?></dt>
		<dd>
			<?php echo h($company['Company']['phone1_smb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone2'); ?></dt>
		<dd>
			<?php echo h($company['Company']['phone2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone2 Smb'); ?></dt>
		<dd>
			<?php echo h($company['Company']['phone2_smb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone3'); ?></dt>
		<dd>
			<?php echo h($company['Company']['phone3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone3 Smb'); ?></dt>
		<dd>
			<?php echo h($company['Company']['phone3_smb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone4'); ?></dt>
		<dd>
			<?php echo h($company['Company']['phone4']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone4 Smb'); ?></dt>
		<dd>
			<?php echo h($company['Company']['phone4_smb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail1'); ?></dt>
		<dd>
			<?php echo h($company['Company']['mail1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail1 Smb'); ?></dt>
		<dd>
			<?php echo h($company['Company']['mail1_smb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail2'); ?></dt>
		<dd>
			<?php echo h($company['Company']['mail2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail2 Smb'); ?></dt>
		<dd>
			<?php echo h($company['Company']['mail2_smb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail3'); ?></dt>
		<dd>
			<?php echo h($company['Company']['mail3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail3 Smb'); ?></dt>
		<dd>
			<?php echo h($company['Company']['mail3_smb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail4'); ?></dt>
		<dd>
			<?php echo h($company['Company']['mail4']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail4 Smb'); ?></dt>
		<dd>
			<?php echo h($company['Company']['mail4_smb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($company['Company']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company Info'); ?></dt>
		<dd>
			<?php echo h($company['Company']['company_info']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($company['Company']['note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Flag'); ?></dt>
		<dd>
			<?php echo h($company['Company']['flag']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Company'), array('action' => 'edit', $company['Company']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Company'), array('action' => 'delete', $company['Company']['id']), array(), __('Are you sure you want to delete # %s?', $company['Company']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Associations'), array('controller' => 'associations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Association'), array('controller' => 'associations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inspections'), array('controller' => 'inspections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inspection'), array('controller' => 'inspections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interviews'), array('controller' => 'interviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interview'), array('controller' => 'interviews', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Inspections'); ?></h3>
	<?php if (!empty($company['Inspection'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Association Id'); ?></th>
		<th><?php echo __('Company Id'); ?></th>
		<th><?php echo __('Smb'); ?></th>
		<th><?php echo __('Staff'); ?></th>
		<th><?php echo __('From'); ?></th>
		<th><?php echo __('To'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th><?php echo __('Flag'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($company['Inspection'] as $inspection): ?>
		<tr>
			<td><?php echo $inspection['id']; ?></td>
			<td><?php echo $inspection['association_id']; ?></td>
			<td><?php echo $inspection['company_id']; ?></td>
			<td><?php echo $inspection['smb']; ?></td>
			<td><?php echo $inspection['staff']; ?></td>
			<td><?php echo $inspection['from']; ?></td>
			<td><?php echo $inspection['to']; ?></td>
			<td><?php echo $inspection['note']; ?></td>
			<td><?php echo $inspection['flag']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'inspections', 'action' => 'view', $inspection['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'inspections', 'action' => 'edit', $inspection['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'inspections', 'action' => 'delete', $inspection['id']), array(), __('Are you sure you want to delete # %s?', $inspection['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Inspection'), array('controller' => 'inspections', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Interviews'); ?></h3>
	<?php if (!empty($company['Interview'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Company Id'); ?></th>
		<th><?php echo __('Job'); ?></th>
		<th><?php echo __('Work Place'); ?></th>
		<th><?php echo __('Company Info'); ?></th>
		<th><?php echo __('Work Content'); ?></th>
		<th><?php echo __('Work Schedule'); ?></th>
		<th><?php echo __('Adoption Num'); ?></th>
		<th><?php echo __('Sex'); ?></th>
		<th><?php echo __('Age'); ?></th>
		<th><?php echo __('Hourly Wage'); ?></th>
		<th><?php echo __('Basic Wage'); ?></th>
		<th><?php echo __('Deduction'); ?></th>
		<th><?php echo __('Breakdown'); ?></th>
		<th><?php echo __('Employment Insurance'); ?></th>
		<th><?php echo __('Social Insurance'); ?></th>
		<th><?php echo __('Boarding Fee'); ?></th>
		<th><?php echo __('Utility Cost'); ?></th>
		<th><?php echo __('Take Home'); ?></th>
		<th><?php echo __('Wage Note'); ?></th>
		<th><?php echo __('Request'); ?></th>
		<th><?php echo __('Immigration Time'); ?></th>
		<th><?php echo __('Start Time'); ?></th>
		<th><?php echo __('Interview Date'); ?></th>
		<th><?php echo __('Interview Time'); ?></th>
		<th><?php echo __('Interview Place'); ?></th>
		<th><?php echo __('Interview Detail'); ?></th>
		<th><?php echo __('Interview Staff'); ?></th>
		<th><?php echo __('Flag'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($company['Interview'] as $interview): ?>
		<tr>
			<td><?php echo $interview['id']; ?></td>
			<td><?php echo $interview['company_id']; ?></td>
			<td><?php echo $interview['job']; ?></td>
			<td><?php echo $interview['work_place']; ?></td>
			<td><?php echo $interview['company_info']; ?></td>
			<td><?php echo $interview['work_content']; ?></td>
			<td><?php echo $interview['work_schedule']; ?></td>
			<td><?php echo $interview['adoption_num']; ?></td>
			<td><?php echo $interview['sex']; ?></td>
			<td><?php echo $interview['age']; ?></td>
			<td><?php echo $interview['hourly_wage']; ?></td>
			<td><?php echo $interview['basic_wage']; ?></td>
			<td><?php echo $interview['deduction']; ?></td>
			<td><?php echo $interview['breakdown']; ?></td>
			<td><?php echo $interview['employment_insurance']; ?></td>
			<td><?php echo $interview['social_insurance']; ?></td>
			<td><?php echo $interview['boarding_fee']; ?></td>
			<td><?php echo $interview['utility_cost']; ?></td>
			<td><?php echo $interview['take_home']; ?></td>
			<td><?php echo $interview['wage_note']; ?></td>
			<td><?php echo $interview['request']; ?></td>
			<td><?php echo $interview['immigration_time']; ?></td>
			<td><?php echo $interview['start_time']; ?></td>
			<td><?php echo $interview['interview_date']; ?></td>
			<td><?php echo $interview['interview_time']; ?></td>
			<td><?php echo $interview['interview_place']; ?></td>
			<td><?php echo $interview['interview_detail']; ?></td>
			<td><?php echo $interview['interview_staff']; ?></td>
			<td><?php echo $interview['flag']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'interviews', 'action' => 'view', $interview['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'interviews', 'action' => 'edit', $interview['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'interviews', 'action' => 'delete', $interview['id']), array(), __('Are you sure you want to delete # %s?', $interview['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Interview'), array('controller' => 'interviews', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
