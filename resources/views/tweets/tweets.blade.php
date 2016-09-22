@extends('layouts.master')

@section('content')
<div class="title m-b-md">
    Search for tweets
</div>
@include('layouts._search_tweets_form')
<br>
    @if (isset($tweets) && $tweets->statuses)
            @each('layouts._tweet_renderer', $tweets->statuses, 'tweet')
    @elseif (isset($tweets) && !$tweets->statuses)
        No search results
    @endif
@endsection