<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    protected $table = 'jadwal';
    protected $fillable = ['hari','mata_kuliah_id','dosen_id'];

    public function setHariAttribute($value)
    {
        $this->attributes['hari'] = json_encode($value);
    }

    public function getHariAttribute($value)
    {
        return $this->attributes['hari'] = json_decode($value);
    }

    public function setMatkulAttribute($value)
    {
        $this->attributes['mata_kuliah_id'] = json_encode($value);
    }

    public function getMatkulAttribute($value)
    {
        return $this->attributes['mata_kuliah_id'] = json_decode($value);
    }
}
