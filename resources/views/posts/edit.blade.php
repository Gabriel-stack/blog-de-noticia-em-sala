@extends('layouts.app')

@section('titulo', 'Editar post')

@section('content')
<div class="container bg-white shadow p-4">
	<h3 class="text-center">Editar post</h3>
	<form action="{{ route('posts.update', $post->id) }}"
		  method="post"
		  enctype="multipart/form-data">
		@csrf
		@method('PUT')
		<div class="mb-3">
			<label for="titulo"
				   class="form-label">Título <span class="text-danger">*</span></label>
			<input type="text"
				   class="form-control"
				   id="titulo"
				   name="titulo"
				   value="{{ $post->titulo }}"
				   required>
		</div>
		<div class="mb-3">
			<label for="conteudo"
				   class="form-label">Conteúdo <span class="text-danger">*</span></label>
			<textarea class="form-control"
					  id="conteudo"
					  name="conteudo"
					  rows="3"
					  required>{{$post->conteudo}}</textarea>
		</div>
		<div class="mb-3">
			<label for="imagem"
				   class="form-label">Imagem <span class="text-danger">*</span></label>
			<input type="file"
				   class="form-control"
				   id="imagem"
				   name="imagem">
		</div>
		<div class="mb-3">
			<label for="categoria"
				   class="form-label">Categoria <span class="text-danger">*</span></label>
			<select class="form-select"
					id="categoria"
					name="categoria_id"
					required>
				<option selected>Selecione uma categoria</option>
				@foreach($categorias as $categoria)
				<option value="{{ $categoria->id }}"
						@if($categoria->id == $post->categoria_id) selected @endif
					>{{ $categoria->nome }}</option>
				@endforeach
			</select>
		</div>
		<div class="mb-3">
			<!-- data_publicacao -->
			<label for="data_publicacao"
				   class="form-label">Data de publicação <span class="text-danger">*</span></label>
			<input type="datetime-local"
				   class="form-control"
				   id="data_publicacao"
				   name="data_publicacao"
				   value="{{ $post->data_publicacao }}"
				   required>
		</div>
		<div class="mb-3">
			<button type="submit"
					class="btn btn-primary">Salvar</button>
		</div>
	</form>
</div>
@endsection