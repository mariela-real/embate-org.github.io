<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceRequests extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'service_requests';
}
