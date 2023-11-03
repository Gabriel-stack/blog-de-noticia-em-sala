@extends('layouts.app')

@section('titulo', 'Usuários')

@section('content')
<div class="container bg-white shadow p-4">
	{{-- botão para ir para página de criar um usuário --}}
	<div class="text-end mb-3">
		<a
			href="{{ route('usuarios.create') }}"
			class="btn btn-primary"
		>
			Adicionar
		</a>
	</div>
	{{-- FIM BOTÃO --}}

	{{-- tabela de usuários --}}
	<div class="table-responsive">
		<table class="table table-bordered">
			<caption>Lista de usuários</caption>
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nome</th>
					<th scope="col">Email</th>
					<th scope="col">Data de criação</th>
					<th scope="col">Data de atualização</th>
					<th scope="col">Ações</th>
				</tr>
			</thead>
			<tbody>
				@forelse($usuarios as $usuario)
				<tr>
					<td>{{ $usuario->id }}</td>
					<td>{{ $usuario->name }}</td>
					<td>{{ $usuario->email }}</td>
					<td> {{ $usuario->created_at }}</td>
					<td> {{ $usuario->updated_at }}</td>
					<td>
						<a href=""
						   class="btn btn-primary">
							Editar
						</a>
					<form action="{{ route('usuarios.destroy', $usuario->id) }}"
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
					<td colspan="6"
						class="text-center">Nenhum usuário cadastrado</td>
				</tr>
				@endforelse
			</tbody>
		</table>
	</div>
	{{-- FIM TABELA --}}
</div>
@endsection