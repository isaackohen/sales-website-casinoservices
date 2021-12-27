<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class GenerateApi extends Component
{
    public $slug;






    public function render($slug)
    {

        $userid = 'DK'.now().'-usd';
        $apiURL = 'https://api.dk.games/v2/createSession?apikey=6D903596F2FFB813537547FA674FBA77&userid='.$userid.'&game='.$slug.'&mode=real';

        $response = Http::get($apiURL);

        return $response;

            }
}
