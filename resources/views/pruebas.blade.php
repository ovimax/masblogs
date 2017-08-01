<!DOCTYPE html>
<html lang="{!! config('app.locale') !!}">

<header>

	<style type="text/css">
		.img-logro{
			height: 70px;
			width:70px;
			border:1px solid;
		}
		.box-logros{
			display: inline-flex;
		    border: 1px solid;
		    padding: 10px 35px;
		    border-radius: 50px;
		    position: absolute;
		    bottom: 200px;
		    margin: 0 auto;
		    max-width: 300px;
		    right: 0;
		    left: 0;
		    font-size: 20px;
		}
		.texto-logro{
			margin-left:20px;
		}
		p.titulo{
			margin: 0;
		}
		.animated {
		  animation-duration: 2s;
		  -webkit-animation-duration: 2s;
		  animation-fill-mode: both;
		  -webkit-animation-fill-mode: both;
		}
		.data-logro{
			display: inline-flex;
			position: relative;
		}

		@keyframes zoomIn {
  from {
    opacity: 0;
    transform: scale3d(.3, .3, .3);
  }

  50% {
    opacity: 1;
  }
}

.zoomIn {
  animation-name: zoomIn;
}
.descripcion-logro{
	margin: 0;
}
.descripcion-logro > span {
	font-weight: bold;
}

	</style>
</header>

<body>
 
<div class="box-logros zoomIn animated">
	<div class="data-logro">
		<div class="img-logro">
			<img src="http://lorempixel.com/70/70/">
		</div>
		<div class="texto-logro">
			<p class="titulo">NUEVO LOGRO: </p>
			<p class="descripcion-logro"><span>Bienvenido :</span> El nuevo</p>
		</div>
	</div>
</div>

</body>

<footer></footer>


</html>
