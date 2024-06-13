<?php

namespace App\Models;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    use HasFactory;

    protected $table = 'promo';
    protected $primaryKey = 'id';
    protected $fillable = [
        'menu_id',
        'harga',
        'deskripsi',
        'gambar',
        'slug',
    ];

    public function Menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
