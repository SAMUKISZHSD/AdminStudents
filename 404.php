<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Erro 404</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-md-6 text-center">
                <h1 class="display-1">404</h1>
                <p class="lead">Desculpe, a página que você está procurando não foi encontrada.</p>
                <button id="btnVoltar" class="btn btn-primary">Voltar para a página inicial</button>
            </div>
        </div>
    </div>

    <script>
    $(document).ready(function(){
        $("#btnVoltar").click(function(){
            $.ajax({
                url: 'verificar_login.php',
                type: 'GET',
                success: function(data) {
                    window.location.href = data;
                }
            });
        });
    });
    </script>
</body>
</html>
