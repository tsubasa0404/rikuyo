<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');
App::import('Model', 'Task');
App::import('Model', 'TraineeExpense');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	public $components = array(
		'Session',
		'DebugKit.Toolbar',
		'Auth' => array(
			'authorize' => array(
				 'Actions' => array('actionPath' => 'controllers') //ACLまわりのやつくさい
				)
			),
		'Acl'
		);

	public $helpers = array('Session','Html','Form');

	public function beforeFilter(){
		// $this->Auth->allow();
		$this->Auth->allow('login');
		$this->Auth->allow('acl_add');
    $this->Auth->loginAction 		= array('controller' => 'users', 'action' => 'login');
    $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
    $this->Auth->loginRedirect 	= array('controller' => 'pages', 'action' => 'display');

    //言語切り替えスイッチ
		$this->__setLang();
		$lang = $this->__setLang();
		$this->set(compact('lang'));
		//通知用データ取得
		$this->__taskNotification();
		$this->__expenseNotification();
	}


	public function __setLang(){
		if(!empty($this->params['named']['lang'])){
			$lang = $this->params['named']['lang'];
			Configure::write('Config.language', $lang);
			$this->Session->write('lang', $lang);
			$this->redirect($this->referer());
		} else if($this->Session->read('lang')){
			$lang = $this->Session->read('lang');
		}

		if(isset($lang)){
			Configure::write('Config.language', $lang);
			$this->Session->write('lang', $lang);
			return $lang;
		}
	}

	public function __taskNotification(){
		$Task = new Task;
		$notification_tasks = $Task->tasks();
		$this->set(compact('notification_tasks'));
	}
	public function __expenseNotification(){
		$TraineeExpense = new TraineeExpense;
		$notification_expenses = $TraineeExpense->expenses();
		$this->set(compact('notification_expenses'));
	}
}
