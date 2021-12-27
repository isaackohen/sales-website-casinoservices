<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class GameApiList extends Component
{
    
    public $providers = [];
    public $search;
    public $searchproviders;
    public $filtered = 0;
    public $providerSelected;

    public function updatingSearch()
    {
        $this->resetPage();
        $this->providers = self::getProviders();
    }

    public function updatingSearchProviders()
    {
        $this->resetPage();
        $this->providers = self::getProviders();
    }


    public function getProviders()
    {
      return $providers = DB::table('providers')->get();
    }

    public function render(Request $request)
    {
        $this->providers = DB::table('providers')->get();

        $paginateAmount = $request->show ?? 30;
        if($request->provider) {
            $this->providerSelected = $request->provider;

            $this->filtered = 1;
            return view('livewire.game-api-list', [
                'games' => DB::table('gameapi_list')->where('name', 'like', '%'.$this->search.'%')->where('provider', $request->provider)->paginate($paginateAmount),
                'providers' => \App\Models\Providers::get(),
            ]);
        } 

        return view('livewire.game-api-list', [
            'games' => \App\Models\GameapiList::where('name', 'like', '%'.$this->search.'%')->where('provider', 'like', '%'.$this->searchproviders.'%')->paginate($paginateAmount),
            'providers' => DB::table('providers')->get(),
        ]);


    }
}
