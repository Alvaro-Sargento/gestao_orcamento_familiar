<?php
require_once "conexao.php";

 
// Define variables and initialize with empty values
$dataP = $_POST["dataP"];
$objectivo = $_POST["obj"];
$valor = $_POST["valor"];
$descricao = $_POST["desc"];

echo "ta cleaaa".$desc;

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // echo "1 <br>";
        // Prepare an insert statement
        $sql = "INSERT INTO orcamento (dataP, objectivo, valor, descricao) VALUES (?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($mysqli, $sql)){
            echo "2 <br>";
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param(
                $stmt,"ssss",
                $param_dataP,
                $param_objectivo,
                $param_valor,
                $param_descricao
            );
            
            // Set parameters
            $param_dataP = $dataP;
            $param_objectivo = $objectivo;
            $param_valor = $valor;
            $param_descricao = $descricao;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                echo "sucesso <br>";
                // Records created successfully. Redirect to landing page
                header("location: visualizarOrca.php");
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