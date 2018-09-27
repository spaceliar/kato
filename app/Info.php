<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $table='abouts';
    protected $fillable = ['id','name','address','fax','phone','email'];
    public $timestampt = true;
}
