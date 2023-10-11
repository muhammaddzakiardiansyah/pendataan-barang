<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;

    protected $table = 'items',
              $fillable = ['items_name', 'brand', 'condition', 'other_equipment', 'borrowing_id'];
}
