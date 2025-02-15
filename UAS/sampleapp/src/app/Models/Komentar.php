<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;

    protected $fillable = [
        'materi_id',
        'pengguna_id',
        'komentar',
        'tanggal_komentar',
    ];
    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class);
    }

    public function materi()
    {
        return $this->belongsTo(Materi::class);
    }
}
