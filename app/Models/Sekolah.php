<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    use HasFactory;
    protected $table = 'sekolah';
    protected $primaryKey = 'id_sekolah';
    protected $fillable = ['nama_sekolah', 'alamat_sekolah', 'visi', 'misi'];
    public $timestamps = false;

    public function akun()
    {
        return $this->hasMany(Akun::class, 'id_sekolah');
    }

    public function seragam()
    {
        return $this->hasMany(Seragam::class, 'id_sekolah');
    }

    public function fasilitas()
    {
        return $this->hasMany(Fasilitas::class, 'id_sekolah');
    }

    public function sambutan()
    {
        return $this->hasMany(Sambutan::class, 'id_sekolah');
    }

    public function karyawan()
    {
        return $this->hasMany(Karyawan::class, 'id_sekolah');
    }

    public function kelas()
    {
        return $this->hasMany(Kelas::class, 'id_sekolah');
    }

    public function organisasi()
    {
        return $this->hasMany(Organisasi::class, 'id_sekolah');
    }

    public function eskul()
    {
        return $this->hasMany(Eskul::class, 'id_sekolah');
    }







    
}
