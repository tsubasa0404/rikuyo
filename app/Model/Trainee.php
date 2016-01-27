<?php
App::uses('AppModel', 'Model');
/**
 * Trainee Model
 *
 * @property Province $Province
 * @property District $District
 * @property Commune $Commune
 * @property BirthplaceProvince $BirthplaceProvince
 * @property BirthplaceDistrict $BirthplaceDistrict
 * @property BirthplaceCommune $BirthplaceCommune
 * @property Job1 $Job1
 * @property Job2 $Job2
 * @property MedicalchkStatus $MedicalchkStatus
 * @property IdcardStatus $IdcardStatus
 * @property PassportStatus $PassportStatus
 * @property CoeStatus $CoeStatus
 * @property ImmigrationStatus $ImmigrationStatus
 * @property LaborMinistryStatus $LaborMinistryStatus
 * @property DepartureStatus $DepartureStatus
 * @property ReturnStatus $ReturnStatus
 * @property Class $Class
 * @property InterviewCandidate $InterviewCandidate
 * @property TraineeDocument $TraineeDocument
 * @property TraineeExpense $TraineeExpense
 * @property TraineeFamily $TraineeFamily
 * @property TraineeMicrofinanceImage $TraineeMicrofinanceImage
 * @property TraineeMicrofinanceRecord $TraineeMicrofinanceRecord
 * @property TraineePhone $TraineePhone
 * @property TraineeProfileImage $TraineeProfileImage
 * @property TraineeVoice $TraineeVoice
 */
class Trainee extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Province' => array(
			'className' => 'Province',
			'foreignKey' => 'province_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'District' => array(
			'className' => 'District',
			'foreignKey' => 'district_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Commune' => array(
			'className' => 'Commune',
			'foreignKey' => 'commune_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'BirthplaceProvince' => array(
			'className' => 'Province',
			'foreignKey' => 'birthplace_province_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'BirthplaceDistrict' => array(
			'className' => 'District',
			'foreignKey' => 'birthplace_district_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'BirthplaceCommune' => array(
			'className' => 'Commune',
			'foreignKey' => 'birthplace_commune_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Job1' => array(
			'className' => 'Job',
			'foreignKey' => 'job1_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Job2' => array(
			'className' => 'Job',
			'foreignKey' => 'job2_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'MedicalchkStatus' => array(
			'className' => 'StatusList',
			'foreignKey' => 'medicalchk_status_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'IdcardStatus' => array(
			'className' => 'StatusList',
			'foreignKey' => 'idcard_status_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'PassportStatus' => array(
			'className' => 'StatusList',
			'foreignKey' => 'passport_status_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'CoeStatus' => array(
			'className' => 'StatusList',
			'foreignKey' => 'coe_status_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ImmigrationStatus' => array(
			'className' => 'StatusList',
			'foreignKey' => 'immigration_status_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'LaborMinistryStatus' => array(
			'className' => 'StatusList',
			'foreignKey' => 'labor_ministry_status_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'DepartureStatus' => array(
			'className' => 'StatusList',
			'foreignKey' => 'departure_status_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ReturnStatus' => array(
			'className' => 'StatusList',
			'foreignKey' => 'return_status_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TraineeClass' => array(
			'className' => 'TraineeClass',
			'foreignKey' => 'class_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'InterviewCandidate' => array(
			'className' => 'InterviewCandidate',
			'foreignKey' => 'trainee_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'TraineeDocument' => array(
			'className' => 'TraineeDocument',
			'foreignKey' => 'trainee_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'TraineeExpense' => array(
			'className' => 'TraineeExpense',
			'foreignKey' => 'trainee_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'TraineeFamily' => array(
			'className' => 'TraineeFamily',
			'foreignKey' => 'trainee_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'TraineeMicrofinanceImage' => array(
			'className' => 'TraineeMicrofinanceImage',
			'foreignKey' => 'trainee_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'TraineeMicrofinanceRecord' => array(
			'className' => 'TraineeMicrofinanceRecord',
			'foreignKey' => 'trainee_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'TraineePhone' => array(
			'className' => 'TraineePhone',
			'foreignKey' => 'trainee_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'TraineeProfileImage' => array(
			'className' => 'TraineeProfileImage',
			'foreignKey' => 'trainee_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'TraineeVoice' => array(
			'className' => 'TraineeVoice',
			'foreignKey' => 'trainee_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
