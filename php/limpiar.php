<?php
    // ESTO NO ESTÁ BIEN HECHO!!
    // Realmente esto tiene que estar vinculado a una base de datos.

    $user = "admin"; // Username
    $password = "root"; // Contraseña

    $PUser = $_POST["username"];
    $PPass = $_POST["password"];

    if ($PUser == $user && $PPass = $password){
        echo "Autenticación exitosa.<br>";
        for ($i=1;$i<=4;$i++){
            if (file_exists("../galeria/" . strval($i) . ".jpg") == true)
            {
                unlink("../galeria/" . strval($i) . ".jpg");
                echo strval($i) . ".jpg fue borrado con éxito.<br>";
            }
        }
        echo "<br><br>El proceso terminó.";
    }
    else{
        echo "Usuario o contraseña incorrectos.";
    }
?>