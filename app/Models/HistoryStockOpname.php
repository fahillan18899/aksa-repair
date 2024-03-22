<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryStockOpname extends Model
{
    use HasFactory;

    protected $fillable = ['sparepart_id', 'total_sparepart'];
}
