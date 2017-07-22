<!DOCTYPE html>
<html>
    <head>
        <title>404 | LOST</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:400" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" type="image/png" href="{!! asset('favicon.png') !!}"/>

        <style>
            @font-face {
                font-family: 'Old English Text';
                src: url('assets/fonts/old-english-text-mt.eot'); /* IE9 Compat Modes */
                src: url('assets/fonts/old-english-text-mt.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
                   url('assets/fonts/old-english-text-mt.woff') format('woff'), /* Pretty Modern Browsers */
                   url('assets/fonts/old-english-text-mt.ttf')  format('truetype'), /* Safari, Android, iOS */
                   url('assets/fonts/old-english-text-mt.svg#svgFontName') format('svg'); /* Legacy iOS */
                font-size: 20px;
            }

            .font-english {
                font-family: 'Old English Text'
            }

            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato', sans-serif;
                font-size: 36px
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .logo{
                font-size: 200px;
                font-family: 'Old English Text';
            }
            .error {
                font-size: 100px;
                font-family: 'Old English Text';
                padding-top: 15px;
                padding-bottom: 15px;
            }
            .margin-table {
                margin-bottom: 30px;
            }

            .margin-inner-table {
                margin-left: 10px;
            }
            .btn-back {
                font-size: 30px;
                padding: 5px 15px;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <table class="margin-table">
                    <tr>
                        <td class="logo">B</td>
                        <td>
                            <table class="margin-inner-table">
                                <tr>
                                    <td >¿Te has perdido?</td>
                                </tr>
                                <tr>
                                    <td class="error">404</td>
                                </tr>
                                <tr>
                                    <td>Página no encotrada</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <button class="btn-back" onclick="window.history.go(-1); return false;">VOLVER</button>
            </div>
        </div>
    </body>
</html>
