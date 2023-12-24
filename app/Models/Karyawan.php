<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    protected $table = 'karyawan';
    protected $primaryKey = 'id_karyawan';
    protected $fillable = ['id_sekolah', 'id_jabatan', 'nama_karyawan', 'tanggal_lahir_karyawan', 'tempat_lahir_karyawan', 'sosmed', 'foto_karyawan'];
    public $timestamps = false;

    public function Kelas()
    {
        return $this->hasOne(Kelas::class, 'id_karyawan');
    }
    
    public function sekolah()
    {
        return $this->belongsTo(Sekolah::class);
    }

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }
}
