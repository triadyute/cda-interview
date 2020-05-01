<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MetaContent extends Model
{
    protected $fillable = ['meta_title', 'meta_description', 'meta_noindex'];
}
