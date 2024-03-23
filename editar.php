<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="content-langague" content="pt-br">
    <meta name="viewport" content="width = device-width, initial-scale=1">
    <title>Cadastro de Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #9400D3;
        }
    </style>
</head>

<body>
    <center>
        <h1>Cadastro de clientes</h1>
    </center>
    <hr />
    <br />
    <br />
    <br />
    <br />
    <main>
        <div class="container">
            <div class="row row-cols-2 row row-md-4 text-center">
                <div class="col-md-12">
                    <div class="card mb-4 rounded-3 shadow-sw">
                        <div class="card-heard py-3">
                            <h4 class="my-0 fw-normal"><svg xmlns='http://www.w3.org/2000/svg' width='32' height='32' fill='Navy' class='bi bi-pencil-square' viewBox='0 0 16 16'>
        <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
        <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z'/>
      </svg>&nbsp;&nbsp;Edição de clientes</h4>

                        </div>
                        <div class="card-body text-start">
                        <?php
                           include 'conecta.php';
                           $id = $_GET['id'];
                           $sql = "SELECT * FROM pessoa WHERE id=$id";
                           $query = $conn->query($sql);
                            while ($dados = $query->fetch_assoc()) {
                                $nome = $dados['nome'];
                                $celular = $dados['celular'];
                                $email = $dados['email'];
                            }
                           ?>
                        <form action= "editarcli.php?id=<?php echo $id; ?>" method="post">
                            <label>Nome</label>
                            <input type="text" class="form-control" name="nome" value="<?php echo $nome;?>" required/>
                            <br/>
                            <label>celular</label>
                            <input type="text" class="form-control" name="celular" value="<?php echo $celular;?>" required/>
                            <br/>
                            <label>E-mail</E-mail></label>
                            <input type="email" class="form-control" name="email" value="<?php echo $email;?>" required/>
                            <br/>
                            <button type="submit" class="btn btn-outline-success">EDITAR</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cadastro de Clientes</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action= "cadcli.php" method="post">
                            <label>Nome</label>
                            <input type="text" class="form-control" name="nome" required/>
                            <br/>
                            <label>celular</label>
                            <input type="text" class="form-control" name="celular" required/>
                            <br/>
                            <label>E-mail</E-mail></label>
                            <input type="email" class="form-control" name="email" required/>
                            <br/>
                            <button type="submit" class="btn btn-outline-success">CADASTRAR</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>