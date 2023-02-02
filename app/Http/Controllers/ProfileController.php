<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    public function showPortfolio()
    {   $user = Auth::user();
        return view('themes.'.$user->selected_theme_path.'.index', compact('user'));
    }

    public function showBasicInfo()
    {   $user = Auth::user();
        return view('pages.profile.basic_info', compact('user'));
    }

    public function showEducationalInfo()
    {   $user = Auth::user();
        return view('pages.profile.educational_info', compact('user'));
    }

    public function showExperienceInfo()
    {   $user = Auth::user();
        return view('pages.profile.experience_info', compact('user'));
    }

    public function showIndustryInfo()
    {   $user = Auth::user();
        return view('pages.profile.industry_info', compact('user'));
    }

    public function showServicesInfo()
    {   $user = Auth::user();
        return view('pages.profile.services_info', compact('user'));
    }

    public function updateBasicInfo(Request $request){
        $this->validate($request, [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'username' => 'required|string|unique:users,username,' . Auth::id(),
            'address' => 'nullable|string',
            'date_of_birth' => 'nullable|date',
            'city' => 'nullable|string',
            'country' => 'nullable|string',
            'web_url' => 'nullable|string',
            'phone' => 'nullable|string',
            'gender' => 'nullable|string',
            'bio' => 'nullable|string',
        ]);

        $user = User::find(Auth::id());


        $user->name = $request->first_name . $request->first_name;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->address = $request->address;
        $user->date_of_birth = $request->date_of_birth;
        $user->city = $request->city;
        $user->country = $request->country;
        $user->web_url = $request->web_url;
        $user->phone = $request->phone;
        $user->gender = $request->gender;
        $user->bio = $request->bio;
        if($request->has('profile_image')){
            // $user->profile_image = $request->profile_image;
        }

        $user->save();

        return redirect()->back()->with(['message'=>'Successfully updated !']);
    }

    public function updateEducationalInfo(Request $request){

        return redirect()->back()->with(['message'=>'Successfully updated !']);
    }

    public function updateExperienceInfo(Request $request){

        return redirect()->back()->with(['message'=>'Successfully updated !']);
    }

    public function updateIndustryInfo(Request $request){

        return redirect()->back()->with(['message'=>'Successfully updated !']);
    }

    public function updateServicesInfo(Request $request){

        return redirect()->back()->with(['message'=>'Successfully updated !']);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
