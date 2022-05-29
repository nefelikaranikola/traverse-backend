<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    use HasFactory;

    protected $table = 'locations';

    protected $fillable = [
        'user_id',
        'title',
        'excerpt',
        'description',
    ];
}
