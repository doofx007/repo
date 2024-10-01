<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\OTPController;
use App\Helpers\EmailHelper;
use App\Http\Controllers\BackgroundController;
use App\Http\Controllers\OtherInfoController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmpAccController;
use App\Http\Controllers\DropDownControllers;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\AddressControllerII;
use App\Http\Controllers\PDSController;

Route::get('/', function () {
    return Inertia::render('Login', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('login');

Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('login');

Route::get('otp', function () {
    return Inertia::render('Auth/OTP', [
        'context' => request()->get('context', 'login'),  // Default context is 'login'
        'otpSent' => request()->get('otpSent', false)
    ]);
})->name('otp.form');

Route::post('send-otp', [AuthenticatedSessionController::class, 'sendOtp'])->name('otp.send');
Route::post('otp', [OTPController::class, 'verifyOTP'])->name('otp.verify');

// Route for resending OTP
Route::post('/otp/resend', [OTPController::class, 'resendOtp'])->name('otp.resend');

Route::get('/password-success', function () {
    return Inertia::render('PasswordSuccess', [
    ]);
})->name('password.success');

Route::middleware('auth',)->group(function () {
    Route::get('/dashboard', function () {
        if (!Session::get('otp_verified')) {
            return redirect()->route('otp.form');
        }
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::get('/admin-dashboard', function () {
        if (!Session::get('otp_verified')) {
            return redirect()->route('otp.form');
        }
        return Inertia::render('AdminDashboard');
    })->name('admin.dashboard');

    Route::get('/background', function () {
        if (!Session::get('otp_verified')) {
            return redirect()->route('otp.form');
        }
        return Inertia::render('Background');
    })->name('background');

    Route::get('/otherinfo', function () {
        if (!Session::get('otp_verified')) {
            return redirect()->route('otp.form');
        }
        return Inertia::render('OtherInfo');
    })->name('otherinfo');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // New employee routes
    Route::get('/employee/fullname', [EmployeeController::class, 'getEmployee']);
    Route::get('/employee/PersonalInfo', [EmployeeController::class, 'getPersonalInfo']);
    Route::get('/employee/SecurityandContact', [EmployeeController::class, 'getSecurityandContact']);
    Route::patch('/employee/updateProfile', [EmployeeController::class, 'updateProfile']);
    Route::get('/emp_acc/empuser', [EmpAccController::class, 'getCreds']);
    Route::get('/dropdown/sex-options', [DropDownControllers::class, 'getSexOptions']);
    Route::get('/dropdown/civilstatus-options', [DropDownControllers::class, 'getCivilStatusOptions']);
    Route::get('/dropdown/bloodtype-options', [DropDownControllers::class, 'getBloodTypeOptions']);
    Route::get('/dropdown/ext-options', [DropDownControllers::class, 'getExtOptions']);
    Route::post('/upload-profile-picture', [EmployeeController::class, 'uploadProfilePicture']);
    Route::get('/get-profile-picture', [EmployeeController::class, 'getProfilePicture']);

    // Statistics routes
    Route::get('/total-employees', [EmployeeController::class, 'getTotalEmployees']);
    Route::get('/gender-distribution', [EmployeeController::class, 'getGenderDistribution']);
    Route::get('/civil-status-distribution', [EmployeeController::class, 'getCivilStatusDistribution']);

    Route::get('/employee/Address', [AddressController::class, 'getAddress']);

    Route::get('/api/regions', [AddressController::class, 'getRegions']);
    Route::get('/api/provinces', [AddressController::class, 'getProvinces']);
    Route::get('/api/cities', [AddressController::class, 'getCities']);
    Route::get('/api/barangays', [AddressController::class, 'getBarangays']);


    Route::get('/employee/Address2', [AddressControllerII::class, 'getAddress2']);

    Route::get('/api/regions2', [AddressControllerII::class, 'getRegions2']);
    Route::get('/api/provinces2', [AddressControllerII::class, 'getProvinces2']);
    Route::get('/api/cities2', [AddressControllerII::class, 'getCities2']);
    Route::get('/api/barangays2', [AddressControllerII::class, 'getBarangays2']);

    Route::get('/all-cities', [AddressController::class, 'getAllCities']);



    Route::get('/dropdown/suffixes', [BackgroundController::class, 'suffix']);


    Route::get('/emp_father/Father', [BackgroundController::class, 'getFather']);
    Route::get('/emp_mother/Mother', [BackgroundController::class, 'getMother']);
    Route::get('/emp_spouse/Spouse', [BackgroundController::class, 'getSpouse']);
    Route::patch('/EmpFamily/updateFamilyData', [BackgroundController::class, 'updateFamilyData']);
    Route::get('/education/EducationData', [BackgroundController::class, 'getEducationData']);
    Route::post('/education/AddEducationData', [BackgroundController::class, 'addEducationData']);
    Route::get('/emp_org/OrganizationData', [BackgroundController::class, 'getOrganizationData']);
    Route::post('/emp_org/AddOrganizationData', [BackgroundController::class, 'addOrganizationData']);
    Route::get('/emp_work/WorkExperienceData', [BackgroundController::class, 'getWorkExperienceData']);
    Route::post('/emp_work/AddWorkExperienceData', [BackgroundController::class, 'addWorkExperienceData']);
    Route::get('/emp_skills/SkillsData', [BackgroundController::class, 'getSkillsData']);
    Route::post('/emp_skills/AddSkillData', [BackgroundController::class, 'addSkillData']);
    Route::get('/emp_reference/ReferencesData', [BackgroundController::class, 'getReferencesData']);
    Route::post('/emp_reference/AddReferenceData', [BackgroundController::class, 'addReferenceData']);
    Route::get('/family-data', [BackgroundController::class, 'getFamilyData']);
    Route::post('/emp_family/UpdateFamilyData', [BackgroundController::class, 'updateFamilyData']);
    Route::get('/emp_child/ChildData', [BackgroundController::class, 'getChildData']);
    Route::post('/emp_child/AddChildData', [BackgroundController::class, 'addChildData']);

    Route::post('/emp_child/UpdateChildData', [BackgroundController::class, 'updateChildData']);
    Route::post('/education/UpdateEducationData', [BackgroundController::class, 'updateEducationData']);
    Route::post('/emp_org/UpdateOrganizationData', [BackgroundController::class, 'updateOrganizationData']);
    Route::post('/emp_work/UpdateWorkExperienceData', [BackgroundController::class, 'updateWorkExperienceData']);
    Route::post('/emp_skills/UpdateSkillsData', [BackgroundController::class, 'updateSkillsData']);
    Route::post('/emp_reference/UpdateReferencesData', [BackgroundController::class, 'updateReferencesData']);


    Route::get('/emp_eligibility/CSEligibilityData', [OtherInfoController::class, 'getCSEligibilityData']);
    Route::get('/emp_voluntary/VoluntaryWorkData', [OtherInfoController::class, 'getVoluntaryWorkData']);
    Route::get('/emp_learning/LearndevData', [OtherInfoController::class, 'getLearndevData']);
    Route::get('/emp_recog/RecogdistData', [OtherInfoController::class, 'getRecogdistData']);
    Route::get('/sssinfo/SSSId', [OtherInfoController::class, 'getSSSId']);
    Route::get('/pagibiginfo/PagIbigId', [OtherInfoController::class, 'getPagIbigId']);
    Route::get('/gsisinfo/GSISId', [OtherInfoController::class, 'getGSISId']);
    Route::get('/philhealthinfo/PhilHealthId', [OtherInfoController::class, 'getPhilHealthId']);
    Route::get('/tininfo/TINId', [OtherInfoController::class, 'getTINId']);
    Route::patch('/governmentId/updateGovIdData', [OtherInfoController::class, 'updateGovIdData']);
    Route::post('/emp_eligibility/AddCSEligibility', [OtherInfoController::class, 'addCSEligibility']);
    Route::post('/emp_voluntary/AddVoluntaryWork', [OtherInfoController::class, 'addVoluntaryWork']);
    Route::post('/emp_learning/AddLearndev', [OtherInfoController::class, 'addLearndev']);
    Route::post('/emp_recog/AddRecogdist', [OtherInfoController::class, 'addRecogdist']);

    Route::post('/emp_eligibility/UpdateCSEligibilityData', [OtherInfoController::class, 'updateCSEligibilityData']);
    Route::post('/emp_voluntary/UpdateVoluntaryWorkData', [OtherInfoController::class, 'updateVoluntaryWorkData']);
    Route::post('/emp_learning/UpdateLearnDevData', [OtherInfoController::class, 'updateLearnDevData']);
    Route::post('/emp_recog/UpdateRecogDistData', [OtherInfoController::class, 'updateRecogDistData']);
    Route::get('/emp_otherinfo/other-info', [OtherInfoController::class, 'getOtherInfoData']);
    Route::put('/emp_otherinfo/other-info', [OtherInfoController::class, 'updateOtherInfoData']);

    Route::get('/download-pds/{page?}', [PDSController::class, 'downloadPDS']);

});

require __DIR__.'/auth.php';
