<div class="interviewResults view">
<h2><?php echo __('Interview Result'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($interviewResult['InterviewResult']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Result Jp'); ?></dt>
		<dd>
			<?php echo h($interviewResult['InterviewResult']['result_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Result En'); ?></dt>
		<dd>
			<?php echo h($interviewResult['InterviewResult']['result_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($interviewResult['InterviewResult']['note']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Interview Result'), array('action' => 'edit', $interviewResult['InterviewResult']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Interview Result'), array('action' => 'delete', $interviewResult['InterviewResult']['id']), array(), __('Are you sure you want to delete # %s?', $interviewResult['InterviewResult']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Interview Results'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interview Result'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interview Candidates'), array('controller' => 'interview_candidates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interview Candidate'), array('controller' => 'interview_candidates', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Interview Candidates'); ?></h3>
	<?php if (!empty($interviewResult['InterviewCandidate'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Interview Id'); ?></th>
		<th><?php echo __('Trainee Id'); ?></th>
		<th><?php echo __('Interview Result Id'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($interviewResult['InterviewCandidate'] as $interviewCandidate): ?>
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
