<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // show all addresses in view address.index and send addresses to the view
        return view('address.index', ['addresses' => Address::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // give form for creating a new address
        return view('address.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'subcity' => 'required|string',
            'woreda' => 'required|string',
        ]);

        // Create a new Address instance with the validated data
        $address = Address::create($validatedData);

        // Optionally, you can perform additional actions, such as displaying a success message or redirecting to a different page

        // Redirect to a specific route or URL
        return redirect()->route('address.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Address $address)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Address $address)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Address $address)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Address $address)
    {
        //
    }
}
