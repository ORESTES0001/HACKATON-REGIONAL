<?php
class Tables extends Controller
{
   public function index()
    {
        $data['page_name']= "tables";
        $data['function_css']= "tablas1.css";
        $data['function_js']= "inicio1.js";
        $this->views->getView($this,'index',$data);
    }
}
