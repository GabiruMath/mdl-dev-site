<?php 

    namespace Controllers;
    class HomeController extends Controller{
        public function run(){
            $this->view = 'HomeView';
            $className = 'Views\\' . $this->view;
            $view = new $className;
            $view->render('home');

        }
    }

?>