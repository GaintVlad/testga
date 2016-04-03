<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['body', 'user_id', 'publish'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
