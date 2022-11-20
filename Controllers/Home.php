<?php /* carga de los controladores de pagina para poder acceder a ellas */
class Home extends Controller
{
    public function index()
    {
        
        $data['page_name']= "inicio";
        $data['function_css']= "inicio3.css";
        $data['function_js']= "inicio1.js";
        $this->views->getView($this,'index',$data);
    }
}