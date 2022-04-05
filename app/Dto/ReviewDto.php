<?php

namespace App\Dto;

use App\Values\Email;

class ReviewDto
{
    protected string $name;
    protected Email $email;
    protected string $text;

    public function __construct(string $name, Email $email, string $text)
    {
        $this->name = $name;
        $this->email = $email;
        $this->text = $text;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): Email
    {
        return $this->email;
    }

    public function getText(): string
    {
        return $this->text;
    }
}
