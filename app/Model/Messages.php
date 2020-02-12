<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    protected $table = 'messages';

    protected $guarded = [];

    public function user()
    {
    return $this->belongsTo(\App\User::class);
    }

}
