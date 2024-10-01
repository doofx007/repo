<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Make sure to authorize the request
    }

    public function rules()
    {
        return [
            'emp_fname' => 'required|string|max:35',
            'emp_mname' => 'nullable|string|max:35',
            'emp_lname' => 'required|string|max:35',
            'emp_ext' => 'nullable|string|max:10',
            'emp_dob' => 'required|date',
            'emps_ex' => 'required|string|max:10',
            'emp_blood' => 'nullable|string|max:10',
            'emp_height' => 'nullable|numeric',
            'emp_weight' => 'nullable|integer',
            'emp_cnum' => 'nullable|integer',
            'emp_mail' => 'required|string|mail|max:35',
            'emp_idlicense' => 'nullable|string|max:35',
            'emp_idplace' => 'nullable|string|max:35',
            'emp_iduse' => 'nullable|string|max:35',
            'emp_iddate' => 'nullable|date',
            'emp_telnum' => 'nullable|integer',
            'emp_religion' => 'nullable|string|max:35',
            'empage' => 'nullable|integer',
            'User_type' => 'nullable|integer',
            'other_40b' => 'nullable|string|max:5',
            'esignature' => 'nullable|string|max:35',
            'emp_disability' => 'nullable|string|max:5',
            'emp_ip' => 'nullable|string|max:5',
            'emp_pwd' => 'nullable|string|max:35',
            'emp_ip_group' => 'nullable|string|max:35',
            'emp_citizen' => 'nullable|string|max:30',
            'emp_country' => 'nullable|string|max:60',
            'emp_house' => 'nullable|string|max:20',
            'emp_street' => 'nullable|string|max:20',
            'emp_subd' => 'nullable|string|max:30',
            'emp_brgy' => 'nullable|string|max:20',
            'emp_city' => 'nullable|string|max:20',
            'emp_prov' => 'nullable|string|max:20',
            'emp_region' => 'nullable|string|max:20',
            'emp_datereg' => 'nullable|date',
            'emp_pob' => 'nullable|string|max:20',
            'emp_zip' => 'nullable|string|max:6'
        ];
    }
}
