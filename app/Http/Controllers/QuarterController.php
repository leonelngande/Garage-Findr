<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateQuarterRequest;
use App\Http\Requests\UpdateQuarterRequest;
use App\Models\Subdivision;
use App\Repositories\QuarterRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class QuarterController extends AppBaseController
{
    /** @var  QuarterRepository */
    private $quarterRepository;

    public function __construct(QuarterRepository $quarterRepo)
    {
        $this->quarterRepository = $quarterRepo;
    }

    /**
     * Display a listing of the Quarter.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $quarters = $this->quarterRepository->all();

        return view('quarters.index')
            ->with('quarters', $quarters);
    }

    /**
     * Show the form for creating a new Quarter.
     *
     * @return Response
     */
    public function create()
    {
        // Query all subdivisions and respective divisions
        $subdivisions = Subdivision::with('division')->get();
        // Append each subdivision's division name to it's name
        $subdivisions->each(function ($subdivision) {
           $subdivision->name = $subdivision->name . ' (' . $subdivision->division->name . ')';
        });
        $subdivisions = $subdivisions->pluck('name', 'id')->prepend('Select a subdivision', '');

        return view('quarters.create')->with(compact('subdivisions'));
    }

    /**
     * Store a newly created Quarter in storage.
     *
     * @param CreateQuarterRequest $request
     *
     * @return Response
     */
    public function store(CreateQuarterRequest $request)
    {
        $input = $request->all();

        $quarter = $this->quarterRepository->create($input);

        Flash::success('Quarter saved successfully.');

        return redirect(route('quarters.index'));
    }

    /**
     * Display the specified Quarter.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $quarter = $this->quarterRepository->find($id);

        if (empty($quarter)) {
            Flash::error('Quarter not found');

            return redirect(route('quarters.index'));
        }

        return view('quarters.show')->with('quarter', $quarter);
    }

    /**
     * Show the form for editing the specified Quarter.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $quarter = $this->quarterRepository->find($id);

        if (empty($quarter)) {
            Flash::error('Quarter not found');

            return redirect(route('quarters.index'));
        }

        // Query all subdivisions and respective divisions
        $subdivisions = Subdivision::with('division')->get();
        // Append each subdivision's division name to it's name
        $subdivisions->each(function ($subdivision) {
            $subdivision->name = $subdivision->name . ' (' . $subdivision->division->name . ')';
        });
        $subdivisions = $subdivisions->pluck('name', 'id')->prepend('Select a subdivision', '');

        return view('quarters.edit')->with(compact(['subdivisions', 'quarter']));
    }

    /**
     * Update the specified Quarter in storage.
     *
     * @param int $id
     * @param UpdateQuarterRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateQuarterRequest $request)
    {
        $quarter = $this->quarterRepository->find($id);

        if (empty($quarter)) {
            Flash::error('Quarter not found');

            return redirect(route('quarters.index'));
        }

        $quarter = $this->quarterRepository->update($request->all(), $id);

        Flash::success('Quarter updated successfully.');

        return redirect(route('quarters.index'));
    }

    /**
     * Remove the specified Quarter from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $quarter = $this->quarterRepository->find($id);

        if (empty($quarter)) {
            Flash::error('Quarter not found');

            return redirect(route('quarters.index'));
        }

        $this->quarterRepository->delete($id);

        Flash::success('Quarter deleted successfully.');

        return redirect(route('quarters.index'));
    }
}
