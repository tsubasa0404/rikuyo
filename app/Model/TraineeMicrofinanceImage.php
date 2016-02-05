<?php
App::uses('AppModel', 'Model');
/**
 * TraineeMicrofinanceImage Model
 *
 * @property Trainee $Trainee
 */
class TraineeMicrofinanceImage extends AppModel {


	public $actsAs = array(
		'UploadPack.Upload' => array(
			'img' => array(
				'path' => ':webroot/img/:model/:style/:basename.:extension',
				'styles' => array(
					'big' => '250h',
					),
				'maxSize' => array(
					'rule' => array('attachmentMaxSize', 20*1024*1024),
					'message' => 'The Maximum File Upload Size is under 20MB. Please upload again.'
					),
				'item' => array(
					'rule' => array('attachmentContentType', array('image/jpeg', 'image/gif', 'image/png')),
					'message' => 'You can upload only JPG, GIF or PNG files.'
					)
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
