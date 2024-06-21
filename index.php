<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax</title>
    <link rel="stylesheet" href="resources/css/style.css"> 
    <script src="resources/js/jquery-3.7.1.min.js"></script> 
    <script src="resources/js/script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <main id="pagina">
        <nav class="menu-top">
            <div class="logo"><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

                <h2>Logo</h2>
            </div>

            <div class="container-menu">
                <ul class="opcoes-menu">
                    <li onclick="carregarPagina('pessoa')" class="botao-menu"><a name="opcao-menu">Pessoas</a></li>
                    <li onclick="carregarPagina('contato')" class="botao-menu"><a name="opcao-menu">Cadastrar</a></li>
                    <li onclick="carregarPagina('sobre-nos')" class="botao-menu"><a name="opcao">Ajustes</a></li>
                </ul>
            </div>
        </nav>
        <div class="alert alert-success" role="alert">
        A simple success alert—check it out!
        </div>
        <div id="container">



        </div>
        <!-- <button onclick="carregarPagina()">Carregar Página</button> -->
    </main>

</body>
</html>
