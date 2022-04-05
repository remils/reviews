<?php

namespace App\Services;

use App\Dto\ReviewDto;
use App\Models\Review;

class ReviewService
{
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

        return $review;
    }
}
