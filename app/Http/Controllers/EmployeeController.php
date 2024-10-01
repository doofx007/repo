<?php

namespace App\Http\Controllers;

use App\Models\EmpAcc;
use App\Models\lib_sex;
use App\Models\lib_civil_stat;
use App\Models\lib_blood_type;
use App\Models\lib_suffix;
use App\Models\Employee;
use App\Models\EmpAddress;
use App\Models\EmpAddress2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class EmployeeController extends Controller
{
    public function getEmployee()
    {
        try {
            $user = Auth::user(); // Get the currently authenticated user
            if (!$user) {
                return response()->json(['error' => 'User not authenticated'], 401);
            }

            $employee = Employee::where('empid', $user->empid)->first(); // Fetch employee using empid
            if (!$employee) {
                return response()->json(['error' => 'Employee not found'], 404);
            }

            // Fetch the suffix from lib_suffixes table para dili number mugawas
            $suffix = lib_suffix::where('lib1_count', $employee->emp_ext)->first();
            if ($suffix && ($suffix->lib1_suffix === '0' || strtolower($suffix->lib1_suffix) === 'none')) {
                $emp_ext = null;
            } else {
                $emp_ext = $suffix ? $suffix->lib1_suffix : $employee->emp_ext;
            }

            // Only show the first character of emp_mname
            $emp_mname_initial = $employee->emp_mname ? substr($employee->emp_mname, 0, 1) . '.' : '';

            $fullName = $employee->emp_lname . ', ' . $employee->emp_fname . ' ' . $emp_mname_initial . ' ' . $emp_ext;
            $empPosition = $employee->emp_position;
            return response()->json(['fullName' => $fullName, 'empPosition' => $empPosition]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function getTotalEmployees()
    {
        try {
            $totalEmployees = Employee::count();
            return response()->json(['totalEmployees' => $totalEmployees]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function getGenderDistribution()
    {
        try {
            $maleCount = Employee::where('emp_sex', 1)->count();
            $femaleCount = Employee::where('emp_sex', 2)->count();
            return response()->json(['male' => $maleCount, 'female' => $femaleCount]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function getCivilStatusDistribution()
{
    try {
        // Step 1: Fetch civil status counts from the employees table
        $civilStatusCounts = Employee::select('emp_civ_stat', DB::raw('count(*) as count'))
            ->groupBy('emp_civ_stat')
            ->pluck('count', 'emp_civ_stat');

        // Step 2: Fetch civil status names from the `lib_civil_stat` table
        // We use `whereIn` to match only the status keys that are in the employee counts
        $civilStatusNames = lib_civil_stat::whereIn('lib3_count', $civilStatusCounts->keys())
            ->pluck('lib3_civil_stat', 'lib3_count');

        // Step 3: Combine the counts and names into one associative array
        $statusDistribution = [];
        foreach ($civilStatusCounts as $statusId => $count) {
            if (isset($civilStatusNames[$statusId])) {
                $statusDistribution[$civilStatusNames[$statusId]] = $count;
            } else {
                // Handle cases where there's no matching name for a given status ID
                $statusDistribution["Unknown Status ($statusId)"] = $count;
            }
        }

        return response()->json($statusDistribution);
    } catch (\Exception $e) {
        // Log the error for further inspection and return an error response
        Log::error('Error fetching civil status distribution: '.$e->getMessage());
        return response()->json(['error' => 'An error occurred while fetching civil status distribution'], 500);
    }
}



    public function getPersonalInfo()
    {
        try {
            $user = Auth::user(); // Get the currently authenticated user
            if (!$user) {
                return response()->json(['error' => 'User not authenticated'], 401);
            }

            $employee = Employee::where('empid', $user->empid)->first(); // Fetch employee using empid
            $emp_acc = EmpAcc::where('empid', $user->empid)->first();
            if (!$employee) {
                return response()->json(['error' => 'Employee not found'], 404);
            }

            $empUser = $emp_acc->empuser;
            $empID = $emp_acc->empid;
            $firstName = $employee->emp_fname;
            $middleName = $employee->emp_mname;
            $lastName = $employee->emp_lname;
            $suffix = $employee->emp_ext;
            $citizenship = $employee->emp_citizen;
            $birthday = $employee->emp_dob;
            $placeOfBirth = $employee->emp_pob;
            $sex = $employee->emp_sex;
            $civilStatus = $employee->emp_civ_stat;
            $height = $employee->emp_height;
            $weight = $employee->emp_weight;
            $bloodType = $employee->emp_blood;

            return response()->json([
                'empUser' => $empUser,
                'empID' => $empID,
                'firstName' => $firstName,
                'middleName' => $middleName,
                'lastName' => $lastName,
                'suffix' => $suffix,
                'citizenship' => $citizenship,
                'birthday' => $birthday,
                'placeOfBirth' => $placeOfBirth,
                'sex' => $sex,
                'civilStatus' => $civilStatus,
                'height' => $height,
                'weight' => $weight,
                'bloodType' => $bloodType
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }


    public function getSecurityandContact()
    {
        try {
            $user = Auth::user(); // Get the currently authenticated user
            if (!$user) {
                return response()->json(['error' => 'User not authenticated'], 401);
            }

            $employee = Employee::where('empid', $user->empid)->first(); // Fetch employee using empid
            $emp_acc= EmpAcc::where('empid', $user->empid)->first();
            if (!$employee) {
                return response()->json(['error' => 'Employee not found'], 404);
            }

            $mobilenum = $employee->emp_cnum;
            $telnum = $employee->emp_telnum;
            $emailadd = $emp_acc->empmail;
            return response()->json(['mobilenum' => $mobilenum, 'telnum' => $telnum, 'emailadd' => $emailadd
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function updateProfile(Request $request)
    {
        try {
            $user = Auth::user(); // Get the currently authenticated user
            if (!$user) {
                return response()->json(['error' => 'User not authenticated'], 401);
            }

            $employee = Employee::where('empid', $user->empid)->first(); // Fetch employee using empid
            $emp_acc = EmpAcc::where('empid', $user->empid)->first();
            if (!$employee || !$emp_acc) {
                return response()->json(['error' => 'Employee not found'], 404);
            }

            $emp_address = EmpAddress::where('emp_count', $employee->emp_count)->first(); // Fetch employee address using emp_count
            if (!$emp_address) {
                return response()->json(['error' => 'Employee address not found'], 404);
            }

            $emp_address2 = EmpAddress2::where('emp_count', $employee->emp_count)->first(); // Fetch employee address2 using emp_count
            if (!$emp_address2) {
                return response()->json(['error' => 'Employee address 2 not found'], 404);
            }

            // Update the employee details
            $employee->emp_fname = $request->input('firstName');
            $employee->emp_mname = $request->input('middleName');
            $employee->emp_lname = $request->input('lastName');
            $employee->emp_ext = $request->input('suffix');
            $employee->emp_citizen = $request->input('citizenship');
            $employee->emp_dob = $request->input('birthday');
            $employee->emp_pob = $request->input('placeOfBirth');
            $employee->emp_sex = $request->input('sex');
            $employee->emp_civ_stat = $request->input('civilStatus');
            $employee->emp_height = $request->input('height');
            $employee->emp_weight = $request->input('weight');
            $employee->emp_blood = $request->input('bloodType');
            $employee->emp_cnum = $request->input('mobilenum');
            $employee->emp_telnum = $request->input('telnum');


            //Update the address
            $emp_address->emp_region = $request->input('Region');
            $emp_address->emp_prov = $request->input('Province');
            $emp_address->emp_city = $request->input('City');
            $emp_address->emp_brgy = $request->input('Barangay');
            $emp_address->emp_house = $request->input('block');
            $emp_address->emp_subd = $request->input('villsub');
            $emp_address->emp_zip = $request->input('zipcode');

            //Update the address2
            $emp_address2->emp_region2 = $request->input('Region2');
            $emp_address2->emp_prov2 = $request->input('Province2');
            $emp_address2->emp_city2 = $request->input('City2');
            $emp_address2->emp_brgy2 = $request->input('Barangay2');
            $emp_address2->emp_house2 = $request->input('block2');
            $emp_address2->emp_subd2 = $request->input('villsub2');
            $emp_address2->emp_zip2 = $request->input('zipcode2');

            // Update the emp_acc details
            $emp_acc->empmail = $request->input('emailadd');

            // Save the updated information
            $employee->save();
            $emp_acc->save();
            $emp_address->save();
            $emp_address2->save();

            return response()->json(['success' => 'Profile updated successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }


    public function getSexOptions()
    {
        try {
            $sexOptions = lib_sex::all(['lib4_count', 'lib4_sex']);
            return response()->json($sexOptions);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function getCivilStatusOptions()
    {
        try {
            $civilStatusOptions = lib_sex::all(['lib3_count', 'lib3_civil_stat']);
            return response()->json($civilStatusOptions);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function getBloodTypeOptions()
    {
        try {
            $bloodTypeOptions = lib_blood_type::all(['lib2_count', 'lib2_blood_type']);
            return response()->json($bloodTypeOptions);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function ExtOptions()
    {
        try {
            $extOptions = lib_suffix::all(['lib1_count', 'lib1_suffix']);
            return response()->json($extOptions);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function uploadProfilePicture(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        try {
            $user = Auth::user();

            if (!$user) {
                return response()->json(['error' => 'User not authenticated'], 401);
            }

            $empid = $user->empid; // Get the employee ID from the authenticated user

            // Generate a custom filename using the empid
            $fileName = $empid . '_image.' . $request->file('file')->getClientOriginalExtension();

            // Store the file in the 'public/uploads/profile-pictures' directory, you can change this when the system will be deployed
            $path = $request->file('file')->storeAs('uploads/profile-pictures', $fileName, 'public');

            $employee = Employee::where('empid', $empid)->first();
            $employee->emp_pic = $fileName;
            $employee->save();

            // Return the file URL to the frontend
            return response()->json(['url' => '/storage/' . $path]);

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    public function getProfilePicture()
    {
        $user = Auth::user();
        if (!$user) {
            return response()->json(['error' => 'User not authenticated'], 401);
        }

        // Fetch the employee record
        $employee = Employee::where('empid', $user->empid)->first();
        if ($employee && $employee->emp_pic) {
            // Path to the image
            $filePath = 'public/uploads/profile-pictures/' . $employee->emp_pic;

            // Check if the file exists
            if (Storage::exists($filePath)) {
                // Generate the URL for the stored image
                $profilePictureUrl = Storage::url($filePath);
                return response()->json(['url' => $profilePictureUrl]);
            } else {
                // File does not exist, return null
                return response()->json(['url' => null, 'error' => 'Profile picture not found']);
            }
        } else {
            return response()->json(['url' => null, 'error' => 'No profile picture set']);
        }
    }




}
