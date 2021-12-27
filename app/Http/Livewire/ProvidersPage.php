<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \App\Models\Providers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
class ProvidersPage extends Component
{

    public $providers = 0;


    public function boot()
    {
        $this->providers = \App\Models\Providers::get()->shuffle();
    }

    public function render()
    {
        return view('livewire.providers-page');
    }
}
