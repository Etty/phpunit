<?php
namespace App\Nastuhaunit\Tweets;

use \Abraham\TwitterOAuth\TwitterOAuth;

class TweetsFetch
{
    /**
     * @var array
     */
    private $data = array();
    /**
     * @var
     */
    private $query;

    /**
     * TweetsFetch constructor.
     * @param $query
     */
    public function __construct($query)
    {
        $this->query = $query;
    }

    /**
     * @param $name
     * @param $value
     */
    public function __set($name, $value)
    {
        echo "Setting '$name' to '$value'\n";
        $this->data[$name] = $value;
    }

    /**
     * @param $name
     * @return mixed|null
     */
    public function __get($name)
    {
        echo "Getting '$name'\n";
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }

        $trace = debug_backtrace();
        trigger_error(
            'Undefined property via __get(): ' . $name .
            ' in ' . $trace[0]['file'] .
            ' on line ' . $trace[0]['line'],
            E_USER_NOTICE);
        return null;
    }


    /**
     * @return array|object
     */
    public function tweetsSearch()
    {
        $twitter = new TwitterOAuth(\Config::get('services.twitter.consumer_key'),
            \Config::get('services.twitter.consumer_secret'),
            \Config::get('services.twitter.access_token'),
            \Config::get('services.twitter.access_token_secret'));

        return $twitter->get('search/tweets', array('q' => $this->query));
    }
}