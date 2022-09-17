<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class HomeController extends Controller
{
    
    public function index()
    {
        $endpoint = "https://www.googleapis.com/youtube/v3/search";
        $client = new \GuzzleHttp\Client();
        
        $response = $client->request('GET', $endpoint, ['query' => [
            'maxResults' => 20, 
            'key' => 'AIzaSyBKFTu3jmxX2ReC0CcoBxM4Lpbp8UxNt10',
            'channelId'=>'UChlvpkKzkI7UYJdd-tW8ewg',
            'part'=>'snippet,id',
            'order'=>'date'
        ]]);

        $statusCode = $response->getStatusCode();
        
        $response_body = $response->getBody()->getContents();
        $content = json_decode($response_body);
        // echo '<pre>';
        //     print_r($content->items);
        // echo '</pre>';
        return view('frontend.pages.index', array('data'=>$content));
    }
}
