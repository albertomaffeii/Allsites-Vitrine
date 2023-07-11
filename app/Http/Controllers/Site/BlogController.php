<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Models\User;

class BlogController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('site.blog.index');
    }
}
