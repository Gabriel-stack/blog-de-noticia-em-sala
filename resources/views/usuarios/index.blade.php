@extends('layouts.app')

@section('titulo', 'Usuários')

@section('content')
<div class="container bg-white shadow p-4">
	{{-- botão para ir para página de criar um usuário --}}
	<div class="text-end mb-3">
		<a
			href=""
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
			</tbody>
		</table>
	</div>
	{{-- FIM TABELA --}}
</div>
@endsection