@extends('layouts.admin')



@section('content')
<br><br>
    <H1>Latest Appointments</H1>
    <table  class="table table-dark table-striped mt-3">
        <thead>    <tr>
    <th># SN</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone No.</th>
    <th>Lawyer Name</th>
    <th>Date</th>
    <th>Issue</th>
    <th>Status</th>
</tr>
</thead>
<tbody>
        @foreach ($appointments as $appointment )    
        <tr >
        <td  >{{$appointment->id}}</td>
        <td  >{{$appointment->Name}}</td>
        <td > {{$appointment->Email}}</td>
        <td  >{{$appointment->Phone}}</td>
        <td >{{$appointment->Lawyer_Id}}</td>
        <td >{{$appointment->Date}}</td>
        <td  >{{$appointment->Issue}}</td>
        <td  >This Appointment has <b>{{$appointment->status}}</b></td>
           </tr>
    @endforeach
    
</tbody>
</table>

@endsection