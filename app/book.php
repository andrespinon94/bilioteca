<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $filable = ['title','description'];

    public function users()
    {
        return $this->belongsToMany('App\User','user_borrows_book','id_user','id_book');
    }
    
}
