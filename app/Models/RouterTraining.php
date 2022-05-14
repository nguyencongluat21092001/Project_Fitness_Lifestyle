<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RouterTraining extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'router_training';
    protected $fillable = [
        'user_id','name','content'
    ];
    public function users (){
        return $this->belongsTo(Users::class,'user_id','id');
    }
}
