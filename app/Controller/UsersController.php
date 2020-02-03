<?php
class UsersController extends AppController{

    public $components = array('Flash');

    public function view(){
        $this->set('users', $this->User->find('all'));
    }

    public function signup(){

        if($this->request->is('post')){
            if($this->User->save($this->request->data)){
                $this->Flash->success('usuario guardado');
                return $this->redirect(array('controller' => "Cakes", "action" => "index"));
            }

            return $this->redirect(array('controller' => "Users", "action" => "signup"));
        }
    }

    public function signin(){
        
    }
}