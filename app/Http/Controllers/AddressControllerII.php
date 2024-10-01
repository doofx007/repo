<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use App\Models\EmpAddress2;
use App\Models\EmpAddress;
use App\Models\lib_region;
use App\Models\lib_province;
use App\Models\lib_city;
use App\Models\lib_brgy;
use App\Models\Employee;

class AddressControllerII extends Controller
{
    public function getAddress2()
    {
        try {
            // Get the currently authenticated user
            $user = Auth::user();
            if (!$user) {
                return response()->json(['error' => 'User not authenticated'], 401);
            }

            // Fetch employee using empid
            $employee = Employee::where('empid', $user->empid)->first();
            if (!$employee) {
                return response()->json(['error' => 'Employee not found'], 404);
            }

            // Fetch the address using emp_count
            $address2 = EmpAddress2::where('emp_count', $employee->emp_count)->first();
            if (!$address2) {
                return response()->json(['error' => 'Address not found'], 404);
            }

            // Return the region and province
            return response()->json([
                'emp_count' => $address2->emp_count,
                'zipcode2' => $address2->emp_zip2,
                'block2' => $address2->emp_house2,
                'villsub2' => $address2->emp_subd2,
                'Region2' => $address2->emp_region2,
                'Province2' => $address2->emp_prov2,
                'City2' => $address2->emp_city2,
                'Barangay2' => $address2->emp_brgy2,
            ], 200);

        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while fetching the address'], 500);
        }
    }

    public function getRegions2()
    {
        $regions = lib_region::get();
        return response()->json($regions);
    }

    public function getProvinces2(Request $request)
    {
        $provinces = lib_province::where('reg_psgc', $request->reg_psgc)
                                ->orderBy('col_province', 'asc')
                                ->get();
        return response()->json($provinces);
    }
    
    public function getCities2(Request $request)
    {
        $cities = lib_city::where('prv_psgc', $request->prv_psgc)
                          ->orderBy('col_citymuni', 'asc')
                          ->get();
        return response()->json($cities);
    }
    
    public function getBarangays2(Request $request)
    {
        $barangays = lib_brgy::where('citmun_psgc', $request->citmun_psgc)
                             ->orderBy('col_brgy', 'asc')
                             ->get();
        return response()->json($barangays);
    }
}
