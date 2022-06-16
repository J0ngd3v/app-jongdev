<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LiveModel extends Model
{
    use HasFactory;
    protected $table = 'live';
    protected $primarykey = 'id';
    protected $fillable = [
        'judul',
        'url',
        'created_at'
    ];
}
