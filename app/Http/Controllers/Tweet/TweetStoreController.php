<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse; 
use Illuminate\Support\Facades\Auth; 
use App\Models\Tweet; 

class TweetStoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): RedirectResponse
    {
        Tweet::create([
            'user_id' => Auth::id(),
            'content' => request('content')
        ]);

        return redirect()->back();
    }
}
