<?php

namespace App\Http\Requests\Api\Review;

use App\Dto\ReviewDto;
use App\Values\Email;
use Illuminate\Foundation\Http\FormRequest;

/**
 * @property string $name
 * @property string $email
 * @property string $text
 */
class CreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            'email' => ['required', 'string'],
            'text' => ['required', 'string']
        ];
    }

    public function getDto(): ReviewDto
    {
        return new ReviewDto(
            $this->name,
            new Email($this->email),
            $this->text
        );
    }
}
