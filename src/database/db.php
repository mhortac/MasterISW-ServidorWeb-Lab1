<?php

/**
 *  Database es una clase que nos permitirá realizar la conexión a la base de datos
 */
class Database
{

    /**
     *  Nombre de host o dirección IP de la base de datos.
     */
    private const host = "db";
    /**
     *  Usuario de la base de datos.
     */
    private const user = "root";
    /**
     *  Contraseña de la base de datos.
     */
    private const pass = "example";
    /**
     *  Nombre de la base de datos.
     */
    private const dbname = "test";


    /**
     * Realiza una conexión  con la base de datos a partir de los parámetros de conexión  y devuelve una instancia o recurso
     */
    public static function connection()
    {
        $conn = new mysqli(self::host, self::user, self::pass, self::dbname);
        $conn->query("SET NAMES 'utf8'");
        return $conn;
    }
}
