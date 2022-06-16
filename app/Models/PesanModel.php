<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesanModel extends Model
{
    use HasFactory;

    protected $table = 'pesan';
    protected $primarykey = 'id';
    protected $fillable = [
        'nama',
        'email',
        'pesan'
    ];
}
