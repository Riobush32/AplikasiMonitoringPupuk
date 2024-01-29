<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
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

    public function fields()
    {
        return $this->belongsTo(Field::class, 'field_id', 'id');
    }

    public function datapemupukan()
    {
        return $this->hasMany(DataPemupukan::class);
    }
}
