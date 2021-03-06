<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeContent extends Model
{
    protected $fillable = ['title', 'body', 'meta_title', 'meta_description', 'meta_noindex'];
}