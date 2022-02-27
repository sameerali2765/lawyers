<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Profile;
use Client;
use Auth;
use Session;


class AppointmentsController extends Controller
{
 
    public function index(Request $request)
    {
        // $Name=$request['name']?? "";
        // $appointments = Appointment::where('Name','=','$Name');
        $lid=Auth::id();
       // dd($lid);
         $appointments = Appointment::where('Lawyer_Id','=',$lid)->get();
         
        // dd($appointments);
        
           return View('appointment.index',compact('appointments'));
    }
  public function create($id)
    {
    
        $profiles= Profile::find($id);
        $profiles->update();
        return view('appointment.create',compact('id'),['Profiles'=>$profiles]);

    }

    public function store(Request $request)
    { 
    
        // $lid=Auth::id();
        // dd($lid);

        $appointments =new Appointment;
        $appointments->Name=$request->input('Name');
        $appointments->Email=$request->input('Email');
        $appointments->Phone=$request->input('PhoneNo');
        $appointments->Date=$request->input('Date');
        $appointments->Issue=$request->input('Issue');
        $appointments->status=$request->input('status');
        $appointments->Lawyer_Id=$request->input('LawyerId');
        $appointments->Client_Id=$request->input('ClientId');
       // dd($appointments);
        $appointments->save();
        return redirect('/p');    
    }

    public function show($id)
    {
    
        

    }

    public function edit($id)
    {
        
        
    }

    public function update(Request $request, $id)
    {
    
        
    }

    public function destroy($id)
    {
        
    }

    public function approved($id){
       
        
        $data=Appointment::find($id);
        $data->status="Approved";
        $data->save();

        return redirect('/appointment'); 
    }


    public function Cancel($id){
       
        $data=Appointment::find($id);
        $data->status="Cancelled";
        $data->save();
        return redirect('/appointment');


       
    }
    public function ShowAppointment(){
        $appointments = Appointment::all(); 
      

        return View('appointment.showappointment',compact('appointments'));
    }



}