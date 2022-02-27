<x-app-layout>
    
        <div class="container" style="margin-top: 20px">
                <H1>Latest Appointments</H1>
                <table border="1" style="padding: 100px;">
                <tr style="background: #B99566;color:white">
                <th>Name</th>
                <th>Email</th>
                <th>Phone No.</th>
                <th>Date</th>
                <th>Issue</th>
                <th>Status</th>
                <th>Options</th>
            </tr>
                    @foreach ($appointments as $appointment )    
                    <tr style="border: 1px solid;padding:10px;text-align:center">
                    <td  style="border: 1px solid;padding:10px">{{$appointment->Name}}</td>
                    <td  style="border: 1px solid;padding:10px">{{$appointment->Email}}</td>
                    <td  style="border: 1px solid;padding:10px">{{$appointment->Phone}}</td>
                    <td  style="border: 1px solid;padding:10px">{{$appointment->Date}}</td>
                    <td  style="border: 1px solid;padding:10px">{{$appointment->Issue}}</td>
                    <td  style="border: 1px solid;padding:10px">{{$appointment->status}}</td>
                    <td  style="border: 1px solid;padding:10px"><a class="btn btn-primary" href="{{url('approvedappoint',$appointment->id)}}">Approved</a>
                    <a  class="btn btn-danger" style="border:1px solid #B99566 " href="{{"cancelappoint/".$appointment->id}}">Cancel</a></td>
                </tr>
                @endforeach
                
            
            </table>
            </div>
            </div>
    </x-app-layout>
