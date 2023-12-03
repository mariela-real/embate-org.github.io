<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;
    protected $fillable = [
    'slogan',
    'address',
    'icon_id',
    ];
    public function icon()
    {
        return $this->belongsTo(Icon::class);
    }
}
