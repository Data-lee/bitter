<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
      /**
     * Get the user that owns the post.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
    * Get the subscribed users of the post.
    */
    public function subscribedUsers()
    {
    	return $this->belongsToMany('App\User')->withTimestamps();
    }
}
