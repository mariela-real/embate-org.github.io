<?php

namespace App\Http\Controllers;

use App\Models\ServiceRequests;
use App\Http\Requests\RequestServiceRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;
class ServiceRequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendScheduleAdvice(RequestServiceRequest $request)
    {
        $service_requests = new ServiceRequests();
        $service_requests->firstname = $request->firstname;
        $service_requests->lastname = $request->lastname;
        $service_requests->email = $request->email;
        $service_requests->phone = $request->phone;
        //$service_requests->country_code = $request->country_code;
        $service_requests->subject = $request->subject;
        $service_requests->message = $request->message;
        $service_requests->date = $request->date;
        $service_requests->time = $request->time;
        $service_requests->state = "sent";
        $service_requests->save();

        return redirect()->route('service')->with('register', 'ok');
    }

    public function searchByDate()
    {
        $dateSelected = "2023-12-16";
        $availableTimes = $this->timeSelected();

        $occupiedTimes = ServiceRequests::where('date', $dateSelected)
            ->pluck('time')
            ->toArray();

            $newAvailableTimes = array_diff($availableTimes, $occupiedTimes);

         //   dd($newAvailableTimes);

        return view("contact.advice", compact('newAvailableTimes'));
    }
    public function timeSelected()
    {
        $availableTimes = array('08:30:00', '08:50:00', '09:10:00', '09:30:00', '09:50:00', '10:10:00');
        return $availableTimes;
    }

    public function messageReport()
    {

        $show_messages = ServiceRequests::all();
        return view('contact.notifications', compact('show_messages'));
    }
    public function show($id)
    {
        $show_messages = ServiceRequests::find($id);
        return view('inbox.message', compact('show_messages'));
    }


}
