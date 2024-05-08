<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sukarelawan extends Model
{
    use HasFactory;

    protected $table = 'sukarelawan';

    protected $primaryKey = 'id_sukarelawan';

    protected $fillable = [
        'id_user',
        'notelpon_sukarelawan',
        'kontak_wali',
        'pas_foto',
        'alamat_sukarelawan',
        'motivasi',
        'id_kegiatan',
        'status_sukarelawan',
        'sertifikat',
        'poin'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class, 'id_kegiatan');
    }
}
