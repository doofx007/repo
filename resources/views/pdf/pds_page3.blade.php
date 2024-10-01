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
		#head {
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
        <tr>
            <th class="header" colspan="13" height="30"><i>VI. VOLUNTARY WORK OR INVOLVEMENT IN CIVIC / NON-GOVERNMENT / PEOPLE / VOLUNTARY ORGANIZATION/S</i></th>
        </tr>
        <tr>
            <th id="head" colspan="5" rowspan="3" bgcolor="#C0C0C0">29. NAME & ADDRESS OF ORGANIZATION (Write in full)</th>
            <th id="head" colspan="4" rowspan="2" bgcolor="#C0C0C0">INCLUSIVE DATES (mm/dd/yyyy)</th>
            <th id="head" rowspan="3" bgcolor="#C0C0C0">NUMBER OF HOURS</th>
            <th id="head" colspan="3" rowspan="3" bgcolor="#C0C0C0">POSITION / NATURE OF WORK</th>
        </tr>
        <tr></tr>
        <tr>
            <th id="head" colspan="2" bgcolor="#C0C0C0">From</th>
            <th id="head" colspan="2" bgcolor="#C0C0C0">To</th>
        </tr>
        <tbody>
        @php
            $emp_vol = App\Models\emp_voluntary::where('empid', $employee->empid)->get();
        @endphp
            @foreach($emp_vol as $emp_voluntary)
        <tr>
            <td colspan="5" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle">{{ ($emp_voluntary->vol_name ?? 'N/A') }} <br> {{($emp_voluntary->vol_add ?? 'N/A') }}</td>
            <td colspan="2" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle">{{$emp_voluntary->vol_fr ?? 'N/A'}}</td>
            <td colspan="2" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle">{{$emp_voluntary->vol_to ?? 'N/A'}}</td>
            <td style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle">{{$emp_voluntary->vol_hrs ?? 'N/A'}}</td>
            <td colspan="3" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle">{{$emp_voluntary->vol_pos  ?? 'N/A'}}</td>
        </tr>
        @endforeach
        <tr>
            <td colspan="5" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
            <td colspan="2" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
            <td colspan="2" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
            <td style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
            <td colspan="3" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
        </tr>
        <tr>
            <td colspan="5" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
            <td colspan="2" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
            <td colspan="2" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
            <td style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
            <td colspan="3" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
        </tr>
        <tr>
            <td colspan="5" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
            <td colspan="2" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
            <td colspan="2" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
            <td style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
            <td colspan="3" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
        </tr>
        <tr>
            <td style="border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" colspan="13" height="13" align="center" valign="middle" bgcolor="#C0C0C0">
                <b><i><font face="Arial Narrow" size="1" color="#FF0000">(Continue on separate sheet if necessary)</font></i></b>
            </td>
        </tr>
        </tbody>
        <tr>
            <th class="header" colspan="13" height="30">VII. LEARNING AND DEVELOPMENT (L&D) INTERVENTIONS/TRAINING PROGRAMS ATTENDED</th>
        </tr>
        <tr>
            <th id="head" colspan="4" rowspan="3" bgcolor="#C0C0C0">30. TITLE OF LEARNING AND DEVELOPMENT INTERVENTIONS/TRAINING PROGRAMS (Write in full)</th>
            <th id="head" colspan="4" rowspan="2" bgcolor="#C0C0C0">INCLUSIVE DATES OF ATTENDANCE (mm/dd/yyyy)</th>
            <th id="head" rowspan="3" bgcolor="#C0C0C0">NUMBER OF HOURS</th>
            <th id="head" rowspan="3" bgcolor="#C0C0C0">Type of LD (Managerial/ Supervisory/ Technical/etc)</th>
            <th id="head" colspan="3" rowspan="3" bgcolor="#C0C0C0">CONDUCTED/ SPONSORED BY (Write in full)</th>
        </tr>
        <tr></tr>
        <tr>
            <td id="head" colspan="2" height="18" bgcolor="#C0C0C0">From</td>
            <td id="head" colspan="2" bgcolor="#C0C0C0">To</td>
        </tr>
        <tbody> 
            @php
            $emp_learndev = App\Models\emp_learning::where('empid', $employee->empid)->get();
        @endphp
            @foreach($emp_learndev as $emp_learning)
          <tr>
              <td colspan="4" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle">{{$emp_learning->learn_title ?? 'N/A'}}</td>
              <td colspan="2" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle">{{$emp_learning->learn_fr ?? 'N/A'}}</td>
              <td colspan="2" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle">{{$emp_learning->learn_to ?? 'N/A'}}</td>
              <td style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle">{{$emp_learning->learn_hrs ?? 'N/A'}}</td>
              <td style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle">{{$emp_learning->learn_type  ?? 'N/A'}}</td>
              <td colspan="3" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle">{{$emp_learning->learn_con  ?? 'N/A'}}</td>
          </tr>
          @endforeach
            <tr>
                <td colspan="4" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
                <td colspan="2" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
                <td colspan="2" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
                <td style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
                <td style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
                <td colspan="3" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle">
                </td>
            </tr>
            <tr>
                <td colspan="4" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
                <td colspan="2" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
                <td colspan="2" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
                <td style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
                <td style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
                <td colspan="3" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle">
                </td>
            </tr>
            <tr>
                <td colspan="4" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
                <td colspan="2" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
                <td colspan="2" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
                <td style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
                <td style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle"></td>
                <td colspan="3" style="height: 20px; border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000;" align="left" valign="middle">
                </td>
            </tr>
        </tbody>
	<tr>
		<td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=13 height="21" align="center" valign=middle bgcolor="#C0C0C0" sdnum="1033;0;@"><b><i><font face="Arial Narrow" size=1 color="#FF0000">(Continue on separate sheet if necessary)</font></i></b></td>
		</tr>
				<tr>
                    <th class="header" colspan="13" height="30"><i>VIII. OTHER INFORMATION</i></th>
				</tr>
				<tr>
					<th id="head" colspan="4" style="border-top: 2px solid #000000; border-bottom: 1px solid #000000; background-color: #C0C0C0; text-align: center; vertical-align: middle;">
						<font face="Arial Narrow" size="1">31. SPECIAL SKILLS and HOBBIES</font>
					</th>
					<th id="head" colspan="5" style="border-top: 2px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000; text-align: center; vertical-align: middle; background-color: #C0C0C0;">
						<font face="Arial Narrow" size="1">32. NON-ACADEMIC DISTINCTIONS / RECOGNITION (Write in full)</font>
					</th>
					<th id="head" colspan="4"  style="border-top: 2px solid #000000; border-bottom: 1px solid #000000; border-right: 2px solid #000000; text-align: center; vertical-align: middle; background-color: #C0C0C0;">
						<font face="Arial Narrow" size="1">33. MEMBERSHIP IN ASSOCIATION/ORGANIZATION (Write in full)</font>
					</th>
				</tr>
            <tbody>
                @php
                $emp_skill = App\Models\emp_skills::where('empid', $employee->empid)->get();
                $emp_organization = App\Models\emp_org::where('empid', $employee->empid)->get();
                $emp_recognition = App\Models\emp_recog::where('empid', $employee->empid)->get();
                $max_count = max($emp_skill->count(), $emp_organization->count(), $emp_recognition->count());
            @endphp
            
            @for ($i = 0; $i < $max_count; $i++)
                <tr>
                    <td colspan="4" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 2px solid #000000; border-right: 1px solid #000000; height: 33px; text-align: center; vertical-align: middle;">{{ $emp_skill[$i]->skill ?? 'N/A' }}</td>
                    <td colspan="5" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; text-align: center; vertical-align: middle; font-size: 8px">{{ $emp_recognition[$i]->recog_name ?? 'N/A' }}</td>
                    <td colspan="4" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; text-align: center; vertical-align: middle;">{{ $emp_organization[$i]->org_name ?? 'N/A' }}</td>
                </tr>
            @endfor  
  
				<tr>
					<td colspan="4" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 2px solid #000000; border-right: 1px solid #000000; height: 33px; text-align: center; vertical-align: middle;">
						<b><font face="Arial Narrow"></font></b>
					</td>
					<td colspan="5" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; text-align: center; vertical-align: middle;">
						<b><font face="Arial Narrow"></font></b>
					</td>
					<td colspan="4" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 2px solid #000000; text-align: center; vertical-align: middle;">
						<b><font face="Arial Narrow"></font></b>
					</td>
				</tr>
            </tbody>
				<tr>
					<td colspan="13" style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000; height: 15px; background-color: #C0C0C0; text-align: center; vertical-align: middle;">
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
                    <td style="border: 2px solid #000000;" align="center" valign="middle" bgcolor="#C0C0C0">
                        <b><i><font face="Arial Narrow">DATE</font></i></b>
                    </td>
                    <td colspan="4" style=" border-right: 1px solid #000000;" align="left" valign="middle">
                        <b><i><font face="Arial Narrow" size="1">{{ date('F d, Y') }}</font></i></b>
                    </td>
                </tr>
				<tr>
					<td colspan="11" style="height: 13px; text-align: right; vertical-align: bottom;">
						<i><font face="Arial" size="1">CS FORM 212 (Revised 2017), Page 3 of 4</font></i>
					</td>
				</tr>
			</table>
		</body>
</html>
