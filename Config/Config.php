<?php

const base_url = 'https://tecnoagro.azurewebsites.net';

define('SITE_LANG', 'es');
/* ----------------------------------------------------- */
/*             CONSTANTES PAGINAS DE NAVEGACION          */
/* ----------------------------------------------------- */

const DASHBOARD = 1;
const PERFIL = 2;
const USUARIOS = 3;
const ROLES = 4;
const TABLAS = 5;
const CICLOESTRAL = 6;
const USERTYPE = 7;

/* ----------------------------------------------------- */
/*             CONSTANTES PARA CONEXION DB               */
/* ----------------------------------------------------- */

const DB_HOST = "dbtecno.mysql.database.azure.com";
const DB_NAME = "dbtecno";
const DB_USER = "Slender";
const DB_PASSWORD = "Tecno89!!";
const DB_CHARSET = "utf8";

/* ----------------------------------------------------- */
/*             INFORMACION DEL SITIO                  */
/* ----------------------------------------------------- */
define('SITE_CHARSET', 'UTF-8');
define('SITE_NAME', 'TECNOAGRO');
define('SITE_VERSION', '1.0.0');
define('SITE_LOGO', 'gsflogo.svg');
define('SITE_FAVICON', 'android-icon-48x48.png');
define('SITE_DESC', 'TECNOAGRO FRAMEWORK');
define('SITE_LOGO_MAIN', '');

/* ----------------------------------------------------- */
/*             DIRECTORIOS DE LA APP                    */
/* ----------------------------------------------------- */
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__DIR__));
define('CONTROLLER', ROOT . DS . 'Controller');
define('VIEW', ROOT . DS . "Views");
define('TEMPLATE', VIEW . DS . "Templates");
define('IMAGE_PATH', ROOT . DS . "Assets" . DS . "img" . DS);


/* ----------------------------------------------------- */
/*             ARCHIVOS PUBLICOS                         */
/* ----------------------------------------------------- */
define('ASSETS', base_url . '/Assets');
define('CSS', ASSETS . "/css");
define('JS', ASSETS . "/js");
define('PLUGINS', ASSETS . "/plugins");
define('FAVICON', ASSETS . "/favicon/");
define('FONTS', ASSETS . "/font-awesome");
define('IMG', ASSETS . "/img/");
define('UPLOADS', ASSETS . "/uploads");


/* ----------------------------------------------------- */
/*              CONTROLLER - METHOD - ERORR DEFAULT              */
/* ----------------------------------------------------- */

define('CONTROLLER_DEFAULT', 'Register');
define('METHOD_DEFAULT', 'index');
define('CONTROLLER_ERROR', 'Error404');
