<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FishType extends Model
{
    use HasFactory;

    protected $table = 'fish_type';
    protected $primaryKey = 'type_id'; // Primary key
    protected $fillable = [
        'typename',
        'category',
        'createdby'
    ];
}