<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
  protected $fillable = [
    'title',
    'body',
    'author',
    'user_id'
  ];

  public function user() {
    return $this->belongsTo('App\User');
  }
    //
}
