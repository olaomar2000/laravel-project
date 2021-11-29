<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Rating extends Model
{
    use HasFactory;
    use softDeletes;


    public function store()
    {
        return $this->belongsTo('App\Models\Store');
    }
}
