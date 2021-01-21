<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
       protected $fillable = ['user_Id','category_Id','title','description'];
}
