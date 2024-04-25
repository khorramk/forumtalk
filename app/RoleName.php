<?php

namespace App;

enum RoleName: string
{
    case ADMIN    = 'admin';
    case MODERATOR   = 'moderator';
    case FORUM_USER = 'forum_user';
}
