<div class="trainees form">
<?php echo $this->Form->create('Trainee'); ?>
	<fieldset>
		<legend><?php echo __('Edit Trainee'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('control_no');
		echo $this->Form->input('family_name_en');
		echo $this->Form->input('family_name_jp');
		echo $this->Form->input('family_name_kh');
		echo $this->Form->input('given_name_en');
		echo $this->Form->input('given_name_jp');
		echo $this->Form->input('given_name_kh');
		echo $this->Form->input('sex');
		echo $this->Form->input('birthday');
		echo $this->Form->input('height');
		echo $this->Form->input('weight');
		echo $this->Form->input('face_feature_en');
		echo $this->Form->input('face_feature_jp');
		echo $this->Form->input('face_feature_kh');
		echo $this->Form->input('shoe_size');
		echo $this->Form->input('married');
		echo $this->Form->input('families_en');
		echo $this->Form->input('families_jp');
		echo $this->Form->input('province_id');
		echo $this->Form->input('district_id');
		echo $this->Form->input('commune_id');
		echo $this->Form->input('address_en');
		echo $this->Form->input('address_jp');
		echo $this->Form->input('address_kh');
		echo $this->Form->input('birthplace_province_id');
		echo $this->Form->input('birthplace_district_id');
		echo $this->Form->input('birthplace_commune_id');
		echo $this->Form->input('birthplace_address_en');
		echo $this->Form->input('birthplace_address_jp');
		echo $this->Form->input('birthplace_address_kh');
		echo $this->Form->input('phone');
		echo $this->Form->input('handed');
		echo $this->Form->input('academic1_en');
		echo $this->Form->input('academic1_from');
		echo $this->Form->input('academic1_to');
		echo $this->Form->input('academic1_jp');
		echo $this->Form->input('academic1_kh');
		echo $this->Form->input('academic2_en');
		echo $this->Form->input('academic2_from');
		echo $this->Form->input('academic2_to');
		echo $this->Form->input('academic2_jp');
		echo $this->Form->input('academic2_kh');
		echo $this->Form->input('academic3_en');
		echo $this->Form->input('academic3_from');
		echo $this->Form->input('academic3_to');
		echo $this->Form->input('academic3_jp');
		echo $this->Form->input('academic3_kh');
		echo $this->Form->input('academic4_en');
		echo $this->Form->input('academic4_from');
		echo $this->Form->input('academic4_to');
		echo $this->Form->input('academic4_jp');
		echo $this->Form->input('academic4_kh');
		echo $this->Form->input('employ1_en');
		echo $this->Form->input('employ1_from');
		echo $this->Form->input('employ1_to');
		echo $this->Form->input('employ1_jp');
		echo $this->Form->input('employ1_kh');
		echo $this->Form->input('employ1_job');
		echo $this->Form->input('employ1_salary');
		echo $this->Form->input('employ2_en');
		echo $this->Form->input('employ2_from');
		echo $this->Form->input('employ2_to');
		echo $this->Form->input('employ2_jp');
		echo $this->Form->input('employ2_kh');
		echo $this->Form->input('employ2_job');
		echo $this->Form->input('employ2_salary');
		echo $this->Form->input('employ3_en');
		echo $this->Form->input('employ3_from');
		echo $this->Form->input('employ3_to');
		echo $this->Form->input('employ3_jp');
		echo $this->Form->input('employ3_kh');
		echo $this->Form->input('employ3_job');
		echo $this->Form->input('employ3_salary');
		echo $this->Form->input('employ4_en');
		echo $this->Form->input('employ4_from');
		echo $this->Form->input('employ4_to');
		echo $this->Form->input('employ4_jp');
		echo $this->Form->input('employ4_kh');
		echo $this->Form->input('employ4_job');
		echo $this->Form->input('employ4_salary');
		echo $this->Form->input('employ5_en');
		echo $this->Form->input('employ5_from');
		echo $this->Form->input('employ5_to');
		echo $this->Form->input('employ5_jp');
		echo $this->Form->input('employ5_kh');
		echo $this->Form->input('employ5_job');
		echo $this->Form->input('employ5_salary');
		echo $this->Form->input('job1_id');
		echo $this->Form->input('job1_term');
		echo $this->Form->input('job2_id');
		echo $this->Form->input('job2_term');
		echo $this->Form->input('english');
		echo $this->Form->input('lang_others_en');
		echo $this->Form->input('lang_others_jp');
		echo $this->Form->input('visit_jpn');
		echo $this->Form->input('visit_jpn_from');
		echo $this->Form->input('visit_jpn_to');
		echo $this->Form->input('facebook');
		echo $this->Form->input('religious_en');
		echo $this->Form->input('religious_jp');
		echo $this->Form->input('medicalchk_status_id');
		echo $this->Form->input('medicalchk_note');
		echo $this->Form->input('idcard_status_id');
		echo $this->Form->input('idcard_note');
		echo $this->Form->input('fb');
		echo $this->Form->input('rb');
		echo $this->Form->input('cb');
		echo $this->Form->input('passport_status_id');
		echo $this->Form->input('passport_note');
		echo $this->Form->input('coe_status_id');
		echo $this->Form->input('coe_note');
		echo $this->Form->input('immigration_status_id');
		echo $this->Form->input('immigration_note');
		echo $this->Form->input('labor_ministry_status_id');
		echo $this->Form->input('labor_ministry_note');
		echo $this->Form->input('departure_date');
		echo $this->Form->input('departure_status_id');
		echo $this->Form->input('return_date');
		echo $this->Form->input('return_status_id');
		echo $this->Form->input('class_id');
		echo $this->Form->input('note');
		echo $this->Form->input('flag');
		echo $this->Form->input('health');
		echo $this->Form->input('blood_type');
		echo $this->Form->input('brother_cnt');
		echo $this->Form->input('brother_index');
		echo $this->Form->input('eyesight_left');
		echo $this->Form->input('eyesight_right');
		echo $this->Form->input('color_blindness');
		echo $this->Form->input('district_part');
		echo $this->Form->input('tatoo');
		echo $this->Form->input('tabacco');
		echo $this->Form->input('drink');
		echo $this->Form->input('experience_group_life');
		echo $this->Form->input('good_point_jp');
		echo $this->Form->input('good_point_en');
		echo $this->Form->input('hobby_jp');
		echo $this->Form->input('hobby_en');
		echo $this->Form->input('character_jp');
		echo $this->Form->input('character_en');
		echo $this->Form->input('specialty_jp');
		echo $this->Form->input('specialty_en');
		echo $this->Form->input('purpose_jp');
		echo $this->Form->input('purpose_en');
		echo $this->Form->input('plan_after_return_jp');
		echo $this->Form->input('plan_after_return_en');
		echo $this->Form->input('saving_money');
		echo $this->Form->input('family_in_jpn');
		echo $this->Form->input('family_in_jpn_relationship_jp');
		echo $this->Form->input('family_in_jpn_relationship_en');
		echo $this->Form->input('family_permission');
		echo $this->Form->input('id_number');
		echo $this->Form->input('introduced_from');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Trainee.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Trainee.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Trainees'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Provinces'), array('controller' => 'provinces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Province'), array('controller' => 'provinces', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Districts'), array('controller' => 'districts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New District'), array('controller' => 'districts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Communes'), array('controller' => 'communes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Commune'), array('controller' => 'communes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job1'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Status Lists'), array('controller' => 'status_lists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Medicalchk Status'), array('controller' => 'status_lists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainee Classes'), array('controller' => 'trainee_classes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Class'), array('controller' => 'trainee_classes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interview Candidates'), array('controller' => 'interview_candidates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interview Candidate'), array('controller' => 'interview_candidates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainee Documents'), array('controller' => 'trainee_documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trainee Document'), array('controller' => 'trainee_documents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainee Expenses'), array('controller' => 'trainee_expenses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trainee Expense'), array('controller' => 'trainee_expenses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainee Families'), array('controller' => 'trainee_families', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trainee Family'), array('controller' => 'trainee_families', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainee Microfinance Images'), array('controller' => 'trainee_microfinance_images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trainee Microfinance Image'), array('controller' => 'trainee_microfinance_images', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainee Microfinance Records'), array('controller' => 'trainee_microfinance_records', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trainee Microfinance Record'), array('controller' => 'trainee_microfinance_records', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainee Phones'), array('controller' => 'trainee_phones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trainee Phone'), array('controller' => 'trainee_phones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainee Profile Images'), array('controller' => 'trainee_profile_images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trainee Profile Image'), array('controller' => 'trainee_profile_images', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainee Voices'), array('controller' => 'trainee_voices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trainee Voice'), array('controller' => 'trainee_voices', 'action' => 'add')); ?> </li>
	</ul>
</div>
