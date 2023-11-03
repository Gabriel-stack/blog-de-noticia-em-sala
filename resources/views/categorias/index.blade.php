@extends('layouts.app')

@section('titulo', 'Categorias')

@section('content')
<div class="container bg-white shadow p-4">
	{{-- botão para ir para página de criar uma categoria --}}
	<div class="text-end mb-3">
		<a
			href="{{ route('categorias.create') }}"
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
				@forelse($categorias as $categoria)
				<tr>
					<td>{{ $categoria->id }}</td>
					<td>{{ $categoria->nome }}</td>
					<td> {{ $categoria->created_at }}</td>
					<td> {{ $categoria->updated_at }}</td>
					<td>
						<a
							href=""
							class="btn btn-primary"
						>
							Editar
						</a>
					<form action="{{ route('categorias.destroy', $categoria->id) }}"
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
					<td
						colspan="5"
						class="text-center"
					>Nenhuma categoria cadastrada</td>
				</tr>
				@endforelse
			</tbody>
		</table>
	</div>
	{{-- FIM TABELA --}}

</div>
@endsection