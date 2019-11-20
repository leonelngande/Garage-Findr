<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\MechanicWorkshop;
use App\Models\Quarter;
use App\Models\Subdivision;
use App\Models\VehicleType;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application homepage.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        $divisions = Division::all();
        $subdivisions = Subdivision::all();
        $quarters = Quarter::all();
        $mechanicWorkshops = MechanicWorkshop::with(['quarter.subdivision.division'])->get();
        $vehicleTypes = VehicleType::all();

        return view('welcome')->with(compact(['divisions', 'subdivisions', 'quarters', 'mechanicWorkshops', 'vehicleTypes']));
    }
}
