<?php
App::uses('AppModel', 'Model');
/**
 * DocName Model
 *
 * @property Folder $Folder
 * @property SubFolder $SubFolder
 * @property AssociationDocument $AssociationDocument
 */
class DocName extends AppModel {

	public function getDocOptionAjax($folder_id, $sub_folder_id){
		$option_documents = $this->find('all', array(
				'conditions' => array(
					'DocName.folder_id' => $folder_id,
					'DocName.sub_folder_id' => $sub_folder_id,
					'DocName.flag' => 0,
					),
				'fields' => array(
					'DocName.id',
					'DocName.name_jp',
					'DocName.name_en',
					),
				'order' => array('DocName.id' => 'asc'),
				'recursive' => -1
				));
		return $option_documents;
	}


	public function optionDocuments(){
		$options = array();
		$options['conditions'] = array(
			'DocName.flag'=> '0'
			);
		$options['fields'] = array(
			'DocName.id',
			'DocName.name_jp'
			);
		$options['recursive'] = -1;
		return $this->find('list', $options);
	}

	public function documents(){
		return $this->find('all');
	}


/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Folder' => array(
			'className' => 'DocFolder',
			'foreignKey' => 'folder_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'SubFolder' => array(
			'className' => 'SubFolder',
			'foreignKey' => 'sub_folder_id',
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
		'AssociationDocument' => array(
			'className' => 'AssociationDocument',
			'foreignKey' => 'doc_name_id',
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
