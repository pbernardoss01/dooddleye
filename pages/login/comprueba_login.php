<?php

try {

    $base = new PDO("mysql:host=localhost; dbname=dooddleye", "root", "");

    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM usuario where mail = :login and clave= :password";

    $resultado = $base->prepare($sql);

    $usuario = htmlentities(addslashes($_POST["usuario"]));
    $password = htmlentities(addslashes($_POST["password"]));


    $resultado->bindValue(":login", $usuario);
    $resultado->bindValue(":password", $password);

    $resultado->execute();

    $numero_registro = $resultado->rowCount();

    echo $numero_registro;
    if ($numero_registro != 0) {
        session_start();

        $_SESSION["login"] = $_POST["usuario"];
        header("location:usuarios_registrados.php");
    } else {

        header("location:errorLogin.php");
    }
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}
?>
