@extends('layouts.website')


@section('content')

<style>

  .container{
    
    margin-bottom: 80px;
    margin-top: 100px
    

  }
  span{
    font-size:18px;
  }
  .card{
    border: 1px solid #B99566;
    border-radius: 8px
  }
  .card-body{
    padding: 10px
  }
  img{
    border-top-right-radius: 8px;
    border-top-left-radius: 8px
  }
  .col-md-4{
   margin-bottom: 50px
  }

</style>
<div class="container">
    <div class="row">
        @foreach ($profiles as $profile )
          <div class="col-md-4">
        <div class="card">
        <img src="storage/uploads/{{ $profile->Profile_Pic_path}}" alt="" style="width: 100%;height:250px">
        <div class="card-body">
        <h4><b><a href="{{"profilepage/".$profile->id}}">{{$profile->Profile_Description}}</a></b></h4>
        <span>Specialized In <b>{{$profile->Specialized_In}}</b></span><br>
        <span>Total Complete Case: <b>{{$profile->Total_cases}}</b></span><br>
        <span>Experience Of : {{$profile->Profile_Experince}} Years</span>
        

    </div>
  </div>
</div>
    @endforeach
</div>
</div>

@endsection
