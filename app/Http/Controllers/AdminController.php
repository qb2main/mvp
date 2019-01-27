<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Footer;
use App\Models\Header;
use App\Models\Schema;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public $active_schema;

    public function __construct()
    {
        $this->middleware('auth');
        $this->active_schema = Schema::where('active', true)->first();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $schema = Schema::where('active', true)->with('header', 'content', 'footer')->first();

        if (!$schema) echo "No schema exist";

        return view('admin.index', compact('schema'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function headerForm()
    {
        if (!$this->active_schema) {
            echo "No active schema exist";
        }
        else {
            $header = $this->active_schema->header;
            return view('admin.parts.forms.header', compact('header'));
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function headerSave(Request $request)
    {
        $header = Header::find($request->header_id);

        if ($header->update($request->all())) {
            return redirect()->back()->withSuccess('Header saved.');
        };

        return redirect()->back()->withErrors('Something is wrong.');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contentForm()
    {
        if (!$this->active_schema) {
            echo "No active schema exist";
        }
        else {
            $content = $this->active_schema->content;
            return view('admin.parts.forms.content', compact('content'));
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function contentSave(Request $request)
    {
        $content = Content::find($request->content_id);

        if ($content->update($request->all())) {
            return redirect()->back()->withSuccess('Content saved.');
        };

        return redirect()->back()->withErrors('Something is wrong.');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function footerForm()
    {
        if (!$this->active_schema) {
            echo "No active schema exist";
        }
        else {
            $footer = $this->active_schema->content;
            return view('admin.parts.forms.footer', compact('footer'));
        }
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
