@extends('layouts.app')

@section('titulo', 'Criar usuário')

@section('content')
<div class="container bg-white shadow p-4">
	<h3 class="text-center">Criar usuário</h3>
	<form
		action="{{ route('usuarios.store') }}"
		method="post"
	>
		@csrf
		<div class="mb-3">
			<label
				for="nome"
				class="form-label"
			>Nome <span class="text-danger">*</span></label>
			<input
				type="text"
				class="form-control"
				id="nome"
				name="nome"
				required
			>
		</div>
		<div class="mb-3">
			<label
				for="email"
				class="form-label"
			>Email <span class="text-danger">*</span></label>
			<input
				type="email"
				class="form-control"
				id="email"
				name="email"
				required
			>
		</div>
		<div class="mb-3">
			<label
				for="senha"
				class="form-label"
			>Senha <span class="text-danger">*</span></label>
			<input
				type="password"
				class="form-control"
				id="senha"
				name="senha"
				required
			>
		</div>
		<div class="mb-3">
			<label for="confirmar_senha">Confirmar senha <span class="text-danger">*</span></label>
			<input
				type="password"
				class="form-control"
				id="confirmar_senha"
				name="confirmar_senha"
				required
			>
		</div>
		<div class="mb-3">
			<button
				type="submit"
				class="btn btn-primary"
			>Salvar</button>
		</div>
	</form>
</div>
@endsection