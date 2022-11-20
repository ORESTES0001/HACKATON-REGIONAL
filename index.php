<?php
/* redireccion del index para poder acceder al resto de rutas si intentamos acceder al resto de rutas 
como Helpers Config entre otros estaran bloqueados de forma directa, la unica manera es accediendo con 
redireccionamiento desde el index */
require_once 'Helpers/Helpers.php';
require_once 'Config/Config.php';
$ruta = !empty($_GET['url']) ? $_GET['url'] : "Home/index";
$array = explode("/", $ruta);
$controller = $array[0];
$metodo = "index";
$params = "";
if(!empty($array[1]))
{
    if($array[1] != "")
    {
        $method = $array[1];	
    }
}
if(!empty($array[2]))
	{
		if($array[2] != "")
		{
			for ($i=2; $i < count($array); $i++) {
				$params .=  $array[$i].',';
				# code...
			}
			$params = trim($params,',');
		}
	}

    require_once 'Config/App/autoload.php';

    $diController = "Controllers/".$controller.".php";
 if (file_exists($diController)) {
     require_once $diController;
    $controller = new $controller();
     if (method_exists($controller, $metodo)){
        $controller->$metodo($params);
        }else{
         echo "metodo no existente";
          }
      }else{
        echo "no existe el controlador";
      }