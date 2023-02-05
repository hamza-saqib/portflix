<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($category)
    {
        if($category == 'all'){
            $themes = Theme::paginate(6);
        } else {
            $themes = Theme::whereJsonContains('category', $category)->paginate(6);
        }
        return view('pages.theme.index', compact('themes'));
    }

    public function showCategories()
    {
        return view('pages.theme.categories');
    }

    public function showFavouriteThemes()
    {
        $themes = Theme::paginate(6);
        return view('pages.theme.wishlist', compact('themes'));
    }

    public function ativateTheme($id)
    {
        $theme = Theme::find($id);
        if($theme){
            $user = User::find(Auth::id());
            $user->theme_id = $theme->id;
            $user->selected_theme_path = $theme->files_path;
            $user->save();
            return redirect()->back()->with(['message'=>'activated']);
        }
        return redirect()->back()->with(['message'=>'activated']);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $theme = Theme::where('slug', $slug)->get()->first();
        return view('pages.theme.show', compact('theme'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function edit(Theme $theme)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function destroy(Theme $theme)
    {
        //
    }
}
