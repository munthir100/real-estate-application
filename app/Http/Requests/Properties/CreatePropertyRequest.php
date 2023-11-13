<?php

namespace App\Http\Requests\Properties;

use Illuminate\Foundation\Http\FormRequest;

class CreatePropertyRequest extends FormRequest
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
            'description' => 'required|string',
            'Images' => ['required', 'array', 'min:1'],
            'city_id' => 'nullable|integer',
            'category_id' => 'nullable|int',

            'location' => 'required|string',
            'longitude' => 'required|numeric',
            'latitude' => 'required|numeric',

            'number_of_bedrooms' => 'nullable|integer',
            'number_of_bathrooms' => 'nullable|integer',
            'number_of_beds' => 'nullable|integer',
            'number_of_floors' => 'nullable|integer',
            'square' => 'nullable|integer',
            'price' => 'nullable|integer',
            'currency_id' => 'nullable|integer',

            'period' => 'nullable|in:day,month,year',
            'label' => 'nullable|string',
            'facilities.*.id' => 'required|integer',
            'facilities.*.distance' => 'required|numeric',

            'property_type_id' => 'required|integer',
            'video_url' => 'nullable|string',
            'seo_title' => 'nullable|string|max:255',
            'seo_description' => 'nullable|string',
            'seo_link' => 'nullable|string',
            'features' => 'nullable|array', // Add this line for features
            'features.*' => 'integer', // Add this line for each feature value

            'license_number' => 'required|string',
            'date_of_license' => 'required|date',
            'license_expiration_date' => 'required|date',
            'postal_code' => 'required|string',
            'building_number' => 'required|string',
            'additional_number' => 'nullable|string',
            'has_restriction' => 'nullable|boolean',
            'has_mortgage' => 'nullable|boolean',
            'obligations_on_property' => 'nullable|string',
        ];
    }
    public function messages()
    {
        return [
            'facilities.*.id.required' => 'Enter at least one facility.',
            'facilities.*.id.integer' => 'invaild facility.',
            'facilities.*.distance.required' => 'The facility distance is required.',
            'facilities.*.distance.numeric' => 'Invaild facility distance.',
        ];
    }
}
