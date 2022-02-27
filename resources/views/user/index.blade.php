@extends('layouts.admin')

@section('content')
<br><br>
<div class="container" style="margin-top: 20px">
    <H1 style="padding-left: 50px">Latest Lawyers</H1>
    <table  class="table table-dark table-striped mt-3">
    <tr >
    <th># SN</th>
    <th>Name</th>
    <th>Email</th>
    <th>Password</th>
</tr>
        @foreach ($users as $user)    
        <tr>
        <td >{{$user->id}}</td>
        <td >{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->password}}</td>
    </tr>
    @endforeach
    

</table>
</div>
</div>

@endsection