<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WisataModel extends Model
{ 
    protected $table = 'wisata';
    protected $fillable = [
        'kategori_id',
        'nama',
        'deskripsi',
        'lokasi',
        'harga_tiket',
        'fasilitas',
        'foto_utama',
        'foto_1',
        'foto_2',
        'foto_3' 
    ];
    use HasFactory;
}
