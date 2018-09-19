<?php
class Conexion
{
    protected $host;
    protected $con;
    protected $usu;
    protected $pass;
    protected $db;
    public function Conexion()
    {
        $this->host = 'localhost';
        $this->usu = 'root';
        $this->pass = '';
        $this->db = 'curso_curricula';

        $this->cn = new mysqli($thi->host,$this->usu,$this->pass,$this->db);
        $this->cn->set_charset("utf8");
        if($this->cn->{'connect_errno'}>0)
        {
            return NULL;

        }

        else{
            return $this->cn;
        }
    }
    }
