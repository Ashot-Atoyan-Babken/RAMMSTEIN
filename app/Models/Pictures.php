<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pictures extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded=false;
    protected $table='concerts';
    public function pictures()
    {
        return $this->hasMany(Pictures::class,'concert_id','id');
    }
}
