<?php
class CakesController extends AppController{

	
	public $paginate = [
		'limit' => 6,
        'order' => array(
            'Cake.id' => 'asc'
        )
	];

	public function index(){
		$this->Cake->recursive = 0;
		$this->Paginator->settings = $this->paginate;
		$cakes = $this->Paginator->paginate();
		$this->set('cakes', $cakes);
	}

	public function add(){

		if($this->request->is('post')){
			if($this->Cake->save($this->request->data)){
				$this->Session->setFlash("the cake has been created", $element = 'default', $params = array("class" => "alert alert-success"));
				return $this->redirect(["action" => "index"]);

			}
		}
	}

	public function edit($id = null){

		if(!$id){
			throw new Exception('Id no enviado');
		}

		$cake = $this->Cake->findById($id);

		if(!$cake){
			throw new Exception('El id no se encuentra en nuestros registros');
		}

		if($this->request->is(["post", "put"])){

			$this->Cake->id = $id;
			if($this->Cake->save($this->request->data)){
				$this->Session->setFlash('Cake editado', $element = 'default', $params = array("class" => "alert alert-success"));
				return $this->redirect(["action" => "index"]);
			}

			return $this->Session->setFlash('no se pudo editar el cake', $element = 'default', $params = array("class" => "alert alert-danger"));
		}

		if (!$this->request->data) {
			$this->request->data = $cake;
		}

	}


	public function delete($id = null){

		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		if ($this->Cake->delete($id)) {
			$this->Session->setFlash('The cake with id: ' . $id . ' has been deleted.', $element = 'default', $params = array("class" => "alert alert-success"));
			$this->redirect(array('action' => 'index'));
		}
	}

}