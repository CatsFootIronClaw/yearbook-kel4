<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seragam extends Model
{
    use HasFactory;
    protected $table = 'seragam';
    protected $primaryKey = 'id_seragam';
    protected $fillable = ['id_sekolah', 'nama_sekolah', 'nama_seragam', 'foto_seragam', 'hari'];
    public $timestamps = false;

    public function sekolah()
    {
        return $this->belongsTo(Sekolah::class);
    }
}
