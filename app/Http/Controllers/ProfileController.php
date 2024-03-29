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
            'BS',
            'MS',
            'Diploma',
        ];

        $major_subjects = [
            'Software Engineering',
            'Computer Science',
            'Information Technology',
            'biochemistry',
            'Islamic Banking and Fainance',
            'Nursing',
            'Ecnomic & Fainance',
            'Mechincal Engennring & Techonolgy',
            'Biotechonolgy',
            'Matheamthics',
            'Project Management',
            'Chemistry',
            'Physics',
            'Food Sceience and Nutartion',
            'Ecnomic & Matematihcs(Joint Major) Honours',
            'Archaelogy',
            'Sociology',
            'Environmnatel Sciences',
            'Statistics',
            'Sotware Engreeing',
            'Computer Sceience',
            'Infronamtion and Techonolgy',
            'Home Economics',
            'Electrical Engineering and Techonolgy',
            'Civial Engineering and Techonolgy',
            'Interior Architecture',
            'International Relations',
            'Political Sceiences',
            'Social Sceience(Internatioal Development Studies)',
            'Telecommuncation',
            'Physocolgy',
            'Landsacpe Design',
            'Islamic Studies',
            'Geography',
            'Jounalism',
            'Biochemsitry & Biotechonolgy',
            'Medical Ultrasound Technology',
            'Avionics Engineering',
            'Microbiology',
            'Physical Education',
            'Commerece',
            'Economics(Honors)',
            'Medical laboratory&techonolgy',
            'Intensive care Techonolgy',
            'Microbiology & Molecular Genetics',
            'Pakistan Studies',
            'Chemical Engennering',
            'Electrical Engineering',
            'Human Nutartion & Dietetics',
            'Botany',
            'Biotechonolgy & Genetics Engineering',
            'Zoology',
            'Food Sceience and Techonolgy',
            'Conservation Studies',
            'Accounting and Fainace',
            'Metallurgy & Materials Engineering',
            'Fashion Desinging',
            'Biological Sciences',
            'Anthroplogy',
            'Development Studies',
            'Mass Communcation',
            'Remote Senisng and GIS',
            'Politics & Ecomomics',
            'Gender Studies',
            'Civil Engineering',
            'Applied Biosceience',
            'Management',
            'Opertaion Therater Techonolgy',
            'Communcation and Media Studies',
            'Social Work',
            'Bioinfromantics',
            'Toursim and Hospitality',
            'Microbiology',
            'Social Science(Goverence and Public policy)',
            'Materail Sceience',
            'Poultry Sceience',
            'Aerospace Enginnering',
            'Arrchitecture',
            'Education',
            'Social Sceience(political and International Relations)',
            'Industrial Engineering & Management',
            'Respiratory Therapy',
            'Nursing',
            'Geology',
            'Electrical -Electonics Engineering',
            'Fisheries and Aquaculture',
            'Electical- Power Enginnering',
            'English Language and Literature',
            'Business Adminsatrtion',
            'Anthroplogy and Sociology (honors)',
            'Aircarft Maintenance & Techonolgy',
            'Clinical Psychology',
            'Health and  Physical Education',
            'Media & Mass communcation',
            'Accounting and Fainace(For CAF Qualified Students)',
            'Radiography &Imaging Techonolgy',
            'Information Technology',
            'Computer Science',
            'Diplomacy and Strategic Studies',
            'English languuage Teaching & linguistics',
            'Educationl Research and Asesment',
            'Industrail Enginnenring and Mnagament',
            'Supply chain and retail mangamnet',
            'Energy and Enviromental l Engineering',
            'Design and Manufacturing Engineering',
            'Finanical Management',
            'Robotics and Intelligent  Machine Engineering',
            'Food Science and Techonolgy',
            'Physical Theraphy-Neurology',
            'Business Staticts and Mangemant',
            'Geographics Infromantion system',
            'Process system Engineeerning',
            'Health care mangemnat and innvovation',
            'Telecommuncations System and Networks',
            'Logistics and Supply chain Managament',
            'Civil Enginnering',
            'Innvoation and Enterpreneurship',

        ];
        $user = Auth::user();
        return view('pages.profile.educational_info', compact('user', 'universities', 'degrees', 'major_subjects'));
    }

    public function showExperienceInfo()
    {
        $positions = [
            'Senior Manager',
            'Assistant Manager',
            'Internee',
        ];
        $companies = [
            'Systems Limited',
            '10Pearls',
            'NetSol',
            'TRG Tech',
            'Arpatech',
            'Folio3',
            'Dev Studio',
            'DevSin',
            'Dev House',
            'Avanza Solutions',
            'Contour Software',
            'ITSec',
            'DPL',
            'Shaukat Khanum Memorial Hospital',
            'Fatima Memorial Hospital',
            'Combined Medical Hospital',
            'Bahria Town Hospital.',
            'Hameed Latif Hospital',
            'Jinnah Hospital',
            'Shaikh Zayed Hospital',
            'Mayo Hospital, Lahore',
            'CIVITECH.',
            'RCO Engineering',
            'Duracon Eng',
            'Acecon Corporation',
            'AL SAEE ENGINEERING',
            'G.E Tech Pvt Ltd. Islamabad',
            'Abacus Electrical Engineers',
            'Diran Productions',
            'The Wedders Event Planners',
            'ArtX Films',
            'Liaison Corporation',
            'DesignEnds',
            'Gatello',
            'CreativeLabz Pvt Ltd',
            'DTech Systems Co',
            'Colgate-Palmolive (Pakistan) Ltd.',
            'Colony Textile Mills Ltd.',
            'D.G. Khan Cement Co. Ltd.',
            'Dawood Hercules Corp. Ltd.',
            'EFU General Insurance Ltd.',
            'EFU Life Assurance Ltd.',
            'Fatima Fertilizer Co. Ltd.',
            'Gul Ahmed Textile Mills Ltd.',
            'Habib Bank Ltd.',
            'ICI Pakistan Ltd.',
            'Ibrahim Fibres Ltd',
            'Hinopak Motors Ltd.',
            'Honda Atlas Cars (Pakistan) Ltd.',
            'Habib Metropolitan Bank Ltd.',
            'Indus Dyeing & Manufacturing Co. Ltd.',
            'Indus Motor Co. Ltd.',
            'International Industries Ltd.',
            'International Steels Ltd.',
            'Ismail Industries Ltd',
            'Jahangir Siddiqui & Co. Ltd',
            'JDW Sugar Mills Ltd.',
            'JS Bank Ltd.',
            'Maple Leaf Cement Factory Ltd.',
            'National Foods Ltd. (Pakistan)',
            'National Bank of Pakistan',
            'Oil & Gas Development Co. Ltd.',
            'Pakistan Telecommunication Co. Ltd',

        ];
        $jobTitles = [
            'Team Leader',
            'Manager',
            'Executive',
            'Director',
            'Coordinator',
            'Administrator',
        ];
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
            'profile_image' => 'nullable|file',
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
            $file = $request->profile_image;
            $path = $file->store('images/users', 'public');
            $user->profile_image = $path;
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
