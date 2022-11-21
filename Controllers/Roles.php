<?php
class Roles extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
   public function index()
    {
        $data['roles']= $this->model->listRoles();
        $data['page_name']= "Roles";
        $data['function_css']= "index.css";
        $data['function_js']= "js2.js";
        $this->views->getView($this,'index',$data);
    }
}
