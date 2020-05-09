<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatenewsRequest;
use App\Http\Requests\UpdatenewsRequest;
use App\Repositories\newsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class newsController extends AppBaseController
{
    /** @var  newsRepository */
    private $newsRepository;

    public function __construct(newsRepository $newsRepo)
    {
        $this->newsRepository = $newsRepo;
    }

    /**
     * Display a listing of the news.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $news = $this->newsRepository->all();

        return view('news.index')
            ->with('news', $news);
    }

    /**
     * Show the form for creating a new news.
     *
     * @return Response
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created news in storage.
     *
     * @param CreatenewsRequest $request
     *
     * @return Response
     */
    public function store(CreatenewsRequest $request)
    {

        $news = $this->newsRepository->createnews($request);

        Flash::success('News saved successfully.');

        return redirect(route('news.index'));
    }

    /**
     * Display the specified news.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $news = $this->newsRepository->find($id);

        if (empty($news)) {
            Flash::error('News not found');

            return redirect(route('news.index'));
        }

        return view('news.show')->with('news', $news);
    }

    /**
     * Show the form for editing the specified news.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $news = $this->newsRepository->find($id);

        if (empty($news)) {
            Flash::error('News not found');

            return redirect(route('news.index'));
        }

        return view('news.edit')->with('news', $news);
    }

    /**
     * Update the specified news in storage.
     *
     * @param int $id
     * @param UpdatenewsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatenewsRequest $request)
    {
        $news = $this->newsRepository->find($id);

        if (empty($news)) {
            Flash::error('News not found');

            return redirect(route('news.index'));
        }

        $news = $this->newsRepository->updatenews($request, $id);

        Flash::success('News updated successfully.');

        return redirect(route('news.index'));
    }

    /**
     * Remove the specified news from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $news = $this->newsRepository->find($id);

        if (empty($news)) {
            Flash::error('News not found');

            return redirect(route('news.index'));
        }

        $this->newsRepository->delete($id);

        Flash::success('News deleted successfully.');

        return redirect(route('news.index'));
    }
}
