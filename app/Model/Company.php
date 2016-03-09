<?php
App::uses('AppModel', 'Model');
/**
 * Company Model
 *
 * @property Association $Association
 * @property Inspection $Inspection
 * @property Interview $Interview
 */
class Company extends AppModel {

	//組合に所属してる会社
	public function associatedCompanies($association_id){
		$options = array();
    $options['conditions'] = array(
      'Company.flag'=> 0,
      'Company.association_id' => $association_id
      );
    $options['fields'] = array(
      'id',
      'company_jp',
      'company_en',
      );
    $options['joins'][] = array(
      'table' => 'associations',
      'alias' => 'Ass',
      'type' => 'LEFT',
      'conditions' => 'association_id = Ass.id'
      );
    return $this->find('all', $options);
	}

	//indexページ用会社一覧取得
	public function companyList(){
		$options = array(
			'conditions' => array(
				'Company.flag' => 0
				),
			'fields' => array(
				'Company.id',
				'Company.company_jp',
				'Company.company_en',
				'Company.province',
				'Company.address_jp',
				'Company.address_en',
				'Company.phone1',
				'Company.job',
				'Company.company_jp',
				'Company.company_jp',
				'Association.id',
				'Association.association_jp',
				'Association.association_en'
				),
			'order' => array('Company.id' => 'asc'),
			);

		return $this->find('all', $options);
	}

	public function __getComAsoArray(){
		//まず企業と組織の多次元連想配列取得

		$options = array();

		$options['fields'] = array(
			'Company.id',
			'Company.company_jp',
			'Company.company_en',
			'Asso.association_jp',
			'Asso.association_en',
			);
		$options['joins'][] = array(
			'table' => 'associations',
			'alias' => 'Asso',
			'type' => 'LEFT',
			'conditions' => 'Company.association_id = Asso.id'
			);
		$options['order'][] = array('Company.company_en' => 'asc');
		return $this->find('all', $options);
	}

	public function __setTwoDimensionalArray($lang){
		//企業と組織の多次元連想配列から、
		//企業idと企業名(組合名)の2次元連想配列を作る
		$raw_options = $this->__getComAsoArray();
    if($raw_options){
  		if($lang=='ja'){
  			foreach($raw_options as $opt){
  				$associative_array[] = array(
  					$opt['Company']['id'], $opt['Company']['company_jp']."(".$opt['Asso']['association_jp'].")");
  			}
  		} else {
  			foreach($raw_options as $opt){
  				$associative_array[] = array(
  					$opt['Company']['id'], $opt['Company']['company_en']."(".$opt['Asso']['association_en'].")");
  			}
  		}
  		return $associative_array;
    }
    return $associative_array = array();
	}

	public function __optionComAso($lang){
		//2次元連想配列から2次元配列に整形する。
		$associative_array = $this->__setTwoDimensionalArray($lang);
    if($associative_array){

  		foreach($associative_array as $arr){
  			$key = $arr[0];
  			$val = $arr[1];
  		 $com_aso_options[$key] = $val;
  		}
  		return $com_aso_options;
    }
    return $com_aso_options = array();
	}

	public $validate = array(
    'company_en' => array(
      'alphaNumeric' => array(
        'rule' => 'alphaNumeric', //半角英数字のみ
        'message' => 'Only Alphabet and Number is valid'
        )
     	),
    'postcode' => array(
      'numeric' => array(
        'rule' => 'numeric', //数字のみ
        'message' => 'Only number is valid. If using "-", please remove it', //数字のみ
        ),
      'custom' => array(
      	'rule' => array('custom', "/^[0-9]+$/"),
      	'message' => 'Only number is valid.'
      	)
    	)
  );


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
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Inspection' => array(
			'className' => 'Inspection',
			'foreignKey' => 'company_id',
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
		'Interview' => array(
			'className' => 'Interview',
			'foreignKey' => 'company_id',
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
