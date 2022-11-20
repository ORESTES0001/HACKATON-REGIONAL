<?php
class Cicloestral extends Controller
{
   public function index()
    {
        $data['page_name']= "Ciclo Estral";
        $data['function_css']= "ciclo.css";
        $data['function_js']= "ciclo1.js";
        $data['function1_js']= "ciclo2.js";
        $this->views->getView($this,'index',$data);
    }
}