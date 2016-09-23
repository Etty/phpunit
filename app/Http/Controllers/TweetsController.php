<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Nastuhaunit\Tweets\TweetsSearch;

class TweetsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('tweets/tweets');
    }

    /**
     * @param Request $request
     * @return $this
     */
    public function search(Request $request)
    {
        $tweetsSearch = new TweetsSearch();
        $tweets = $tweetsSearch->getTweets($request->q);
        $request->flash();
        return view('tweets/tweets')->with('tweets', $tweets);
    }
}
