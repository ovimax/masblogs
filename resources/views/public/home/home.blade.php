@extends ('layouts.public')

@section('title') Bienvenido @endsection

@section ('CSScontent')
<style type="text/css">
    #wellcome-box{
        background-color: #000;

    }

    #news-box{
        background-color: #ccc;
    }

    #staff-box{
        background-color: #eee;
    }

    #contact-box{
        background-color: #ccc;
    }

    @font-face {
        font-family: 'Old English Text';
        src: url('assets/fonts/old-english-text-mt.eot'); /* IE9 Compat Modes */
        src: url('assets/fonts/old-english-text-mt.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
           url('assets/fonts/old-english-text-mt.woff') format('woff'), /* Pretty Modern Browsers */
           url('assets/fonts/old-english-text-mt.ttf')  format('truetype'), /* Safari, Android, iOS */
           url('assets/fonts/old-english-text-mt.svg#svgFontName') format('svg'); /* Legacy iOS */
    }

    .wellcome-inbox{
        position: relative;
        background-color: #fff;
        height: 100%;
        background-image: url("assets/img/welcome_sinfondo.png");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center; 
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
        margin-top: 200px;
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
    .home-box{
        min-height: 100px;
        padding-top: 25px;
        padding-bottom: 30px;
    }
    .btn-icon{
        background-color: #343a40;
        color: #fff;
        float: right;
        border-top-right-radius: 0.25rem;
        border-bottom-right-radius: 0.25rem;
        padding: 5px 10px;
  
    }
    .btn-text{
        display: inline-block;
        padding: 5px 10px;
    }
    .btn-blogs{
        padding: 0px;
        border:none;
    }
    .news-title{
        text-align: center;
        font-size: 35px;
        font-weight: bold;
    }

    .staff-content-img{
        display: block;
        margin: auto; 
        height: 140px;
        width:140px;
    }

    .staff-content-img > img {
        border-radius: 50%;
        border: 10px double;
        background-color: #fff;
        width: 100%;
        height: 100%;
        
    }
    .staff-content-name{
        font-size: 20px;
        font-weight: bold;
        letter-spacing: 1.5px;
    }

    .staff-content-charge{
        font-size: 15px;
        font-style: italic;
    }
    .slick-center > .staff-content-img{
        height: 150px;
        width: 150px;
    }
    .slick-center > .staff-content-name{
        font-size: 25px;
    }
    .slick-center > .staff-content-charge{
        font-size: 20px;
    }

    footer{
        min-height: 200px;
        background-color: #343a40;
        color:#aaa;
    }

    .footer-logo{
        color:#aaa;
        font-family: 'Old English Text';float;
        font-size: 100px;
    }
    .footer-rrss{
        font-size: 50px;
        text-align: center;
    }
    .footer-menu{
        margin-top: 30px;
        text-align: right;
    }
    

</style>
@endsection


@section ('content')

    <div id="wellcome-box">
        @include('public.home.includes.wellcome-box')
    </div>
    <div class="home-box" id="news-box">
        @include('public.home.includes.news-box')
    </div>
    <div class="home-box" id="staff-box">
        @include('public.home.includes.staff-box')
    </div>
    <div class="home-box" id="contact-box">
        @include('public.home.includes.contact-box')
    </div>

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

    $('.staff-slick-info').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
    });

    
</script>

@endsection