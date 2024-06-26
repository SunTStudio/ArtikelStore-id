<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'name_tag',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class, 'tag_id');
    }
}