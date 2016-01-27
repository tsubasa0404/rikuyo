<div class="interviews form">
<?php echo $this->Form->create('Interview'); ?>
	<fieldset>
		<legend><?php echo __('Edit Interview'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('company_id');
		echo $this->Form->input('job');
		echo $this->Form->input('work_place');
		echo $this->Form->input('company_info');
		echo $this->Form->input('work_content');
		echo $this->Form->input('work_schedule');
		echo $this->Form->input('adoption_num');
		echo $this->Form->input('sex');
		echo $this->Form->input('age');
		echo $this->Form->input('hourly_wage');
		echo $this->Form->input('basic_wage');
		echo $this->Form->input('deduction');
		echo $this->Form->input('breakdown');
		echo $this->Form->input('employment_insurance');
		echo $this->Form->input('social_insurance');
		echo $this->Form->input('boarding_fee');
		echo $this->Form->input('utility_cost');
		echo $this->Form->input('take_home');
		echo $this->Form->input('wage_note');
		echo $this->Form->input('request');
		echo $this->Form->input('immigration_time');
		echo $this->Form->input('start_time');
		echo $this->Form->input('interview_date');
		echo $this->Form->input('interview_time');
		echo $this->Form->input('interview_place');
		echo $this->Form->input('interview_detail');
		echo $this->Form->input('interview_staff');
		echo $this->Form->input('flag');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Interview.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Interview.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Interviews'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interview Candidates'), array('controller' => 'interview_candidates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interview Candidate'), array('controller' => 'interview_candidates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interview Doc Status Lists'), array('controller' => 'interview_doc_status_lists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interview Doc Status List'), array('controller' => 'interview_doc_status_lists', 'action' => 'add')); ?> </li>
	</ul>
</div>
