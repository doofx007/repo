<!DOCTYPE html>

<html>
<head>
	
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title></title>
	<meta name="generator" content="LibreOffice 7.6.7.2 (Linux)"/>
	<meta name="author" content="Mark00s Art"/>
	<meta name="created" content="2024-09-18T06:40:01"/>
	<meta name="changedby" content="Mark00s Art"/>
	<meta name="changed" content="2024-09-18T06:42:45"/>
	<meta name="AppVersion" content="16.0300"/>
	
	<style type="text/css">
		body,div,table,thead,tbody,tfoot,tr,th,td,p { font-family:"Calibri"; font-size:x-small }
		a.comment-indicator:hover + comment { background:#ffd; position:absolute; display:block; border:1px solid black; padding:0.5em;  } 
		a.comment-indicator { background:red; display:inline-block; border:1px solid black; width:0.5em; height:0.5em;  } 
		comment { display:none;  } 
			
		table {
			width: 100%;
			border-collapse: collapse;
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
		</style>
	
</head>

<body>
<table align="left" cellspacing="0" border="0">
	<colgroup width="18"></colgroup>
	<colgroup width="100"></colgroup>
	<colgroup width="44"></colgroup>
	<colgroup width="138"></colgroup>
	<colgroup width="47"></colgroup>
	<colgroup width="41"></colgroup>
	<colgroup width="63"></colgroup>
	<colgroup width="74"></colgroup>
	<colgroup width="70"></colgroup>
	<colgroup span="2" width="57"></colgroup>
	<colgroup width="85"></colgroup>
	<colgroup width="66"></colgroup>
	<colgroup width="71"></colgroup>
	<colgroup span="2" width="104"></colgroup>
	<colgroup span="6" width="68"></colgroup>
	<tr>
		<td style="border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan="13" height="3" align="center" valign="middle" bgcolor="#969696" sdnum="1033;0;@">
			<i><font face="Arial Narrow" size="1" color="#000000"><br></font></i>
		</td>
	</tr>
	<tr>
		<td colspan="13" style="border-top: 2px solid #000000; border-left: 2px solid #000000" height="15" align="left" valign="middle">
			<b><font face="Arial Narrow" size="1" color="#000000"><br></font></b>
		</td>
	</tr>
	<tr>
		<td colspan="13" style="border-left: 2px solid #000000; border-right: 2px solid #000000" colspan="13" height="55" align="center" valign="top">
			<font face="Arial Black" size="6" color="#000000">PERSONAL DATA SHEET</font>
		</td>
	</tr>
	<tr>
		<td colspan="13" style="border-left: 2px solid #000000; border-right: 2px solid #000000" colspan="13" height="29" align="left" valign="top">
			<b><i><font face="Arial" size="1" color="#000000">WARNING: Any misrepresentation made in the Personal Data Sheet and the Work Experience Sheet shall cause the filing of administrative/criminal case/s against the person concerned.</font></i></b>
		</td>
	</tr>
	<tr>
		<td colspan="13" style="border-left: 2px solid #000000; border-right: 2px solid #000000" colspan="13" height="15" align="left" valign="bottom">
			<b><i><font face="Arial" size="1" color="#000000">READ THE ATTACHED GUIDE TO FILLING OUT THE PERSONAL DATA SHEET (PDS) BEFORE ACCOMPLISHING THE PDS FORM.</font></i></b>
		</td>
	</tr>
	<tr></tr>
		<td style="border-left: 2px solid #000000; border-right: 2px solid #000000" colspan="8" align="left" valign="bottom">
			<b>Print legibly. Tick appropriate boxes (     ) and use separate sheet if necessary. Indicate N/A if not applicable.  DO NOT ABBREVIATE.</b></td>
		</td><td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left" valign=middle bgcolor="#969696"><font face="Arial Narrow" size=1 color="#000000">1. CS ID No.</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000;" align="left" valign="middle"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 2px solid #000000" colspan=2 align="right" valign=middle><font face="Arial Narrow" size=.5 color="#000000"> (Do not fill up. For CSC use only)</font></td>
	</tr>
	
	<tr>
		<td colspan="13" style="border: 1px solid #000; background-color: #969696; color: #FFF; font-family: Arial Narrow; text-align: left;">
			<b><i>I. PERSONAL INFORMATION</i></b>
		</td>
	</tr>
	<tr>
		<td style="border: 1px solid #000; text-align: center; background-color: #C0C0C0;" height="33" valign="middle" colspan="2">2. SURNAME</td>
		<td colspan="11" style="border: 1px solid #000; font-family: Arial Narrow;">{{ $employee->emp_lname ?? 'N/A' }}</td>
	</tr>
	<tr>
		<td style="border: 1px solid #000; text-align: center; background-color: #C0C0C0;" height="33" valign="middle" colspan="2">FIRST NAME</td>
		<td colspan="8" style="border: 1px solid #000; font-family: Arial Narrow;">{{ $employee->emp_fname ?? 'N/A' }}</td>
		<td colspan="3" style="border: 1px solid #000; background-color: #EAEAEA; font-family: Arial Narrow; font-size: 10px;">
			NAME EXTENSION (JR., SR.) <br>{{ $employee->emp_xname ?? 'N/A' }}
		</td>
	</tr>
	<tr>
		<td style="border: 1px solid #000; text-align: center; background-color: #C0C0C0;" height="33" valign="middle" colspan="2">MIDDLE NAME</td>
		<td colspan="8" style="border: 1px solid #000; font-family: Arial Narrow;">{{ $employee->emp_mname ?? 'N/A' }}</td>
		<td colspan="3" style="border: 1px solid #000;"></td>
	</tr>
	<tr>
		<td style="border: 1px solid #000; text-align: center; background-color: #C0C0C0;" height="33" valign="middle" colspan="2">3. DATE OF BIRTH (mm/dd/yyyy)</td>
		<td colspan="3" style="border: 1px solid #000; text-align: center; font-family: Arial Narrow;">{{ $employee->emp_dob ?? 'N/A' }}</td>
		<td colspan="3" style="border-right: 1px solid #000; background-color: #C0C0C0; font-family: Arial Narrow; font-size: 10px;">16. CITIZENSHIP</td>
		<td colspan="2"></td>
		<td colspan="3" rowspan="2" style="border-right: 1px solid #000; text-align: left; font-family: Arial Narrow;">Pls. indicate country</td>
	</tr>
	<tr>
		<td style="border: 1px solid #000; text-align: center; background-color: #C0C0C0;" height="33" valign="middle" colspan="2">4. PLACE OF BIRTH</td>
		<td colspan="3" style="border: 1px solid #000; text-align: center; font-family: Arial Narrow;">{{ $employee->emp_pob ?? 'N/A' }}</td>
		<td colspan="3" style="border-right: 1px solid #000; background-color: #C0C0C0; text-align: center; font-family: Arial Narrow;">If holder of dual citizenship</td>
	</tr>
	<tr>
		<td style="border: 1px solid #000; text-align: center; background-color: #C0C0C0;" height="33" valign="middle" colspan="2">5. SEX</td>
		<td colspan="3" style="border: 1px solid #000; text-align: center;">
			<b>
				<input type="radio" id="male" name="sex" value="male" {{ strtolower($emp_sexes) == 'male' ? 'checked' : '' }} readonly> Male
				<input type="radio" id="female" name="sex" value="female" {{ strtolower($emp_sexes) == 'female' ? 'checked' : '' }} readonly> Female
			</b>
		</td>
		<td colspan="3" style="border-right: 1px solid #000; background-color: #C0C0C0; text-align: center;">Please indicate the details.</td>
		<td colspan="5" style="border: 1px solid #000;"></td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #000; text-align: center; background-color: #C0C0C0;" height="33" valign="middle" colspan="2">6. CIVIL STATUS</td>
		<td colspan="3" style="border: 1px solid #000;"></td>
		<td style="border: 1px solid #000; background-color: #C0C0C0;" colspan="3">17. RESIDENTIAL ADDRESS</td>
		<td style="border-right: 1px solid #000; text-align: center;" colspan="5">{{$emp_address->emp_house ?? 'N/A'}}</td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #000; background-color: #C0C0C0;" colspan="2"></td>
		<td style="border-left: 1px solid #000;" colspan="3"></td>
		<td style="border: 1px solid #000; background-color: #C0C0C0;" colspan="3"></td>
		<td style="border: 1px solid #000; text-align: center;" colspan="3" bgcolor="#FFFFFF">
			<i>House/Block/Lot No.</i>
		</td>
		<td style="border: 1px solid #000; text-align: center;" colspan="2" bgcolor="#FFFFFF">
			<i>Street</i>
		</td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #000; background-color: #C0C0C0;" colspan="2"></td>
		<td colspan="3" style="border-left: 1px solid #000;">
			<input type="checkbox" id="single" name="civil_status" value="single" {{ strtolower($emp_civstats) == 'single' ? 'checked' : '' }} readonly> Single
			<input type="checkbox" id="married" name="civil_status" value="married" {{ strtolower($emp_civstats) == 'married' ? 'checked' : '' }} readonly> Married
			<input type="checkbox" id="widowed" name="civil_status" value="widowed" {{ strtolower($emp_civstats) == 'widowed' ? 'checked' : '' }} readonly> Widowed
			<input type="checkbox" id="separated" name="civil_status" value="separated" {{ strtolower($emp_civstats) == 'separated' ? 'checked' : '' }} readonly> Separated
			<input type="checkbox" id="other" name="civil_status" value="other" {{ !in_array(strtolower($emp_civstats), ['single', 'married', 'widowed', 'separated']) ? 'checked' : '' }} readonly> Other/s: 
			{{ !in_array(strtolower($emp_civstats), ['single', 'married', 'widowed', 'separated']) ? $emp_civstats : '' ?? 'N/A' }}
		</td>
		<td colspan="3" style="border: 1px solid #000; background-color: #C0C0C0;"></td>
		<td colspan="3">{{$emp_address->emp_subd ?? 'N/A'}}</td>
		<td colspan="2" style="border-right: 1px solid #000;">{{$emp_brgies ?? 'N/A'}}</td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #000; background-color: #C0C0C0;" colspan="2" align="right" valign="middle"></td>
		<td colspan="3" style="border: 1px solid #000; text-align: center;"></td>
		<td style="border: 1px solid #000; background-color: #C0C0C0;" colspan="3" align="left"></td>
		<td colspan="3" style="border: 1px solid #000; text-align: center;">
			<i>Subdivision/Village</i>
		</td>
		<td colspan="2" style="border: 1px solid #000; text-align: center;">
			<i>Barangay</i>
		</td>
	</tr>

	<tr>
		<td style="border-left: 1px solid #000; border-top: 1px solid #000; text-align: center; background-color: #C0C0C0;" height="33" valign="middle" colspan="2">7. HEIGHT (m)</font></td>
		<td style="border-left: 1px solid #000;" colspan="3"align="center" valign="middle">
			<b><font face="Arial Narrow" color="#000000"></font>{{$employee->emp_height ?? 'N/A'}}</b>
		</td>
		<td style="border-left: 1px solid #000; background-color: #C0C0C0;" valign="middle">
			<font face="Arial Narrow" size="1" color="#000000"></font>
		</td>
		<td style="background-color: #C0C0C0;" colspan="2" valign="middle">
			<font face="Arial Narrow" size="1" color="#000000"></font>
		</td>
		<td style="border-left: 1px solid #000;" colspan="3" align="center" valign="middle">
			<font face="Arial Narrow" size="1" color="#000000">{{$emp_cities ?? 'N/A'}}</font>
		</td>
		<td style="border-right: 1px solid #000;" colspan="2" align="center" valign="middle">
			<font face="Arial Narrow" size="1" color="#000000">{{$emp_provinces ?? 'N/A'}}</font>
		</td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #000; background-color: #C0C0C0;" colspan="2" valign="middle">
			<font face="Arial Narrow" size="1" color="#000000"></font>
		</td>
		<td  style="border-left: 1px solid #000;" colspan="2"align="center" valign="middle"></td>
			<b><font face="Arial Narrow" color="#000000"></font></b>
		</td>
		<td style="border-left: 1px solid #000; background-color: #C0C0C0;" valign="middle" colspan="3">
			<font face="Arial Narrow" size="1" color="#000000"></font>
		</td>
		<td style="border-left: 1px solid #000; border: 1px solid #000;" colspan="3" align="center" valign="middle">
			<i><font face="Arial Narrow" size="1" color="#000000">City/Municipality</font></i>
		</td>
		<td style="border-right: 1px solid #000; border: 1px solid #000;" colspan="2" align="center" valign="middle" bgcolor="#FFFFFF">
			<i><font face="Arial Narrow" size="1">Province</font></i>
		</td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #000; border-top: 1px solid #000; text-align: center; background-color: #C0C0C0;" height="33" valign="middle" colspan="2">8. WEIGHT (kg)</font>
		</td>
		<td style="border-left: 1px solid #000; border-top: 1px solid #000; text-align: center;" colspan="3" valign="middle">
			<b><font face="Arial Narrow" color="#000000"></font></b>
			{{$employee->emp_weight ?? 'N/A'}}
		</td>
		<td colspan="3" style="border: 1px solid #000;" colspan="3" align="center" valign="middle" bgcolor="#C0C0C0">
			<font face="Arial Narrow" size="1" color="#000000">ZIP CODE</font>
		</td>
		<td style="border: 1px solid #000;" colspan="5" align="center" valign="middle">
			<font face="Arial Narrow" size="1" color="#000000">{{$emp_address->emp_zip ?? 'N/A'}}</font>
		</td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #000; border-top: 1px solid #000; text-align: center; background-color: #C0C0C0;" height="33" valign="middle" colspan="2">9. BLOOD TYPE</font>
		</td>
		<td style="border-left: 1px solid #000; border-top: 1px solid #000;" colspan="3" align="center" valign="middle">
			<b><font face="Arial Narrow" color="#000000"></font></b>
			{{$emp_bloods ?? 'N/A'}}
		</td>
		<td colspan="2" style="border-left: 1px solid #000; background-color: #C0C0C0;" valign="middle">
			<font face="Arial Narrow" size="1" color="#000000">18. PERMANENT ADDRESS</font>
		</td>
		<td align="left" valign="middle" bgcolor="#C0C0C0">
			<font face="Arial Narrow" size="1" color="#000000"></font>
		</td>
		<td style="border-left: 1px solid #000;" colspan="3" align="center" valign="middle">
			<i><font face="Arial Narrow" size="1" color="#000000"></font></i>
		</td>
		<td style="border-right: 1px solid #000;" colspan="2" align="center" valign="middle">
			<i><font face="Arial Narrow" size="1" color="#000000"></font></i>
		</td>
	</tr>
	
	
	<tr>
		<td style="border-left: 1px solid #000; background-color: #C0C0C0;" colspan="2"></td>
		<td style="border-left: 1px solid #000;" colspan="3"></td>
		<td style="border: 1px solid #000; background-color: #C0C0C0;" colspan="3"></td>
		<td style="border: 1px solid #000; text-align: center;" colspan="3" bgcolor="#FFFFFF">
			<i>House/Block/Lot No.</i>
		</td>
		<td style="border: 1px solid #000; text-align: center;" colspan="2" bgcolor="#FFFFFF">
			<i>Street</i>
		</td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #000; border-top: 1px solid #000; text-align: center; background-color: #C0C0C0;" height="33" valign="middle" colspan="2"> 10. GSIS ID NO.</td>
		<td style="border-left: 1px solid #000; border-top: 1px solid #000;" colspan="3" style="border-left: 1px solid #000;">
			{{$employee->emp_gsis ?? 'N/A'}}</td>
		<td colspan="3" style="border: 1px solid #000; background-color: #C0C0C0;"></td>
		<td colspan="3"></td>
		<td colspan="2" style="border-right: 1px solid #000;"></td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #000; background-color: #C0C0C0;" colspan="2" align="right" valign="middle"></td>
		<td colspan="3" style="border-left: 1px solid #000; border-bottom: 1px solid #000; text-align: center;"></td>
		<td style="border: 1px solid #000; background-color: #C0C0C0;" colspan="3" align="left"></td>
		<td colspan="3" style="border: 1px solid #000; text-align: center;">
			<i>Subdivision/Village</i>
		</td>
		<td colspan="2" style="border: 1px solid #000; text-align: center;">
			<i>Barangay</i>
		</td>
	</tr>

	<tr>
		<td style="border-left: 1px solid #000; border-top: 1px solid #000; text-align: center; background-color: #C0C0C0;" height="33" valign="middle" colspan="2">11. PAG-IBIG ID NO.</font></td>
		<td style="border-left: 1px solid #000;" colspan="3"align="center" valign="middle">
			{{$employee->emp_pagibig ?? 'N/A'}}
		</td>
		<td style="border-left: 1px solid #000; background-color: #C0C0C0;" valign="middle">
			<font face="Arial Narrow" size="1" color="#000000"></font>
		</td>
		<td style="background-color: #C0C0C0;" colspan="2" valign="middle">
			<font face="Arial Narrow" size="1" color="#000000"></font>
		</td>
		<td style="border-left: 1px solid #000;" colspan="3" align="center" valign="middle">
			<font face="Arial Narrow" size="1" color="#000000"></font>
		</td>
		<td style="border-right: 1px solid #000;" colspan="2" align="center" valign="middle">
			<font face="Arial Narrow" size="1" color="#000000"></font>
		</td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #000; background-color: #C0C0C0;" colspan="2" valign="middle">
			<font face="Arial Narrow" size="1" color="#000000"></font>
		</td>
		<td  style="border-left: 1px solid #000;" colspan="2"align="center" valign="middle"></td>
			<b><font face="Arial Narrow" color="#000000"></font></b>
		</td>
		<td style="border-left: 1px solid #000; background-color: #C0C0C0;" valign="middle" colspan="3">
			<font face="Arial Narrow" size="1" color="#000000"></font>
		</td>
		<td style="border-left: 1px solid #000; border: 1px solid #000;" colspan="3" align="center" valign="middle">
			<i><font face="Arial Narrow" size="1" color="#000000">City/Municipality</font></i>
		</td>
		<td style="border-right: 1px solid #000; border: 1px solid #000;" colspan="2" align="center" valign="middle" bgcolor="#FFFFFF">
			<i><font face="Arial Narrow" size="1">Province</font></i>
		</td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #000; border-top: 1px solid #000; text-align: center; background-color: #C0C0C0;" height="33" valign="middle" colspan="2">12. PHILHEALTH NO.</font>
		</td>
		<td style="border-left: 1px solid #000; border-top: 1px solid #000; text-align: center;" colspan="3" valign="middle">
			<b><font face="Arial Narrow" color="#000000"></font></b>
			{{$employee->emp_philhealth ?? 'N/A'}}
		</td>
		<td style="border: 1px solid #000;" colspan="3" align="center" valign="middle" bgcolor="#C0C0C0">
			<font face="Arial Narrow" size="1" color="#000000">ZIP CODE</font>
		</td>
		<td style="border: 1px solid #000;" colspan="5" align="center" valign="middle">
			<font face="Arial Narrow" size="1" color="#000000"></font>
		</td>
	</tr>
		<tr>
			<td style="border-left: 1px solid #000; border-top: 1px solid #000; text-align: center; background-color: #C0C0C0;" height="33" valign="middle" colspan="2">13. SSS NO.</font>
			</td>
			<td style="border-left: 1px solid #000; border-top: 1px solid #000; text-align: center;" colspan="3" valign="middle">
				<b><font face="Arial Narrow" color="#000000"></font></b>
				{{$employee->emp_sss ?? 'N/A'}}
			</td>
			<td style="border: 1px solid #000;" colspan="3" align="center" valign="middle" bgcolor="#C0C0C0">
				<font face="Arial Narrow" size="1" color="#000000">19. TELEPHONE NUMBER</font>
			</td>
			<td style="border: 1px solid #000;" colspan="5" align="center" valign="middle">
				<font face="Arial Narrow" size="1" color="#000000"> {{$employee->emp_telnum ?? 'N/A'}}</font>
			</td>
		</tr>
		<tr>
			<td style="border-left: 1px solid #000; border-top: 1px solid #000; text-align: center; background-color: #C0C0C0;" height="33" valign="middle" colspan="2">14. TIN NO.</font>
			</td>
			<td style="border-left: 1px solid #000; border-top: 1px solid #000; text-align: center;" colspan="3" valign="middle">
				<b><font face="Arial Narrow" color="#000000"></font></b>
				{{$employee->emp_tin ?? 'N/A'}}
			</td>
			<td style="border: 1px solid #000;" colspan="3" align="center" valign="middle" bgcolor="#C0C0C0">
				<font face="Arial Narrow" size="1" color="#000000">20. MOBILE NO.</font>
			</td>
			<td style="border: 1px solid #000;" colspan="5" align="center" valign="middle">
				<font face="Arial Narrow" size="1" color="#000000">{{$employee->emp_cnum ?? 'N/A'}}</font>
			</td>
		</tr>
	</tr>
		<td style="border-left: 1px solid #000; border-top: 1px solid #000; text-align: center; background-color: #C0C0C0;" height="33" valign="middle" colspan="2">15. AGENCY EMPLOYEE NO.</font>
		</td>
		<td style="border-left: 1px solid #000; border-top: 1px solid #000; text-align: center;" colspan="3" valign="middle">
			<b><font face="Arial Narrow" color="#000000"></font></b>
			{{$employee->emp_agency ?? 'N/A'}}</td>
		</td>
		<td style="border: 1px solid #000;" colspan="3" align="center" valign="middle" bgcolor="#C0C0C0">
			<font face="Arial Narrow" size="1" color="#000000">21. E-MAIL ADDRESS (if any)</font>
		</td>
		<td style="border: 1px solid #000;" colspan="5" align="center" valign="middle">
			<font face="Arial Narrow" size="1" color="#000000">{{$emp_acc->empmail ?? 'N/A'}}</font>
		</td>
	</tr>


	<tr>
		<td colspan="12" style="border-top: 2px solid #000000; border-left: 2px solid #000000; text-align: left;" height="22" align="left" valign="middle" bgcolor="#969696" sdnum="1033;0;@"><b><i><font face="Arial Narrow" color="#FFFFFF">II.  FAMILY BACKGROUND</font></i></b></td>
		<td style="border-top: 2px solid #000000; border-right: 2px solid #000000" align="left" valign="middle" bgcolor="#969696" sdnum="1033;0;@"><b><i><font face="Arial Narrow" color="#FFFFFF"></font></i></b></td>
		
	</tr>
	<tr>
		<td colspan="2" style="border-top: 2px solid #000000; border-left: 2px solid #000000" height="28" align="center" valign="middle" bgcolor="#C0C0C0" sdnum="1033;0;@"><font face="Arial Narrow" size="1" color="#000000">22. SPOUSE'S SURNAME</font></td>
		<td style="border-top: 2px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan="5" align="center" valign="middle"><b><font face="Arial Narrow" color="#000000"></font></b>{{$emp_spouse->spouse_lname ?? 'N/A'}}</td>
		<td style="border-top: 2px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan="4" align="left" valign="middle" bgcolor="#C0C0C0" sdnum="1033;0;@"><font face="Arial Narrow" size="1" color="#000000">23. NAME of CHILDREN  (Write full name and list all)</font></td>
		<td style="border-top: 2px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 2px solid #000000" colspan="2" align="center" valign="middle" bgcolor="#C0C0C0" sdnum="1033;0;@"><font face="Arial Narrow" size="1" color="#000000">DATE OF BIRTH (mm/dd/yyyy)</font></td>
		
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" height="28" align="left" valign="middle" bgcolor="#C0C0C0" sdnum="1033;0;@"><font face="Arial Narrow" size="1" color="#000000"></font></td>
		<td align="left" valign="middle" bgcolor="#C0C0C0" sdnum="1033;0;@"><font face="Arial Narrow" size="1" color="#000000">FIRST NAME</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan="5" align="center" valign="middle"><b><font face="Arial Narrow" color="#000000"></font></b>{{$emp_spouse->spouse_fname ?? 'N/A'}}</td>
		@php
		$emp_child = App\Models\emp_child::where('emp_count', $employee->emp_count)->first();
			@endphp
			<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan="4" align="left" valign="middle" sdnum="1033;0;@">
				{{$emp_child ? $emp_child->child_fname . ' ' . $child_mname_initial . ' ' . $emp_child->child_lname . ' ' . ($emp_child->child_xname ?? 'N/A') : 'N/A'}}
			</td>
			<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 2px solid #000000" colspan="2" align="center" valign="middle" sdnum="1033;0;@">
				{{ $emp_child ? $emp_child->child_dob ?? 'N/A' : 'N/A' }}
			</td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" height="28" align="left" valign="middle" bgcolor="#C0C0C0" sdnum="1033;0;@"><font face="Arial Narrow" size="1" color="#000000"></font></td>
		<td align="left" valign="middle" bgcolor="#C0C0C0" sdnum="1033;0;@"><font face="Arial Narrow" size="1" color="#000000">MIDDLE NAME</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan="5" align="center" valign="middle"><b><font face="Arial Narrow" color="#000000"></font></b>{{$emp_spouse->spouse_mname ?? 'N/A'}}</td>
		@php
			$emp_child = App\Models\emp_child::where('emp_count', $employee->emp_count)->skip(1)->first();
		@endphp
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan="4" align="left" valign="middle" sdnum="1033;0;@">
			{{$emp_child ? $emp_child->child_fname . ' ' . $child_mname_initial . ' ' . $emp_child->child_lname . ' ' . ($emp_child->child_xname ?? 'N/A') : 'N/A'}}
		</td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 2px solid #000000" colspan="2" align="center" valign="middle" sdnum="1033;0;@">
			{{ $emp_child ? $emp_child->child_dob ?? 'N/A' : 'N/A' }}
		</td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 2px solid #000000" height="28" align="left" valign=middle bgcolor="#C0C0C0" sdnum="1033;0;@"><font face="Arial Narrow" size=1 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=middle bgcolor="#C0C0C0" sdnum="1033;0;@"><font face="Arial Narrow" size=1 color="#000000">OCCUPATION</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 align="center" valign=middle><b><font face="Arial Narrow" color="#000000"><br></font></b>{{$emp_spouse->spouse_occup ?? 'N/A'}}</td>
		@php
			$emp_child = App\Models\emp_child::where('emp_count', $employee->emp_count)->skip(2)->first();
		@endphp
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan="4" align="left" valign="middle" sdnum="1033;0;@">
			{{$emp_child ? $emp_child->child_fname . ' ' . $child_mname_initial . ' ' . $emp_child->child_lname . ' ' . ($emp_child->child_xname ?? 'N/A') : 'N/A'}}
		</td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 2px solid #000000" colspan="2" align="center" valign="middle" sdnum="1033;0;@">
			{{ $emp_child ? $emp_child->child_dob ?? 'N/A' : 'N/A' }}
		</td>
	</tr>
	
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 2px solid #000000" height="28" align="left" valign=middle bgcolor="#C0C0C0" sdnum="1033;0;@"><font face="Arial Narrow" size=1 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=middle bgcolor="#C0C0C0" sdnum="1033;0;@"><font face="Arial Narrow" size=1 color="#000000">EMPLOYER/BUSINESS NAME</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 align="center" valign=middle><b><font face="Arial Narrow" color="#000000"><br></font></b>{{$emp_spouse->spouse_office ?? 'N/A'}}</td>
		@php
			$emp_child = App\Models\emp_child::where('emp_count', $employee->emp_count)->skip(3)->first();
		@endphp
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan="4" align="left" valign="middle" sdnum="1033;0;@">
			{{$emp_child ? $emp_child->child_fname . ' ' . $child_mname_initial . ' ' . $emp_child->child_lname . ' ' . ($emp_child->child_xname ?? 'N/A') : 'N/A'}}
		</td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 2px solid #000000" colspan="2" align="center" valign="middle" sdnum="1033;0;@">
			{{ $emp_child ? $emp_child->child_dob ?? 'N/A' : 'N/A' }}
		</td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 2px solid #000000" height="28" align="left" valign=middle bgcolor="#C0C0C0" sdnum="1033;0;@"><font face="Arial Narrow" size=1 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=middle bgcolor="#C0C0C0" sdnum="1033;0;@"><font face="Arial Narrow" size=1 color="#000000">BUSINESS ADDRESS</font></td>	
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 align="center" valign=middle><b><font face="Arial Narrow" color="#000000"><br></font></b>{{$emp_spouse->spouse_busadd ?? 'N/A'}}</td>
		@php
			$emp_child = App\Models\emp_child::where('emp_count', $employee->emp_count)->skip(4)->first();
		@endphp
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan="4" align="left" valign="middle" sdnum="1033;0;@">
			{{$emp_child ? $emp_child->child_fname . ' ' . $child_mname_initial . ' ' . $emp_child->child_lname . ' ' . ($emp_child->child_xname ?? 'N/A') : 'N/A'}}
		</td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 2px solid #000000" colspan="2" align="center" valign="middle" sdnum="1033;0;@">
			{{ $emp_child ? $emp_child->child_dob ?? 'N/A' : 'N/A' }}
		</td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-left: 2px solid #000000" height="28" align="left" valign=middle bgcolor="#C0C0C0" sdnum="1033;0;@"><font face="Arial Narrow" size=1 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000" align="left" valign=middle bgcolor="#C0C0C0" sdnum="1033;0;@"><font face="Arial Narrow" size=1 color="#000000">TELEPHONE NO.</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 align="center" valign=middle><b><font face="Arial Narrow" color="#000000"><br></font></b>{{$emp_spouse->spouse_tel ?? 'N/A'}}</td>
		@php
			$emp_child = App\Models\emp_child::where('emp_count', $employee->emp_count)->skip(5)->first();
		@endphp
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan="4" align="left" valign="middle" sdnum="1033;0;@">
			{{$emp_child ? $emp_child->child_fname . ' ' . $child_mname_initial . ' ' . $emp_child->child_lname . ' ' . ($emp_child->child_xname ?? 'N/A') : 'N/A'}}
		</td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 2px solid #000000" colspan="2" align="center" valign="middle" sdnum="1033;0;@">
			{{ $emp_child ? $emp_child->child_dob ?? 'N/A' : 'N/A' }}
		</td>
	</tr>
	<tr>
		<td colspan="2" style="border-top: 2px solid #000000; border-left: 2px solid #000000" height="28" align="center" valign="middle" bgcolor="#C0C0C0" sdnum="1033;0;@"><font face="Arial Narrow" size=1>24. FATHER'S SURNAME</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 align="center" valign=middle><b><font face="Arial Narrow" color="#000000"><br></font></b>{{$emp_father->father_lname ?? 'N/A'}}</td>
		@php
			$emp_child = App\Models\emp_child::where('emp_count', $employee->emp_count)->skip(6)->first();
		@endphp
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan="4" align="left" valign="middle" sdnum="1033;0;@">
			{{$emp_child ? $emp_child->child_fname . ' ' . $child_mname_initial . ' ' . $emp_child->child_lname . ' ' . ($emp_child->child_xname ?? 'N/A') : 'N/A'}}
		</td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 2px solid #000000" colspan="2" align="center" valign="middle" sdnum="1033;0;@">
			{{ $emp_child ? $emp_child->child_dob ?? 'N/A' : 'N/A' }}
		</td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" height="28" align="left" valign=middle bgcolor="#C0C0C0" sdnum="1033;0;@"><font face="Arial Narrow" size=1 color="#000000"><br></font></td>
		<td align="left" valign=middle bgcolor="#C0C0C0" sdnum="1033;0;@"><font face="Arial Narrow" size=1 color="#000000">FIRST NAME</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=middle><b><font face="Arial Narrow" color="#000000"><br></font></b>{{$emp_father->father_fname ?? 'N/A'}}</td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left" valign=top bgcolor="#C0C0C0"><font face="Arial Narrow" size=1 color="#000000">NAME EXTENSION (JR., SR)  <br> {{$emp_father->father_xname ?? 'N/A'}}     </font></td>
		@php
			$emp_child = App\Models\emp_child::where('emp_count', $employee->emp_count)->skip(7)->first();
		@endphp
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan="4" align="left" valign="middle" sdnum="1033;0;@">
			{{$emp_child ? $emp_child->child_fname . ' ' . $child_mname_initial . ' ' . $emp_child->child_lname . ' ' . ($emp_child->child_xname ?? 'N/A') : 'N/A'}}
		</td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 2px solid #000000" colspan="2" align="center" valign="middle" sdnum="1033;0;@">
			{{ $emp_child ? $emp_child->child_dob ?? 'N/A' : 'N/A' }}
		</td>
	</tr>
	<tr>
		<td style="border-bottom: 1px solid #000000; border-left: 2px solid #000000" height="28" align="left" valign=middle bgcolor="#C0C0C0" sdnum="1033;0;@"><font face="Arial Narrow" size=1 color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000" align="left" valign=middle bgcolor="#C0C0C0" sdnum="1033;0;@"><font face="Arial Narrow" size=1 color="#000000">MIDDLE NAME</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 align="center" valign=middle><b><font face="Arial Narrow" color="#000000"><br></font></b>{{$emp_father->father_mname ?? 'N/A'}}</td>
		@php
			$emp_child = App\Models\emp_child::where('emp_count', $employee->emp_count)->skip(8)->first();
		@endphp
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan="4" align="left" valign="middle" sdnum="1033;0;@">
			{{$emp_child ? $emp_child->child_fname . ' ' . $child_mname_initial . ' ' . $emp_child->child_lname . ' ' . ($emp_child->child_xname ?? 'N/A') : 'N/A'}}
		</td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 2px solid #000000" colspan="2" align="center" valign="middle" sdnum="1033;0;@">
			{{ $emp_child ? $emp_child->child_dob ?? 'N/A' : 'N/A' }}
		</td>
	</tr>
	<tr>
		<td colspan="2" style="border-top: 2px solid #000000; border-left: 2px solid #000000" height="28" align="center" valign="middle" bgcolor="#C0C0C0" sdnum="1033;0;@"><font face="Arial Narrow" size=1>25. MOTHER'S MAIDEN NAME</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 align="center" valign=middle><b><font face="Arial Narrow" color="#000000"><br></font></b>{{$emp_mother->mother_maiden ?? 'N/A'}}</td>
		@php
			$emp_child = App\Models\emp_child::where('emp_count', $employee->emp_count)->skip(9)->first();
		@endphp
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan="4" align="left" valign="middle" sdnum="1033;0;@">
			{{$emp_child ? $emp_child->child_fname . ' ' . $child_mname_initial . ' ' . $emp_child->child_lname . ' ' . ($emp_child->child_xname ?? 'N/A') : 'N/A'}}
		</td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 2px solid #000000" colspan="2" align="center" valign="middle" sdnum="1033;0;@">
			{{ $emp_child ? $emp_child->child_dob ?? 'N/A' : 'N/A' }}
		</td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" height="28" align="left" valign=middle bgcolor="#C0C0C0" sdnum="1033;0;@"><font face="Arial Narrow" size=1 color="#000000"><br></font></td>
		<td align="left" valign=middle bgcolor="#C0C0C0" sdnum="1033;0;@"><font face="Arial Narrow" size=1 color="#000000">SURNAME</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 align="center" valign=middle bgcolor="#FFFFFF" sdnum="1033;0;@"><b><font face="Arial Narrow" color="#000000"><br></font></b>{{$emp_mother->mother_lname ?? 'N/A'}}</td>
		@php
			$emp_child = App\Models\emp_child::where('emp_count', $employee->emp_count)->skip(10)->first();
		@endphp
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan="4" align="left" valign="middle" sdnum="1033;0;@">
			{{$emp_child ? $emp_child->child_fname . ' ' . $child_mname_initial . ' ' . $emp_child->child_lname . ' ' . ($emp_child->child_xname ?? 'N/A') : 'N/A'}}
		</td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 2px solid #000000" colspan="2" align="center" valign="middle" sdnum="1033;0;@">
			{{ $emp_child ? $emp_child->child_dob ?? 'N/A' : 'N/A' }}
		</td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" height="28" align="left" valign=middle bgcolor="#C0C0C0" sdnum="1033;0;@"><font face="Arial Narrow" size=1 color="#000000"><br></font></td>
		<td align="left" valign=middle bgcolor="#C0C0C0" sdnum="1033;0;@"><font face="Arial Narrow" size=1 color="#000000">FIRST NAME</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 align="center" valign=middle bgcolor="#FFFFFF" sdnum="1033;0;@"><b><font face="Arial Narrow" color="#000000"><br></font></b>{{$emp_mother->mother_fname ?? 'N/A'}}</td>
		@php
			$emp_child = App\Models\emp_child::where('emp_count', $employee->emp_count)->skip(11)->first();
		@endphp
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan="4" align="left" valign="middle" sdnum="1033;0;@">
			{{$emp_child ? $emp_child->child_fname . ' ' . $child_mname_initial . ' ' . $emp_child->child_lname . ' ' . ($emp_child->child_xname ?? 'N/A') : 'N/A'}}
		</td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 2px solid #000000" colspan="2" align="center" valign="middle" sdnum="1033;0;@">
			{{ $emp_child ? $emp_child->child_dob ?? 'N/A' : 'N/A' }}
		</td>
	</tr>
	<tr>
		<td style="border-bottom: 2px solid #000000; border-left: 2px solid #000000" height="28" align="left" valign=middle bgcolor="#C0C0C0" sdnum="1033;0;@"><font face="Arial Narrow" size=1 color="#000000"><br></font></td>
		<td style="border-bottom: 2px solid #000000" align="left" valign=middle bgcolor="#C0C0C0" sdnum="1033;0;@"><font face="Arial Narrow" size=1 color="#000000">MIDDLE NAME</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 align="center" valign=middle sdnum="1033;0;@"><b><font face="Arial Narrow" color="#000000"><br></font></b>{{$emp_mother->mother_mname ?? 'N/A'}}</td>
		<td style="border-top: 1px solid #000000; border-bottom: 2px solid #000000; border-right: 2px solid #000000" colspan=6 align="center" valign=middle bgcolor="#C0C0C0" sdnum="1033;0;@"><b><i><font face="Arial Narrow" size=1 color="#FF0000">(Continue on separate sheet if necessary)</font></i></b></td>
	</tr>

	<tr>
		<th colspan="13" class="header" >III.  EDUCATIONAL BACKGROUND</th>
	</tr>
	<tr>
		<th style="border: 1px solid #000000;" bgcolor="#C0C0C0" colspan="2" style="font-size: 9px">26. LEVEL</th>
		<th style="border: 1px solid #000000;" bgcolor="#C0C0C0" colspan="2" style="font-size: 9px">RATING<br>NAME OF SCHOOL (Write in full)</th>
		<th style="border: 1px solid #000000;" bgcolor="#C0C0C0" colspan="2" style="font-size: 9px">BASIC EDUCATION/DEGREE/COURSE (Write in full)</th>
		<th style="border: 1px solid #000000;" bgcolor="#C0C0C0" colspan="2" style="font-size: 9px">PERIOD OF ATTENDANCE</th>
		<th style="border: 1px solid #000000;" bgcolor="#C0C0C0" colspan="2" style="font-size: 9px">HIGHEST LEVEL/ UNITS EARNED
			(if not graduated)</th>
		<th style="border: 1px solid #000000; font-size: 9px" bgcolor="#C0C0C0">YEAR GRADUATED</th>
		<th style="border: 1px solid #000000;" bgcolor="#C0C0C0" colspan="2" style="font-size: 9px">SCHOLARSHIP/ ACADEMIC HONORS RECEIVED</th>
	</tr>
	<tr>
		<th style="border: 1px solid #000000;" bgcolor="#C0C0C0" colspan="2"></th>
		<th style="border: 1px solid #000000;" bgcolor="#C0C0C0" colspan="2"></th>
		<th style="border: 1px solid #000000;" bgcolor="#C0C0C0" colspan="2"></th>
		<th style="border: 1px solid #000000; font-size: 8px" bgcolor="#C0C0C0">NUMBER</th>
		<th style="border: 1px solid #000000; font-size: 8px" bgcolor="#C0C0C0">Date of Validity</th>
		<th style="border: 1px solid #000000;" bgcolor="#C0C0C0" colspan="2"></th>
		<th style="border: 1px solid #000000;" bgcolor="#C0C0C0"></th>
		<th style="border: 1px solid #000000;" bgcolor="#C0C0C0" colspan="2"></th>

	</tr>
<tbody>
</tr>
@php
$educations = App\Models\Education::where('empid', $employee->empid)->get();
@endphp
@foreach($educations as $education)
	@if($education->educ_level == 1)
	<tr>
		<td colspan="2" style="border: 1px solid #000000; height: 20px;" align="left" valign="middle">ELEMENTARY</td>
		<td colspan="2" style="border: 1px solid #000000; height: 20px;" align="left" valign="middle">{{$education->educ_school ?? 'N/A'}}</td>
		<td colspan="2" style="border: 1px solid #000000; height: 20px;" align="left" valign="middle">{{$education->educ_degree ?? 'N/A'}}</td>
		<td style="border: 1px solid #000000; height: 20px;" align="left" valign="middle">{{$education->educ_from ?? 'N/A'}}</td>
		<td style="border: 1px solid #000000; height: 20px;" align="left" valign="middle">{{$education->educ_year_grad ?? 'N/A'}}</td>
		<td colspan="2" style="border: 1px solid #000000; height: 20px;" align="left" valign="middle">{{$education->educ_hl_earned ?? 'N/A'}}</td>
		<td style="border: 1px solid #000000; height: 20px;" align="left" valign="middle">{{$education->educ_year_grad ?? 'N/A'}}</td>
		<td colspan="2" style="border: 1px solid #000000; height: 20px;" align="left" valign="middle">{{$education->educ_academic_honor ?? 'N/A'}}</td>
	</tr>
	@elseif($education->educ_level == 2)
	<tr>
		<td  colspan="2" style="border: 1px solid #000000; height: 20px;" align="left" valign="middle">SECONDARY</td>
		<td colspan="2" style="border: 1px solid #000000; height: 20px;" align="left" valign="middle">{{$education->educ_school ?? 'N/A'}}</td>
		<td colspan="2" style="border: 1px solid #000000; height: 20px;" align="left" valign="middle">{{$education->educ_degree ?? 'N/A'}}</td>
		<td style="border: 1px solid #000000; height: 20px;" align="left" valign="middle">{{$education->educ_from ?? 'N/A'}}</td>
		<td style="border: 1px solid #000000; height: 20px;" align="left" valign="middle">{{$education->educ_year_grad ?? 'N/A'}}</td>
		<td colspan="2" style="border: 1px solid #000000; height: 20px;" align="left" valign="middle">{{$education->educ_hl_earned ?? 'N/A'}}</td>
		<td style="border: 1px solid #000000; height: 20px;" align="left" valign="middle">{{$education->educ_year_grad ?? 'N/A'}}</td>
		<td colspan="2" style="border: 1px solid #000000; height: 20px;" align="left" valign="middle">{{$education->educ_academic_honor ?? 'N/A'}}</td>
	</tr>
	@elseif(in_array($education->educ_level, [7, 8, 9]))
	<tr>
		<td  colspan="2" style="border: 1px solid #000000; height: 20px;" align="left" valign="middle">VOCATIONAL / TRADE COURSE</td>
		<td colspan="2" style="border: 1px solid #000000; height: 20px;" align="left" valign="middle">{{$education->educ_school ?? 'N/A'}}</td>
		<td colspan="2" style="border: 1px solid #000000; height: 20px;" align="left" valign="middle">{{$education->educ_degree ?? 'N/A'}}</td>
		<td style="border: 1px solid #000000; height: 20px;" align="left" valign="middle">{{$education->educ_from ?? 'N/A'}}</td>
		<td style="border: 1px solid #000000; height: 20px;" align="left" valign="middle">{{$education->educ_year_grad ?? 'N/A'}}</td>
		<td colspan="2" style="border: 1px solid #000000; height: 20px;" align="left" valign="middle">{{$education->educ_hl_earned ?? 'N/A'}}</td>
		<td style="border: 1px solid #000000; height: 20px;" align="left" valign="middle">{{$education->educ_year_grad ?? 'N/A'}}</td>
		<td colspan="2" style="border: 1px solid #000000; height: 20px;" align="left" valign="middle">{{$education->educ_academic_honor ?? 'N/A'}}</td>
	</tr>
	@elseif(in_array($education->educ_level, [3, 4]))
	<tr>
		<td  colspan="2" style="border: 1px solid #000000; height: 20px;" align="left" valign="middle">COLLEGE</td>
		<td colspan="2" style="border: 1px solid #000000; height: 20px;" align="left" valign="middle">{{$education->educ_school ?? 'N/A'}}</td>
		<td colspan="2" style="border: 1px solid #000000; height: 20px;" align="left" valign="middle">{{$education->educ_degree ?? 'N/A'}}</td>
		<td style="border: 1px solid #000000; height: 20px;" align="left" valign="middle">{{$education->educ_from ?? 'N/A'}}</td>
		<td style="border: 1px solid #000000; height: 20px;" align="left" valign="middle">{{$education->educ_year_grad ?? 'N/A'}}</td>
		<td colspan="2" style="border: 1px solid #000000; height: 20px;" align="left" valign="middle">{{$education->educ_hl_earned ?? 'N/A'}}</td>
		<td style="border: 1px solid #000000; height: 20px;" align="left" valign="middle">{{$education->educ_year_grad ?? 'N/A'}}</td>
		<td colspan="2" style="border: 1px solid #000000; height: 20px;" align="left" valign="middle">{{$education->educ_academic_honor ?? 'N/A'}}</td>
	</tr>
	@elseif(in_array($education->educ_level, [5, 6]))
	<tr>
		<td  colspan="2" style="border: 1px solid #000000; height: 20px;" align="left" valign="middle">GRADUATE STUDIES</td>
		<td colspan="2" style="border: 1px solid #000000; height: 20px;" align="left" valign="middle">{{$education->educ_school ?? 'N/A'}}</td>
		<td colspan="2" style="border: 1px solid #000000; height: 20px;" align="left" valign="middle">{{$education->educ_degree ?? 'N/A'}}</td>
		<td style="border: 1px solid #000000; height: 20px;" align="left" valign="middle">{{$education->educ_from ?? 'N/A'}}</td>
		<td style="border: 1px solid #000000; height: 20px;" align="left" valign="middle">{{$education->educ_year_grad ?? 'N/A'}}</td>
		<td colspan="2" style="border: 1px solid #000000; height: 20px;" align="left" valign="middle">{{$education->educ_hl_earned ?? 'N/A'}}</td>
		<td style="border: 1px solid #000000; height: 20px;" align="left" valign="middle">{{$education->educ_year_grad ?? 'N/A'}}</td>
		<td colspan="2" style="border: 1px solid #000000; height: 20px;" align="left" valign="middle">{{$education->educ_academic_honor ?? 'N/A'}}</td>
	</tr>
	@endif
@endforeach
    <tr>
        <td colspan="2" style="border: 1px solid #000000; height: 20px;" align="left" valign="middle"></td>
        <td colspan="2" style="border: 1px solid #000000; height: 20px;" align="left" valign="middle"></td>
        <td colspan="2" style="border: 1px solid #000000; height: 20px;" align="left" valign="middle"></td>
        <td style="border: 1px solid #000000; height: 20px;" align="left" valign="middle"></td>
        <td style="border: 1px solid #000000; height: 20px;" align="left" valign="middle"></td>
        <td colspan="2" style="border: 1px solid #000000; height: 20px;" align="left" valign="middle"></td>
        <td style="border: 1px solid #000000; height: 20px;" align="left" valign="middle"></td>
        <td colspan="2" style="border: 1px solid #000000; height: 20px;" align="left" valign="middle"></td>

    </tr>
    <tr>
        <td colspan="2" style="border: 1px solid #000000; height: 20px;" align="left" valign="middle"></td>
        <td colspan="2" style="border: 1px solid #000000; height: 20px;" align="left" valign="middle"></td>
        <td colspan="2" style="border: 1px solid #000000; height: 20px;" align="left" valign="middle"></td>
        <td style="border: 1px solid #000000; height: 20px;" align="left" valign="middle"></td>
        <td style="border: 1px solid #000000; height: 20px;" align="left" valign="middle"></td>
        <td colspan="2" style="border: 1px solid #000000; height: 20px;" align="left" valign="middle"></td>
        <td style="border: 1px solid #000000; height: 20px;" align="left" valign="middle"></td>
        <td colspan="2" style="border: 1px solid #000000; height: 20px;" align="left" valign="middle"></td>

    </tr>
    <tr>
        <td colspan="2" style="border: 1px solid #000000; height: 20px;" align="left" valign="middle"></td>
        <td colspan="2" style="border: 1px solid #000000; height: 20px;" align="left" valign="middle"></td>
        <td colspan="2" style="border: 1px solid #000000; height: 20px;" align="left" valign="middle"></td>
        <td style="border: 1px solid #000000; height: 20px;" align="left" valign="middle"></td>
        <td style="border: 1px solid #000000; height: 20px;" align="left" valign="middle"></td>
        <td colspan="2" style="border: 1px solid #000000; height: 20px;" align="left" valign="middle"></td>
        <td style="border: 1px solid #000000; height: 20px;" align="left" valign="middle"></td>
        <td colspan="2" style="border: 1px solid #000000; height: 20px;" align="left" valign="middle"></td>

    </tr>
</tbody>


<tr>
	<td style="border: 2px solid #000000;" colspan="3" height="37" align="center" valign="middle" bgcolor="#C0C0C0">
		<b><i><font face="Arial Narrow">SIGNATURE</font></i></b>
	</td>
	<td style="border: 2px solid #000000;" colspan="5" align="center" valign="middle">
		<b><i><font face="Arial Narrow"><br></font></i></b>
	</td>
	<td style="border: 2px solid #000000;" align="center" valign="middle" bgcolor="#C0C0C0">
		<b><i><font face="Arial Narrow">DATE</font></i></b>
	</td>
	<td colspan="4" style=" border-right: 1px solid #000000;" align="left" valign="middle">
		<b><i><font face="Arial Narrow" size="1">{{ date('F d, Y') }}</font></i></b>
	</td>
</tr>

<tr>
	<td style="border-top: 2px solid #000000;" colspan="13" height="12" align="right" valign="middle" bgcolor="#FFFFFF">
		<i><font face="Arial Narrow" size="1" color="#000000">CS FORM 212 (Revised 2017), Page 1 of 4</font></i>
	</td>
</tr>
</table>
</body>

</html>
