<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Review\CreateRequest;
use Illuminate\Support\Facades\Response;

class ReviewController extends Controller
{
    public function list()
    {
        return Response::json();
    }

    public function create(CreateRequest $request)
    {
        return Response::json();
    }
}
