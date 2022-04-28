<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'tbl_blog';
    protected $fillable = [
        'post_title','post_category_id','post_image','post_content','post_link'
    ];
    protected $primarykey = 'id';
    protected $guarded = [];

    public function blogcategory()
    {
    return $this->belongsTo(BlogCategory::class,'post_category_id','id');
    //--------------------- Name Models , FK ,PK  ---------------------//
    }
}
