<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Providers extends Model
{
    public $timestamps = true;
    use HasFactory;
    //protected $connection = 'mysql-api';

    protected $table = 'providers';
     
    protected $fillable = [
        'id', 'provider', 'img', 'ggr', 'games'
    ];
    
}
