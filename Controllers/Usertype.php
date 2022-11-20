<?php
class Usertype extends Controller
{
   public function index()
    {
        $data['page_name']= "tipo de usuario";
        $data['function_css']= "UserType.css";
        $data['function_js']= "UserType1.js";
        $this->views->getView($this,'index',$data);
    }
}
