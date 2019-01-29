<?php

namespace App\Http\Controllers;

use App\Models\Schema;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->active_schema = Schema::where('active', true)->first();

        view()->share([
            'active_schema' => $this->active_schema,
            'header' => $this->active_schema->header,
            'content' => $this->active_schema->content,
            'footer' => $this->active_schema->footer,
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {
        $schema = Schema::where('active', true)->with('header', 'content', 'footer')->first();

        if (!$schema) echo "No schema exist";

        return view('site.index', compact('schema'));
    }
}
