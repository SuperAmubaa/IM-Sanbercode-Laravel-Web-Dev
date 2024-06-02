<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    protected $table = "film";
    protected $fillable = ["title", "summary", "year", "poster", "genre_id"];

    public function Genre()
    {
        return $this->belongsTo(Genre::class, 'genre_id');
    }

    public function listComment()
    {
        return $this->hasMany(Comments::class, 'film_id');
    }
}
