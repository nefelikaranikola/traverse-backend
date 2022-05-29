<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $table = 'packagies';

    protected $fillable = [
        'agency_id',
        'title',
        'category',
        'excerpt',
        'description',
        'price',
        'overnight',
        'dates',
        'accommodation',
        'meals',
        'transportation',
    ];
}
