<?php
require_once "conexao.php";

 
// Define variables and initialize with empty values
$apelido = $_POST["apelido"];
$nome = $_POST["nome"];
$bi = $_POST["bi"];
$sexo = $_POST["sexo"];
$tipo = $_POST["tipo"];

echo "ta cleaaa".$nome;

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // echo "1 <br>";
        // Prepare an insert statement
        $sql = "INSERT INTO gestor (apelido, nome, bi, sexo, tipo) VALUES (?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($mysqli, $sql)){
            echo "2 <br>";
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param(
                $stmt,"sssss",
                $param_apelido,
                $param_nome,
                $param_bi,
                $param_sexo,
                $param_tipo
            );
            
            // Set parameters
            $param_apelido = $apelido;
            $param_nome = $nome;
            $param_bi = $bi;
            $param_sexo = $sexo;
            $param_tipo = $tipo;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                echo "sucesso <br>";
                // Records created successfully. Redirect to landing page
                header("location: visualizarGestor.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    // }
    
    // Close connection
    mysqli_close($mysqli);
}
?>