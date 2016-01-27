<div class="interviewCandidates view">
<h2><?php echo __('Interview Candidate'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($interviewCandidate['InterviewCandidate']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Interview'); ?></dt>
		<dd>
			<?php echo $this->Html->link($interviewCandidate['Interview']['id'], array('controller' => 'interviews', 'action' => 'view', $interviewCandidate['Interview']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trainee'); ?></dt>
		<dd>
			<?php echo $this->Html->link($interviewCandidate['Trainee']['id'], array('controller' => 'trainees', 'action' => 'view', $interviewCandidate['Trainee']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Interview Result'); ?></dt>
		<dd>
			<?php echo $this->Html->link($interviewCandidate['InterviewResult']['id'], array('controller' => 'interview_results', 'action' => 'view', $interviewCandidate['InterviewResult']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($interviewCandidate['InterviewCandidate']['note']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Interview Candidate'), array('action' => 'edit', $interviewCandidate['InterviewCandidate']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Interview Candidate'), array('action' => 'delete', $interviewCandidate['InterviewCandidate']['id']), array(), __('Are you sure you want to delete # %s?', $interviewCandidate['InterviewCandidate']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Interview Candidates'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interview Candidate'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interviews'), array('controller' => 'interviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interview'), array('controller' => 'interviews', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainees'), array('controller' => 'trainees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trainee'), array('controller' => 'trainees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interview Results'), array('controller' => 'interview_results', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interview Result'), array('controller' => 'interview_results', 'action' => 'add')); ?> </li>
	</ul>
</div>
