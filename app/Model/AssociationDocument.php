<?php
App::uses('AppModel', 'Model');
/**
 * AssociationDocument Model
 *
 * @property Association $Association
 * @property DocName $DocName
 * @property InterviewDocStatusList $InterviewDocStatusList
 */
class AssociationDocument extends AppModel {


 	//組合の選択された書類のフォルダー取得 association profile/interview profile page
  public function selectedFolders($association_id){
    $options = array();
    $options['conditions'] = array(
      'AssociationDocument.association_id'=> $association_id
      );
    $options['fields'] = array(
      'SelectedDocName.id',
      'SelectedDocName.folder_id',
      'DocFolder.id',
      'DocFolder.folder_jp',
      'DocFolder.folder_en',
      );
    $options['joins'][] = array(
      'table' => 'doc_names',
      'alias' => 'SelectedDocName',
      'type' => 'LEFT',
      'conditions' => array('SelectedDocName.id = AssociationDocument.doc_name_id', 'SelectedDocName.flag' => 0)
      );
    $options['joins'][] = array(
    'table' => 'doc_folders',
    'alias' => 'DocFolder',
    'type' => 'LEFT',
    'conditions' => 'DocFolder.id = SelectedDocName.folder_id'
    );
    $options['recursive'] = -1;
    $options['group'] = 'DocFolder.id';
    return $this->find('all', $options);
  }

  //組合の選択された書類一覧  association profile/interview profile page
	public function selectedDocuments($association_id){
		$options = array();
		$options['conditions'] = array(
			'AssociationDocument.association_id' => $association_id
			);
		$options['fields'] = array(
			'AssociationDocument.id',
			'AssociationDocument.association_id',
			'AssociationDocument.doc_name_id',
			'AssociationDocument.note',
			'DocName.name_jp',
			'DocName.name_en',
			'DocName.folder_id',
			'DocName.lang_jpn',
			'DocName.lang_eng',
			'DocName.lang_khm',
      'DocName.note',
      'DocStatus.id',
      'DocStatus.interview_id',
      'DocStatus.association_document_id',
      'DocStatus.status_id',
			'DocStatus.status_id',
			);
		$options['joins'][] = array(
		'table' => 'doc_names',
		'alias' => 'DocName',
		'type' => 'LEFT',
		'conditions' => array('DocName.id = doc_name_id','DocName.flag' => 0 )
		);
    $options['joins'][] = array(
    'table' => 'interview_doc_status_lists',
    'alias' => 'DocStatus',
    'type' => 'LEFT',
    'conditions' => array('AssociationDocument.id = DocStatus.association_document_id')
    );
		$options['recursive'] = -1;
		return $this->find('all', $options);
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
		'Association' => array(
			'className' => 'Association',
			'foreignKey' => 'association_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'DocName' => array(
			'className' => 'DocName',
			'foreignKey' => 'doc_name_id',
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
		'InterviewDocStatusList' => array(
			'className' => 'InterviewDocStatusList',
			'foreignKey' => 'association_document_id',
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
