<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $primaryKey = 'artikel_id';

    protected $fillable = [
        'name',
        'tag_id',
        'deskripsi',
    ];

    public function tag()
    {
        return $this->belongsTo(Tag::class, 'tag_id');
    }
}