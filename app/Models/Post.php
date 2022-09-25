<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // fillableに指定したカラムのみ、createやupdateできるようになる
    protected $fillable = [
        'title',
        'content',
    ];
}
