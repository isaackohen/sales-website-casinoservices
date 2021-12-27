@if($error === 1)
  <div class="container mx-auto px-4 py-24">
        @if (session()->has('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 mb-2 rounded relative" role="alert">
              <strong class="font-bold">Something weird happened..</strong>
              <span class="block sm:inline">{{ session('error') }}</span>
            </div>
             <a href="/game-api/" class="hover:bg-gray-100 text-gray-100 hover:text-gray-800 font-medium text-xs py-2 px-4 border border-gray-400 rounded-full shadow cursor-pointer">Gameslist</a>
             <a class="hover:bg-gray-100 text-gray-100 hover:text-gray-800 font-medium text-xs py-2 px-4 border border-gray-400 rounded-full shadow cursor-pointer" href="/full-whitelabel-crypto-casino-solution">Full Fledged Solution</a>
        @endif
    </div>
@else


@if($mobile === 0)
    <div class="container mx-auto center-items justify-center min-h-screen mt-8" style="max-width: 1250px;">
        <div class="inline-flex items-center text-xs bg-gray-700 text-gray-400 border-0 transition ease duration-300 mb-4 py-2 px-4 focus:outline-none hover:bg-gray-800 hover:text-gray-100 rounded-full mt-4 md:mt-0"><a href="/game-api/"><u>Gameslist</u>&nbsp;&nbsp;/&nbsp;&nbsp;</a> <a href="/game-api?provider={{$provider}}"><u>{{$provider}}</u></a>&nbsp;&nbsp;/&nbsp;&nbsp;{{$name}}</div>
        <div class="aspect-w-16 aspect-h-9 rounded-xl">
          <iframe src="{{$url}}" class="rounded-xl" frameborder="0" allowfullscreen></iframe>
        </div>

             <div class="container justify-between px-5 py-5 mx-auto">
                <div class="w-full flex flex-col sm:flex-row sm:items-center items-start mx-auto">
                  <h1 class="flex-grow sm:pr-16 text-xl font-medium title-font text-white">{{$name}} by <span style="text-transform: uppercase;">{{$provider}}</span></h1>
                   <div class="mb-4 bg-yellow-100 text-yellow-900 rounded-md border border-yellow-200 flex flex-col" role="alert">
                        <div class="py-2 px-5 border-b border-yellow-200 text-sm font-bold shadow-lg has-tooltip">
                              <span class='tooltip rounded-xl shadow-lg p-1 bg-gray-100 text-gray-100 -mt-12'>Return-to-Player is the percentage of wager that on average over-time is returned to player.</span>

                            RTP: {{$rtp}}%
                        </div>
                        <div class="py-2 px-5 text-sm">
                            <b>Desc:</b> {{$description}}.
                        </div>
                    </div>

                </button>
                </div>
              </div>
        </div>


        <div class="flex flex-wrap bg-gray-800 w-full justify-center items-center shadow-inner mb-10">
                           <div class="container justify-between px-5 py-20 mx-auto">
                <div class="w-full flex flex-col sm:flex-row sm:items-center items-start mx-auto">
                  <h1 class="flex-grow sm:pr-16 text-xl font-medium title-font text-white">Get {{$name}} on your casino using our Game API or full platform solution.</h1>
                <button class="inline-flex items-center text-sm bg-gray-100 text-gray-900 border-0 transition ease duration-300 py-2 px-4 focus:outline-none hover:bg-gray-700 hover:text-yellow-400 rounded-l-xl rounded-t-xl  mt-4 md:mt-0">
                    Contact
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                  </svg>
                </button>
                </div>
              </div>
    </div>


@elseif($mobile === 1)
    <div class="h-screen w-full py-4">
        <iframe src="{{$url}}" class="h-screen w-screen" frameborder="0" style="overflow:hidden;height:90%;width:100%" height="90%" width="100%"></iframe>
    </div>
    @else
    <div class="container mx-auto p-1 min-h-screen" style="max-width: 1250px;">
        <div class="aspect-w-16 aspect-h-9 rounded-xl">
          <iframe src="{{$url}}" class="rounded-xl" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
@endif

@endif