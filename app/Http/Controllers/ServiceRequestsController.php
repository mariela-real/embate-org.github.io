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
    protected $availableSchedules;

    public function __construct()
    {
        $this->availableSchedules = new AvailableDate();
    }

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
    public function updateDate(RequestServiceRequest $request)
    {
       $dateSelected = $request->input('date');//02-08-2024
      //  $dateSelected = Http::get('http://127.0.0.1:8000/update_date');
      //  $dateSelected = json_decode($response->body(), true);
        $availableTimes = $this->timeAvailablesTimes();
        $occupiedTimes = ServiceRequests::where('date', $dateSelected)
            ->pluck('time')
            ->toArray();

        $newAvailableTimes = array_diff($availableTimes, $occupiedTimes);

        $this->availableSchedules->setSchedule($newAvailableTimes);
        dd($newAvailableTimes);
        return $newAvailableTimes;
    }

    public function updateDate_v()
    {
        $newAvailableTimes2 =  $this->availableSchedules->getSchedule();
        return view("contact.advice", compact('newAvailableTimes2'));
    }

    public function timeAvailablesTimes()
    {
        $availableTimes = array(' ','08:30:00', '08:50:00', '09:10:00', '09:30:00', '09:50:00', '10:10:00');
        return $availableTimes;
    }
    public function timeSelected()
    {
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
