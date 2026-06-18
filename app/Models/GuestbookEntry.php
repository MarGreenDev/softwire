<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

class GuestbookEntry extends Model
{
    protected $fillable = [
        'profile_id',
        'author_id',
        'message',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function profile()
    {
        return  $this->belongsTo(User::class, 'profile_id');
    }
}
