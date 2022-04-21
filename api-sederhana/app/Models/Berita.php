<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_berita';

    protected $fillable = [
        'judul_berita',
        'kategori_berita',
        'isi_berita'
    ];
}
