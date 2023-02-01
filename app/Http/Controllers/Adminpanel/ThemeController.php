<?php

namespace App\Http\Controllers\Adminpanel;

use App\Http\Controllers\Controller;
use App\Models\Theme;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $themes = Theme::all();
        return view('adminpanel.pages.theme.index', compact('themes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpanel.pages.theme.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'files_path' => 'nullable|string',
            'summary' => 'nullable|string',
            'description' => 'nullable|string',
            'feature_image' => 'nullable|file',
            'author_name' => 'nullable|string',
            'display_order' => 'required|numeric',
        ]);

        $inputs = $request->input();
        $inputs['slug'] = Str::slug($request->name);

        Theme::create($inputs);

        return redirect()->route('admin.theme.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function show(Theme $theme)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function edit(Theme $theme)
    {
        return view('adminpanel.pages.theme.edit', compact('theme'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Theme $theme)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'files_path' => 'nullable|string',
            'summary' => 'nullable|string',
            'description' => 'nullable|string',
            'feature_image' => 'nullable|file',
            'author_name' => 'nullable|string',
            'display_order' => 'required|numeric',
        ]);

        $theme->name = $request->name;
        $theme->slug = Str::slug($request->name);
        $theme->files_path = $request->files_path;
        $theme->summary = $request->summary;
        $theme->description = $request->description;
        if($request->has('feature_image')){
            // $theme->feature_image = $request->feature_image;
        }
        $theme->author_name = $request->author_name;
        $theme->display_order = $request->display_order;

        $theme->save();

        return redirect()->back()->with(['message'=>'Successfully Updated !']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $theme = Theme::findOrFail($id);
        $theme->delete();

        return response()->json(['success' => 'Deleted Successfully !']);

        // return response()->json(['error' => 'Error while deleting !']);
    }
}
