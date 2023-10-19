<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $majors = Major::get();
        return view('admin.majors', compact('majors'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create_major') ;
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $major = $request->validate(
        [
            'title' =>'required',
            'image' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],
        [
            'title.required' => 'The Major Title  is required.',
            'image.required' => 'The Major Image  is required.',
            'image.image' => 'The Major Image must be an image.',
            'image.mimes' => 'The Major Image must be an image.',
            'image.max' => 'The Major Image may not be greater than 2MB.',
        ]
       ) ;
       $file = $major['image'] ;
       if ($file) {
           $fileName = $file->getClientOriginalName() ;
           $file->move(public_path('uploads'), $fileName) ;
       }
        $major['image'] = $fileName ;
        Major::create($major) ;
        return redirect()->route('View_Majors')->with('success' , "The major is Created      Successfully") ; ;
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
        $major = Major::find($id) ; 
        return view('admin.edit_major' , compact('major')) ;  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $major = $request->validate(
            [
                'title' =>'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ] , 
            [
                'title.required' => 'The Major Title  is required.',
                'image.required' => 'The Major Image  is required.',
                'image.image' => 'The Major Image must be an image.',
                'image.mimes' => 'The Major Image must be a jpeg,png,jpg,gif,svg file.',
                'image.max' => 'The Major Image may not be greater than 2MB.',
            ]
        ) ;
       $file = $major['image'] ;
       if ($file) {
           $fileName = $file->getClientOriginalName() ;
           $file->move(public_path('uploads'), $fileName) ;
       }
       $major = Major::find($id) ;
       $major->title = $request->title ;
       $major->image = $fileName ;
       $major->save() ;
       return redirect()->route('View_Majors')->with('success' , "The major is Updated Successfully") ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            Major::find($id)->delete() ;
            return redirect()->route('View_Majors')->with('danger', 'The Major Is Deleted Successfully');  ;
            
        } catch (\PDOException $th) {
            return redirect()->route('View_Majors')->with('danger', 'The Major is Failed to Delete it , Please Delete The Doctors of That Major Any Then Try Again');
        }
        
    }
}
