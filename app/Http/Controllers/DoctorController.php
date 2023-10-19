<?php

namespace App\Http\Controllers;

use App\Models\Major;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::get();
        return view('admin.doctors', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $majors = Major::get();

        return view('admin.create_doctor', compact('majors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $doctor = $request->validate(
            [
                'name' => 'required|min:5|max:20',
                'major' => 'required',
                'bio' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],
            [
                'name.required' => 'Doctor Name is required',
                'name.min' => 'Doctor Name must be at least 5 characters',
                'name.max' => 'Doctor Name cannot be more than 20 characters',
                'bio.required' => 'Doctor Bio is required',
                'major.required' => 'Doctor Major is required',
                'image.image' => 'The Doctor Image must be an image.',
                'image.mimes' => 'The Doctor Image must be an image.',
                'image.max' => 'The Doctor Image may not be greater than 2MB.',
            ]
        );

        $image = $doctor['image'];
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads'), $imageName);
        $major_name = $doctor['major'];
        $major_id = Major::select('id')->where('title', '=', "$major_name")->get()[0]->id;
        Doctor::create(
            [
                'name' => $doctor['name'],
                'major_id' => $major_id,
                'bio' => $doctor['bio'],
                'image' => $imageName,
            ]
        );
        return redirect()->route('View_Doctors')->with('success', 'The Doctor is Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $majors = Major::get();
        $doctor = Doctor::find($id);
        return view('admin.edit_doctor', ['doctor' => $doctor, 'majors' => $majors]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated_doctor = $request->validate(
            [
                'name' => 'required|min:5|max:20',
                'major' => 'required',
                'bio' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],
            [
                'name.required' => 'Doctor Name is required',
                'name.min' => 'Doctor Name must be at least 5 characters',
                'name.max' => 'Doctor Name cannot be more than 20 characters',
                'bio.required' => 'Doctor Bio is required',
                'major.required' => 'Doctor Major is required',
                'image.image' => 'The Doctor Image must be an image.',
                'image.mimes' => 'The Doctor Image must be an image.',
                'image.max' => 'The Doctor Image may not be greater than 2MB.',
            ]
        );
        $doctor = Doctor::find($id);
        $doctor->name = $updated_doctor['name'];
        $doctor->bio = $updated_doctor['bio'];
        $major_name = $updated_doctor['major'];
        $major_id = Major::select('id')->where('title', '=', "$major_name")->get();
        $doctor->major_id = $major_id[0]->id;
        $file = $updated_doctor['image'];
        if ($file) {
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('uploads'), $file_name);
        }
        $doctor->image = $file_name;
        $doctor->save();
        return redirect()->route('View_Doctors')->with('success', 'The Doctor is Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            Doctor::find($id)->delete();
            return redirect()->route('View_Doctors')->with('danger', 'The Doctor is Deleted Successfully');
            
        } catch (\PDOException $th) {
            return redirect()->route('View_Doctors')->with('danger', 'The Doctor is Failed to Delete it');

        }

    }
}
