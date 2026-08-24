<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterAlat extends Model
{
    use HasFactory;

    protected $table = 'master_alats';

    protected $fillable = [
        'alat'
    ];
}
