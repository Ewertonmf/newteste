<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo isset($viewData['title']) ? $viewData['title'] : 'Página não encontrada!'; ?></title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/uniceab/painel/assets/css/index.css" />


    </head>
    <body>
        <div class="page_error">
            <div align="center" class="logo_error">
                <a href=""><img src="/uniceab/painel/assets/img/error404.png" alt=""></a>
            </div>
            <div class="ad-log-in-con">
                <div class="pagina-erro">
                    <h2 class="text-danger title_error"><strong>404</strong></h2>
                    <div class="text-error">
                        <strong>Desculpe, mas a página solicitada não foi encontrada!</strong><br><br>
                    </div>
                    <button type="button" class="btn btn-primaryerror">Ir para Home</button>
                </div>
            </div>
        </div>
    </body>
</html>