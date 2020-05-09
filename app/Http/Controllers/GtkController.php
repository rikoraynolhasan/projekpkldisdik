<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGtkRequest;
use App\Http\Requests\UpdateGtkRequest;
use App\Repositories\GtkRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class GtkController extends AppBaseController
{
    /** @var  GtkRepository */
    private $gtkRepository;

    public function __construct(GtkRepository $gtkRepo)
    {
        $this->gtkRepository = $gtkRepo;
    }

    /**
     * Display a listing of the Gtk.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $gtks = $this->gtkRepository->all();

        return view('gtks.index')
            ->with('gtks', $gtks);
    }

    /**
     * Show the form for creating a new Gtk.
     *
     * @return Response
     */
    public function create()
    {
        return view('gtks.create');
    }

    /**
     * Store a newly created Gtk in storage.
     *
     * @param CreateGtkRequest $request
     *
     * @return Response
     */
    public function store(CreateGtkRequest $request)
    {
        $input = $request->all();

        $gtk = $this->gtkRepository->create($input);

        Flash::success('Gtk saved successfully.');

        return redirect(route('gtks.index'));
    }

    /**
     * Display the specified Gtk.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $gtk = $this->gtkRepository->find($id);

        if (empty($gtk)) {
            Flash::error('Gtk not found');

            return redirect(route('gtks.index'));
        }

        return view('gtks.show')->with('gtk', $gtk);
    }

    /**
     * Show the form for editing the specified Gtk.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $gtk = $this->gtkRepository->find($id);

        if (empty($gtk)) {
            Flash::error('Gtk not found');

            return redirect(route('gtks.index'));
        }

        return view('gtks.edit')->with('gtk', $gtk);
    }

    /**
     * Update the specified Gtk in storage.
     *
     * @param int $id
     * @param UpdateGtkRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGtkRequest $request)
    {
        $gtk = $this->gtkRepository->find($id);

        if (empty($gtk)) {
            Flash::error('Gtk not found');

            return redirect(route('gtks.index'));
        }

        $gtk = $this->gtkRepository->update($request->all(), $id);

        Flash::success('Gtk updated successfully.');

        return redirect(route('gtks.index'));
    }

    /**
     * Remove the specified Gtk from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $gtk = $this->gtkRepository->find($id);

        if (empty($gtk)) {
            Flash::error('Gtk not found');

            return redirect(route('gtks.index'));
        }

        $this->gtkRepository->delete($id);

        Flash::success('Gtk deleted successfully.');

        return redirect(route('gtks.index'));
    }
}
