<?php
class CakesController extends AppController{

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
				return $this->redirect(["action" => "index"]);
			}
		}
	}

	public function edit($id = null){

		if(!$id){
			throw new Exception('Id no enviado');
		}

		$cake = $this->Cake->findById($id);

		$this->set('cake', $cake);


		if(!$cake){
			throw new Exception('El id no se encuentra en nuestros registros');
		}

		if($this->request->is(["post", "put"])){

			$this->Cake->id = $id;
			if($this->Cake->save($this->request->data)){
				$this->Flash->success('Cake editado');
				return $this->redirect(["action" => "index"]);
			}

			return $this->Flash->error('no se pudo editar el cake');
		}

	}


	public function delete($id = null){

		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		if ($this->Cake->delete($id)) {
			$this->Flash->success('The cake with id: ' . $id . ' has been deleted.');
			$this->redirect(array('action' => 'index'));
		}
	}

}