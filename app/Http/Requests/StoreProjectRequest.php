<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "name" => ["required", "string", "max:50"],
            "url" => ["required", "url", "max:255"],
            "thumbnail_url" => ["required", "url", "max:255"],
            "content" => ["required", "string"],
            "image_1_url" => ["required", "url", "max:255"],
            "image_1_description" => ["required", "string"],
            "image_2_url" => ["required", "url", "max:255"],
            "image_2_description" => ["required", "string"],
            "visible" => ["required", "boolean"],
        ];
    }
}
