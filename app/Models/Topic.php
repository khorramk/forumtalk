<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Topic extends Model
{
    use HasFactory;

   protected $fillable = [
    'type',
    'discussion',
    'topic_rating',
    'user_id'
   ];

  public function user(): BelongsTo {
    return $this->belongsTo(User::class, 'user_id', 'id');
  }

  public function comments(): HasMany {
      return  $this->hasMany(Comment::class, 'topic_id', 'id');
  }
}
