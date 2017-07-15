@extends ('layouts.public')

@section('title') Bienvenido @endsection

@section ('CSScontent')@endsection


@section ('content')
    <div class="container m-t-100">

        <div class="content">
            <div class="title m-b-md">
                Bienvenido a +Blogs
            </div>

            <div class="links">
                <a role="button" data-toggle="collapse" href="#description" aria-expanded="false" aria-controls="description">Sobre +Blogs</a>
                <a href="https://github.com/ovimax/masblogs" target="_blank">GitHub</a>

                <div class="collapse container" id="description">
                    <div class="well margin-top">
                        Crea tu blog de forma fácil y rápida, elige entra las distintas categorías y plantillas, o créalas tu mismo desde cero. Nosotros podemos a tu disposición las herramientas necesarias para que tu blog llegue a más gente.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section ('JScontent')

<script type="text/javascript">
    console.log('Hola mundo')
</script>

@endsection