<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDS</title>
    <style>
        .profile-picture {
            width: 150px;
            height: 150px;
            object-fit: cover;
        }
        body {
            font-family: Arial, sans-serif;
            font-size: 8px; /* Smaller font size */
            margin: 0;
            padding: 10px;
        }
        /* Table Styling */
        table {
            width: 100%;
          border-collapse: collapse; /* Remove spacing between table cells */
        }

        th, td {
            border: 1px solid black;
            padding: 5px;
            text-align: left;
        }

        /* Column Styling */
        td:first-child { /* Style the left column */
          width: 25%; /* Adjust width as needed */
        }

        td:nth-child(2) { /* Style the right column */
          width: 75%; /* Adjust width as needed */
        }

        /* Specific Field Styling */
        #surname, #first_name, #middle_name, #name_extension, #place_of_birth, #gsis_no, #pgbg_no, #ph_no, #sss_no, #tin_no, #agemp_no, #country, #street, #village, #barangay, #city_municipality, #province, #zip_code, #permanent_address, #permanent_street, #permanent_village, #permanent_barangay, #permanent_city_municipality, #permanent_province, #permanent_zip_code, #tel_no, #mob_no, #email_add {
          width: 100%; /* Make input fields fill the width of the cell */
        }

        /* Radio Button Styling */
        input[type="radio"] {
          margin-right: 5px; /* Add spacing between radio button and label */
        }

        /* Checkbox Styling */
        input[type="checkbox"] {
          margin-right: 5px; /* Add spacing between checkbox and label */
        }

        /* Additional Styling (Optional) */
        h1 { /* Style the heading */
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        th {
            background-color: #f2f2f2;
        }
        h1, h2 {
            text-align: center;
            font-size: 12px; /* Smaller header font size */
            margin: 10px 0;
        }
        p {
            margin: 0 0 5px;
            font-size: 8px; /* Smaller font size for paragraphs */
        }
        label {
            display: block;
            font-size: 8px; /* Smaller font size for labels */
        }
        .first_part {
            width: 95%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid black;
            border-collapse: collapse;
        }
        .first_part h5, .first_part h7, .first_part h2 {
            text-align: center;
            margin: 0;
            padding: 5px 0;
        }
        .first_part h7 {
            font-size: 12px;
        }
        .first_part h2 {
            margin-bottom: 10px;
        }
        .container {
            width: 100%;
            margin: 0 auto;
            padding: 20px;
            box-sizing: border-box;
        }

        .references-table, .id-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .references-table th, .references-table td,
        .id-table th, .id-table td {
            border: 1px solid black;
            padding: 5px;
            text-align: left;
            vertical-align: top;
        }

        .references-table th {
            text-align: center;
        }

        .declaration {
            margin-bottom: 20px;
        }

        .id-table .photo-box {
            width: 120px;
            height: 150px;
            text-align: center;
            border: 1px solid black;
            vertical-align: top;
            padding: 20px;
        }

        .signature-box {
            text-align: left;
        }

        .signature-area {
            border: 1px solid black;
            height: 40px;
            margin-top: 5px;
        }

        .thumbmark-box {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .thumbmark-label {
            margin-right: 10px;
        }

        .thumbmark-area {
            border: 1px solid black;
            width: 120px;
            height: 100px;
        }

        .oath-box {
            text-align: left;
        }

        .oath-box p {
            margin-bottom: 20px;
        }

        .administering-oath {
            text-align: center;
            border-top: 1px solid black;
            margin-top: 40px;
            padding-top: 10px;
        }

    </style>
</head>
<body>
    <div class="container">
      <div class="first_part">
        <h5>CS Form No. 212</h5>
        <h7>Revised 2017</h7>
        <h2>PERSONAL DATA SHEET</h2>
        <p class="warning">WARNING: Any misrepresentation made in the Personal Data Sheet and the Work Experience Sheet shall cause the filing of administrative/criminal case/s against the person concerned.</p>
        <p class="read-guide">READ THE ATTACHED GUIDE TO FILLING OUT THE PERSONAL DATA SHEET (PDS) BEFORE ACCOMPLISHING THE PDS FORM.</p>
        <p class="instruction">Print legibly. Tick appropriate boxes ( ) and use separate sheet if necessary. Indicate N/A if not applicable. DO NOT ABBREVIATE.</p>
        <div class="col">
          <label for="surname">1. CS ID No</label>
          <input type="text" name="surname" id="surname" readonly />
          <p class="instruction"> (Do not fill up. For CSC use only)</p>
      </div>
      </div>
      <table>
        <tr><td>I. PERSONAL INFORMATION</td></tr>
        <tr>
          <td>2. SURNAME</td>
          <td>{{ $employee->emp_lname ?? 'N/A' }}</td>
      </tr>      
      <tr>
          <td>FIRST NAME</td>
          <td>{{ $employee->emp_fname ?? 'N/A' }}</td>
      </tr>
      <tr>
          <td>MIDDLE NAME</td>
          <td>{{ $employee->emp_mname ?? 'N/A' }}</td>
      </tr>
      <tr>
          <td>NAME EXTENSION (JR., SR)</td>
          <td>{{ $employee->emp_xname ?? 'N/A' }}</td>
      </tr>
      <tr>
          <td>3. DATE OF BIRTH (mm/dd/yyyy)</td>
          <td>{{$employee->emp_dob ?? 'N/A'}}</td>
      </tr>
      <tr>
          <td>4. PLACE OF BIRTH</td>
          <td>{{$employee->emp_pob ?? 'N/A'}}</td>
      </tr>
      <tr>
          <td>5. SEX</td>
          <td>
              <input type="radio" id="male" name="sex" value="male" {{ strtolower($emp_sexes) == 'male' ? 'checked' : '' }} readonly> Male
              <input type="radio" id="female" name="sex" value="female" {{ strtolower($emp_sexes) == 'female' ? 'checked' : '' }} readonly> Female
          </td>
      </tr>
      <tr>
          <td>6. CIVIL STATUS</td>
          <td>
              <input type="checkbox" id="single" name="civil_status" value="single" {{ strtolower($emp_civstats) == 'single' ? 'checked' : '' }} readonly> Single
              <input type="checkbox" id="married" name="civil_status" value="married" {{ strtolower($emp_civstats) == 'married' ? 'checked' : '' }} readonly> Married
              <input type="checkbox" id="widowed" name="civil_status" value="widowed" {{ strtolower($emp_civstats) == 'widowed' ? 'checked' : '' }} readonly> Widowed
              <input type="checkbox" id="separated" name="civil_status" value="separated" {{ strtolower($emp_civstats) == 'separated' ? 'checked' : '' }} readonly> Separated
              <input type="checkbox" id="other" name="civil_status" value="other" {{ !in_array(strtolower($emp_civstats), ['single', 'married', 'widowed', 'separated']) ? 'checked' : '' }} readonly> Other/s:
              {{ !in_array(strtolower($emp_civstats), ['single', 'married', 'widowed', 'separated']) ? $emp_civstats : '' ?? 'N/A'}}
          </td>
      </tr>
      <tr>
          <td>7. HEIGHT (m)</td>
          <td>{{$employee->emp_height ?? 'N/A'}}</td>
      </tr>
      <tr>
          <td>8. WEIGHT (kg)</td>
          <td>{{$employee->emp_weight ?? 'N/A'}}</td>
      </tr>
      <tr>
          <td>9. BLOOD TYPE</td>
          <td>{{$emp_bloods ?? 'N/A'}}</td>
      </tr>
      <tr>
          <td>10. GSIS ID NO.</td>
          <td>{{$employee->emp_height ?? 'N/A'}}</td>
      </tr>
      <tr>
          <td>11. PAG-IBIG ID NO.</td>
          <td>{{$employee->emp_height ?? 'N/A'}}</td>
      </tr>
      <tr>
          <td>12. PHILHEALTH ID NO.</td>
          <td>{{$employee->emp_height ?? 'N/A'}}</td>
      </tr>
      <tr>
          <td>13. SSS ID NO.</td>
          <td>{{$employee->emp_height ?? 'N/A'}}</td>
      </tr>
      <tr>
          <td>14. TIN ID NO.</td>
          <td>{{$employee->emp_height ?? 'N/A'}}</td>
      </tr>
      <tr>
          <td>15. AGENCY EMPLOYEE NO.</td>
          <td>{{$employee->emp_agency ?? 'N/A'}}</td>
      </tr>
      <tr>
          <td>16. CITIZENSHIP</td>
          <td>
              <input type="radio" id="filipino" name="citizenship" value="filipino"> Filipino
              <input type="radio" id="dual_citizenship" name="citizenship" value="dual_citizenship"> Dual Citizenship
              <p>If holder of dual citizenship, please indicate details.</p>
              <input type="checkbox" id="by_birth" name="dual_citizenship_details" value="by_birth"> by birth
              <input type="checkbox" id="by_naturalization" name="dual_citizenship_details" value="by_naturalization"> by naturalization
              <label for="country">Pls. indicate country:</label>
              <input type="text" id="country" name="country" />
          </td>
      </tr>
      <tr>
        <td>17. RESIDENTIAL ADDRESS</td>
        <td>
            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td><strong>House/Block/Lot No. Street</strong></td>
                    <td>{{$emp_address->emp_house ?? 'N/A'}}</td>
                </tr>
                <tr>
                    <td><strong>Subdivision/Village</strong></td>
                    <td>{{$emp_address->emp_subd ?? 'N/A'}}</td>
                </tr>
                <tr>
                    <td><strong>Barangay</strong></td>
                    <td>{{$emp_brgies ?? 'N/A'}}</td>
                </tr>
                <tr>
                    <td><strong>City/Municipality</strong></td>
                    <td>{{$emp_cities ?? 'N/A'}}</td>
                </tr>
                <tr>
                    <td><strong>Province</strong></td>
                    <td>{{$emp_provinces ?? 'N/A'}}</td>
                </tr>
                <tr>
                    <td><strong>ZIP CODE</strong></td>
                    <td>{{$emp_address->emp_zip ?? 'N/A'}}</td>
                </tr>
        </td>
    </tr>
    
      <tr>
          <td>18. PERMANENT ADDRESS</td>
          <td>
              <input type="text" id="permanent_address" name="permanent_address" /><br />
              <label for="permanent_street">House/Block/Lot No. Street</label>
              <input type="text" id="permanent_street" name="permanent_street" /><br />
              <label for="permanent_village">Subdivision/Village</label>
              <input type="text" id="permanent_village" name="permanent_village" /><br />
              <label for="permanent_barangay">Barangay</label>
              <input type="text" id="permanent_barangay" name="permanent_barangay" /><br />
              <label for="permanent_city_municipality">City/Municipality</label>
              <input type="text" id="permanent_city_municipality" name="permanent_city_municipality" /><br />
              <label for="permanent_province">Province</label>
              <input type="text" id="permanent_province" name="permanent_province" /><br />
              <label for="permanent_zip_code">ZIP CODE</label>
              <input type="text" id="permanent_zip_code" name="permanent_zip_code" />
          </td>
      </tr>
      <tr>
          <td>19. TELEPHONE NO.</td>
          <td>{{$employee->emp_telnum ?? 'N/A'}}</td>
      </tr>
      <tr>
          <td>20. MOBILE NO.</td>
          <td>{{$employee->emp_cnum ?? 'N/A'}}</td>
      </tr>
      <tr>
          <td>21. E-MAIL ADDRESS (if any)</td>
          <td>{{$emp_acc->empmail ?? 'N/A'}}</td>
      </tr>
      </table>
      <table>
      <tr><td>II. FAMILY BACKGROUND</td></tr>
            <tr>
                <td>22. SPOUSE'S SURNAME</td>
                <td>{{$emp_spouse->spouse_lname ?? 'N/A'}}</td>
            </tr>
            <tr>
                <td>FIRST NAME</td>
                <td>{{$emp_spouse->spouse_fname ?? 'N/A'}}</td>
            </tr>
            <tr>
                <td>MIDDLE NAME</td>
                <td>{{$emp_spouse->spouse_mname ?? 'N/A'}}</td>
            </tr>
            <tr>
                <td>OCCUPATION</td>
                <td>{{$emp_spouse->spouse_occup ?? 'N/A'}}</td>
            </tr>
            <tr>
                <td>EMPLOYER/BUSINESS NAME</td>
                <td>{{$emp_spouse->spouse_office ?? 'N/A'}}</td>
            </tr>
            <tr>
                <td>BUSINESS ADDRESS</td>
                <td>{{$emp_spouse->spouse_busadd ?? 'N/A'}}</td>
            </tr>
            <tr>
                <td>TELEPHONE NO.</td>
                <td>{{$emp_spouse->spouse_tel ?? 'N/A'}}</td>
            </tr>
            <tr>
                <td>24. FATHER'S SURNAME</td>
                <td>{{$emp_father->father_lname ?? 'N/A'}}</td>
            </tr>
            <tr>
                <td>FIRST NAME</td>
                <td>{{$emp_father->father_fname ?? 'N/A'}}</td>
            </tr>
            <tr>
                <td>MIDDLE NAME</td>
                <td>{{$emp_father->father_mname ?? 'N/A'}}</td>
            </tr>
            <tr>
                <td>25. MOTHER'S MAIDEN NAME</td>
            </tr>
            <tr>
                <td>SURNAME</td>
                <td>{{$emp_mother->mother_lname ?? 'N/A'}}</td>
            </tr>
            <tr>
                <td>FIRST NAME</td>
                <td>{{$emp_mother->mother_fname ?? 'N/A'}}</td>
            </tr>
            <tr>
                <td>MIDDLE NAME</td>
                <td>{{$emp_mother->mother_mname ?? 'N/A'}}</td>
            </tr>

            <tr>
                <td>23. NAME of CHILDREN  (Write full name and list all)</td>
                <td> DATE OF BIRTH (mm/dd/yyyy) </td>
            </tr>
            @php
          $childs = App\Models\emp_child::where('emp_count', $employee->emp_count)->get();
          @endphp
          @foreach($childs as $emp_child)
              <tr>
                  <td>{{$emp_child->child_fname . ' ' . 
                    $child_mname_initial . ' ' . 
                    $emp_child->child_lname . ' ' . 
                    $emp_child->child_xname ?? 'N/A'}}</td>
                  <td>{{$emp_child->child_dob ?? 'N/A'}}</td>
              </tr>
            @endforeach
      </table>
      <table>
            <tr><td>III. EDUCATIONAL BACKGROUND</td></tr>
          <tr>
              <th>LEVEL</th>
              <th>NAME OF SCHOOL (Write in full)</th>
              <th colspan="2">PERIOD OF ATTENDANCE</th>
              <th>HIGHEST LEVEL/ UNITS EARNED</th>
              <th>YEAR GRADUATED</th>
              <th>SCHOLARSHIP/ACADEMIC HONORS RECEIVED</th>
          </tr>
          <tr>
            <td></td> {{-- Empty cell to align with the LEVEL header --}}
            <td></td> {{-- Empty cell to align with the NAME OF SCHOOL header --}}
            <td>FROM</td> {{-- Label for "FROM" --}}
            <td>TO</td>   {{-- Label for "TO" --}}
            <td></td> {{-- Empty cell to align with YEAR GRADUATED header --}}
            <td></td> {{-- Empty cell to align with SCHOLARSHIP/ACADEMIC HONORS RECEIVED header --}}
        </tr>
          @php
          $educations = App\Models\Education::where('empid', $employee->empid)->get();
          @endphp
          @foreach($educations as $education)
              @if($education->educ_level == 1)
              <tr>
                  <td>ELEMENTARY</td>
                  <td>{{$education->educ_school ?? 'N/A'}}</td>
                  <td>{{$education->educ_from ?? 'N/A'}}</td>
                  <td>{{$education->educ_year_grad ?? 'N/A'}}</td>
                  <td>{{$education->educ_hl_earned ?? 'N/A'}}</td>
                  <td>{{$education->educ_year_grad ?? 'N/A'}}</td>
                  <td>{{$education->educ_academic_honor ?? 'N/A'}}</td>
              </tr>
              @elseif($education->educ_level == 2)
              <tr>
                  <td>SECONDARY</td>
                  <td>{{$education->educ_school ?? 'N/A'}}</td>
                  <td>
                      From: {{$education->educ_from ?? 'N/A'}} To: {{$education->educ_year_grad ?? 'N/A'}}
                  </td>
                  <td>{{$education->educ_hl_earned ?? 'N/A'}}</td>
                  <td>{{$education->educ_year_grad ?? 'N/A'}}</td>
                  <td>{{$education->educ_academic_honor ?? 'N/A'}}</td>
              </tr>
              @elseif(in_array($education->educ_level, [7, 8, 9]))
              <tr>
                  <td>VOCATIONAL / TRADE COURSE</td>
                  <td>{{$education->educ_school ?? 'N/A'}}</td>
                  <td>
                      From: {{$education->educ_from ?? 'N/A'}} To: {{$education->educ_year_grad ?? 'N/A'}}
                  </td>
                  <td>{{$education->educ_hl_earned ?? 'N/A'}}</td>
                  <td>{{$education->educ_year_grad ?? 'N/A'}}</td>
                  <td>{{$education->educ_academic_honor ?? 'N/A'}}</td>
              </tr>
              @elseif(in_array($education->educ_level, [3, 4]))
              <tr>
                  <td>COLLEGE</td>
                  <td>{{$education->educ_school ?? 'N/A'}}</td>
                  <td>
                      From: {{$education->educ_from ?? 'N/A'}} To: {{$education->educ_year_grad ?? 'N/A'}}
                  </td>
                  <td>{{$education->educ_hl_earned ?? 'N/A'}}</td>
                  <td>{{$education->educ_year_grad ?? 'N/A'}}</td>
                  <td>{{$education->educ_academic_honor ?? 'N/A'}}</td>
              </tr>
              @elseif(in_array($education->educ_level, [5, 6]))
              <tr>
                  <td>GRADUATE STUDIES</td>
                  <td>{{$education->educ_school ?? 'N/A'}}</td>
                  <td>
                      From: {{$education->educ_from ?? 'N/A'}} To: {{$education->educ_year_grad ?? 'N/A'}}
                  </td>
                  <td>{{$education->educ_hl_earned ?? 'N/A'}}</td>
                  <td>{{$education->educ_year_grad ?? 'N/A'}}</td>
                  <td>{{$education->educ_academic_honor ?? 'N/A'}}</td>
              </tr>
              @endif
          @endforeach
          <p style="color: red">(Continue on separate sheet if necessary)</p>
          <tr>
            <td>SIGNATURE</td> <td></td>
            <td>DATE</td> <td>{{ date('F d, Y') }}</td>
          </tr>
      </table>
      <table>
          <tr><td>IV. CIVIL SERVICE ELIGIBILITY</td></tr>
          <tr>
            <th>27. CAREER SERVICE/ RA 1080 (BOARD/ BAR) UNDER 
              SPECIAL LAWS/ CES/ CSEE                                                    
              BARANGAY ELIGIBILITY / DRIVER'S LICENSE</th>
            <th>RATING (If Applicable)</th>
            <th>DATE OF 
              EXAMINATION / 
              CONFERMENT</th>
            <th> PLACE OF EXAMINATION / CONFERMENT</th>
            <th colspan="2"> LICENSE (if applicable)</th>
        </tr>
        <tr>
          <td></td> {{-- Empty cell to align with the LEVEL header --}}
          <td></td> {{-- Empty cell to align with the NAME OF SCHOOL header --}}
          <td></td> {{-- Label for "FROM" --}}
          <td></td>   {{-- Label for "TO" --}}
          <td>NUMBER</td> {{-- Empty cell to align with YEAR GRADUATED header --}}
          <td>Date of Validity</td> {{-- Empty cell to align with SCHOLARSHIP/ACADEMIC HONORS RECEIVED header --}}
      </tr>
      @php
          $emp_eli = App\Models\emp_eligibility::where('empid', $employee->empid)->get();
      @endphp
          @foreach($emp_eli as $emp_eligibility)
        <tr>
            <td>{{$emp_eligibility->eli_service ?? 'N/A'}}</td>
            <td>{{$emp_eligibility->eli_rating ?? 'N/A'}}</td>
            <td>{{$emp_eligibility->eli_doe ?? 'N/A'}}</td>
            <td>{{$emp_eligibility->eli_poe ?? 'N/A'}}</td>
            <td>{{$emp_eligibility->eli_license_no  ?? 'N/A'}}</td>
            <td>{{$emp_eligibility->eli_licen_valid  ?? 'N/A'}}</td>
        </tr>
        @endforeach
        <p style="color: red">(Continue on separate sheet if necessary)</p>
      </table>
      <table>
        <tr><td>V. Work Experience</td></tr> 
          <tr>
            <th colspan="2">28. INCLUSIVE DATES 
              (mm/dd/yyyy)</th>
            <th>POSITION TITLE (Write in full/Do not abbreviate)</th>
            <th>DEPARTMENT / AGENCY / OFFICE / COMPANY (Write in full/Do not abbreviate)</th>
            <th>MONTHLY SALARY</th>
            <th> SALARY/ JOB/  PAY GRADE (if applicable)& STEP (Format "00-0")/INCREMENT</th>
            <th>STATUS OF  APPOINTMENT</th>
            <th>GOV'T SERVICE (Yes/No)</th>
        </tr>
        <tr>
          <td>From</td>
          <td>To</td> 
          <td></td>
          <td></td>  
          <td></td> 
          <td></td> 
          <td></td>
      </tr>
      @php
          $emp_working = App\Models\emp_work::where('empid', $employee->empid)->get();
      @endphp
          @foreach($emp_working as $emp_work)
        <tr>
            <td>{{$emp_work->workfr ?? 'N/A'}}</td>
            <td>{{$emp_work->workto ?? 'N/A'}}</td>
            <td>{{$emp_work->work_pos ?? 'N/A'}}</td>
            <td>{{$emp_work->work_dept ?? 'N/A'}}</td>
            <td>{{$emp_work->work_salary  ?? 'N/A'}}</td>
            <td>{{$emp_work->work_salarygrade  ?? 'N/A'}}</td>
            <td>{{$emp_work->work_stat  ?? 'N/A'}}</td>
            <td>{{$emp_work->work_gov  ?? 'N/A'}}</td>
        </tr>
        @endforeach
        <p style="color: red">(Continue on separate sheet if necessary)</p>
        <tr>
            <td>SIGNATURE</td> <td></td>
            <td>DATE</td> <td>{{ date('F d, Y') }}</td>
          </tr>
        </table>
      </table>
      <table>
          <tr><td>VI. VOLUNTARY WORK OR INVOLVEMENT IN CIVIC / NON-GOVERNMENT / PEOPLE / VOLUNTARY ORGANIZATION/S</td></tr>
          <tr>
            <th> 29. NAME & ADDRESS OF ORGANIZATION (Write in full)</th>
            <th colspan="2">INCLUSIVE DATES (mm/dd/yyyy)</th>
            <th>NUMBER OF HOURS</th>
            <th>POSITION / NATURE OF WORK</th>
        </tr>
        <tr>
          <td></td> {{-- Empty cell to align with the LEVEL header --}}
          <td>FROM</td> {{-- Empty cell to align with the NAME OF SCHOOL header --}}
          <td>TO</td> {{-- Label for "FROM" --}}
          <td></td>   {{-- Label for "TO" --}}
          <td></td> {{-- Empty cell to align with YEAR GRADUATED header --}}
      </tr>
      @php
          $emp_vol = App\Models\emp_voluntary::where('empid', $employee->empid)->get();
      @endphp
          @foreach($emp_vol as $emp_voluntary)
        <tr>
            <td>{{ ($emp_voluntary->vol_name ?? 'N/A') }} <br> {{($emp_voluntary->vol_add ?? 'N/A') }}</td>
            <td>{{$emp_voluntary->vol_fr ?? 'N/A'}}</td>
            <td>{{$emp_voluntary->vol_to ?? 'N/A'}}</td>
            <td>{{$emp_voluntary->vol_hrs ?? 'N/A'}}</td>
            <td>{{$emp_voluntary->vol_pos  ?? 'N/A'}}</td>
        </tr>
        @endforeach
        <p style="color: red">(Continue on separate sheet if necessary)</p>
      </table>
      <table>
        <tr><td>VII. LEARNING AND DEVELOPMENT (L&D) INTERVENTIONS/TRAINING PROGRAMS ATTENDED</td></tr> 
          <tr>
            <th>30. TITLE OF LEARNING AND DEVELOPMENT INTERVENTIONS/TRAINING PROGRAMS (Write in full)</th>
            <th colspan="2">INCLUSIVE DATES (mm/dd/yyyy)</th>
            <th>NUMBER OF HOURS</th>
            <th>Type of LD (Managerial/ Supervisory/Technical/etc)</th>
            <th>CONDUCTED/ SPONSORED BY (Write in full)</th>
        </tr>
        <tr>
          
          <td></td>
          <td>From</td>
          <td>To</td> 
          <td></td>  
          <td></td>
          <td></td>
      </tr>
      @php
          $emp_learndev = App\Models\emp_learning::where('empid', $employee->empid)->get();
      @endphp
          @foreach($emp_learndev as $emp_learning)
        <tr>
            <td>{{$emp_learning->learn_title ?? 'N/A'}}</td>
            <td>{{$emp_learning->learn_fr ?? 'N/A'}}</td>
            <td>{{$emp_learning->learn_to ?? 'N/A'}}</td>
            <td>{{$emp_learning->learn_hrs ?? 'N/A'}}</td>
            <td>{{$emp_learning->learn_type  ?? 'N/A'}}</td>
            <td>{{$emp_learning->learn_con  ?? 'N/A'}}</td>
        </tr>
        @endforeach
        <tr><td>VIII.  OTHER INFORMATION</td></tr> 
        <tr>
          <th colspan="2"> 31. SPECIAL SKILLS and HOBBIES NON-ACADEMIC DISTINCTIONS / RECOGNITION                                                                                                                                              
           (Write in full)</th>
          <th>33. MEMBERSHIP IN ASSOCIATION/ORGANIZATION (Write in full)</th>
      </tr>
            @php
            $emp_skill = App\Models\emp_skills::where('empid', $employee->empid)->get();
            $emp_organization = App\Models\emp_org::where('empid', $employee->empid)->get();
            $emp_recognition = App\Models\emp_recog::where('empid', $employee->empid)->get();
            $max_count = max($emp_skill->count(), $emp_organization->count(), $emp_recognition->count());
        @endphp
        
        @for ($i = 0; $i < $max_count; $i++)
            <tr>
                <td>{{ $emp_skill[$i]->skill ?? 'N/A' }}</td>
                <td>{{ $emp_recognition[$i]->recog_name ?? 'N/A' }}</td>
                <td>{{ $emp_organization[$i]->org_name ?? 'N/A' }}</td>
            </tr>
        @endfor  
      <p style="color: red">(Continue on separate sheet if necessary)</p>
      <tr>
        <td>SIGNATURE</td> <td></td>
        <td>DATE</td> <td>{{ date('F d, Y') }}</td>
      </tr>
        </table>
        <table>
          <tr>
            <td> 34. Are you related by consanguinity or affinity to the appointing or recommending authority, or to the chief of bureau or office or to the person who has immediate supervision over you in the Office, Bureau or Department where you will be appointed,
              <br><br>
            a. within the third degree?
            <br><br>
            b. within the fourth degree (for Local Government Unit - Career Employees)?
            </td>
            <td>
              <br><br>
              <input type="checkbox" id="yes" name="related" value="yes" {{ strtolower($emp_otherinfo->other_34a) == 'yes' ? 'checked' : '' }} readonly> Yes
              <input type="checkbox" id="no" name="related" value="no" {{ strtolower($emp_otherinfo->other_34a) == 'no' ? 'checked' : '' }} readonly> No
              <br>
              <input type="checkbox" id="yes" name="related" value="yes" {{ strtolower($emp_otherinfo->other_34b) == 'yes' ? 'checked' : '' }} readonly> Yes
              <input type="checkbox" id="no" name="related" value="no" {{ strtolower($emp_otherinfo->other_34b) == 'no' ? 'checked' : '' }} readonly> No
              <br>
              <p>If YES, give details:</p>
              <p style="text-decoration: underline;">{{$emp_otherinfo->other_34bif  ?? 'N/A'}}</p>
            </td>
          </tr>
          <tr>
            <td>
                35. a. Have you ever been found guilty of any administrative offense?
                <br><br>
                If YES, give details:
                <br><br>
                b. Have you been criminally charged before any court?
                <br><br>
                If YES, give details:
                <br><br>
                Date Filed:
                <br><br>
                Status of Case/s:
            </td>
            <td>
                <input type="checkbox" id="yes_admin_offense" name="admin_offense" value="yes" {{ strtolower($emp_otherinfo->other_35a) == 'yes' ? 'checked' : '' }} readonly> Yes
                <input type="checkbox" id="no_admin_offense" name="admin_offense" value="no" {{ strtolower($emp_otherinfo->other_35a) == 'no' ? 'checked' : '' }} readonly> No
                <br>
                <textarea name="admin_offense_details" rows="3" cols="30" readonly>{{ $emp_otherinfo->other_35aif ?? 'N/A' }}</textarea>
                <br>
                <input type="checkbox" id="yes_criminal_charge" name="criminal_charge" value="yes" {{ strtolower($emp_otherinfo->other_35b) == 'yes' ? 'checked' : '' }} readonly> Yes
                <input type="checkbox" id="no_criminal_charge" name="criminal_charge" value="no" {{ strtolower($emp_otherinfo->other_35b) == 'no' ? 'checked' : '' }} readonly> No
                <br>
                <textarea name="criminal_charge_details" rows="3" cols="30" readonly>{{ $emp_otherinfo->other_35bif ?? 'N/A' }}</textarea>
                <br>
                Date Filed: <input type="text" name="date_filed" value="{{ $emp_otherinfo->other_35bfiled ?? 'N/A' }}" readonly>
                <br>
                Status of Case/s: <input type="text" name="case_status" value="{{ $emp_otherinfo->other_35stat ?? 'N/A' }}" readonly>
            </td>
        </tr>
        
        <tr>
            <td>
                36. Have you ever been convicted of any crime or violation of any law, decree, ordinance or regulation by any court or tribunal?
                <br><br>
                If YES, give details:
            </td>
            <td>
                <input type="checkbox" id="yes_convicted" name="convicted" value="yes" {{ strtolower($emp_otherinfo->other_36) == 'yes' ? 'checked' : '' }} readonly> Yes
                <input type="checkbox" id="no_convicted" name="convicted" value="no" {{ strtolower($emp_otherinfo->other_36) == 'no' ? 'checked' : '' }} readonly> No
                <br>
                <textarea name="convicted_details" rows="3" cols="30" readonly>{{ $emp_otherinfo->other_36if ?? 'N/A' }}</textarea>
            </td>
        </tr>
        
        <tr>
            <td>
                37. Have you ever been separated from the service in any of the following modes: resignation, retirement, dropped from the rolls, dismissal, termination, end of term, finished contract or phased out (abolition) in the public or private sector?
                <br><br>
                If YES, give details:
            </td>
            <td>
                <input type="checkbox" id="yes_separated" name="separated" value="yes" {{ strtolower($emp_otherinfo->other_37) == 'yes' ? 'checked' : '' }} readonly> Yes
                <input type="checkbox" id="no_separated" name="separated" value="no" {{ strtolower($emp_otherinfo->other_37) == 'no' ? 'checked' : '' }} readonly> No
                <br>
                <textarea name="separated_details" rows="3" cols="30" readonly>{{ $emp_otherinfo->other_37if ?? 'N/A' }}</textarea>
            </td>
        </tr>
        
        <tr>
            <td>
                38. a. Have you ever been a candidate in a national or local election held within the last year (except Barangay election)?
                <br><br>
                b. Have you resigned from the government service during the three (3)-month period before the last election to promote/actively campaign for a national or local candidate?
                <br><br>
                If YES, give details:
            </td>
            <td>
                <input type="checkbox" id="yes_election_candidate" name="election_candidate" value="yes" {{ strtolower($emp_otherinfo->other_38a) == 'yes' ? 'checked' : '' }} readonly> Yes
                <input type="checkbox" id="no_election_candidate" name="election_candidate" value="no" {{ strtolower($emp_otherinfo->other_38a) == 'no' ? 'checked' : '' }} readonly> No
                <br>
                <input type="checkbox" id="yes_resigned_campaign" name="resigned_campaign" value="yes" {{ strtolower($emp_otherinfo->other_38b) == 'yes' ? 'checked' : '' }} readonly> Yes
                <input type="checkbox" id="no_resigned_campaign" name="resigned_campaign" value="no" {{ strtolower($emp_otherinfo->other_38b) == 'no' ? 'checked' : '' }} readonly> No
                <br>
                <textarea name="election_candidate_details" rows="3" cols="30" readonly>{{ $emp_otherinfo->other_38aif ?? 'N/A' }}</textarea>
                <br>
                <textarea name="resigned_campaign_details" rows="3" cols="30" readonly>{{ $emp_otherinfo->other_38bif ?? 'N/A' }}</textarea>
            </td>
        </tr>
        
        <tr>
            <td>
                39. Have you acquired the status of an immigrant or permanent resident of another country?
                <br><br>
                If YES, give details (country):
            </td>
            <td>
                <input type="checkbox" id="yes_immigrant" name="immigrant" value="yes" {{ strtolower($emp_otherinfo->other_39) == 'yes' ? 'checked' : '' }} readonly> Yes
                <input type="checkbox" id="no_immigrant" name="immigrant" value="no" {{ strtolower($emp_otherinfo->other_39) == 'no' ? 'checked' : '' }} readonly> No
                <br>
                <input type="text" name="immigrant_country" value="{{ $emp_otherinfo->other_39if ?? 'N/A' }}" readonly>
            </td>
        </tr>
        
        <tr>
            <td>
                40. Pursuant to: (a) Indigenous People's Act (RA 8371); (b) Magna Carta for Disabled Persons (RA 7277); and (c) Solo Parents Welfare Act of 2000 (RA 8972), please answer the following items:
                <br><br>
                a. Are you a member of any indigenous group?
                <br><br>
                b. Are you a person with disability?
                <br><br>
                c. Are you a solo parent?
                <br><br>
                If YES, please specify:
            </td>
            <td>
                <input type="checkbox" id="yes_indigenous" name="indigenous" value="yes" {{ strtolower($emp_otherinfo->other_40a) == 'yes' ? 'checked' : '' }} readonly> Yes
                <input type="checkbox" id="no_indigenous" name="indigenous" value="no" {{ strtolower($emp_otherinfo->other_40a) == 'no' ? 'checked' : '' }} readonly> No
                <br>
                <input type="checkbox" id="yes_disability" name="disability" value="yes" {{ strtolower($emp_otherinfo->other_40b) == 'yes' ? 'checked' : '' }} readonly> Yes
                <input type="checkbox" id="no_disability" name="disability" value="no" {{ strtolower($emp_otherinfo->other_40b) == 'no' ? 'checked' : '' }} readonly> No
                <br>
                <input type="checkbox" id="yes_solo_parent" name="solo_parent" value="yes" {{ strtolower($emp_otherinfo->other_40c) == 'yes' ? 'checked' : '' }} readonly> Yes
                <input type="checkbox" id="no_solo_parent" name="solo_parent" value="no" {{ strtolower($emp_otherinfo->other_40c) == 'no' ? 'checked' : '' }} readonly> No
                <br>
                <textarea name="indigenous_details" rows="3" cols="30" readonly>{{ $emp_otherinfo->other_40aif ?? 'N/A' }}</textarea>
                <br>
                <textarea name="disability_details" rows="3" cols="30" readonly>{{ $emp_otherinfo->other_40bif ?? 'N/A' }}</textarea>
                <br>
                <textarea name="solo_parent_details" rows="3" cols="30" readonly>{{ $emp_otherinfo->other_40cif ?? 'N/A' }}</textarea>
            </td>
        </tr>
        <tr>
            <td>41. REFERENCES (Person not related by consanguinity or affinity to applicant /appointee)</td>
        </tr>
        <tr>
            <td>NAME</td>
            <td>ADDRESS </td>
            <td>TEL. NO.</td>
        </tr>
        @php
      $references = App\Models\emp_reference::where('empid', $employee->empid)->get();
      @endphp
      @foreach($references as $emp_reference)
          <tr>
              <td>{{$emp_reference->ref_fname . ' ' . 
                $emp_reference->ref_mname . ' ' . 
                $emp_reference->ref_lname . ' ' . 
                $emp_reference->ref_xname ?? 'N/A'}}</td>
              <td>{{$emp_reference->ref_add ?? 'N/A'}}</td>
              <td>{{$emp_reference->ref_cnum ?? 'N/A'}}</td>
          </tr>
        @endforeach
        <td>
        <div class="declaration">
            <p>42. I declare under oath that I have personally accomplished this Personal Data Sheet which is a true, correct and complete statement pursuant to the provisions of pertinent laws, rules and regulations of the Republic of the Philippines. I authorize the agency head/authorized representative to verify/validate the contents stated herein. I agree that any misrepresentation made in this document and its attachments shall cause the filing of administrative/criminal cases against me.</p>
        </div>
        </td>

        <table class="id-table">
            <tr>
                <td colspan="2">Government Issued ID (i.e.Passport, GSIS, SSS, PRC, Driver’s License, etc.)<br>PLEASE INDICATE ID Number and Date of Issuance</td>
                <td rowspan="3" class="photo-box">
                @if ($profilePictureBase64)
                <img src="{{ $profilePictureBase64 }}" alt="Profile Picture" class="profile-picture">
                @else
                    <p>No Profile Picture Available</p>
                @endif
                </td>
            </tr>
            <tr>
                <td>IDLicense/Passport No. :</td>
                <td>Date/Place of Issuance :</td>
            </tr>
            <tr>
                <td colspan="2" class="signature-box">
                    <div>Signature (Sign inside the box)</div>
                    <div class="signature-area"></div>
                </td>
            </tr>
        </table>
        <td>
        <div class="thumbmark-box">
            <div class="thumbmark-label">Right Thumbmark</div>
            <div class="thumbmark-area"></div>
        </div>

        <div class="oath-box">
            <p>SUBSCRIBED AND SWORN to before me this ________________ affiant exhibiting his/her validly issued government ID as indicated above.</p>
            <div class="administering-oath">
                <div>Person Administering Oath</div>
            </div>
        </div>
    </div>
    </td>
        </table>
  </div>

</body>
</html>