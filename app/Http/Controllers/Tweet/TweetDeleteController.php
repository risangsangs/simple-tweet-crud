<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Models\Tweet; 
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class TweetDeleteController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id): RedirectResponse
    {
        Tweet::find($id)->delete();

        return redirect()->back();
    }
}
