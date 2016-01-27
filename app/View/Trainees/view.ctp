<div class="trainees view">
<h2><?php echo __('Trainee'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Control No'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['control_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Family Name En'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['family_name_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Family Name Jp'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['family_name_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Family Name Kh'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['family_name_kh']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Given Name En'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['given_name_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Given Name Jp'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['given_name_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Given Name Kh'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['given_name_kh']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sex'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['sex']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Birthday'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['birthday']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Height'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['height']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Weight'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['weight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Face Feature En'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['face_feature_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Face Feature Jp'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['face_feature_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Face Feature Kh'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['face_feature_kh']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shoe Size'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['shoe_size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Married'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['married']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Families En'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['families_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Families Jp'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['families_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Province'); ?></dt>
		<dd>
			<?php echo $this->Html->link($trainee['Province']['id'], array('controller' => 'provinces', 'action' => 'view', $trainee['Province']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('District'); ?></dt>
		<dd>
			<?php echo $this->Html->link($trainee['District']['id'], array('controller' => 'districts', 'action' => 'view', $trainee['District']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Commune'); ?></dt>
		<dd>
			<?php echo $this->Html->link($trainee['Commune']['id'], array('controller' => 'communes', 'action' => 'view', $trainee['Commune']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address En'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['address_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address Jp'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['address_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address Kh'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['address_kh']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Birthplace Province'); ?></dt>
		<dd>
			<?php echo $this->Html->link($trainee['BirthplaceProvince']['id'], array('controller' => 'provinces', 'action' => 'view', $trainee['BirthplaceProvince']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Birthplace District'); ?></dt>
		<dd>
			<?php echo $this->Html->link($trainee['BirthplaceDistrict']['id'], array('controller' => 'districts', 'action' => 'view', $trainee['BirthplaceDistrict']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Birthplace Commune'); ?></dt>
		<dd>
			<?php echo $this->Html->link($trainee['BirthplaceCommune']['id'], array('controller' => 'communes', 'action' => 'view', $trainee['BirthplaceCommune']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Birthplace Address En'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['birthplace_address_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Birthplace Address Jp'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['birthplace_address_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Birthplace Address Kh'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['birthplace_address_kh']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Handed'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['handed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Academic1 En'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['academic1_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Academic1 From'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['academic1_from']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Academic1 To'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['academic1_to']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Academic1 Jp'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['academic1_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Academic1 Kh'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['academic1_kh']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Academic2 En'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['academic2_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Academic2 From'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['academic2_from']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Academic2 To'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['academic2_to']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Academic2 Jp'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['academic2_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Academic2 Kh'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['academic2_kh']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Academic3 En'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['academic3_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Academic3 From'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['academic3_from']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Academic3 To'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['academic3_to']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Academic3 Jp'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['academic3_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Academic3 Kh'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['academic3_kh']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Academic4 En'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['academic4_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Academic4 From'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['academic4_from']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Academic4 To'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['academic4_to']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Academic4 Jp'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['academic4_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Academic4 Kh'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['academic4_kh']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employ1 En'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['employ1_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employ1 From'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['employ1_from']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employ1 To'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['employ1_to']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employ1 Jp'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['employ1_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employ1 Kh'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['employ1_kh']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employ1 Job'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['employ1_job']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employ1 Salary'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['employ1_salary']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employ2 En'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['employ2_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employ2 From'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['employ2_from']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employ2 To'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['employ2_to']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employ2 Jp'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['employ2_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employ2 Kh'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['employ2_kh']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employ2 Job'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['employ2_job']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employ2 Salary'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['employ2_salary']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employ3 En'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['employ3_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employ3 From'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['employ3_from']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employ3 To'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['employ3_to']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employ3 Jp'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['employ3_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employ3 Kh'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['employ3_kh']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employ3 Job'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['employ3_job']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employ3 Salary'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['employ3_salary']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employ4 En'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['employ4_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employ4 From'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['employ4_from']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employ4 To'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['employ4_to']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employ4 Jp'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['employ4_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employ4 Kh'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['employ4_kh']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employ4 Job'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['employ4_job']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employ4 Salary'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['employ4_salary']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employ5 En'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['employ5_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employ5 From'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['employ5_from']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employ5 To'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['employ5_to']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employ5 Jp'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['employ5_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employ5 Kh'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['employ5_kh']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employ5 Job'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['employ5_job']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employ5 Salary'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['employ5_salary']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job1'); ?></dt>
		<dd>
			<?php echo $this->Html->link($trainee['Job1']['id'], array('controller' => 'jobs', 'action' => 'view', $trainee['Job1']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job1 Term'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['job1_term']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job2'); ?></dt>
		<dd>
			<?php echo $this->Html->link($trainee['Job2']['id'], array('controller' => 'jobs', 'action' => 'view', $trainee['Job2']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job2 Term'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['job2_term']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('English'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['english']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lang Others En'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['lang_others_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lang Others Jp'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['lang_others_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visit Jpn'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['visit_jpn']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visit Jpn From'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['visit_jpn_from']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visit Jpn To'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['visit_jpn_to']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Facebook'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['facebook']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Religious En'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['religious_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Religious Jp'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['religious_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Medicalchk Status'); ?></dt>
		<dd>
			<?php echo $this->Html->link($trainee['MedicalchkStatus']['id'], array('controller' => 'status_lists', 'action' => 'view', $trainee['MedicalchkStatus']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Medicalchk Note'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['medicalchk_note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Idcard Status'); ?></dt>
		<dd>
			<?php echo $this->Html->link($trainee['IdcardStatus']['id'], array('controller' => 'status_lists', 'action' => 'view', $trainee['IdcardStatus']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Idcard Note'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['idcard_note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fb'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['fb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rb'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['rb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cb'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['cb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Passport Status'); ?></dt>
		<dd>
			<?php echo $this->Html->link($trainee['PassportStatus']['id'], array('controller' => 'status_lists', 'action' => 'view', $trainee['PassportStatus']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Passport Note'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['passport_note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Coe Status'); ?></dt>
		<dd>
			<?php echo $this->Html->link($trainee['CoeStatus']['id'], array('controller' => 'status_lists', 'action' => 'view', $trainee['CoeStatus']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Coe Note'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['coe_note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Immigration Status'); ?></dt>
		<dd>
			<?php echo $this->Html->link($trainee['ImmigrationStatus']['id'], array('controller' => 'status_lists', 'action' => 'view', $trainee['ImmigrationStatus']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Immigration Note'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['immigration_note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Labor Ministry Status'); ?></dt>
		<dd>
			<?php echo $this->Html->link($trainee['LaborMinistryStatus']['id'], array('controller' => 'status_lists', 'action' => 'view', $trainee['LaborMinistryStatus']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Labor Ministry Note'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['labor_ministry_note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Departure Date'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['departure_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Departure Status'); ?></dt>
		<dd>
			<?php echo $this->Html->link($trainee['DepartureStatus']['id'], array('controller' => 'status_lists', 'action' => 'view', $trainee['DepartureStatus']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Return Date'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['return_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Return Status'); ?></dt>
		<dd>
			<?php echo $this->Html->link($trainee['ReturnStatus']['id'], array('controller' => 'status_lists', 'action' => 'view', $trainee['ReturnStatus']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Class'); ?></dt>
		<dd>
			<?php echo $this->Html->link($trainee['Class']['id'], array('controller' => 'trainee_classes', 'action' => 'view', $trainee['Class']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Flag'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Health'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['health']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Blood Type'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['blood_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Brother Cnt'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['brother_cnt']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Brother Index'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['brother_index']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Eyesight Left'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['eyesight_left']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Eyesight Right'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['eyesight_right']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Color Blindness'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['color_blindness']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('District Part'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['district_part']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tatoo'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['tatoo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tabacco'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['tabacco']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Drink'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['drink']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Experience Group Life'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['experience_group_life']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Good Point Jp'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['good_point_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Good Point En'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['good_point_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hobby Jp'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['hobby_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hobby En'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['hobby_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Character Jp'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['character_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Character En'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['character_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Specialty Jp'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['specialty_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Specialty En'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['specialty_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Purpose Jp'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['purpose_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Purpose En'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['purpose_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plan After Return Jp'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['plan_after_return_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plan After Return En'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['plan_after_return_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Saving Money'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['saving_money']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Family In Jpn'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['family_in_jpn']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Family In Jpn Relationship Jp'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['family_in_jpn_relationship_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Family In Jpn Relationship En'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['family_in_jpn_relationship_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Family Permission'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['family_permission']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Number'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['id_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Introduced From'); ?></dt>
		<dd>
			<?php echo h($trainee['Trainee']['introduced_from']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Trainee'), array('action' => 'edit', $trainee['Trainee']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Trainee'), array('action' => 'delete', $trainee['Trainee']['id']), array(), __('Are you sure you want to delete # %s?', $trainee['Trainee']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainees'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trainee'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Interview Candidates'); ?></h3>
	<?php if (!empty($trainee['InterviewCandidate'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Interview Id'); ?></th>
		<th><?php echo __('Trainee Id'); ?></th>
		<th><?php echo __('Interview Result Id'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($trainee['InterviewCandidate'] as $interviewCandidate): ?>
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
	<h3><?php echo __('Related Trainee Documents'); ?></h3>
	<?php if (!empty($trainee['TraineeDocument'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Trainee Id'); ?></th>
		<th><?php echo __('Img File Name'); ?></th>
		<th><?php echo __('Doc Name Jp'); ?></th>
		<th><?php echo __('Doc Name En'); ?></th>
		<th><?php echo __('Flag'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($trainee['TraineeDocument'] as $traineeDocument): ?>
		<tr>
			<td><?php echo $traineeDocument['id']; ?></td>
			<td><?php echo $traineeDocument['trainee_id']; ?></td>
			<td><?php echo $traineeDocument['img_file_name']; ?></td>
			<td><?php echo $traineeDocument['doc_name_jp']; ?></td>
			<td><?php echo $traineeDocument['doc_name_en']; ?></td>
			<td><?php echo $traineeDocument['flag']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'trainee_documents', 'action' => 'view', $traineeDocument['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'trainee_documents', 'action' => 'edit', $traineeDocument['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'trainee_documents', 'action' => 'delete', $traineeDocument['id']), array(), __('Are you sure you want to delete # %s?', $traineeDocument['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Trainee Document'), array('controller' => 'trainee_documents', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Trainee Expenses'); ?></h3>
	<?php if (!empty($trainee['TraineeExpense'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Trainee Id'); ?></th>
		<th><?php echo __('Expected Date'); ?></th>
		<th><?php echo __('Expected Price'); ?></th>
		<th><?php echo __('Pay Date'); ?></th>
		<th><?php echo __('Pay Price'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th><?php echo __('Flag'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($trainee['TraineeExpense'] as $traineeExpense): ?>
		<tr>
			<td><?php echo $traineeExpense['id']; ?></td>
			<td><?php echo $traineeExpense['trainee_id']; ?></td>
			<td><?php echo $traineeExpense['expected_date']; ?></td>
			<td><?php echo $traineeExpense['expected_price']; ?></td>
			<td><?php echo $traineeExpense['pay_date']; ?></td>
			<td><?php echo $traineeExpense['pay_price']; ?></td>
			<td><?php echo $traineeExpense['note']; ?></td>
			<td><?php echo $traineeExpense['flag']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'trainee_expenses', 'action' => 'view', $traineeExpense['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'trainee_expenses', 'action' => 'edit', $traineeExpense['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'trainee_expenses', 'action' => 'delete', $traineeExpense['id']), array(), __('Are you sure you want to delete # %s?', $traineeExpense['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Trainee Expense'), array('controller' => 'trainee_expenses', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Trainee Families'); ?></h3>
	<?php if (!empty($trainee['TraineeFamily'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Trainee Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Relationship'); ?></th>
		<th><?php echo __('Birthday'); ?></th>
		<th><?php echo __('Job'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($trainee['TraineeFamily'] as $traineeFamily): ?>
		<tr>
			<td><?php echo $traineeFamily['id']; ?></td>
			<td><?php echo $traineeFamily['trainee_id']; ?></td>
			<td><?php echo $traineeFamily['name']; ?></td>
			<td><?php echo $traineeFamily['relationship']; ?></td>
			<td><?php echo $traineeFamily['birthday']; ?></td>
			<td><?php echo $traineeFamily['job']; ?></td>
			<td><?php echo $traineeFamily['note']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'trainee_families', 'action' => 'view', $traineeFamily['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'trainee_families', 'action' => 'edit', $traineeFamily['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'trainee_families', 'action' => 'delete', $traineeFamily['id']), array(), __('Are you sure you want to delete # %s?', $traineeFamily['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Trainee Family'), array('controller' => 'trainee_families', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Trainee Microfinance Images'); ?></h3>
	<?php if (!empty($trainee['TraineeMicrofinanceImage'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Trainee Id'); ?></th>
		<th><?php echo __('Img File Name'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Flag'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($trainee['TraineeMicrofinanceImage'] as $traineeMicrofinanceImage): ?>
		<tr>
			<td><?php echo $traineeMicrofinanceImage['id']; ?></td>
			<td><?php echo $traineeMicrofinanceImage['trainee_id']; ?></td>
			<td><?php echo $traineeMicrofinanceImage['img_file_name']; ?></td>
			<td><?php echo $traineeMicrofinanceImage['title']; ?></td>
			<td><?php echo $traineeMicrofinanceImage['flag']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'trainee_microfinance_images', 'action' => 'view', $traineeMicrofinanceImage['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'trainee_microfinance_images', 'action' => 'edit', $traineeMicrofinanceImage['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'trainee_microfinance_images', 'action' => 'delete', $traineeMicrofinanceImage['id']), array(), __('Are you sure you want to delete # %s?', $traineeMicrofinanceImage['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Trainee Microfinance Image'), array('controller' => 'trainee_microfinance_images', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Trainee Microfinance Records'); ?></h3>
	<?php if (!empty($trainee['TraineeMicrofinanceRecord'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Trainee Id'); ?></th>
		<th><?php echo __('Pay Month'); ?></th>
		<th><?php echo __('Pay Price'); ?></th>
		<th><?php echo __('Pay Date'); ?></th>
		<th><?php echo __('Status Id'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th><?php echo __('Flag'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($trainee['TraineeMicrofinanceRecord'] as $traineeMicrofinanceRecord): ?>
		<tr>
			<td><?php echo $traineeMicrofinanceRecord['id']; ?></td>
			<td><?php echo $traineeMicrofinanceRecord['trainee_id']; ?></td>
			<td><?php echo $traineeMicrofinanceRecord['pay_month']; ?></td>
			<td><?php echo $traineeMicrofinanceRecord['pay_price']; ?></td>
			<td><?php echo $traineeMicrofinanceRecord['pay_date']; ?></td>
			<td><?php echo $traineeMicrofinanceRecord['status_id']; ?></td>
			<td><?php echo $traineeMicrofinanceRecord['note']; ?></td>
			<td><?php echo $traineeMicrofinanceRecord['flag']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'trainee_microfinance_records', 'action' => 'view', $traineeMicrofinanceRecord['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'trainee_microfinance_records', 'action' => 'edit', $traineeMicrofinanceRecord['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'trainee_microfinance_records', 'action' => 'delete', $traineeMicrofinanceRecord['id']), array(), __('Are you sure you want to delete # %s?', $traineeMicrofinanceRecord['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Trainee Microfinance Record'), array('controller' => 'trainee_microfinance_records', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Trainee Phones'); ?></h3>
	<?php if (!empty($trainee['TraineePhone'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Trainee Id'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Owner'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($trainee['TraineePhone'] as $traineePhone): ?>
		<tr>
			<td><?php echo $traineePhone['id']; ?></td>
			<td><?php echo $traineePhone['trainee_id']; ?></td>
			<td><?php echo $traineePhone['phone']; ?></td>
			<td><?php echo $traineePhone['owner']; ?></td>
			<td><?php echo $traineePhone['note']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'trainee_phones', 'action' => 'view', $traineePhone['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'trainee_phones', 'action' => 'edit', $traineePhone['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'trainee_phones', 'action' => 'delete', $traineePhone['id']), array(), __('Are you sure you want to delete # %s?', $traineePhone['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Trainee Phone'), array('controller' => 'trainee_phones', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Trainee Profile Images'); ?></h3>
	<?php if (!empty($trainee['TraineeProfileImage'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Trainee Id'); ?></th>
		<th><?php echo __('Img File Name'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Flag'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($trainee['TraineeProfileImage'] as $traineeProfileImage): ?>
		<tr>
			<td><?php echo $traineeProfileImage['id']; ?></td>
			<td><?php echo $traineeProfileImage['trainee_id']; ?></td>
			<td><?php echo $traineeProfileImage['img_file_name']; ?></td>
			<td><?php echo $traineeProfileImage['title']; ?></td>
			<td><?php echo $traineeProfileImage['flag']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'trainee_profile_images', 'action' => 'view', $traineeProfileImage['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'trainee_profile_images', 'action' => 'edit', $traineeProfileImage['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'trainee_profile_images', 'action' => 'delete', $traineeProfileImage['id']), array(), __('Are you sure you want to delete # %s?', $traineeProfileImage['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Trainee Profile Image'), array('controller' => 'trainee_profile_images', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Trainee Voices'); ?></h3>
	<?php if (!empty($trainee['TraineeVoice'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Trainee Id'); ?></th>
		<th><?php echo __('Title En'); ?></th>
		<th><?php echo __('Title Jp'); ?></th>
		<th><?php echo __('Title Kh'); ?></th>
		<th><?php echo __('Voice En'); ?></th>
		<th><?php echo __('Voice Jp'); ?></th>
		<th><?php echo __('Voice Kh'); ?></th>
		<th><?php echo __('Answer En'); ?></th>
		<th><?php echo __('Answer Jp'); ?></th>
		<th><?php echo __('Answer Kh'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($trainee['TraineeVoice'] as $traineeVoice): ?>
		<tr>
			<td><?php echo $traineeVoice['id']; ?></td>
			<td><?php echo $traineeVoice['trainee_id']; ?></td>
			<td><?php echo $traineeVoice['title_en']; ?></td>
			<td><?php echo $traineeVoice['title_jp']; ?></td>
			<td><?php echo $traineeVoice['title_kh']; ?></td>
			<td><?php echo $traineeVoice['voice_en']; ?></td>
			<td><?php echo $traineeVoice['voice_jp']; ?></td>
			<td><?php echo $traineeVoice['voice_kh']; ?></td>
			<td><?php echo $traineeVoice['answer_en']; ?></td>
			<td><?php echo $traineeVoice['answer_jp']; ?></td>
			<td><?php echo $traineeVoice['answer_kh']; ?></td>
			<td><?php echo $traineeVoice['note']; ?></td>
			<td><?php echo $traineeVoice['created']; ?></td>
			<td><?php echo $traineeVoice['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'trainee_voices', 'action' => 'view', $traineeVoice['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'trainee_voices', 'action' => 'edit', $traineeVoice['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'trainee_voices', 'action' => 'delete', $traineeVoice['id']), array(), __('Are you sure you want to delete # %s?', $traineeVoice['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Trainee Voice'), array('controller' => 'trainee_voices', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
