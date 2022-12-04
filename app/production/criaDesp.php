<?php
require_once "conexao.php";

 
// Define variables and initialize with empty values
$nome = $_POST["nome"];
$descricao = $_POST["descricao"];

echo "ta cleaaa".$nome;

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // echo "1 <br>";
        // Prepare an insert statement
        $sql = "INSERT INTO despesa (nome, descricao) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($mysqli, $sql)){
            echo "2 <br>";
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param(
                $stmt,"ss",
                $param_nome,
                $param_descricao
            );
            
            // Set parameters
            $param_nome = $nome;
            $param_descricao = $descricao;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                echo "sucesso <br>";
                // Records created successfully. Redirect to landing page
                header("location: visualizarDesp.php");
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