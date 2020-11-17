<?php 

if($_POST) {
    include_once '../cd/dConex.php';
    $obj = new Conexion();

    $mensaje = "";
    if (isset($_POST["acceder"])) {
        $user = $_REQUEST["user"];
        $password = $_REQUEST["password"];
        
        if (trim($user) != "" && trim($password) != "") {
            $vec = $obj->Login($user, $password);
            if (count($vec) == 0) {
                 echo "<script>
                            alert('Usuaro o Clave incorrecto');
                            window.location= '../index.php';
                        </script>";
            } else {
                $vece[] = [$_REQUEST["user"], $_REQUEST["password"]];
                $_SESSION["user"] = $vece[0][0];
                echo "<script>
                            alert('BIENVENIDO');
                            window.location= '../cp/adm_menu.php';
                        </script>";
            }
        } else {
          echo "<script>
                alert('Debe ingresar sus datos');
                window.location= '../index.php';
            </script>";
        }
        
    }
} else {
  //header('../index.php');
}


?>