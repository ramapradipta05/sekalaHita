<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DosenModel extends Model
{
    protected $table = 'Dosen';
    use SoftDeletes;

}
