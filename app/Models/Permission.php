<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

   protected $fillable = [
        'name'
   ];

   public static array $userActions = [
        'view',
        'create',
        'update',
        'delete',
        'restore',
        'forceDelete',
        'approve',
   ];

    public static array $questionActions = [
        'publish',
        'create',
        'update',
        'delete',
        'restore',
        'forceDelete',
    ];

    public static array $forumActions = [
        'lead',
    ];

    public static array $registrationActions = ['approve'];

    public static array $answerActions = ['reply'];

    public static array $commentsActions = ['approve', 'reject'];

    public static array $userResource = ['user'];

    public static array $commentsResource = ['comments'];

    public static  array $questionResources = ['question'];

    public static  array $answerResources = ['answers'];

    public static array $forumResources = ['forum'];

    public static array $registrationResources = ['registration'];

}
