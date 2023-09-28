@extends('template')

@section('titulo', 'Post')

@section('conteudo')
    <div class="container">
        <header class="my-5">
            <h1 class="display-3">
                Noticia sobre como ganhar dinheiro em menos de 1 hora
            </h1>
            <hr />
            <p class="text-muted">Postado em 15/09/2023</p>
        </header>

        <article class="my-3" style="text-align: justify">
			Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas cupiditate pariatur provident quia, praesentium, delectus iusto culpa voluptatum asperiores facere, tempore iure dolores sint. Voluptatem iure facilis obcaecati hic quasi id sapiente numquam, quidem corrupti debitis veritatis, quaerat perspiciatis officiis eius. Labore iure impedit nulla fugiat maxime pariatur consequatur. Adipisci laborum aliquam exercitationem laudantium magnam debitis vel, repellendus aliquid aspernatur modi officia. Placeat molestias, provident culpa illum nobis magni consectetur quo omnis cum quas pariatur nam excepturi. Aspernatur facilis vero provident rerum commodi autem. Veritatis ipsum reiciendis in necessitatibus ut distinctio. Delectus magni error a consectetur, beatae laborum inventore ducimus.
		</article>


        <div class="card bg-light">
            <div class="card-title">
                <h5 class="p-3">Comentários</h5>
            </div>
            <div class="card-body">
                <form action="">
                    <textarea class="form-control" name="" id="" cols="" rows="2"></textarea>
                    <button class="btn btn-primary my-1">Enviar</button>
                </form>
                <hr />
                <ul class="list-group mt-5">
                    <li class="list-group-item">Fulano: Lorem ipsum dolor sit.</li>
                    <li class="list-group-item">Fulano: Lorem ipsum dolor sit.</li>
                    <li class="list-group-item">Fulano: Lorem ipsum dolor sit.</li>
                    <li class="list-group-item">Fulano: Lorem ipsum dolor sit.</li>
                    <li class="list-group-item">Fulano: Lorem ipsum dolor sit.</li>
                    <li class="list-group-item">Fulano: Lorem ipsum dolor sit.</li>
                </ul>
            </div>
        </div>
    </div>

@endsection
