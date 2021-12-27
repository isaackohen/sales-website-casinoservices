<?php

use Illuminate\Support\Facades\Route;
use \App\Models\GameapiList;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::view('/', 'welcome')->name('home');
Route::get('/whitelabel-casino-games', \App\Http\Livewire\CasinoPlayers::class);
Route::get('/', \App\Http\Livewire\Home::class);
Route::get('/casino-game-providers', \App\Http\Livewire\ProvidersPage::class);
Route::get('/game-api', \App\Http\Livewire\GameApiList::class);

Route::get('/game-api/try-out-casino-game/{slug}', \App\Http\Livewire\GamePlayer::class);

Route::get('/full-whitelabel-crypto-casino-solution', \App\Http\Livewire\Home::class);


     
Route::get('/game-api/client/{slug}', function($slug) {

        $userid = 'D-'.now();
        $apiURL = 'https://api.dk.games/v2/createSession?apikey=6D903596F2FFB813537547FA674FBA77&userid='.$userid.'&game='.$slug.'&mode=real';

        $response = Http::get($apiURL);
        $url = $response['url'];
		$url_components = parse_url($url);
		 
		// Use parse_str() function to parse the
		// string passed via URL
		parse_str($url_components['query'], $params);
     

    $headers = [
        'Accept-Language: pl,en-US;q=0.9,en;q=0.8',
        'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8',
        'User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36'
    ];
    $cookie = '/var/www/davidkohen.com/public/cookie.txt'; 
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_MAXREDIRS, 5);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_VERBOSE, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0); 
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY); 
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_REFERER, 'https://evolution.game-program.com/frontend/evo/r2/');
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip'); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); 
    if (!file_exists($cookie)){
    curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
    }else{     
    curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
    }
    $c = curl_exec($ch);
    curl_close($ch);
    return $c;

});



Route::get('/game-api/gen-evo/{slug}', function($slug) {

        $userid = 'D-'.now();
        $apiURL = 'https://api.dk.games/v2/createSession?apikey=6D903596F2FFB813537547FA674FBA77&userid='.$userid.'&game='.$slug.'&mode=real';

        $response = Http::get($apiURL);
        $url = $response['url'];
		$url_components = parse_url($url);
		 
		// Use parse_str() function to parse the
		// string passed via URL
		parse_str($url_components['query'], $params);
     

	     $url2 = $url;

		$curl = curl_init($url2);
		curl_setopt($curl, CURLOPT_URL, $url2);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	    curl_setopt( $curl, CURLOPT_USERAGENT,      'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6'  );
	    curl_setopt( $curl, CURLOPT_REFERER,        'https://evolution.game-program.com/frontend/evo/r2/'  );

		$headers = array(
		   "Referer: https://evolution.game-program.com/frontend/evo/r2/",
		   "Accept-Encoding: gzip, deflate, br",
		   "Accept-Language: en-US,en;q=0.9",
		   "Cookie: cdn=https://static.egcdn.com; lang=en; JSESSIONID=".$params['JSESSIONID'],
		);
		curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
		//for debug only!
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

		$resp = curl_exec($curl);
		curl_close($curl);




        return response()->json([
    'full_url' => $url,
    'token' => $params['params'],
    'sessionid' => $params['JSESSIONID'],
    'userID' => $userid,
    'getinclient' => "https://davidkohen.com/game-api/client/".$slug,
	'socket-table:oytmvb9m1zysmc44' => "wss://evolution.game-program.com/public/baccarat/player/game/oytmvb9m1zysmc44/socket?messageFormat=json&tableConfig=&EVOSESSIONID=".$params['JSESSIONID'],
	'auth-headers' => $headers,
	'auth-resp' => $resp,
]);

});
