<div class="interviewCandidates form">
<?php echo $this->Form->create('InterviewCandidate'); ?>
	<fieldset>
		<legend><?php echo __('Edit Interview Candidate'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('interview_id');
		echo $this->Form->input('trainee_id');
		echo $this->Form->input('interview_result_id');
		echo $this->Form->input('note');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('InterviewCandidate.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('InterviewCandidate.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Interview Candidates'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Interviews'), array('controller' => 'interviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interview'), array('controller' => 'interviews', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainees'), array('controller' => 'trainees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trainee'), array('controller' => 'trainees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interview Results'), array('controller' => 'interview_results', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interview Result'), array('controller' => 'interview_results', 'action' => 'add')); ?> </li>
	</ul>
</div>
