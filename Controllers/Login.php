<?php
class Login extends Controller
{
   public function index()
    {
        $data['page_name']= "Login";
        $data['function_css']= "index.css";
        $data['function_js']= "js2.js";
        $this->views->getView($this,'index',$data);
    }
}
