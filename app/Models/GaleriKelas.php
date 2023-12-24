<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleriKelas extends Model
{
    use HasFactory;
    protected $table = 'galeri_kelas';
    protected $primaryKey = 'id_galeri_kelas';
    protected $fillable = ['id_kelas', 'deskripsi', 'foto_kelas'];
    public $timestamps = false;

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
