<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Books extends Model
{
    protected $table = "books";
    protected $primaryKey = 'isbn';
    protected $casts = [
        'isbn' => 'string',
    ];
    // protected $fillable = ['title', 'author', 'description', 'published_year'];
    // protected $guarded = [];
    // protected $fillable = ['title', 'author', 'description', 'isbn', 'published_year'];
    // use HasFactory;
}
