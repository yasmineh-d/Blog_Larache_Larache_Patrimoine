<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // Mass assignable attributes
    protected $fillable = ['title', 'content', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
        // Un article appartient à un utilisateur
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
        // Un article peut avoir plusieurs tags (et vice versa)
        // Laravel utilise automatiquement la table article_tag
    }
}
