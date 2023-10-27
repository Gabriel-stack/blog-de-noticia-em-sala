@extends('layouts.app')

@section('titulo', 'Criar categoria')

@section('content')
<div class="container bg-white shadow p-4">
	<h3 class="text-center">Criar categoria</h3>
	<form
		action=" {{ route('categorias.store') }}"
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
			<button
				type="submit"
				class="btn btn-primary"
			>Salvar</button>
		</div>
	</form>
</div>
@endsection