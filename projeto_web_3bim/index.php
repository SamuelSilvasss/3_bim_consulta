<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <title>Projeto Web</title>
</head>

<body class="text-bg-light">
    <div class="container text-center">
        <div class="row bg-success">
            <div class="col">
                <nav class="navbar navbar-expand-lg bg-success">
                    <div class="container-fluid">
                        <a class="link-light navbar-brand" href="#">SISTEMA WEB</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="link-light navbar-brand" aria-current="page" href="#">Cadastar</a>
                                <li class="nav-item">
                                    <a class="link-light navbar-brand" aria-disabled="true" href="consultar.html">Consultar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        
        <div class="row">
            <div class="col">
                &nbsp;
            </div>
        </div>

        <div class="row bg-white">
            <div class="col text-start">
                <form name="cadastro" method="POST" action="">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nome:</label>
                        <input type="nome" class="form-control" id="exampleFormControlInput1"
                            placeholder="Digite o seu nome completo">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Telefone:</label>
                        <input type="telefone" class="form-control" id="exampleFormControlInput1"
                            placeholder="(XX) 00000-0000">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Origem:</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Celular</option>
                            <option value="1">Fixo</option>
                            <option value="2">Whatsapp</option>
                            <option value="3">Facebook</option>
                            <option value="4">Instagram</option>
                            <option value="5">Google meu negócio</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Data do Contato:</label>
                        <input type="contato" class="form-control" id="exampleFormControlInput1"
                            placeholder="Exemplo: 07/03/2007">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Observação:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <button type="button" class="btn btn-success">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>