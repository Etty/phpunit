<?php

namespace App\Http\Controllers;

use App\Nastuhaunit\Tweets\TweetsFetch;
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
        $tweetsFetch = new TweetsFetch($request->q);

        $tweetsSearch = new TweetsSearch();
        $tweets = $tweetsSearch->getTweets($tweetsFetch);
        $request->flash();

        return view('tweets/tweets')->with('tweets', $tweets);
    }
}
