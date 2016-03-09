<?php
App::uses('AppModel', 'Model');
/**
 * TraineeProfileImage Model
 *
 * @property Trainee $Trainee
 */
class TraineeProfileImage extends AppModel {


	public $actsAs = array(
		'UploadPack.Upload' => array(
			'img' => array(
				'path' => ':webroot/img/:model/:style/:basename.:extension',
				'styles' => array(
					'big' => '190h',
					'small' => '120w',
					'thumb' => '[80x80]',
					),
				'maxSize' => array(
					'rule' => array('attachmentMaxSize', 20971520),
					'message' => 'The Maximum File Upload Size is under 20MB. Please upload again.'
					),
				'item' => array(
					'rule' => array('attachmentContentType', array('image/jpeg', 'image/gif', 'image/png')),
					'message' => 'You can upload only JPG, GIF or PNG files.'
					),
				'default_url' => ':webroot/img/trainee_profile_images/default.jpg'
				)
			)
		);

	public $validate = array(
		'img' => array(
				'maxSize' => array(
					'rule' => array('attachmentMaxSize', 20971520),
					'message' => 'The Maximum File Upload Size is under 20MB. Please upload again.'
					),
				'type' => array(
					'rule' => array('attachmentContentType', array('image/jpeg', 'image/gif', 'image/png')),
					'message' => 'You can upload only JPG, GIF or PNG files.'
					)
				)
		);

	public function profImg($id){
		$options = array();
		$options['conditions'] = array(
			'Trainee.id'=> $id
			);
		$options['fields'] = array(
			'Trainee.id',
			'TraineeProfileImage1.id',
			'TraineeProfileImage1.img_file_name',
			'TraineeProfileImage1.trainee_id'
			);
		$options['joins'][] = array(
			'table' => 'trainee_profile_images',
			'alias' => 'TraineeProfileImage1',
			'type' => 'LEFT',
			'conditions' => 'Trainee.id=TraineeProfileImage1.trainee_id'
			);
		return $this->find('all', $options);
	}




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
