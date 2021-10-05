<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Docente_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }
    public function docentes()
    {
        $this->load->database();
        $query = $this->db->query("SELECT d.activo,p.id_persona,p.nombre,p.ci, d.carrera, p.cod_depart from docente d  INNER join persona p on d.id_persona=p.id_persona where d.activo=1");
        return $query->result();
    }
    public function add($email, $ci, $nombre, $carrera, $passw, $departa, $fecha_nac)
    {
        $this->load->database();
        $consulta = $this->db->query("SELECT usu FROM usuario WHERE usu LIKE '$email'");
        if ($consulta->num_rows() == 0) {

            switch ($departa) {
                case "Chuquisaca":
                    $cod_dep = '01';
                    break;
                case "La Paz":
                    $cod_dep = '02';
                    break;
                case "Cochabamba":
                    $cod_dep = '03';
                    break;
                case "Oruro":
                    $cod_dep = '04';
                    break;
                case "Potosí":
                    $cod_dep = '05';
                    break;
                case "Tarija":
                    $cod_dep = '06';
                    break;
                case "Santa Cruz":
                    $cod_dep = '07';
                    break;
                case "Beni":
                    $cod_dep = '08';
                    break;
                case "Pando":
                    $cod_dep = '09';
                    break;
                default:
                    # code...
                    break;
            }
            $consulta = $this->db->query("insert into persona (nombre, ci, fecha_nac, cod_depart) values ('$nombre', '$ci', '$fecha_nac', '$cod_dep')");
            $query = $this->db->query("SELECT p.id_persona FROM persona p where p.ci= '$ci'");
            $idp = $query->result()[0]->id_persona;
            $doce = $this->db->query("insert into docente (id_persona, carrera,activo) values ($idp, '$carrera',1);");
            $doce = $this->db->query("insert into usuario (usu, pass, rol, id_persona) values ('$email', '$passw', 1, $idp)");
            if ($doce == true) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    public function mod($id_persona, $modificar = "NULL", $email = "NULL", $ci = "NULL", $nombre = "NULL", $carrera = "NULL", $passw = "NULL", $departa = "NULL", $fecha_nac = "NULL")
    {
        if ($modificar == "NULL") {
            $this->load->database();
            $consulta = $this->db->query('select t2.usu, t2.ci, t2.nombre, d.carrera, t2.pass, t2.cod_depart, t2.fecha_nac from (select p.ci,p.nombre,p.fecha_nac,p.cod_depart,t1.* from (SELECT u.id_persona,u.usu,u.pass from usuario u WHERE id_persona=' . $id_persona . ' )t1 INNER  join persona p on t1.id_persona=p.id_persona)t2 INNER join docente d on t2.id_persona = d.id_persona');
            return $consulta->result();
        } else {
            switch ($departa) {
                case "Chuquisaca":
                    $cod_dep = '01';
                    break;
                case "La Paz":
                    $cod_dep = '02';
                    break;
                case "Cochabamba":
                    $cod_dep = '03';
                    break;
                case "Oruro":
                    $cod_dep = '04';
                    break;
                case "Potosí":
                    $cod_dep = '05';
                    break;
                case "Tarija":
                    $cod_dep = '06';
                    break;
                case "Santa Cruz":
                    $cod_dep = '07';
                    break;
                case "Beni":
                    $cod_dep = '08';
                    break;
                case "Pando":
                    $cod_dep = '09';
                    break;
                default:
                    # code...
                    break;
            }
            $consulta = $this->db->query("
              UPDATE persona SET nombre='$nombre', ci='$ci',
              fecha_nac='$fecha_nac', cod_depart='$cod_dep' WHERE id_persona=$id_persona;
                  ");
            $consulta2 = $this->db->query("
                  UPDATE docente SET carrera='$carrera' WHERE id_persona=$id_persona;");
            if ($consulta == true and $consulta2 == true) {
                return true;
            } else {
                return false;
            }
        }
    }
    public function elim($id_persona)
    {
        $this->load->database();
        $consulta = $this->db->query("
              UPDATE docente SET activo=0 WHERE id_persona=$id_persona;");
        if ($consulta == true) {
            return true;
        } else {
            return false;
        }
    }
}
