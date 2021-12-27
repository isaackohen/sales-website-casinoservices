<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Gametransactions extends Model
{
    public $timestamps = true;
    use HasFactory;
    //protected $connection = 'mysql-api';

    protected $table = 'gametransactions';
     
    protected $fillable = [
        'id', 'casinoid', 'player', 'ownedBy', 'bet', 'win', 'currency', 'gameid', 'txid', 'created_at', 'type', 'rawdata', 'updated_at', 'created_at'
    ];
    
}
