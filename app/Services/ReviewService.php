<?php

namespace App\Services;

use App\Dto\ReviewDto;
use App\Events\Review\CreateEvent;
use App\Models\Review;
use Illuminate\Events\Dispatcher;

class ReviewService
{
    protected Dispatcher $dispatcher;

    public function __construct(Dispatcher $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }

    public function all()
    {
        return Review::all();
    }

    public function create(ReviewDto $dto): Review
    {
        $review = Review::create([
            'name' => $dto->getName(),
            'email' => $dto->getEmail(),
            'text' => $dto->getText()
        ]);

        $this->dispatcher->dispatch(new CreateEvent($review));

        return $review;
    }
}
