<?php

namespace App\Http\Controllers;


use App\Models\ServiceRequests;
use App\Models\AvailableDate;
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
        $service_requests->phone = $request['phone']['full'];
        $service_requests->subject = $request->subject;
        $service_requests->message = $request->message;
        $service_requests->date = $request->date;
        $service_requests->time = $request->time;
        $service_requests->state = "sent";
        $service_requests->save();

        return redirect()->route('service');
    }

    public function searchByDate()
    {
        $requests = ServiceRequests::all();
        return view("contact.advice", compact('requests'));
    }
    public function updateDate()
    {
        $dateSelected = '2024-02-08';
        $availableTimes = $this->timeAvailablesTimes();
        $occupiedTimes = ServiceRequests::where('date', $dateSelected)
            ->pluck('time')
            ->toArray();
        $newAvailableTimes = array_diff($availableTimes, $occupiedTimes);

        return view("contact.advice", compact('newAvailableTimes'));
    }


    public function timeAvailablesTimes()
    {
        $availableTimes = array(' ','08:30:00', '08:50:00', '09:10:00', '09:30:00', '09:50:00', '10:10:00');
        return $availableTimes;
    }
    public function timeSelected()
    {
        //TODO I need to get data from DB, then I need to return those after validate
        /*$occupiedTimes = ServiceRequests::where('date', $dateSelected)
            ->pluck('time')
            ->toArray();*/

        $availableTimes = array(' ','08:30:00', '08:50:00', '09:10:00', '09:30:00', '09:50:00', '10:10:00');
        return view("contact.advice", compact('availableTimes'));
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
