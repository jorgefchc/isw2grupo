<?php 

if($_POST) {
    include_once '../cd/dConex.php';
    $obj = new Conexion();

    $mensaje = "";
    if (isset($_POST["registrar"])) {
        $name_user = $_REQUEST["name_user"];
        $correo = $_REQUEST["correo"];
        $password = $_REQUEST["password"];

        if (trim($name_user) != "" && trim($correo) != "" && trim($password) != "") {
            $vec = $obj->Registra($name_user, $correo, $password);
            echo "<script>
                alert('Se Registró Correctamente');
                window.location= '../index.php';
            </script>";
        } else {
          echo "<script>
                alert('Debe ingresar sus datos');
                window.location= '../cp/pRegistra.php';
            </script>";
        }
        
    } else {
      header('../index.php');
    }
} else {
  header('../index.php');
}


?>