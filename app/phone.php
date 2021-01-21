<?php

namespace App;
use App\user;

use Illuminate\Database\Eloquent\Model;

class phone extends Model
{

    protected $fillable = ['user_Id','phone'];
    public function user(){
        return $this->belongsTo('App\user');



    }
}
