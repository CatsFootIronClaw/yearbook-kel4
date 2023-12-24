<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $table = 'kelas';
    protected $primaryKey = 'id_kelas';
    protected $fillable = ['id_jurusan', 'id_karyawan', 'id_sekolah', 'nama_kelas', 'slogan'];
    public $timestamps = false;

    public function galeri_kelas()
    {
        return $this->hasMany(GaleriKelas::class, 'id_kelas');
    }

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class);
    }

    public function sekolah()
    {
        return $this->belongsTo(Sekolah::class);
    }

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }
}
