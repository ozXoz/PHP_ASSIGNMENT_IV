<?php

namespace App\Http\Controllers\Admin;

use App\Models\ClientEvent;
use App\Models\Client;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class ClientEventController extends Controller
{

    /**
     * Construct
     * 
     */
    public function __construct()
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('admin.client_events.index', ['client_events' => ClientEvent::with('client')->with('notification')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.client_events.create', ['notifications' => Notification::get(), 'clients' => Client::get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'notification_id' => 'required',
            'client_id' => 'required',
            'start_time' => 'required',
            'frequency' => 'required'
        ]);

        if ($validator->fails()) return redirect()->back()->withErrors($validator->errors());

        $client_event = new ClientEvent();

        $client_event->notification_id = $request->get('notification_id');
        $client_event->client_id = $request->get('client_id');
        $client_event->start_time = $request->get('start_time');
        $client_event->frequency = $request->get('frequency');
        $client_event->status = $request->get('status', 0);

        $client_event->save();
        logAction(\Auth::user()->id, 'client events', 'add client event', $request->ip());

        return redirect()->intended(route('admin.client_events'));
    }

    /**
     * Display the specified resource.
     *
     * @param User $client_event
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(ClientEvent $client_event, Request $request)
    {
        logAction(\Auth::user()->id, 'client events', 'show client event', $request->ip());
        return view('admin.client_events.show', ['client_event' => ClientEvent::with('client')->with('notification')->where('id', $client_event->id)->first()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $client_event
     * @return \Illuminate\Http\Response
     */
    public function edit(ClientEvent $client_event)
    {
        return view('admin.client_events.edit', ['client_event' => $client_event, 'notifications' => Notification::get(), 'clients' => Client::get()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param User $client_event
     * @return mixed
     */
    public function update(Request $request, ClientEvent $client_event)
    {
        $validator = Validator::make($request->all(), [
            'notification_id' => 'required',
            'client_id' => 'required',
            'start_time' => 'required',
            'frequency' => 'required'
        ]);

        if ($validator->fails()) return redirect()->back()->withErrors($validator->errors());

        $client_event->notification_id = $request->get('notification_id');
        $client_event->client_id = $request->get('client_id');
        $client_event->start_time = $request->get('start_time');
        $client_event->frequency = $request->get('frequency');
        $client_event->status = $request->get('status', 0);

        $client_event->save();
        logAction(\Auth::user()->id, 'client events', 'update client event', $request->ip());

        return redirect()->intended(route('admin.client_events'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $status = ClientEvent::destroy($id);
        logAction(\Auth::user()->id, 'client events', 'delete client event', $request->ip());

        if($status)
        {
            return redirect()->route('admin.client_events')->withFlashSuccess('Client Event Deleted Successfully!');
        }

        return redirect()->route('admin.client_events')->withFlashDanger('Unable to Delete a client event!');
    }
}
