<?php
use Controllers\ErroController;

    class Application
    {
        public function run(){

            $url = isset($_GET['url']) ? explode('?', $_GET['url'])[0] : 'Home';
            $url = ucfirst($url);
            $url.= 'Controller';
            if(file_exists('Controllers/'.$url. '.php')){
                $className = 'Controllers\\'.$url;
                $controller = new $className;
                $controller->run();
            }else{
            $erro = new Controllers\ErroController();
            $erro->run();
            
            }
        }
    }
?>