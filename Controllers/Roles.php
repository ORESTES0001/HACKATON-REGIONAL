<?php
class Roles extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
   public function index()
    {   //select
        // $data['roles']= RolesModel::listEqual('roles');
        $datos = [
            'nombre_rol'=> 'Website',
            'estado_rol'=> 1
        ];
        RolesModel::insert('roles',$datos);
        $data['page_name']= "Roles";
        $data['function_css']= "index.css";
        $data['function_js']= "js2.js";
        $this->views->getView($this,"index",$data);
    }
}
