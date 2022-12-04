<?php
    require_once "conexao.php";

    $user_codigo = $_GET['id'];

    // Prepare a delete statement
    $sql = "DELETE FROM gestor WHERE id = ?";
    
    if($stmt = mysqli_prepare($mysqli, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_user_codigo);
        
        // Set parameters
        $param_user_codigo = $user_codigo;
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Records deleted successfully. Redirect to landing page
            header("location: visualizarGestor.php");
            exit();
        } else{
            echo "Erro ao apagar";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($mysqli);
?>