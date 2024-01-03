<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Doctor;

use App\Models\Specialty;

use App\Models\Room;

use App\Models\Appointments;

class AdminController extends Controller
{
    public function show_Form_add_doctor()
    {
         $specialty = Specialty::all();
         $room = Room::all();
        return view('admin.add_doctor',compact('specialty','room'));
    }

    public function add_doctor(Request $request)
    {
      $doctor_data = new Doctor();
  
      $doctor_data->doctor_name=$request->doctor_name;
      $doctor_data->doctor_phone=$request->doctor_phone;
      $doctor_data->doctor_address=$request->doctor_address;
      $doctor_data->specialty=$request->specialty;
      $doctor_data->room=$request->room;

 

      $image_file = $request->image_file;

      $image_name = time().'.'.$image_file->getClientOriginalExtension();

      $request->image_file->move('doctorimage',$image_name);

      $doctor_data->image_file = $image_name;

      $doctor_data->save();

      return redirect()->back()->with('message','Doctor Added Successfully');
    }

    public function show_All_doctor()
    {
      
        $doctors= Doctor::all();
          return view('admin.show_all_doctors',compact('doctors'));
      }

      public function delete_doctor($id)
      {
        $doctor = Doctor::find($id);
        $doctor->delete();
        return redirect()->back()->with('message','Doctor Successfully Deleted');
      }

 

        public function show_edit_Form_doctor($id)
        {
          $doctor = Doctor::find($id);
          $specialty = Specialty::all();
          $room = Room::all();
        return view('admin.Edit_form_doctor',compact('doctor', 'specialty','room'));
  
}
public function edit_doctor(Request $request, $id)
    {
      $doctor_data = Doctor::find($id);

      $doctor_data->doctor_name=$request->doctor_name;
      $doctor_data->doctor_phone=$request->doctor_phone;
      $doctor_data->doctor_address=$request->doctor_address;
      $doctor_data->specialty=$request->specialty;
      $doctor_data->room=$request->room;
      
      $image_file = $request->image_file;
      if($image_file)
      {
        $image_name = time().'.'.$image_file->getClientOriginalExtension();

        $request->image_file->move('doctorimage',$image_name);
  
        $doctor_data->image_file = $image_name;
      }
      $doctor_data->save();
      return redirect()->back()->with('message','Doctor Successfully Updated');

    }

    public function show_Form_add_specialty()
    {
        
        return view('admin.add_specialty');
    }


    public function add_specialty(Request $request)
    {
      $specialty = new Specialty();
  
      $specialty->specialty=$request->specialty;
      $specialty->specialty_details=$request->specialty_details;
      

      $specialty->save();

      return redirect()->back()->with('message','Specialty Added Successfully');
    }

    public function show_All_specialty()
    {
      
        $specialty= Specialty::all();
          return view('admin.show_all_specialty',compact('specialty'));
      }

      public function show_edit_Form_specialty($id)
      {
        $specialty = Specialty::find($id);
      return view('admin.Edit_form_specialty',compact('specialty'));
    

      }


      public function edit_specialty(Request $request, $id)
      {
        $specialty = Specialty::find($id);

        $specialty->specialty=$request->specialty;
        $specialty->specialty_details=$request->specialty_details;
        
      $specialty->save();

      return redirect()->back()->with('message','Specialty Updated Successfully');
      }

      public function delete_specialty($id)
      {
        $specialty = Specialty::find($id);
        $specialty->delete();
        return redirect()->back()->with('message','Specialty Successfully Deleted');
      }

      public function show_All_rooms()
      {
        
          $room= Room::all();
            return view('admin.show_all_rooms',compact('room'));
        }

        public function show_All_appointments()
        {
          
            $appointments= Appointments::all();
              return view('admin.show_all_appointments',compact('appointments'));
          }

          public function show_edit_Form_appointment(Request $request, $id)
          {
            $appointment = Appointments::find($id);
          $doctor = Doctor::all();
          return view('admin.Edit_form_appointment',compact('appointment','doctor'));
      
          }
      


          public function edit_appointments(Request $request, $id)
    {
      $appointment = Appointments::find($id);

      $appointment->name=$request->name;
      $appointment->email=$request->email;
      $appointment->phone=$request->phone;
      $appointment->doctor=$request->doctor;
      $appointment->date=$request->date;
      $appointment->message=$request->message;
      $appointment->save();
      return redirect()->back()->with('message','Appointment Updated Updated');

    }



}
