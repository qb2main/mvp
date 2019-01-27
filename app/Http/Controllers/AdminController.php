<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Footer;
use App\Models\Header;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $header = Header::first();
        $content = Content::first();
        $footer = Footer::first();

        return view('admin.index', compact('header', 'content', 'footer'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function headerForm()
    {
        $header = Header::first();

        return view('admin.parts.forms.header', compact('header'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function headerSave(Request $request)
    {
        $header = Header::find($request->header_id);

        if($header->update($request->all())) {
            return redirect()->back()->withSuccess('Header saved.');
        };

        return redirect()->back()->withErrors('Something is wrong.');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contentForm()
    {
        $content = Content::first();

        return view('admin.parts.forms.content', compact('content'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function contentSave(Request $request)
    {
        $content = Content::find($request->content_id);

        if($content->update($request->all())) {
            return redirect()->back()->withSuccess('Content saved.');
        };

        return redirect()->back()->withErrors('Something is wrong.');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function footerForm()
    {
        $footer = Footer::first();

        return view('admin.parts.forms.footer', compact('footer'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function footerSave(Request $request)
    {
        $footer = Footer::find($request->footer_id);

        if($footer->update($request->all())) {
            return redirect()->back()->withSuccess('Footer saved.');
        };

        return redirect()->back()->withErrors('Something is wrong.');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function imageSave(Request $request)
    {
        $file = $request->file('file');
        $file_name = 'header-bg.jpg';
        $full_path = 'images/'.$file_name;

        if (Storage::disk('public_uploads')->put($full_path, File::get($file))) {
            return redirect()->back()->withSuccess('New image saved.');
        }

        return redirect()->back()->withErrors('Something is wrong.');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::logout();

        return redirect()->back();
    }
}
