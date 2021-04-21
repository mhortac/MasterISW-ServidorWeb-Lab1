<?php

class Service
{

    private $servicio;
    private $db;

    public function __construct()
    {
        $this->servicio = array();
        // to connect in local
        //$this->db = new mysqli("localhost", "root", "", "test");
        // to connect with docker
        $this->db = new mysqli("db", "root", "example", "test");
    }

    private function setNames()
    {
        return $this->db->query("SET NAMES 'utf8'");
    }

    public function getServicios()
    {

        self::setNames();
        $sql = "SELECT * FROM servicios";
        foreach ($this->db->query($sql) as $res) {
            $this->servicio[] = $res;
        }

        return $this->servicio;
        $this->db = null;
    }

    public function setServicio($cliente, $nombre, $fecha_inicio, $ppto_horas, $clave_id, $descripcion, $fecha_fin, $fecha_fin_real, $nom_contacto, $equipo)
    {

        self::setNames();

        $sql = "INSERT INTO servicios(cliente, nombre, fecha_inicio, ppto_horas, clave_id, descripcion, fecha_fin, fecha_fin_real, nom_contacto, equipo) 
                VALUES ('" . $cliente . "', '" . $nombre . "', '" . $fecha_inicio . "', '" . $ppto_horas . "', '" . $clave_id . "', '" . $descripcion . "', '" . $fecha_fin . "', '" . $fecha_fin_real . "', '" . $nom_contacto . "', '" . $equipo . "')";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteServicio($id)
    {

        self::setNames();
        $sql = "DELETE FROM servicios WHERE id = $id";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
