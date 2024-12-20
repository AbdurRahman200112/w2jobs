<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;
    use HasFactory;
    protected $touches = ['conversation'];

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function conversation()
    {
        return $this->belongsTo(Conversation::class);
    }
}
