    <div class="flex flex-col p-0 mx-0 justify-center bg-gray-800" style="background: url('https://games.cdn4.dk/davidkohen/background-gameapi2.png?bri=-11&blur=25&q=90') no-repeat; background-size: cover;">

      <div class="container mx-auto flex flex-wrap">
        <div class="container mx-auto flex w-full mt-6 flex-wrap px-8 py-16">
          <h1 class="sm:text-3xl text-2xl font-medium title-font text-yellow-400 lg:w-1/3 lg:mb-0 mb-4">Get access to thousands of games!</h1>
                  <h1 class="title-font font-medium text-xl mb-3 text-white">Implement our <b class="text-yellow-400">Games API</b> to your existing casino platform to get started with no monthly minimum turnover and no need for any contracts.</h1>
                  <h1 class="title-font font-medium text-md mb-3 text-white">Our renounced <b class="text-yellow-400">DKGAMES® API</b> is revolutionary in how we bill: simply charge your account in our backoffice (using Crypto, Creditcard & Bank Transfer) and you can get started <b class="text-yellow-400">offering games immediately</b>. We automatically deduct due GGR (% of profit you gained by using game) every 2 days. 
                  </h1>


                  <h1 class="title-font font-medium text-md mb-3 text-white">Having every spin is paid in advance assures gameproviders a guaranteed payment of due balances and also cut costs immense in billing & administration departments.</h1>
                    <h1 class="title-font font-medium text-xl mb-2 text-white">No minimums per month, no contracts needed, get started within hours. </h1>

        </div>

                                <div class="container mx-auto flex w-full mb-6 flex-wrap px-8 pb-4">

                          <a class="inline-block w-full text-gray-900 lg:w-auto py-2 px-6 leading-loose font-semibold bg-white hover:bg-gray-50 rounded-l-xl rounded-t-xl transition duration-200" href="https://docs.davidkohen.com" target="_blank">API Docs</a></div>
    </div>
</div>





<div class="container px-4 md:px-2 mx-auto" style="max-width: 1250px;"> 
    <div class="search-box items-center justify-center flex container mx-auto top-0 left-0 py-6">
        <input type="text" class="form-control rounded-full border-gray-600 focus:border-gray-500 focus:text-white focus:ring-0 text-white bg-gray-800 text-sm pl-2 placeholder-opacity-90" placeholder="Search Game.." wire:model="search" />
        <label class="inline-block w-0 font-bold ml-2 "></label>
        @if($filtered === 1)
        <a href="/game-api/">
            <select name="providers" href="/game-api" class="relative cursor-pointer text-sm border-gray-600 focus:border-gray-500 focus:ring-0 text-gray-900 pl-5 rounded-full shadow">
                <option value=''><i style="color: black;" class="fa fa-times-circle"></i> {{ $providerSelected }}</option>
            </select>
        </a>
        @else
            <select name="providers" wire:model="searchproviders" class="relative bg-gray-800 text-sm border-gray-600 focus:border-gray-500 focus:ring-0 text-gray-200 pl-5 rounded-full shadow">
                <option value=''>Filter Provider</option>
                @foreach($providers as $provider)
                    <option value={{ $provider->provider }}>{{ $provider->provider }}</option>
                @endforeach
            </select>
        @endif

    </div> 




<div class="container-lg px-4 md:px-2 flex items-center justify-center grid grid-cols-2 gap-6 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 xl:grid-cols-6">

    @foreach ($games as $game)
    <a href="/game-api/try-out-casino-game/{{$game->provider}}:{{$game->id}}:{{$game->name}}">
        <div class="group relative bg-gray-700 hover:bg-gray-800 rounded-3xl px-2 py-1 shadow-2xl cursor-pointer">
            <div class="mt-1 mb-1">
                <div class="image block w-full h-full items-center object-cover justify-center">
                    <div class="transition duration-300 ease absolute opacity-0 group-hover:opacity-100 z-10 items-center p-2"><button class="hover:bg-gray-100 text-gray-100 hover:text-gray-800 font-medium text-xs py-2 px-4 border border-gray-400 rounded-full shadow">Demo</button></div>    
                    <img class="object-cover w-full opacity-100 group-hover:opacity-25" src="https://games.cdn4.dk/games6{{$game->image_sq}}?auto=compress&w=180&height=180&q=85" style="border-radius: 22px;" loading="lazy">
                </div>
                <div class="py-2 px-3">
                <p class="text-xs font-semibold text-white my-1 game-name">{{$game->name}}</p>
                <div class="flex space-x-2 text-gray-400 text-xs">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                   <p>{{$game->provider}}</p>
                </div>
            </div>
            </div>
        </div>
    </a>
    @endforeach


    </div>
    <div class="container-fluid mx-auto mt-10 mb-20" style="max-width:1250px;">
        {{ $games->links() }}
    </div>
</div>




<style>

.game-name {
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
  max-width: 150px;
}
</style>