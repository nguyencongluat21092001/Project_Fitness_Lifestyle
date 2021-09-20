<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $table = 'tbl_videos';
    protected $fillable = [ 
        'post_title','post_category','post_image','post_content','post_link','created_at'
    ];
}
