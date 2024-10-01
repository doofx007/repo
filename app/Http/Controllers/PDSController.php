<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Dompdf\Options;
use App\Models\{
    EmpAcc, Employee, EmpAddress, lib_suffix, lib_sex, lib_civil_stat, lib_blood_type, lib_region, 
    lib_province, lib_city, lib_brgy, education, emp_org, emp_reference, emp_work, emp_child, emp_skills, 
    emp_father, emp_mother, emp_spouse, emp_eligibility, emp_voluntary, emp_learning, emp_recog, emp_otherinfo
};
use Illuminate\Support\Facades\Auth;

class PDSController extends Controller
{
    public function downloadPDS($page)
    {
        // Fetch employee details
        $employee = Employee::where('empid', Auth::user()->empid)->first();
        $emp_acc = EmpAcc::where('empid', Auth::user()->empid)->first();
        $emp_address = EmpAddress::where('emp_count', $employee->emp_count)->first();
        $emp_address2 = EmpAddress::where('emp_count', $employee->emp_count)->first();
        $emp_spouse = emp_spouse::where('emp_count', $employee->emp_count)->first();
        $emp_father = emp_father::where('emp_count', $employee->emp_count)->first();
        $emp_mother = emp_mother::where('emp_count', $employee->emp_count)->first();
        $emp_child = emp_child::where('emp_count', $employee->emp_count)->first();
        $education = education::where('empid', Auth::user()->empid)->first();
        $emp_eligibility = emp_eligibility::where('empid', Auth::user()->empid)->first();
        $emp_work = emp_work::where('empid', Auth::user()->empid)->first();
        $emp_voluntary = emp_voluntary::where('empid', Auth::user()->empid)->first();
        $emp_learning = emp_learning::where('empid', Auth::user()->empid)->first();
        $emp_skills = emp_skills::where('empid', Auth::user()->empid)->first();
        $emp_org = emp_org::where('empid', Auth::user()->empid)->first();
        $emp_recog = emp_recog::where('empid', Auth::user()->empid)->first();
        $emp_otherinfo = emp_otherinfo::where('empid', Auth::user()->empid)->first();
        $emp_reference = emp_reference::where('empid', Auth::user()->empid)->first();

        // Profile picture
        $profilePicturePath = public_path('storage/uploads/profile-pictures/' . $employee->empid . '_image.png');
        $profilePictureBase64 = file_exists($profilePicturePath) 
            ? 'data:image/png;base64,' . base64_encode(file_get_contents($profilePicturePath))
            : null;

        // Employee full name
        $suffix = lib_suffix::where('lib1_count', $employee->emp_ext)->first();
        $emp_ext = ($suffix && ($suffix->lib1_suffix === '0' || strtolower($suffix->lib1_suffix) === 'none'))
            ? null
            : ($suffix ? $suffix->lib1_suffix : $employee->emp_ext);
        $emp_mname_initial = $employee->emp_mname ? substr($employee->emp_mname, 0, 1) . '.' : '';
        $fullName = $employee->emp_lname . ', ' . $employee->emp_fname . ' ' . $emp_mname_initial . ' ' . $emp_ext;

        // Employee gender
        $sex = lib_sex::where('lib4_count', $employee->emp_sex)->first();
        $emp_sexes = ($sex && ($sex->lib4_sex === '0' || strtolower($sex->lib4_sex) === 'none'))
            ? null
            : ($sex ? $sex->lib4_sex : $employee->emp_sex);

        // Civil status
        $civstat = lib_civil_stat::where('lib3_count', $employee->emp_civ_stat)->first();
        $emp_civstats = ($civstat && ($civstat->lib3_civil_stat === '0' || strtolower($civstat->lib3_civil_stat) === 'none'))
            ? null
            : ($civstat ? $civstat->lib3_civil_stat : $employee->emp_civ_stat);

        // Blood type
        $blood = lib_blood_type::where('lib2_count', $employee->emp_blood)->first();
        $emp_bloods = ($blood && ($blood->lib2_blood_type === '0' || strtolower($blood->lib2_blood_type) === 'none'))
            ? null
            : ($blood ? $blood->lib2_blood_type : null);

        // Address components
        $brgy = lib_brgy::where('brgy_psgc', $emp_address->emp_brgy)->first();
        $emp_brgies = ($brgy && ($brgy->col_brgy === '0' || strtolower($brgy->col_brgy) === 'none'))
            ? null
            : ($brgy ? $brgy->col_brgy : $employee->emp_address);

        $city = lib_city::where('citmun_psgc', $emp_address->emp_city)->first();
        $emp_cities = ($city && ($city->col_citymuni === '0' || strtolower($city->col_citymuni) === 'none'))
            ? null
            : ($city ? $city->col_citymuni : $employee->emp_address);

        $prov = lib_province::where('prv_psgc', $emp_address->emp_prov)->first();
        $emp_provinces = ($prov && ($prov->col_province === '0' || strtolower($prov->col_province) === 'none'))
            ? null
            : ($prov ? $prov->col_province : $employee->emp_address);

        $reg = lib_region::where('reg_psgc', $emp_address->emp_region)->first();
        $emp_region = ($reg && ($reg->col_region === '0' || strtolower($reg->col_region) === 'none'))
            ? null
            : ($reg ? $reg->col_region : $employee->emp_address);

        // Full address
        $address = $emp_region . ', ' . $emp_provinces . ', ' . $emp_cities . ', ' . $emp_brgies . ' ' . 
                   $emp_address->emp_house . ' ' . $emp_address->emp_subd . ', ' . $emp_address->emp_zip;

        // Child details
        $child_mname_initial = $emp_child->child_mname ? substr($emp_child->child_mname, 0, 1) . '.' : '';
        $fullchildName = $emp_child->child_fname . ' ' . $child_mname_initial . ' ' . 
                         $emp_child->child_lname . ' ' . $emp_child->child_xname;

       // Generate PDF
        $pdf = new Dompdf();
        $options = new Options();
        $options->set('defaultFont', 'Helvetica');
        $pdf->setOptions($options);

        // Initialize HTML content
        $html = '';

        switch ($page) {
            case '1':
            case '2':
            case '3':
            case '4':
                // For individual pages
                $html = view("pdf.pds_page{$page}", compact(
                    'employee', 'address', 'emp_address2', 'emp_acc', 'fullName', 
                    'profilePictureBase64', 'emp_sexes', 'emp_civstats', 'emp_bloods', 
                    'emp_provinces', 'emp_cities', 'emp_brgies', 'emp_address', 
                    'emp_spouse', 'emp_father', 'emp_mother', 'education', 
                    'emp_eligibility', 'emp_work', 'emp_voluntary', 'emp_learning', 
                    'emp_otherinfo', 'emp_child', 'child_mname_initial', 'emp_skills', 
                    'emp_org', 'emp_recog', 'emp_reference'
                ))->render();
                break;

            case '5':
                // Combine all pages (1 to 4)
                for ($i = 1; $i <= 4; $i++) {
                    $html .= view("pdf.pds_page{$i}", compact(
                        'employee', 'address', 'emp_address2', 'emp_acc', 'fullName', 
                        'profilePictureBase64', 'emp_sexes', 'emp_civstats', 'emp_bloods', 
                        'emp_provinces', 'emp_cities', 'emp_brgies', 'emp_address', 
                        'emp_spouse', 'emp_father', 'emp_mother', 'education', 
                        'emp_eligibility', 'emp_work', 'emp_voluntary', 'emp_learning', 
                        'emp_otherinfo', 'emp_child', 'child_mname_initial', 'emp_skills', 
                        'emp_org', 'emp_recog', 'emp_reference'
                    ))->render();
                }
                break;

            default:
                abort(404, 'Page not found');
        }
    
    // Load the generated HTML into Dompdf
    $pdf->loadHtml($html);
    $pdf->setPaper('legal', 'portrait');
    $pdf->render();
    
    // Return the generated PDF
    return $pdf->stream($page === '5' ? 'PDS_All_Pages.pdf' : "PDS_Page_{$page}.pdf");
    

    }
}
