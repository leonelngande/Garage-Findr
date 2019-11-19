<?php

namespace App\Http\Controllers;

use App\DataTables\SubdivisionDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateSubdivisionRequest;
use App\Http\Requests\UpdateSubdivisionRequest;
use App\Models\Division;
use App\Repositories\SubdivisionRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class SubdivisionController extends AppBaseController
{
    /** @var  SubdivisionRepository */
    private $subdivisionRepository;

    public function __construct(SubdivisionRepository $subdivisionRepo)
    {
        $this->subdivisionRepository = $subdivisionRepo;
    }

    /**
     * Display a listing of the Subdivision.
     *
     * @param SubdivisionDataTable $subdivisionDataTable
     * @return Response
     */
    public function index(SubdivisionDataTable $subdivisionDataTable)
    {
        return $subdivisionDataTable->render('subdivisions.index');
    }

    /**
     * Show the form for creating a new Subdivision.
     *
     * @return Response
     */
    public function create()
    {
        $divisions = Division::pluck('name', 'id')->prepend('Select a division', '');

        return view('subdivisions.create')->with(compact('divisions'));
    }

    /**
     * Store a newly created Subdivision in storage.
     *
     * @param CreateSubdivisionRequest $request
     *
     * @return Response
     */
    public function store(CreateSubdivisionRequest $request)
    {
        $input = $request->all();

        $subdivision = $this->subdivisionRepository->create($input);

        Flash::success('Subdivision saved successfully.');

        return redirect(route('subdivisions.index'));
    }

    /**
     * Display the specified Subdivision.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $subdivision = $this->subdivisionRepository->find($id);

        if (empty($subdivision)) {
            Flash::error('Subdivision not found');

            return redirect(route('subdivisions.index'));
        }

        return view('subdivisions.show')->with('subdivision', $subdivision);
    }

    /**
     * Show the form for editing the specified Subdivision.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $subdivision = $this->subdivisionRepository->find($id);

        if (empty($subdivision)) {
            Flash::error('Subdivision not found');

            return redirect(route('subdivisions.index'));
        }

        return view('subdivisions.edit')->with('subdivision', $subdivision);
    }

    /**
     * Update the specified Subdivision in storage.
     *
     * @param  int              $id
     * @param UpdateSubdivisionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSubdivisionRequest $request)
    {
        $subdivision = $this->subdivisionRepository->find($id);

        if (empty($subdivision)) {
            Flash::error('Subdivision not found');

            return redirect(route('subdivisions.index'));
        }

        $subdivision = $this->subdivisionRepository->update($request->all(), $id);

        Flash::success('Subdivision updated successfully.');

        return redirect(route('subdivisions.index'));
    }

    /**
     * Remove the specified Subdivision from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $subdivision = $this->subdivisionRepository->find($id);

        if (empty($subdivision)) {
            Flash::error('Subdivision not found');

            return redirect(route('subdivisions.index'));
        }

        $this->subdivisionRepository->delete($id);

        Flash::success('Subdivision deleted successfully.');

        return redirect(route('subdivisions.index'));
    }
}
