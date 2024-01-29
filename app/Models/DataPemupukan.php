<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPemupukan extends Model
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

    public function semesters()
    {
        return $this->belongsTo(Semester::class, 'semester_id', 'id');
    }

    public function pupuks()
    {
        return $this->belongsTo(Pupuk::class, 'pupuk_id', 'id');
    }
}
