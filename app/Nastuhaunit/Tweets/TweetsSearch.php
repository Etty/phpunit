<?php
namespace App\Nastuhaunit\Tweets;

use \Abraham\TwitterOAuth\TwitterOAuth;

/**
 * Class TweetsSearch
 * @package App\Nastuhaunit\Tweets
 */
class TweetsSearch
{
    /**
     * @param $query
     * @return array|object
     */
    public function getTweets($query)
    {
        $twitter = new TwitterOAuth(\Config::get('services.twitter.consumer_key'),
            \Config::get('services.twitter.consumer_secret'),
            \Config::get('services.twitter.access_token'),
            \Config::get('services.twitter.access_token_secret'));
        return $twitter->get('search/tweets', array('q' => $query));
    }
}