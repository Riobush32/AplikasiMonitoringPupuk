<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function estates()
    {
        return $this->belongsTo(Estate::class, 'estate_id', 'id');
    }

    public function divisis()
    {
        return $this->belongsTo(Divisi::class, 'divisi_id', 'id');
    }

    public function semester()
    {
        return $this->hasMany(Semester::class);
    }
}
