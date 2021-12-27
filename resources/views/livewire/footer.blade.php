<div>
<footer class="text-gray-400 bg-gray-850 body-font">
  <div class="container px-5 py-12 pt-24 mx-auto">
    <div class="flex flex-wrap md:text-left text-center order-first">
      <div class="lg:w-1/4 md:w-1/2 w-full px-4 pl-6">
        <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3">SERVICES</h2>
        <nav class="list-none mb-10">
          <li>
            <a class="text-gray-400 hover:text-white">Full Casino Platform Solution</a>
          </li>
          <li>
            <a class="text-gray-400 hover:text-white">Games API</a>
          </li>
          <li>
            <a class="text-gray-400 hover:text-white">Dedicated Whitelabel Casino Games</a>
          </li>
          <li>
            <a class="text-gray-400 hover:text-white">Custom Development</a>
          </li>
        </nav>
      </div>

      <div class="lg:w-1/4 md:w-1/2 w-full pl-6 px-4">
        <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3">CHECK OUT</h2>
        <nav class="list-none mb-10">
          <li>
            <a class="text-gray-400 hover:text-white">All Our Providers</a>
          </li>
          <li>
            <a class="text-gray-400 hover:text-white">Full Solution Platform</a>
          </li>
          <li class="cursor:pointer">
            <a class="text-gray-400 cursor:pointer hover:text-white">Games API</a>
          </li>
        </nav>
      </div>
      <div class="hidden sm:flex lg:w-1/4 md:w-1/2 w-1/2 md:px-4">
      <div class="container mx-auto flex flex-wrap">
        <div wire:poll.visible.{{ $interval }}ms="return">
          <div class="md:w-2/3 w-full mx-auto flex flex-wrap">
            <div class="flex relative items-center mx-auto">
              <div class="flex-grow md:pl-8 flex sm:items-center items-start flex-col sm:flex-row xyz-in" xyz="fade iterate-infinite">
                <div class="invisible sm:visible flex-shrink-0 bg-gray-800 text-yellow-400 rounded-full inline-flex items-center justify-center" style="width: 150px; height: 100px;">
                <img style="border-radius:  10px;" src="https://games.cdn4.dk/games{{ $random_1_image }}?w=150&h=100&auto=compress&fit=crop">
                </div>
                <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                  <h2 class="font-medium title-font text-white mb-1 text-xl">{{ $random_1_name }}</h2>
                  <p class="leading-relaxed text-gray-100" style="min-width: 400px;">
                        Player wagered {{ $random_1_bet }}$ and won {{ $random_1_win }}$.
                        <br>
                        <small class="text-gray-400">Happened just now.. <small class="text-gray-200"
                            >({{ $time }})</small>
                        <br><span class="text-xxs"> Operator: {{ $random_1_casinoid }}
                        <br>ID: {{ $random_1_gametx }}</span></small>
                  </p>
                </div>
              </div>
            </div>
          </div>
         </div>
          </div>
      </div>
    </div>
  </div>
  <div class="bg-gray-900 bg-opacity-75">
    <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
      <a class="flex title-font font-medium items-center md:justify-start justify-center text-white">
        <img src="https://games.cdn4.dk/davidkohen/logo.png?w=40&fit=crop">
      </a>
      <p class="text-sm text-gray-400 sm:ml-6 sm:mt-0 mt-4">75 Shelton Street, Covent Garden, London, United Kingdom
        <a href="https://find-and-update.company-information.service.gov.uk/company/13710172" class="text-gray-500 ml-1" target="_blank" rel="noopener noreferrer">Registered under company number <b><u>13710172</u></b></a>
      </p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
        <a class="text-gray-400">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-400">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-400">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-400">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
            <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span>
    </div>
  </div>
</footer>
</div>
