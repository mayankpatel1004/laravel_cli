<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlists extends Model
{
    protected $table = 'wishlists';
    protected $primaryKey = 'id';
    protected $fillable = ['id','product_id','user_id','created_at','updated_at'];
}
