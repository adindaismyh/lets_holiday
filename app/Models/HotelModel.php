<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelModel extends Model
{
    protected $table = 'hotel';
    protected $fillable = [
        'nama',
        'letak',
        'harga_hotel',
        'fasilitas',
        'foto',
        'deskripsi',
    ];
    use HasFactory;
}
