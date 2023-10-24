<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EventRequest extends FormRequest
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
            "event_name" => ['required', 'unique:App\Models\Event,event_name', 'max:255'],
            "event_date" => ['required', 'date'],
            "event_max_capacity" => ['required', 'integer' ,'min:2', 'max:100'], // Multiple rules in Array format
            "event_speaker_name" => ['required', 'max:255'],
            "event_location_name" => 'nullable|max:255', //Multiple rules in String format
            "event_meetup_url" => 'nullable|url',
            "event_is_virtual" => ['required', 'boolean'],
            "event_price" => ['required', 'numeric', 'min:0', 'max:1000']
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return[
            'event_name' => 'The event name is required and must be unique',
            'event_date' => 'The event date is required and must be a valid date',
            'event_max_capacity' => 'The event max capacity is required and must be between 2 and 100',
            'event_speaker_name' => 'The event speaker name is required',
            'event_location_name' => 'The event location name must be a string',
            'event_meetup_url' => 'The event meetup url must be a valid url',
            'event_is_virtual' => 'The event is virtual must be a boolean',
            'event_price' => 'The event price is required and must be between 0 and 1000'
        ];


    }
}
