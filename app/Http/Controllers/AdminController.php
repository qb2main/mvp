<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Footer;
use App\Models\Header;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function contentForm() {
        $content = Content::first();

        return view('admin.parts.forms.content', compact('content'));
    }

    public function contentSave(Request $request) {
        $content = Content::find($request->content_id);
        $content->update($request->all());

        return redirect()->back();
    }

    public function footerForm() {
        $footer = Footer::first();

        return view('admin.parts.forms.footer', compact('footer'));
    }

    public function footerSave(Request $request) {
        $footer = Footer::find($request->footer_id);
        $footer->update($request->all());

        return redirect()->back();
    }

    public function imageSave(Request $request) {
        $file = $request->file('file');
        $file_name = 'header-bg.jpg';
        $full_path = 'images/'.$file_name;
//        dd(File::get($file));
        if (Storage::disk('public_uploads')->put($full_path, File::get($file))) {

        }

        return redirect()->back();
    }
}
