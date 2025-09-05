<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjekTask extends Model
{
    use HasFactory;

    protected $fillable = [
        'projek_id',
        'task',
        'status',
        'handler',
    ];

    public function projek()
    {
        return $this->belongsTo(Projek::class, 'projek_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'handler');
    }
}
