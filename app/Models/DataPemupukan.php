<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPemupukan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function semesters()
    {
        return $this->belongsTo(Semester::class);
    }

    public function pupuks()
    {
        return $this->belongsTo(Pupuk::class, 'pupuk_id', 'id');
    }
}
