<?php

namespace App\Http\Requests\Properties;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePropertyRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'content' => 'required|string',
            'Images' => 'nullable|file|array',
            'city_id' => 'nullable|integer',

            'location' => 'required|string',
            'longitude' => 'nullable|numeric',
            'latitude' => 'nullable|numeric',

            'number_of_bedrooms' => 'nullable|integer',
            'number_of_bathrooms' => 'nullable|integer',
            'number_of_beds' => 'nullable|integer',
            'number_of_floors' => 'nullable|integer',
            'square' => 'nullable|integer',
            'price' => 'nullable|integer',
            'currency_id' => 'nullable|integer',

            'period' => 'nullable|in:day,month,year',
            'label' => 'nullable|string',
            'facilities.*.id' => 'nullable|integer',
            'facilities.*.distance' => 'nullable|numeric',

            'property_type_id' => 'required|integer',
            'video_url' => 'nullable|string',
            'seo_title' => 'nullable|string|max:255',
            'seo_description' => 'nullable|string',
            'seo_link' => 'nullable|string',

            'features' => 'nullable|array', // Add this line for features
            'features.*' => 'integer', // Add this line for each feature value
        ];
    }
}
