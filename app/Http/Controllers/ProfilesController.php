<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Profile;
use Auth;
use Session;

class ProfilesController extends Controller
{
    
    public function index(Request $request)
    {
        if(Session('tid')==null){
            return redirect('/loginc');

            
        }
        else{
            $search=$request['search']?? "";
            if($search !=""){
                $profiles=Profile::where('Specialized_In','Like',"%$search%")->orwhere('Profile_Experince','like',"%$search%")->get();
    
            }
            else {
                $profiles = Profile::all();    
            }
    
            
            return view('Profiles.index',compact('profiles','search'));
        }
       
    }


    public function create()
    {
        $id=Auth::user();
        return View('Profiles.create',compact('id'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'image'=>'required|mimes:png,jpg,jpeg|max:5048',
            'experience'=>'required',
            'specialized'=>'required',
            'totalcases'=>'required',
            'description'=>'required',
 
        ]);
          
       $lid=Auth::id();
    //    dd($lid);
       
       
    
        $newimagename = time() . '-'.$request->experience . '.'.$request->image->extension();
        $request->image->move(public_path('storage/uploads'),$newimagename);

        $profile=profile::create([
           

            'Profile_Pic_path'=>$newimagename,
            'id'=>$lid,
            //dd($lid),
           //'id'=>$id,
            'Profile_Experince'=>$request->input('experience'),
            'Specialized_In'=>$request->input('specialized'),
            'Total_cases'=>$request->input('totalcases'),
            'Profile_Description'=>$request->input('description')
         
        ]);

        return redirect('/');
    }

    public function show($id)
    {

    }

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

    public function destroy($id)
    {
        //
    }

    public function ProfileDetail($id){

        $profiles= Profile::find($id);
         $profiles->update();
        return view('Profiles.ProfilePage',['Profiles'=>$profiles]);

    }


    //Admin Profile
    public function ShowProfile(){
        $profiles = Profile::all();    
        return view('profiles.show',compact('profiles'));

    }

}
