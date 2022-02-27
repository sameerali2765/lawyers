<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Client;
use Auth;
use App\Mail\Regsiteremail;
use Illuminate\Support\Facades\Mail;
use Session;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = DB::select('select * from clients');
        return view('Clients.index', [
            'clients' => $clients
        ]);
    }

    public function create()
    {
       
        return view('Clients.create');
    }


    public function store(Request $request)
    {
        // dd($request)
        $clients =new client;
        $clients->Client_FirstName=$request->input('firstname');
        $clients->Client_LastName=$request->input('lastname');
        $clients->Client_Email=$request->input('email');
        $clients->Client_PhoneNo=$request->input('number');
        $clients->Client_Password=$request->input('password');
        $clients->Client_Repeat_Password=$request->input('repeatpassword');
        $clients->save();
        //Session(['lid'=>"<script>Thanks For Registration In Lawyer.com</script>"]);
        return redirect('/');   
         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function login()
    {
        return view('Clients.loginclient');
    }

    public function PostLogin(Request $req){

        $req->validate([
            'email'=>'required|email',
            'password'=>'required|max:12'
        ]);
        $clients=Client::where('Client_Email','=',$req->email)->first();
        if($clients){
            if(Client::where($req->password, $clients->password)){
                Session(['tid'=>$clients->id]);
                $req->session()->put('Id',$clients);
                return redirect('/');
            }
        }
        else {
            return back()->with('fail','this email is not recognized');
        }
    }

    public function Logout(Request $request){
        
        $request->session()->forget('tid');
        return redirect('/');
        
    }
     
    }
