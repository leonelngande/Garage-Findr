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
        //
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->middleware('auth');
        return view('home');
    }

    /**
     * Show the application homepage.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function welcome(Request $request)
    {
        $divisions = Division::all();
        $subdivisions = Subdivision::all();
        $quarters = Quarter::all();
        $vehicleTypes = VehicleType::all();

        $mechanicWorkshops = MechanicWorkshop::with(['quarter.subdivision.division', 'vehicleTypes']);
        if ($request->filled('quarter_id')) {
            $mechanicWorkshops = $mechanicWorkshops->where('quarter_id', $request->get('quarter_id'));
        }
        if ($request->filled('vehicle_type_id')) {
            $mechanicWorkshops = $mechanicWorkshops->whereHas('vehicleTypes', function ($query) use ($request) {
                return $query->where('vehicle_type_id', '=', $request->get('vehicle_type_id'));
            });
        }
        $mechanicWorkshops = $mechanicWorkshops->get();

        $request->flash();

        return view('welcome')
            ->with(compact(['divisions', 'subdivisions', 'quarters', 'mechanicWorkshops', 'vehicleTypes']));
    }
}
