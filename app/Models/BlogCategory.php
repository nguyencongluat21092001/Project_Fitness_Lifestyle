<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;
    protected $table = 'tbl_blog_categories';
    protected $primarykey = 'id';
    protected $guarded = [];

    public function blog(){
        return $this->HasMany(Blog::class,'post_category_id','id');
    }

}
