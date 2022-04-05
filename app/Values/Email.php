<?php

namespace App\Values;

use InvalidArgumentException;

class Email
{
    protected string $value;

    public function __construct(string $value)
    {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException('Значение должно быть электронной почтой');
        }

        $this->value = $value;
    }

    public function value(): string
    {
        return $this->value;
    }
}
