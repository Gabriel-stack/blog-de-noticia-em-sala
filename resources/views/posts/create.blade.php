@extends('layouts.app')

@section('titulo', 'Criar post')

@section('content')
<div class="container bg-white shadow p-4">
	<h3 class="text-center">Criar post</h3>
	<form
		action=""
		method="post"
	>
		@csrf
		<div class="mb-3">
			<label
				for="titulo"
				class="form-label"
			>Título <span class="text-danger">*</span></label>
			<input
				type="text"
				class="form-control"
				id="titulo"
				name="titulo"
				required
			>
		</div>
		<div class="mb-3">
			<label
				for="conteudo"
				class="form-label"
			>Conteúdo <span class="text-danger">*</span></label>
			<textarea
				class="form-control"
				id="conteudo"
				name="conteudo"
				rows="3"
				required
			></textarea>
		</div>
		<div class="mb-3">
			<label
				for="categoria"
				class="form-label"
			>Categoria <span class="text-danger">*</span></label>
			<select
				class="form-select"
				id="categoria"
				name="categoria"
				required
			>
				<option selected>Selecione uma categoria</option>
				<option value="1">Categoria 1</option>
				<option value="2">Categoria 2</option>
				<option value="3">Categoria 3</option>
			</select>
		</div>
		<div class="mb-3">
			<!-- data_publicacao -->
			<label
				for="data_publicacao"
				class="form-label"
			>Data de publicação <span class="text-danger">*</span></label>
			<input
				type="datetime-local"
				class="form-control"
				id="data_publicacao"
				name="data_publicacao"
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