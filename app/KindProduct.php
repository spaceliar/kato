<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KindProduct extends Model
{
    protected $table = 'kind_products';
    protected $fillable =  ['id','name','url','available'];
    public $timestampt = true;
}
