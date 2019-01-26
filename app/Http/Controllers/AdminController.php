<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index() {

        return view('admin.index', compact('header', 'content', 'footer'));
    }

    public function headerForm() {

        $header = Header::first();

        return view('admin.parts.forms.header', compact('header'));
    }

    public function headerSave(Request $request) {

        $header = Header::find($request->header_id);
        $header->update($request->all());

        return redirect()->back();
    }
}
