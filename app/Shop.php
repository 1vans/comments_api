<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    //
    protected $fillable = ['title', 'description', 'address', 'phone', 'lable'];

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
}
