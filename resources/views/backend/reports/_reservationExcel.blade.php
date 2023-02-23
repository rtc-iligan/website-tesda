<table>
	<thead>
		<tr>
		<!-- <img width="80" height="80" src="{{asset('img/tesdanew.png')}}" style="position:absolute;left:40px;top:5px;" alt="">  -->
		</tr>
		<tr>
			<td colspan="10" style="text-align: center; font-size: 14;">
				<b>
                   Regional Training Center - Iligan
			   	</b>
			</td>
		</tr>
		<tr>
			<td colspan="10" style="text-align: center; font-size: 14;">
				<b>
			   		Maria Cristina, Iligan City 9217
			   	</b>
			</td>
		</tr>
		
		<tr>
			<td colspan="8" style="text-align: right;">
				<b>
					Date Generated:
				</b>
			</td>
		</tr>
		<tr>
			<td colspan="8" style="text-align: right;">
				<b>{{ date('M d, Y h:i A', strtotime(Carbon\Carbon::now())) }}</b>
			</td>
		</tr>	
	</thead>
</table>
<table>
	<thead>
		<tr>
			<th colspan="8" style="text-align: center; font-size: 15; border: 1px solid black;"><b>Reservation List - {{$request->first()->res_qualification ?? ''}} - {{$request->first()->res_update ?? ''}}</b></th>
		</tr>
		<tr>
            <th>#</th>
            <th>Full Name</th>
			<th>Age</th>
			<th>Gender</th>
            <th>Contact Number</th>
            <th>Address</th>
			<th>Educational Attainment</th>
			<th>Date Reserved</th>
		</tr>
	</thead>
	<tbody>
       
            @foreach($request as $i => $attendance)
                <tr class="">
                    <td>{{ $i+1}}</td>
                    <td>
					{{strtoupper($attendance->res_lname ?? '')}},  {{strtoupper($attendance->res_fname ?? '')}} {{strtoupper(substr($attendance->res_mname,0,1 ?? ''))}}. 
                    </td>
					<td style="text-align: center;">
                        {{$attendance->res_age ?? ''}}
                    </td>
					<td style="text-align: center;">
                        {{strtoupper($attendance->res_gender ?? '')}}
                    </td>
                    <td style="text-align: center;"> 
                        {{$attendance->res_contact ?? ''}}
                    </td>
                    <td>
                        {{strtoupper($attendance->res_barangay ?? '')}}, {{strtoupper($attendance->res_city ?? '')}} {{strtoupper($attendance->res_province ?? '')}} 
                    </td>
					<td>
                        {{strtoupper($attendance->res_educational ?? '')}}
                    </td>
					<td style="text-align: center;">
                        {{$attendance->registeredDate ?? ''}}
                    </td>
                </tr>
            @endforeach
      
        </tbody>
        <tfoot>
        	<tr>
        	    {{-- <td colspan="4" style="text-align: right; font-size: 12; border: 1px solid black;">TOTAL</td>
        	    <td style="text-align: right; font-size: 12; border: 1px solid black;">{{ number_format($total, 2) }}</td>
        	    <td style="text-align: right; font-size: 12; border: 1px solid black;">{{ number_format($total_balance, 2) }}</td>
        	    <td style="text-align: right; font-size: 12; border: 1px solid black;">{{ number_format($total_paid, 2) }}</td> --}}
        	</tr>
        </tfoot>
</table>
<table>
	<tfoot>
		<tr>
			<td colspan="8" style="text-align: right;">
				<b>
					Generated by: 
				</b>
			</td>
		</tr>
		<tr>
			<td colspan="8" style="text-align: right;">
				<b>
				{{ Auth::getUser()->name }}
				</b>
			</td>
		</tr>
	</tfoot>
</table>