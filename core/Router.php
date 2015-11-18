<?php
class Router{
    /**
    *
    *permet de parser une url
    *@param $url Url à parser
    *@return tableau contenant les parametres
    **/
    static function parse($url, $request){
        /*retirer les / de l'url */
        
        $url = trim($url, '/'); 
        $params = explode('/', $url);
        
        $request->controller = $params[0];
        $request->action = isset($params[1]) ? $params[1] : 'index'; //Si params¨[1] est défini, chargement de celui-ci, sinon chargement de index
        $request->params = array_slice($params,2);
        
//        $r = array(
//            'controller' => $params[0],
//            'action' => isset($params[1]) ? $params[1] : 'index', //Si params¨[1] est défini, chargement de celui-ci, sinon chargement de index
//            );
            //recupère les deux premiers parametres du tableau
//        $r['params'] = array_slice($params,2);
        
        return true;
    }
    
    
}