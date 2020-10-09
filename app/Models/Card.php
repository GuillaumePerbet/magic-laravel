<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    //indicates the model doesn't use created_at and updated_at timestamps
    public $timestamps = false;
}
