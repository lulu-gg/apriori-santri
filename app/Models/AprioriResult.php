<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AprioriResult extends Model
{
    use HasFactory;

    protected $fillable = [
        'itemset',
        'support',
        'confidence', // Add this line
    ];
}
