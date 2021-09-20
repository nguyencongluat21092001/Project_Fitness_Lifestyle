<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    use HasFactory;
    protected $table = 'tbl_discountcode';
    protected $fillable = [ 
        'post_name','post_code','post_sale','post_dayend'
    ];
}
