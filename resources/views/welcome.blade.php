<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>+Blogs</title>
        <link rel="shortcut icon" type="image/png" href="{!! asset('favicon.png') !!}"/>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" type="text/css" href="{!! asset('plugins/bootstrap/css/bootstrap.min.css') !!}">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 58px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .m-t-100 {
                margin-top: 100px;
            }
            .margin-top{
                margin-top: 50px;
                font-size: 18px;
                font-weight: bold;
                letter-spacing: 0.8px;
            }
        </style>
    </head>
    <body>
        <div class="container m-t-100">

            <div class="content">
                <div class="title m-b-md">
                    Bienvenido a +Blogs
                </div>

                <div class="links">
                    <a role="button" data-toggle="collapse" href="#description" aria-expanded="false" aria-controls="description">Sobre +Blogs</a>
                    <a href="https://github.com/ovimax/masblogs" target="_blank">GitHub</a>

                    <div class="collapse container" id="description">
                        <div class="well margin-top">
                            Crea tu blog de forma fácil y rápida, elige entra las distintas categorías y plantillas, o créalas tu mismo desde cero. Nosotros podemos a tu disposición las herramientas necesarias para que tu blog llegue a más gente.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <footer>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="{!! asset('plugins/bootstrap/js/bootstrap.min.js') !!}"></script>
    </footer>
</html>
