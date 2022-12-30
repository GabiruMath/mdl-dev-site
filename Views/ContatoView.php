<?php

    namespace Views;

    class ContatoView extends View
    {
        
        public function render($pageToRender, $header = 'header', $footer = 'footer'){
            $this->page = $pageToRender;

            if(file_exists('Views/pages/'. $pageToRender . '.php')){
                include 'Views/pages/' . $header . '.php';
                include 'Views/pages/' . $pageToRender . '.php';
                include 'Views/pages/' . $footer . '.php';
            }
        }
    }

?>