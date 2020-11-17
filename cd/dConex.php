<?php 

  if (!isset($_SESSION)) {
    session_start();
  }
 
  class Conexion {

  private $cn;

    function conecta() {
        if ($this->cn == null) {
            $this->cn = mysqli_connect("localhost", "root", "", "sistema");
        }
        return $this->cn;
    }

    function Login($usr, $pas) {
        $vec = array();
        $sql = "select  id_user,nombre_user, email_user from usuario where nombre_user='$usr' and pass_user='$pas' ";
        $res = mysqli_query($this->conecta(), $sql) or
                die(mysqli_error($this->conecta()));
        $vec = array();
        if ($f = mysqli_fetch_array($res)) {
            $vec = $f;
        }

        return $vec;
    }

    function Registra($usr, $correo, $pas) {
        $sql = "insert into usuario (nombre_user,email_user,pass_user) values ('$usr', '$correo', '$pas') ";
        $res = mysqli_query($this->conecta(), $sql) or
                die(mysqli_error($this->conecta()));
    }

      
  }
?>