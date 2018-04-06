<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table ="posts"; // Table name

    public $primarykey = "id"; // Primary Key

    public $timestamp=true;  // Timestamp
}
