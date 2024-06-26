<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment',
    ];

    public  function replies(): HasMany{
            return $this->hasMany(Reply::class, 'comment_id', 'id');
    }
}
