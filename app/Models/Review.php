<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = "user_reviews";
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'no_telp',
        'star_rating',
        'comments',
    ];
}
