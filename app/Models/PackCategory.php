<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackCategory extends Model
{
    use HasFactory;
    protected $table = 'packcategory';
    protected $primarykey = 'id';
    protected $guarded = [];
    protected $fillable = [
        'name'
    ];
    public function pack()
    {
       return $this->HasMany(Pack::class,'post_category_id', 'id');
    }

}
