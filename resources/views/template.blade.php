<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />

    <title>
        @yield('titulo')
    </title>
</head>

<body>
    <!-- cabeçalho -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="https://unsplash.it/100/50" alt="" />
            Blog
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo03">
            <ul class="navbar-nav d-flex justify-content-end mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Cadastro</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- fim cabeçalho -->

    @yield('conteudo')

    <!-- rodapé -->
    <footer class="container-fluid bg-dark text-white text-center py-4">
        <p>Todos direitos reservados</p>
    </footer>
    <!-- fim rodapé -->

    <!-- inicio scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- fim scripts -->
</body>

</html>
