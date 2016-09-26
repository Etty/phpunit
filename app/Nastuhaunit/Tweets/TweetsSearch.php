<?php
namespace App\Nastuhaunit\Tweets;

use \Abraham\TwitterOAuth\TwitterOAuth;
use App\Nastuhaunit\Tweets\TweetsFetch;

/**
 * Class TweetsSearch
 * @package App\Nastuhaunit\Tweets
 */
class TweetsSearch
{
    /**
     * @param $request
     * @return array|object
     */
    public function getTweets($request)
    {
        return $request->tweetsSearch();
    }
}