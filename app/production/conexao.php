<?php
// Conexão com banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "gof";

// $connect = mysqli_connect($servername, $username, $password, $db_name);

    $mysqli = new mysqli($servername,$username,$password,$db_name);
    if($mysqli->connect_error)
        die('Connect Error');

// if(mysqli_connect_error()):
// 	echo "Falha na conexão: ".mysqli_connect_error();
// endif;

?>