<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Nastuhaunit\Tweets\TweetsFetch;
use App\Nastuhaunit\Tweets\TweetsSearch;

/**
 * Class TweetsSearchTest
 */
class TweetsSearchTest extends TestCase
{
    /** \App\Nastuhaunit\Tweets\TweetsFetch testing
     * @test
     */
    public function testGetTweetsNotEmpty()
    {
        $testClass = new TweetsFetch('twitterapi');
        $stack = $testClass->tweetsSearch();
        $this->assertNotEmpty($stack->statuses, 'Method TweetsSearch::getTweets do not search tweets!');
    }

    /** \App\Nastuhaunit\Tweets\TweetsSearch()::getTweets testing
     * @test
     */
    public function testGetTweetsReturns()
    {
        $stub = $this->createMock(TweetsFetch::class);
        $fake = (object)[
            'statuses' => array(
                0 => (object)[
                    "created_at" => "Mon Sep 26 08:06:48 +0000 2016",
                    "id" => 780317686911803392,
                    "id_str" => "780317686911803392",
                    "text" => "streaming apiの実装方法が知りたいのに調べても出てくるのがTwitterAPIの使い方ばかりで辟易",
                    "user" => (object)[
                        "name" => "山田はじめ",
                    ]
                ],
                1 => (object)[
                    "created_at" => "Mon Sep 26 07:56:24 +0000 2016",
                    "id" => 780315070291177472,
                    "id_str" => "780315070291177472",
                    "text" => "RT @TheatrumBelli: #Iraq : #Peshmerga commander says they won't accept anymore volunteers - ARA News https://t.co/FLAkPFeQVE via @twitterap…",
                    "user" => (object)[
                        "name" => "jhijo",
                    ]
                ]
            )
        ];

        $stub->method('tweetsSearch')->willReturn($fake);
        $getTweets = new TweetsSearch();
        $this->assertEquals($fake, $getTweets->getTweets($stub));
    }
}
