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
                border-radius: 75px;
                padding: 20px;
                width: 150px;
            }            
            .table-border{
                border:2px solid;
            }
            .table-margin{
                margin-top: 40px;
            }
            .datos-cv{
                font-size:20px;
                padding: 10px;
                
            }
            .datos-cv-skils{
                padding: 10px;
            }
            .table-head{
                border-bottom: 2px solid;
            }
            div.page
            {
                page-break-after: always;
                page-break-inside: avoid;
            }
            ul{
                padding-left:25px;
            }


        </style>

    </head>
    <body>

    <div class="page">
        {{-- DATOS PERSONALES --}}
        <table class="table-border" width="700px">
            <tr>
                <td><img class="cv-photo" src="{{ asset('assets/img/ovidiu-foto.jpg') }}"></td>
                <td>
                    <b style="font-size: 24px">Ovidiu Silviu MURESAN</b>
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> Calle Las Trece Rosas 2, Portal 3, 1ºC, Rivas Vaciamadrid, 28523, Madrid, ESPAÑA</p>
                    <p><i class="fa fa-mobile" aria-hidden="true"></i> (+34) 678 15 94 59</p>
                    <p><i class="fa fa-envelope" aria-hidden="true"></i> mos.gestion@gmail.com</p>
                    <p><i class="fa fa-linkedin-square" aria-hidden="true"></i> www.linkedin.com/in/osilvium</p>
                </td>
            </tr>
        </table>

        {{-- Objetivo --}}
        <table class="table-border table-margin" width="700px">
            <thead>
                <tr>
                    <th style= "padding-left:10px; padding-top:10px; font-size: 20px"><i class="fa fa-crosshairs" aria-hidden="true"></i> Objetivo</th>
                </tr>
            </thead>
            <tr>
                <td style= "padding: 10px">
                    Soy una persona muy sociable que enseguida se relaciona con la gente que le rodea, tengo don de gente. Soy competente y aprendo rápido cualquier trabajos que se me proponga, además ayuda a mejorar el trabajo a aprendido, asi como proporcionar idead que ayuden a maximizar el rendimiento de una empresa. Busco una empresa que mejor se adapte a mis conocimientos y aptitudes, y me ayude a seguir creciendo de forma personal y profesional.
                </td>
            </tr>
        </table>

        {{-- Datos CV --}}
        <table class="table-border table-margin" width="700px">
            <thead class="table-head">
                <tr>
                    <th class="datos-cv" style="border-right:2px solid"><i class="fa fa-flag-o" aria-hidden="true"></i> Experiencia</th>
                    <th class="datos-cv"><i class="fa fa-book" aria-hidden="true"></i> Educación</th>
                </tr>
            </thead>
            <tr>
                <td style="border-right:2px solid">
                    <ul>
                        <li>
                            <b>Desarrolador Web</b>
                            <p><i>ConsultaClick España</i></p>
                            <p>Abril 2016 - Octubre 2017</p>
                        </li>
                        <li>
                            <b>Técnico Deportivo (Rugby)</b>
                            <p><i>Rugby Club Rivamadrid</i></p>
                            <p>Septiembre 2015 - Actualidad</p>
                        </li>
                        <li>
                            <b>Comercial</b>
                            <p><i>Gideon Company 21 S.L.</i></p>
                            <p>Diciembre 2014 - Octubre 2016</p>
                        </li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li>
                            <b>Licienciado en Matematicas</b>
                            <p><i>Facultad de Ciencias Matematicas</i></p>
                            <p><i>Universidad Complutense de Madrid</i></p>
                        </li>
                        <li>
                            <b>Curso de Programción Web Avanzada</b>
                            <p>(jQuery, JavaScript, PHP y MySQL)</p>
                            <p><i>Academia Seis Cocos</i></p>
                        </li>
                        <li>
                            <b>Técnico Deportivo NIVEL I (Rugby)</b>
                            <p><i>Complejo Deportivo</i></p>
                            <p><i>Universidad Europea de Madrid</i></p>
                        </li>
                    </ul>

                </td>
            </tr>
        </table>
    </div>
        <table class="table-border" width="700px">
            <thead>
                <tr>
                    <th class="datos-cv" style= "border-bottom: 2px solid"><i class="fa fa-wrench" aria-hidden="true"></i> Aptitudes</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <table width="100%">
                            <thead class="table-head">
                                <tr>
                                    <th class="datos-cv-skils" style="border-right:2px solid"><i class="fa fa-home" aria-hidden="true"></i> FrontEnd</th>
                                    <th class="datos-cv-skils" style="border-right:2px solid"><i class="fa fa-cogs" aria-hidden="true"></i> BackEnd</th>
                                    <th class="datos-cv-skils"><i class="fa fa-database" aria-hidden="true"></i> DataBase</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="border-right:2px solid">
                                        <ul>
                                            <li>HTML 5</li>
                                            <li>JavaScript</li>
                                            <li>JQuery</li>
                                            <li>CSS3</li>
                                            <li>Bootstrap</li>
                                        </ul>
                                    </td>
                                    <td style="border-right:2px solid">
                                        <ul>
                                            <li>Framework Laravel</li>
                                            <li>PHP</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul>
                                            <li>MySQL</li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <hr>
                        <table width="100%">
                            <thead class="table-head">
                                <tr>
                                    <th class="datos-cv-skils" style="border-right:2px solid"><i class="fa fa-globe" aria-hidden="true"></i> Idiomas</th>
                                    <th class="datos-cv-skils"><i class="fa fa-laptop" aria-hidden="true"></i> Ofimática</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="border-right:2px solid">
                                        <ul>
                                            <li>Ingles C2</li>
                                            <li>Rumano C2</li>
                                            <li>Español C2</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul>
                                            <li>Word</li>
                                            <li>Excel</li>
                                            <li>PowerPoint</li>
                                            <li>PhotoShop Basic</li>
                                        </ul>
                                    </td>
    
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>

        <p class="text-center">Gracias por descargate mi curiculum. Nº - {{ $num }}</p>

    </body>
</html>
