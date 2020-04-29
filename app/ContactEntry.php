<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactEntry extends Model
{
    protected $fillable = ['name', 'email', 'message'];
}
