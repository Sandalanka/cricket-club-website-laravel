<?php

namespace App;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Player extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;
    protected $fillable=['name','nic','contact','email','password','image'];
}
