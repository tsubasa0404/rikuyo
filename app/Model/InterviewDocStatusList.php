<?php
App::uses('AppModel', 'Model');
/**
 * InterviewDocStatusList Model
 *
 * @property Interview $Interview
 * @property AssociationDocument $AssociationDocument
 * @property Status $Status
 */
class InterviewDocStatusList extends AppModel {




/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Interview' => array(
			'className' => 'Interview',
			'foreignKey' => 'interview_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AssociationDocument' => array(
			'className' => 'AssociationDocument',
			'foreignKey' => 'association_document_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
