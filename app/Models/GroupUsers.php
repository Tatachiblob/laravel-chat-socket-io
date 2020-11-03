<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupUsers extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'group_id', 'user_id'
    ];

    /**
     * Get the user that owns the GroupUser.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the group that owns the GroupUser.
     */
    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
