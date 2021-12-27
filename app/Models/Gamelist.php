<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Gamelist extends Model
{
    public $timestamps = true;
    use HasFactory;
    //protected $connection = 'mysql-api';

    protected $table = 'gamelist';
     
    protected $fillable = [
        'id', 'game_id', 'game_name', 'game_desc', 'game_provider', 'index_rating', 'disabled', 'type', 'image', 'api_ext', 'extra_id'
    ];
    
}
