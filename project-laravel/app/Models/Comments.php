<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;
    protected $table = "comments";
    protected $fillable = ["users_id", "film_id", "content", "point"];


    public function creator()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
