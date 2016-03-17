<?php
  App::uses('AppModel', 'Model');

class ArosAco extends AppModel {
  public $belongsTo = array('Aro','Aco');
}