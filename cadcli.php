<?php
    include 'conecta.php';
    $nome = $_POST['nome'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $sql = "INSERT INTO pessoa(nome,celular,email) VALUES ('$nome','$celular','$email')";
    if (mysqli_query($conn,$sql)) {
        echo "<script language='javascript' type='text/javascript'>
        window.location.href='index.php';
        </script>";
    }
    else {
        echo "<script language='javascript' type='text/javascript'>
        alert('Erro! Cliente nao foi cadastrado!');
        window.location.href='index.php';
        </script>";
    }
    mysqli_close($conn);
?>