@extends('template')

@section('titulo', 'Home')

@section('conteudo')

    <div class="container">
        <div class="row my-4">
            <div class="col-8">
                <div id="carouselImagens" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselImagens" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselImagens" data-slide-to="1"></li>
                        <li data-target="#carouselImagens" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="https://unsplash.it/400/200" alt="Primeiro Slide" />
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Título do Primeiro Slide</h5>
                                <p>Descrição do Primeiro Slide</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://unsplash.it/400/200" alt="Segundo Slide" />
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Título do Segundo Slide</h5>
                                <p>Descrição do Segundo Slide</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://unsplash.it/400/200" alt="Terceiro Slide" />
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Título do Terceiro Slide</h5>
                                <p>Descrição do Terceiro Slide</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselImagens" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselImagens" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                    </a>
                </div>
            </div>
            <div class="col-4">
                <h2>Últimos Posts</h2>
                <ul class="list-group">
                    <li class="list-group-item">Post 1</li>
                    <li class="list-group-item">Post 2</li>
                    <li class="list-group-item">Post 3</li>
                    <li class="list-group-item">Post 4</li>
                    <li class="list-group-item">Post 5</li>
                </ul>
            </div>
        </div>
        <h2 class="my-3">Todos os Posts</h2>
        <div class="row my-2">
            <div class="col-4">
                <div class="card">
                    <img class="card-img-top" src="https://unsplash.it/400/200" alt="Imagem de capa do card" />
                    <div class="card-body">
                        <h5 class="card-title">Título do card</h5>
                        <p class="card-text">Descrição do card</p>
                        <a href="#" class="btn btn-primary">Ver mais</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img class="card-img-top" src="https://unsplash.it/400/200" alt="Imagem de capa do card" />
                    <div class="card-body">
                        <h5 class="card-title">Título do card</h5>
                        <p class="card-text">Descrição do card</p>
                        <a href="#" class="btn btn-primary">Ver mais</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img class="card-img-top" src="https://unsplash.it/400/200" alt="Imagem de capa do card" />
                    <div class="card-body">
                        <h5 class="card-title">Título do card</h5>
                        <p class="card-text">Descrição do card</p>
                        <a href="#" class="btn btn-primary">Ver mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
