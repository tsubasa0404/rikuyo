<div class="interviews view">
<h2><?php echo __('Interview'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($interview['Interview']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo $this->Html->link($interview['Company']['id'], array('controller' => 'companies', 'action' => 'view', $interview['Company']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job'); ?></dt>
		<dd>
			<?php echo h($interview['Interview']['job']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Work Place'); ?></dt>
		<dd>
			<?php echo h($interview['Interview']['work_place']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company Info'); ?></dt>
		<dd>
			<?php echo h($interview['Interview']['company_info']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Work Content'); ?></dt>
		<dd>
			<?php echo h($interview['Interview']['work_content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Work Schedule'); ?></dt>
		<dd>
			<?php echo h($interview['Interview']['work_schedule']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adoption Num'); ?></dt>
		<dd>
			<?php echo h($interview['Interview']['adoption_num']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sex'); ?></dt>
		<dd>
			<?php echo h($interview['Interview']['sex']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Age'); ?></dt>
		<dd>
			<?php echo h($interview['Interview']['age']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hourly Wage'); ?></dt>
		<dd>
			<?php echo h($interview['Interview']['hourly_wage']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Basic Wage'); ?></dt>
		<dd>
			<?php echo h($interview['Interview']['basic_wage']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deduction'); ?></dt>
		<dd>
			<?php echo h($interview['Interview']['deduction']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Breakdown'); ?></dt>
		<dd>
			<?php echo h($interview['Interview']['breakdown']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employment Insurance'); ?></dt>
		<dd>
			<?php echo h($interview['Interview']['employment_insurance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Social Insurance'); ?></dt>
		<dd>
			<?php echo h($interview['Interview']['social_insurance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Boarding Fee'); ?></dt>
		<dd>
			<?php echo h($interview['Interview']['boarding_fee']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Utility Cost'); ?></dt>
		<dd>
			<?php echo h($interview['Interview']['utility_cost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Take Home'); ?></dt>
		<dd>
			<?php echo h($interview['Interview']['take_home']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Wage Note'); ?></dt>
		<dd>
			<?php echo h($interview['Interview']['wage_note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Request'); ?></dt>
		<dd>
			<?php echo h($interview['Interview']['request']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Immigration Time'); ?></dt>
		<dd>
			<?php echo h($interview['Interview']['immigration_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Time'); ?></dt>
		<dd>
			<?php echo h($interview['Interview']['start_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Interview Date'); ?></dt>
		<dd>
			<?php echo h($interview['Interview']['interview_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Interview Time'); ?></dt>
		<dd>
			<?php echo h($interview['Interview']['interview_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Interview Place'); ?></dt>
		<dd>
			<?php echo h($interview['Interview']['interview_place']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Interview Detail'); ?></dt>
		<dd>
			<?php echo h($interview['Interview']['interview_detail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Interview Staff'); ?></dt>
		<dd>
			<?php echo h($interview['Interview']['interview_staff']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Flag'); ?></dt>
		<dd>
			<?php echo h($interview['Interview']['flag']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Interview'), array('action' => 'edit', $interview['Interview']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Interview'), array('action' => 'delete', $interview['Interview']['id']), array(), __('Are you sure you want to delete # %s?', $interview['Interview']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Interviews'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interview'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interview Candidates'), array('controller' => 'interview_candidates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interview Candidate'), array('controller' => 'interview_candidates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interview Doc Status Lists'), array('controller' => 'interview_doc_status_lists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interview Doc Status List'), array('controller' => 'interview_doc_status_lists', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Interview Candidates'); ?></h3>
	<?php if (!empty($interview['InterviewCandidate'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Interview Id'); ?></th>
		<th><?php echo __('Trainee Id'); ?></th>
		<th><?php echo __('Interview Result Id'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($interview['InterviewCandidate'] as $interviewCandidate): ?>
		<tr>
			<td><?php echo $interviewCandidate['id']; ?></td>
			<td><?php echo $interviewCandidate['interview_id']; ?></td>
			<td><?php echo $interviewCandidate['trainee_id']; ?></td>
			<td><?php echo $interviewCandidate['interview_result_id']; ?></td>
			<td><?php echo $interviewCandidate['note']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'interview_candidates', 'action' => 'view', $interviewCandidate['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'interview_candidates', 'action' => 'edit', $interviewCandidate['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'interview_candidates', 'action' => 'delete', $interviewCandidate['id']), array(), __('Are you sure you want to delete # %s?', $interviewCandidate['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Interview Candidate'), array('controller' => 'interview_candidates', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Interview Doc Status Lists'); ?></h3>
	<?php if (!empty($interview['InterviewDocStatusList'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Interview Id'); ?></th>
		<th><?php echo __('Association Document Id'); ?></th>
		<th><?php echo __('Status Id'); ?></th>
		<th><?php echo __('Interview Doc Status Listscol'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($interview['InterviewDocStatusList'] as $interviewDocStatusList): ?>
		<tr>
			<td><?php echo $interviewDocStatusList['id']; ?></td>
			<td><?php echo $interviewDocStatusList['interview_id']; ?></td>
			<td><?php echo $interviewDocStatusList['association_document_id']; ?></td>
			<td><?php echo $interviewDocStatusList['status_id']; ?></td>
			<td><?php echo $interviewDocStatusList['interview_doc_status_listscol']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'interview_doc_status_lists', 'action' => 'view', $interviewDocStatusList['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'interview_doc_status_lists', 'action' => 'edit', $interviewDocStatusList['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'interview_doc_status_lists', 'action' => 'delete', $interviewDocStatusList['id']), array(), __('Are you sure you want to delete # %s?', $interviewDocStatusList['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Interview Doc Status List'), array('controller' => 'interview_doc_status_lists', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
