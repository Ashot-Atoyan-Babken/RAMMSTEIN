<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Concert extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded=false;
    protected $table='concerts';
    public function concerts()
    {
        return $this->hasMany(Concert::class,'tour_id','id');
    }
}
