<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ovidiu Muresan - CV</title>
        <link rel="shortcut icon" type="image/png" href="{!! asset('favicon.png') !!}"/>

        <link rel="stylesheet" type="text/css" href="{!! asset('plugins/font-awesome/css/font-awesome.min.css') !!}">
        <link href="{{ asset( 'assets/css/shortcuts.css' ) }}" rel="stylesheet">

        <style type="text/css">
            .cv-photo{
                border-radius: 50%;
                padding: 20px;
            }
            .table-border{
                border:2px solid;
            }
            .table-margin{
                margin-top: 20px;
            }
        </style>

    </head>
    <body>
        <h2>Ovidiu Silviu MURESAN</h2>
        <table class="table-border" width="700px">
            <tr>
                <td><img class="cv-photo" src="{{ asset('assets/img/ovidiu-foto.jpg') }}"></td>
                <td>
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> Calle Las Trece Rosas 2, Portal 3, 1ºC, Rivas Vaciamadrid, 28523, Madrid, ESPAÑA</p>
                    <p><i class="fa fa-mobile" aria-hidden="true"></i> (+34) 678 15 94 59</p>
                    <p><i class="fa fa-envelope" aria-hidden="true"></i> mos.gestion@gmail.com</p>
                    <p><i class="fa fa-linkedin-square" aria-hidden="true"></i> www.linkedin.com/in/osilvium</p>
                </td>
            </tr>
        </table>

        <table class="table-border table-margin" width="700px">
            <thead>
                <tr>
                    <th class="f-s-20 text-center"><i class="fa fa-flag-o" aria-hidden="true"></i> Experiencia</th>
                    <th class="f-s-20 text-center"><i class="fa fa-flag-o " aria-hidden="true"></i> Experiencia</th>
                    <th><i class="fa fa-book" aria-hidden="true"></i> Educación</th>
                </tr>
            </thead>
            <tr>
                <td>
                    <ul>
                        <li>
                            Desarrolador Web
                            <p><i>ConsultaClick España</i></p>
                            <p>Abril 2016 - Octubre 2017</p>
                        </li>
                        <li>
                            <p>Técnico Deportivo (Rugby)</p>
                            <p><i>Rugby Club Rivamadrid</i></p>
                            <p>Septiembre 2015 - Actualidad</p>
                        </li>
                        <li>
                            <p>Comercial</p>
                            <p><i>Gideon Company 21 S.L.</i></p>
                            <p>Diciembre 2014 - Octubre 2016</p>
                        </li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li>Licienciado en Matematicas</li>
                    </ul>
                </td>
            </tr>
        </table>

    </body>
</html>
