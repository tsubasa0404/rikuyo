<?php
App::uses('AppModel', 'Model');
/**
 * TraineeDocument Model
 *
 * @property Trainee $Trainee
 */
class TraineeDocument extends AppModel {

	public $actsAs = array(
		'UploadPack.Upload' => array(
			'img' => array(
				'path' => ':webroot/img/:model/:basename.:extension',
				'maxSize' => array(
					'rule' => array('attachmentMaxSize', 20971520),
					'message' => 'The Maximum File Upload Size is under 20MB. Please upload again.'
					),
				'item' => array(
					'rule' => array('attachmentContentType', array('image/jpeg', 'image/gif', 'image/png')),
					'message' => 'You can upload only JPG, GIF or PNG files.'
					)
				)
			)
		);
	public $validate = array(
		'img' => array(
				'maxSize' => array(
					'rule' => array('attachmentMaxSize', 20971520),
					'message' => 'The Maximum File Upload Size is under 20MB. Please upload again.'
					)
				)
		);



/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Trainee' => array(
			'className' => 'Trainee',
			'foreignKey' => 'trainee_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
