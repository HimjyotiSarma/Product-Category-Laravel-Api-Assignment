<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProductRequest extends FormRequest
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
            'name' => ['sometimes', 'string', 'max:255', Rule::unique('products', 'name')->where(function ($query) {
                return $query->where('category_id', $this->category_id);
            })->ignore($this->product)],
            'price' => ['sometimes', 'numeric', 'min:0'],
            'category_id' => ['sometimes', 'exists:categories,id'],
            'stock' => ['sometimes', 'integer', 'min:0'],
            'status' => ['sometimes', 'in:active,inactive'],
        ];
    }
    public function messages(): array
    {
        return [
            'name.unique' => 'The product name must be unique within the selected category.',
        ];
    }
}
