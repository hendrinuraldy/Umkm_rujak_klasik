<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "menu";
    protected $primaryKey = 'id';

    protected $fillable = [
        'category_id',
        'nama',
        'harga',
        'deskripsi',
        'gambar',
        'slug',
    ];

    public function promo()
    {
        return $this->hasMany(Promo::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
