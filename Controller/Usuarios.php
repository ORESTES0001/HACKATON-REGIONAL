<?php
class Usuarios extends Controller
{
    public function __construct()
    {
        Auth::noAuth();
        Permisos::getPermisos(USUARIOS);
        parent::__construct();
    }

    public function index()
    {        if (empty($_SESSION['permisosMod']['r'])) {
        header('Location:' . base_url . '/register');
    }
        $data['page_name'] = "Usuarios";
        $data['function_css'] = "usuarios1.css";
        $data['function_js'] = "inicio1.js";
       $this->views->getView($this, 'index', $data);
       
    }

    public function all()
    {
        $arrJson = [['id' => 1, 'nombre' => 'Luis Gonzalez', 'correo' => 'admin@admin.com', 'rol' => 'root', 'estado' => 'Activo',],['id' => 2, 'nombre' => 'Ruis Gonzalez', 'correo' => 'admin@admin.com', 'rol' => 'root', 'estado' => 'Activo',],['id' => 3, 'nombre' => 'Auis Gonzalez', 'correo' => 'admin@admin.com', 'rol' => 'root', 'estado' => 'Activo',],['id' => 4, 'nombre' => 'Yuis Gonzalez', 'correo' => 'admin@admin.com', 'rol' => 'root', 'estado' => 'Activo',],['id' => 5, 'nombre' => 'Wuis Gonzalez', 'correo' => 'admin@admin.com', 'rol' => 'root', 'estado' => 'Activo',],['id' => 6, 'nombre' => 'Buis Gonzalez', 'correo' => 'admin@admin.com', 'rol' => 'root', 'estado' => 'Activo',],['id' => 7, 'nombre' => 'Tuis Gonzalez', 'correo' => 'admin@admin.com', 'rol' => 'root', 'estado' => 'Activo',],['id' => 8, 'nombre' => 'Auis Gonzalez', 'correo' => 'admin@admin.com', 'rol' => 'root', 'estado' => 'Activo',],['id' => 9, 'nombre' => 'Vuis Gonzalez', 'correo' => 'admin@admin.com', 'rol' => 'root', 'estado' => 'Activo',],['id' => 10, 'nombre' => 'Zuis Gonzalez', 'correo' => 'admin@admin.com', 'rol' => 'root', 'estado' => 'Activo',],['id' => 11, 'nombre' => 'Xuis Gonzalez', 'correo' => 'admin@admin.com', 'rol' => 'root', 'estado' => 'Activo',]];

        echo json_encode($arrJson, JSON_UNESCAPED_UNICODE);
    }
}