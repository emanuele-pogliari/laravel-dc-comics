<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' => 'required|max:50',
            'description' => 'nullable|max:2000',
            'thumb' => 'nullable',
            'price' => 'required',
            'series' => 'required|max:70',
            'sale_date' => 'required|date',
            'type' => 'required|max:30',
            'artist' => 'required|max:500',
            'writers' => 'required|max:500',
        ];
    }

    public function messages(): array
    {
        return [
            'max' => "Il campo :attribute deve avere massimo :max caratteri",
            'required' => "Il campo :attribute deve essere inserito",
            'date' => "Il campo :attribute deve essere in questo formato: YYYY-MM-DD",
        ];
    }
}
