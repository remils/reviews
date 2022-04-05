<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Review\CreateRequest;
use App\Http\Resources\ReviewResource;
use App\Services\ReviewService;
use Illuminate\Support\Facades\Response;

class ReviewController extends Controller
{
    protected ReviewService $reviewService;

    public function __construct(ReviewService $reviewService)
    {
        $this->reviewService = $reviewService;
    }

    public function list()
    {
        return Response::json(ReviewResource::collection($this->reviewService->all()));
    }

    public function create(CreateRequest $request)
    {
        return Response::json(ReviewResource::make($this->reviewService->create($request->getDto())));
    }
}
