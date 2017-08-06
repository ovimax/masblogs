<!DOCTYPE html>
<html>
    <head>
        <title>Woops. What happend?</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:400" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Nosifer' rel='stylesheet'>
        <link rel="shortcut icon" type="image/png" href="{!! asset('favicon.png') !!}"/>
        <link rel="stylesheet" type="text/css" href="{!! asset('plugins/bootstrap/css/bootstrap.min.css') !!}">
        <link rel="stylesheet" type="text/css" href="{!! asset('plugins/font-awesome/css/font-awesome.min.css') !!}">

        <style>
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
                color: #000;
            }

            .container-error {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
                background: #fff url('assets/img/error-500.jpg') center no-repeat;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 150px;
                margin-bottom: 40px;
                font-family: 'Nosifer';
                text-align: left;
            }

            .message-box {
                padding: 20px 0;
                border:1px solid;
                background-color: rgba(255,255,255,0.8);
            }

            .message-box > p{
                font-size: 60px;
            }

            .message-box > span{
                font-size: 30px;
                margin-bottom: 20px;
            }
            .btn-back {
                font-size: 30px;
                padding: 5px 15px;
                cursor: pointer;
                margin: 10px 0;
            }
            .report {
                background-color: rgba(255, 0, 0, 0.8);
                color:#fff;
            }
        </style>
    </head>
    <body>


        <div class="container-error"><div class="content container">
            <div class="row"><div class="col-sm-3 title">500</div></div>
            <div class="row">
                <div class="message-box">
                    <p><i class="fa fa-exclamation-triangle"></i> MENUDO DESASTRE <i class="fa fa-exclamation-triangle"></i></p>
                    <span>Ha ocurrido un error inesperado</span>
                    @if (session('status'))
                        <span id="repost-msg">Hemos comunicado el fallo. Gracias.</span>
                    @endif
                    <div class="row">

                        {!! Form::open(['url'=>'report']) !!}
                        {!! Form::hidden('texto', $e->getMessage()) !!}
                        {!! Form::hidden('code',500) !!}
                        {!! Form::hidden('url',request()->path()) !!}
                            <div class="col-sm-3 col-sm-offset-2"><button type="submit" class="btn-back report">REPORT</button></div>
                        {!! Form::close() !!}
                        <div class="col-sm-3 col-sm-offset-2"><button class="btn-back" onclick="window.history.go(-1); return false;">VOLVER</button></div>         
                    </div>
                </div>
            </div>
        </div></div>
    </body>
    <footer>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="{!! asset('plugins/bootstrap/js/bootstrap.min.js') !!}"></script>
    </footer>
</html>
