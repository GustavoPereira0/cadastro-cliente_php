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
    <center><button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal"><b>CADASTRAR</b></button></center>
    <br />
    <main>
        <div class="container">
            <div class="row row-cols-2 row row-md-4 text-center">
                <div class="col-md-12">
                    <div class="card mb-4 rounded-3 shadow-sw">
                        <div class="card-heard py-3">
                            <h4 class="my-0 fw-normal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4" />
                                </svg>&nbsp;&nbsp;Clientes</h4>

                        </div>
                        <div class="card-body">
                            <?php
                            include 'cliente.php';
                            ?>
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