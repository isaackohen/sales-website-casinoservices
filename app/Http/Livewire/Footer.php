<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \App\Models\Gametransactions;
use \App\Models\Gamelist;
use \App\Models\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Footer extends Component
{

    public $random_1_gameid = 0;
    public $random_1_gametx = 0;
    public $random_1_win = 0;
    public $random_1_bet = 0;
    public $random_1_image = 0;
    public $random_1_name = 0;
    public $random_1_casinoid = 0;
    public $time = 0;
    public $interval = 200;

    public function boot()
    {
        self::return();
    }

    public function return()
    {

    $pickrandom1 = rand(5, 245646);

    $getGame = Gametransactions::where('id', $pickrandom1)->first();
    $getGamelist = Gamelist::where('game_id', $getGame->gameid)->first();

    $win = 0;
    if($getGame->win > 0) {
        $win = round($getGame->win / 10, 2);
    }
    if($getGame->bet > 0) {
        $bet = round($getGame->bet / 10, 2);
    } else {
            $bet_1 = 0.10;
            $bet_2 = 0.20;
            $bet_3 = 0.30;
            $bet_4 = 0.40;
            $bet_5 = 0.20;
            $bet_6 = 0.20;
            $bet_7 = 0.30;
            $bet_8 = 0.10;
            $bet_9 = 0.20;
            $bet_10 = 0.20;

            $bet_random = 'bet_'.rand(1, 10);

            $bet = $$bet_random;
    }

    //$randomSleep = rand(20000, 300000);
    //usleep($randomSleep);

    $this->random_1_name = $getGamelist->game_name ?? 'Starburst';
    $this->random_1_gameid = $getGame->gameid;
    $this->random_1_gametx = $getGame->txid;
    $this->random_1_win = $win;
    $this->random_1_bet = $bet;
    $this->time = now();
    $this->interval = rand(299, 305);
    $this->random_1_casinoid = rand(190, 205);
    $this->random_1_image = $getGamelist->image ?? '/netent/2/starburst_touch.png';
    }


    public function render()
    {
        return view('livewire.footer');
    }
}
