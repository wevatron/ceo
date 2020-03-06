<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateT_likeRequest;
use App\Http\Requests\UpdateT_likeRequest;
use App\Repositories\T_likeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class T_likeController extends AppBaseController
{
    /** @var  T_likeRepository */
    private $tLikeRepository;

    public function __construct(T_likeRepository $tLikeRepo)
    {
        $this->tLikeRepository = $tLikeRepo;
    }

    /**
     * Display a listing of the T_like.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tLikes = $this->tLikeRepository->all();

        return view('t_likes.index')
            ->with('tLikes', $tLikes);
    }

    /**
     * Show the form for creating a new T_like.
     *
     * @return Response
     */
    public function create()
    {
        return view('t_likes.create');
    }

    /**
     * Store a newly created T_like in storage.
     *
     * @param CreateT_likeRequest $request
     *
     * @return Response
     */
    public function store(CreateT_likeRequest $request)
    {
        $input = $request->all();

        $tLike = $this->tLikeRepository->create($input);

        Flash::success('T Like saved successfully.');

        return redirect(route('tLikes.index'));
    }

    /**
     * Display the specified T_like.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tLike = $this->tLikeRepository->find($id);

        if (empty($tLike)) {
            Flash::error('T Like not found');

            return redirect(route('tLikes.index'));
        }

        return view('t_likes.show')->with('tLike', $tLike);
    }

    /**
     * Show the form for editing the specified T_like.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tLike = $this->tLikeRepository->find($id);

        if (empty($tLike)) {
            Flash::error('T Like not found');

            return redirect(route('tLikes.index'));
        }

        return view('t_likes.edit')->with('tLike', $tLike);
    }

    /**
     * Update the specified T_like in storage.
     *
     * @param int $id
     * @param UpdateT_likeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateT_likeRequest $request)
    {
        $tLike = $this->tLikeRepository->find($id);

        if (empty($tLike)) {
            Flash::error('T Like not found');

            return redirect(route('tLikes.index'));
        }

        $tLike = $this->tLikeRepository->update($request->all(), $id);

        Flash::success('T Like updated successfully.');

        return redirect(route('tLikes.index'));
    }

    /**
     * Remove the specified T_like from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tLike = $this->tLikeRepository->find($id);

        if (empty($tLike)) {
            Flash::error('T Like not found');

            return redirect(route('tLikes.index'));
        }

        $this->tLikeRepository->delete($id);

        Flash::success('T Like deleted successfully.');

        return redirect(route('tLikes.index'));
    }
}
