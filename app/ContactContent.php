<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactContent extends Model
{
    protected $fillable = ['title', 'phone', 'email', 'cda_email'];
}
