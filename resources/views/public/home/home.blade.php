@extends ('layouts.public')

@section('title') Bienvenido @endsection

@section ('CSScontent')
<style type="text/css">
    #wellcome-box{
        background-color: #000;

    }

    #news-box{
        height: auto;
        background-color: #ccc;
    }

    #ranking-box{
        height: 200px;
        background-color: #eee;
    }

    #powerby-box{
        height: 200px;
        background-color: #ccc;
    }

    .wellcome-messages{
        position: relative;
        background-color: #fff;
        height: 100%;

    }
    .menu-home-box{
        background-color : #fff;
        text-align: center;
        font-size: 20px;
        position: relative;
        z-index: 10;
        border-radius: 10px;
        border: 2px solid black;
        opacity: 0.9;
        margin-top: 180px;
        font-weight: bold;
    }

    .menu-home-box > .menu-element{
        padding: 10px
    }

    .mensajes-box{
        height: auto;
        background-color: #ccc;
        position: relative;
        z-index: 10;
        margin-top: 100px;
        padding: 20px;
        opacity: 0.8;
    }
    .mensaje-texto{
        text-align: center;
        font-style: oblique;
        font-size: 20px;
        
    }

    .mensaje-autor{
        text-align: right;
        font-weight: bold;
        font-size: 18px;
    }

</style>
@endsection


@section ('content')

    <div id="wellcome-box">
        @include('public.home.includes.wellcome-box')
    </div>
    <div id="news-box">
        @include('public.home.includes.news-box')
    </div>
    <div id="ranking-box"></div>
    <div id="powerby-box"></div>

@endsection

@section ('JScontent')
<script type="text/javascript">
    var alt = $(window).height();
    var anh = $(window).width();
    $('#wellcome-box').css({
        'height' : alt,
    })

    for (var i = 2; i >= 1; i--) {
        $('.bienvenido-'+i).css({
            'position' : 'absolute',
            'left' : Math.floor((Math.random() * anh) + 1),
            'top' : Math.floor((Math.random() * alt) + 1)
        })
    }
    

    $(window).resize(function(){
        alt = $(window).height();
        $('#wellcome-box').css({
            'height' : alt,
        })
    })

    
</script>

@endsection