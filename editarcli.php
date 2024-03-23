<?php
    include 'conecta.php';
    $id = $_GET['id'];
    $nome = $_POST['nome'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $sql = "UPDATE pessoa SET nome=?,celular=?,email=? WHERE id=?";
    $stmt = $conn->prepare($sql) or die($conn->error);
    if (!$stmt) {
        echo "Erro: ".$conn->error;
    }
    $stmt->bind_param('sssi',$nome,$celular,$email,$id);
    $stmt->execute();
    $conn->close();
    header("Location: index.php");
?>