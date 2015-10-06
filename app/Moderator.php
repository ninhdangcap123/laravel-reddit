<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moderator extends Model
{
    protected $table = 'moderators';

    protected $fillable = ['user_id', 'subreddit_id'];

    public function subreddit() {
        return $this->belongsToMany('App\Subreddit');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function posts() {
        return $this->belongsTo('App\Post');
    }
}
