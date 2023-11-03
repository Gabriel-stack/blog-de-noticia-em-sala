<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('posts.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados =  $request->validate([
            'titulo' => ['required', 'min:3', 'max:255'],
            'conteudo' => ['required', 'min:3'],
            'categoria_id' => ['required', 'exists:categorias,id'],
            'data_publicacao' => ['required', 'date'],
            'imagem' => ['required', 'image'],
        ]);

        $dados['imagem'] = $request->file('imagem')->store('imagens', 'public');

        $post = Post::create($dados);

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $categorias = Categoria::all();
        return view('posts.edit', compact('post', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $dados =  $request->validate([
                'titulo' => ['required', 'min:3', 'max:255'],
                'conteudo' => ['required', 'min:3'],
                'categoria_id' => ['required', 'exists:categorias,id'],
                'data_publicacao' => ['required', 'date'],
                'imagem' => ['nullable', 'image'],
            ]);

        if ($request->hasFile('imagem')) {
            $dados['imagem'] = $request->file('imagem')->store('imagens', 'public');
        }

        $post->update($dados);

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('posts.index');
    }
}
