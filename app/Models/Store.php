<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Store extends Model
{
    use HasFactory;
    use softDeletes;

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function ratings()
    {
        return $this->hasMany('App\Models\Rating');
    }
}
