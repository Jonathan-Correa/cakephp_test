<?php
class UsersController extends AppController{


    public function view(){
        $this->set('users', $this->User->find('all'));
    }

    public function signup(){

        if($this->request->is('post')){
            if($this->User->save($this->request->data)){
                $this->Session->setFlash('usuario guardado', $element = 'default', $params = array('class' => "alert alert-success"));
                return $this->redirect(array('controller' => "Cakes", "action" => "index"));
            }

            return $this->redirect(array('controller' => "Users", "action" => "signup"));
        }
    }

    public function signin(){
        
    }
}