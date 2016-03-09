<?php

App::uses('AppHelper', 'View/Helper');

/**
*
*/
class ForeachHelper extends AppHelper
{

  //interview index past_interviewsテーブル用 提出済み書類数取得
  public function completed_document_count($interview_id){
    $this->InterviewDocStatusList = ClassRegistry::init('InterviewDocStatusList');

    $options = array();
    $options['conditions'] = array(
      'InterviewDocStatusList.interview_id'=> $interview_id,
      'InterviewDocStatusList.status_id' => 1
      );
    $options['fields'] = array(
      'count(InterviewDocStatusList.id) as cnt',
      );
    $completed_document_count = $this->InterviewDocStatusList->find('all', $options);
    return $completed_document_count;

  }

  //interview index past_interviewsテーブル用 組合書類総数取得
  public function document_count($association_id){
    $this->AssociationDocument = ClassRegistry::init('AssociationDocument');

    $options = array();
    $options['conditions'] = array(
      'AssociationDocument.association_id'=> $association_id
      );
    $options['fields'] = array(
      'count(AssociationDocument.id) as cnt',
      );
    $association_document_list = $this->AssociationDocument->find('all', $options);
    return $association_document_list;

  }

  //インタビュー profileページ 提出書類一覧取得Helper
  //組合書類選択ページ用書類取得Helper
  public function association_document_list($folder_id, $interview_id){
    $this->DocName = ClassRegistry::init('DocName');
    $this->InterviewDocStatusList = ClassRegistry::init('InterviewDocStatusList');
    $this->AssociationDocument = ClassRegistry::init('AssociationDocument');
    $options['conditions'] = array(
      'DocName.folder_id' => $folder_id,
      'DocName.flag' => 0,
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
      'InterviewDocStatusList.interview_id',
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
      'conditions' => array('AssoDoc.id = InterviewDocStatusList.association_document_id', 'InterviewDocStatusList.interview_id' =>$interview_id)
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