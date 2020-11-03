<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * Get the group users for a user.
     */
    public function groupUsers()
    {
        return $this->hasMany(GroupUsers::class);
    }

    /**
     * Get the messages for a group.
     */
    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
