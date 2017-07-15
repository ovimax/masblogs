@extends ('layouts.public')

@section('title') Bienvenido @endsection

@section ('CSScontent')
<style type="text/css">
    #wellcome-box{
        background-color: #000;

    }

    #news-box{
        height: 200px;
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
</style>
@endsection


@section ('content')

    <div id="wellcome-box">
        @include('public.home.includes.wellcome-box')
    </div>
    <div id="news-box"></div>
    <div id="ranking-box"></div>
    <div id="powerby-box"></div>

@endsection

@section ('JScontent')
<script type="text/javascript">
    var alt = $(window).height();
    var anh = $(window).width();
    $('#wellcome-box').css({
        'height' : alt,
        'padding' : '20px',
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
            'padding' : '20px',
        })
    })

    
</script>

@endsection