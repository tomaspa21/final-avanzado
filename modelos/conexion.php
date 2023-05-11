<?php

class Conexion{
    static public function conectar(){
    $link = new PDO("mysql:host=localhost;port=3306;dbname=id19928355_final_avanzado", "id19928355_tomaspa_experto", "+?G_4<gMIpQoPDCV");
    $link->exec("set names utf8");
    return $link;
}
}