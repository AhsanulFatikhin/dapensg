<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UjiCoba extends Model
{
    protected $table = 'uji_coba';

    protected $fillable = [
        'nama', 'divisi', 'email', 'keyunik', 'approved', 'feedback'
    ];
}
