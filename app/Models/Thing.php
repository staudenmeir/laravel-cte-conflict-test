<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Thing extends Model
{
    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
