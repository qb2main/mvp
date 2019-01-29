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

        view()->share('active_schema', $this->active_schema);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $schemas = Schema::all();

        return view('admin.index', compact('schemas'));
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function schemaSetActive(Request $request)
    {
        $this->active_schema ? $this->active_schema->update(['active' => false]) : null;
        Schema::whereId($request->active_schema_id)->update(['active' => true]);

        return redirect()->back()->withSuccess('New schema activated');
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function schemaNew(Request $request)
    {
        $schema = Schema::create(['name' => $request->new_schema_name]);
        $schema->header()->create($this->active_schema->header->toArray());
        $schema->content()->create($this->active_schema->content->toArray());
        $schema->footer()->create($this->active_schema->footer->toArray());

        return redirect()->back()->withSuccess('New schema created on the base currently active one');
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
            $footer = $this->active_schema->footer;
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
        $file_extension = $file->getClientOriginalExtension();
        $file_name = 'header_img_'. $this->active_schema->id . '.' . $file_extension;
        $full_path = 'images/'.$file_name;

        if (Storage::disk('public_uploads')->put($full_path, File::get($file))) {
            $this->active_schema->header->update(['image' => $file_name]);

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

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function editableModeSave(Request $request)
    {
        $header = Header::whereId($request->header_id)->first();
        $content = Content::whereId($request->content_id)->first();
        $footer = Footer::whereId($request->footer_id)->first();

        $header_data = [];
        $content_data = [];
        $footer_data = [];

        foreach ($request->all() as $field => $value) {
            if (strpos($field, 'header_') !== false) {
                $header_data[str_replace("header_", "", $field)] = $value;
            }
            if (strpos($field, 'content_') !== false) {
                $content_data[str_replace("content_", "", $field)] = $value;
            }
            if (strpos($field, 'footer_') !== false) {
                $footer_data[str_replace("footer_", "", $field)] = $value;
            }
        }

        $header->update($header_data);
        $content->update($content_data);
        $footer->update($footer_data);

        session()->put('editable_mode', true);
        return redirect()->back();
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function editableModeEdit() {
        session()->put('editable_mode', true);

        return redirect()->route('home');
    }
}
