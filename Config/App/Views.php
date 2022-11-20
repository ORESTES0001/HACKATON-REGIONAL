<?php /* consulta de lo que el usuario vera recuerdo que estamos trabajando con el metodo MVC
MODELO VISTA CONTROLADOR */
class Views{
    public function getView($controlador, $vista, $data=''){
        $controlador = get_class($controlador);
        if($controlador == 'Home'){
            $vista = 'Views/'.$vista.'.php';
        }else{
            $vista= 'Views/'.$controlador.'/'.$vista.'.php';
        }
        require $vista;
    }
}