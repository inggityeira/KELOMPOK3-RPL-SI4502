<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donatur extends Model
{
    use HasFactory;

    protected $table = 'donatur';

    protected $primaryKey = 'id_donatur';

    protected $fillable = [
        'id_user',
        'pesan',
        'nominal',
        'id_donasi'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function donasi()
    {
        return $this->belongsTo(Donasi::class, 'id_donasi');
    }
}
