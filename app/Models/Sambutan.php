<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sambutan extends Model
{
    use HasFactory;
    protected $table = 'sambutan';
    protected $primaryKey = 'id_sambutan';
    protected $fillable = ['id_sekolah', 'nama_staff', 'jabatan_staff', 'kata_sambutan', 'foto_staff'];
    public $timestamps = false;

    public function sekolah()
    {
        return $this->belongsTo(Sekolah::class);
    }
}
