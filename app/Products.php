<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = ['id','product_name','description','amount','status','created_at','updated_at'];
}
