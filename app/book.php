<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $table = 'books';
    protected $filable = ['id','title','description'];
}
