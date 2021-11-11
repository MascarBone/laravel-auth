<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = ['title','series','type','description','thumb','artists','writers','sale_date','price'];
}
