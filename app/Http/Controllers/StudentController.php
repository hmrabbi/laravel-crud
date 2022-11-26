<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;
//use App\Models\User;
//use App\Models\Student;

class StudentController extends Controller
{
    public function student(){
        return view('student');
    }

    public function addstd(Request $request){
        $data = new student;
        $image = $request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('studentimage',$imagename);
        $data->image=$imagename;
        $data->name=$request->name;
        $data->depertment=$request->depertment 	;
        $data->fathername=$request->fathername;
        $data->mothername=$request->mothername;
        $data->address=$request->address;
        $data->email=$request->email;
        $data->save();
        return redirect()->back();
    }

    public function displaystd(){
        $data = student::all();
        return view('display',compact('data'));
    }

    public function stddelete($id){
        $data = student::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function stdupdate($id){
        $data=student::find($id);
        return view('update',compact('data'));
    }

    public function update(Request $request,$id){
        $data=student::find($id);
        $image = $request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('studentimage',$imagename);
        $data->image=$imagename;
        $data->name=$request->name;
        $data->depertment=$request->depertment 	;
        $data->fathername=$request->fathername;
        $data->mothername=$request->mothername;
        $data->address=$request->address;
        $data->email=$request->email;
        $data->save();
        return redirect()->back();
    }


}
