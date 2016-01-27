<div class="trainees index">
	<h2><?php echo __('Trainees'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('control_no'); ?></th>
			<th><?php echo $this->Paginator->sort('family_name_en'); ?></th>
			<th><?php echo $this->Paginator->sort('family_name_jp'); ?></th>
			<th><?php echo $this->Paginator->sort('family_name_kh'); ?></th>
			<th><?php echo $this->Paginator->sort('given_name_en'); ?></th>
			<th><?php echo $this->Paginator->sort('given_name_jp'); ?></th>
			<th><?php echo $this->Paginator->sort('given_name_kh'); ?></th>
			<th><?php echo $this->Paginator->sort('sex'); ?></th>
			<th><?php echo $this->Paginator->sort('birthday'); ?></th>
			<th><?php echo $this->Paginator->sort('height'); ?></th>
			<th><?php echo $this->Paginator->sort('weight'); ?></th>
			<th><?php echo $this->Paginator->sort('face_feature_en'); ?></th>
			<th><?php echo $this->Paginator->sort('face_feature_jp'); ?></th>
			<th><?php echo $this->Paginator->sort('face_feature_kh'); ?></th>
			<th><?php echo $this->Paginator->sort('shoe_size'); ?></th>
			<th><?php echo $this->Paginator->sort('married'); ?></th>
			<th><?php echo $this->Paginator->sort('families_en'); ?></th>
			<th><?php echo $this->Paginator->sort('families_jp'); ?></th>
			<th><?php echo $this->Paginator->sort('province_id'); ?></th>
			<th><?php echo $this->Paginator->sort('district_id'); ?></th>
			<th><?php echo $this->Paginator->sort('commune_id'); ?></th>
			<th><?php echo $this->Paginator->sort('address_en'); ?></th>
			<th><?php echo $this->Paginator->sort('address_jp'); ?></th>
			<th><?php echo $this->Paginator->sort('address_kh'); ?></th>
			<th><?php echo $this->Paginator->sort('birthplace_province_id'); ?></th>
			<th><?php echo $this->Paginator->sort('birthplace_district_id'); ?></th>
			<th><?php echo $this->Paginator->sort('birthplace_commune_id'); ?></th>
			<th><?php echo $this->Paginator->sort('birthplace_address_en'); ?></th>
			<th><?php echo $this->Paginator->sort('birthplace_address_jp'); ?></th>
			<th><?php echo $this->Paginator->sort('birthplace_address_kh'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('handed'); ?></th>
			<th><?php echo $this->Paginator->sort('academic1_en'); ?></th>
			<th><?php echo $this->Paginator->sort('academic1_from'); ?></th>
			<th><?php echo $this->Paginator->sort('academic1_to'); ?></th>
			<th><?php echo $this->Paginator->sort('academic1_jp'); ?></th>
			<th><?php echo $this->Paginator->sort('academic1_kh'); ?></th>
			<th><?php echo $this->Paginator->sort('academic2_en'); ?></th>
			<th><?php echo $this->Paginator->sort('academic2_from'); ?></th>
			<th><?php echo $this->Paginator->sort('academic2_to'); ?></th>
			<th><?php echo $this->Paginator->sort('academic2_jp'); ?></th>
			<th><?php echo $this->Paginator->sort('academic2_kh'); ?></th>
			<th><?php echo $this->Paginator->sort('academic3_en'); ?></th>
			<th><?php echo $this->Paginator->sort('academic3_from'); ?></th>
			<th><?php echo $this->Paginator->sort('academic3_to'); ?></th>
			<th><?php echo $this->Paginator->sort('academic3_jp'); ?></th>
			<th><?php echo $this->Paginator->sort('academic3_kh'); ?></th>
			<th><?php echo $this->Paginator->sort('academic4_en'); ?></th>
			<th><?php echo $this->Paginator->sort('academic4_from'); ?></th>
			<th><?php echo $this->Paginator->sort('academic4_to'); ?></th>
			<th><?php echo $this->Paginator->sort('academic4_jp'); ?></th>
			<th><?php echo $this->Paginator->sort('academic4_kh'); ?></th>
			<th><?php echo $this->Paginator->sort('employ1_en'); ?></th>
			<th><?php echo $this->Paginator->sort('employ1_from'); ?></th>
			<th><?php echo $this->Paginator->sort('employ1_to'); ?></th>
			<th><?php echo $this->Paginator->sort('employ1_jp'); ?></th>
			<th><?php echo $this->Paginator->sort('employ1_kh'); ?></th>
			<th><?php echo $this->Paginator->sort('employ1_job'); ?></th>
			<th><?php echo $this->Paginator->sort('employ1_salary'); ?></th>
			<th><?php echo $this->Paginator->sort('employ2_en'); ?></th>
			<th><?php echo $this->Paginator->sort('employ2_from'); ?></th>
			<th><?php echo $this->Paginator->sort('employ2_to'); ?></th>
			<th><?php echo $this->Paginator->sort('employ2_jp'); ?></th>
			<th><?php echo $this->Paginator->sort('employ2_kh'); ?></th>
			<th><?php echo $this->Paginator->sort('employ2_job'); ?></th>
			<th><?php echo $this->Paginator->sort('employ2_salary'); ?></th>
			<th><?php echo $this->Paginator->sort('employ3_en'); ?></th>
			<th><?php echo $this->Paginator->sort('employ3_from'); ?></th>
			<th><?php echo $this->Paginator->sort('employ3_to'); ?></th>
			<th><?php echo $this->Paginator->sort('employ3_jp'); ?></th>
			<th><?php echo $this->Paginator->sort('employ3_kh'); ?></th>
			<th><?php echo $this->Paginator->sort('employ3_job'); ?></th>
			<th><?php echo $this->Paginator->sort('employ3_salary'); ?></th>
			<th><?php echo $this->Paginator->sort('employ4_en'); ?></th>
			<th><?php echo $this->Paginator->sort('employ4_from'); ?></th>
			<th><?php echo $this->Paginator->sort('employ4_to'); ?></th>
			<th><?php echo $this->Paginator->sort('employ4_jp'); ?></th>
			<th><?php echo $this->Paginator->sort('employ4_kh'); ?></th>
			<th><?php echo $this->Paginator->sort('employ4_job'); ?></th>
			<th><?php echo $this->Paginator->sort('employ4_salary'); ?></th>
			<th><?php echo $this->Paginator->sort('employ5_en'); ?></th>
			<th><?php echo $this->Paginator->sort('employ5_from'); ?></th>
			<th><?php echo $this->Paginator->sort('employ5_to'); ?></th>
			<th><?php echo $this->Paginator->sort('employ5_jp'); ?></th>
			<th><?php echo $this->Paginator->sort('employ5_kh'); ?></th>
			<th><?php echo $this->Paginator->sort('employ5_job'); ?></th>
			<th><?php echo $this->Paginator->sort('employ5_salary'); ?></th>
			<th><?php echo $this->Paginator->sort('job1_id'); ?></th>
			<th><?php echo $this->Paginator->sort('job1_term'); ?></th>
			<th><?php echo $this->Paginator->sort('job2_id'); ?></th>
			<th><?php echo $this->Paginator->sort('job2_term'); ?></th>
			<th><?php echo $this->Paginator->sort('english'); ?></th>
			<th><?php echo $this->Paginator->sort('lang_others_en'); ?></th>
			<th><?php echo $this->Paginator->sort('lang_others_jp'); ?></th>
			<th><?php echo $this->Paginator->sort('visit_jpn'); ?></th>
			<th><?php echo $this->Paginator->sort('visit_jpn_from'); ?></th>
			<th><?php echo $this->Paginator->sort('visit_jpn_to'); ?></th>
			<th><?php echo $this->Paginator->sort('facebook'); ?></th>
			<th><?php echo $this->Paginator->sort('religious_en'); ?></th>
			<th><?php echo $this->Paginator->sort('religious_jp'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('medicalchk_status_id'); ?></th>
			<th><?php echo $this->Paginator->sort('medicalchk_note'); ?></th>
			<th><?php echo $this->Paginator->sort('idcard_status_id'); ?></th>
			<th><?php echo $this->Paginator->sort('idcard_note'); ?></th>
			<th><?php echo $this->Paginator->sort('fb'); ?></th>
			<th><?php echo $this->Paginator->sort('rb'); ?></th>
			<th><?php echo $this->Paginator->sort('cb'); ?></th>
			<th><?php echo $this->Paginator->sort('passport_status_id'); ?></th>
			<th><?php echo $this->Paginator->sort('passport_note'); ?></th>
			<th><?php echo $this->Paginator->sort('coe_status_id'); ?></th>
			<th><?php echo $this->Paginator->sort('coe_note'); ?></th>
			<th><?php echo $this->Paginator->sort('immigration_status_id'); ?></th>
			<th><?php echo $this->Paginator->sort('immigration_note'); ?></th>
			<th><?php echo $this->Paginator->sort('labor_ministry_status_id'); ?></th>
			<th><?php echo $this->Paginator->sort('labor_ministry_note'); ?></th>
			<th><?php echo $this->Paginator->sort('departure_date'); ?></th>
			<th><?php echo $this->Paginator->sort('departure_status_id'); ?></th>
			<th><?php echo $this->Paginator->sort('return_date'); ?></th>
			<th><?php echo $this->Paginator->sort('return_status_id'); ?></th>
			<th><?php echo $this->Paginator->sort('class_id'); ?></th>
			<th><?php echo $this->Paginator->sort('note'); ?></th>
			<th><?php echo $this->Paginator->sort('flag'); ?></th>
			<th><?php echo $this->Paginator->sort('health'); ?></th>
			<th><?php echo $this->Paginator->sort('blood_type'); ?></th>
			<th><?php echo $this->Paginator->sort('brother_cnt'); ?></th>
			<th><?php echo $this->Paginator->sort('brother_index'); ?></th>
			<th><?php echo $this->Paginator->sort('eyesight_left'); ?></th>
			<th><?php echo $this->Paginator->sort('eyesight_right'); ?></th>
			<th><?php echo $this->Paginator->sort('color_blindness'); ?></th>
			<th><?php echo $this->Paginator->sort('district_part'); ?></th>
			<th><?php echo $this->Paginator->sort('tatoo'); ?></th>
			<th><?php echo $this->Paginator->sort('tabacco'); ?></th>
			<th><?php echo $this->Paginator->sort('drink'); ?></th>
			<th><?php echo $this->Paginator->sort('experience_group_life'); ?></th>
			<th><?php echo $this->Paginator->sort('good_point_jp'); ?></th>
			<th><?php echo $this->Paginator->sort('good_point_en'); ?></th>
			<th><?php echo $this->Paginator->sort('hobby_jp'); ?></th>
			<th><?php echo $this->Paginator->sort('hobby_en'); ?></th>
			<th><?php echo $this->Paginator->sort('character_jp'); ?></th>
			<th><?php echo $this->Paginator->sort('character_en'); ?></th>
			<th><?php echo $this->Paginator->sort('specialty_jp'); ?></th>
			<th><?php echo $this->Paginator->sort('specialty_en'); ?></th>
			<th><?php echo $this->Paginator->sort('purpose_jp'); ?></th>
			<th><?php echo $this->Paginator->sort('purpose_en'); ?></th>
			<th><?php echo $this->Paginator->sort('plan_after_return_jp'); ?></th>
			<th><?php echo $this->Paginator->sort('plan_after_return_en'); ?></th>
			<th><?php echo $this->Paginator->sort('saving_money'); ?></th>
			<th><?php echo $this->Paginator->sort('family_in_jpn'); ?></th>
			<th><?php echo $this->Paginator->sort('family_in_jpn_relationship_jp'); ?></th>
			<th><?php echo $this->Paginator->sort('family_in_jpn_relationship_en'); ?></th>
			<th><?php echo $this->Paginator->sort('family_permission'); ?></th>
			<th><?php echo $this->Paginator->sort('id_number'); ?></th>
			<th><?php echo $this->Paginator->sort('introduced_from'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($trainees as $trainee): ?>
	<tr>
		<td><?php echo h($trainee['Trainee']['id']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['control_no']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['family_name_en']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['family_name_jp']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['family_name_kh']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['given_name_en']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['given_name_jp']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['given_name_kh']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['sex']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['birthday']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['height']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['weight']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['face_feature_en']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['face_feature_jp']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['face_feature_kh']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['shoe_size']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['married']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['families_en']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['families_jp']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($trainee['Province']['id'], array('controller' => 'provinces', 'action' => 'view', $trainee['Province']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($trainee['District']['id'], array('controller' => 'districts', 'action' => 'view', $trainee['District']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($trainee['Commune']['id'], array('controller' => 'communes', 'action' => 'view', $trainee['Commune']['id'])); ?>
		</td>
		<td><?php echo h($trainee['Trainee']['address_en']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['address_jp']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['address_kh']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($trainee['BirthplaceProvince']['id'], array('controller' => 'provinces', 'action' => 'view', $trainee['BirthplaceProvince']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($trainee['BirthplaceDistrict']['id'], array('controller' => 'districts', 'action' => 'view', $trainee['BirthplaceDistrict']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($trainee['BirthplaceCommune']['id'], array('controller' => 'communes', 'action' => 'view', $trainee['BirthplaceCommune']['id'])); ?>
		</td>
		<td><?php echo h($trainee['Trainee']['birthplace_address_en']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['birthplace_address_jp']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['birthplace_address_kh']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['phone']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['handed']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['academic1_en']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['academic1_from']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['academic1_to']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['academic1_jp']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['academic1_kh']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['academic2_en']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['academic2_from']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['academic2_to']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['academic2_jp']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['academic2_kh']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['academic3_en']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['academic3_from']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['academic3_to']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['academic3_jp']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['academic3_kh']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['academic4_en']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['academic4_from']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['academic4_to']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['academic4_jp']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['academic4_kh']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['employ1_en']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['employ1_from']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['employ1_to']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['employ1_jp']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['employ1_kh']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['employ1_job']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['employ1_salary']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['employ2_en']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['employ2_from']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['employ2_to']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['employ2_jp']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['employ2_kh']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['employ2_job']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['employ2_salary']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['employ3_en']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['employ3_from']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['employ3_to']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['employ3_jp']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['employ3_kh']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['employ3_job']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['employ3_salary']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['employ4_en']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['employ4_from']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['employ4_to']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['employ4_jp']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['employ4_kh']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['employ4_job']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['employ4_salary']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['employ5_en']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['employ5_from']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['employ5_to']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['employ5_jp']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['employ5_kh']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['employ5_job']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['employ5_salary']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($trainee['Job1']['id'], array('controller' => 'jobs', 'action' => 'view', $trainee['Job1']['id'])); ?>
		</td>
		<td><?php echo h($trainee['Trainee']['job1_term']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($trainee['Job2']['id'], array('controller' => 'jobs', 'action' => 'view', $trainee['Job2']['id'])); ?>
		</td>
		<td><?php echo h($trainee['Trainee']['job2_term']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['english']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['lang_others_en']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['lang_others_jp']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['visit_jpn']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['visit_jpn_from']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['visit_jpn_to']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['facebook']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['religious_en']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['religious_jp']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['created']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($trainee['MedicalchkStatus']['id'], array('controller' => 'status_lists', 'action' => 'view', $trainee['MedicalchkStatus']['id'])); ?>
		</td>
		<td><?php echo h($trainee['Trainee']['medicalchk_note']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($trainee['IdcardStatus']['id'], array('controller' => 'status_lists', 'action' => 'view', $trainee['IdcardStatus']['id'])); ?>
		</td>
		<td><?php echo h($trainee['Trainee']['idcard_note']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['fb']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['rb']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['cb']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($trainee['PassportStatus']['id'], array('controller' => 'status_lists', 'action' => 'view', $trainee['PassportStatus']['id'])); ?>
		</td>
		<td><?php echo h($trainee['Trainee']['passport_note']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($trainee['CoeStatus']['id'], array('controller' => 'status_lists', 'action' => 'view', $trainee['CoeStatus']['id'])); ?>
		</td>
		<td><?php echo h($trainee['Trainee']['coe_note']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($trainee['ImmigrationStatus']['id'], array('controller' => 'status_lists', 'action' => 'view', $trainee['ImmigrationStatus']['id'])); ?>
		</td>
		<td><?php echo h($trainee['Trainee']['immigration_note']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($trainee['LaborMinistryStatus']['id'], array('controller' => 'status_lists', 'action' => 'view', $trainee['LaborMinistryStatus']['id'])); ?>
		</td>
		<td><?php echo h($trainee['Trainee']['labor_ministry_note']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['departure_date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($trainee['DepartureStatus']['id'], array('controller' => 'status_lists', 'action' => 'view', $trainee['DepartureStatus']['id'])); ?>
		</td>
		<td><?php echo h($trainee['Trainee']['return_date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($trainee['ReturnStatus']['id'], array('controller' => 'status_lists', 'action' => 'view', $trainee['ReturnStatus']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($trainee['Class']['id'], array('controller' => 'trainee_classes', 'action' => 'view', $trainee['Class']['id'])); ?>
		</td>
		<td><?php echo h($trainee['Trainee']['note']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['flag']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['health']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['blood_type']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['brother_cnt']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['brother_index']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['eyesight_left']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['eyesight_right']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['color_blindness']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['district_part']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['tatoo']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['tabacco']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['drink']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['experience_group_life']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['good_point_jp']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['good_point_en']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['hobby_jp']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['hobby_en']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['character_jp']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['character_en']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['specialty_jp']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['specialty_en']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['purpose_jp']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['purpose_en']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['plan_after_return_jp']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['plan_after_return_en']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['saving_money']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['family_in_jpn']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['family_in_jpn_relationship_jp']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['family_in_jpn_relationship_en']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['family_permission']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['id_number']); ?>&nbsp;</td>
		<td><?php echo h($trainee['Trainee']['introduced_from']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $trainee['Trainee']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $trainee['Trainee']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $trainee['Trainee']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $trainee['Trainee']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Trainee'), array('action' => 'add')); ?></li>
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
