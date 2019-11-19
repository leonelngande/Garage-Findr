<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMechanicWorkshopRequest;
use App\Http\Requests\UpdateMechanicWorkshopRequest;
use App\Models\Quarter;
use App\Models\VehicleType;
use App\Repositories\MechanicWorkshopRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MechanicWorkshopController extends AppBaseController
{
    /** @var  MechanicWorkshopRepository */
    private $mechanicWorkshopRepository;

    public function __construct(MechanicWorkshopRepository $mechanicWorkshopRepo)
    {
        $this->mechanicWorkshopRepository = $mechanicWorkshopRepo;
    }

    /**
     * Display a listing of the MechanicWorkshop.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $mechanicWorkshops = $this->mechanicWorkshopRepository->all();

        return view('mechanic_workshops.index')
            ->with('mechanicWorkshops', $mechanicWorkshops);
    }

    /**
     * Show the form for creating a new MechanicWorkshop.
     *
     * @return Response
     */
    public function create()
    {
        $quarters = Quarter::with('subdivision.division')->get();
        // append subdivision and division names to quarter name
        $quarters->each(function ($quarter) {
            $quarter->name = $quarter->name . ' (' . $quarter->subdivision->name . ', ' . $quarter->subdivision->division->name . ')';
        });
        $quarters = $quarters->pluck('name', 'id')->prepend('Select a quarter', '');

        $vehicleTypes = VehicleType::pluck('name', 'id');

        return view('mechanic_workshops.create')->with(compact(['quarters', 'vehicleTypes']));
    }

    /**
     * Store a newly created MechanicWorkshop in storage.
     *
     * @param CreateMechanicWorkshopRequest $request
     *
     * @return Response
     */
    public function store(CreateMechanicWorkshopRequest $request)
    {
        $input = $request->all();

        $mechanicWorkshop = $this->mechanicWorkshopRepository->create($input);

        if ($request->has('vehicle_types')) {
            $mechanicWorkshop->vehicleTypes()->sync($request->get('vehicle_types'));
        }

        Flash::success('Mechanic Workshop saved successfully.');

        return redirect(route('mechanicWorkshops.index'));
    }

    /**
     * Display the specified MechanicWorkshop.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mechanicWorkshop = $this->mechanicWorkshopRepository->find($id);

        if (empty($mechanicWorkshop)) {
            Flash::error('Mechanic Workshop not found');

            return redirect(route('mechanicWorkshops.index'));
        }

        return view('mechanic_workshops.show')->with('mechanicWorkshop', $mechanicWorkshop);
    }

    /**
     * Show the form for editing the specified MechanicWorkshop.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mechanicWorkshop = $this->mechanicWorkshopRepository->find($id);

        if (empty($mechanicWorkshop)) {
            Flash::error('Mechanic Workshop not found');

            return redirect(route('mechanicWorkshops.index'));
        }

        $quarters = Quarter::with('subdivision.division')->get();
        // append subdivision and division names to quarter name
        $quarters->each(function ($quarter) {
            $quarter->name = $quarter->name . ' (' . $quarter->subdivision->name . ', ' . $quarter->subdivision->division->name . ')';
        });
        $quarters = $quarters->pluck('name', 'id')->prepend('Select a quarter', '');

        $vehicleTypes = VehicleType::pluck('name', 'id');

        return view('mechanic_workshops.edit')->with(compact(['mechanicWorkshop', 'quarters', 'vehicleTypes']));
    }

    /**
     * Update the specified MechanicWorkshop in storage.
     *
     * @param int $id
     * @param UpdateMechanicWorkshopRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMechanicWorkshopRequest $request)
    {
        $mechanicWorkshop = $this->mechanicWorkshopRepository->find($id);

        if (empty($mechanicWorkshop)) {
            Flash::error('Mechanic Workshop not found');

            return redirect(route('mechanicWorkshops.index'));
        }

        $mechanicWorkshop = $this->mechanicWorkshopRepository->update($request->all(), $id);

        if ($request->has('vehicle_types')) {
            $mechanicWorkshop->vehicleTypes()->sync($request->get('vehicle_types'));
        }

        Flash::success('Mechanic Workshop updated successfully.');

        return redirect(route('mechanicWorkshops.index'));
    }

    /**
     * Remove the specified MechanicWorkshop from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mechanicWorkshop = $this->mechanicWorkshopRepository->find($id);

        if (empty($mechanicWorkshop)) {
            Flash::error('Mechanic Workshop not found');

            return redirect(route('mechanicWorkshops.index'));
        }

        $this->mechanicWorkshopRepository->delete($id);

        Flash::success('Mechanic Workshop deleted successfully.');

        return redirect(route('mechanicWorkshops.index'));
    }
}
