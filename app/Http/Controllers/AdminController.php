<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;
use Session;

class AdminController extends Controller
{


    public function index()
    {
        if(Session('aid')==null){
            return redirect('/AdminLogin');

        }
        else{
            
            $admins = Admin::all();
            return view('admin.index', [
                'admins' => $admins
            ]);
        }
       
    }

    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function Login(){

        return view('admin.login');
    }

    
    public function PostLogin(Request $req){

        $admin=Admin::where('Username','=',$req->username)->first();
        if($admin){
            if(Admin::where($req->password, $admin->Password)){
                Session(['aid'=>$admin->id]);
                Session(['aname'=>$admin->Name]);
                $req->session()->put('Id',$admin);
                return redirect('/AdminDashboard');
            }
        }
        else {
            return back()->with('fail','this email is not recognized');
        }
    }
    
    public function Logout(Request $request){

        $request->session()->forget('aid');       
        $request->session()->forget('aname');
        return redirect('/AdminLogin');
        
    }

}
