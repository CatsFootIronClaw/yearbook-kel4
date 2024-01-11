<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Akun extends Authenticatable
{
    use HasFactory;
    protected $table = 'akun';
    protected $primaryKey = 'id_akun';
    protected $fillable = ['id_sekolah', 'email', 'username', 'password', 'role'];
    public $timestamps = false;

    public function sekolah()
    {
        return $this->belongsTo(Sekolah::class);
    }

    public function getUserAttribute()
    {
        return Akun::find($this->attributes['id_akun'])->akun;
    }
}
