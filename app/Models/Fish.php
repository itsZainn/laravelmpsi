<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fish extends Model
{
    use HasFactory;

    protected $table = 'fish';
    protected $primaryKey = 'fish_id'; // Primary key
    protected $fillable = ['fishname', 'harga', 'keterangan', 'img', 'fishtype', 'created_by'];
    public $timestamps = false;
    public function fishType()
    {
        return $this->belongsTo(FishType::class, 'fishtype_fk', 'type_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'created_by_fk', 'id');
    }
}
