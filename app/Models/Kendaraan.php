<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Kendaraan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomor_polisi',
        'merek',
        'tipe',
        'kategori',
        'tahun',
        'warna',
        'keterangan',
    ];
}
