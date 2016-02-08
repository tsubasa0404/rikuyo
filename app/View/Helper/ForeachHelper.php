<?php

App::uses('AppHelper', 'View/Helper');

/**
*
*/
class ForeachHelper extends AppHelper
{

  //インタビュー profileページ 提出書類一覧取得Helper
  //組合書類選択ページ用書類取得Helper
  public function association_document_list($folder_id){
    $this->DocName = ClassRegistry::init('DocName');
    $this->InterviewDocStatusList = ClassRegistry::init('InterviewDocStatusList');
    $this->AssociationDocument = ClassRegistry::init('AssociationDocument');
    $options['conditions'] = array(
      'DocName.folder_id' => $folder_id,
      'DocName.flag' => 0
    );
    $options['fields'] = array(
      'DocName.id',
      'DocName.name_jp',
      'DocName.name_en',
      'DocName.folder_id',
      'DocName.sub_folder_id',
      'DocName.lang_jpn',
      'DocName.lang_eng',
      'DocName.lang_khm',
      'DocName.note',
      'DocName.flag',
      'InterviewDocStatusList.id',
      'InterviewDocStatusList.status_id',
      );
    $options['group'] = array('DocName.id');
    $options['joins'][] = array(
      'table' => 'association_documents',
      'alias' => 'AssoDoc',
      'type' => 'LEFT',
      'conditions' => 'AssoDoc.doc_name_id = DocName.id'
    );
    $options['joins'][] = array(
      'table' => 'interview_doc_status_lists',
      'alias' => 'InterviewDocStatusList',
      'type' => 'LEFT',
      'conditions' => 'AssoDoc.id = InterviewDocStatusList.association_document_id'
    );
    $documents = $this->DocName->find('all', $options);
    return $documents;
  }

  //書類一覧ページ Doc Names用サブフォルダー取得Helper
  public function subFolder($folder_id){
    $this->SubFolder = ClassRegistry::init('SubFolder');
    $subfolders = $this->SubFolder->find('all', array('conditions' => array('SubFolder.folder_id' => $folder_id, 'SubFolder.flag' => 0)));
    return $subfolders;
  }

  //書類一覧ページ Doc Names用書類取得Helper
  public function documents($folder_id, $sub_folder_id){
    $this->DocName = ClassRegistry::init('DocName');
    $options['conditions'] = array(
      'DocName.folder_id' => $folder_id,
      'DocName.sub_folder_id' => $sub_folder_id,
      'DocName.flag' => 0
    );
    $options['fields'] = array(
      'DocName.id',
      'DocName.name_jp',
      'DocName.name_en',
      'DocName.folder_id',
      'DocName.sub_folder_id',
      'DocName.lang_jpn',
      'DocName.lang_eng',
      'DocName.lang_khm',
      'DocName.note',
      'DocName.flag',
      );
    $options['group'] = array('DocName.id');
    $options['recursive'] = -1;
    $documents = $this->DocName->find('all', $options);
    return $documents;
  }
  public function downloadJpn($doc_id){
    $this->DocTemplate = ClassRegistry::init('DocTemplate');
    $this->DocName2 = ClassRegistry::init('DocName');
    $options['conditions'] = array(
      'DocTemplate.document_name_id' => $doc_id,
      'DocTemplate.lang' => 'jpn',
      'DocName2.flag' => 0
    );
    $options['fields'] = array(
      'max(DocTemplate.id) AS id',
      'DocTemplate.document_name_id',
      'DocTemplate.img_file_name',
      'DocTemplate.lang',
      'DocTemplate.note',
      'DocTemplate.modified',
      );
    $options['joins'][] = array(
      'table' => 'doc_names',
      'alias' => 'DocName2',
      'type' => 'LEFT',
      'conditions' => 'DocTemplate.document_name_id = DocName2.id'
      );
    $options['order'] = array('DocTemplate.modified' => 'desc');
    $options['recursive'] = -1;
    $downloads = $this->DocTemplate->find('all', $options);
    return $downloads;
  }
  public function downloadEng($doc_id){
    $this->DocTemplate = ClassRegistry::init('DocTemplate');
    $this->DocName2 = ClassRegistry::init('DocName');
    $options['conditions'] = array(
      'DocTemplate.document_name_id' => $doc_id,
      'DocTemplate.lang' => 'eng',
      'DocName2.flag' => 0
    );
    $options['fields'] = array(
      'max(DocTemplate.id) AS id',
      'DocTemplate.document_name_id',
      'DocTemplate.img_file_name',
      'DocTemplate.lang',
      'DocTemplate.note',
      'DocTemplate.modified',
      );
    $options['joins'][] = array(
      'table' => 'doc_names',
      'alias' => 'DocName2',
      'type' => 'LEFT',
      'conditions' => 'DocTemplate.document_name_id = DocName2.id'
      );
    $options['order'] = array('DocTemplate.modified' => 'desc');
    $options['recursive'] = -1;
    $downloads = $this->DocTemplate->find('all', $options);
    return $downloads;
  }
  public function downloadKhm($doc_id){
    $this->DocTemplate = ClassRegistry::init('DocTemplate');
    $this->DocName2 = ClassRegistry::init('DocName');
    $options['conditions'] = array(
      'DocTemplate.document_name_id' => $doc_id,
      'DocTemplate.lang' => 'khm',
      'DocName2.flag' => 0
    );
    $options['fields'] = array(
      'max(DocTemplate.id) AS id',
      'DocTemplate.document_name_id',
      'DocTemplate.img_file_name',
      'DocTemplate.lang',
      'DocTemplate.note',
      'DocTemplate.modified',
      );
    $options['joins'][] = array(
      'table' => 'doc_names',
      'alias' => 'DocName2',
      'type' => 'LEFT',
      'conditions' => 'DocTemplate.document_name_id = DocName2.id'
      );
    $options['order'] = array('DocTemplate.modified' => 'desc');
    $options['recursive'] = -1;
    $downloads = $this->DocTemplate->find('all', $options);
    return $downloads;
  }

  //組合書類選択ページ用書類取得Helper
  public function association_documents($folder_id){
    $this->DocName = ClassRegistry::init('DocName');
    $options['conditions'] = array(
      'DocName.folder_id' => $folder_id,
      'DocName.flag' => 0
    );
    $options['fields'] = array(
      'DocName.id',
      'DocName.name_jp',
      'DocName.name_en',
      'DocName.folder_id',
      'DocName.sub_folder_id',
      'DocName.lang_jpn',
      'DocName.lang_eng',
      'DocName.lang_khm',
      'DocName.note',
      'DocName.flag',
      );
    $options['group'] = array('DocName.id');

    $documents = $this->DocName->find('all', $options);
    return $documents;
  }

}