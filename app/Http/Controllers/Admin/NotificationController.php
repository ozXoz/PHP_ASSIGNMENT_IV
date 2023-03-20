<?php

namespace App\Http\Controllers\Admin;

use App\Models\Notification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class NotificationController extends Controller
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
        return view('admin.notifications.index', ['notifications' => Notification::get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.notifications.create');
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
            'name' => 'required|max:255',
            'type' => 'required|max:255',
        ]);

        if ($validator->fails()) return redirect()->back()->withErrors($validator->errors());

        $notification = new Notification();

        $notification->name = $request->get('name');
        $notification->type = $request->get('type');
        $notification->status = $request->get('status', 0);

        $notification->save();
        logAction(\Auth::user()->id, 'notification', 'add notification', $request->ip());
        return redirect()->intended(route('admin.notifications'));
    }

    /**
     * Display the specified resource.
     *
     * @param User $notification
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Notification $notification, Request $request)
    {
        logAction(\Auth::user()->id, 'notification', 'view notification', $request->ip());
        return view('admin.notifications.show', ['notification' => $notification]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $notification
     * @return \Illuminate\Http\Response
     */
    public function edit(Notification $notification)
    {
        return view('admin.notifications.edit', ['notification' => $notification]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param User $notification
     * @return mixed
     */
    public function update(Request $request, Notification $notification)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'type' => 'required|max:255'
        ]);

        if ($validator->fails()) return redirect()->back()->withErrors($validator->errors());

        $notification->name = $request->get('name');
        $notification->type = $request->get('type');
        $notification->status = $request->get('status', 0);

        $notification->save();
        logAction(\Auth::user()->id, 'notification', 'update notification', $request->ip());
        return redirect()->intended(route('admin.notifications'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $status = Notification::destroy($id);

        logAction(\Auth::user()->id, 'notification', 'delete notification', $request->ip());
        if($status)
        {
            return redirect()->route('admin.notifications')->withFlashSuccess('User Deleted Successfully!');
        }

        return redirect()->route('admin.notifications')->withFlashDanger('Unable to Delete User!');
    }
}
