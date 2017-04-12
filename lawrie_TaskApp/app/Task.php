<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    //mass assignment
    protected $fillable=[
        'name','status'
    ];

    //Use soft deletes
    Use SoftDeletes;
}
