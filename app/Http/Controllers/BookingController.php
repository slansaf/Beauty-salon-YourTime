<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Service;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function create(Request $request, $serviceId = null)
    {   
        $firstname = $request->input('firstname');
        $phone = $request->input('phone');
        $discount = $request->input('discount', 0);

        $services = Service::all();
        return view('service', compact('services', 'firstname', 'phone', 'discount', 'serviceId'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'service_id' => 'required|exists:services,id',
            'user_name' => 'required|string|max:255',
            'user_phone' => 'required|string|max:15',
            'appointment_time' => 'required|date',
        ]);

        Booking::create($request->all());

        return redirect()->route('service')->with('success', 'Запись успешно создана!');
    }
}
