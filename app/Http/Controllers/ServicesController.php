<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Prices;

class ServicesController extends Controller
{
    public function viewPrice(Request $request){
        $services = Service::all();
        $servicesId = $request->route('servicesId');
        $prices = null;
        $message = null;

        if ($servicesId) {
            $prices = Prices::where('services_id', $servicesId)->get();

            if ($prices->isEmpty()) {
                $message = 'Цены не найдены для данного сервиса.';
            }
        }

        $serviceTitle = null;
        $service = Service::find($servicesId);
            if ($service) {
                $serviceTitle = $service->title;
            }

        return view('services', compact('services', 'prices', 'message', 'servicesId', 'serviceTitle'));
    }
}

