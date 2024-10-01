<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title></title>
	<meta name="generator" content="LibreOffice 7.6.7.2 (Linux)"/>
	<meta name="author" content="Mark00s Art"/>
	<meta name="created" content="2024-09-18T06:50:57"/>
	<meta name="changedby" content="Mark00s Art"/>
	<meta name="changed" content="2024-09-18T06:51:06"/>
	<meta name="AppVersion" content="16.0300"/>
	
	<style type="text/css">
		@page {
			size: 8.5in 11in;  /* Standard bond paper size */
			margin: 0.5in;     /* Add 0.5-inch margin */
		}
		body {
			font-family: "Calibri", sans-serif;
			font-size: x-small;
			margin: 0;
			padding: 0;
		}
		table {
			width: 100%;
			border-collapse: collapse;
		}
		th, td {
			padding: 2px;
			text-align: center;
			vertical-align: middle;
			font-family: "Arial Narrow", sans-serif;
		}
		tr {
			height: 20px;
		}
		thead th {
			background-color: #C0C0C0;
		}
		.header {
			background-color: #969696;
			color: #FFFFFF;
			border: 2px solid #000000;
			font-weight: bold;
			font-style: italic;
			text-align: left;
			padding: 5px;
		}
		.comment-indicator:hover + comment { 
			background: #ffd; 
			position: absolute; 
			display: block; 
			border: 1px solid black; 
			padding: 0.5em;  
		} 
		.comment-indicator { 
			background: red; 
			display: inline-block; 
			border: 1px solid black; 
			width: 0.5em; 
			height: 0.5em;  
		} 
		comment { display: none;  } 
	</style>
</head>

<body>
	<table cellspacing="0">
		<thead>
			<tr>
				<th colspan="13" class="header">IV. CIVIL SERVICE ELIGIBILITY</th>
			</tr>
			<tr>
				<th style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000; font-size: 9px" colspan="5" >27. CAREER SERVICE/ RA 1080 (BOARD/ BAR) UNDER SPECIAL LAWS/ CES/ CSEE BARANGAY ELIGIBILITY / DRIVER'S LICENSE</th>
				<th style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000; font-size: 9px" >RATING<br>(If Applicable)</th>
				<th style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000; font-size: 9px" colspan="2">DATE OF EXAMINATION / CONFERMENT</th>
				<th style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000; font-size: 9px" colspan="3" >PLACE OF EXAMINATION / CONFERMENT</th>
				<th style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000; font-size: 9px" colspan="2" >LICENSE (if applicable)</th>
			</tr>
			<tr>
				<th style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" colspan="5"></th>
				<th style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;"></th>
				<th style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" colspan="2"></th>
				<th style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" colspan="3"></th>
				<th style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000; font-size: 8px">NUMBER</th>
				<th style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000; font-size: 8px">Date of Validity</th>
			</tr>
		</thead>
		<tbody>
			@php
            $emp_eli = App\Models\emp_eligibility::where('empid', $employee->empid)->get();
        @endphp
            @foreach($emp_eli as $emp_eligibility)
          <tr>
              <td colspan="5" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle">{{$emp_eligibility->eli_service ?? 'N/A'}}</td>
              <td style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle">{{$emp_eligibility->eli_rating ?? 'N/A'}}</td>
              <td colspan="2" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle">{{$emp_eligibility->eli_doe ?? 'N/A'}}</td>
              <td colspan="3" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle">{{$emp_eligibility->eli_poe ?? 'N/A'}}</td>
              <td style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle">{{$emp_eligibility->eli_license_no  ?? 'N/A'}}</td>
              <td style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle">{{$emp_eligibility->eli_licen_valid  ?? 'N/A'}}</td>
          </tr>
          @endforeach
			<tr>
                <td colspan="5" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
                <td style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
                <td colspan="2" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
                <td colspan="3" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
                <td style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
                <td style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
            </tr>
            <tr>
                <td colspan="5" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
                <td style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
                <td colspan="2" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
                <td colspan="3" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
                <td style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
                <td style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
            </tr>
            <tr>
                <td colspan="5" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
                <td style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
                <td colspan="2" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
                <td colspan="3" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
                <td style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
                <td style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
            </tr>
            <tr>
                <td style="border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" colspan="13" height="13" align="center" valign="middle" bgcolor="#C0C0C0">
                    <b><i><font face="Arial Narrow" size="1" color="#FF0000">(Continue on separate sheet if necessary)</font></i></b>
                </td>
            </tr>
        </tbody>
			<thead>
				<th colspan="13" class="header">V. WORK EXPERIENCE</th>
			</tr>
			<tr>
				<th style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000; font-size: 9px" colspan=2 ><b>28. INCLUSIVE DATES 
					(mm/dd/yyyy)</b></th>
				<th style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000; font-size: 9px" colspan=2 ><b>POSITION TITLE (Write in full/Do not abbreviate)</b></th>
				<th style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000; font-size: 9px" colspan=3 ><b>DEPARTMENT / AGENCY / OFFICE / COMPANY (Write in full/Do not abbreviate)</b></th>
				<th style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000; font-size: 9px" ><b>MONTHLY SALARY</b></th>
				<th style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000; font-size: 9px" ><b>SALARY/ JOB/  PAY GRADE (if applicable)& STEP (Format "00-0")/INCREMENT</b></th>
				<th style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000; font-size: 9px" colspan=2 ><b>STATUS OF  APPOINTMENT</b></th>
				<th style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000; font-size: 9px" colspan=2 ><b>GOV'T SERVICE (Yes/No)</b></th>
			</tr>
			<tr>
				<th style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000; font-size: 8px">FROM</th>
				<th style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000; font-size: 8px">TO</th>
				<th style="height: 20px; border-left: 2px solid #000000; border-right: 2px solid #000000;" colspan="2"></th>
				<th style="height: 20px; border-left: 2px solid #000000; border-right: 2px solid #000000;" colspan="3"></th>
				<th style="height: 20px; border-left: 2px solid #000000; border-right: 2px solid #000000;"></th>
				<th style="height: 20px; border-left: 2px solid #000000; border-right: 2px solid #000000;"></th>
				<th style="height: 20px; border-left: 2px solid #000000; border-right: 2px solid #000000;" colspan="2"></th>
				<th style="height: 20px; border-left: 2px solid #000000; border-right: 2px solid #000000;" colspan="2"></th>
				
			</tr>
		</thead>
		<tbody>
            @php
            $emp_working = App\Models\emp_work::where('empid', $employee->empid)->get();
        @endphp
            @foreach($emp_working as $emp_work)
          <tr>
              <td style="border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle">{{$emp_work->workfr ?? 'N/A'}}</td>
              <td style="border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle">{{$emp_work->workto ?? 'N/A'}}</td>
              <td colspan="2" style="border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle">{{$emp_work->work_pos ?? 'N/A'}}</td>
              <td colspan="3" style="border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle">{{$emp_work->work_dept ?? 'N/A'}}</td>
              <td style="border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle">{{$emp_work->work_salary  ?? 'N/A'}}</td>
              <td style="border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle">{{$emp_work->work_salarygrade  ?? 'N/A'}}</td>
              <td colspan="2" style="border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle">{{$emp_work->work_stat  ?? 'N/A'}}</td>
              <td colspan="2" style="border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle">{{$emp_work->work_gov  ?? 'N/A'}}</td>
          </tr>
          @endforeach

          <tr>
            <td style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
            <td style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
            <td colspan="2" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
            <td colspan="3" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
            <td style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
            <td style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
            <td colspan="2" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
            <td colspan="2" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
        </tr>

        <tr>
            <td style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
            <td style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
            <td colspan="2" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
            <td colspan="3" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
            <td style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
            <td style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
            <td colspan="2" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
            <td colspan="2" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
        </tr>

        <tr>
            <td style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
            <td style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
            <td colspan="2" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
            <td colspan="3" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
            <td style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
            <td style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
            <td colspan="2" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
            <td colspan="2" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
        </tr>
	</tbody>
	<tr>
        <td style="border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" colspan="13" height="13" align="center" valign="middle" bgcolor="#C0C0C0">
            <b><i><font face="Arial Narrow" size="1" color="#FF0000">(Continue on separate sheet if necessary)</font></i></b>
        </td>
    </tr>
    
    <tr>
        <td style="border: 2px solid #000000;" colspan="3" height="37" align="center" valign="middle" bgcolor="#C0C0C0">
            <b><i><font face="Arial Narrow">SIGNATURE</font></i></b>
        </td>
        <td style="border: 2px solid #000000;" colspan="5" align="center" valign="middle">
            <b><i><font face="Arial Narrow"><br></font></i></b>
        </td>
        <td style="border: 2px solid #000000;" align="center" valign="middle" bgcolor="#C0C0C0" colspan="2">
            <b><i><font face="Arial Narrow">DATE</font></i></b>
        </td>
        <td style=" border: 2px solid #000000;" align="left" valign="middle" colspan="3">
            <b><i><font face="Arial Narrow" size="1">{{ date('F d, Y') }}</font></i></b>
        </td>
    </tr>
    
    <tr>
        <td style="border-top: 2px solid #000000;" colspan="13" height="12" align="right" valign="middle" bgcolor="#FFFFFF">
            <i><font face="Arial Narrow" size="1" color="#000000">CS FORM 212 (Revised 2017), Page 2 of 4</font></i>
        </td>
    </tr>
    
</table>
<!-- ************************************************************************** -->
</body>

</html>
