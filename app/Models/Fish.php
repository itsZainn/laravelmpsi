<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fish extends Model
{
    use HasFactory;

    protected $table = 'fish';
    protected $primaryKey = 'fish_id'; // Primary key
    protected $fillable = ['fishname', 'harga', 'keterangan', 'img', 'fishtype'];
}
