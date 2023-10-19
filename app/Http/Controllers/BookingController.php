<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $bookings = Booking::get() ;
       return view('admin.bookings',compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id , string $status)
    {
        $booking = Booking::find($id) ;
        if ($status == 'confirmed') {
            $booking->status = 'confirmed' ;
            $booking->save() ;
            return redirect()->route('View_Bookings')->with('success' ,"the Booking is Confirmed") ;
        }elseif($status == 'rejected'){
            $booking->status ='rejected' ;
            $booking->save() ;
            return redirect()->route('View_Bookings')->with('danger',"the Booking is Rejected") ;
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Booking::find($id)->delete();

        return redirect()->route('View_Bookings')->with('danger', 'The Booking is Deleted Successfully');
    }
}
