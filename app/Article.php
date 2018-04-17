<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
	use SoftDeletes;
    protected $table = 'article';
    // protected $table = ['tittle', 'constant'];
    protected $fillable = ['tittle', 'content'];
    protected $dates = ['delete_at'];
}
