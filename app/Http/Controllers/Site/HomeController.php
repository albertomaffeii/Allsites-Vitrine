<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Models\User;

class HomeController extends Controller
{
    public function __invoke(Request $request) {
       
        return view('site.home.index');

    }
}