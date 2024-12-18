<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FishType extends Model
{
    use HasFactory;

    protected $table = 'fish_type';
    protected $primaryKey = 'type_id'; // Primary key
    public $timestamps = false; // Nonaktifkan timestamps jika tabel tidak memiliki kolom created_at dan updated_at
    protected $fillable = [
        'typename',
        'category',
        'createdby'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'createdby_fk', 'id');
    }
}
