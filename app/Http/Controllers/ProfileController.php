<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Services;
use App\Models\Testimonial;
use App\Models\Theme;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    public function showPortfolio($username)
    {
        $user = User::where('username', $username)->get()->first();
        $theme = Theme::find($user->theme_id);
        return view('themes.'.$user->selected_theme_path.'.index', compact('user', 'theme'));
    }

    public function showBasicInfo()
    {   $user = Auth::user();
        return view('pages.profile.basic_info', compact('user'));
    }

    public function showEducationalInfo()
    {
        $universities = [
            'Air University (AU), Islamabad',
            'Allama Iqbal Open University (AIOU), Islamabad',
            'Bahria University (BU), Islamabad',
            'COMSATS Institute of Information Technology',
            'Federal Urdu University of Arts, Sciences and Technology (FUUAST), Islamabad',
            'Foundation University, Islamabad',
            'Institute of Space Technology (IST), Islamabad',
            'International Islamic University (IIU), Islamabad',
            'National University of Computer and Emerging Sciences (NUCES), Islamabad',
            'National University of Modern Languages (NUML), Islamabad',
            'Pakistan Institute of Engineering & Applied Sciences (PIEAS), Islamabad',
            'Quaid-i-Azam University (QAU), Islamabad',
            'Riphah International University (RIU),Islamabad',
            'Bahauddin Zakariya University (BZU), Multan',
            'Beaconhouse National University (BNU),Lahore',
            'College of Buisness Administration& Economics (NCBA&E),Lahore',
            'Fatima Jinnah Women University (FJWU), Rawalpindi',
            'Forman Christian College (FCC), Lahore',
            'GIFT University,Gujranwala',
            'Government College University (GCU),Faisalabad',
            'Hajvery University (HU),Lahore',
            'Imperial College of Business Studies,Lahore',
            'Institute of Management Sciences (IMS),Lahore',
            'Islamia University, Bahawalpur',
            'Kinnaird College for Women, Lahore',
            'Lahore College for Women University (LCWU), Lahore',
            'Lahore School of Economics (LSE), Lahore',
            'Lahore University of Management Sciences (LUMS), Lahore',
            'Minhaj University, Lahore',
            'National College of Arts (NCA), Lahore',
            'National Textile University (NTU), Faisalabad (Federal Chartered)',
            'National University of Sciences & Technology (NUST), Rawalpindi',
            'The Superior College, Lahore',
            'The University of Management & Technology (UMT), Lahore',
            'University of Agriculture, Faisalabad',
            'University of Arid Agriculture, Murree Road, Rawalpindi',
            'University of Central Punjab (UCP), Lahore',
            'University of Education, Lahore',
            'University of Engineering & Technology (UET), Lahore',
            'University of Engineering & Technology (UET), Taxila',
            'University of Faisalabad, Faisalabad',
            'University of Gujrat , Gujrat',
            'University of Health Sciences (UHS), Lahore',
            'University of Lahore, Lahore',
            'University of Sargodha, Sargodha',
            'University of South Asia (USA), Lahore',
            'University of Veterinary and Animal Sciences (UVAS), Lahore',
            'Virtual University of Pakistan (VU), Lahore',
            'University of Mnagemant And Techonlogy(UMT),Lahore',
            'Agha Khan University (AKU), Karachi',
            'Baqai Medical University, Karachi',
            'Indus Institute of Higher Education .Karachi',
            'Frontier Women University, Peshawar',
            'CECOS University of Information Technology and Emerging Sciences, Peshawar',
            'City University of Science & Information Technology, Peshawar',
            'Gandhara University, Peshawar',
            'Ghulam Ishaq Khan Institute of Engineering Sciences & Technology, Swabi',
            'NWFP Agriculture University, Peshawar',
            'NWFP University of Engineering & Technology, Peshawar',

        ];
        $degrees = [
            'BS Software Engineering',
            'BS Computer Science',
            'BS Information Technology',
            'BS biochemistry',
            'BS Islamic Banking and Fainance',
            'BS Nursing',
            'BS Ecnomic & Fainance',
            'BS Mechincal Engennring & Techonolgy',
            'BS Biotechonolgy',
            'BS Matheamthics',
            'BS Project Management',
            'BS Chemistry',
            'BS Physics',
            'BS Food Sceience and Nutartion',
            'BS Ecnomic & Matematihcs(Joint Major) Honours',
            'BS Archaelogy',
            'BS Sociology',
            'BS Environmnatel Sciences',
            'BS Statistics',
            'BS Sotware Engreeing',
            'BS Computer Sceience',
            'BS Infronamtion and Techonolgy',
            'BS Home Economics',
            'BS Electrical Engineering and Techonolgy',
            'BS Civial Engineering and Techonolgy',
            'BS Interior Architecture',
            'BS International Relations',
            'BS Political Sceiences',
            'BS Social Sceience(Internatioal Development Studies)',
            'BS Telecommuncation',
            'BS Physocolgy',
            'BS Landsacpe Design',
            'BS Islamic Studies',
            'BS Geography',
            'BS Jounalism',
            'BS Biochemsitry & Biotechonolgy',
            'BS Medical Ultrasound Technology',
            'BS Avionics Engineering',
            'BS Microbiology',
            'BS Physical Education',
            'BS Commerece',
            'BS Economics(Honors)',
            'BS Medical laboratory&techonolgy',
            'BS Intensive care Techonolgy',
            'BS Microbiology & Molecular Genetics',
            'BS Pakistan Studies',
            'BS Chemical Engennering',
            'BS Electrical Engineering',
            'BS Human Nutartion & Dietetics',
            'BS Botany',
            'BS Biotechonolgy & Genetics Engineering',
            'BS Zoology',
            'BS Food Sceience and Techonolgy',
            'BS Conservation Studies',
            'BS Accounting and Fainace',
            'BS Metallurgy & Materials Engineering',
            'BS Fashion Desinging',
            'BS Biological Sciences',
            'BS Anthroplogy',
            'BS Development Studies',
            'BS Mass Communcation',
            'BS Remote Senisng and GIS',
            'BS Politics & Ecomomics',
            'BS Gender Studies',
            'BS Civil Engineering',
            'BS Applied Biosceience',
            'BS Management',
            'BS Opertaion Therater Techonolgy',
            'BS Communcation and Media Studies',
            'BS Social Work',
            'BS Bioinfromantics',
            'BS Toursim and Hospitality',
            'BS Microbiology',
            'BS Social Science(Goverence and Public policy)',
            'BS Materail Sceience',
            'BS Poultry Sceience',
            'BS Aerospace Enginnering',
            'BS Arrchitecture',
            'BS Education',
            'BS Social Sceience(political and International Relations)',
            'BS Industrial Engineering & Management',
            'BS Respiratory Therapy',
            'BS Nursing',
            'BS Geology',
            'BS Electrical -Electonics Engineering',
            'BS Fisheries and Aquaculture',
            'BS Electical- Power Enginnering',
            'BS English Language and Literature',
            'BS Business Adminsatrtion',
            'BS Anthroplogy and Sociology (honors)',
            'BS Aircarft Maintenance & Techonolgy',
            'BS Clinical Psychology',
            'BS Health and  Physical Education',
            'BS Media & Mass communcation',
            'BS Accounting and Fainace(For CAF Qualified Students)',
            'BS Radiography &Imaging Techonolgy',
            'MS Software Engineering',
            'MS Information Technology',
            'MS Computer Science',
            'MS Diplomacy and Strategic Studies',
            'MS English languuage Teaching & linguistics',
            'MS Educationl Research and Asesment',
            'MS Industrail Enginnenring and Mnagament',
            'MS Supply chain and retail mangamnet',
            'MS Energy and Enviromental l Engineering',
            'MS Design and Manufacturing Engineering',
            'MS Finanical Management',
            'MS Robotics and Intelligent  Machine Engineering',
            'MS Food Science and Techonolgy',
            'MS Physical Theraphy-Neurology',
            'MS Business Staticts and Mangemant',
            'MS Geographics Infromantion system',
            'MS Process system Engineeerning',
            'MS Health care mangemnat and innvovation',
            'MS Telecommuncations Syetems and Networks',
            'MS Logistics and Supply chain Managament',
            'MS Civil Enginnering',
            'MS Innvoation and Enterpreneurship',

        ];
        $major_subjects = ['major 1','major 2'];
        $user = Auth::user();
        return view('pages.profile.educational_info', compact('user', 'universities', 'degrees', 'major_subjects'));
    }

    public function showExperienceInfo()
    {
        $positions = ['position 1','position 2'];
        $companies = ['company 1','company 2'];
        $jobTitles = ['job_title 1','job_title 2'];
        $user = Auth::user();
        return view('pages.profile.experience_info', compact('user', 'positions', 'companies', 'jobTitles'));
    }

    public function showIndustryInfo()
    {   $user = Auth::user();
        return view('pages.profile.industry_info', compact('user'));
    }

    public function showServicesInfo()
    {   $user = Auth::user();
        return view('pages.profile.services_info', compact('user'));
    }

    public function showTestimonialsInfo()
    {   $user = Auth::user();
        return view('pages.profile.testimonials_info', compact('user'));
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

        $universities = $request->input('universities');
        $degrees = $request->input('degrees');
        $major_subjects = $request->input('major_subjects');
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $descriptions = $request->input('descriptions');
        $is_currently_studying = $request->input('is_currently_studying');

        $education = Education::where('user_id', Auth::id())->get()->first();

        if($education){
            $education->degree = $degrees[0];
            $education->institute_name = $universities[0];
            $education->major_subject = $major_subjects[0];
            $education->start_date = $start_date[0];
            $education->end_date = $end_date[0];
            $education->description = $descriptions[0];
            $education->is_currently_studying = is_null($is_currently_studying) ? false : true;

            $education->save();
        } else {
            Education::create([
                'degree' => $degrees[0],
                'institute_name' => $universities[0],
                'major_subject' => $major_subjects[0],
                'institute_level' => 'University',
                'start_date' => $start_date[0],
                'end_date' => $end_date[0],
                'description' => $descriptions[0],
                'is_currently_studying' => is_null($is_currently_studying) ? false : true,
                'user_id' => Auth::id()
            ]);
        }

        return redirect()->back()->with(['message'=>'Successfully updated !']);
    }

    public function updateExperienceInfo(Request $request){

        $companies = $request->input('companies');
        $positions = $request->input('positions');
        $job_titles = $request->input('job_titles');
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $descriptions = $request->input('descriptions');
        $is_currently_working = $request->input('is_currently_working');

        $experience = Experience::where('user_id', Auth::id())->get()->first();

        if($experience){
            $experience->position = $positions[0];
            $experience->company_name = $companies[0];
            $experience->job_title = $job_titles[0];
            $experience->start_date = $start_date[0];
            $experience->end_date = $end_date[0];
            $experience->description = $descriptions[0];
            $experience->is_currently_working = is_null($is_currently_working) ? false : true;

            $experience->save();
        } else {
            Experience::create([
                'position' => $positions[0],
                'company_name' => $companies[0],
                'job_title' => $job_titles[0],
                'start_date' => $start_date[0],
                'end_date' => $end_date[0],
                'description' => $descriptions[0],
                'is_currently_working' => is_null($is_currently_working) ? false : true,
                'user_id' => Auth::id()
            ]);
        }
        return redirect()->back()->with(['message'=>'Successfully updated !']);
    }

    public function updateIndustryInfo(Request $request){

        return redirect()->back()->with(['message'=>'Successfully updated !']);
    }

    public function updateServicesInfo(Request $request){

        $name = $request->input('name');
        $min_prices = $request->input('min_prices');
        $summaries = $request->input('summaries');
        $descriptions = $request->input('descriptions');

        $services = Services::where('user_id', Auth::id())->get()->first();

        if($services){
            $services->min_price = $min_prices[0];
            $services->name = $name[0];
            $services->summary = $summaries[0];
            $services->description = $descriptions[0];

            $services->save();
        } else {
            Services::create([
                'min_price' => $min_prices[0],
                'name' => $name[0],
                'summary' => $summaries[0],
                'description' => $descriptions[0],
                'user_id' => Auth::id()
            ]);
        }

        return redirect()->back()->with(['message'=>'Successfully updated !']);
    }


    public function updateTestimonialsInfo(Request $request){

        $customer_names = $request->input('customer_names');
        $messages = $request->input('messages');

        $testimonial = Testimonial::where('user_id', Auth::id())->get()->first();

        if($testimonial){
            $testimonial->message = $messages[0];
            $testimonial->customer_name = $customer_names[0];

            $testimonial->save();
        } else {
            Testimonial::create([
                'message' => $messages[0],
                'customer_name' => $customer_names[0],
                'user_id' => Auth::id()
            ]);
        }

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
