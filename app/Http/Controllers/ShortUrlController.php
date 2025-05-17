<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShortUrl;
use Illuminate\Support\Str;

class ShortUrlController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function shorten(Request $request) {
        $request->validate(['url' => 'required|url']);
        $code = Str::random(6);
        ShortUrl::create([
            'original_url' => $request->url,
            'short_code' => $code
        ]);
        return back()->with('short_url', url($code));
    }

    public function redirect($code) {
        $short = ShortUrl::where('short_code', $code)->firstOrFail();
        return redirect($short->original_url);
    }
}
