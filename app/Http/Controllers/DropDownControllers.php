<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lib_sex;
use App\Models\lib_suffix;
use App\Models\lib_civil_stat;
use App\Models\lib_blood_type;

class DropDownControllers extends Controller
{
    public function getSexOptions()
    {
        try {
            $sexOptions = lib_sex::all(['lib4_count as value', 'lib4_sex as label']);
            return response()->json($sexOptions);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function getCivilStatusOptions()
    {
        try {
            $civilStatusOptions = lib_civil_stat::all(['lib3_count as value', 'lib3_civil_stat as label']);
            return response()->json($civilStatusOptions);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function getBloodTypeOptions()
    {
        try {
            $bloodTypeOptions = lib_blood_type::all(['lib2_count as value', 'lib2_blood_type as label']);
            return response()->json($bloodTypeOptions);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function getExtOptions()
    {
        try {
            $extOptions = lib_suffix::all(['lib1_count as value', 'lib1_suffix as label']);
            return response()->json($extOptions);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}