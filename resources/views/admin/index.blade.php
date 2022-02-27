@extends('layouts.admin')

@section('content')
<br><br>
<div class="container" style="margin-top: 20px">
    <H1 style="padding-left: 50px;display:inline">Admins</H1>
<br><br>
   
    <table class="table table-dark table-striped mt-3">
    <tr>
    <th># SN</th>
    <th> Name</th>
    <th>Email</th>
    <th>Username</th>
    <th>Password</th>
    <th>Options</th>
</tr>
        @foreach ($admins as $admin)    
        <tr >
        <td >{{$admin->id}}</td>
        <td >{{$admin->Name}}</td>
        <td>{{$admin->Email}}</td>
        <td>{{$admin->Username}}</td>
        <td>{{$admin->Password}}</td>
        <td>
            <a href=""  style="background:rgb(46, 102, 224);
                               color:white;
                               font-size:23px;
                               padding:10px;"><i class="fa fa-edit"></i></a>
            <a href="#" style="background:rgba(240, 6, 6, 0.801);
            color:white;
            font-size:23px;
            padding:10px;"><i class="fa fa-trash"></i></a>
        </td>
    </tr>
    @endforeach
    

</table>
</div>

@endsection