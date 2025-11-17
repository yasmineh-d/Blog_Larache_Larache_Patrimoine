<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    // Mass assignable attributes
    protected $fillable = ['name'];

    public function articles()
    {
        return $this->belongsToMany(Article::class);
        // Un tag peut être sur plusieurs articles
    }
}
