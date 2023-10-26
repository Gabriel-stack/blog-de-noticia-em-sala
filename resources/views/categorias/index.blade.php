@extends('layouts.app')

@section('titulo', 'Categorias')

@section('content')
<div class="container bg-white shadow p-4">
	{{-- botão para ir para página de criar uma categoria --}}
	<div class="text-end mb-3">
		<a
			href=""
			class="btn btn-primary"
		>
			Adicionar
		</a>
	</div>
	{{-- FIM BOTÃO --}}

	{{-- tabela de categorias --}}
	<div class="table-responsive">
		<table class="table table-bordered">
			<caption>Lista de categorias</caption>
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nome</th>
					<th scope="col">Data de criação</th>
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