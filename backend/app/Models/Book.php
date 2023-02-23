<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['nome', 'telefone', 'e-mail'];
    protected $table = 'books';
    use HasFactory;
}
