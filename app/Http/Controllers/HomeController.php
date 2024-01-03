<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Doctor;

use App\Models\Appointments;

class HomeController extends Controller
{
   public function redirect()
   {
    if(Auth::id())
    {
        if(Auth::user()->userType=='0')
        {
            $doctors= Doctor::all();
    return view('user.home',compact('doctors'));
        }else
        {
            return view('admin.home');  
        }
    }else
    {
        $doctors= Doctor::all();
        return view('user.home',compact('doctors'));  
    }
   }

   public function index(){
    $doctors= Doctor::all();
    return view('user.home',compact('doctors'));
   }

   public function add_appointment(Request $request)
   {
    if(Auth::id())
    {
        $appointment = new Appointments();
        $user_id = Auth::user()->name;
        $appointment->name=$request->name;
        $appointment->email=$request->email;
        $appointment->phone=$request->phone;
        $appointment->doctor=$request->doctor;
        $appointment->date=$request->date;
        $appointment->message=$request->message;
        $appointment->status="Pending";
        $appointment->user_id=$user_id;
   
        $appointment->save();
   
        return redirect()->back()->with('message','Appointment Added Successfully');
    }else
    {
        return redirect('login');
    }
     
   }



 
}
