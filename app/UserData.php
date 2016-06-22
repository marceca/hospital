<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    public $table = "userData";

    protected $fillable = ['name', 'address', 'city', 'state'];

    public function userData(){
        return $this->belongTo(userData::Class);
    }
}
