
<footer>
	@include('includes.logros')
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="{!! asset('plugins/bootstrap/js/bootstrap.min.js') !!}"></script>
    <script type="text/javascript">
			$('.box-logros').delay(3000).fadeOut();
	</script>
    @yield ('JScontent')
</footer>
