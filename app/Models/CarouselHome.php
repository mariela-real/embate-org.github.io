<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarouselHome extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'urlphoto',
        'link',
        'order',
    ];
}
