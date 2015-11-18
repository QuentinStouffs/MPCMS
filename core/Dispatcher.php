<?php

class Dispatcher{
    
    var $request;
    function __construct(){
            
        $this->request = new Request();
        Router::parse($this->request->url, $this->request);
        
        //Charger le controller
        $controller = $this->loadController();
        $controller->view();
    }
    
    /*
    *
    *Renvoi un objet de type controller
    *
    */
    function loadController(){
        //récupère le nom du controller depuis le router $this->request->controller, lui ajoute une majuscule et 'Controller'
        $name = ucfirst($this->request->controller).'Controller'; 
        $file = ROOT.DS.'controller'.DS.$name.'.php';
        require $file;
        return new $name($this->request);  
        
    }
}