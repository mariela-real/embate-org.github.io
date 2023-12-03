<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
    use HasFactory;
    public function footer()
    {
        return $this->hasOne(Footer::class);
    }
    protected $fillable = [
        'link_photo',
        'urlicon',
       // 'footer_id',  
    ];
}
