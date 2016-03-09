<?php
App::uses('AppModel', 'Model');
/**
 * DocTemplate Model
 *
 * @property DocumentName $DocumentName
 * @property OutputDocument $OutputDocument
 */
class DocTemplate extends AppModel {

	public $actsAs = array(
		'UploadPack.Upload' => array(
			'img' => array(
				'path' => ':webroot/doc/:model/:basename.:extension'
					),
				'maxSize' => array(
					'rule' => array('attachmentMaxSize', 20971520),
					'message' => 'The Maximum File Upload Size is under 20MB. Please upload again.'
					),
				)
		);




/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'DocName' => array(
			'className' => 'DocName',
			'foreignKey' => 'document_name_id',
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
		'OutputDocument' => array(
			'className' => 'OutputDocument',
			'foreignKey' => 'doc_template_id',
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
