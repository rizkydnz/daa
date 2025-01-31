<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'tanggal_upload',
        'pengguna_id',
        'kategori',
        'file_materi',
    ];

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class);
    }
}
