<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Employee;
use App\Models\EmpAddress;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $validated = $request->validate([
            'emp_fname' => 'required|string|max:35',
            'emp_mname' => 'nullable|string|max:35',
            'emp_lname' => 'required|string|max:35',
            'emp_dob' => 'required|date',
            'emps_ex' => 'required|string|max:10',
            'emp_blood' => 'required|string|max:10',
            'emp_height' => 'required|numeric',
            'emp_weight' => 'required|integer',
            'emp_cnum' => 'required|string|max:15',
            'emp_mail' => 'required|string|max:35|email',
            'emp_idlicense' => 'nullable|string|max:35',
            'emp_idplace' => 'nullable|string|max:35',
            'emp_iduse' => 'nullable|string|max:35',
            'emp_iddate' => 'nullable|date',
            'emp_telnum' => 'nullable|string|max:15',
            'emp_religion' => 'nullable|string|max:35',
            'empage' => 'nullable|integer',
            'User_type' => 'nullable|integer',
            'other_40b' => 'nullable|string|max:5',
            'esignature' => 'nullable|string|max:35',
            'emp_disability' => 'nullable|string|max:5',
            'emp_ip' => 'nullable|string|max:5',
            'emp_pwd' => 'nullable|string|max:35',
            'emp_ip_group' => 'nullable|string|max:35',
            'emp_citizen' => 'required|string|max:30',
            'emp_house' => 'nullable|string|max:20',
            'emp_street' => 'nullable|string|max:20',
            'emp_subd' => 'nullable|string|max:30',
            'emp_brgy' => 'nullable|string|max:20',
            'emp_city' => 'nullable|string|max:20',
            'emp_prov' => 'nullable|string|max:20',
            'emp_region' => 'nullable|string|max:20',
            'emp_datereg' => 'nullable|date',
            'emp_pob' => 'required|string|max:20',
            'emp_zip' => 'nullable|string|max:6',
        ]);

        $employee = Employee::where('empid', Auth::user()->empid)->first();
        $emp_address = EmpAddress::where('emp_count', $employee->emp_count)->first();
        if ($employee) {
            $employee->update($validated);
        } else {
            return Redirect::route('dashboard')->withErrors('Employee not found.');
        }

        return Redirect::route('dashboard')->with('success', 'Profile updated successfully.');
    }
}
