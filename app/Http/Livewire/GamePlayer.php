<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \App\Models\GameapiList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class GamePlayer extends Component
{

    public $slug;
    public $url = '';
    public $mobile;
    public $error = 0;
    public $name = 'undefined';
    public $provider = 'undefined';
    public $rtp;
    public $description;

    public function mount($slug)
    {
        $this->mobile = self::mobileCheck();    
        $this->url = self::url($slug);
    }

    public function mobileCheck()
    {
        $agent = new \Jenssegers\Agent\Agent;
        $result = $agent->isMobile();

        if($agent->isMobile()){
            return 1;
        } else {
            return 0;
        }
    }

    public function url($slug)
    {
        $slugExplode = explode(':', $slug);
        $getGamesList =  GameapiList::where('id', $slugExplode[1])->first();
        


        if(!$getGamesList) {
            $this->error = 1;
            return session()->flash('error', 'The game you tried to launch could not be found. (404_DAVIDKOHEN)');
        }
        $userid = 'DKDEMO-usd';
        $mode = 'demo';
        if($getGamesList->demo === 0) {
            $mode = 'real';
            $userid = 'DK'.now().'-usd';
        }


        $this->name = $getGamesList->name;
        $this->provider = $getGamesList->provider;
        $this->rtp = $getGamesList->rtp;
        $this->description = $getGamesList->description;

        $apiURL = 'https://api.dk.games/v2/createSession?apikey=6D903596F2FFB813537547FA674FBA77&userid='.$userid.'&game='.$getGamesList->game.'&mode='.$mode;

        $response = Http::get($apiURL);
  
        $statusCode = $response->status();
        $responseBody = json_decode($response->getBody(), true);
        
        if($statusCode === 200) {
        return $responseBody['url'];
        } else {
            $this->error = 1;
            return session()->flash('error', 'This game is currently unavailable - please pick a different game, come back later or try our full framework solution demo. ('.$statusCode.')');
        }
    }

    public function render()
    {   
        if($this->mobile === 1 && $this->error === 0) {
        return view('livewire.game-player')
            ->layout('layouts.mobile-fs');
        } else {
        return view('livewire.game-player');
        }
    }
}
