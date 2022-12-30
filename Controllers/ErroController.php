<?php 

    namespace Controllers;
    class ErroController extends Controller{
        public function run(){
            $this->view = 'ErroView';
            $className = 'Views\\' . $this->view;
            $view = new $className;
            $view->render('erro');

        }
    }

?>