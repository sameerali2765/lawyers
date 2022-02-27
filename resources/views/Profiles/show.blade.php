@extends('layouts.admin')

@section('content')
<div class="container" style="margin-top: 20px">
    <H1 style="padding-left: 50px;display:inline">Latest Profiles</H1>
    <br><br>
    <table  class="table table-dark table-striped mt-3">
    <tr>
    <th># SN</th>
    <th>Profile Descrition</th>
    <th>Profile Experience</th>
    <th>Specialized In</th>
    <th>Total Cases</th>
    
    <th>Profile Pic</th>
</tr>
        @foreach ($profiles as $profile)    
        <tr>
        <td>{{$profile->id}}</td>
        <td>{{$profile->Profile_Description}}</td>
        <td>{{$profile->Profile_Experince}}</td>
        <td>{{$profile->Specialized_In}}</td>
        <td>{{$profile->Total_cases}}</td>
        
        <td><img src="storage/uploads/{{ $profile->Profile_Pic_path}}" alt="Profile Pic" width="100px" height="80%"></td>
    </tr>
    @endforeach
    

</table>
</div>
</div>

@endsection