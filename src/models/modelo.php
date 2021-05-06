<?php

/**
 * Service es una clase que contiene el modelo de datos y  realiza las transacciones de base de datos.
 */
class Service
{

    private $servicio;
    private $db;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->db = Database::connection();
        $this->servicio = array();
    }

    /**
     * Permite listar todos los servicios en base de datos.
     */
    public function getServicios()
    {
        // Realiza una consulta a la base de datos 
        $query = $this->db->query("SELECT * FROM servicios");
        // Iteración de la respuesta para poblar el array a mostrar
        foreach ($query as $res) {
            $this->servicio[] = $res;
        }
        // Retorna el servicio
        return $this->servicio;
        $this->db = null;
    }

    /**
     * Permite crear un nuevo registro en base de datos.
     */
    public function create($cliente, $nombre, $fecha_inicio, $ppto_horas, $clave_id, $descripcion, $fecha_fin, $fecha_fin_real, $nom_contacto, $equipo)
    {
        // Crea una sentencia preparada
        $statement = $this->db->prepare("INSERT INTO servicios (cliente, nombre, fecha_inicio, ppto_horas, clave_id, descripcion, fecha_fin, fecha_fin_real, nom_contacto, equipo) VALUES (?,?,?,?,?,?,?,?,?,?)");
        // Tipos de parámetros
        $paramType = "sssissssss";
        // ligar parámetros para marcadores
        $statement->bind_param($paramType, $cliente, $nombre, $fecha_inicio, $ppto_horas, $clave_id, $descripcion, $fecha_fin, $fecha_fin_real, $nom_contacto, $equipo);
        // Ejecuta la consulta
        $statement->execute();
        // Cerrar sentencia
        $statement->close();
        // Cerrar conexión
        $this->db->close();
    }

    /**
     * Permite actualizar un registro de acuerdo a los parámetro.
     */
    public function update($cliente, $nombre, $fecha_inicio, $ppto_horas, $clave_id, $descripcion, $fecha_fin, $fecha_fin_real, $nom_contacto, $equipo, $id)
    {
        // crea una sentencia preparada
        $statement = $this->db->prepare("UPDATE servicios SET cliente=?, nombre=?, fecha_inicio=?, ppto_horas=?, clave_id=?, descripcion=?, fecha_fin=?, fecha_fin_real=?, nom_contacto=?, equipo=? WHERE id =?");
        // Tipos de parámetros
        $paramType = "sssissssssi";
        // ligar parámetros para marcadores
        $statement->bind_param($paramType, $cliente, $nombre, $fecha_inicio, $ppto_horas, $clave_id, $descripcion, $fecha_fin, $fecha_fin_real, $nom_contacto, $equipo, $id);
        // Ejecuta la consulta
        $statement->execute();
        // Cerrar sentencia
        $statement->close();
        // Cerrar conexión
        $this->db->close();
    }

    /**
     * Permite eliminar un registro de acuerdo al `id` recibido por parámetro.
     */
    public function delete($id)
    {
        // Crea una sentencia preparada
        $statement = $this->db->prepare("DELETE FROM servicios WHERE id = ?");
        // ligar parámetros para marcadores
        $statement->bind_param("s", $id);
        // Ejecuta la consulta
        $statement->execute();
        // Cerrar sentencia
        $statement->close();
        // Cerrar conexión
        $this->db->close();
    }

    /**
     * Permite obtener un registro de acuerdo al `id` recibido por parámetro.
     */
    public function read($id)
    {
        // Crea una sentencia preparada
        $statement = $this->db->prepare("SELECT * FROM servicios WHERE id = ?");
        // ligar parámetros para marcadores
        $statement->bind_param("s", $id);
        // Ejecuta la consulta
        $statement->execute();
        // Obtiene el resultado de la sentencia
        $result = $statement->get_result();
        // Obtiene un array asociativo
        $result = $result->fetch_assoc();
        // Cerrar sentencia
        $statement->close();
        // Cerrar conexión
        $this->db->close();
        // Devuelve resultado
        return $result;
    }
}
