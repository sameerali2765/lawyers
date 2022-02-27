@extends('layouts.admin')

@section('content')
<br><br><br>
<h3 style="padding-left: 50px;display:inline">Clients </h3>
<br><br>
<table  class="table table-dark table-striped mt-3">
    <thead>
    <tr>
      <th># SN</th>
    <th> Name</th>
    <th>Email</th>
    <th>Phone No</th>
    <th>Password</th>
    <th>Confirm Password</th>
  </tr> 
</thead>
<tbody>
  @foreach ($clients as $client)
  <tr>
    <td>{{$client->id}}</td>
    <td>{{$client->Client_FirstName}}</td>
    <td> {{$client->Client_Email}}</td>
 <td>{{$client->Client_PhoneNo}}</td>
  <td>{{$client->Client_Password}}</td>
<td>{{$client->Client_Repeat_Password}}</td>
<td>
    <a href=""><button class="btn btn-success">Edit</button></a>
    <a href=""><button class="btn btn-danger">delete</button></a>
</td>
</tr>

  @endforeach  
</tbody>
</table>
@endsection