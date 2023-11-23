<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tweet; 
use Illuminate\Http\RedirectResponse;

class TweetDestroyController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function destroy($id): RedirectResponse
    {
        // $tweets = Tweet::findOrFail($id)->delete();

        Tweet::find($id)->delete();

        return redirect()->back(); 
    }
}
