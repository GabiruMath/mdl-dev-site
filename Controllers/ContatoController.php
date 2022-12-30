<?php 

    namespace Controllers;
    class ContatoController extends Controller{
        public function run(){
            $this->view = 'ContatoView';
            $className = 'Views\\' . $this->view;
            $view = new $className;
            $view->render('contato');

        }
    }

?>