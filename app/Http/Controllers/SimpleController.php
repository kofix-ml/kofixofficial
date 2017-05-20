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
            'consumer_key'    => 'I6q1JNkWJlSfjxjXsl9NAnGeh',
            'consumer_secret' => 'fgqgZOzSZsgVGqde6bIsACNDRCUffZcgC2hLHbTSY9asKLj6LS',
            'token'           => '1197219512-Z5Lu3Jge3SmztlisOHrv3ttGlcQxRtljuR4NoEB',
            'token_secret'    => 'hIrAZaxXmY6S5gawazpGtiZAC1T4IfPyZDnRf11tzbL8T'
        ]);

        $stack->push($middleware);

        $client = new Client([
            'base_uri' => 'https://api.twitter.com/1.1/',
            'handler' => $stack,
            'auth' => 'oauth',
        ]);

        $res = $client->get('statuses/user_timeline.json',['query' => [
            'screen_name' => 'firdausneonexxa',
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
