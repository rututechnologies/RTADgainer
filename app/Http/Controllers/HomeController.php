<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('index');
    }
    public function minor()
    {
        return view('fuel');
    }

    public function activities()
    {
        return view('daily_activities');
    }
    public function log()
    {
        return view('expense_log');
    }
    public function call()
    {
        return view('sos');
    }
    public function trip()
    {
        return view('self_trip');
    }

    public function create()
    {
        return view('micros.fuelcreateform');
    }
    public function create_activity()
    {
        return view('micros.dailyactivityform');
    }
    public function create_log()
    {
        return view('micros.expenselogform');
    }
    public function load_log()
    {

    }
    public function create_call()
    {
        return view('micros.sosform');
    }
    public function create_trip()
    {
        return view('micros.selftripform');
    }

}
