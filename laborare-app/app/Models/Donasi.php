<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    use HasFactory;

    protected $table = 'donasi';

    protected $primaryKey = 'id_donasi';

    protected $fillable = [
        'nama_donasi',
        'target_donasi',
        'sampul_donasi',
        'deskripsi_donasi',
        'status_donasi'
    ];

    public function donatur()
    {
        return $this->hasMany(Donatur::class, 'id_donasi');
    }
}
