<?php
class CakeController extends AppController{

 public $helpers = array("Html", 'Form');
 public $components = array('Flash');

	public $users = [
		"user1" => [
			"nombre" => "jonathan",
			"apellido" => "correa"
		]
	];

	public function index(){

		$this->set('cakes', $this->Cake->find("all"));
	}

	public function add(){

		if($this->request->is('post')){
			if($this->Cake->save($this->request->data)){
				$this->Flash->success('Your cake has been created');
				return $this->redirect(["action", "index"]);
			}
		}
	}

}