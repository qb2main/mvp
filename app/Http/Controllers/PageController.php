<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Footer;
use App\Models\Header;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {
        $header = Header::first();
        $content = Content::first();
        $footer = Footer::first();

        return view('site.index', compact('header', 'content', 'footer'));
    }
}
