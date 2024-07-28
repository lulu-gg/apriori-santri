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
        'tes_tulis', 
        'surah_pilihan', 
        'menulis_pegon',
        'normalized_tes_tulis',
        'normalized_surah_pilihan',
        'normalized_menulis_pegon',
        'kelas', // Tambahkan ini
    ];    

    protected $dates = [
        'tanggal_lahir',
    ];

    public function getTanggalLahirAttribute($value)
    {
        return Carbon::parse($value);
    }
}
