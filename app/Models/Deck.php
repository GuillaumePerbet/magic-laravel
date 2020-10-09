<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deck extends Model
{
    use HasFactory;
    
    //indicates the model doesn't use created_at and updated_at timestamps
    public $timestamps = false;

    //indicates that name attribute can be directy assign from request
    protected $fillable = [ 'name' ];
}
