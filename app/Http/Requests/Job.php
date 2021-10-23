<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Job extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'job_number' => 'required|string|unique:job',   
            'customer_id' => 'nullable|integer',
            'work_details' => 'nullable|string',
            'po_number' => 'nullable|string',
            'notes' => 'nullable|string',
            'items' => 'array|required',
            'items.*.tbl_partnumber_id' => 'required|integer',
            'items.*.part_number' => 'required|stringunique:tbl_partnumber',
            'items.*.serial_number' => 'nullable|string',
            'items.*.tsn' => 'nullable|string',
            'items.*.tso' => 'nullable|string',

        ];
    }

    public function messages()
    {
        return [
            'job_number' => 'Please fill the job number.',
            'items.*.part_number' => 'please fill the part number.',
        ];
    }

}
