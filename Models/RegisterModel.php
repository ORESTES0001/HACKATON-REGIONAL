<?php
class RegisterModel extends DB
{

  public function __construct()
  {
    parent::__construct();
  }

  public static function validar()
  {
    $errores = [];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rep_password = $_POST['rep_password'];

    if ($password != $rep_password) {
      $errores = ['error' => 'Los password no son iguales'];
    }

    if (strlen($password) <= 5) {
      $errores = ['error' => 'El password es muy corto'];
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errores = ['error' => 'Correo no valido'];
    }

    if (!$nombre != '' || !$email != '' || !$password != '' || !$rep_password != '') {
      $errores = ['error' => 'Es necesario este campo'];
      
    }

    return $errores;
  }
  public static function login(string $email, string $pass)
  {
    $sql = "SELECT * FROM usuarios WHERE email= :email AND password =:pass LIMIT 1";
    return ($rows = parent::query($sql, ['email' => $email, 'pass' => $pass])) ? $rows[0] : [];
  }
}
