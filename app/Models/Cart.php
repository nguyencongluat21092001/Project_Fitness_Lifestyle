<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'tbl_carts';
    protected $fillable = [ 
        'post_category','post_price','post_month','post_cardio','post_swimming','post_yoga','post_zumba','post_massage','post_boxing','post_name','post_email','post_phone','post_adress','post_discountcode'
    ];
}
