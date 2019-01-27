<?php

namespace App\Http\Controllers;

use App\Models\Schema;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {
        $schema = Schema::where('active', true)->with('header', 'content', 'footer')->first();

        if (!$schema) echo "No schema exist";

        return view('site.index', compact('schema'));
    }
}
