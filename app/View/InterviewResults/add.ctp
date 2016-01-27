<div class="interviewResults form">
<?php echo $this->Form->create('InterviewResult'); ?>
	<fieldset>
		<legend><?php echo __('Add Interview Result'); ?></legend>
	<?php
		echo $this->Form->input('result_jp');
		echo $this->Form->input('result_en');
		echo $this->Form->input('note');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Interview Results'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Interview Candidates'), array('controller' => 'interview_candidates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interview Candidate'), array('controller' => 'interview_candidates', 'action' => 'add')); ?> </li>
	</ul>
</div>
