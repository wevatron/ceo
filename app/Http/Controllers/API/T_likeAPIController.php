<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateT_likeAPIRequest;
use App\Http\Requests\API\UpdateT_likeAPIRequest;
use App\Models\T_like;
use App\Repositories\T_likeRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class T_likeController
 * @package App\Http\Controllers\API
 */

class T_likeAPIController extends AppBaseController
{
    /** @var  T_likeRepository */
    private $tLikeRepository;

    public function __construct(T_likeRepository $tLikeRepo)
    {
        $this->tLikeRepository = $tLikeRepo;
    }

    /**
     * Display a listing of the T_like.
     * GET|HEAD /tLikes
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $evento = 0;
        if ($request->evento) {
                $evento = $request->evento;
        }
        $tLikes = T_like::where('t_evento_id','=',$evento)
        ->get();

        return $this->sendResponse($tLikes->toArray(), 'T Likes retrieved successfully');
    }

    /**
     * Store a newly created T_like in storage.
     * POST /tLikes
     *
     * @param CreateT_likeAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateT_likeAPIRequest $request)
    {
        $input = $request->all();
        $like = T_like::where('t_evento_id','=',$request->t_evento_id)->first();
        if ($like) {
            if ($like->dislike == 0) {
                $like->dislike = 1;
            }else{
                $like->dislike = 0;
            }
            $like->usuario_id = $request->user()->id;
            $like->save();
            return $this->sendResponse($like->toArray(), 'T Like saved successfully');
        }
        $tLike = $this->tLikeRepository->create($input);

        return $this->sendResponse($tLike->toArray(), 'T Like saved successfully');
    }

    /**
     * Display the specified T_like.
     * GET|HEAD /tLikes/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var T_like $tLike */
        $tLike = $this->tLikeRepository->find($id);

        if (empty($tLike)) {
            return $this->sendError('T Like not found');
        }

        return $this->sendResponse($tLike->toArray(), 'T Like retrieved successfully');
    }

    /**
     * Update the specified T_like in storage.
     * PUT/PATCH /tLikes/{id}
     *
     * @param int $id
     * @param UpdateT_likeAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateT_likeAPIRequest $request)
    {
        $input = $request->all();

        /** @var T_like $tLike */
        $tLike = $this->tLikeRepository->find($id);

        if (empty($tLike)) {
            return $this->sendError('T Like not found');
        }

        $tLike = $this->tLikeRepository->update($input, $id);

        return $this->sendResponse($tLike->toArray(), 'T_like updated successfully');
    }

    /**
     * Remove the specified T_like from storage.
     * DELETE /tLikes/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var T_like $tLike */
        $tLike = $this->tLikeRepository->find($id);

        if (empty($tLike)) {
            return $this->sendError('T Like not found');
        }

        $tLike->delete();

        return $this->sendSuccess('T Like deleted successfully');
    }
}
