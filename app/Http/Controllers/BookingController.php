<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Address;

class BookingController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if ($user->role === 'Admin') {
            $bookings = Booking::all();
        } else {
            $bookings = Booking::where('user_id', $user->id)->get();
        }
        return view('bookings.index', compact('bookings'));
    }

    public function getTowServiceBookings()
    {
        $bookings = Booking::where('issue_type', 'tow')->get();
        return view('bookings.tow-service', compact('bookings'));
    }

    public function getMechanicServiceBookings()
    {
        $bookings = Booking::where('issue_type', 'mechanic')->get();
        return view('bookings.mechanic-service', compact('bookings'));
    }

    public function create()
    {
        $addresses = Address::all();

        return view('bookings.create', compact('addresses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'problem_description' => 'required|string',
            'issue_type' => 'required|in:tow,mechanic',
            'address_id' => 'required|exists:addresses,id',
        ]);

        $booking = new Booking();
        $booking->user_id = Auth::id();
        $booking->problem_description = $request->input('problem_description');
        $booking->issue_type = $request->input('issue_type');
        $booking->address_id = $request->input('address_id');
        $booking->save();

        return redirect()->route('bookings.index')->with('success', 'Booking created successfully.');
    }

    public function updateStatus(Booking $booking)
    {
        $booking->status = true;
        $booking->fixer_id = Auth::id();
        $booking->save();

        return redirect()->back()->with('success', 'Booking status updated successfully.');
    }
}
