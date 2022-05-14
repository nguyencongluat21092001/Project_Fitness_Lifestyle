<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pack extends Model
{
    use HasFactory;
    protected $table = 'tbl_packs';
    protected $fillable = [
        'post_category_id','post_price','post_month','post_cardio','post_swimming','post_yoga','post_zumba','post_massage','post_boxing'
    ];

    public function packCategory(){
        return $this->belongsTo(PackCategory::class,'post_category_id','id');
    }
}
