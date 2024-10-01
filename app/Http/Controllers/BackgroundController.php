<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\education;
use App\Models\emp_org;
use App\Models\emp_reference;
use App\Models\emp_work;
use App\Models\emp_child;
use App\Models\emp_skills;
use App\Models\emp_father;
use App\Models\emp_mother;
use App\Models\emp_spouse;
use App\Models\employee;
use App\Models\lib_region;
use App\Models\lib_province;
use App\Models\lib_city;
use App\Models\lib_brgy;
use App\Models\EmpFamily;
use App\Models\lib_suffix;
use Illuminate\Support\Facades\Log;

class BackgroundController extends Controller
{

    public function suffix()
    {
        try {
            $suffixes = lib_suffix::all(['lib1_count as value', 'lib1_suffix as label']);
            return response()->json($suffixes);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function getEducationData()
    {
        try {
            $user = Auth::user(); // Get the currently authenticated user
            if (!$user) {
                return response()->json(['error' => 'User not authenticated'], 401);
            }

            // Select only the required columns
            $educationData = Education::where('empid', $user->empid)
                ->select(
                    'educ_count',
                    'educ_level',
                    'educ_school',
                    'educ_degree',
                    'educ_from',
                    'educ_year_grad',
                    'educ_academic_honor',
                    'educ_hl_earned')
                ->get();

            if ($educationData->isEmpty()) {
                return response()->json(['error' => 'Data not found'], 404);
            }

            return response()->json($educationData);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function getOrganizationData()
    {
        try {
            $user = Auth::user(); // Get the currently authenticated user
            if (!$user) {
                return response()->json(['error' => 'User not authenticated'], 401);
            }

            // Select only the required columns
            $organizationData = emp_org::where('empid', $user->empid)
                ->select('org_count', 'org_name')
                ->get();

            if ($organizationData->isEmpty()) {
                return response()->json(['error' => 'Data not found'], 404);
            }

            return response()->json($organizationData);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function getWorkExperienceData()
    {
        try {
            $user = Auth::user(); // Get the currently authenticated user
            if (!$user) {
                return response()->json(['error' => 'User not authenticated'], 401);
            }

            // Select only the required columns
            $workExperienceData = emp_work::where('empid', $user->empid)
                ->select(
                    'work_count',
                    'workfr',
                    'workto',
                    'work_pos',
                    'work_dept',
                    'work_salary',
                    'work_salarygrade',
                    'work_stat',
                    'work_gov')
                ->get();

            if ($workExperienceData->isEmpty()) {
                return response()->json(['error' => 'Data not found'], 404);
            }

            return response()->json($workExperienceData);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function getSkillsData()
    {
        try {
            $user = Auth::user(); // Get the currently authenticated user
            if (!$user) {
                return response()->json(['error' => 'User not authenticated'], 401);
            }

            // Select only the required columns
            $skillsData = emp_skills::where('empid', $user->empid)
                ->select('skill_count','skill')
                ->get();

            if ($skillsData->isEmpty()) {
                return response()->json(['error' => 'Data not found'], 404);
            }

            return response()->json($skillsData);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function getReferencesData()
    {
        try {
            $user = Auth::user(); // Get the currently authenticated user
            if (!$user) {
                return response()->json(['error' => 'User not authenticated'], 401);
            }
    
            // Select the required columns
            $referencesData = emp_reference::where('empid', $user->empid)
                ->select(
                    'ref_count',
                    'ref_fname',
                    'ref_mname',
                    'ref_lname',
                    'ref_xname',
                    'ref_add',
                    'ref_cnum',
                )
                ->get();
    
            if ($referencesData->isEmpty()) {
                return response()->json(['error' => 'Data not found'], 404);
            }
    
            // Format the full name
            $formattedReferences = $referencesData->map(function($reference) {
                $ref_mname_initial = $reference->ref_mname ? substr($reference->ref_mname, 0, 1) . '.' : '';
                // Set ref_xname to 0 if it is null
                if (is_null($reference->ref_xname)) {
                    $reference->ref_xname = 0;
                }
    
                // Fetch the suffix value based on the numerical value in ref_xname
                $suffix = lib_suffix::where('lib1_count', $reference->ref_xname)->first();
                $suffix_value = $suffix ? $suffix->lib1_suffix : '';
    
                // Format the full name without the suffix if it is None
                $reference->full_name = trim($reference->ref_fname . ' ' .
                                            $ref_mname_initial . ' ' .
                                            $reference->ref_lname . ' ' .
                                            ($suffix_value !== 'None' ? $suffix_value : ''));
                return $reference;
            });
    
            return response()->json($formattedReferences);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function addEducationData(Request $request)
    {
        try {
            $user = Auth::user(); // Get the currently authenticated user
            if (!$user) {
                return response()->json(['error' => 'User not authenticated'], 401);
            }

            $education = new Education();
            $education->empid = $user->empid;
            $education->educ_level = $request->input('educ_level');
            $education->educ_school = $request->input('educ_school');
            $education->educ_degree = $request->input('educ_degree');
            $education->educ_from = $request->input('educ_from');
            $education->educ_hl_earned = $request->input('educ_hl_earned');
            $education->educ_year_grad = $request->input('educ_year_grad');
            $education->educ_academic_honor = $request->input('educ_academic_honor');
            $education->save();

            return response()->json($education, 201);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function addOrganizationData(Request $request)
    {
        try {
            $user = Auth::user(); // Get the currently authenticated user
            if (!$user) {
                return response()->json(['error' => 'User not authenticated'], 401);
            }

            $organization = new emp_org();
            $organization->empid = $user->empid;
            $organization->org_name = $request->input('org_name');
            $organization->save();

            return response()->json($organization, 201);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function addWorkExperienceData(Request $request)
    {
        try {
            $user = Auth::user(); // Get the currently authenticated user
            if (!$user) {
                return response()->json(['error' => 'User not authenticated'], 401);
            }

            $workExperience = new emp_work();
            $workExperience->empid = $user->empid;
            $workExperience->workfr = $request->input('workfr');
            $workExperience->workto = $request->input('workto');
            $workExperience->work_pos = $request->input('work_pos');
            $workExperience->work_dept = $request->input('work_dept');
            $workExperience->work_salary = $request->input('work_salary');
            $workExperience->work_salarygrade = $request->input('work_salarygrade');
            $workExperience->work_stat = $request->input('work_stat');
            $workExperience->work_gov = $request->input('work_gov');
            $workExperience->save();

            return response()->json($workExperience, 201);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function addSkillData(Request $request)
    {
        try {
            $user = Auth::user(); // Get the currently authenticated user
            if (!$user) {
                return response()->json(['error' => 'User not authenticated'], 401);
            }

            $skill = new emp_skills();
            $skill->empid = $user->empid;
            $skill->skill = $request->input('skill');
            $skill->save();

            return response()->json($skill, 201);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function addReferenceData(Request $request)
    {
        try {
            $user = Auth::user(); // Get the currently authenticated user
            if (!$user) {
                return response()->json(['error' => 'User not authenticated'], 401);
            }

            $reference = new emp_reference();
            $reference->empid = $user->empid;
            $reference->ref_fname = $request->input('ref_fname');
            $reference->ref_mname = $request->input('ref_mname');
            $reference->ref_lname = $request->input('ref_lname');
            $reference->ref_xname = $request->input('ref_xname');
            $reference->ref_add = $request->input('ref_add');
            $reference->ref_cnum = $request->input('ref_cnum');
            $reference->save();

            return response()->json($reference, 201);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function getFather()
    {
        try {
            $user = Auth::user(); // Get the currently authenticated user
            if (!$user) {
                return response()->json(['error' => 'User not authenticated'], 401);
            }

            $employee = Employee::where('empid', $user->empid)->first();
            if (!$employee) {
                return response()->json(['error' => 'Employee not found'], 404);
            }

            $emp_father = emp_father::where('emp_count', $employee->emp_count)->first();
            if (!$emp_father) {
                return response()->json(['error' => 'Father not found'], 404);
            }

            $fatherSurname = $emp_father->father_lname;
            $fatherFirstName = $emp_father->father_fname;
            $fatherMiddleName = $emp_father->father_mname;
            $fatherExtName = $emp_father->father_xname;
            return response()->json([
                'fatherSurname' => $fatherSurname,
                'fatherFirstName' => $fatherFirstName,
                'fatherMiddleName' => $fatherMiddleName,
                'fatherExtName' => $fatherExtName
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function getMother()
    {
        try {
            $user = Auth::user(); // Get the currently authenticated user
            if (!$user) {
                return response()->json(['error' => 'User not authenticated'], 401);
            }

            $employee = Employee::where('empid', $user->empid)->first();
            if (!$employee) {
                return response()->json(['error' => 'Employee not found'], 404);
            }

            $emp_mother = emp_mother::where('emp_count', $employee->emp_count)->first();
            if (!$emp_mother) {
                return response()->json(['error' => 'Mother not found'], 404);
            }

            $motherSurname = $emp_mother->mother_lname;
            $motherFirstName = $emp_mother->mother_fname;
            $motherMiddleName = $emp_mother->mother_mname;
            $motherMaidenName = $emp_mother->maidenname;
            return response()->json([
                'motherSurname' => $motherSurname,
                'motherFirstName' => $motherFirstName,
                'motherMiddleName' => $motherMiddleName,
                'motherMaidenName' => $motherMaidenName
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function getSpouse()
    {
        try {
            $user = Auth::user(); // Get the currently authenticated user
            if (!$user) {
                return response()->json(['error' => 'User not authenticated'], 401);
            }

            $employee = Employee::where('empid', $user->empid)->first();
            if (!$employee) {
                return response()->json(['error' => 'Employee not found'], 404);
            }

            $emp_spouse = emp_spouse::where('emp_count', $employee->emp_count)->first();
            if (!$emp_spouse) {
                return response()->json(['error' => 'Mother not found'], 404);
            }

            $spouseSurname = $emp_spouse->spouse_lname;
            $spouseFirstName = $emp_spouse->spouse_fname;
            $spouseMiddleName = $emp_spouse->spouse_mname;
            $spouseExtName = $emp_spouse->spouse_xname;
            $spouseOccupation = $emp_spouse->spouse_occup;
            $spouseBusinessName = $emp_spouse->spouse_office;
            $spouseBusinessAddress = $emp_spouse->spouse_busadd;
            $spouseTelNo = $emp_spouse->spouse_tel;
            return response()->json([
                'spouseSurname' => $spouseSurname,
                'spouseFirstName' => $spouseFirstName,
                'spouseMiddleName' => $spouseMiddleName,
                'spouseExtName' => $spouseExtName,
                'spouseOccupation' => $spouseOccupation,
                'spouseBusinessName' => $spouseBusinessName,
                'spouseBusinessAddress' => $spouseBusinessAddress,
                'spouseTelNo' => $spouseTelNo
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function updateFamilyData(Request $request)
{
    try {
        $user = Auth::user(); // Get the currently authenticated user
        if (!$user) {
            return response()->json(['error' => 'User not authenticated'], 401);
        }

        $employee = Employee::where('empid', $user->empid)->first();
            if (!$employee) {
                return response()->json(['error' => 'Employee not found'], 404);
            }

        // Update Father details
        $father = emp_father::where('emp_count', $employee->emp_count)->first();
        if ($father) {
            $father->father_lname = $request->input('fatherSurname');
            $father->father_fname = $request->input('fatherFirstName');
            $father->father_mname = $request->input('fatherMiddleName');
            $father->father_xname = $request->input('fatherExtName');
            $father->save();
        }

        // Update Mother details
        $mother = emp_mother::where('emp_count', $employee->emp_count)->first();
        if ($mother) {
            $mother->maidenname = $request->input('motherMaidenName');
            $mother->mother_lname = $request->input('motherSurname');
            $mother->mother_fname = $request->input('motherFirstName');
            $mother->mother_mname = $request->input('motherMiddleName');
            $mother->save();
        }

        // Update Spouse details
        $spouse = emp_spouse::where('emp_count', $employee->emp_count)->first();
        if ($spouse) {
            $spouse->spouse_lname = $request->input('spouseSurname');
            $spouse->spouse_fname = $request->input('spouseFirstName');
            $spouse->spouse_mname = $request->input('spouseMiddleName');
            $spouse->spouse_xname = $request->input('spouseExtName');
            $spouse->spouse_occup = $request->input('spouseOccupation');
            $spouse->spouse_office = $request->input('spouseBusinessName');
            $spouse->spouse_busadd = $request->input('spouseBusinessAddress');
            $spouse->spouse_tel = $request->input('spouseTelNo');
            $spouse->save();
        }

        return response()->json(['success' => 'Family data updated successfully']);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
}

    public function addChildData(Request $request)
{
    try {
        $user = Auth::user();
        if (!$user) {
            return response()->json(['error' => 'User not authenticated'], 401);
        }

        // Fetch the employee's record to get emp_count
        $employee = Employee::where('empid', $user->empid)->first();
        if (!$employee) {
            return response()->json(['error' => 'Employee not found'], 404);
        }

        $child = new emp_child();
        $child->emp_count = $employee->emp_count;
        $child->child_fname = $request->input('child_fname');
        $child->child_mname = $request->input('child_mname');
        $child->child_lname = $request->input('child_lname');
        $child->child_xname = $request->input('child_xname');
        $child->child_dob = $request->input('child_dob');
        $child->save();

        return response()->json($child, 201);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
}


public function getChildData()
{
    try {
        $user = Auth::user();
        if (!$user) {
            return response()->json(['error' => 'User not authenticated'], 401);
        }

        // Fetch the employee's record to get emp_count
        $employee = Employee::where('empid', $user->empid)->first();
        if (!$employee) {
            return response()->json(['error' => 'Employee not found'], 404);
        }

        // Fetch child data and transform it to include full name and age
        $childData = emp_child::where('emp_count', $employee->emp_count)
            ->select('child_count', 'child_fname', 'child_mname', 'child_lname', 'child_xname', 'child_dob')
            ->get();

        if ($childData->isEmpty()) {
            return response()->json(['error' => 'No child data found'], 404);
        }

        $formattedChild = $childData->map(function($child) {
            $child_mname_initial = $child->child_mname ? substr($child->child_mname, 0, 1) . '.' : '';
            
            // Fetch the suffix value based on the numerical value in child_xname
            $suffix = lib_suffix::where('lib1_count', $child->child_xname)->first();
            $suffix_value = $suffix ? $suffix->lib1_suffix : '';
        
            $fullName = trim($child->child_fname . ' ' .
                             $child_mname_initial . ' ' .
                             $child->child_lname . ' ' .
                             ($suffix_value !== 'None' ? $suffix_value : ''));
            $age = \Carbon\Carbon::parse($child->child_dob)->age;
        

            return [
                'child_count' => $child->child_count,
                'child_fname' => $child->child_fname,
                'child_mname' => $child->child_mname,
                'child_lname' => $child->child_lname,
                'child_xname' => $child->child_xname,
                'full_name' => $fullName,
                'age' => $age,
                'child_dob' => $child->child_dob,
            ];
        });

        return response()->json($formattedChild);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
}


// Update existing controller functions to include the new update routes

public function updateChildData(Request $request)
{
    try {
        $user = Auth::user();
        if (!$user) {
            return response()->json(['error' => 'User not authenticated'], 401);
        }

        $child = emp_child::where('child_count', $request->input('child_count'))->first();
        if (!$child) {
            return response()->json(['error' => 'Child data not found'], 404);
        }

        $child->child_fname = $request->input('child_fname');
        $child->child_mname = $request->input('child_mname');
        $child->child_lname = $request->input('child_lname');
        $child->child_xname = $request->input('child_xname');
        $child->child_dob = $request->input('child_dob');
        $child->save();

        return response()->json(['success' => 'Child data updated successfully']);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
}

public function updateEducationData(Request $request)
{
    try {
        $user = Auth::user();
        if (!$user) {
            return response()->json(['error' => 'User not authenticated'], 401);
        }

        $education = Education::where('educ_count', $request->input('educ_count'))->first();
        if (!$education) {
            return response()->json(['error' => 'Education data not found'], 404);
        }

        $education->educ_level = $request->input('educ_level');
        $education->educ_school = $request->input('educ_school');
        $education->educ_degree = $request->input('educ_degree');
        $education->educ_from = $request->input('educ_from');
        $education->educ_hl_earned = $request->input('educ_hl_earned');
        $education->educ_year_grad = $request->input('educ_year_grad');
        $education->educ_academic_honor = $request->input('educ_academic_honor');
        $education->save();

        return response()->json(['success' => 'Education data updated successfully']);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
}

public function updateOrganizationData(Request $request)
{
    try {
        $user = Auth::user();
        if (!$user) {
            return response()->json(['error' => 'User not authenticated'], 401);
        }

        // Find the specific organization record using only org_count
        $organization = emp_org::where('org_count', $request->input('org_count'))->first();

        if (!$organization) {
            return response()->json(['error' => 'Organization data not found'], 404);
        }

        // Update the organization name
        $organization->org_name = $request->input('org_name');
        $organization->save();

        return response()->json(['success' => 'Organization data updated successfully']);
    } catch (\Exception $e) {
        Log::error('Error updating organization data', ['error' => $e->getMessage()]);
        return response()->json(['error' => $e->getMessage()], 500);
    }
}


public function updateWorkExperienceData(Request $request)
{
    try {
        $user = Auth::user();
        if (!$user) {
            return response()->json(['error' => 'User not authenticated'], 401);
        }

        $workExperience = emp_work::where('work_count', $request->input('work_count'))->first();
        if (!$workExperience) {
            return response()->json(['error' => 'Work experience data not found'], 404);
        }

        $workExperience->workfr = $request->input('workfr');
        $workExperience->workto = $request->input('workto');
        $workExperience->work_pos = $request->input('work_pos');
        $workExperience->work_dept = $request->input('work_dept');
        $workExperience->work_salary = $request->input('work_salary');
        $workExperience->work_salarygrade = $request->input('work_salarygrade');
        $workExperience->work_stat = $request->input('work_stat');
        $workExperience->work_gov = $request->input('work_gov');
        $workExperience->save();

        return response()->json(['success' => 'Work experience data updated successfully']);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
}

public function updateSkillsData(Request $request)
{
    try {
        $user = Auth::user();
        if (!$user) {
            return response()->json(['error' => 'User not authenticated'], 401);
        }

        $skill = emp_skills::where('skill_count', $request->input('skill_count'))->first();
        if (!$skill) {
            return response()->json(['error' => 'Skill data not found'], 404);
        }

        $skill->skill = $request->input('skill');
        $skill->save();

        return response()->json(['success' => 'Skill data updated successfully']);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
}

public function updateReferencesData(Request $request)
{
    try {
        $user = Auth::user();
        if (!$user) {
            return response()->json(['error' => 'User not authenticated'], 401);
        }

        $reference = emp_reference::where('ref_count', $request->input('ref_count'))->first();
        if (!$reference) {
            return response()->json(['error' => 'Reference data not found'], 404);
        }

        $reference->ref_fname = $request->input('ref_fname');
        $reference->ref_mname = $request->input('ref_mname');
        $reference->ref_lname = $request->input('ref_lname');
        $reference->ref_xname = $request->input('ref_xname');
        $reference->ref_add = $request->input('ref_add');
        $reference->ref_cnum = $request->input('ref_cnum');
        $reference->save();

        return response()->json(['success' => 'Reference data updated successfully']);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
}

public function getProvinces(Request $request)
{
    $provinces = lib_province::where('reg_psgc', $request->reg_psgc)
                            ->orderBy('col_province', 'asc')
                            ->get();
    return response()->json($provinces);
}

public function getCities(Request $request)
{
    $cities = lib_city::where('prv_psgc', $request->prv_psgc)
                      ->orderBy('col_citymuni', 'asc')
                      ->get();
    return response()->json($cities);
}

public function getBarangays(Request $request)
{
    $barangays = lib_brgy::where('citmun_psgc', $request->citmun_psgc)
                         ->orderBy('col_brgy', 'asc')
                         ->get();
    return response()->json($barangays);
}

public function getAllCities()
{
    $cities = lib_city::all();
    return response()->json($cities);
}


}
