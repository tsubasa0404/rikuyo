<div class="interviewCandidates form">
<?php echo $this->Form->create('InterviewCandidate'); ?>
	<fieldset>
		<legend><?php echo __('Add Interview Candidate'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Interview Candidates'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Interviews'), array('controller' => 'interviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interview'), array('controller' => 'interviews', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainees'), array('controller' => 'trainees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trainee'), array('controller' => 'trainees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interview Results'), array('controller' => 'interview_results', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interview Result'), array('controller' => 'interview_results', 'action' => 'add')); ?> </li>
	</ul>
</div>
