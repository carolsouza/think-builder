<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>

        </title>

        @section('meta')
            <!-- Metas -->
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- Robots -->
            <meta name="rating" content="General">
            <meta name="robots" content="noindex, nofollow">
            <meta name="revisit-after" content="1">

            <!-- SEO - Keywords -->
            <meta name="description" content="">
            <meta name="keywords" content="">

            <!-- Favicon -->
            <link rel="shortcut icon" href="logo-vanguarda-top.png">
        @show

        <!-- carrega o css -->
        @section('css')
            <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="/css/animate.css">
            <link rel="stylesheet" type="text/css" href="/css/alertify.min.css">
            <link rel="stylesheet" type="text/css" href="/css/default.min.css">
            <link rel="stylesheet" type="text/css" href="/css/custom.css">
            <!-- <link rel="stylesheet" type="text/css" href="/css/estilo.css"> -->

            <!-- css externo -->
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        @show

        <!-- carrega os estilos  -->
        @section('styles')
             <style>
                 nav.navbar-transparente{
                    background: rgba(0,0,0,0.8);
                }
                /*.navbar-header .logo-header {
                    margin-left: 15px;
                    margin-top: 14px;
                }

                .navbar-header .logo-header img {
                    height: 50px;
                }

                .wrapper {
                    display: flex;
                    flex-flow: row wrap;
                    font-weight: bold;
                    text-align: center;
                }

                .header {
                    text-align: left;
                    flex: 1 100%;
                    height: 80px;
                    z-index: 1;
                }*/

                .conteudo {
                    text-align: left;
                    height: calc(100vh - 80px);
                    overflow: auto;
                }

                .aside-1 {
                    flex: 1 60px;
                }

                @media all and (min-width: 800px) {
                    .aside-1 {
                        order: 1;
                    }

                    .conteudo{
                        order: 2;
                        flex: 1 calc(100vw - 60px);
                    }

                    .aside-2 {
                        order: 3;
                    }

                    .footer  {
                        order: 4;
                    }
                }

                body {
                    padding: 0px;
                    margin:0px;
                    background: linear-gradient(50deg, #40186a, #ce1c20);
                    overflow: hidden;
                }

            </style>
        @show
    </head>

    <body>
        <div class="wrapper">
            <header class="header">
            <aside class="aside aside-1">
                @include('layouts/header')
            </aside>
                <div class="navbar-header">
                    <div class="logo-header">
                        <a href="/"><img src="/web/media/img/logo-vanguarda-top.png" alt=""></a>
                    </div>
                </div>
            </header>

            <article class="conteudo col-md-12">
                @section('dashboard')

                @show
            </article>

            @section('modal')

            @show
        </div>

        <footer class="footer bg-dark text-light">
            <p>Desenvolvido por Jurid T.I. - Todos os direitos reservados.</p>
        </footer>
    </body>
</html>

@section('js')
    <script src="/js/jquery.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/bootstrap-notify.js"></script>
    <script src="/js/alertify.min.js"></script>
    <script src="/js/custom.js"></script>
@show