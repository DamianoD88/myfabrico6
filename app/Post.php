<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //creo qui le mie fillable per lo store per la pagina cerate
    protected $fillable = [
        'title',
        'slug',
        'content'
    ];
}
