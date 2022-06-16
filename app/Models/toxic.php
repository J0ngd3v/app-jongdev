<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class toxic extends Model
{
    use HasFactory;

    protected $table = 'toxic';
    protected $primarykey = 'id';
    protected $fillable = [
        'kata'
    ];
}
