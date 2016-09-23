<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Class TweetsSearchTest
 */
class TweetsSearchTest extends TestCase
{
    /** \App\Nastuhaunit\Tweets\TweetsSearch()::getTweets testing
     *@test
     */
    public function testGetTweets()
    {
        $testClass = new \App\Nastuhaunit\Tweets\TweetsSearch();
        $stack = $testClass->getTweets('twitterapi');
        $this->assertNotEmpty($stack->statuses, 'Method TweetsSearch::getTweets do not search tweets!');
    }
}
