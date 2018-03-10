<?php

namespace App\Http\Controllers\V1;

use App\Http\Traits\V1\TripsTraits;
use App\Models\Operator;
use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Traits\V1\ChannelTraits;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Models\Faq;


class DashboardController extends Controller {

    use ChannelTraits,
        TripsTraits;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct() {
//        $this->middleware('auth');
//    }
    /**
     * Show the application dashboard.
     *
     */

    protected $view_directory_name="v1.Dashboard.";
    public function index() {
        // $operator_auth= Auth::user();
        // $operator_auth_id = Auth::id();


        // $ambulance_select = ['own' => 'Own Inventory', 'thirdp' => 'Third Party 
        // Inventory', 'open' => 'Open Inventory']; //used in dropdown booking console
        // $operator=Operator::with('trips.patient','trips.patient','trips.tripstatus','trips.ambulance','trips.driver','ambulances_operator')->find($operator_auth->operator_id);

        // $bookings_list=$operator->trips()->get();
        // $ambulances=$operator->ambulances_operator()->get();
        // $ambulances->load('type','model','assigned_ambulance_location');


//        dd($operator,$bookings_list);
        return view($this->view_directory_name.'dashboard');
//        return view('Hospital_V1.Dashboard.dashboard')
            // ->with([
            //     'channel' => $this->getAvailChannelList($operator_auth_id),
            //     'keys' => $this->getKeys(),
            //     'bookings_list'=>$bookings_list,//to list all trips of that operator
            //     'own' => $this->getOwnInventoryBookingList($operator_auth_id),
            //     'open' => $this->getOpenInventoryBookingList($operator_auth_id),

            //     'ambulance_select' => $ambulance_select,
            // ]);
    }

    public function load_faq_form() {
//      $faqs = Faq::where('faq_for','User')->get();
        $faq_questions = ['q1' => 'How do I book an Ambulance?', 'q2' => 'What are the types of emergency?', 'q3' => 'Will the App work without Internet?'];
        $faq_ans = ['a1' => 'The user can request an ambulance through the App, He should select the type of emergency, accordingly ambulance type will be selected.If the driver is online, he will accept the request and will send the accepted response along with his name,contact number and Ambulance number.', 'a2' => '8 types of emergency are mentioned in the app, a. Emergency related to heart attack or other heart disease b. Emergency related to road accidents c. Maternal complications d. Emergency due to fire e. Emergency due to drowning in water f. Incidents of electric shocks/current g. Emergency during disaster for eg.Earthquakes, floods etc h. For death of a person',
            'a3' => 'For the instant no. But shortly we will come up with this feature.'];
//      $faqs = merge($faq_questions,$faq_ans);
        return view("layouts.load_faq_form", compact('faq_questions', 'faq_ans'));
    }

    public function load_languages() {
        $languages = collect(config('languages'))->pluck('name', 'name');
        $htm = View("layouts.list_of_languages", compact('languages'))->render();
        $title = "Change Language";
        return response(array('content' => $htm, 'title' => $title));
    }

    public function troubleshoot_details(){
        return view('errors.404');
    }
}
