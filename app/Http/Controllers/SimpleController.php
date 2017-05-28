<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Subscriber\Oauth\Oauth1;

class SimpleController extends Controller
{
    /*
    *
    *   Changes for Index
    *   Description :   
    *   Last edited by : Firdausneonexxa
    *
    */
        
    private function getkofixtweet() 
    {
        $stack = HandlerStack::create();

        $middleware = new Oauth1([
            'consumer_key'    => 'Dnbk0bS6dyy418ouTIuG4GWJb',
            'consumer_secret' => 'jFtSSraR65oeyW7BPsgmwiOb4wJO2YKSDXaHLeGJwCd6Z3EGwH',
            'token'           => '831526661266952192-2a4yWwGDokN8hYpxarvwFfCQu2sR9ZB',
            'token_secret'    => '0XzmLpQbfezxqarmlgb9hvn4onGxpBImNOB4kYnXRze3Q'
        ]);

        $stack->push($middleware);

        $client = new Client([
            'base_uri' => 'https://api.twitter.com/1.1/',
            'handler' => $stack,
            'auth' => 'oauth',
        ]);

        $res = $client->get('statuses/user_timeline.json',['query' => [
            'screen_name' => 'kofixtech',
            'count' => '9',
        ]]);

        return json_decode($res->getBody(), true);
    }

    /*
    *
    *   Changes for Index
    *   Description :   
    *   Last edited by : Firdausneonexxa
    *
    */
        
    public function aboutus (){
        $tweets = $this->getkofixtweet();
        return view('pages.aboutus',compact('tweets'));
    }
    	
    	
}
