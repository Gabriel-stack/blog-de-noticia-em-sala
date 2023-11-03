@extends('layouts.app')

@section('titulo', 'Posts')

@section('content')
    <div class="container bg-white shadow p-4">
        {{-- botão para ir para página de criar um post --}}
        <div class="text-end mb-3">
            <a href="{{route('posts.create')}}" class="btn btn-primary">
                Adicionar
            </a>
        </div>
        {{-- FIM BOTÃO --}}

        {{-- tabela de posts --}}
        <div class="table-responsive">
            <table class="table table-bordered">
                <caption>Lista de posts</caption>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Data de publicação</th>
                        <th scope="col">Data de atualização</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->titulo }}</td>
                        <td>{{ $post->categoria->nome }}</td>
                        <td>{{ $post->conteudo }}</td>
                        <td> {{ $post->data_publicacao }}</td>
                        <td> {{ $post->updated_at }}</td>
                        <td>
                           <a class="btn btn-primary"
                           href="{{ route('posts.edit', $post->id) }}">
                            Editar
                        </a>
                          <form action="{{ route('posts.destroy', $post->id) }}"
                                  method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7"
                            class="text-center">Nenhum post cadastrado</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        {{-- FIM TABELA --}}
    </div>
@endsection
