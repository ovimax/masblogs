<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @section('title') +Blogs @show </title>
    <link rel="shortcut icon" type="image/png" href="{!! asset('favicon.png') !!}"/>

    <!-- CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="{!! asset('plugins/bootstrap/css/bootstrap.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('plugins/slick/slick.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('plugins/slick/slick-theme.css') !!}">

    <!-- CSS Custom -->
    <link href="{{ asset( 'assets/css/shortcuts.css' ) }}" rel="stylesheet">
    <link href="{{ asset( 'assets/css/logros.css' ) }}" rel="stylesheet">

    <!-- Styles -->
    @yield ('CSScontent')
</head>