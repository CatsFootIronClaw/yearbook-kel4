<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eskul extends Model
{
    use HasFactory;
    protected $table = 'eskul';
    protected $primaryKey = 'id_eskul';
    protected $fillable = ['id_sekolah', 'nama_eskul', 'foto_eskul'];
    public $timestamps = false;

    public function sekolah()
    {
        return $this->belongsTo(Sekolah::class);
    }
}
