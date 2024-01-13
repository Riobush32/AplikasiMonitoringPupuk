<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function estates()
    {
        return $this->belongsTo(Estate::class);
    }
    
    public function field()
    {
        return $this->hasMany(Field::class);
    }

}
