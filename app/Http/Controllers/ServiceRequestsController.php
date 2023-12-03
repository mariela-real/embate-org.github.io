<?php

namespace App\Http\Controllers;

use App\Models\ServiceRequests;
use App\Http\Requests\RequestServiceRequest;
use Illuminate\Http\Request;

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
        $service_requests->firstName = $request->firstname;
        $service_requests->lastName = $request->lastname;
        $service_requests->email = $request->email;
        $service_requests->subject = $request->subject;
        $service_requests->message = $request->message;
        $service_requests->date = $request->date;
        $service_requests->time = $request->time;
        $service_requests->state = "sent";
        $service_requests->save();

        return redirect()->route('service')->with('register', 'ok');
    }
   /* public function messageReport()
    {
        $show_messages = ServiceRequests::all();
        return view('admin', compact('show_messages'));
    }*/
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
