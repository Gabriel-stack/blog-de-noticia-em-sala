@extends('layouts.app')

@section('titulo', 'Posts')

@section('content')
    <div class="container bg-white shadow p-4">
        {{-- botão para ir para página de criar um post --}}
        <div class="text-end mb-3">
            <a href="" class="btn btn-primary">
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
                </tbody>
            </table>
        </div>
        {{-- FIM TABELA --}}
    </div>
@endsection
