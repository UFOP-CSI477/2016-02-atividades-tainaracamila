<!DOCTYPE html>
<html>
<title>Eventos Esportivos</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/css/bootstrap.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
    body {font-family: "Lato", sans-serif}
    .mySlides {display: none}

</style>
<body>

<p> Bem vindo! </p>

<!-- Navbar -->
<div class="w3-top">
    <div class="w3-bar w3-black w3-card-2">
        <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
        <a href="/eventos" class="w3-bar-item w3-button w3-padding-large">AREA GERAL</a>

        <div class="w3-dropdown-hover w3-hide-small">
        <button class="w3-padding-large w3-button" title="adm">AREA DO ATLETA <i class="fa fa-caret-down"></i></button>
        <div class="w3-dropdown-content w3-bar-block w3-card-4">
            <a href="{{ route('register') }}" class="w3-bar-item w3-button">Cadastro</a>
            <a href="/registros/create" class="w3-bar-item w3-button">Registrar em evento</a>
            <a href="/listar" class="w3-bar-item w3-button">Listar eventos cadastrados</a>
        </div>
        </div>
        <div class="w3-dropdown-hover w3-hide-small">
            <button class="w3-padding-large w3-button" title="adm">AREA DO ADMIN <i class="fa fa-caret-down"></i></button>
            <div class="w3-dropdown-content w3-bar-block w3-card-4">
                <a href="/registros" class="w3-bar-item w3-button">Lista de Registros</a>
                <a href="/listarA" class="w3-bar-item w3-button">Lista de Atletas</a>
            </div>
        </div>
        @if (Auth::guest())
            <a href="{{ route('login') }}" class="w3-bar-item w3-button w3-padding-large w3-right ">LOGIN</a>
            <a href="{{ route('register') }}" class="w3-bar-item w3-button w3-padding-large w3-right" >REGISTRAR</a>
        @else
            <div class="w3-dropdown-hover w3-hide-small w3-right ">
                <button class="w3-padding-large w3-button" title="adm">{{ Auth::user()->name }}<i class="fa fa-caret-down"></i></button>
                    <div class="w3-dropdown-content w3-bar-block w3-card-4">
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            LOGOUT
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
    <a href="/eventos" class="w3-bar-item w3-button w3-padding-large">AREA GERAL</a>
    <a href="/atletas" class="w3-bar-item w3-button w3-padding-large">AREA DO ATLETA</a>
    <a href="/admin" class="w3-bar-item w3-button w3-padding-large">AREA DO ADMIN</a>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:1200px;margin-top:55px;margin-bottom:300px";>
    <div class="content">
        @if(Session::has('error'))
            <div class="alert alert-danger">{{ Session::get('error') }}</div>
        @endif

        @if(Session::has('info'))
            <div class="alert alert-info">{{ Session::get('info') }}</div>
        @endif

        @if(Session::has('warning'))
            <div class="alert alert-warning">{{ Session::get('warning') }}</div>
        @endif

    @yield('conteudo')
    </div>
</div>

<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge navbar navbar-fixed-bottom">
    <p> Sistemas Web - Atividade Extra ~ Prova 1 em Laravel </p>
</footer>


</body>
</html>
