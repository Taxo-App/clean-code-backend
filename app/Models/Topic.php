<?php

namespace App\Models;

use App\Traits\Eloquent\HasLive;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory, HasLive;

    protected $fillable = [
        'slug',
        'title',
        'user_id'
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
