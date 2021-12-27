<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class GameapiList extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'gameapi_list';

    protected $fillable = [
        'id',
        'game',
        'name',
        'description',
        'provider',
        'type',
        'd',
        'index_rating',
        'image',
        'image_sq',
        'demo',
        'rtp'
    ];

    public static function cachedList() {
        $cachedList = Cache::get('cachedApiList');  

        if (!$cachedList) { 
            $cachedList = \App\Models\GameapiList::all();
            Cache::put('cachedApiList', $cachedList, Carbon::now()->addMinutes(400));
        } 

        return $cachedList;
    }


}
 