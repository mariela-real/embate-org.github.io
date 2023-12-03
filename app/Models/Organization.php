<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'mission',
        'urlmission',
        'vision',
        'urlvision',
        'values_id'
    ];
}
