<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TokoHandphone extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipe',
        'merk',
        'harga',
        'warna',
    ];
}
