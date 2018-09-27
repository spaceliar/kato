<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['id','name','content','img','id_kind','available','created_at','updated_at'];
    public $timestampt = true;
}
