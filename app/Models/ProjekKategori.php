<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjekKategori extends Model
{
    use HasFactory;

    protected $table = 'projek_kategoris';
    protected $fillable = ['nama_kategori', 'deskripsi'];

    public function projeks()
    {
        return $this->hasMany(Projek::class, 'projek_kategori_id');
    }
}
