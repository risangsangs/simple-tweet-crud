<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Tweet; 

class TweetEditController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id): View
    {
        $tweet = Tweet::find($id);

        $this->authorize('update', $tweet);

        return view('tweets.edit', [
            'tweet' => $tweet,
        ]);
    }
}
