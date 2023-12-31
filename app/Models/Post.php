<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    protected $fillable = [
        'titulo',
        'conteudo',
        'data_publicacao',
        'categoria_id',
        'imagem'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
