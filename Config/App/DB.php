<?php
class DB extends Conexion
{

    /*
LISTAR REGISTROS DESDE LA BASE DE DATOS 
*/

    public static function listEqual($table, $params = [], $limit = null)
    {

        $cols_values = "";
        $limits = "";
        if (!empty($params)) {
            $cols_values .= "WHERE";
            foreach ($params as $key => $value) {
                $cols_values .= " {$key}= :{$key} AND";
            }
            $cols_values = substr($cols_values, 0, -3);
        }

        if ($limit !== null) {
            $limit = " LIMIT {$limit}";
        }

        $stmt =  "SELECT * FROM $table {$cols_values}{$limit}";
        if (!$rows = parent::query($stmt, $params)) {
            return false;
        }
        return $limit === 1 ? $rows[0] : $rows;
    }

    /*
    INSERTAR REGISTROS A LA BASE DE DATOS
    */
    public static function insert($table, $params)
    {
        $cols = "";
        $placeholders = "";
        foreach ($params as  $key => $value) {
            $cols .= "{$key} ,";
            $placeholders .= ":{$key} ,";
        }
        $cols = substr($cols,0,-1);
        $placeholders = substr($placeholders,0,-1);
        $stmt= "INSERT INTO {$table}({$cols}) VALUES ({$placeholders})";

        if($id= parent::query($stmt,$params)){

            return $id;

        }else{
            return false;
        }
    }
}
