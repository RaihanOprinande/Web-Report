<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projek extends Model
{
    use HasFactory;

    protected $table = 'projeks';

    protected $fillable = [
        'name_projek',
        'deskripsi',
        'tanggal_mulai',
        'tanggal_selesai',
        'deadline',
        'client',
        'prioritas',
        'status',
    ];
}
