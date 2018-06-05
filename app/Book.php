<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $fillable = ['name', 'cost', 'price', 'description', 'isbn', 'category_id', 'author_id'];
    
}
