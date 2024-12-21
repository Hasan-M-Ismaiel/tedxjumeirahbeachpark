<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SalonFirstRequest extends FormRequest
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
            'full_name'                      => ['required', 'string', 'max:100'],
            'email'                          => ['required', 'email', 'max:500'],
            'phone_number'                   => ['required', 'string', 'max:500'],
            'country'                        => ['required', 'string', 'max:500'],
            'city'                           => ['required', 'string', 'max:500'],
            'birthday'                       => ['required', 'date', 'max:500'],
            'education'                      => ['required', 'string', 'max:500'],
            'work'                           => ['required', 'string', 'max:500'],
            'industry'                       => ['required', 'string', 'max:500'],
            'interests'                      => ['required', 'string', 'max:500'],
            'why'                            => ['required', 'string', 'max:1020'],
        ];
    }

    public function messages(): array
    {
        return [
            'full_name.required' => 'your name please !',
            'email.required' => 'enter your valid email please !',
            'phone_number.required' => 'phone number required !',
            'country.required' => 'your country field is required !',
            'city.required' => 'your city field is required !',
            'birthday.required' => 'your birthday field is required !',
            'education.required' => 'your education field is required !',
            'work.required' => 'your work field is required ! ',
            'industry.required' => 'your industry field is required ! ',
            'interests.required' => 'your interests field is required ! ',
            'why.required' => 'tell us why would you attend ! ',
        ];
    }
}
