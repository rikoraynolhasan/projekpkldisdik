<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateHeadRequest;
use App\Http\Requests\UpdateHeadRequest;
use App\Repositories\HeadRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

use App\Models\Gtk;

class HeadController extends AppBaseController
{
    /** @var  HeadRepository */
    private $headRepository;

    public function __construct(HeadRepository $headRepo)
    {
        $this->headRepository = $headRepo;
    }

    /**
     * Display a listing of the Head.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $heads = $this->headRepository->all();

        return view('heads.index')
            ->with('heads', $heads);
    }

    /**
     * Show the form for creating a new Head.
     *
     * @return Response
     */
    public function create()
    {
        $gtk = Gtk::pluck('gtk','id');
        return view('heads.create', compact('gtk'));
    }

    /**
     * Store a newly created Head in storage.
     *
     * @param CreateHeadRequest $request
     *
     * @return Response
     */
    public function store(CreateHeadRequest $request)
    {
        $input = $request->all();

        $head = $this->headRepository->create($input);

        Flash::success('Head saved successfully.');

        return redirect(route('heads.index'));
    }

    /**
     * Display the specified Head.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $head = $this->headRepository->find($id);

        if (empty($head)) {
            Flash::error('Head not found');

            return redirect(route('heads.index'));
        }

        return view('heads.show')->with('head', $head);
    }

    /**
     * Show the form for editing the specified Head.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $head = $this->headRepository->find($id);

        if (empty($head)) {
            Flash::error('Head not found');

            return redirect(route('heads.index'));
        }

        return view('heads.edit')->with('head', $head);
    }

    /**
     * Update the specified Head in storage.
     *
     * @param int $id
     * @param UpdateHeadRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateHeadRequest $request)
    {
        $head = $this->headRepository->find($id);

        if (empty($head)) {
            Flash::error('Head not found');

            return redirect(route('heads.index'));
        }

        $head = $this->headRepository->update($request->all(), $id);

        Flash::success('Head updated successfully.');

        return redirect(route('heads.index'));
    }

    /**
     * Remove the specified Head from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $head = $this->headRepository->find($id);

        if (empty($head)) {
            Flash::error('Head not found');

            return redirect(route('heads.index'));
        }

        $this->headRepository->delete($id);

        Flash::success('Head deleted successfully.');

        return redirect(route('heads.index'));
    }
}
