<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Santri extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'tes_tulis', // Tes Tulis
        'surah_pilihan', // Surah Pilihan
        'menulis_pegon', // Menulis Pegon
    ];    

    // Casting tanggal_lahir ke Carbon
    protected $dates = [
        'tanggal_lahir',
    ];

    // Mutator untuk tanggal_lahir
    public function getTanggalLahirAttribute($value)
    {
        return Carbon::parse($value);
    }
}
