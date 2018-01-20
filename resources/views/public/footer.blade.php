
<footer>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-sm-2 col-xs-6 text-center footer-logo">
				<span class="">+B</span>
			</div>	
			<div class="col-sm-3 col-xs-6 footer-menu">
				<p>Sobre +Blogs</p>
				<p>Quienes Somos</p>
				<p>Mapa Web</p>
				<p>info@masblogs.es</p>
			</div>
			<div class="col-sm-7 col-xs-12 footer-rrss">
				<i class="fab fa-facebook-square"></i>
				<i class="fab fa-twitter-square m-l-20"></i>
				<i class="fab fa-linkedin m-l-20"></i>
				<i class="fas fa-rss-square m-l-20"></i>
			</div>
		</div>
	</div>
	@include('includes.logros')
    <script type="text/javascript" src="{!! asset('plugins/jquery-3.2.1.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('plugins/bootstrap/js/bootstrap.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('plugins/fontawesome-all.js') !!}"></script>
    
    <script type="text/javascript" src="{!! asset('plugins/slick/slick.min.js') !!}"></script>
    <script type="text/javascript">
			$('.box-logros').delay(3000).fadeOut();
	</script>
    @yield ('JScontent')
</footer>
